<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/db_init.php';

// Prevent browser and proxy caching for dynamic HTML content
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

ob_start();

// Helper function to map page slug to its state category for breadcrumbs
function get_state_from_slug($slug) {
    $slug_lower = strtolower($slug);
    if (strpos($slug_lower, 'tamilnadu') !== false || strpos($slug_lower, 'tamil-nadu') !== false || strpos($slug_lower, 'tnreg') !== false || strpos($slug_lower, 'tn-') !== false || strpos($slug_lower, 'villangam') !== false) {
        return ['name' => 'Tamil Nadu', 'url' => '/online-ec-tamilnadu/'];
    } elseif (strpos($slug_lower, 'karnataka') !== false || strpos($slug_lower, 'kaveri') !== false || strpos($slug_lower, 'bhoomi') !== false) {
        return ['name' => 'Karnataka', 'url' => '/online-ec-karnataka/'];
    } elseif (strpos($slug_lower, 'telangana') !== false || strpos($slug_lower, 'dharani') !== false || strpos($slug_lower, 'ts-') !== false) {
        return ['name' => 'Telangana', 'url' => '/ec-online-telangana/'];
    } elseif (strpos($slug_lower, 'andhra') !== false || strpos($slug_lower, 'ap-') !== false || strpos($slug_lower, '-ap') !== false) {
        return ['name' => 'Andhra Pradesh', 'url' => '/online-ec-ap/'];
    }
    return null;
}

// 1. Get requested slug from URL (redirected by .htaccess or parsed from REQUEST_URI)
$slug = '';
if (isset($_GET['slug'])) {
    $slug = trim($_GET['slug'], '/');
} else {
    // Fallback for built-in PHP web server
    $request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $slug = trim($request_path, '/');
}

// If slug is empty, we serve the homepage
if (empty($slug)) {
    $slug = 'home';
}

// 1b. Static Cache Lookup to bypass DB query
$cache_dir = __DIR__ . '/cache';
$cache_file = $cache_dir . '/' . md5($slug) . '.html';
$cache_time = 86400; // 24-hour cache TTL

if (defined('ENVIRONMENT') && ENVIRONMENT === 'production') {
    // Manual cache purge option
    if (isset($_GET['clear_cache'])) {
        if (is_dir($cache_dir)) {
            array_map('unlink', glob($cache_dir . '/*'));
        }
    }
    
    if (!isset($_GET['q']) && !isset($_GET['search_failed'])) {
        // Automatic invalidation if header/footer/styles are newer than cache
        $theme_mtime = max(
            file_exists(__DIR__ . '/includes/header.php') ? filemtime(__DIR__ . '/includes/header.php') : 0,
            file_exists(__DIR__ . '/includes/footer.php') ? filemtime(__DIR__ . '/includes/footer.php') : 0,
            file_exists(__DIR__ . '/assets/css/style.css') ? filemtime(__DIR__ . '/assets/css/style.css') : 0
        );

        if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_time) && (filemtime($cache_file) > $theme_mtime)) {
            ob_end_clean();
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
            readfile($cache_file);
            exit;
        }
    }
}

// 2. Fetch page from database
try {
    $stmt = $pdo->prepare("SELECT * FROM econline_pages WHERE slug = :slug AND status = 'published' LIMIT 1");
    $stmt->execute(['slug' => $slug]);
    $page = $stmt->fetch();
} catch (PDOException $e) {
    die("Database query error: " . $e->getMessage());
}

