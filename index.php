<?php
require_once __DIR__ . '/config/config.php';

$slug_raw = isset($_GET['slug']) ? rtrim($_GET['slug'], '/') : 'home';
if (empty($slug_raw)) {
    $slug_raw = 'home';
}

// Multi-lingual Routing Logic
$languages = ['en', 'hi', 'es', 'fr', 'ar', 'zh'];
$current_lang = 'en';

$slug_parts = explode('/', $slug_raw);
if (in_array(strtolower($slug_parts[0]), $languages)) {
    $current_lang = strtolower($slug_parts[0]);
    array_shift($slug_parts);
    $slug_raw = implode('/', $slug_parts);
    if (empty($slug_raw)) {
        $slug_raw = 'home';
    }
}

$slug = strtolower($slug_raw);
$current_base_slug = ($slug === 'home') ? '' : $slug . '/';

// Optional: Redirect if trailing slash missing or uppercase (only for base routes)
if ($slug_raw !== strtolower($slug_raw)) {
    $prefix = ($current_lang === 'en') ? '' : $current_lang . '/';
    header("Location: " . base_url($prefix . strtolower($slug_raw) . '/'), true, 301);
    exit;
}

// Check if it's a core page
$stmt = $pdo->prepare("SELECT * FROM pages WHERE slug = :slug AND status = 'published' LIMIT 1");
$stmt->execute(['slug' => $slug]);
$page = $stmt->fetch();
$page_type = 'page';
$page_found = false;

if ($page) {
    $page_found = true;
}

// Fetch FAQs (var initialized)
$faqs = [];

// If not a standard page, check if it's a country
if (!$page_found) {
    $stmtC = $pdo->prepare("SELECT * FROM countries WHERE slug = :slug LIMIT 1");
    $stmtC->execute(['slug' => $slug]);
    if ($country = $stmtC->fetch()) {
        $page_found = true;
        $page_type = 'country';
        $page = [
            'id' => $country['id'],
            'country_name' => $country['name'],
            'title' => 'Government Services & Documents in ' . $country['name'],
            'slug' => $country['slug'],
            'meta_title' => 'Official Certificates & Documents Guide for ' . $country['name'],
            'meta_description' => 'Comprehensive guide to applying for government certificates, identity documents, and property records in ' . $country['name'] . '.',
            'schema_type' => 'CollectionPage',
            'status' => 'published',
            'content' => '', // Generated dynamically below
            'last_updated' => date('Y-m-d H:i:s')
        ];
    }
}

// If not a country, check if it's a category
if (!$page_found && strpos($slug, 'category/') === 0) {
    $catSlug = str_replace('category/', '', $slug);
    $stmtCategory = $pdo->prepare("SELECT * FROM categories WHERE slug = :slug LIMIT 1");
    $stmtCategory->execute(['slug' => $catSlug]);

    if ($category = $stmtCategory->fetch()) {
        $page_found = true;
        $page_type = 'category';
        $page = [
            'id' => $category['id'],
            'category_name' => $category['name'],
            'title' => 'Explore ' . $category['name'],
            'slug' => 'category/' . $category['slug'],
            'meta_title' => $category['name'] . ' - Complete Guides & Procedures',
            'meta_description' => 'Browse all official government procedures, document checklists, and online portals related to ' . $category['name'] . '.',
            'schema_type' => 'CollectionPage',
            'status' => 'published',
            'content' => '', // Generated dynamically below
            'last_updated' => date('Y-m-d H:i:s')
        ];
    }
}

