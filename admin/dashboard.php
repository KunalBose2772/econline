<?php
require_once __DIR__ . '/../config/config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM pages WHERE id = :id");
    $stmt->execute(['id' => $id]);
    header("Location: dashboard.php");
    exit;
}

$stmt = $pdo->query("SELECT id, title, slug, status, last_updated FROM pages ORDER BY last_updated DESC");
$pages = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard - econline.in Admin</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: #f8fafc;
            color: #1e293b;
        }

        header {
            background: #0f172a;
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        .container {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #f1f5f9;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            color: #64748b;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-primary {
            background: #1d4ed8;
            color: #fff;
        }

        .btn-danger {
            background: #dc2626;
            color: #fff;
            padding: 4px 8px;
            font-size: 12px;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge.published {
            background: #dcfce7;
            color: #166534;
        }

        .badge.draft {
            background: #fef9c3;
            color: #854d0e;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <div style="display:flex; align-items:center; gap: 1rem;">
            <img src="../assets/econline_logo.png" alt="Logo" style="height: 30px; filter: brightness(0) invert(1);">
            <span>| Admin Panel</span>
        </div>
        <a href="?logout=1" style="background:#dc2626; padding:0.5rem 1rem; border-radius:4px;">Logout</a>
    </header>
    <div class="container">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 2rem;">
            <h2 style="margin: 0;">Manage Pages</h2>
            <a href="edit.php" class="btn btn-primary">+ Add New Page</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug URL</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pages as $p): ?>
                    <tr>
                        <td>
                            <?php echo $p['id']; ?>
                        </td>
                        <td><strong>
                                <?php echo htmlspecialchars($p['title']); ?>
                            </strong></td>
                        <td><a href="<?php echo base_url($p['slug'] == 'home' ? '' : $p['slug'] . '/'); ?>" target="_blank"
                                style="color: #2563eb;">/
                                <?php echo htmlspecialchars($p['slug']); ?>/
                            </a></td>
                        <td><span class="badge <?php echo $p['status']; ?>">
                                <?php echo ucfirst($p['status']); ?>
                            </span></td>
                        <td style="color:#64748b; font-size:0.9rem;">
                            <?php echo date('M d, Y', strtotime($p['last_updated'])); ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $p['id']; ?>" class="btn btn-primary"
                                style="padding:4px 8px; font-size:12px;">Edit</a>
                            <?php if ($p['slug'] !== 'home'): ?>
                                <a href="?delete=<?php echo $p['id']; ?>" class="btn btn-danger"
                                    onclick="return confirm('Delete this page?');">Del</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>