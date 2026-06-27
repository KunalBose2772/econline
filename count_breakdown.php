<?php
require_once __DIR__ . '/config/config.php';

echo "LOCAL DB BREAKDOWN:\n";
$stmt = $pdo->query("SELECT status, redirect_to IS NULL as is_active, COUNT(*) as count FROM econline_pages GROUP BY status, redirect_to IS NULL");
foreach ($stmt->fetchAll() as $row) {
    printf("Status: %12s | Is Active (not redirected): %d | Count: %d\n", $row['status'], $row['is_active'], $row['count']);
}
