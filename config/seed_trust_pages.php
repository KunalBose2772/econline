<?php
require_once __DIR__ . '/config.php';

$pages = [
    [
        'slug' => 'about-us',
        'keyword' => 'about econline, about us',
        'title' => 'About Us | econline.in',
        'meta_desc' => 'Learn more about econline.in, our mission, and how we help citizens navigate Indian state registry and Encumbrance Certificate portals.',
        'h1_title' => 'About EC Online',
        'schema_type' => 'WebPage',
        'content' => '
<div class="card">
    <p class="content-text">Welcome to <strong>econline.in</strong>, a dedicated educational resource portal designed to simplify the process of searching, verifying, and downloading property Encumbrance Certificates (EC) across different states in India.</p>
    
    <h2>Our Mission</h2>
    <p class="content-text">Property documentation in India can often be complex and challenging to navigate. Our mission is to provide clear, step-by-step guides, search link directories, official fees, and requirements checklist toolkits to empower property buyers, sellers, and owners. We aim to help users locate authentic state portals (such as TNREGINET, Kaveri Online Services, IGRS Telangana, and IGRS AP) without confusion.</p>
    
    <h2>Who We Are</h2>
    <p class="content-text">We are an independent team of real estate enthusiasts, legal document researchers, and technical writers. Over years of assisting citizens with documentation requirements, we realized the need for a consolidated, easy-to-read knowledge base. Our team continuously researches and updates these guides to reflect current official procedures.</p>
    
    <h2>Independent Informational Portal</h2>
    <p class="content-text">Please note that <strong>econline.in</strong> is an independent information portal. We are NOT affiliated with, authorized by, or associated with any government department, registrar office, or state authority. Our goal is solely to guide users to official channels where they can execute transactions safely.</p>
</div>'
    ],
    [
        'slug' => 'contact-us',
        'keyword' => 'contact econline, contact us',
        'title' => 'Contact Us | econline.in',
        'meta_desc' => 'Have questions or feedback? Contact the econline.in editorial team for queries, suggestions, or corrections related to our guides.',
        'h1_title' => 'Contact Us',
        'schema_type' => 'WebPage',
        'content' => '
<div class="card">
    <p class="content-text">We value your feedback, queries, and suggestions. If you have noticed any outdated information in our guides, want to report a broken link, or have questions about our content, please feel free to reach out to us.</p>
    
    <h2>How to Reach Us</h2>
    <p class="content-text">You can contact the editorial and research team directly via email. We endeavor to respond to all legitimate inquiries within 48 to 72 business hours.</p>
    
    <div style="background-color: var(--bg-main); border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1.5rem; margin: 2rem 0; text-align: center;">
        <span style="font-size: 2rem; display: block; margin-bottom: 0.5rem;">📧</span>
        <strong style="font-size: 1.1rem; color: var(--primary);">Email Address:</strong>
        <p style="font-size: 1.2rem; color: var(--accent); margin: 0.5rem 0 0 0; font-weight: 600;">admin@econline.in</p>
    </div>
    
    <h2>Important Notice</h2>
    <p class="content-text"><strong>Please note:</strong> As an independent guide portal, we cannot retrieve certificates, verify your property records, or handle registration applications. For status queries or official complaints, please contact your respective Sub-Registrar Office (SRO) or the helpline of your state\'s registration portal directly.</p>
</div>'
    ],
    [
        'slug' => 'privacy-policy',
        'keyword' => 'privacy policy',
        'title' => 'Privacy Policy | econline.in',
        'meta_desc' => 'Read our privacy policy to understand how econline.in collects, protects, and handles user data, cookies, and traffic logs.',
        'h1_title' => 'Privacy Policy',
        'schema_type' => 'WebPage',
        'content' => '
<div class="card">
    <p class="content-text">At <strong>econline.in</strong>, we prioritize the privacy of our visitors. This Privacy Policy document outlines the types of information we collect, how we use it, and your choices regarding data.</p>
    
    <h2>Information Collection and Use</h2>
    <p class="content-text">We do not require users to create accounts, submit property documents, or share personal identifying information (PII) to access our guides. The site is entirely public-access.</p>
    
    <h2>Log Files & Analytics</h2>
    <p class="content-text">Like most websites, we use standard server logs and analytical software (such as Google Analytics). These logs automatically gather details such as Internet Protocol (IP) addresses, browser types, Internet Service Provider (ISP), date/time stamps, referring/exit pages, and click counts. We use this data solely to analyze traffic trends, administer the site, and improve user experiences.</p>
    
    <h2>Cookies and Web Beacons</h2>
    <p class="content-text">We use cookies to store information about visitors\' preferences and customize web page content based on browser type. You can choose to disable cookies through your individual browser options, though this may impact some interactive tool functionalities.</p>
    
    <h2>Third-Party Advertising</h2>
    <p class="content-text">We may display advertisements from third-party networks (e.g. Google AdSense). These third-party ad servers use technology to serve advertisements directly to your browser, automatically receiving your IP address in the process. We do not have access to or control over these cookies used by third-party advertisers.</p>
    
    <h2>Changes to This Policy</h2>
    <p class="content-text">We reserve the right to update this Privacy Policy from time to time. The date of the last revision will be updated at the bottom of this page. Your continued use of the site signifies your agreement to this policy.</p>
</div>'
    ],
    [
        'slug' => 'terms-conditions',
        'keyword' => 'terms and conditions, terms of service',
        'title' => 'Terms & Conditions | econline.in',
        'meta_desc' => 'Review the terms and conditions for using econline.in, our educational guides, and the disclaimer of official affiliation.',
        'h1_title' => 'Terms and Conditions',
        'schema_type' => 'WebPage',
        'content' => '
<div class="card">
    <p class="content-text">By accessing and using <strong>econline.in</strong>, you accept and agree to be bound by the terms and provision of this agreement.</p>
    
    <h2>1. Use of Content</h2>
    <p class="content-text">All content, guides, images, widgets, and tools provided on this website are for educational and informational purposes only. You are permitted to view and print material for your personal, non-commercial use. Any unauthorized reproduction, distribution, or commercial use of our guides is strictly prohibited.</p>
    
    <h2>2. Informational Accuracy</h2>
    <p class="content-text">While we strive to keep all state guide processes, fees, and links accurate and up to date, registration rules and portal interfaces in India change frequently. We make no warranties, express or implied, regarding the completeness, accuracy, or reliability of the information. Users are advised to cross-verify all details with the official government portals before making financial or legal decisions.</p>
    
    <h2>3. Disclaimer of Affiliation</h2>
    <p class="content-text">This website is not owned, operated, or endorsed by any municipal corporation, state government department, registration department, or Union government authority. We only serve as an educational aggregator. We do not charge fees for certificate retrieval and do not provide legal consulting services.</p>
    
    <h2>4. Limitation of Liability</h2>
    <p class="content-text">Under no circumstances shall <strong>econline.in</strong> or its authors be liable for any direct, indirect, incidental, or consequential damages resulting from the use of, or the inability to use, the information or tools provided on this portal.</p>
</div>'
    ],
    [
        'slug' => 'disclaimer',
        'keyword' => 'disclaimer',
        'title' => 'Disclaimer | econline.in',
        'meta_desc' => 'Read the official disclaimer of econline.in regarding government affiliation, data accuracy, and user liability.',
        'h1_title' => 'Legal Disclaimer',
        'schema_type' => 'WebPage',
        'content' => '
<div class="card">
    <p class="content-text">The information provided on <strong>econline.in</strong> is for general informational and educational purposes only.</p>
    
    <h2>No Government Affiliation</h2>
    <p class="content-text" style="color: #b91c1c; font-weight: 600;">IMPORTANT: econline.in is a privately run, independent informational portal. We are NOT associated with the Department of Registration and Stamps, any state government, municipal council, or central authority of India.</p>
    <p class="content-text">We do not provide official government services. The links and instructions provided are to direct citizens to the public domains of respective state registration departments. All transactions, payments, and document uploads must be performed directly on the official government websites.</p>
    
    <h2>No Professional or Legal Advice</h2>
    <p class="content-text">The content on this website does not constitute legal, financial, or real estate advice. Real estate laws and registration procedures can vary considerably based on state amendments. If you require legal assistance regarding property titles, encumbrance certificates, or document registration, please consult a qualified advocate or property legal expert.</p>
    
    <h2>External Links</h2>
    <p class="content-text">This portal contains hyperlinks to external, official state government domains (e.g. tnreginet.gov.in, kaverionline.karnataka.gov.in, etc.). We do not control, inspect, or guarantee the operational state, security, or availability of these external portals, and we assume no responsibility for any activities or issues experienced on them.</p>
</div>'
    ]
];

foreach ($pages as $p) {
    // Check if slug exists
    $stmt = $pdo->prepare("SELECT id FROM econline_pages WHERE slug = :slug");
    $stmt->execute(['slug' => $p['slug']]);
    $existing = $stmt->fetch();
    
    if ($existing) {
        // Update
        $stmt = $pdo->prepare("
            UPDATE econline_pages 
            SET keyword = :keyword, title = :title, meta_desc = :meta_desc, h1_title = :h1_title, content = :content, schema_type = :schema_type, status = 'published'
            WHERE slug = :slug
        ");
        $stmt->execute($p);
        echo "Updated page: " . $p['slug'] . "\n";
    } else {
        // Insert
        $stmt = $pdo->prepare("
            INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, schema_type, status)
            VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :schema_type, 'published')
        ");
        $stmt->execute($p);
        echo "Created page: " . $p['slug'] . "\n";
    }
}

// Clear static HTML and sitemap cache
$cache_dir = __DIR__ . '/../cache';
if (is_dir($cache_dir)) {
    array_map('unlink', glob($cache_dir . '/*'));
    echo "Cleared static cache.\n";
}

echo "Trust pages seeding complete!\n";
