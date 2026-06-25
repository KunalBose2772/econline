<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/db_init.php';

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

// 2. Fetch page from database
try {
    $stmt = $pdo->prepare("SELECT * FROM econline_pages WHERE slug = :slug AND status = 'published' LIMIT 1");
    $stmt->execute(['slug' => $slug]);
    $page = $stmt->fetch();
} catch (PDOException $e) {
    die("Database query error: " . $e->getMessage());
}

// 3. Handle Page Not Found (404) -> Redirect to Homepage (301)
if (!$page) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . BASE_URL);
    exit;
}

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

// Dynamic runtime image lazy loading and dimension sanitizer
$content = preg_replace_callback('/<img\s+([^>]*)\/?>/is', function($img_matches) {
    $attrs_string = $img_matches[1];
    $attrs = [];
    preg_match_all('/([a-z0-9\-]+)\s*=\s*["\']([^"\']*)["\']/i', $attrs_string, $attr_matches, PREG_SET_ORDER);
    foreach ($attr_matches as $match) {
        $attrs[strtolower($match[1])] = $match[2];
    }
    $attrs['loading'] = 'lazy';
    $attrs['decoding'] = 'async';
    if (!isset($attrs['width']) && !isset($attrs['height'])) {
        $attrs['width'] = '800';
        $attrs['height'] = '450';
    }
    $new_attrs = [];
    foreach ($attrs as $name => $val) {
        $new_attrs[] = $name . '="' . htmlspecialchars($val) . '"';
    }
    return '<img ' . implode(' ', $new_attrs) . ' />';
}, $content);

// Table of Contents (TOC) Parser
$toc_links = [];
if ($slug !== 'home') {
    $h2_count = 0;
    $content = preg_replace_callback('/<h2\b([^>]*)>(.*?)<\/h2>/is', function($h2_matches) use (&$toc_links, &$h2_count) {
        $h2_count++;
        $attrs_string = $h2_matches[1];
        $heading_text = strip_tags($h2_matches[2]);
        $clean_id = 'heading-' . $h2_count;
        $attrs = [];
        if (!empty($attrs_string)) {
            preg_match_all('/([a-z0-9\-]+)\s*=\s*["\']([^"\']*)["\']/i', $attrs_string, $attr_matches, PREG_SET_ORDER);
            foreach ($attr_matches as $match) {
                $attrs[strtolower($match[1])] = $match[2];
            }
        }
        $attrs['id'] = $clean_id;
        $new_attrs = [];
        foreach ($attrs as $name => $val) {
            $new_attrs[] = $name . '="' . htmlspecialchars($val) . '"';
        }
        $toc_links[] = [
            'id' => $clean_id,
            'text' => $heading_text
        ];
        return '<h2 ' . implode(' ', $new_attrs) . '>' . $h2_matches[2] . '</h2>';
    }, $content);
}

$schema_type = $page['schema_type'];