// 3. Handle Page Not Found (404) vs Valid Page
if (!$page) {
    header("HTTP/1.1 404 Not Found");
    $page_title = "Page Not Found | econline.in";
    $meta_desc = "The page you are looking for does not exist on econline.in.";
    $page_keywords = "404, page not found";
    $h1_title = "404 - Page Not Found";
    $content = '
    <div class="card" style="text-align: center; padding: 4rem 2rem;">
        <h2 style="font-size: 2rem; color: var(--accent); margin-bottom: 1rem;">Oops! Page Not Found</h2>
        <p class="content-text" style="max-width: 600px; margin: 0 auto 2rem auto; color: var(--text-muted);">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <div style="margin-bottom: 2rem;">
            <a href="/" class="btn-primary" style="padding: 0.75rem 1.5rem;" title="Go to the EC Online Homepage">Go to Homepage</a>
        </div>
    </div>';
    $schema_type = 'WebPage';
    $toc_links = [];
} else {
    // 4. Set Dynamic SEO Metadata
    $page_title = $page['title'];
    $meta_desc = $page['meta_desc'];
    $page_keywords = $page['keyword'] . ', ec online, encumbrance certificate, download ec online, check ec online';
    $h1_title = $page['h1_title'];
    $content = $page['content'];
    $content = str_replace(
        ['href="#ka-guide"', 'href="#ts-guide"', 'href="#ap-guide"', 'href="https://econline.in/"', 'href=\'https://econline.in/\''],
        ['href="/online-ec-karnataka/"', 'href="/ec-online-telangana/"', 'href="/online-ec-ap/"', 'href="/ec-online/"', 'href="/ec-online/"'],
        $content
    );
    $schema_type = $page['schema_type'];
    
    // Retrieve pre-computed Table of Contents (TOC) links
    $toc_links = [];
    if ($slug !== 'home' && isset($page['toc_data'])) {
        $toc_links = json_decode($page['toc_data'], true) ?: [];
    }
}

// Canonical URL using fixed production hostname
if ($slug === 'home') {
    $canonical_url = CANONICAL_BASE_URL;
} else {
    $canonical_url = CANONICAL_BASE_URL . $slug . "/";
}

// 5. Build Dynamic JSON-LD Schema
$schemas = [];

// Base WebPage/Article schema
if ($schema_type === 'Article') {
    $schemas[] = [
        "@context" => "https://schema.org",
        "@type" => "TechArticle",
        "headline" => $h1_title,
        "description" => $meta_desc,
        "url" => $canonical_url,
        "inLanguage" => "en-US",
        "datePublished" => $page ? $page['created_at'] : date('c'),
        "dateModified" => $page ? $page['updated_at'] : date('c'),
        "publisher" => [
            "@type" => "Organization",
            "name" => "EC Online Guide",
            "url" => CANONICAL_BASE_URL
        ]
    ];
} else {
    // Default WebPage
    $schemas[] = [
        "@context" => "https://schema.org",
        "@type" => "WebPage",
        "name" => $page_title,
        "description" => $meta_desc,
        "url" => $canonical_url
    ];
}

// Search Action Schema on Homepage
if ($slug === 'home') {
    $schemas[] = [
        "@context" => "https://schema.org",
        "@type" => "WebSite",
        "url" => CANONICAL_BASE_URL,
        "potentialAction" => [
            "@type" => "SearchAction",
            "target" => CANONICAL_BASE_URL . "{search_term_string}/",
            "query-input" => "required name=search_term_string"
        ]
    ];
}

// Breadcrumb Schema
$breadcrumb_items = [
    [
        "@type" => "ListItem",
        "position" => 1,
        "name" => "Home",
        "item" => CANONICAL_BASE_URL
    ]
];

$state_info = get_state_from_slug($slug);
if ($slug !== 'home' && $page) {
    $position = 2;
    if ($state_info) {
        $breadcrumb_items[] = [
            "@type" => "ListItem",
            "position" => $position,
            "name" => $state_info['name'] . " Guides",
            "item" => rtrim(CANONICAL_BASE_URL, '/') . $state_info['url']
        ];
        $position++;
    }
    $breadcrumb_items[] = [
        "@type" => "ListItem",
        "position" => $position,
        "name" => $h1_title,
        "item" => $canonical_url
    ];
    
    $schemas[] = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => $breadcrumb_items
    ];
}

// FAQPage Schema if FAQs exist
$faq_data = $page ? json_decode($page['faq_data'], true) : null;
if (!empty($faq_data) && is_array($faq_data)) {
    $faq_schema = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => []
    ];
    
    foreach ($faq_data as $faq) {
        $faq_schema['mainEntity'][] = [
            "@type" => "Question",
            "name" => $faq['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $faq['answer']
            ]
        ];
    }
    $schemas[] = $faq_schema;
}