// If not country, check if it's a service
if (!$page_found) {
    $stmtS = $pdo->prepare("
        SELECT s.*, c.slug AS country_slug, c.name AS country_name 
        FROM services s 
        JOIN countries c ON s.country_id = c.id 
        WHERE s.slug = :slug AND s.status = 'published' LIMIT 1
    ");
    $stmtS->execute(['slug' => $slug]);
    if ($service = $stmtS->fetch()) {
        $page_found = true;
        $page_type = 'service';

        // Structural UI Translations for Service Page
        $ui_trans = [
            'en' => [
                'home' => 'Home',
                'country' => 'Country',
                'intro' => 'Introduction',
                'eligibility' => 'Eligibility',
                'who_apply' => 'Who can apply?',
                'docs' => 'Required Documents',
                'process' => 'Application Process',
                'fees' => 'Govt Fees',
                'time' => 'Processing Time',
                'btn' => 'Visit Official Portal'
            ],
            'hi' => [
                'home' => 'होम',
                'country' => 'देश',
                'intro' => 'परिचय',
                'eligibility' => 'पात्रता',
                'who_apply' => 'कौन आवेदन कर सकता है?',
                'docs' => 'आवश्यक दस्तावेज़',
                'process' => 'आवेदन प्रक्रिया',
                'fees' => 'सरकारी शुल्क',
                'time' => 'प्रसंस्करण समय',
                'btn' => 'आधिकारिक पोर्टल पर जाएँ'
            ],
            'es' => [
                'home' => 'Inicio',
                'country' => 'País',
                'intro' => 'Introducción',
                'eligibility' => 'Elegibilidad',
                'who_apply' => '¿Quién puede solicitar?',
                'docs' => 'Documentos Requeridos',
                'process' => 'Proceso de Solicitud',
                'fees' => 'Tarifas del Gobierno',
                'time' => 'Tiempo de Procesamiento',
                'btn' => 'Visitar Portal Oficial'
            ]
        ];
        $ui = $ui_trans[$current_lang] ?? $ui_trans['en'];

        // Content Override for demonstration on EC Money Page (Hindi)
        if ($slug === 'india/encumbrance-certificate' && $current_lang === 'hi') {
            require_once __DIR__ . '/includes/hi_ec.php';
        }

        // Build service content block
        $sContent = '<div class="breadcrumb"><a href="' . base_url(($current_lang === 'en' ? '' : $current_lang . '/')) . '">' . $ui['home'] . '</a> / <a href="' . base_url(($current_lang === 'en' ? '' : $current_lang . '/') . $service['country_slug'] . '/') . '">' . $ui['country'] . '</a> / ' . htmlspecialchars($service['title']) . '</div>';
        $sContent .= '<h1>' . htmlspecialchars($service['title']) . '</h1>';
        $sContent .= '<div class="structured-content">';
        $sContent .= '<h2>' . $ui['intro'] . '</h2><div class="content-text">' . ($service['introduction'] ?? 'Information not available.') . '</div>';

        if (!empty($service['eligibility'])) {
            $sContent .= '<h2>' . $ui['eligibility'] . '</h2><div class="highlight-box"><h3>' . $ui['who_apply'] . '</h3>' . $service['eligibility'] . '</div>';
        }

        $sContent .= '<h2>' . $ui['docs'] . '</h2><div class="content-text">' . ($service['documents_required'] ?? 'No documents listed.') . '</div>';
        $sContent .= '<h2>' . $ui['process'] . '</h2><div class="content-text">' . ($service['application_process'] ?? 'Process details currently unavailable.') . '</div>';

        // Fees & Time Row
        $sContent .= '<div class="data-highlights-row">';
        $sContent .= '<div class="data-highlight-box blue">';
        $sContent .= '<strong>' . $ui['fees'] . '</strong>';
        $sContent .= '<span>' . ($service['fees'] ?? 'Varies') . '</span></div>';
        $sContent .= '<div class="data-highlight-box green">';
        $sContent .= '<strong>' . $ui['time'] . '</strong>';
        $sContent .= '<span>' . ($service['processing_time'] ?? 'Varies') . '</span></div>';
        $sContent .= '</div>';

        if (!empty($service['official_link'])) {
            $sContent .= '<div class="official-action-container" style="margin-top: 2rem; text-align: center;">';
            $sContent .= '<a href="' . htmlspecialchars($service['official_link']) . '" target="_blank" rel="nofollow noopener" class="btn-primary">' . $ui['btn'] . ' &rarr;</a>';
            $sContent .= '</div>';
        }

        $disclaimer = ($current_lang === 'hi')
            ? '<strong>अस्वीकरण (Disclaimer):</strong> यह मार्गदर्शिका केवल सूचना के उद्देश्यों के लिए है। राज्य के अनुसार प्रक्रियाएं, शुल्क और प्रसंस्करण समय भिन्न हो सकते हैं। वित्तीय निर्णय लेने से पहले हमेशा अपने राज्य के आधिकारिक पंजीकरण और स्टाम्प विभाग पोर्टल से प्रक्रियाओं की पुष्टि करें या किसी प्रमाणित संपत्ति वकील से परामर्श लें।'
            : '<strong>Disclaimer:</strong> This guide is for informational purposes only. Procedures, fees, and processing times may vary by state. Always verify procedures directly from your state’s official Registration & Stamps Department portal or consult a certified property lawyer before making financial decisions.';

        $sContent .= '<div style="margin-top: 3rem; padding: 1rem; border-top: 1px solid var(--border-color); font-size: 0.85rem; color: var(--text-muted); text-align: center;">' . $disclaimer . '</div>';

        $sContent .= '</div>'; // close structured content

        $page = [
            'id' => $service['id'],
            'title' => $service['title'],
            'slug' => $service['slug'],
            'meta_title' => $service['meta_title'] ?? $service['title'],
            'meta_description' => $service['meta_description'] ?? 'Guide on how to apply for ' . $service['title'],
            'schema_type' => 'Article',
            'status' => 'published',
            'content' => $sContent,
            'last_updated' => $service['last_updated']
        ];

        // Fetch FAQs for Service
        $stmtFaq = $pdo->prepare("SELECT question, answer FROM faqs WHERE service_id = :service_id");
        $stmtFaq->execute(['service_id' => $service['id']]);
        $faqs = $stmtFaq->fetchAll();
    }
}

// 404 Handling
if (!$page_found) {
    header("HTTP/1.0 404 Not Found");
    $page_type = '404';
    $page = [
        'id' => 0,
        'title' => 'Page Not Found',
        'meta_title' => '404 Page Not Found | econline.in',
        'meta_description' => 'The requested page was not found.',
        'content' => '<div class="not-found-block" style="text-align: center; padding: 4rem 1rem;"><h1>404 Not Found</h1><p>Sorry, the page you requested cannot be found. Please use the navigation menu or search to find what you are looking for.</p><a href="' . base_url() . '" class="btn-primary" style="margin-top: 1rem;">&larr; Return Home</a></div>',
        'schema_type' => 'WebPage',
        'slug' => '404',
        'last_updated' => date('Y-m-d H:i:s')
    ];
}

// Meta tags truncation logic
$meta_title = substr(trim($page['meta_title'] ?? $page['title']), 0, 60);
$meta_description = substr(trim($page['meta_description'] ?? ''), 0, 160);

// Canonical URL (clean up queries, always points to the exact version)
$canonical_prefix = ($current_lang === 'en') ? '' : $current_lang . '/';
$canonical_url = base_url($canonical_prefix . ($slug == 'home' ? '' : $slug . '/'));

// Standard pages might still have standalone FAQs
if ($page_type === 'page' && $page['id'] > 0) {
    $stmtFaq = $pdo->prepare("SELECT question, answer FROM faqs WHERE page_id = :page_id");
    $stmtFaq->execute(['page_id' => $page['id']]);
    $faqs = $stmtFaq->fetchAll();
}

// Dynamic content generation
$dynamic_content = '';

// If HTML Sitemap
if ($slug === 'sitemap') {
    $stmtSitemap = $pdo->query("SELECT title, slug FROM pages WHERE status = 'published' AND slug != '404' ORDER BY title ASC");
    $sitemapLinks = $stmtSitemap->fetchAll();

    $dynamic_content .= '<h3>All Pages</h3><ul class="sitemap-list">';
    foreach ($sitemapLinks as $link) {
        $lUrl = base_url($link['slug'] == 'home' ? '' : $link['slug'] . '/');
        $dynamic_content .= '<li><a class="text-link" href="' . $lUrl . '">' . htmlspecialchars($link['title']) . '</a></li>';
    }
    $dynamic_content .= '</ul>';
}

// If Homepage - full UI construction
if ($slug === 'home') {
    // Translation Matrix for Homepage
    $translations = [
        'en' => [
            'hero_title' => 'Government Certificate & Legal Document Guides – India & Worldwide',
            'hero_subtitle' => 'Step-by-step government document guidance for India and worldwide citizen services — including Encumbrance Certificate, birth certificate, property records, tax filings, and legal certificates.',
            'search_placeholder' => 'e.g. Encumbrance Certificate India...',
            'search_btn' => 'Search',
            'pop_services' => 'Popular Services',
            'how_it_helps' => 'How This Website Helps You',
            'browse_category' => 'Browse by Category',
            'browse_country' => 'Browse by Country',
            'why_use' => 'Why Use econline.in?'
        ],
        'hi' => [
            'hero_title' => 'सरकारी प्रमाणपत्र और कानूनी दस्तावेज़ गाइड – भारत और विश्वव्यापी',
            'hero_subtitle' => 'भार प्रमाणपत्र (encumbrance certificate), आय प्रमाण पत्र, संपत्ति रिकॉर्ड, कर दस्तावेजों और अधिक के लिए चरण-दर-चरण मार्गदर्शन।',
            'search_placeholder' => 'जैसे: भारत में भार प्रमाणपत्र...',
            'search_btn' => 'खोजें',
            'pop_services' => 'लोकप्रिय सेवाएँ',
            'how_it_helps' => 'यह वेबसाइट आपकी कैसे मदद करती है',
            'browse_category' => 'श्रेणी के अनुसार ब्राउज़ करें',
            'browse_country' => 'देश के अनुसार ब्राउज़ करें',
            'why_use' => 'econline.in का उपयोग क्यों करें?'
        ],
        'es' => [
            'hero_title' => 'Guías de Certificados Gubernamentales y Documentos Legales',
            'hero_subtitle' => 'Orientación paso a paso para certificados de gravamen, certificados de nacimiento, registros fiscales y más.',
            'search_placeholder' => 'ej. Certificado de Gravamen...',
            'search_btn' => 'Buscar',
            'pop_services' => 'Servicios Populares',
            'how_it_helps' => 'Cómo Te Ayuda Este Sitio Web',
            'browse_category' => 'Navegar por Categoría',
            'browse_country' => 'Navegar por País',
            'why_use' => '¿Por qué usar econline.in?'
        ]
    ];
    $t = $translations[$current_lang] ?? $translations['en'];

    $dynamic_content = '
    <div class="hero-section">
        <div class="container">
            <h1 style="max-width: 900px; margin: 0 auto 1.5rem auto;">' . htmlspecialchars($t['hero_title']) . '</h1>
            <p>' . htmlspecialchars($t['hero_subtitle']) . '</p>
            <p style="color: #2ecc71; font-weight: bold; font-size: 1.1rem; margin-top: 1rem;">Auto Deploy Test: Active</p>
            <div class="search-container">
                <input type="text" placeholder="' . htmlspecialchars($t['search_placeholder']) . '" aria-label="Search documents">
                <button>' . htmlspecialchars($t['search_btn']) . '</button>
            </div>
        </div>
    </div>';

    // Popular Services Grid (Fetch 11 random published services, excluding EC)
    $stmtPop = $pdo->query("SELECT title, slug FROM services WHERE status = 'published' AND slug != 'encumbrance-certificate' ORDER BY last_updated DESC LIMIT 11");
    $popServices = $stmtPop->fetchAll();

    // Check if EC exists to be placed first with highlighting
    $stmtEc = $pdo->query("SELECT title, slug FROM services WHERE slug = 'encumbrance-certificate' AND status = 'published' LIMIT 1");
    $ecService = $stmtEc->fetch();

    $dynamic_content .= '<div class="home-section bg-white"><div class="container">';
    $dynamic_content .= '<h2 class="section-title">' . htmlspecialchars($t['pop_services']) . '</h2>';
    $dynamic_content .= '<div class="grid-links">';

    if ($ecService) {
        $lUrl = base_url(($current_lang === 'en' ? '' : $current_lang . '/') . $ecService['slug'] . '/');
        $dynamic_content .= '<a href="' . $lUrl . '" style="border: 2px solid var(--authority-blue); box-shadow: var(--shadow-md); background: #f0f7ff;">⭐ ' . htmlspecialchars($ecService['title']) . ' (India)</a>';
    }

    if (!empty($popServices)) {
        foreach ($popServices as $link) {
            $lUrl = base_url(($current_lang === 'en' ? '' : $current_lang . '/') . $link['slug'] . '/');
            $dynamic_content .= '<a href="' . $lUrl . '">' . htmlspecialchars($link['title']) . '</a>';
        }
    }
    $dynamic_content .= '</div></div></div>';

    // How This Website Helps You Section
    if ($current_lang === 'en') {
        $dynamic_content .= '<div class="home-section bg-light"><div class="container">';
        $dynamic_content .= '<h2 class="section-title">' . htmlspecialchars($t['how_it_helps']) . '</h2>';
        $dynamic_content .= '<div class="content-box" style="margin-bottom:0; box-shadow:none; border:none; padding: 2rem; background: var(--surface-white); border-radius: var(--radius-lg);">';

        $dynamic_content .= '<p class="content-text">Navigating government document processes can feel like navigating an overwhelming maze of bureaucratic red tape. Government portals are often highly fragmented, with procedures varying drastically from state to state and even district to district. Whether you are applying for an <strong>Encumbrance Certificate</strong> to buy a home, securing a birth certificate for legal identity, or pulling detailed property records for tax filings, just understanding the exact eligibility criteria and identifying the correct regional forms can be incredibly frustrating.</p>';

        $dynamic_content .= '<p class="content-text">Furthermore, locating the genuinely official portals is surprisingly difficult for the average citizen. Between outdated state-level government websites that constantly change domains, confusing user interfaces laden with dense legal language, and dozens of third-party agencies claiming to be "official sources," citizens frequently struggle to figure out where to safely upload sensitive documents or pay processing fees without getting scammed or facing massive delays.</p>';

        $dynamic_content .= '<p class="content-text"><strong>econline.in</strong> simplifies this entire ecosystem. We independently verify and aggregate the correct official application links, exact state-wise processing fees, and mandatory documentation lists across India and global jurisdictions. By translating complex legal vernacular into plain English, we systematically simplify messy procedures into structured, easy-to-follow steps. We empower you to successfully complete your certificate applications online directly with the correct government bodies—saving you time, money, and unnecessary stress.</p>';

        $dynamic_content .= '</div></div></div>';
    }

    // Browse by Country
    $stmtCountries = $pdo->query("SELECT name, slug, description FROM countries ORDER BY name ASC");
    $countries = $stmtCountries->fetchAll();

    if (!empty($countries)) {
        $dynamic_content .= '<div class="home-section bg-light" style="padding-top:4rem; padding-bottom:4rem;"><div class="container">';
        $dynamic_content .= '<h2 class="section-title" style="text-align:center; font-size:2.4rem;">' . htmlspecialchars($t['browse_country']) . '</h2>';
        $dynamic_content .= '<div class="features-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top:2rem;">';

        $flags = [
            'India' => '🇮🇳',
            'United States' => '🇺🇸',
            'United Kingdom' => '🇬🇧',
            'Canada' => '🇨🇦',
            'Australia' => '🇦🇺',
            'United Arab Emirates' => '🇦🇪',
            'Singapore' => '🇸🇬'
        ];

        foreach ($countries as $c) {
            $flag = $flags[$c['name']] ?? '🌍';

            // Check if country has active services
            $stmtC = $pdo->prepare("SELECT count(*) FROM services WHERE country_id = (SELECT id FROM countries WHERE slug = ?) AND status='published'");
            $stmtC->execute([$c['slug']]);
            $hasServices = $stmtC->fetchColumn() > 0;

            $desc = $hasServices
                ? 'Complete procedural guides for ' . htmlspecialchars($c['name']) . ' property and civil documents.'
                : '🚧 <strong>Coming Soon (Phase 2):</strong> Legal researchers are currently verifying portals.';

            $cUrl = base_url(($current_lang === 'en' ? '' : $current_lang . '/') . $c['slug'] . '/');
            $dynamic_content .= '<a href="' . $cUrl . '" class="feature-card" style="text-decoration:none; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:2rem; background:#fff; border-radius:12px; box-shadow:0 8px 16px rgba(0,0,0,0.06); transition:transform 0.3s ease; border: 1px solid #eaeaea;">';
            $dynamic_content .= '<div style="font-size:3rem; margin-bottom:1rem;">' . $flag . '</div>';
            $dynamic_content .= '<h3 style="margin-top:0; font-size:1.4rem; color:var(--text-dark); margin-bottom:0.8rem;">' . htmlspecialchars($c['name']) . '</h3>';
            $dynamic_content .= '<p style="margin:0; font-size:0.95rem; color:#666; line-height:1.5;">' . $desc . '</p>';
            $dynamic_content .= '</a>';
        }
        $dynamic_content .= '</div></div></div>';
    }

    // Browse by Category
    $stmtCategories = $pdo->query("SELECT name, slug FROM categories ORDER BY name ASC");
    $categoriesList = $stmtCategories->fetchAll();

    if (!empty($categoriesList)) {
        $dynamic_content .= '<div class="home-section bg-white" style="padding-top:4rem; padding-bottom:4rem;"><div class="container">';
        $dynamic_content .= '<h2 class="section-title" style="text-align:center; font-size:2.4rem;">' . htmlspecialchars($t['browse_category']) . '</h2>';
        $dynamic_content .= '<div class="features-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top:2rem;">';

        $catIcons = [
            'Property & Land Records' => '🏡',
            'Identity & Civil Certificates' => '🪪',
            'Business & Corporate Documents' => '🏢',
            'Tax & Financial Documents' => '📊',
            'Court & Legal Records' => '⚖️'
        ];

        foreach ($categoriesList as $cat) {
            $catIcon = $catIcons[$cat['name']] ?? '📁';
            $catUrl = base_url(($current_lang === 'en' ? '' : $current_lang . '/') . 'category/' . $cat['slug'] . '/');

            $dynamic_content .= '<a href="' . $catUrl . '" class="feature-card" style="text-decoration:none; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:2rem; background:#fff; border-radius:12px; box-shadow:0 8px 16px rgba(0,0,0,0.06); transition:transform 0.3s ease; border: 1px solid #eaeaea;">';
            $dynamic_content .= '<div style="font-size:3rem; margin-bottom:1rem;">' . $catIcon . '</div>';
            $dynamic_content .= '<h3 style="margin-top:0; font-size:1.25rem; color:var(--text-dark); margin-bottom:0.5rem;">' . htmlspecialchars($cat['name']) . '</h3>';
            $dynamic_content .= '</a>';
        }
        $dynamic_content .= '</div></div></div>';
    }

    // E-E-A-T Research Block
    if ($current_lang === 'en') {
        $dynamic_content .= '<div class="home-section bg-light" style="padding-bottom: 2rem; border-bottom: none;"><div class="container">';
        $dynamic_content .= '<h2 class="section-title">Our Research & Sources</h2>';
        $dynamic_content .= '<div class="content-box" style="margin-bottom:0; box-shadow:none; border:none; padding: 2rem; background: var(--surface-white); border-radius: var(--radius-lg);">';
        $dynamic_content .= '<p class="content-text">To maintain the highest standards of accuracy (E-E-A-T), <strong>econline.in</strong> strictly adheres to a rigorous editorial and verification process. We do not crowdsource data. Instead, our research team analyzes official State and Federal government portals, cross-references recent legislative notifications, and independently verifies document requirements before publishing any guides.</p>';
        $dynamic_content .= '<ul class="content-text">';
        $dynamic_content .= '<li><strong>Primary Sources:</strong> We cite directly from active government repositories, Ministry guidelines, and official Revenue Department circulars.</li>';
        $dynamic_content .= '<li><strong>Fact Verification:</strong> Fees, wait times, and URL endpoints are periodically audited to ensure citizens are directed to active domains.</li>';
        $dynamic_content .= '<li><strong>Continuous Updates:</strong> Bureaucratic procedures change frequently. We actively monitor and update our guides to reflect the latest procedural shifts in real-time.</li>';
        $dynamic_content .= '</ul>';
        $dynamic_content .= '</div></div></div>';
    }

    // Featured SEO Highlight linking to India EC inner page
    $dynamic_content .= '<div class="home-section bg-light" style="border-bottom:none; padding-bottom: 2rem;"><div class="container">';
    $dynamic_content .= '<div class="content-box" style="margin-bottom:0; text-align:center; padding: 4rem 2rem; border-color: var(--authority-blue); border-top-width: 4px;">';
    $dynamic_content .= '<span style="color: var(--authority-blue); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em;">🔥 Most Requested Guide in India</span>';
    $dynamic_content .= '<h2 style="margin-top: 1rem; border:none; font-size: 2.25rem;">Encumbrance Certificate – Check Property Ownership & Legal Status</h2>';
    $dynamic_content .= '<p class="content-text" style="max-width: 800px; margin: 1.5rem auto 2.5rem auto;">Verify clean property titles, securely check mortgage status, and follow our full step-by-step application process to get your EC approved without delays.</p>';
    $dynamic_content .= '<a href="' . base_url('india/encumbrance-certificate/') . '" class="btn-primary" style="font-size: 1.25rem; padding: 1.25rem 3rem;">Read Complete Guide &rarr;</a>';
    $dynamic_content .= '</div></div></div>';

    // Trust Elements
    $dynamic_content .= '<div class="trust-section"><div class="container">
        <h2 class="section-title" style="text-align:center; margin-bottom: 2.5rem; border:none;">' . htmlspecialchars($t['why_use']) . '</h2>
        <div class="trust-grid">
            <div><strong>Verified Information</strong><p>We aggregate data strictly from official government portals and legal frameworks to ensure optimal accuracy.</p></div>
            <div><strong>Step-by-Step Clarity</strong><p>Complex bureaucratic process broken down into simple, actionable steps anyone can follow natively.</p></div>
            <div><strong>Independent & Neutral</strong><p>We are purely an informational aide guiding you directly to official sources, with zero hidden agendas.</p></div>
        </div>
    </div></div>';
}

// Build specific dynamic blocks based on the routed page type
if ($page_type === 'country') {
    $dynamic_content = '<div class="breadcrumb" style="margin-bottom: 1rem;"><a href="' . base_url(($current_lang === 'en' ? '' : $current_lang . '/')) . '">Home</a> / ' . htmlspecialchars($page['country_name'] ?? $page['title']) . '</div>';
    $dynamic_content .= '<h1 style="color: var(--authority-blue); font-size: 2.2rem; margin-bottom: 0.5rem;">' . htmlspecialchars($page['title']) . '</h1>';
    $dynamic_content .= '<p class="content-text" style="font-size: 1.1rem; color: #555; margin-bottom: 2rem;">' . htmlspecialchars($page['meta_description']) . '</p>';

    // Fetch all global categories
    $stmtAllCat = $pdo->query("SELECT id, name, slug FROM categories ORDER BY id ASC");
    $allCats = $stmtAllCat->fetchAll(PDO::FETCH_ASSOC);

    // Group services by Category for this specific country
    $stmtCCat = $pdo->prepare("SELECT category_id, title, slug FROM services WHERE country_id = :cid AND status = 'published' ORDER BY title");
    $stmtCCat->execute(['cid' => $page['id']]);
    $cServices = $stmtCCat->fetchAll(PDO::FETCH_ASSOC);

    // Grouping logic
    $servicesByCat = [];
    foreach ($cServices as $cSrv) {
        $servicesByCat[$cSrv['category_id']][] = $cSrv;
    }

    $dynamic_content .= '<div class="categories-container">';

    foreach ($allCats as $cat) {
        $dynamic_content .= '<div class="category-block" style="margin-bottom: 2.5rem; background: #fff; padding: 1.5rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #eaeaea;">';
        $dynamic_content .= '<h2 style="margin-top: 0; color: var(--text-dark); border-bottom: 2px solid #f0f0f0; padding-bottom: 0.5rem; display: flex; align-items: center; justify-content: space-between;">';
        $dynamic_content .= '<span>📁 ' . htmlspecialchars($cat['name']) . '</span>';
        $dynamic_content .= '</h2>';

        if (isset($servicesByCat[$cat['id']]) && !empty($servicesByCat[$cat['id']])) {
            $dynamic_content .= '<div class="grid-links" style="margin-top: 1rem;">';
            foreach ($servicesByCat[$cat['id']] as $cSrv) {
                // Apply lang prefix to internal urls for countries too
                $cUrl = base_url(($current_lang === 'en' ? '' : $current_lang . '/') . $cSrv['slug'] . '/');
                $dynamic_content .= '<a href="' . $cUrl . '" style="border-left: 3px solid var(--authority-blue);">' . htmlspecialchars($cSrv['title']) . '</a>';
            }
            $dynamic_content .= '</div>';
        } else {
            // "Coming Soon" styling
            $dynamic_content .= '<div class="coming-soon-box" style="margin-top: 1rem; padding: 1rem; background: #fdfdfd; border: 1px dashed #ccc; border-radius: 4px; color: #777; font-size: 0.95rem;">';
            $dynamic_content .= '<strong>🚧 Currently in Legal Review:</strong> We are mapping the official procedures, state portals, and verified document checklists for ' . htmlspecialchars($cat['name']) . ' in ' . htmlspecialchars($page['country_name'] ?? 'this region') . '. Expected updates rolling out shortly.';
            $dynamic_content .= '</div>';
        }

        $dynamic_content .= '</div>'; // End category block
    }

    $dynamic_content .= '</div>'; // End container
}

// Category Page
if ($page_type === 'category') {
    $dynamic_content = '<div class="breadcrumb" style="margin-bottom: 1rem;"><a href="' . base_url(($current_lang === 'en' ? '' : $current_lang . '/')) . '">Home</a> / ' . htmlspecialchars($page['category_name'] ?? $page['title']) . '</div>';
    $dynamic_content .= '<h1 style="color: var(--authority-blue); font-size: 2.2rem; margin-bottom: 0.5rem;">' . htmlspecialchars($page['title']) . '</h1>';
    $dynamic_content .= '<p class="content-text" style="font-size: 1.1rem; color: #555; margin-bottom: 2rem;">' . htmlspecialchars($page['meta_description']) . '</p>';

    // Group services by Country for this specific category
    $stmtCatS = $pdo->prepare("SELECT s.title, s.slug, c.name as country_name, c.slug as country_slug FROM services s JOIN countries c ON s.country_id = c.id WHERE s.category_id = :cat_id AND s.status = 'published' ORDER BY c.name, s.title");
    $stmtCatS->execute(['cat_id' => $page['id']]);
    $catServices = $stmtCatS->fetchAll(PDO::FETCH_ASSOC);

    // Grouping logic
    $servicesByCountry = [];
    foreach ($catServices as $cSrv) {
        $servicesByCountry[$cSrv['country_name']][] = $cSrv;
    }

    if (empty($catServices)) {
        // "Coming Soon" styling
        $dynamic_content .= '<div class="coming-soon-box" style="margin-top: 1rem; padding: 2rem; background: #fdfdfd; border: 1px dashed #ccc; border-radius: 8px; color: #777; text-align: center; font-size: 1.1rem;">';
        $dynamic_content .= '<strong>🚧 Currently in Legal Review:</strong> We are mapping the official procedures, state portals, and verified document checklists for ' . htmlspecialchars($page['category_name']) . ' across global jurisdictions. Updates will be rolling out shortly.';
        $dynamic_content .= '</div>';
    } else {
        $dynamic_content .= '<div class="countries-container">';
        foreach ($servicesByCountry as $countryName => $services) {
            $dynamic_content .= '<div class="category-block" style="margin-bottom: 2.5rem; background: #fff; padding: 1.5rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #eaeaea;">';
            $dynamic_content .= '<h2 style="margin-top: 0; color: var(--text-dark); border-bottom: 2px solid #f0f0f0; padding-bottom: 0.5rem; display: flex; align-items: center; justify-content: space-between;">';
            $dynamic_content .= '<span>🌍 ' . htmlspecialchars($countryName) . '</span>';
            $dynamic_content .= '</h2>';

            $dynamic_content .= '<div class="grid-links" style="margin-top: 1rem;">';
            foreach ($services as $cSrv) {
                // Apply lang prefix to internal urls
                $cUrl = base_url(($current_lang === 'en' ? '' : $current_lang . '/') . $cSrv['slug'] . '/');
                $dynamic_content .= '<a href="' . $cUrl . '" style="border-left: 3px solid var(--authority-blue);">' . htmlspecialchars($cSrv['title']) . '</a>';
            }
            $dynamic_content .= '</div></div>';
        }
        $dynamic_content .= '</div>';
    }
}

// Service page linking - dynamically pull related services inside same category
if ($page_type === 'service') {
    // We already have the current category_id stored internally for the active $service array
    // Let's refetch it if we need. Since we didn't inject category_id to $page initially:
    $stmtCatInfo = $pdo->prepare("SELECT category_id, country_id FROM services WHERE id = :id");
    $stmtCatInfo->execute(['id' => $page['id']]);
    $catInfo = $stmtCatInfo->fetch();

    if ($catInfo) {
        // Find 3 other services in the same country OR category
        $stmtRelated = $pdo->prepare("
            SELECT title, slug FROM services 
            WHERE status='published' AND id != :id AND (category_id = :cat OR country_id = :country)
            ORDER BY RAND() LIMIT 3
        ");
        $stmtRelated->execute(['id' => $page['id'], 'cat' => $catInfo['category_id'], 'country' => $catInfo['country_id']]);
        $relatedLinks = $stmtRelated->fetchAll();

        if (!empty($relatedLinks)) {
            $dynamic_content .= '<div class="related-services-block">';
            $dynamic_content .= '<h2>Related Services & Documents</h2>';
            $dynamic_content .= '<div class="grid-links">';
            foreach ($relatedLinks as $link) {
                $lUrl = base_url(($current_lang === 'en' ? '' : $current_lang . '/') . $link['slug'] . '/');
                $dynamic_content .= '<a href="' . $lUrl . '">' . htmlspecialchars($link['title']) . '</a>';
            }
            $dynamic_content .= '</div></div>';
        }
    }
}

require_once __DIR__ . '/includes/header.php';

if ($slug === 'home') {
    echo '<main>';
    echo str_replace('[BASE_URL]', base_url(), $dynamic_content);
    echo '</main>';
} else {
    echo '<main class="container" style="padding-top: 3rem; padding-bottom: 3rem;">';
    echo '<div class="content-box">';
    echo str_replace('[BASE_URL]', base_url(), $page['content']);
    echo str_replace('[BASE_URL]', base_url(), $dynamic_content);

    // Render FAQs if they exist
    if (!empty($faqs)) {
        echo '<h2>Frequently Asked Questions</h2>';
        echo '<div class="faq-list">';
        foreach ($faqs as $faq) {
            echo '<div class="faq-item">';
            echo '<h3>' . htmlspecialchars($faq['question']) . '</h3>';
            echo '<div>' . str_replace('[BASE_URL]', base_url(), $faq['answer']) . '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
    echo '</div>';
    echo '</main>';
}

require_once __DIR__ . '/includes/footer.php';