// Canonical URL (clean up trailing slash format)
if ($slug === 'home') {
    $canonical_url = BASE_URL;
} else {
    $canonical_url = BASE_URL . $slug . "/";
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
        "datePublished" => $page['created_at'],
        "dateModified" => $page['updated_at'],
        "publisher" => [
            "@type" => "Organization",
            "name" => "EC Online Guide",
            "url" => BASE_URL
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
        "url" => BASE_URL,
        "potentialAction" => [
            "@type" => "SearchAction",
            "target" => BASE_URL . "{search_term_string}/",
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
        "item" => BASE_URL
    ]
];

$state_info = get_state_from_slug($slug);
if ($slug !== 'home') {
    $position = 2;
    if ($state_info) {
        $breadcrumb_items[] = [
            "@type" => "ListItem",
            "position" => $position,
            "name" => $state_info['name'] . " Guides",
            "item" => rtrim(BASE_URL, '/') . $state_info['url']
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
$faq_data = json_decode($page['faq_data'], true);
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
if ($slug !== 'home') {
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
    ?>
    <main class="main-container">
        <div class="content-grid">
            <article class="article-content">
                <!-- Breadcrumbs -->
                <nav aria-label="Breadcrumb">
                    <ul class="breadcrumbs">
                        <li><a href="/">Home</a></li>
                        <?php if ($state_info): ?>
                            <li><a href="<?php echo htmlspecialchars($state_info['url']); ?>"><?php echo htmlspecialchars($state_info['name']); ?> Guides</a></li>
                        <?php endif; ?>
                        <li><?php echo htmlspecialchars($h1_title); ?></li>
                    </ul>
                </nav>
                <h1 style="margin-bottom: 2rem; font-size: 2.25rem; font-weight: 800; color: var(--primary);"><?php echo htmlspecialchars($h1_title); ?></h1>
                
                <!-- Table of Contents (TOC) Widget -->
                <?php if (!empty($toc_links)): ?>
                    <div class="toc-widget" style="margin-bottom: 2.5rem; padding: 1.5rem; border: 1px solid var(--border); border-radius: var(--radius-md); background-color: var(--surface); box-shadow: var(--shadow-sm);">
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border); padding-bottom: 0.75rem; margin-bottom: 1rem; cursor: pointer;" onclick="document.getElementById('toc-list').style.display = document.getElementById('toc-list').style.display === 'none' ? 'block' : 'none';">
                            <h4 style="margin: 0; font-size: 1.15rem; font-weight: 700; color: var(--primary); display: flex; align-items: center; gap: 0.5rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered"><line x1="10" x2="21" y1="6" y2="6"/><line x1="10" x2="21" y1="12" y2="12"/><line x1="10" x2="21" y1="18" y2="18"/><path d="M4 6h1v4"/><path d="M4 10h2"/><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg>
                                Table of Contents
                            </h4>
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
                <?php endif; ?>
                
                <!-- Main Body Content -->
                <div class="body-content-text">
                    <?php echo $content; ?>
                </div>

                <!-- Dynamic "Last Updated" Date -->
                <div class="last-updated-container" style="margin-top: 3rem; padding-top: 1rem; border-top: 1px solid var(--border); display: flex; align-items: center; gap: 0.5rem; color: var(--text-muted); font-size: 0.875rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>
                    <span>Last Updated: <?php echo date('F d, Y', strtotime($page['updated_at'])); ?></span>
                </div>

                <!-- Author E-E-A-T Bio Block -->
                <div class="author-card" style="margin-top: 1.5rem; margin-bottom: 3rem; padding: 1.5rem; border: 1px solid var(--border); border-radius: var(--radius-md); background-color: #f8fafc; display: flex; gap: 1.25rem; align-items: center; box-shadow: var(--shadow-sm);">
                    <div class="author-avatar" style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.5rem; flex-shrink: 0; box-shadow: var(--shadow-sm);">
                        V
                    </div>
                    <div class="author-info">
                        <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                            <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: var(--primary);">Vikash</h4>
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

                <!-- Render FAQs Section -->
                <?php if (!empty($faq_data)): ?>
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
                <?php endif; ?>
            </article>

            <!-- Sidebar Widgets (Aggressive Internal Linking) -->
            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h4 class="widget-title">Important Guides</h4>
                    <ul class="widget-list">
                        <li><a href="/online-ec-tamilnadu/">Tamil Nadu EC Online</a></li>
                        <li><a href="/ec-view-online/">EC View Online Search</a></li>
                        <li><a href="/online-ec-karnataka/">Kaveri Karnataka EC</a></li>
                        <li><a href="/ec-online-telangana/">TS IGRS Telangana EC</a></li>
                        <li><a href="/online-ec-ap/">AP IGRS Andhra Pradesh EC</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-widget" style="background-color: #eff6ff; border-color: rgba(37, 99, 211, 0.2);">
                    <h4 class="widget-title" style="color: var(--accent); border-color: rgba(37, 99, 211, 0.1);">Verified Official Portals</h4>
                    <ul class="widget-list">
                        <li><a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener">&rarr; TNREGINET Tamil Nadu</a></li>
                        <li><a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener">&rarr; Kaveri Karnataka</a></li>
                        <li><a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener">&rarr; IGRS Telangana</a></li>
                        <li><a href="https://igrs.ap.gov.in" target="_blank" rel="nofollow noopener">&rarr; IGRS Andhra Pradesh</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </main>
    <?php
}

// 8. Render Page Footer
require_once __DIR__ . '/includes/footer.php';
?>
