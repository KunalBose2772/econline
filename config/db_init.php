<?php
// Database Auto-Initialization Script
// This script checks if the econline_pages table and homepage data exist in the database and creates them if missing.

try {
    // 1. Check if table exists
    $tableExists = false;
    try {
        $result = $pdo->query("SELECT 1 FROM `econline_pages` LIMIT 1");
        $tableExists = true;
    } catch (PDOException $e) {
        $tableExists = false;
    }

    if (!$tableExists) {
        // Create table
        $sql = "
        CREATE TABLE IF NOT EXISTS `econline_pages` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `slug` VARCHAR(255) UNIQUE NOT NULL,
            `keyword` VARCHAR(255) NOT NULL,
            `title` VARCHAR(255) NOT NULL,
            `meta_desc` VARCHAR(255) NOT NULL,
            `h1_title` VARCHAR(255) NOT NULL,
            `content` LONGTEXT NOT NULL,
            `faq_data` JSON DEFAULT NULL,
            `schema_type` VARCHAR(100) DEFAULT 'Article',
            `status` VARCHAR(50) DEFAULT 'published',
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        $pdo->exec($sql);
    }

    // 2. Check if homepage data exists
    $stmt = $pdo->prepare("SELECT id FROM econline_pages WHERE slug = 'home' LIMIT 1");
    $stmt->execute();
    $homeExists = $stmt->fetch();

    if (!$homeExists) {
        // Define Homepage Metadata and Content with exact 'ec online' keyword phrasing
        $slug = 'home';
        $keyword = 'ec online';
        $title = 'EC Online: Encumbrance Certificate Download & Search Guide';
        $meta_desc = 'Learn how to check, search, and download your Encumbrance Certificate ec online. Get step-by-step guidance for Tamil Nadu, Karnataka, AP, and all states.';
        $h1_title = 'Encumbrance Certificate ec online Guides';
        $schema_type = 'WebPage';

        $content = '
        <div class="disclaimer-box">
            <strong>Important E-E-A-T Disclaimer:</strong> This portal is a free, independent educational guide developed by property experts. We provide verified step-by-step procedures to check property titles on official state registry websites. We are not a government agency and do not charge any processing fees.
        </div>

        <!-- What is EC Section -->
        <div class="card">
            <h2>What is an Encumbrance Certificate ec online?</h2>
            <p class="content-text">
                An <strong>Encumbrance Certificate ec online</strong> is a vital legal document that certifies whether a property (land, plot, apartment, or commercial building) has any registered liabilities, unpaid mortgages, or pending legal disputes. In simple terms, an "encumbrance" means a charge or liability created on a property, typically as security for a loan.
            </p>
            <p class="content-text">
                When buying property in India, obtaining a clean <strong>ec online</strong> is the single most important step for <strong>property title verification</strong>. It serves as legal proof of absolute ownership and confirms that the property can be sold without any encumbrance or title defect.
            </p>
        </div>

        <!-- Official Portals Grid -->
        <h2 class="feature-section-title">Browse State ec online Portals</h2>
        <div class="states-grid">
            <!-- Tamil Nadu -->
            <div class="state-card">
                <div>
                    <div class="state-icon">🇮🇳</div>
                    <h3 class="state-title">Tamil Nadu (TNREGINET)</h3>
                    <p class="state-desc">Search and view Villangam ec online, Patta Chitta, and guideline values online via the official Inspector General of Registration portal.</p>
                </div>
                <a href="#" class="btn-primary">View TN Guide</a>
            </div>

            <!-- Karnataka -->
            <div class="state-card">
                <div>
                    <div class="state-icon">🇮🇳</div>
                    <h3 class="state-title">Karnataka (Kaveri / Bhoomi)</h3>
                    <p class="state-desc">Download digitally signed ec online certificates, check Kaveri online services, and view agricultural land records on the Bhoomi portal.</p>
                </div>
                <a href="#" class="btn-primary">View KA Guide</a>
            </div>

            <!-- Telangana -->
            <div class="state-card">
                <div>
                    <div class="state-icon">🇮🇳</div>
                    <h3 class="state-title">Telangana (IGRS / Dharani)</h3>
                    <p class="state-desc">Check land records and registration details online using the IGRS Telangana Portal and Dharani Land Dashboard.</p>
                </div>
                <a href="#" class="btn-primary">View TS Guide</a>
            </div>

            <!-- Andhra Pradesh -->
            <div class="state-card">
                <div>
                    <div class="state-icon">🇮🇳</div>
                    <h3 class="state-title">Andhra Pradesh (IGRS AP)</h3>
                    <p class="state-desc">Search for Encumbrance Certificate ec online details, check property registration status, and pull land mutation logs.</p>
                </div>
                <a href="#" class="btn-primary">View AP Guide</a>
            </div>
            
            <!-- Odisha -->
            <div class="state-card">
                <div>
                    <div class="state-icon">🇮🇳</div>
                    <h3 class="state-title">Odisha (IGR Odisha)</h3>
                    <p class="state-desc">Check land status, apply for official certified encumbrance copies, and verify registrations online.</p>
                </div>
                <a href="#" class="btn-primary">View OR Guide</a>
            </div>
            
            <!-- Kerala -->
            <div class="state-card">
                <div>
                    <div class="state-icon">🇮🇳</div>
                    <h3 class="state-title">Kerala (Pearl Portal)</h3>
                    <p class="state-desc">Verify property mutations, check land registration history, and apply for certified copy copies online.</p>
                </div>
                <a href="#" class="btn-primary">View KL Guide</a>
            </div>
        </div>

        <!-- Step-by-step search procedure -->
        <div class="card">
            <h2>How to Check and Verify an ec online: General Process</h2>
            <p class="content-text">
                While each state has its own designated registration portal (such as TNREGINET for Tamil Nadu or Kaveri for Karnataka), the general workflow to search for property ec online details remains similar across India:
            </p>
            
            <div class="steps-container">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Visit the Official State Registration Portal</h3>
                    <p class="content-text" style="margin-bottom:0;">Navigate to the official portal for the state where the property is located. Ensure the domain ends with `.gov.in` to avoid fraudulent clones.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Select "Encumbrance Search" or "View ec online"</h3>
                    <p class="content-text" style="margin-bottom:0;">Go to the citizen services menu and select "Search EC". You will typically need to register a free citizen login profile to view or print details.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Input Property Search Parameters</h3>
                    <p class="content-text" style="margin-bottom:0;">Enter precise property metrics, including the District, Sub-Registrar Office (SRO), Village name, Survey Number, Plot Number, or Document Number with registration year.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3 class="step-title">Download & Verify the ec online Certificate</h3>
                    <p class="content-text" style="margin-bottom:0;">View the search results on your screen. You can download the PDF containing details of all registered deeds (sale, mortgage, gift) affecting the property.</p>
                </div>
            </div>
        </div>

        <!-- Required documents check list -->
        <div class="card">
            <h2>Documents Required to Apply for an ec online</h2>
            <p class="content-text">
                If you are applying for a formally certified, digitally signed copy of your Encumbrance Certificate ec online, you will usually need to upload or enter details from the following documents:
            </p>
            <ul style="margin-left: 2rem; margin-bottom: 1.5rem; color: #475569;">
                <li style="margin-bottom: 0.5rem;"><strong>Property Sale Deed</strong>: Copy of the registered deed to confirm the exact schedule description.</li>
                <li style="margin-bottom: 0.5rem;"><strong>Property Address</strong>: Detailed address including ward/block number and boundaries (North, South, East, West).</li>
                <li style="margin-bottom: 0.5rem;"><strong>Survey/Patta Number</strong>: Valid land identifier numbers from the local revenue office.</li>
                <li style="margin-bottom: 0.5rem;"><strong>Identity Proof</strong>: Aadhar Card, PAN Card, or Passport copy for verification.</li>
            </ul>
        </div>
        ';

        $faqs = [
            [
                'question' => 'What is the full form of ec online in property registration?',
                'answer' => 'ec online stands for <strong>Encumbrance Certificate online</strong>. It is a legal document that lists all registered transactions (like sales, mortgages, partition deeds) related to a specific property over a specified search period (typically 15 to 30 years).'
            ],
            [
                'question' => 'Can I download an Encumbrance Certificate ec online for free?',
                'answer' => 'Yes, most state registration portals allow citizens to search and view property encumbrance details on screen or download a non-certified copy for free. However, if you need a digitally signed, legally certified ec online for bank loans or court cases, a nominal government fee must be paid online.'
            ],
            [
                'question' => 'What is a "Nil Encumbrance Certificate ec online"?',
                'answer' => 'A Nil Encumbrance Certificate is issued when there have been no registered transactions or active liabilities (like unpaid bank loans or legal charges) on the property during the requested search period. It means the title is clear of any recorded debts.'
            ],
            [
                'question' => 'How many years of search history should I run for my ec online?',
                'answer' => 'For complete legal safety, it is highly recommended to search the property registry records for a minimum of 13 to 30 years. Banks typically require a 30-year search history before approving home loans.'
            ],
            [
                'question' => 'How do I verify the authenticity of a downloaded ec online?',
                'answer' => 'Modern online certificates include a unique reference key, document number, or QR code. You can verify the certificate by entering this key on the official state registration portal under the "Verify Certified Copy" service.'
            ]
        ];
        $faq_json = json_encode($faqs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        $stmtInsert = $pdo->prepare("
            INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status)
            VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ");
        $stmtInsert->execute([
            'slug' => $slug,
            'keyword' => $keyword,
            'title' => $title,
            'meta_desc' => $meta_desc,
            'h1_title' => $h1_title,
            'content' => $content,
            'faq_data' => $faq_json,
            'schema_type' => $schema_type
        ]);
    }
} catch (PDOException $e) {
    // Fail silently in production
}
