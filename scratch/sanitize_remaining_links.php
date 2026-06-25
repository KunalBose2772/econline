<?php
require_once 'config/config.php';

// Set dry-run to true by default for safety. Toggle to false to execute database writes.
$dry_run = false;

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "====================================================" . PHP_EOL;
    echo "SEO INTERNAL LINK SANITIZATION - DRY RUN: " . ($dry_run ? "ON" : "OFF") . PHP_EOL;
    echo "====================================================" . PHP_EOL;

    // 1. Build the dynamic keyword map from all pages in the database
    $stmt = $pdo->query("SELECT id, slug, title FROM econline_pages ORDER BY id ASC");
    $all_pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $keywords_map = [];
    
    // Add manual high-intent entity mappings
    $manual_mappings = [
        'Patta Chitta' => '/patta-chitta-ec-online/',
        'Bhoomi RTC' => '/bhoomi-ec-online/',
        'Bhoomi EC' => '/bhoomi-ec-online/',
        'Kaveri Online Services' => '/kaveri-online-services-ec/',
        'Kaveri Online' => '/kaveri-online-ec/',
        'TNREGINET' => '/tnreginet/'
    ];
    
    foreach ($manual_mappings as $kw => $url) {
        $keywords_map[strtolower($kw)] = [
            'original_kw' => $kw,
            'url' => $url
        ];
    }
    
    // Add dynamically generated mappings from slugs
    foreach ($all_pages as $p) {
        $slug = $p['slug'];
        if ($slug === 'home' || $slug === 'index' || empty($slug)) {
            continue;
        }
        
        $kw = str_replace('-', ' ', $slug);
        $keywords_map[strtolower($kw)] = [
            'original_kw' => $kw,
            'url' => '/' . $slug . '/'
        ];
    }
    
    // Sort the keywords map by key length descending to ensure longest phrases are matched first
    uksort($keywords_map, function($a, $b) {
        return strlen($b) <=> strlen($a);
    });
    
    echo "Built keyword map with " . count($keywords_map) . " unique keywords." . PHP_EOL;
    
    // 2. Define the tag-safe, case-preserving smart replacement function
    function smart_link_replace($html, $keyword, $link_url) {
        $parts = preg_split('/(<[^>]+>)/si', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        $tag_stack = [];
        $replaced = false;
        $forbidden_parents = ['a', 'option', 'script', 'style', 'textarea', 'code', 'select', 'button', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
        
        foreach ($parts as $i => $part) {
            if ($i % 2 !== 0) {
                if (preg_match('/^<([a-z0-9]+)\b/i', $part, $matches)) {
                    $tag_name = strtolower($matches[1]);
                    $void_elements = ['area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source', 'track', 'wbr'];
                    if (!in_array($tag_name, $void_elements) && !str_ends_with(trim($part, ' >'), '/')) {
                        $tag_stack[] = $tag_name;
                    }
                } elseif (preg_match('/^<\/([a-z0-9]+)>/i', $part, $matches)) {
                    $tag_name = strtolower($matches[1]);
                    if (!empty($tag_stack)) {
                        $last = end($tag_stack);
                        if ($last === $tag_name) {
                            array_pop($tag_stack);
                        }
                    }
                }
                continue;
            }
            
            $is_forbidden = false;
            foreach ($tag_stack as $active_tag) {
                if (in_array($active_tag, $forbidden_parents)) {
                    $is_forbidden = true;
                    break;
                }
            }
            
            if (!$is_forbidden && !$replaced) {
                $quoted_kw = preg_quote($keyword, '/');
                $pattern = '/\b' . $quoted_kw . '\b/i';
                
                if (preg_match('/[^\w\s]/u', $keyword)) {
                    $pattern = '/(?<![a-zA-Z0-9])' . $quoted_kw . '(?![a-zA-Z0-9])/i';
                }
                
                if (preg_match($pattern, $part)) {
                    $parts[$i] = preg_replace_callback($pattern, function($m) use ($link_url) {
                        return '<a href="' . $link_url . '">' . $m[0] . '</a>';
                    }, $part, 1);
                    $replaced = true;
                }
            }
        }
        
        return [implode('', $parts), $replaced];
    }
    
    // 3. Process pages starting from Page 41 (index 40 onwards)
    $pages_to_process = array_slice($all_pages, 40);
    echo "Processing " . count($pages_to_process) . " pages (starting from Page 41: '" . $pages_to_process[0]['slug'] . "')." . PHP_EOL . PHP_EOL;
    
    $total_updates = 0;
    
    foreach ($pages_to_process as $index => $page) {
        $id = $page['id'];
        $slug = $page['slug'];
        $page_num = $index + 41;
        
        // Fetch full content
        $content_stmt = $pdo->prepare("SELECT content FROM econline_pages WHERE id = ?");
        $content_stmt->execute([$id]);
        $content = $content_stmt->fetchColumn();
        
        $new_content = $content;
        $page_updated = false;
        $linked_keywords = [];
        
        foreach ($keywords_map as $kw_lower => $info) {
            $kw = $info['original_kw'];
            $url = $info['url'];
            
            // Prevent self-linking
            if ($slug === trim($url, '/')) {
                continue;
            }
            
            list($temp_content, $replaced) = smart_link_replace($new_content, $kw, $url);
            if ($replaced) {
                $new_content = $temp_content;
                $page_updated = true;
                $linked_keywords[] = "'$kw' -> '$url'";
            }
        }
        
        if ($page_updated) {
            $total_updates++;
            echo "Page #{$page_num} [ID: {$id}, Slug: {$slug}]:" . PHP_EOL;
            foreach ($linked_keywords as $link_info) {
                echo "  ✓ Linked: {$link_info}" . PHP_EOL;
            }
            
            if (!$dry_run) {
                $update_stmt = $pdo->prepare("UPDATE econline_pages SET content = ? WHERE id = ?");
                $update_stmt->execute([$new_content, $id]);
                echo "  SUCCESS: Database updated." . PHP_EOL;
            }
            echo PHP_EOL;
        }
    }
    
    echo "====================================================" . PHP_EOL;
    echo "SUMMARY" . PHP_EOL;
    echo "====================================================" . PHP_EOL;
    echo "Total pages scanned: " . count($pages_to_process) . PHP_EOL;
    echo "Total pages with new links: " . $total_updates . PHP_EOL;
    echo "Dry run: " . ($dry_run ? "YES (No DB writes performed)" : "NO (DB updated successfully)") . PHP_EOL;
    echo "====================================================" . PHP_EOL;
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
