<?php
require_once __DIR__ . '/config.php';
$stmt = $pdo->query('SELECT COUNT(*) FROM econline_pages');
echo 'Total rows in database: ' . $stmt->fetchColumn() . "\n";
