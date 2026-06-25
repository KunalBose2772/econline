<?php
require_once 'config/config.php';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "====================================================" . PHP_EOL;
    echo "SEO INTERNAL LINK INTEGRITY & CRAWLABILITY AUDIT" . PHP_EOL;
    echo "====================================================" . PHP_EOL;

    // 1. Fetch all page slugs to build a valid target registry
    $stmt = $pdo->query("SELECT id, slug, title FROM econline_pages ORDER BY id ASC");
    $all_pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $valid_slugs = [];
    foreach ($all_pages as $p) {
        $valid_slugs[] = trim($p['slug'], '/');
    }
    
    // Add manual/static valid targets if any
    $valid_slugs[] = 'home';
    $valid_slugs[] = 'index';
    
    echo "Total valid page slugs registered: " . count($valid_slugs) . PHP_EOL;

    // 2. Fetch all content and analyze the anchor tags
    $total_links_found = 0;
    $broken_links = [];
    $self_links = [];
    $nested_links_count = 0;
    $pages_with_links = 0;
    $total_pages = count($all_pages);

    foreach ($all_pages as $page) {
        $id = $page['id'];
        $slug = trim($page['slug'], '/');
        
        // Fetch content
        $content_stmt = $pdo->prepare("SELECT content FROM econline_pages WHERE id = ?");
        $content_stmt->execute([$id]);
        $content = $content_stmt->fetchColumn();
        
        // Find all anchor tags
        // Match <a href="...">text</a> or similar
        preg_match_all('/<a\s+[^>]*href=["\']([^"\']*)["\'][^>]*>(.*?)<\/a>/si', $content, $matches, PREG_SET_ORDER);
        
        if (!empty($matches)) {
            $pages_with_links++;
            $page_link_count = count($matches);
            $total_links_found += $page_link_count;
            
            foreach ($matches as $match) {
                $url = $match[1];
                $link_text = $match[2];
                
                // Parse target slug
                // Handles relative paths like /slug/ or /slug
                $target_slug = trim((string)parse_url($url, PHP_URL_PATH), '/');
                
                // Check for absolute URL leak
                if (str_contains($url, 'econline.in')) {
                    $broken_links[] = [
                        'page_id' => $id,
                        'page_slug' => $slug,
                        'target' => $url,
                        'reason' => 'Absolute URL reference leaked'
                    ];
                }
                
                // Check for self-linking
                if ($target_slug === $slug) {
                    $self_links[] = [
                        'page_id' => $id,
                        'page_slug' => $slug,
                        'target' => $url,
                        'text' => $link_text
                    ];
                }
                
                // Check if target slug exists in database (excluding external links or anchors/hashes)
                if (!empty($target_slug) && !str_starts_with($url, 'http') && !str_starts_with($url, '#') && !str_starts_with($url, 'mailto:') && !str_starts_with($url, 'tel:')) {
                    if (!in_array($target_slug, $valid_slugs)) {
                        $broken_links[] = [
                            'page_id' => $id,
                            'page_slug' => $slug,
                            'target' => $url,
                            'reason' => "Target slug '/$target_slug/' does not exist in DB"
                        ];
                    }
                }
            }
        }
    }

    echo "Total pages scanned: $total_pages" . PHP_EOL;
    echo "Pages containing internal/external links: $pages_with_links" . PHP_EOL;
    echo "Total anchor tags found: $total_links_found" . PHP_EOL;
    echo "Average links per page: " . round($total_links_found / $total_pages, 2) . PHP_EOL . PHP_EOL;

    echo "====================================================" . PHP_EOL;
    echo "SELF-LINKING AUDIT" . PHP_EOL;
    echo "====================================================" . PHP_EOL;
    if (empty($self_links)) {
        echo "✓ SUCCESS: No self-linking occurrences found across all 353 pages!" . PHP_EOL;
    } else {
        echo "⚠ WARNING: Found " . count($self_links) . " self-linking instances:" . PHP_EOL;
        foreach ($self_links as $sl) {
            echo "  - Page ID {$sl['page_id']} ({$sl['page_slug']}) links to itself: href='{$sl['target']}' with text '{$sl['text']}'" . PHP_EOL;
        }
    }
    echo PHP_EOL;

    echo "====================================================" . PHP_EOL;
    echo "BROKEN LINK & ABSOLUTE URL AUDIT" . PHP_EOL;
    echo "====================================================" . PHP_EOL;
    if (empty($broken_links)) {
        echo "✓ SUCCESS: All internal links are valid and target existing database pages!" . PHP_EOL;
        echo "✓ SUCCESS: Zero absolute domain leaks found in anchor references." . PHP_EOL;
    } else {
        echo "❌ FAILED: Found " . count($broken_links) . " problematic links:" . PHP_EOL;
        foreach ($broken_links as $bl) {
            echo "  - Page ID {$bl['page_id']} ({$bl['page_slug']}) -> Target: '{$bl['target']}' | Reason: {$bl['reason']}" . PHP_EOL;
        }
    }
    echo PHP_EOL;
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
