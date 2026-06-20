<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/db_init.php';

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

// 3. Handle Page Not Found (404)
if (!$page) {
    header("HTTP/1.0 404 Not Found");
    $page_title = "404 Page Not Found | econline.in";
    $meta_desc = "The page you are looking for does not exist on econline.in.";
    $canonical_url = "https://econline.in/" . htmlspecialchars($slug) . "/";
    
    // Simple 404 template
    $schemas = [[
        "@context" => "https://schema.org",
        "@type" => "WebPage",
        "name" => "404 Page Not Found",
        "description" => $meta_desc,
        "url" => $canonical_url
    ]];
    
    require_once __DIR__ . '/includes/header.php';
    ?>
    <main class="main-container">
        <div class="card" style="text-align: center; padding: 4rem 2rem;">
            <h1 style="font-size: 3.5rem; color: #ef4444; margin-bottom: 1.5rem;">404</h1>
            <h2>Oops! Page Not Found</h2>
            <p style="color: var(--text-muted); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                We couldn't find the Encumbrance Certificate guide page you were looking for. Use the search bar above or return to the home page to find your state.
            </p>
            <a href="/" class="btn-primary">Return to Homepage</a>
        </div>
    </main>
    <?php
    require_once __DIR__ . '/includes/footer.php';
    exit;
}

// 4. Set Dynamic SEO Metadata
$page_title = $page['title'];
$meta_desc = $page['meta_desc'];
$page_keywords = $page['keyword'] . ', ec online, encumbrance certificate, download ec online, check ec online';
$h1_title = $page['h1_title'];
$content = $page['content'];
$schema_type = $page['schema_type'];

// Canonical URL (clean up trailing slash format)
if ($slug === 'home') {
    $canonical_url = "https://econline.in/";
} else {
    $canonical_url = "https://econline.in/" . $slug . "/";
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
            "url" => "https://econline.in/"
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
        "url" => "https://econline.in/",
        "potentialAction" => [
            "@type" => "SearchAction",
            "target" => "https://econline.in/{search_term_string}/",
            "query-input" => "required name=search_term_string"
        ]
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
                <h1 style="margin-bottom: 2rem; font-size: 2.25rem; font-weight: 800; color: var(--primary);"><?php echo htmlspecialchars($h1_title); ?></h1>
                
                <!-- Main Body Content -->
                <div class="body-content-text">
                    <?php echo $content; ?>
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
                        <li><a href="#">Kaveri Karnataka EC</a></li>
                        <li><a href="#">TS IGRS Telangana EC</a></li>
                        <li><a href="#">AP IGRS Andhra Pradesh EC</a></li>
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
