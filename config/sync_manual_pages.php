<?php
require_once __DIR__ . '/config.php';

$dir = __DIR__ . '/manual_pages/';
$files = glob($dir . '*.php');

echo "Found " . count($files) . " manual pages.\n";

$sql = "INSERT INTO econline_pages 
        (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status) 
        VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ON DUPLICATE KEY UPDATE 
        keyword = VALUES(keyword),
        title = VALUES(title),
        meta_desc = VALUES(meta_desc),
        h1_title = VALUES(h1_title),
        content = VALUES(content),
        faq_data = VALUES(faq_data),
        schema_type = VALUES(schema_type)";

$stmt = $pdo->prepare($sql);

foreach ($files as $file) {
    $data = include $file;
    if (is_array($data)) {
        try {
            $stmt->execute([
                'slug' => $data['slug'],
                'keyword' => $data['keyword'],
                'title' => $data['title'],
                'meta_desc' => $data['meta_desc'],
                'h1_title' => $data['h1_title'],
                'content' => $data['content'],
                'faq_data' => $data['faq_data'] ?? null,
                'schema_type' => $data['schema_type'] ?? 'Article'
            ]);
            echo "Synced page: " . $data['slug'] . "\n";
        } catch (Exception $e) {
            echo "Error syncing " . $data['slug'] . ": " . $e->getMessage() . "\n";
        }
    }
}
echo "Sync complete!\n";
