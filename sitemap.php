<?php
require_once __DIR__ . '/config/config.php';

header("Content-Type: application/xml; charset=utf-8");
header("Cache-Control: public, max-age=3600, must-revalidate");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Determine file modification dates for root assets
$home_lastmod = file_exists(__DIR__ . '/pages/home.php') ? date('Y-m-d', filemtime(__DIR__ . '/pages/home.php')) : date('Y-m-d');
$dir_lastmod = file_exists(__DIR__ . '/pages/site-directory.php') ? date('Y-m-d', filemtime(__DIR__ . '/pages/site-directory.php')) : date('Y-m-d');

// Add homepage
echo '  <url>' . "\n";
echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . '</loc>' . "\n";
echo '    <lastmod>' . $home_lastmod . '</lastmod>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>1.0</priority>' . "\n";
echo '  </url>' . "\n";

// Add site directory
echo '  <url>' . "\n";
echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . 'site-directory/</loc>' . "\n";
echo '    <lastmod>' . $dir_lastmod . '</lastmod>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>0.9</priority>' . "\n";
echo '  </url>' . "\n";

$redirected_slugs = [];

// Dynamically fetch redirected slugs from database
try {
    $stmt_red = $pdo->query("SELECT slug FROM econline_pages WHERE redirect_to IS NOT NULL AND redirect_to != ''");
    while ($row_red = $stmt_red->fetch(PDO::FETCH_ASSOC)) {
        $redirected_slugs[$row_red['slug']] = true;
    }
} catch (PDOException $e) {
    // DB fallback
}

// Map static array redirects
$static_redirects_keys = ['ec-apply-online-in-tamilnadu', 'ec-check-online-tamilnadu', 'ec-copy-online-tamilnadu', 'get-ec-online-tamilnadu', 'how-to-apply-ec-online-in-tamilnadu', 'how-to-apply-for-ec-online-in-tamilnadu', 'how-to-check-ec-online-in-tamilnadu', 'how-to-check-ec-online-tamilnadu', 'how-to-get-ec-online-in-tamilnadu', 'how-to-take-ec-online-in-tamilnadu', 'ecview-tnreginet', 'ecview-tnreginet-net', 'tnreginet-ec-online-view', 'tnreginet-net-ec-view', 'www-tnreginet-net-ec', 'www-tnreginet-net-ec-view', 'www-tnreginet-net-2018-ec', 'tnreginet-ec-view-online', 'guideline-value-tamilnadu', 'tnreginet-guideline-value-tamilnadu', 'tnreginet-net-guideline-value', 'www-tnreginet-net-guideline-value', 'wwwtnreginetnet-guideline-value-2023', 'tnreginet-land-value', 'patta-chitta-ec-online', 'patta-chitta-ec-online-status-tamilnadu', 'patta-chitta-ec-online-tamil', 'tn-patta-chitta-ec-online', 'tamil-nadu-patta-chitta-ec-online', 'tnreginet-patta'];
foreach ($static_redirects_keys as $srk) {
    $redirected_slugs[$srk] = true;
}

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
