<?php
require_once __DIR__ . '/config/config.php';
$stmt = $pdo->query("SELECT * FROM users LIMIT 1");
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
    echo "Found user: " . $user['username'] . "\n";
    $newPass = 'Admin@123';
    $hashed = password_hash($newPass, PASSWORD_DEFAULT);
    $pdo->prepare("UPDATE users SET password = ? WHERE id = ?")->execute([$hashed, $user['id']]);
    echo "Reset password to: " . $newPass . "\n";
} else {
    echo "No users found, creating one...\n";
    $username = 'admin';
    $newPass = 'Admin@123';
    $hashed = password_hash($newPass, PASSWORD_DEFAULT);
    $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)")->execute([$username, $hashed]);
    echo "Created user: $username with password: $newPass\n";
}
