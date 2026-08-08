<?php
require_once __DIR__ . '/config/config.php';

header("Content-Type: application/xml; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Add homepage
echo '  <url>' . "\n";
echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . '</loc>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>1.0</priority>' . "\n";
echo '  </url>' . "\n";

// Add site directory
echo '  <url>' . "\n";
echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . 'site-directory/</loc>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>0.9</priority>' . "\n";
echo '  </url>' . "\n";

$redirected_slugs = [
    'ec-apply-online-in-tamilnadu' => true,
    'ec-check-online-tamilnadu' => true,
    'ec-copy-online-tamilnadu' => true,
    'get-ec-online-tamilnadu' => true,
    'how-to-apply-ec-online-in-tamilnadu' => true,
    'how-to-apply-for-ec-online-in-tamilnadu' => true,
    'how-to-check-ec-online-in-tamilnadu' => true,
    'how-to-check-ec-online-tamilnadu' => true,
    'how-to-get-ec-online-in-tamilnadu' => true,
    'how-to-take-ec-online-in-tamilnadu' => true,
    'ecview-tnreginet' => true,
    'ecview-tnreginet-net' => true,
    'tnreginet-ec-online-view' => true,
    'tnreginet-net-ec-view' => true,
    'www-tnreginet-net-ec' => true,
    'www-tnreginet-net-ec-view' => true,
    'www-tnreginet-net-2018-ec' => true,
    'tnreginet-ec-view-online' => true,
    'guideline-value-tamilnadu' => true,
    'tnreginet-guideline-value-tamilnadu' => true,
    'tnreginet-net-guideline-value' => true,
    'www-tnreginet-net-guideline-value' => true,
    'wwwtnreginetnet-guideline-value-2023' => true,
    'tnreginet-land-value' => true,
    'patta-chitta-ec-online' => true,
    'patta-chitta-ec-online-status-tamilnadu' => true,
    'patta-chitta-ec-online-tamil' => true,
    'tn-patta-chitta-ec-online' => true,
    'tamil-nadu-patta-chitta-ec-online' => true,
    'tnreginet-patta' => true,
];

$all_slugs = [];

// 1. Scan physical hub files in pages/
$pages_dir = __DIR__ . '/pages';
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $f) {
        if (substr($f, -4) === '.php') {
            $s = substr($f, 0, -4);
            if ($s !== 'home' && $s !== 'site-directory' && !isset($redirected_slugs[$s])) {
                $fpath = $pages_dir . '/' . $f;
                $lastmod = date('Y-m-d', filemtime($fpath));
                $all_slugs[$s] = $lastmod;
            }
        }
    }
}

// 2. Fetch database pages
try {
    $stmt = $pdo->query("SELECT slug, updated_at FROM econline_pages WHERE status = 'published' AND slug != 'home' AND slug != 'site-directory' AND (redirect_to IS NULL OR redirect_to = '') ORDER BY id ASC");
    $db_pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($db_pages as $page) {
        $s = $page['slug'];
        if (!isset($redirected_slugs[$s]) && !isset($all_slugs[$s])) {
            $lastmod = date('Y-m-d', strtotime($page['updated_at']));
            $all_slugs[$s] = $lastmod;
        }
    }
} catch (PDOException $e) {
    // Fallback if DB unavailable
}

// Output all deduplicated URLs
ksort($all_slugs);
foreach ($all_slugs as $s => $lastmod) {
    echo '  <url>' . "\n";
    echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . htmlspecialchars($s) . '/</loc>' . "\n";
    echo '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
    echo '    <changefreq>weekly</changefreq>' . "\n";
    echo '    <priority>0.8</priority>' . "\n";
    echo '  </url>' . "\n";
}

echo '</urlset>' . "\n";
?>
