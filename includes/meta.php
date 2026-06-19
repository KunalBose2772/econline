<?php
// Prepare Schema markup
$schemas = [];

// 1. Organization Schema (homepage or explicit Organization type)
if ($slug === 'home' || $page['schema_type'] === 'Organization') {
    $schemas[] = [
        "@context" => "https://schema.org",
        "@type" => "Organization",
        "name" => "econline.in",
        "url" => base_url(),
        "logo" => base_url('assets/econline_logo.png')
    ];
}

// 2. Article / Service Schema
if ($page['schema_type'] === 'Article') {
    $schemas[] = [
        "@context" => "https://schema.org",
        "@type" => "Article",
        "headline" => $meta_title,
        "description" => $meta_description,
        "datePublished" => $page['last_updated'],
        "dateModified" => $page['last_updated']
    ];
}

// 3. FAQPage Schema
if (!empty($faqs)) {
    $faqItems = [];
    foreach ($faqs as $faq) {
        $faqItems[] = [
            "@type" => "Question",
            "name" => htmlspecialchars($faq['question']),
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => strip_tags($faq['answer'])
            ]
        ];
    }
    $schemas[] = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $faqItems
    ];
}

// 4. BreadcrumbList Schema
$breadcrumbItems = [
    [
        "@type" => "ListItem",
        "position" => 1,
        "name" => "Home",
        "item" => base_url()
    ]
];
if ($slug !== 'home' && $slug !== '404') {
    $breadcrumbItems[] = [
        "@type" => "ListItem",
        "position" => 2,
        "name" => htmlspecialchars($page['title']),
        "item" => $canonical_url
    ];
}
$schemas[] = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => $breadcrumbItems
];

// Output JSON-LD Schemas
foreach ($schemas as $schema) {
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
?>