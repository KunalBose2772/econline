<?php
require_once __DIR__ . '/../config/config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$pageData = [
    'title' => '',
    'slug' => '',
    'content' => '',
    'meta_title' => '',
    'meta_description' => '',
    'schema_type' => 'Article',
    'status' => 'published'
];
$faqs = [];

if ($id > 0) {
    $stmt = $pdo->prepare("SELECT * FROM pages WHERE id = :id");
    $stmt->execute(['id' => $id]);
    if ($row = $stmt->fetch()) {
        $pageData = $row;
    }

    $stmtFq = $pdo->prepare("SELECT * FROM faqs WHERE page_id = :pid ORDER BY id ASC");
    $stmtFq->execute(['pid' => $id]);
    $faqs = $stmtFq->fetchAll();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    // Ensure clean slug
    $slug = strtolower(preg_replace('/[^a-z0-9-]+/', '-', trim($_POST['slug'])));
    if (empty($slug) && $title !== '') {
        $slug = strtolower(preg_replace('/[^a-z0-9-]+/', '-', trim($title)));
    }

    $content = $_POST['content'];
    $meta_title = trim($_POST['meta_title']);
    $meta_description = trim($_POST['meta_description']);
    $schema_type = trim($_POST['schema_type']);
    $status = trim($_POST['status']);

    try {
        if ($id > 0) {
            $sql = "UPDATE pages SET title=?, slug=?, content=?, meta_title=?, meta_description=?, schema_type=?, status=?, last_updated=NOW() WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title, $slug, $content, $meta_title, $meta_description, $schema_type, $status, $id]);
        } else {
            $sql = "INSERT INTO pages (title, slug, content, meta_title, meta_description, schema_type, status, last_updated) VALUES (?,?,?,?,?,?,?,NOW())";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title, $slug, $content, $meta_title, $meta_description, $schema_type, $status]);
            $id = $pdo->lastInsertId();
        }

        // Handle FAQs
        $pdo->prepare("DELETE FROM faqs WHERE page_id=?")->execute([$id]);
        if (!empty($_POST['faq_q']) && is_array($_POST['faq_q'])) {
            $stmtFaq = $pdo->prepare("INSERT INTO faqs (page_id, question, answer) VALUES (?,?,?)");
            for ($i = 0; $i < count($_POST['faq_q']); $i++) {
                $q = trim($_POST['faq_q'][$i]);
                $a = trim($_POST['faq_a'][$i]);
                if (!empty($q) && !empty($a)) {
                    $stmtFaq->execute([$id, $q, $a]);
                }
            }
        }
        header("Location: dashboard.php");
        exit;
    } catch (PDOException $e) {
        $error = "Error saving page: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $id ? 'Edit' : 'Add'; ?> Page - Admin
    </title>
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
        }

        .container {
            padding: 2rem;
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
        }

        label {
            display: block;
            margin-top: 1rem;
            font-weight: 600;
            font-size: 0.9rem;
            color: #475569;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: inherit;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            background: #1d4ed8;
            color: #fff;
            text-decoration: none;
            margin-top: 1.5rem;
        }

        .btn-secondary {
            background: #64748b;
            margin-left: 10px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .faq-item {
            border: 1px solid #e2e8f0;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 4px;
            background: #f8fafc;
        }

        .remove-faq {
            color: #dc2626;
            text-decoration: none;
            font-size: 13px;
            float: right;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <div style="font-weight:bold; font-size:1.2rem;">Admin Panel</div>
        <a href="dashboard.php">Back to Dashboard</a>
    </header>
    <div class="container">
        <h2>
            <?php echo $id ? 'Edit' : 'Add New'; ?> Page
        </h2>
        <?php if ($error): ?>
            <div style="color:red; margin-bottom:1rem; border:1px solid red; padding:10px;">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <label>Page Title</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($pageData['title']); ?>" required>

            <label>URL Slug (Use 'home' for homepage)</label>
            <input type="text" name="slug" value="<?php echo htmlspecialchars($pageData['slug']); ?>" required>

            <label>Page Content (HTML allowed)</label>
            <textarea name="content"><?php echo htmlspecialchars($pageData['content']); ?></textarea>

            <fieldset style="border:1px solid #e2e8f0; border-radius:4px; margin-top:2rem; padding:1rem;">
                <legend style="font-weight:bold; color:#1d4ed8;">SEO / Meta Data</legend>
                <div class="grid-2">
                    <div>
                        <label>Meta Title (Max 60 chars automatically handled)</label>
                        <input type="text" name="meta_title"
                            value="<?php echo htmlspecialchars($pageData['meta_title']); ?>">
                    </div>
                    <div>
                        <label>Meta Description (Max 160 chars automatically handled)</label>
                        <input type="text" name="meta_description"
                            value="<?php echo htmlspecialchars($pageData['meta_description']); ?>">
                    </div>
                    <div>
                        <label>Schema Type</label>
                        <select name="schema_type">
                            <option value="Article" <?php if ($pageData['schema_type'] == 'Article')
                                echo 'selected'; ?>
                                >Article</option>
                            <option value="Organization" <?php if ($pageData['schema_type'] == 'Organization')
                                echo 'selected'; ?>>Organization</option>
                            <option value="FAQPage" <?php if ($pageData['schema_type'] == 'FAQPage')
                                echo 'selected'; ?>
                                >FAQPage</option>
                            <option value="WebPage" <?php if ($pageData['schema_type'] == 'WebPage')
                                echo 'selected'; ?>
                                >WebPage</option>
                            <option value="AboutPage" <?php if ($pageData['schema_type'] == 'AboutPage')
                                echo 'selected'; ?>>AboutPage</option>
                            <option value="ContactPage" <?php if ($pageData['schema_type'] == 'ContactPage')
                                echo 'selected'; ?>>ContactPage</option>
                        </select>
                    </div>
                    <div>
                        <label>Status</label>
                        <select name="status">
                            <option value="published" <?php if ($pageData['status'] == 'published')
                                echo 'selected'; ?>
                                >Published</option>
                            <option value="draft" <?php if ($pageData['status'] == 'draft')
                                echo 'selected'; ?>>Draft
                            </option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset style="border:1px solid #e2e8f0; border-radius:4px; margin-top:2rem; padding:1rem;">
                <legend style="font-weight:bold; color:#16a34a;">FAQs Section</legend>
                <div id="faq-container">
                    <?php foreach ($faqs as $i => $faq): ?>
                        <div class="faq-item">
                            <span class="remove-faq" onclick="this.parentElement.remove()">Remove</span>
                            <label>Question</label>
                            <input type="text" name="faq_q[]" value="<?php echo htmlspecialchars($faq['question']); ?>">
                            <label>Answer (HTML allowed)</label>
                            <textarea name="faq_a[]"
                                style="min-height:80px;"><?php echo htmlspecialchars($faq['answer']); ?></textarea>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="btn" style="background:#16a34a; font-size:14px; padding:6px 12px;"
                    onclick="addFaq()">+ Add FAQ</button>
            </fieldset>

            <button type="submit" class="btn">Save Page</button>
            <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script>
        function addFaq() {
            var container = document.getElementById('faq-container');
            var div = document.createElement('div');
            div.className = 'faq-item';
            div.innerHTML = `
        <span class="remove-faq" onclick="this.parentElement.remove()">Remove</span>
        <label>Question</label>
        <input type="text" name="faq_q[]" value="">
        <label>Answer (HTML allowed)</label>
        <textarea name="faq_a[]" style="min-height:80px;"></textarea>
    `;
            container.appendChild(div);
        }
    </script>
</body>

</html>