// Step-by-Step HowTo Schema Markup
if ($slug !== 'home' && $page) {
    if (preg_match('/<ol\b[^>]*>(.*?)<\/ol>/is', $content, $list_match)) {
        preg_match_all('/<li>(.*?)<\/li>/is', $list_match[1], $li_matches);
        if (!empty($li_matches[1])) {
            $howto_steps = [];
            foreach ($li_matches[1] as $step_idx => $step_text) {
                $clean_step_text = trim(strip_tags($step_text));
                if (empty($clean_step_text)) continue;
                $howto_steps[] = [
                    "@type" => "HowToStep",
                    "position" => $step_idx + 1,
                    "name" => "Step " . ($step_idx + 1),
                    "text" => $clean_step_text,
                    "url" => $canonical_url . "#step-" . ($step_idx + 1)
                ];
            }
            if (!empty($howto_steps)) {
                $schemas[] = [
                    "@context" => "https://schema.org",
                    "@type" => "HowTo",
                    "name" => $h1_title,
                    "description" => $meta_desc,
                    "inLanguage" => "en-US",
                    "step" => $howto_steps
                ];
            }
        }
    }
}

// 6. Render Page Header
require_once __DIR__ . '/includes/header.php';

// 7. Render Page Template (Separate Layouts for Home vs Article)
if ($slug === 'home') {
    // HOMEPAGE TEMPLATE LAYOUT
    ?>
    <section class="hero-section">
        <div class="hero-container">
            <h1 class="hero-title"><?php echo htmlspecialchars($h1_title); ?></h1>
            <p class="hero-subtitle"><?php echo htmlspecialchars($meta_desc); ?></p>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search your state or keywords (e.g. Tamil Nadu, Kaveri)..." aria-label="Search documents">
                <button class="search-btn">Search</button>
                <ul class="suggest-dropdown" style="display: none;"></ul>
            </div>
        </div>
    </section>

    <main class="main-container">
        <?php echo $content; ?>
        
        <!-- Render Home FAQs -->
        <?php if (!empty($faq_data)): ?>
            <div class="card" style="margin-top: 3rem;">
                <h2 class="feature-section-title" style="margin-bottom: 1.5rem; text-align: left;">Frequently Asked Questions (FAQs)</h2>
                <div class="faq-accordion">
                    <?php foreach ($faq_data as $faq): ?>
                        <div class="faq-item">
                            <button class="faq-question"><?php echo htmlspecialchars($faq['question']); ?></button>
                            <div class="faq-answer">
                                <p style="margin-bottom: 0; color: #475569;"><?php echo $faq['answer']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </main>
    <?php
} else {
    // ARTICLE/GUIDE TEMPLATE LAYOUT
    
    // Set Layout Variation Based on State Category to prevent boilerplate footprinting
    $state_name = $state_info ? $state_info['name'] : '';
    $grid_class = 'content-grid';
    if ($state_name === 'Karnataka') {
        $layout_variant = 'karnataka';
        $grid_class = 'content-grid grid-sidebar-left'; // visual swap of sidebar position
    } elseif ($state_name === 'Telangana') {
        $layout_variant = 'telangana';
    } elseif ($state_name === 'Andhra Pradesh') {
        $layout_variant = 'andhra';
    } else {
        $layout_variant = 'default';
    }
    
    // Capture individual modules in variables to support dynamic DOM order rearrangements
    
    // MODULE 1: Breadcrumbs
    ob_start();
    ?>
    <nav aria-label="Breadcrumb">
        <ul class="breadcrumbs">
            <li><a href="/" title="Go to the EC Online Homepage">Home</a></li>
            <?php if ($state_info): ?>
                <li><a href="<?php echo htmlspecialchars($state_info['url']); ?>" title="Read our guides on <?php echo htmlspecialchars($state_info['name']); ?> property registration"><?php echo htmlspecialchars($state_info['name']); ?> Guides</a></li>
            <?php endif; ?>
            <li><?php echo htmlspecialchars($h1_title); ?></li>
        </ul>
    </nav>
    <?php
    $module_breadcrumbs = ob_get_clean();
    
    // MODULE 2: H1 Title
    ob_start();
    ?>
    <h1 style="margin-bottom: 2rem; font-size: 2.25rem; font-weight: 800; color: var(--primary);"><?php echo htmlspecialchars($h1_title); ?></h1>
    <?php
    $module_h1 = ob_get_clean();
    
    // MODULE 3: Table of Contents (TOC)
    ob_start();
    if (!empty($toc_links)):
    ?>
    <div class="toc-widget" style="margin-bottom: 2.5rem; padding: 1.5rem; border: 1px solid var(--border); border-radius: var(--radius-md); background-color: var(--surface); box-shadow: var(--shadow-sm);">
        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border); padding-bottom: 0.75rem; margin-bottom: 1rem; cursor: pointer;" onclick="document.getElementById('toc-list').style.display = document.getElementById('toc-list').style.display === 'none' ? 'block' : 'none';">
            <h3 style="margin: 0; font-size: 1.15rem; font-weight: 700; color: var(--primary); display: flex; align-items: center; gap: 0.5rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered"><line x1="10" x2="21" y1="6" y2="6"/><line x1="10" x2="21" y1="12" y2="12"/><line x1="10" x2="21" y1="18" y2="18"/><path d="M4 6h1v4"/><path d="M4 10h2"/><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg>
                Table of Contents
            </h3>
            <span style="font-size: 0.85rem; color: var(--accent); font-weight: 600;">[Show/Hide]</span>
        </div>
        <ul id="toc-list" style="list-style-type: none; padding-left: 0.5rem; margin: 0; display: block;">
            <?php foreach ($toc_links as $link): ?>
                <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <span style="color: var(--accent); font-weight: bold;">&rarr;</span>
                    <a href="#<?php echo htmlspecialchars($link['id']); ?>" style="font-weight: 500; font-size: 0.95rem; color: var(--text-main); hover:color: var(--accent); transition: color var(--transition-fast);"><?php echo htmlspecialchars($link['text']); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
    endif;
    $module_toc = ob_get_clean();
    
    // MODULE 4: Main Body Content
    ob_start();
    ?>
    <div class="body-content-text">
        <?php echo $content; ?>
    </div>
    <?php
    $module_content = ob_get_clean();
    
    // MODULE 5: Last Updated
    ob_start();
    if ($page):
    ?>
    <div class="last-updated-container" style="margin-top: 3rem; padding-top: 1rem; border-top: 1px solid var(--border); display: flex; align-items: center; gap: 0.5rem; color: var(--text-muted); font-size: 0.875rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>
        <span>Last Updated: <?php echo date('F d, Y', strtotime($page['updated_at'])); ?></span>
    </div>
    <?php
    endif;
    $module_last_updated = ob_get_clean();
    
    // MODULE 6: Author E-E-A-T Bio
    ob_start();
    if ($page):
    ?>
    <div class="author-card" style="margin-top: 1.5rem; margin-bottom: 3rem; padding: 1.5rem; border: 1px solid var(--border); border-radius: var(--radius-md); background-color: #f8fafc; display: flex; gap: 1.25rem; align-items: center; box-shadow: var(--shadow-sm);">
        <div class="author-avatar" style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.5rem; flex-shrink: 0; box-shadow: var(--shadow-sm);">
            V
        </div>
        <div class="author-info">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                <h3 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: var(--primary);">Vikash</h3>
                <span style="background-color: #dbeafe; color: #1e40af; font-size: 0.75rem; font-weight: 600; padding: 0.125rem 0.5rem; border-radius: 9999px; display: inline-flex; align-items: center; gap: 0.25rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Verified Expert
                </span>
            </div>
            <p style="margin: 0 0 0.5rem 0; font-size: 0.875rem; font-weight: 600; color: var(--accent);">Land Records & Property Registration Specialist</p>
            <p style="margin: 0; font-size: 0.85rem; color: var(--text-muted); line-height: 1.5;">
                Vikash is a senior property consultant and land registry advisor with over a decade of experience in navigating state stamps and registration portals (SROs). He specializes in property due diligence, title verification, and simplifying online Encumbrance Certificate (EC) downloads across India.
            </p>
        </div>
    </div>
    <?php
    endif;
    $module_author = ob_get_clean();
    
    // MODULE 7: FAQs Accordion
    ob_start();
    if (!empty($faq_data)):
    ?>
    <div class="card">
        <h2 style="margin-bottom: 1.5rem; font-size: 1.6rem;">Frequently Asked Questions</h2>
        <div class="faq-accordion">
            <?php foreach ($faq_data as $faq): ?>
                <div class="faq-item">
                    <button class="faq-question"><?php echo htmlspecialchars($faq['question']); ?></button>
                    <div class="faq-answer">
                        <p style="margin-bottom: 0; color: #475569;"><?php echo $faq['answer']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    endif;
    $module_faqs = ob_get_clean();
    
    // Output template layout structures depending on the state variant
    ?>
    <main class="main-container">
        <div class="<?php echo htmlspecialchars($grid_class); ?>">
            <article class="article-content">
                <?php
                if ($layout_variant === 'karnataka') {
                    // Karnataka: E-E-A-T author bio is rendered at the top, visual left-sidebar
                    echo $module_breadcrumbs;
                    echo $module_h1;
                    echo $module_author;
                    echo $module_toc;
                    echo $module_content;
                    echo $module_last_updated;
                    echo $module_faqs;
                } elseif ($layout_variant === 'telangana') {
                    // Telangana: FAQs placed above the author bio at the bottom
                    echo $module_breadcrumbs;
                    echo $module_h1;
                    echo $module_toc;
                    echo $module_content;
                    echo $module_last_updated;
                    echo $module_faqs;
                    echo $module_author;
                } elseif ($layout_variant === 'andhra') {
                    // Andhra Pradesh: TOC widget placed below the content body
                    echo $module_breadcrumbs;
                    echo $module_h1;
                    echo $module_content;
                    echo $module_toc;
                    echo $module_last_updated;
                    echo $module_faqs;
                    echo $module_author;
                } else {
                    // Default/Tamil Nadu: Traditional hierarchy
                    echo $module_breadcrumbs;
                    echo $module_h1;
                    echo $module_toc;
                    echo $module_content;
                    echo $module_last_updated;
                    echo $module_author;
                    echo $module_faqs;
                }
                ?>
            </article>

            <!-- Sidebar Widgets (Aggressive Internal Linking) -->
            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Important Guides</h3>
                    <ul class="widget-list">
                        <li><a href="/online-ec-tamilnadu/" title="Read our guide on Tamil Nadu online EC search">Tamil Nadu EC Online</a></li>
                        <li><a href="/ec-view-online/" title="Read our guide on checking EC view online search">EC View Online Search</a></li>
                        <li><a href="/online-ec-karnataka/" title="Read our guide on Kaveri Karnataka online EC search">Kaveri Karnataka EC</a></li>
                        <li><a href="/ec-online-telangana/" title="Read our guide on Telangana IGRS online EC search">TS IGRS Telangana EC</a></li>
                        <li><a href="/online-ec-ap/" title="Read our guide on Andhra Pradesh IGRS online EC search">AP IGRS Andhra Pradesh EC</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-widget" style="background-color: #eff6ff; border-color: rgba(37, 99, 211, 0.2);">
                    <h3 class="widget-title" style="color: var(--accent); border-color: rgba(37, 99, 211, 0.1);">Verified Official Portals</h3>
                    <ul class="widget-list">
                        <li><a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" title="Visit the official TNREGINET Tamil Nadu portal (External Link)">&rarr; TNREGINET Tamil Nadu</a></li>
                        <li><a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener" title="Visit the official Kaveri Karnataka portal (External Link)">&rarr; Kaveri Karnataka</a></li>
                        <li><a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener" title="Visit the official IGRS Telangana portal (External Link)">&rarr; IGRS Telangana</a></li>
                        <li><a href="https://igrs.ap.gov.in" target="_blank" rel="nofollow noopener" title="Visit the official IGRS Andhra Pradesh portal (External Link)">&rarr; IGRS Andhra Pradesh</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </main>
    <?php
}

// 8. Render Page Footer
require_once __DIR__ . '/includes/footer.php';

// Capture the entire page HTML output
$html = ob_get_clean();

// Save output to cache on production for valid pages
if (defined('ENVIRONMENT') && ENVIRONMENT === 'production' && $page && !isset($_GET['q']) && !isset($_GET['search_failed'])) {
    if (!is_dir($cache_dir)) {
        mkdir($cache_dir, 0755, true);
    }
    file_put_contents($cache_file, $html);
}

echo $html;
?>
