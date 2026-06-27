<?php
require_once __DIR__ . '/config/config.php';

$stmt = $pdo->query("SELECT slug FROM econline_pages WHERE status = 'published' AND redirect_to IS NULL ORDER BY slug ASC");
$urls = [];
while ($row = $stmt->fetch()) {
    $urls[] = "https://econline.in/" . $row['slug'] . "/";
}

file_put_contents(__DIR__ . '/all_active_urls.txt', implode("\n", $urls) . "\n");
echo "Successfully generated all_active_urls.txt with " . count($urls) . " URLs.\n";
