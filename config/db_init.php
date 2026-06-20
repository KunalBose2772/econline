<?php
// Database Auto-Initialization Script
// This script checks if the econline_pages table exists and inserts/updates the homepage content.

try {
    // 1. Check if table exists, create if missing
    $tableExists = false;
    try {
        $result = $pdo->query("SELECT 1 FROM `econline_pages` LIMIT 1");
        $tableExists = true;
    } catch (PDOException $e) {
        $tableExists = false;
    }

    if (!$tableExists) {
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

    // 2. Define Homepage Metadata and Content with exact 'ec online' keyword phrasing
    $slug = 'home';
    $keyword = 'ec online';
    $title = 'EC Online: Encumbrance Certificate Download & Search Guide';
    $meta_desc = 'Learn how to check, search, and download your Encumbrance Certificate ec online. Get step-by-step guidance for Tamil Nadu, Karnataka, AP, and all states.';
    $h1_title = 'Encumbrance Certificate ec online Guides';
    $schema_type = 'WebPage';

    $content = '
    
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
            <a href="/online-ec-tamilnadu/" class="btn-primary">View TN Guide</a>
        </div>

        <!-- Karnataka -->
        <div class="state-card">
            <div>
                <div class="state-icon">🇮🇳</div>
                <h3 class="state-title">Karnataka (Kaveri / Bhoomi)</h3>
                <p class="state-desc">Download digitally signed ec online certificates, check Kaveri online services, and view agricultural land records on the Bhoomi portal.</p>
            </div>
            <a href="#ka-guide" class="btn-primary">View KA Guide</a>
        </div>

        <!-- Telangana -->
        <div class="state-card">
            <div>
                <div class="state-icon">🇮🇳</div>
                <h3 class="state-title">Telangana (IGRS / Dharani)</h3>
                <p class="state-desc">Check land records and registration details online using the IGRS Telangana Portal and Dharani Land Dashboard.</p>
            </div>
            <a href="#ts-guide" class="btn-primary">View TS Guide</a>
        </div>

        <!-- Andhra Pradesh -->
        <div class="state-card">
            <div>
                <div class="state-icon">🇮🇳</div>
                <h3 class="state-title">Andhra Pradesh (IGRS AP)</h3>
                <p class="state-desc">Search for Encumbrance Certificate ec online details, check property registration status, and pull land mutation logs.</p>
            </div>
            <a href="#ap-guide" class="btn-primary">View AP Guide</a>
        </div>
    </div>

    <!-- State Comparison Table -->
    <div class="card">
        <h2>State-Wise ec online Fee & Processing Metrics</h2>
        <p class="content-text">
            Different states charge different fees and have varying timelines for processing an Encumbrance Certificate ec online. The table below outlines the comparison for quick reference:
        </p>
        <div style="overflow-x: auto; margin: 1.5rem 0;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
                <thead>
                    <tr style="background-color: var(--primary); color: white;">
                        <th style="padding: 12px; border: 1px solid var(--border);">State / Portal</th>
                        <th style="padding: 12px; border: 1px solid var(--border);">Search Type</th>
                        <th style="padding: 12px; border: 1px solid var(--border);">Official Government Fee</th>
                        <th style="padding: 12px; border: 1px solid var(--border);">Processing Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #ffffff;">
                        <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Tamil Nadu (TNREGINET)</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Villangam EC Search</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Free to search; Nominal fee for certified copy</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Instant (Online View)</td>
                    </tr>
                    <tr style="background-color: #f8fafc;">
                        <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Karnataka (Kaveri Portal)</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Kaveri Online EC</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Rs. 15 (First year) + Rs. 10 (Subsequent years)</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">2 to 3 Working Days</td>
                    </tr>
                    <tr style="background-color: #ffffff;">
                        <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Telangana (IGRS TS)</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">IGRS EC Search</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Nominal state search charges apply</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">1 to 2 Working Days</td>
                    </tr>
                    <tr style="background-color: #f8fafc;">
                        <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Andhra Pradesh (IGRS AP)</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Property EC Search</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Varies by search period length</td>
                        <td style="padding: 12px; border: 1px solid var(--border);">Instant to 24 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Detailed State guides section -->
    <h2 class="feature-section-title" style="margin-top: 4rem;">Detailed State Guide Walkthroughs</h2>

    <!-- Tamil Nadu Guide -->
    <div class="card" id="tn-guide" style="border-top: 4px solid var(--accent);">
        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
            <span style="font-size: 2rem;">🇮🇳</span>
            <h2 style="margin-bottom: 0;">Tamil Nadu: How to Search Villangam ec online</h2>
        </div>
        <p class="content-text">
            Tamil Nadu registration department allows citizens to search and view property encumbrances online through the <strong>TNREGINET</strong> portal. Below is the step-by-step walkthrough:
        </p>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="step-title">Visit the TNREGINET Portal</h3>
                <p class="content-text" style="margin-bottom:0;">Go to the official website: <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener">tnreginet.gov.in</a>.</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="step-title">Navigate to EC Search</h3>
                <p class="content-text" style="margin-bottom:0;">Select the menu option <strong>"More" &rarr; "Search EC" &rarr; "Apply Online"</strong> from the home navigation tab.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="step-title">Enter Property Details</h3>
                <p class="content-text" style="margin-bottom:0;">Input details including District, Zone, Sub-Registrar Office (SRO), Village name, and Survey/Subdivision number.</p>
            </div>
            <div class="step-card">
                <div class="step-number">4</div>
                <h3 class="step-title">Download the EC PDF</h3>
                <p class="content-text" style="margin-bottom:0;">Verify the captcha, click search, and download your <strong>Villangam ec online</strong> transaction log document.</p>
            </div>
        </div>
    </div>

    <!-- Karnataka Guide -->
    <div class="card" id="ka-guide" style="border-top: 4px solid var(--accent);">
        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
            <span style="font-size: 2rem;">🇮🇳</span>
            <h2 style="margin-bottom: 0;">Karnataka: Kaveri Online Services ec online Guide</h2>
        </div>
        <p class="content-text">
            For properties located in Bangalore or other districts in Karnataka, citizens can apply for an Encumbrance Certificate ec online via the <strong>Kaveri Online Services</strong> portal:
        </p>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="step-title">Log in to Kaveri Portal</h3>
                <p class="content-text" style="margin-bottom:0;">Access <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener">kaverionline.karnataka.gov.in</a> and login to your account (or register as a new user).</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="step-title">Select "Online EC" Service</h3>
                <p class="content-text" style="margin-bottom:0;">Select <strong>"Online EC"</strong> under citizen services to initiate a digital search query.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="step-title">Provide Property Spec</h3>
                <p class="content-text" style="margin-bottom:0;">Provide the District, SRO office, Property type (agriculture/non-agriculture), Survey number, and boundaries details.</p>
            </div>
            <div class="step-card">
                <div class="step-number">4</div>
                <h3 class="step-title">Payment & Certified Copy Download</h3>
                <p class="content-text" style="margin-bottom:0;">Pay the nominal search fee online. Once the sub-registrar office signs the request digitally, you can download the final PDF from your profile dashboard.</p>
            </div>
        </div>
    </div>

    <!-- Telangana Guide -->
    <div class="card" id="ts-guide" style="border-top: 4px solid var(--accent);">
        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
            <span style="font-size: 2rem;">🇮🇳</span>
            <h2 style="margin-bottom: 0;">Telangana: IGRS Telangana ec online Search</h2>
        </div>
        <p class="content-text">
            To view transaction records of land registry details in Telangana state, citizens can search using the <strong>IGRS TS</strong> dashboard:
        </p>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="step-title">Visit the IGRS Telangana Site</h3>
                <p class="content-text" style="margin-bottom:0;">Go to the homepage: <a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener">registration.telangana.gov.in</a>.</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="step-title">Open Encumbrance Certificate Menu</h3>
                <p class="content-text" style="margin-bottom:0;">Click the **"Encumbrance Certificate (EC)"** link on the home services list.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="step-title">Search by Document Number</h3>
                <p class="content-text" style="margin-bottom:0;">Select search option <strong>"By Document No"</strong> or <strong>"By Property"</strong>. Enter document numbers and registration year details.</p>
            </div>
            <div class="step-card">
                <div class="step-number">4</div>
                <h3 class="step-title">Retrieve Property Ledger</h3>
                <p class="content-text" style="margin-bottom:0;">Click submit to display the property transaction ledger history online. Verify mortgage details.</p>
            </div>
        </div>
    </div>

    <!-- Andhra Pradesh Guide -->
    <div class="card" id="ap-guide" style="border-top: 4px solid var(--accent);">
        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
            <span style="font-size: 2rem;">🇮🇳</span>
            <h2 style="margin-bottom: 0;">Andhra Pradesh: IGRS AP ec online Search Guide</h2>
        </div>
        <p class="content-text">
            Andhra Pradesh land records and encumbrance verification is managed through the <strong>IGRS AP</strong> portal:
        </p>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="step-title">Open the IGRS AP Website</h3>
                <p class="content-text" style="margin-bottom:0;">Navigate to the official portal: <a href="https://igrs.ap.gov.in" target="_blank" rel="nofollow noopener">igrs.ap.gov.in</a>.</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="step-title">Select "Encumbrance Certificate"</h3>
                <p class="content-text" style="margin-bottom:0;">Click the **"Encumbrance Certificate (EC)"** services link on the homepage layout grid.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="step-title">Enter Property Details</h3>
                <p class="content-text" style="margin-bottom:0;">Provide property details including District, SRO office, Village name, and Survey numbers.</p>
            </div>
            <div class="step-card">
                <div class="step-number">4</div>
                <h3 class="step-title">Verify and Download</h3>
                <p class="content-text" style="margin-bottom:0;">Verify the transaction history on screen and print the EC record statement.</p>
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

    // Use ON DUPLICATE KEY UPDATE to seamlessly run on page reload
    $stmt = $pdo->prepare("
        INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status)
        VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ON DUPLICATE KEY UPDATE 
            keyword = VALUES(keyword),
            title = VALUES(title),
            meta_desc = VALUES(meta_desc),
            h1_title = VALUES(h1_title),
            content = VALUES(content),
            faq_data = VALUES(faq_data),
            schema_type = VALUES(schema_type),
            status = 'published'
    ");
    $stmt->execute([
        'slug' => $slug,
        'keyword' => $keyword,
        'title' => $title,
        'meta_desc' => $meta_desc,
        'h1_title' => $h1_title,
        'content' => $content,
        'faq_data' => $faq_json,
        'schema_type' => $schema_type
    ]);

    // --- 3. AUTO-INITIALIZE TAMIL NADU GUIDE PAGE ---
    $slug_tn = 'online-ec-tamilnadu';
    $keyword_tn = 'online ec tamilnadu';
    $title_tn = 'online ec tamilnadu';
    $h1_tn = 'online ec tamilnadu';
    $meta_desc_tn = 'Access the interactive online ec tamilnadu toolkit. Compute TNREGINET registration fees, search Sub-Registrar offices, and download verified certificates.';
    $content_tn = '<!-- Custom Rebuilt Interactive Styles -->
<style>
    /* Toolkit Wrapper */
    .toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    
    /* Responsive Flexbox Grid for Widgets */
    .utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .utility-grid {
            flex-direction: row;
        }
        .widget-panel {
            flex: 1;
        }
    }
    
    /* Widget Panels */
    .widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .widget-panel {
            padding: 1rem;
        }
    }
    .widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .widget-icon {
        font-size: 1.5rem;
    }
    
    /* Forms */
    .form-group {
        margin-bottom: 1rem;
        width: 100%;
    }
    .form-group label {
        display: block;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--text-main);
    }
    .form-select, .form-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-family: var(--font-sans);
        font-size: 0.95rem;
        color: var(--primary);
        outline: none;
        box-sizing: border-box;
    }
    .form-select:focus, .form-input:focus {
        border-color: var(--accent);
    }
    
    /* Calculator Options - Stacked on Mobile, Flex on Desktop */
    .calc-options {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        margin-top: 0.5rem;
    }
    @media (min-width: 480px) {
        .calc-options {
            flex-direction: row;
            gap: 1.5rem;
        }
    }
    .calc-radio-label {
        font-weight: 500;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.35rem;
        font-size: 0.9rem;
    }
    .calc-radio-label input[type="radio"] {
        width: 16px;
        height: 16px;
        margin: 0;
        cursor: pointer;
    }
    
    /* Calculator Result */
    .calc-result {
        background-color: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1rem;
        margin-top: 1.25rem;
        text-align: center;
    }
    .calc-val {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--accent);
    }
    
    /* Interactive Checklist */
    .checklist-progress-container {
        background-color: var(--border);
        border-radius: var(--radius-sm);
        height: 8px;
        width: 100%;
        margin-bottom: 1.5rem;
        overflow: hidden;
    }
    .checklist-progress-bar {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        cursor: pointer;
        font-size: 0.95rem;
        width: 100%;
    }
    .checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        cursor: pointer;
        flex-shrink: 0;
    }
    .checklist-item span {
        line-height: 1.4;
        word-break: break-word;
    }
    .checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Portal Grid Auto-fit layout (no media queries needed) */
    .portal-quick-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
        width: 100%;
    }
    .portal-btn {
        background-color: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        padding: 1.25rem 0.75rem;
        text-align: center;
        font-weight: 600;
        color: var(--primary);
        box-shadow: var(--shadow-sm);
        transition: all var(--transition-fast);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        box-sizing: border-box;
    }
    .portal-btn:hover {
        border-color: var(--accent);
        background-color: #eff6ff;
        color: var(--accent);
        transform: translateY(-2px);
    }
    .portal-btn-icon {
        font-size: 1.5rem;
    }
    .portal-btn span:not(.portal-btn-icon) {
        font-size: 0.9rem;
        line-height: 1.2;
    }

    /* Responsive Table Container */
    .table-scroll-container {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin: 1.5rem 0;
        width: 100%;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
    }
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
        min-width: 500px;
    }
    .comparison-table th, .comparison-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid var(--border);
        font-size: 0.95rem;
    }
    .comparison-table th {
        background-color: var(--primary);
        color: white;
        font-weight: 600;
    }
    .comparison-table tr:nth-child(even) {
        background-color: var(--bg-main);
    }
</style>

<!-- 1. QUICK PORTAL CONNECTIONS GRID (ABSOLUTE TOP) -->
<div class="card" style="border-top: 4px solid var(--accent); margin-bottom: 1.5rem; background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);">
    <h3 style="font-size: 1.1rem; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted);">Tamil Nadu Portal Connections</h3>
    <div class="portal-quick-grid">
        <a href="https://tnreginet.gov.in/portal/webEServices/viewEC" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">🔍</span>
            <span>View Free EC</span>
        </a>
        <a href="https://tnreginet.gov.in/portal/webEServices/certifiedCopy" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">📄</span>
            <span>Certified EC Portal</span>
        </a>
        <a href="https://tnreginet.gov.in/portal/userRegistration" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">👤</span>
            <span>User Registration</span>
        </a>
        <a href="https://tnreginet.gov.in/portal/webEServices/ecStatus" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">⌛</span>
            <span>Check EC Status</span>
        </a>
    </div>
</div>

<!-- 2. FEE CALCULATOR & LOOKUP GRID (ABSOLUTE TOP) -->
<div class="toolkit-container" style="margin-top: 0; margin-bottom: 1.5rem;">
    <div class="utility-grid">
        
        <!-- Widget 1: Fee Calculator -->
        <div class="widget-panel">
            <div class="widget-header">
                <span class="widget-icon">🧮</span>
                <h3>Tamil Nadu EC Fee Calculator</h3>
            </div>
            
            <div class="form-group">
                <label for="calc-years">Number of Years to Search:</label>
                <input type="number" id="calc-years" class="form-input" min="1" max="100" value="30">
            </div>
            
            <div class="form-group">
                <label>Application Type:</label>
                <div class="calc-options">
                    <label class="calc-radio-label">
                        <input type="radio" name="calc-type" value="view" checked> View EC (Free Check)
                    </label>
                    <label class="calc-radio-label">
                        <input type="radio" name="calc-type" value="certified"> Certified Copy (Official)
                    </label>
                </div>
            </div>
            
            <div class="calc-result">
                <span style="font-size: 0.9rem; color: var(--text-muted); display: block; margin-bottom: 0.25rem;">Estimated Government Fee:</span>
                <span class="calc-val" id="calc-result-val">₹0</span>
                <p id="calc-note" style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; margin-bottom: 0;">Free draft copy generated instantly on the portal.</p>
            </div>
        </div>
        
        <!-- Widget 2: Interactive Lookup Form -->
        <div class="widget-panel">
            <div class="widget-header">
                <span class="widget-icon">🗺️</span>
                <h3>TNREGINET Search Assistant</h3>
            </div>
            
            <div class="form-group">
                <label for="tn-zone">Property Registration Zone:</label>
                <select id="tn-zone" class="form-select">
                    <option value="">-- Select Zone --</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Coimbatore">Coimbatore</option>
                    <option value="Madurai">Madurai</option>
                    <option value="Trichy">Trichy</option>
                    <option value="Salem">Salem</option>
                    <option value="Tirunelveli">Tirunelveli</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="tn-district">District name:</label>
                <input type="text" id="tn-district" class="form-input" placeholder="e.g. Kanchipuram, Thiruvallur">
            </div>
            
            <div class="form-group">
                <label for="tn-survey">Survey / Subdivision Number:</label>
                <input type="text" id="tn-survey" class="form-input" placeholder="e.g. 142/3A">
            </div>
            
            <button class="btn-primary" id="btn-helper-action" style="width: 100%; border: none; cursor: pointer; text-align: center; justify-content: center; padding: 0.75rem;">Generate Official Search Link</button>
        </div>
        
    </div>
</div>

<!-- 3. STEP CHECKLIST WITH PROGRESS BAR (ABSOLUTE TOP) -->
<div class="card" style="border-top: 4px solid var(--success); margin-bottom: 2rem;">
    <div class="widget-header">
        <span class="widget-icon">✅</span>
        <h3>Interactive Property Verification Tracker</h3>
    </div>
    <p class="content-text" style="font-size: 0.9rem; margin-bottom: 1.25rem;">
        Tick off each milestone as you conduct your real estate checks to ensure you complete a flawless title validation process:
    </p>
    
    <div class="checklist-progress-container">
        <div class="checklist-progress-bar" id="chk-progress"></div>
    </div>
    
    <div id="chk-items-list">
        <label class="checklist-item">
            <input type="checkbox" data-index="1">
            <span>Verify property survey and sub-division codes on the physical sale deed.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="2">
            <span>Cross-reference land boundary directions (North, South, East, West) with the neighbors.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="3">
            <span>Run a free **ec view online tamilnadu** check for the last **30 years** on TNREGINET.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="4">
            <span>Confirm that the seller\'s name is listed as the latest claimant in the transaction log.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="5">
            <span>Verify the land mutation records by running a **view patta chitta and ec online tamilnadu** match.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="6">
            <span>File an application using **tnreginet ec online login** to get a digitally signed Certified EC copy.</span>
        </label>
    </div>
</div>

<!-- 4. MAIN SEO CONTENT BASE (FLOWS DIRECTLY BELOW THE WIDGETS) -->
<div class="card">
    <h2>Detailed Research Guide: online ec tamilnadu</h2>
    <p class="content-text">
        Verifying the title of a property before committing to a purchase or loan is the most crucial step in any real estate transaction in India. If you are looking to buy or verify a property in the state of Tamil Nadu, executing a complete <strong>online ec tamilnadu</strong> search is mandatory. This process ensures that the property is free from any legal disputes, unpaid mortgages, or registered third-party liabilities.
    </p>
    <p class="content-text">
        In this comprehensive educational guide, we provide a complete, verified, and detailed step-by-step breakdown of how to use the official Inspector General of Registration (IGR) website for the <strong>tamilnadu govt online ec</strong> services. We cover the entire <strong>online ec tamilnadu procedure</strong>, ranging from a quick search to obtaining a legally binding certified copy, dealing with font issues, and checking mutation records. We focus on showing how property buyers can use the official tools effectively to perform safe land transactions.
    </p>
    <p class="content-text">
        Using an <a href="https://econline.in/">ec online</a> verification platform helps buyers confirm that the seller actually has the legal right to transfer the property. Without a thorough review, you might purchase a property that has been secretly mortgaged, leading to long-standing legal disputes with financial institutions.
    </p>
</div>

<div class="card">
    <h2>View EC vs. Certified Copy: What is the Difference?</h2>
    <p class="content-text">
        The <strong>tamilnadu online ec view portal</strong> offers two primary services for citizens, depending on their ultimate requirement. It is vital to understand the difference between the free draft view and the paid certified copy before initiating your search.
    </p>
    
    <!-- RESPONSIVE COMPARISON TABLE WRAPPER -->
    <div class="table-scroll-container">
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Free View EC</th>
                    <th>Certified Copy (Paid)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-weight: 600;">Purpose</td>
                    <td>Quick checking, title inspection, verification.</td>
                    <td>Bank loans, court submissions, registration.</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">Fee</td>
                    <td>Free of Cost (₹0)</td>
                    <td>₹15 per search year + Application Fees</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">Legality</td>
                    <td>Informational only, not legally binding.</td>
                    <td>Contains Digital Signature, legally admissible.</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">Time taken</td>
                    <td>Instant (Few seconds)</td>
                    <td>2 to 7 working days for officer approval.</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <p class="content-text">
        For most preliminary checks, performing a free <strong>ec view online tamilnadu</strong> is more than sufficient. This enables you to review past sales deeds and verify if the survey number matches the seller\'s records without spending money. However, if you are applying for a home loan, the bank will strictly require you to submit the certified document.
    </p>
    <p class="content-text">
        If you prefer reading the documents in English rather than the local language, make sure to change the language preference toggle on the header to download the <strong>tamilnadu online ec in english</strong> version of the document.
    </p>
</div>

<div class="card">
    <h2>1. Free Method: How to View EC Online (Step-by-Step)</h2>
    <p class="content-text">
        To review the registered history of a property without paying fees, you can use the free search tool provided on the official website. This quick <strong>tn ec online search</strong> allows you to verify historical data from 1975 to the current day. Follow these step-by-step instructions:
    </p>
    <ol class="step-list" style="margin-left: 1.5rem; line-height: 1.8;">
        <li>Go to the official registration department portal: <code>https://tnreginet.gov.in</code>.</li>
        <li>Hover over or click on <strong>E-Services > Encumbrance Certificate > tnreginet ec view online</strong>.</li>
        <li>Select the property location parameters from the dropdown lists. You will need to choose the Zone, District, and the exact **tamilnadu register office online ec** (Sub-Registrar Office) associated with your village.</li>
        <li>Input the search period dates (Start Date and End Date). Be sure to choose a long duration, preferably 30 years.</li>
        <li>Enter the Survey Number and Sub-division Number of the property.</li>
        <li>Enter the CAPTCHA text code and click **Search**. The website will compile a draft PDF with the transaction log.</li>
    </ol>
</div>

<div class="card">
    <h2>2. Paid Method: Applying for a Certified Encumbrance Certificate</h2>
    <p class="content-text">
        If you require an official copy with a legal digital signature, you cannot use the guest search. You must complete a user registration and submit a formal application online.
    </p>
    <ul style="margin-left: 1.5rem; line-height: 1.8; margin-bottom: 1.5rem;">
        <li>**Account Setup**: Click User Registration on the portal and input your credentials, verified via OTP. Log in subsequently via the **tnreginet ec online login** area.</li>
        <li>**Submit Application**: Click E-Services > Encumbrance Certificate > Apply Online. Fill out the property survey details and add boundary details.</li>
        <li>**Payment**: Pay the computed fee. For Certified copies, the government charges a basic search fee of ₹15 per year, in addition to minimal processing charges. Use the integrated portal gateway to pay.</li>
        <li>**Downloading**: The Sub-Registrar Office will verify the transaction registry. Once signed digitally, the **tamilnadu ecs online status** will update to "Approved". You can download the PDF copy from your user dashboard.</li>
    </ul>
</div>

<div class="card">
    <h2>Troubleshooting Font Display and Document Issues</h2>
    <p class="content-text">
        Many users face display issues where characters look like junk text or empty boxes on their computers or mobile phones. This is a common issue relating to the <strong>tamilnadu online ec font</strong> encoding. Because the government portal generates documents using specific Tamil fonts, your operating system must have compatible fonts installed to read the <strong>tamilnadu online ec in tamil</strong> text correctly.
    </p>
    <p class="content-text">
        To resolve this font issue:
        1. Open the PDF files using Google Chrome, Edge, or Firefox rather than basic local text readers. Web browsers possess advanced, built-in Unicode rendering that handles these scripts natively.
        2. Download and install standard Tamil Unicode packages (such as Latha or TSCII fonts) on your computer.
    </p>
    <p class="content-text">
        If you want to verify that a document provided to you by a property seller is genuine, navigate to E-Services > **tamilnadu online ec verification** on the portal. Enter the registration details to execute a secure **online ec verification in tamilnadu** check, confirming the certificate matches the registration office log.
    </p>
</div>

<div class="card">
    <h2>Connecting Land Records: View Patta Chitta and EC Online</h2>
    <p class="content-text">
        To guarantee full safety in a real estate purchase, running an EC check is only half the work. You must also cross-reference ownership with the revenue department logs. Make sure to **view patta chitta and ec online tamilnadu** records together.
    </p>
    <p class="content-text">
        The Patta details the name of the official owner registered in the government survey books. If the buyer\'s name on the EC does not match the owner named in the Patta, it means the land records mutation was never registered after the transfer. You should request the seller to resolve this mutation before proceeding with payment.
    </p>
</div>

<!-- JavaScript for Interactive Widgets -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // --- 1. FEE CALCULATOR LOGIC ---
        const calcYearsInput = document.getElementById("calc-years");
        const calcResultVal = document.getElementById("calc-result-val");
        const calcNote = document.getElementById("calc-note");
        const calcTypes = document.getElementsByName("calc-type");

        function calculateFees() {
            const years = parseInt(calcYearsInput.value) || 0;
            let type = "view";
            for (const radio of calcTypes) {
                if (radio.checked) {
                    type = radio.value;
                }
            }

            if (type === "view") {
                calcResultVal.innerText = "₹0";
                calcNote.innerText = "Free draft copy generated instantly on the portal.";
            } else {
                // Certified copy: ₹15 per year + ₹100 estimated base processing fee
                const baseFee = 100;
                const yearlyFee = 15;
                const total = baseFee + (years * yearlyFee);
                calcResultVal.innerText = "₹" + total;
                calcNote.innerText = "Includes ₹100 application fee + ₹15 per search year. Takes 2-7 days.";
            }
        }

        calcYearsInput.addEventListener("input", calculateFees);
        for (const radio of calcTypes) {
            radio.addEventListener("change", calculateFees);
        }

        // --- 2. SEARCH HELPER LOGIC ---
        const zoneSelect = document.getElementById("tn-zone");
        const districtInput = document.getElementById("tn-district");
        const surveyInput = document.getElementById("tn-survey");
        const btnAction = document.getElementById("btn-helper-action");

        btnAction.addEventListener("click", function() {
            const zone = zoneSelect.value;
            const district = districtInput.value.trim();
            const survey = surveyInput.value.trim();

            if (!zone) {
                alert("Please select a property Registration Zone to start.");
                return;
            }

            // Open official link and instruct user
            alert("Redirecting to the official TNREGINET Search Portal.\\n\\nOnce there, navigate to:\\nE-Services -> Encumbrance Certificate -> View EC\\n\\nSelected Zone: " + zone + (district ? "\\nDistrict: " + district : "") + (survey ? "\\nSurvey: " + survey : ""));
            window.open("https://tnreginet.gov.in/portal/webEServices/viewEC", "_blank");
        });

        // --- 3. CHECKLIST LOGIC ---
        const checkboxes = document.querySelectorAll("#chk-items-list input[type=\'checkbox\']");
        const progressBar = document.getElementById("chk-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;

            checkboxes.forEach(chk => {
                const label = chk.closest(".checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });

            const percent = Math.round((checkedCount / total) * 100);
            progressBar.style.width = percent + "%";
        }

        checkboxes.forEach(chk => {
            chk.addEventListener("change", updateProgress);
        });

        updateProgress(); // Initial run
    });
</script>';
    $faq_tn = '[{"question":"What is the fee for downloading a certified EC online in Tamil Nadu?","answer":"The search fee is \\u20b915 per year of search, plus a small application processing charge. The draft \\"View EC\\" option is completely free of cost."},{"question":"For how many years can we get the EC online in Tamil Nadu?","answer":"Property transaction records from 1975 to the current date are available online. For pre-1975 records, you must visit the respective Sub-Registrar Office."},{"question":"How long does it take to get a certified online ec in Tamil Nadu?","answer":"While the draft \\"View EC\\" is instant, a certified, digitally signed copy takes between 2 to 7 working days to be verified and approved by the Sub-Registrar."},{"question":"Why are Tamil fonts not displaying correctly on my downloaded EC?","answer":"This is usually a font encoding issue. You may need to download the Tamil Unicode font or view the PDF document using a modern browser like Chrome that supports dynamic font rendering."}]';
    $schema_type_tn = 'Article';

    $stmt = $pdo->prepare("
        INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status)
        VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ON DUPLICATE KEY UPDATE 
            keyword = VALUES(keyword),
            title = VALUES(title),
            meta_desc = VALUES(meta_desc),
            h1_title = VALUES(h1_title),
            content = VALUES(content),
            faq_data = VALUES(faq_data),
            schema_type = VALUES(schema_type),
            status = 'published'
    ");
    $stmt->execute([
        'slug' => $slug_tn,
        'keyword' => $keyword_tn,
        'title' => $title_tn,
        'meta_desc' => $meta_desc_tn,
        'h1_title' => $h1_tn,
        'content' => $content_tn,
        'faq_data' => $faq_tn,
        'schema_type' => $schema_type_tn
    ]);

    // --- 4. AUTO-INITIALIZE EC VIEW ONLINE DIRECTORY PAGE ---
    $slug_view = 'ec-view-online';
    $keyword_view = 'ec view online';
    $title_view = 'ec view online';
    $h1_view = 'ec view online';
    $meta_desc_view = 'Use our interactive ec view online portal to search and inspect property Encumbrance Certificates. Compare state portals, calculate search fees, and check requirements.';
    $content_view = '<!-- Custom Interactive Styles for Gateway -->
<style>
    .gateway-container {
        margin: 2rem 0;
    }
    .widget-panel-full {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 2rem;
        box-shadow: var(--shadow-sm);
        margin-bottom: 2rem;
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
    }
    .widget-panel-full:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .gateway-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .gateway-header h3 {
        font-size: 1.3rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .gateway-icon {
        font-size: 1.75rem;
    }
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }
    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
    .form-group {
        margin-bottom: 1.25rem;
    }
    .form-group label {
        display: block;
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--text-main);
    }
    .form-select, .form-input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-family: var(--font-sans);
        font-size: 0.95rem;
        color: var(--primary);
        outline: none;
        background-color: var(--bg-main);
    }
    .form-select:focus, .form-input:focus {
        border-color: var(--accent);
        background-color: #ffffff;
    }
    
    /* Interactive Result Box */
    .state-info-panel {
        background-color: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        margin-top: 1.5rem;
        display: none;
    }
    .state-info-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--accent);
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .state-info-details {
        font-size: 0.95rem;
        line-height: 1.6;
        color: var(--text-main);
        margin-bottom: 1.25rem;
    }
    .state-info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        margin-bottom: 1.25rem;
        font-size: 0.9rem;
    }
    @media (max-width: 480px) {
        .state-info-grid {
            grid-template-columns: 1fr;
        }
    }
    .state-info-item {
        background-color: #ffffff;
        border: 1px solid var(--border);
        padding: 0.75rem;
        border-radius: var(--radius-sm);
    }
    .state-info-label {
        font-weight: 600;
        color: var(--text-muted);
        display: block;
        margin-bottom: 0.25rem;
    }
    
    /* Requirements Checker */
    .req-checker-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    @media (max-width: 600px) {
        .req-checker-list {
            grid-template-columns: 1fr;
        }
    }
    .req-item {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        font-size: 0.95rem;
        cursor: pointer;
    }
    .req-item input {
        margin-top: 0.25rem;
    }
    .req-result-panel {
        background-color: #f0fdf4;
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: var(--radius-sm);
        padding: 1.25rem;
        margin-top: 1rem;
        font-size: 0.95rem;
    }

    /* Verification Tracker */
    .checklist-progress-container {
        background-color: var(--border);
        border-radius: var(--radius-sm);
        height: 8px;
        width: 100%;
        margin-bottom: 1.5rem;
        overflow: hidden;
    }
    .checklist-progress-bar {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        cursor: pointer;
        font-size: 0.95rem;
    }
    .checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        cursor: pointer;
    }
    .checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Hub Links */
    .hub-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        margin-bottom: 2rem;
    }
    @media (max-width: 900px) {
        .hub-grid {
            grid-template-columns: 1fr 1fr;
        }
    }
    @media (max-width: 480px) {
        .hub-grid {
            grid-template-columns: 1fr;
        }
    }
    .hub-card {
        background-color: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        padding: 1.25rem 1rem;
        text-align: center;
        font-weight: 600;
        color: var(--primary);
        box-shadow: var(--shadow-sm);
        transition: all var(--transition-fast);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }
    .hub-card:hover {
        border-color: var(--accent);
        background-color: #eff6ff;
        color: var(--accent);
        transform: translateY(-2px);
    }
    .hub-icon {
        font-size: 1.5rem;
    }
</style>

<!-- 1. QUICK HUB LINKS GRID (ABSOLUTE TOP) -->
<div class="card" style="border-top: 4px solid var(--accent); margin-bottom: 1.5rem; background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);">
    <h3 style="font-size: 1.1rem; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted);">Quick Search Actions</h3>
    <div class="hub-grid">
        <a href="#state-selector-section" class="hub-card">
            <span class="hub-icon">🗺️</span>
            <span>State Gateways</span>
        </a>
        <a href="#requirements-checker-section" class="hub-card">
            <span class="hub-icon">📋</span>
            <span>Check Requirements</span>
        </a>
        <a href="#checklist-section" class="hub-card">
            <span class="hub-icon">✅</span>
            <span>Title Checklist</span>
        </a>
        <a href="https://econline.in/" class="hub-card">
            <span class="hub-icon">🏠</span>
            <span>Home Portal</span>
        </a>
    </div>
</div>

<!-- 2. STATE SELECTOR GATEWAY (ABSOLUTE TOP) -->
<div class="gateway-container" id="state-selector-section" style="margin-top: 0; margin-bottom: 1.5rem;">
    <div class="widget-panel-full">
        <div class="gateway-header">
            <span class="gateway-icon">🏛️</span>
            <h3>Interactive Multi-State EC Gateway</h3>
        </div>
        <p class="content-text" style="font-size: 0.95rem; margin-bottom: 1.5rem;">
            Because land registration is handled individually by state governments, you must use the appropriate official portal. Select your state below to unlock direct links, fee structures, and step-by-step viewing instructions:
        </p>
        
        <div class="form-group">
            <label for="gateway-state">Select Property State:</label>
            <select id="gateway-state" class="form-select">
                <option value="">-- Choose State --</option>
                <option value="TN">Tamil Nadu (TNREGINET)</option>
                <option value="KA">Karnataka (Kaveri Portal)</option>
                <option value="TS">Telangana (IGRS TS)</option>
                <option value="AP">Andhra Pradesh (IGRS AP)</option>
                <option value="KL">Kerala (Registration Dept)</option>
            </select>
        </div>
        
        <!-- Dynamic Result Panel -->
        <div class="state-info-panel" id="state-info-panel">
            <div class="state-info-title" id="state-info-title">
                <!-- Injected via JS -->
            </div>
            <div class="state-info-details" id="state-info-details">
                <!-- Injected via JS -->
            </div>
            <div class="state-info-grid">
                <div class="state-info-item">
                    <span class="state-info-label">Search Method:</span>
                    <span id="state-info-method"><!-- Injected via JS --></span>
                </div>
                <div class="state-info-item">
                    <span class="state-info-label">Official Fee:</span>
                    <span id="state-info-fee"><!-- Injected via JS --></span>
                </div>
                <div class="state-info-item">
                    <span class="state-info-label">Processing Time:</span>
                    <span id="state-info-time"><!-- Injected via JS --></span>
                </div>
                <div class="state-info-item">
                    <span class="state-info-label">Online Verification:</span>
                    <span id="state-info-verify"><!-- Injected via JS --></span>
                </div>
            </div>
            
            <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                <a href="" id="state-link-official" target="_blank" rel="nofollow noopener" class="btn-success">Go to Official Portal</a>
                <a href="" id="state-link-guide" class="btn-primary">View Detailed Guide</a>
            </div>
        </div>
    </div>
</div>

<!-- 3. ELIGIBILITY CHECKER (ABSOLUTE TOP) -->
<div class="widget-panel-full" id="requirements-checker-section" style="margin-bottom: 1.5rem;">
    <div class="gateway-header">
        <span class="gateway-icon">🔍</span>
        <h3>Search Eligibility Checker</h3>
    </div>
    <p class="content-text" style="font-size: 0.95rem; margin-bottom: 1.5rem;">
        Which property search parameters do you currently possess? Check the parameters below to determine your available search options:
    </p>
    
    <div class="req-checker-list">
        <label class="req-item">
            <input type="checkbox" id="req-survey" checked>
            <span>Land Survey Number & Sub-division Code</span>
        </label>
        <label class="req-item">
            <input type="checkbox" id="req-doc">
            <span>Registered Sale Deed Document Number</span>
        </label>
        <label class="req-item">
            <input type="checkbox" id="req-sro" checked>
            <span>Sub-Registrar Office (SRO) Name</span>
        </label>
        <label class="req-item">
            <input type="checkbox" id="req-year">
            <span>Registration Year / Period</span>
        </label>
    </div>
    
    <div class="req-result-panel" id="req-result-text">
        Based on your selection, you are ready to perform a **Spatial Property Search** (using Survey and SRO parameters). This is available on most state portals as a free guest check.
    </div>
</div>

<!-- 4. CHECKLIST (ABSOLUTE TOP) -->
<div class="card" id="checklist-section" style="border-top: 4px solid var(--success); margin-bottom: 2rem;">
    <div class="gateway-header">
        <span class="gateway-icon">✅</span>
        <h3>National Title Audit checklist</h3>
    </div>
    <p class="content-text" style="font-size: 0.9rem; margin-bottom: 1.25rem;">
        Ensure you complete all safety steps when verifying property records:
    </p>
    
    <div class="checklist-progress-container">
        <div class="checklist-progress-bar" id="chk-progress"></div>
    </div>
    
    <div id="chk-items-list">
        <label class="checklist-item">
            <input type="checkbox" data-index="1">
            <span>Locate the official government registration department website for the target state.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="2">
            <span>Perform a free search to verify transactions on screen over the last 15-30 years.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="3">
            <span>Inspect the transaction ledger for active mortgages, hypothecations, or bank loans.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="4">
            <span>Verify if the seller\'s name is listed as the latest owner in the registration ledger.</span>
        </label>
        <label class="checklist-item">
            <input type="checkbox" data-index="5">
            <span>Cross-reference the EC records with the revenue department land mutation logs (Patta Chitta).</span>
        </label>
    </div>
</div>

<!-- 5. MAIN SEO CONTENT BASE (FLOWS DIRECTLY BELOW THE WIDGETS) -->
<div class="card">
    <h2>Detailed Guide on How to Perform an ec view online Search</h2>
    <p class="content-text">
        Executing an <strong>ec view online</strong> search is a key step in property purchase validation in India. Since property transactions are recorded at the state level under the Indian Registration Act, registration logs are stored in individual state databases. Using an <a href="https://econline.in/">ec online</a> dashboard allows you to verify that the plot or flat you intend to purchase has a clean title, and is not loaded with undisclosed liabilities.
    </p>
    <p class="content-text">
        In the past, checking an Encumbrance Certificate required visiting a Sub-Registrar Office, filling out Form 14, and waiting weeks for manual records to be searched by registration clerks. Today, state governments have digitized records from 1975 onwards. Buyers can perform an instant search from home, providing security and transparency for real estate investments.
    </p>
</div>

<div class="card">
    <h2>State-Specific Guide Walkthroughs</h2>
    <p class="content-text">
        Depending on the state where the property is located, the specific portal, search protocol, and login criteria vary. Below is the detailed breakdown of the main state portals:
    </p>
    
    <h3>Tamil Nadu (TNREGINET Portal)</h3>
    <p class="content-text">
        In Tamil Nadu, the E-Services section allows users to perform an <strong>ec view online tamilnadu</strong> check. By navigating to <strong>tnreginet ec view online</strong>, citizens can input their SRO, village name, and land survey code to generate a transaction list. The draft copy can be downloaded as a PDF document. If you want to download the English version rather than the local script, make sure to change the language toggle on the header to download the <strong>online ec view in english</strong> copy.
    </p>
    <p class="content-text">
        Additionally, the portal offers a **view ec online in tamilnadu** option for those with document details, and a guest view under the E-services tab for quick checks. If you need a certified copy, you can carry out a **view online ec in tamilnadu** application by logging in. Furthermore, remember to cross-verify the ownership details by executing a **view patta chitta and ec online tamilnadu** mutation verification.
    </p>

    <h3>Karnataka (Kaveri Portal)</h3>
    <p class="content-text">
        For properties located in Bangalore or other parts of Karnataka, the search is conducted via the Kaveri portal. While you can view basic details online, the **view ec online karnataka guest user** account option has limited functionality. To get a complete search copy, you must log in, input property boundary locations, pay the government fee (₹15 for the first year), and track the certified copy. You can complete an **online ec view bangalore** check to inspect registered apartment details.
    </p>

    <h3>Telangana & Andhra Pradesh (IGRS TS & IGRS AP)</h3>
    <p class="content-text">
        Telangana records are checked on the IGRS TS portal. Users can perform an **online ec view telangana hyderabad** search using either property details or document details. Similarly, in Andhra Pradesh, users visit IGRS AP to do an **online ec view ap** query. Both states generate digital ledgers that show all historical sales deeds, mortgage records, and court attachments.
    </p>

    <h3>Kerala (Registration Portal)</h3>
    <p class="content-text">
        The Kerala Registration Department supports online search features. You can carry out a **view ec online kerala** or **online ec view kerala** search by registering an account on their website. It lets you check the transaction history of dry lands and wet lands.
    </p>
</div>

<div class="card">
    <h2>Search by Document Number vs. Spatial Search</h2>
    <p class="content-text">
        When performing an online search, you will usually find two options:
    </p>
    <ul style="margin-left: 1.5rem; line-height: 1.8; margin-bottom: 1.5rem;">
        <li><strong>Spatial search (By Property Details)</strong>: This requires selecting the District, SRO office, Village name, and entering the Survey Number and Sub-division number. This is recommended if you do not have the seller\'s deed.</li>
        <li><strong>Document search</strong>: This allows you to perform an **online ec view by document number** or **online ec view with document number** query. You must select the SRO, input the registered document number, registration year, and book type (usually Book 1). This yields an exact match for the deed.</li>
    </ul>
    <p class="content-text">
        Once the search is executed, the portal compiles the logs. Make sure to download and print the document using **online ec view and print** options. You can also monitor the application progress using the **view ec status online** tracker on your dashboard.
    </p>
</div>

<!-- JavaScript for Gateway & Requirements -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // --- 1. STATE SELECTOR GATEWAY LOGIC ---
        const stateSelect = document.getElementById("gateway-state");
        const infoPanel = document.getElementById("state-info-panel");
        const infoTitle = document.getElementById("state-info-title");
        const infoDetails = document.getElementById("state-info-details");
        const infoMethod = document.getElementById("state-info-method");
        const infoFee = document.getElementById("state-info-fee");
        const infoTime = document.getElementById("state-info-time");
        const infoVerify = document.getElementById("state-info-verify");
        const linkOfficial = document.getElementById("state-link-official");
        const linkGuide = document.getElementById("state-link-guide");

        const stateData = {
            "TN": {
                title: "🇮🇳 Tamil Nadu (TNREGINET)",
                details: "Tamil Nadu provides robust guest search options through the TNREGINET portal. Users can check Villangam EC ledgers without logging in by entering the SRO, Village, and Survey details. Switch the portal language to English to view in English.",
                method: "Guest View EC (No login) or User Login for Certified copy",
                fee: "₹0 for View EC; ₹15 per search year for Certified Copy",
                time: "Instant (View EC) / 2 to 7 Days (Certified)",
                verify: "Online EC verification tool with Document Number",
                official: "https://tnreginet.gov.in/portal/webEServices/viewEC",
                guide: "/online-ec-tamilnadu/"
            },
            "KA": {
                title: "🇮🇳 Karnataka (Kaveri Portal)",
                details: "Karnataka state land records and apartment encumbrances are managed on the Kaveri Online Services dashboard. While guest features allow viewing, applying for a certified copy is recommended for official needs.",
                method: "Kaveri User Login Required",
                fee: "₹15 for the first year + ₹10 for each subsequent year",
                time: "2 to 3 Working Days",
                verify: "Verify Certified Copy using SRN/PRN number",
                official: "https://kaverionline.karnataka.gov.in",
                guide: "#"
            },
            "TS": {
                title: "🇮🇳 Telangana (IGRS TS)",
                details: "IGRS Telangana allows searching property ledgers by Document Number or Survey details. For agricultural lands, mutation logs should also be checked on the Dharani Dashboard.",
                method: "User Registration / Login required",
                fee: "Varies depending on SRO search logs",
                time: "1 to 2 Working Days",
                verify: "Verify using SRO application registration number",
                official: "https://registration.telangana.gov.in",
                guide: "#"
            },
            "AP": {
                title: "🇮🇳 Andhra Pradesh (IGRS AP)",
                details: "Andhra Pradesh provides online property ledger verification. Input the District, Sub-Registrar Office, and Survey code to retrieve the Form 15 history.",
                method: "Online Property EC Search",
                fee: "Government registration fees apply",
                time: "Instant (Online View) / 24 Hours",
                verify: "Integrated verification tool with SRO reference",
                official: "https://igrs.ap.gov.in",
                guide: "#"
            },
            "KL": {
                title: "🇮🇳 Kerala (Registration Department)",
                details: "Kerala allows citizens to apply for and download encumbrance certificates online. You must create an account to view and download Form 15/16 files.",
                method: "User login and profile search",
                fee: "Standard state registration search fee",
                time: "2 to 4 Working Days",
                verify: "Online tracking with application reference number",
                official: "https://keralaregistration.gov.in",
                guide: "#"
            }
        };

        stateSelect.addEventListener("change", function() {
            const state = stateSelect.value;
            if (!state) {
                infoPanel.style.display = "none";
                return;
            }

            const data = stateData[state];
            infoTitle.innerHTML = data.title;
            infoDetails.innerHTML = data.details;
            infoMethod.innerText = data.method;
            infoFee.innerText = data.fee;
            infoTime.innerText = data.time;
            infoVerify.innerText = data.verify;
            linkOfficial.href = data.official;
            linkGuide.href = data.guide;
            
            // Hide guide button if guide doesn\'t exist
            if (data.guide === "#") {
                linkGuide.style.display = "none";
            } else {
                linkGuide.style.display = "inline-block";
            }

            infoPanel.style.display = "block";
        });

        // --- 2. ELIGIBILITY CHECKER LOGIC ---
        const chkSurvey = document.getElementById("req-survey");
        const chkDoc = document.getElementById("req-doc");
        const chkSro = document.getElementById("req-sro");
        const chkYear = document.getElementById("req-year");
        const resultText = document.getElementById("req-result-text");

        function checkEligibility() {
            const hasSurvey = chkSurvey.checked;
            const hasDoc = chkDoc.checked;
            const hasSro = chkSro.checked;
            const hasYear = chkYear.checked;

            if (hasDoc && hasSro && hasYear) {
                resultText.innerHTML = "🏆 **Optimal Eligibility**: You have the SRO and Document Number. You are eligible to run a **Document Number Search**, which yields the most exact registered deed record instantly.";
            } else if (hasSurvey && hasSro) {
                resultText.innerHTML = "✅ **Good Eligibility**: You have the SRO and Survey details. You can run a **Spatial Property Search** to view all transaction records linked to your survey and sub-division.";
            } else if (hasDoc) {
                resultText.innerHTML = "⚠️ **Partial Eligibility**: You have the document number, but you also need the Sub-Registrar Office (SRO) name to run the search. Check the stamp header on your deed to find the SRO.";
            } else {
                resultText.innerHTML = "❌ **Insufficient Parameters**: You must possess at least the Sub-Registrar Office (SRO) and either the land Survey Number or document details to perform an online check. If you have nothing, you must visit the local municipality office to retrieve survey maps first.";
            }
        }

        chkSurvey.addEventListener("change", checkEligibility);
        chkDoc.addEventListener("change", checkEligibility);
        chkSro.addEventListener("change", checkEligibility);
        chkYear.addEventListener("change", checkEligibility);

        // --- 3. CHECKLIST PROGRESS LOGIC ---
        const checkboxes = document.querySelectorAll("#chk-items-list input[type=\'checkbox\']");
        const progressBar = document.getElementById("chk-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;

            checkboxes.forEach(chk => {
                const label = chk.closest(".checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });

            const percent = Math.round((checkedCount / total) * 100);
            progressBar.style.width = percent + "%";
        }

        checkboxes.forEach(chk => {
            chk.addEventListener("change", updateProgress);
        });

        updateProgress(); // Initial check
    });
</script>';
    $faq_view = '[{"question":"Can I view my property EC online for free?","answer":"Yes, most states provide a guest \\"View EC\\" service that is completely free of charge. This gives an instant view of the transaction ledger on screen."},{"question":"What information is required to perform an online EC search?","answer":"You typically need the property district, village name, the specific Sub-Registrar Office (SRO), and the land survey number or registered document number."},{"question":"What is the difference between Form 15 and Form 16 EC?","answer":"Form 15 contains details of all registered transactions (sales, mortgages, leases) on the property. Form 16 is a \\"Nil Encumbrance Certificate,\\" meaning no transactions were recorded."},{"question":"Can I print the online draft EC for official bank loans?","answer":"No, banks require a Certified copy which has a digital signature from the Sub-Registrar. The free online view draft is only for research and information."}]';
    $schema_type_view = 'Article';

    $stmt = $pdo->prepare("
        INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status)
        VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ON DUPLICATE KEY UPDATE 
            keyword = VALUES(keyword),
            title = VALUES(title),
            meta_desc = VALUES(meta_desc),
            h1_title = VALUES(h1_title),
            content = VALUES(content),
            faq_data = VALUES(faq_data),
            schema_type = VALUES(schema_type),
            status = 'published'
    ");
    $stmt->execute([
        'slug' => $slug_view,
        'keyword' => $keyword_view,
        'title' => $title_view,
        'meta_desc' => $meta_desc_view,
        'h1_title' => $h1_view,
        'content' => $content_view,
        'faq_data' => $faq_view,
        'schema_type' => $schema_type_view
    ]);

    // --- 5. AUTO-INITIALIZE ONLINE EC DOWNLOAD PAGE ---
    $slug_dl = 'online-ec-download';
    $keyword_dl = 'online ec download';
    $title_dl = 'online ec download';
    $h1_dl = 'online ec download';
    $meta_desc_dl = 'Access the interactive national online ec download gateway. Learn how to download digitally signed certificates, compute copy fees, and get verified copies.';
    $content_dl = '<!-- Custom Interactive Styles for Download Portal -->
<style>
    /* Toolkit Wrapper */
    .toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    
    /* Responsive Flexbox Grid for Widgets */
    .utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .utility-grid {
            flex-direction: row;
        }
        .widget-panel {
            flex: 1;
        }
    }
    
    /* Widget Panels */
    .widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .widget-panel {
            padding: 1rem;
        }
    }
    .widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .widget-icon {
        font-size: 1.5rem;
    }
    
    /* Forms */
    .form-group {
        margin-bottom: 1rem;
        width: 100%;
    }
    .form-group label {
        display: block;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--text-main);
    }
    .form-select, .form-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-family: var(--font-sans);
        font-size: 0.95rem;
        color: var(--primary);
        outline: none;
        box-sizing: border-box;
    }
    .form-select:focus, .form-input:focus {
        border-color: var(--accent);
    }
    
    /* Interactive Verifier Result Box */
    .verifier-panel {
        background-color: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1.25rem;
        margin-top: 1.25rem;
        display: none;
    }
    .verifier-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--accent);
        margin-bottom: 0.5rem;
    }
    .verifier-details {
        font-size: 0.9rem;
        line-height: 1.5;
        color: var(--text-main);
        margin-bottom: 0.75rem;
    }
    .verifier-btn {
        display: inline-block;
        background-color: var(--accent);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: var(--radius-sm);
        font-weight: 600;
        font-size: 0.85rem;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
    }
    .verifier-btn:hover {
        background-color: var(--accent-hover);
        color: white;
    }
    
    /* Interactive Roadmap/Checklist */
    .roadmap-progress-container {
        background-color: var(--border);
        border-radius: var(--radius-sm);
        height: 8px;
        width: 100%;
        margin-bottom: 1.5rem;
        overflow: hidden;
    }
    .roadmap-progress-bar {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .roadmap-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        cursor: pointer;
        font-size: 0.95rem;
        width: 100%;
    }
    .roadmap-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        cursor: pointer;
        flex-shrink: 0;
    }
    .roadmap-item span {
        line-height: 1.4;
        word-break: break-word;
    }
    .roadmap-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Portal Grid Auto-fit layout (no media queries needed) */
    .portal-quick-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
        width: 100%;
    }
    .portal-btn {
        background-color: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        padding: 1.25rem 0.75rem;
        text-align: center;
        font-weight: 600;
        color: var(--primary);
        box-shadow: var(--shadow-sm);
        transition: all var(--transition-fast);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        box-sizing: border-box;
    }
    .portal-btn:hover {
        border-color: var(--accent);
        background-color: #eff6ff;
        color: var(--accent);
        transform: translateY(-2px);
    }
    .portal-btn-icon {
        font-size: 1.5rem;
    }
    .portal-btn span:not(.portal-btn-icon) {
        font-size: 0.9rem;
        line-height: 1.2;
    }

    /* Responsive Table Container */
    .table-scroll-container {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin: 1.5rem 0;
        width: 100%;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
    }
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
        min-width: 500px;
    }
    .comparison-table th, .comparison-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid var(--border);
        font-size: 0.95rem;
    }
    .comparison-table th {
        background-color: var(--primary);
        color: white;
        font-weight: 600;
    }
    .comparison-table tr:nth-child(even) {
        background-color: var(--bg-main);
    }
</style>

<!-- 1. QUICK PORTAL CONNECTIONS GRID (ABSOLUTE TOP) -->
<div class="card" style="border-top: 4px solid var(--accent); margin-bottom: 1.5rem; background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);">
    <h3 style="font-size: 1.1rem; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted);">National Portal Connections</h3>
    <div class="portal-quick-grid">
        <a href="https://tnreginet.gov.in/portal/webEServices/certifiedCopy" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">🏛️</span>
            <span>TNREGINET Copy</span>
        </a>
        <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">🌾</span>
            <span>Kaveri Karnataka</span>
        </a>
        <a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">⚖️</span>
            <span>IGRS Telangana</span>
        </a>
        <a href="https://igrs.ap.gov.in" target="_blank" rel="nofollow noopener" class="portal-btn">
            <span class="portal-btn-icon">🏛️</span>
            <span>IGRS Andhra Pradesh</span>
        </a>
    </div>
</div>

<!-- 2. STATE SELECTOR & DYNAMIC DETECTOR WIDGETS -->
<div class="toolkit-container" style="margin-top: 0; margin-bottom: 1.5rem;">
    <div class="utility-grid">
        
        <!-- Widget 1: State Portal Download Locator -->
        <div class="widget-panel">
            <div class="widget-header">
                <span class="widget-icon">📥</span>
                <h3>Direct State PDF Downloader</h3>
            </div>
            
            <div class="form-group">
                <label for="dl-state">Select Property State:</label>
                <select id="dl-state" class="form-select">
                    <option value="">-- Choose State --</option>
                    <option value="TN">Tamil Nadu (Certified Copy)</option>
                    <option value="KA">Karnataka (Kaveri Online Services)</option>
                    <option value="TS">Telangana (IGRS TS portal)</option>
                    <option value="AP">Andhra Pradesh (IGRS AP portal)</option>
                    <option value="KL">Kerala (Registration Dept)</option>
                </select>
            </div>
            
            <!-- Dynamic Result Box -->
            <div class="verifier-panel" id="dl-result-panel">
                <div class="verifier-title" id="dl-result-title"></div>
                <div class="verifier-details" id="dl-result-details"></div>
                <a href="" id="dl-result-link" target="_blank" rel="nofollow noopener" class="verifier-btn">Access Official Download Portal</a>
            </div>
        </div>
        
        <!-- Widget 2: Interactive Signature Verification Assistant -->
        <div class="widget-panel">
            <div class="widget-header">
                <span class="widget-icon">🔏</span>
                <h3>Digital Signature Verifier</h3>
            </div>
            
            <div class="form-group">
                <label for="verify-state">Select Document State:</label>
                <select id="verify-state" class="form-select">
                    <option value="">-- Select State --</option>
                    <option value="TN">Tamil Nadu (TNREGINET)</option>
                    <option value="KA">Karnataka (Kaveri)</option>
                    <option value="TS">Telangana (IGRS TS)</option>
                    <option value="AP">Andhra Pradesh (IGRS AP)</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="verify-code">Application Number / Document ID:</label>
                <input type="text" id="verify-code" class="form-input" placeholder="e.g. TN2026SRO142">
            </div>
            
            <button class="btn-primary" id="btn-verify-action" style="width: 100%; border: none; cursor: pointer; text-align: center; justify-content: center; padding: 0.75rem;">Simulate Cryptographic Audit</button>
            
            <div class="verifier-panel" id="audit-result-panel">
                <div class="verifier-title" id="audit-result-title"></div>
                <div class="verifier-details" id="audit-result-details"></div>
            </div>
        </div>
        
    </div>
</div>

<!-- 3. STEP ROADMAP WITH PROGRESS BAR (ABSOLUTE TOP) -->
<div class="card" style="border-top: 4px solid var(--success); margin-bottom: 2rem;">
    <div class="widget-header">
        <span class="widget-icon">🚀</span>
        <h3>Interactive EC Download Roadmap</h3>
    </div>
    <p class="content-text" style="font-size: 0.9rem; margin-bottom: 1.25rem;">
        Follow these key steps to apply for, pay, mutate title, and successfully retrieve your signed PDF copy:
    </p>
    
    <div class="roadmap-progress-container">
        <div class="roadmap-progress-bar" id="road-progress"></div>
    </div>
    
    <div id="road-items-list">
        <label class="roadmap-item">
            <input type="checkbox" data-index="1">
            <span>Register a citizen user account on the official state stamps and registration portal.</span>
        </label>
        <label class="roadmap-item">
            <input type="checkbox" data-index="2">
            <span>Perform a preliminary **ec view online** check to ensure the registry ledger contains transaction history.</span>
        </label>
        <label class="roadmap-item">
            <input type="checkbox" data-index="3">
            <span>Select \'Certified Copy EC\' application service and fill out the detailed property boundary coordinates.</span>
        </label>
        <label class="roadmap-item">
            <input type="checkbox" data-index="4">
            <span>Pay the estimated processing and search fee online using the integrated government payment gateway.</span>
        </label>
        <label class="roadmap-item">
            <input type="checkbox" data-index="5">
            <span>Monitor the **online ec status** dashboard regularly for Sub-Registrar approval details.</span>
        </label>
        <label class="roadmap-item">
            <input type="checkbox" data-index="6">
            <span>Download the approved PDF file containing the officer\'s cryptographic digital signature block.</span>
        </label>
    </div>
</div>

<!-- 4. MAIN SEO CONTENT BASE -->
<div class="card">
    <h2>Understanding online ec download Procedures</h2>
    <p class="content-text">
        In the modern real estate sector, verifying property titles has transitioned from physical registers to digital archives. If you are completing a land purchase or processing a home loan, performing an <strong>online ec download</strong> is essential. This document serves as legal proof that a property has a clean title, and is not loaded with undisclosed bank mortgages, legal disputes, or third-party attachments.
    </p>
    <p class="content-text">
        When you execute a secure <a href="https://econline.in/">ec online</a> download, you retrieve the transaction ledger entries recorded at the local Sub-Registrar Office (SRO) under the Registration Act. Rather than visiting government offices and filing manual applications, buyers can register accounts on state databases, input property survey codes, pay nominal fees, and download verified PDF documents containing cryptographic digital signatures.
    </p>
    <p class="content-text">
        These digital copies are highly recognized. Banks, financial institutions, and courts accept them directly as valid evidence of property title history, provided they carry the verified signature of the registration department authorities.
    </p>
</div>

<div class="card">
    <h2>Draft Copy vs. Certified copy: Which Should You Download?</h2>
    <p class="content-text">
        Before initiating your search request on the government portals, it is critical to understand the legal differences between a free preview copy and a paid certified copy. If you only need a quick verification of the seller\'s claim, you can use the free guest search tool to <a href="/ec-view-online/">ec view online</a> and inspect the transaction ledger on screen. However, if the document is needed for a legal contract, bank mortgage registration, or land registry mutation, you must execute a formal paid application to get a certified copy.
    </p>
    
    <!-- RESPONSIVE COMPARISON TABLE -->
    <div class="table-scroll-container">
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Free Draft View</th>
                    <th>Certified PDF Copy (Paid)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-weight: 600;">Purpose</td>
                    <td>Informational lookup, quick title verification.</td>
                    <td>Bank loans, legal registration, official audit.</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">Cost</td>
                    <td>Free of Cost (₹0)</td>
                    <td>Nominal search fee + Application fee.</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">Signature Block</td>
                    <td>None (Shows "Draft Copy Only").</td>
                    <td>Officer\'s Cryptographic Digital Signature.</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">Processing Time</td>
                    <td>Instant (On-screen download).</td>
                    <td>2 to 7 working days for SRO verification.</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <p class="content-text">
        For formal requirements, carrying out a certified <strong>ec download online</strong> is mandatory. The document has legal validity and is admissibility in court, ensuring protection against title fraud. For guest users in Karnataka, the Kaveri portal offers the <a href="https://econline.in/">ec online</a> viewer, but the document lacks the necessary signature block for financial audits.
    </p>
</div>

<div class="card">
    <h2>State-Wise Guide to Downloading Encumbrance Certificates</h2>
    <p class="content-text">
        Because land registration is handled at the state level in India, each state operates a distinct registration portal. Below is the detailed step-by-step breakdown of the main state portal procedures:
    </p>
    
    <h3>1. Tamil Nadu (TNREGINET Portal)</h3>
    <p class="content-text">
        Tamil Nadu provides comprehensive services for property checking. To retrieve your document, you must use the TNREGINET portal. If you only want a quick check, you can perform an <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> search using E-Services > Encumbrance Certificate > View EC to download a free draft.
    </p>
    <p class="content-text">
        If you require an official certified document, follow these instructions for a paid <strong>ec download online tamilnadu</strong> or general <strong>download ec online tamilnadu</strong> search:
    </p>
    <ol style="margin-left: 1.5rem; line-height: 1.8; margin-bottom: 1.5rem;">
        <li>Log in to your citizen account at <code>https://tnreginet.gov.in</code>.</li>
        <li>Select <strong>E-Services > Encumbrance Certificate > Apply Online</strong>.</li>
        <li>Enter SRO name, survey/subdivision codes, and boundary parameters.</li>
        <li>Pay the computed fee online. The portal charges a search fee of ₹15 per year, in addition to an application fee of ₹1.</li>
        <li>Monitor your dashboard for officer approval. Once approved, click **Download Certificate** to retrieve the digitally signed PDF copy.</li>
    </ol>
    <p class="content-text">
        If you prefer the text in English, make sure to change the language preference toggle on the TNREGINET header before starting, which allows you to perform an <strong>online ec download tamilnadu</strong> check in English.
    </p>

    <h3>2. Karnataka (Kaveri Online Services)</h3>
    <p class="content-text">
        For properties located in Bangalore or other Karnataka districts, you must use the Kaveri portal. While you can view basic details, you must log in to execute a certified <strong>kaveri online ec download</strong> or standard <strong>download ec online karnataka</strong> search.
    </p>
    <ol style="margin-left: 1.5rem; line-height: 1.8; margin-bottom: 1.5rem;">
        <li>Log in to your user profile at <code>https://kaverionline.karnataka.gov.in</code>.</li>
        <li>Click **Online EC** under Citizen Services.</li>
        <li>Provide property specifications, SRO office, survey numbers, and boundaries.</li>
        <li>Submit and pay search fees online. The government charges a base search fee of ₹15 for the first year, and ₹10 for each subsequent year.</li>
        <li>Once processed by the registrar, you can complete the **how to download signed ec from kaveri online** task by going to your dashboard, clicking "Saved Applications," and downloading the approved PDF document.</li>
    </ol>

    <h3>3. Telangana & Andhra Pradesh (IGRS Portals)</h3>
    <p class="content-text">
        Telangana records are accessed via the IGRS TS portal. Log in to search using SRO, survey code, or document number to trigger a certified <strong>ts ec download online</strong>.
    </p>
    <p class="content-text">
        Similarly, in Andhra Pradesh, users access the IGRS AP website. Citizens can search and download transaction logs by executing an <strong>ap online ec download</strong> query using either property survey coordinates or registered deed document reference keys.
    </p>
</div>

<div class="card">
    <h2>How to Verify Digitally Signed EC Files</h2>
    <p class="content-text">
        When you complete a certified <strong>download ec online</strong> transaction, the resulting PDF contains a cryptographic digital signature stamp at the bottom of the page. This signature acts as legal confirmation that the document was generated from the official registration logs.
    </p>
    <p class="content-text">
        However, when you open the downloaded PDF on your computer, the signature block may show a question mark icon saying **"Signature Not Verified"** or **"Signature Unknown"**. To resolve this issue and verify the signature:
    </p>
    <ol style="margin-left: 1.5rem; line-height: 1.8; margin-bottom: 1.5rem;">
        <li>Open the PDF document using Adobe Acrobat Reader (not basic web browsers or local PDF readers).</li>
        <li>Right-click on the signature stamp block at the bottom of the document and select **Signature Properties**.</li>
        <li>Click **Show Signer\'s Certificate**.</li>
        <li>Select the **Trust** tab, then click **Add to Trusted Certificates**.</li>
        <li>Check the options for **Certified documents** and **Dynamic content**, then click OK.</li>
        <li>Click **Validate Signature** to update the icon to a green checkmark indicating the signature is valid.</li>
    </ol>
    <p class="content-text">
        To double-check that a certificate provided by a seller is authentic, you can use the official verification portal. Use the **online ec status** lookup tool and verify that the unique certificate key matches the state registration department transaction log database.
    </p>
</div>

<!-- JavaScript for Dynamic Download Selector & Verifier -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // --- 1. DYNAMIC DOWNLOAD LOCATOR ---
        const dlStateSelect = document.getElementById("dl-state");
        const dlResultPanel = document.getElementById("dl-result-panel");
        const dlResultTitle = document.getElementById("dl-result-title");
        const dlResultDetails = document.getElementById("dl-result-details");
        const dlResultLink = document.getElementById("dl-result-link");

        const stateDlData = {
            "TN": {
                title: "🏛️ Tamil Nadu (TNREGINET)",
                details: "To download a certified copy of your EC, you must log in to your TNREGINET account and navigate to E-Services > Encumbrance Certificate > Apply Online. Government fees: ₹15/search year.",
                link: "https://tnreginet.gov.in/portal/userRegistration"
            },
            "KA": {
                title: "🌾 Karnataka (Kaveri Portal)",
                details: "Access Kaveri Online Services, log in to your citizen profile, select \'Online EC\' under Citizen Services, and pay the fee online to request a digitally signed copy.",
                link: "https://kaverionline.karnataka.gov.in"
            },
            "TS": {
                title: "⚖️ Telangana (IGRS TS)",
                details: "Log in to the IGRS Telangana Portal, navigate to \'Encumbrance Certificate\' under Online Services, search by SRO and Survey details, and submit to download the PDF.",
                link: "https://registration.telangana.gov.in"
            },
            "AP": {
                title: "🏛️ Andhra Pradesh (IGRS AP)",
                details: "Visit IGRS Andhra Pradesh, use the \'Encumbrance Certificate\' download utility under Online Services, and search using SRO name and property coordinates.",
                link: "https://igrs.ap.gov.in"
            },
            "KL": {
                title: "🏛️ Kerala (Registration Portal)",
                details: "Log in to the Kerala Registration portal, apply under Citizen Services > Encumbrance Certificate, pay online, and download once signed by SRO officer.",
                link: "https://keralaregistration.gov.in"
            }
        };

        dlStateSelect.addEventListener("change", function() {
            const val = dlStateSelect.value;
            if (!val) {
                dlResultPanel.style.display = "none";
                return;
            }
            const data = stateDlData[val];
            dlResultTitle.innerText = data.title;
            dlResultDetails.innerText = data.details;
            dlResultLink.href = data.link;
            dlResultPanel.style.display = "block";
        });

        // --- 2. SIGNATURE AUDIT VERIFIER ---
        const btnVerify = document.getElementById("btn-verify-action");
        const verifyStateSelect = document.getElementById("verify-state");
        const verifyCodeInput = document.getElementById("verify-code");
        const auditPanel = document.getElementById("audit-result-panel");
        const auditTitle = document.getElementById("audit-result-title");
        const auditDetails = document.getElementById("audit-result-details");

        btnVerify.addEventListener("click", function() {
            const state = verifyStateSelect.value;
            const code = verifyCodeInput.value.trim();

            if (!state) {
                alert("Please select the Document State.");
                return;
            }
            if (!code) {
                alert("Please enter the Application Number or Document ID.");
                return;
            }

            // Simulate Audit
            auditTitle.innerHTML = "🔍 Cryptographic Audit Result: " + state;
            auditDetails.innerHTML = "Document ID <strong>" + code + "</strong> has been checked against the simulated public key registry.<br><br>👉 **Next Steps for Verification**:<br>1. Open the PDF file using Adobe Acrobat Reader.<br>2. Right-click on the signature block and select \'Validate Signature\'.<br>3. To verify on the government database, log in to the official portal and select E-Services > **Verify Certified Copy**.";
            auditPanel.style.display = "block";
        });

        // --- 3. CHECKLIST ROADMAP LOGIC ---
        const checkboxes = document.querySelectorAll("#road-items-list input[type=\'checkbox\']");
        const progressBar = document.getElementById("road-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;

            checkboxes.forEach(chk => {
                const label = chk.closest(".roadmap-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });

            const percent = Math.round((checkedCount / total) * 100);
            progressBar.style.width = percent + "%";
        }

        checkboxes.forEach(chk => {
            chk.addEventListener("change", updateProgress);
        });

        updateProgress(); // Initial check
    });
</script>';
    $faq_dl = '[{"question":"How can I download my Encumbrance Certificate online?","answer":"To complete an <strong>online ec download</strong>, you must register a citizen account on your state\'s official registration department portal. Fill in the property Zone, District, SRO office, and Land Survey Number, pay the nominal government fee online, and download the digitally signed PDF copy from your user dashboard once approved by the officer."},{"question":"What is the fee to download a certified EC online?","answer":"Stamps and registration fees vary by state. For example, in Tamil Nadu, the search fee is ₹15 per year. In Karnataka, the government charges a base search fee of ₹15 for the first year, and ₹10 for each subsequent year. Free draft view downloads are available in most states for informational lookup."},{"question":"How do I resolve \\"Signature Not Verified\\" on my downloaded EC PDF?","answer":"Open the downloaded PDF document in Adobe Acrobat Reader. Right-click the signature signature stamp at the bottom of the page, click **Signature Properties > Show Signer\'s Certificate**, select the **Trust** tab, click **Add to Trusted Certificates**, check all certified trust options, and click **Validate Signature** to convert the question mark to a valid green checkmark."},{"question":"How can I verify the authenticity of a downloaded EC copy?","answer":"Every digitally signed certified EC download contains a unique document number, application reference key, or QR code. You can verify the validity of the copy by entering this key on the official state portal under the \\"Verify Certified Copy\\" citizen services section."}]';
    $schema_type_dl = 'Article';

    $stmt = $pdo->prepare("
        INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status)
        VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ON DUPLICATE KEY UPDATE 
            keyword = VALUES(keyword),
            title = VALUES(title),
            meta_desc = VALUES(meta_desc),
            h1_title = VALUES(h1_title),
            content = VALUES(content),
            faq_data = VALUES(faq_data),
            schema_type = VALUES(schema_type),
            status = 'published'
    ");
    $stmt->execute([
        'slug' => $slug_dl,
        'keyword' => $keyword_dl,
        'title' => $title_dl,
        'meta_desc' => $meta_desc_dl,
        'h1_title' => $h1_dl,
        'content' => $content_dl,
        'faq_data' => $faq_dl,
        'schema_type' => $schema_type_dl
    ]);

    // --- 6. AUTO-INITIALIZE EC ONLINE TELANGANA PAGE ---
    $slug_ts = 'ec-online-telangana';
    $keyword_ts = 'ec online telangana';
    $title_ts = 'ec online telangana';
    $h1_ts = 'ec online telangana';
    $meta_desc_ts = 'Access the step-by-step citizen guide for ec online telangana. Learn how to search registered documents, check Dharani land records, and view encumbrance certificates online.';
    $content_ts = '<!-- Custom Interactive Styles for Telangana EC Dashboard -->
<style>
    .toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    .utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .utility-grid {
            flex-direction: row;
        }
        .widget-panel {
            flex: 1;
        }
    }
    .widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .widget-panel {
            padding: 1rem;
        }
    }
    .widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .widget-icon {
        font-size: 1.5rem;
    }
    
    /* Tab Routing System */
    .tab-header {
        display: flex;
        border-bottom: 2px solid var(--border);
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    .tab-btn {
        flex: 1;
        padding: 0.6rem 0.8rem;
        background: none;
        border: none;
        border-bottom: 2px solid transparent;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--text-muted);
        cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast);
        text-align: center;
    }
    .tab-btn.active {
        color: var(--accent);
        border-bottom-color: var(--accent);
    }
    .tab-pane {
        display: none;
        animation: fadeIn 0.3s ease;
    }
    .tab-pane.active {
        display: block;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist progress */
    .progress-bar-wrap {
        background: var(--border);
        border-radius: 4px;
        height: 8px;
        width: 100%;
        margin-bottom: 1.25rem;
        overflow: hidden;
    }
    .progress-bar-fill {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .checklist-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        cursor: pointer;
    }
    .checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        cursor: pointer;
    }
    .checklist-item span {
        line-height: 1.4;
        color: var(--text-main);
        font-size: 0.95rem;
    }
    .checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Calculator */
    .calc-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .calc-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
    }
    .calc-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-size: 0.95rem;
        outline: none;
        box-sizing: border-box;
        font-family: var(--font-sans);
        color: var(--primary);
    }
    .calc-input:focus {
        border-color: var(--accent);
    }
    .calc-result {
        background: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1rem;
        margin-top: 1rem;
        color: var(--primary);
    }
    .calc-result-title {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 0.25rem;
    }
    .calc-amount {
        font-size: 1.5rem;
        color: var(--accent);
        font-weight: 800;
    }
</style>

<div class="toolkit-container">
    <div class="utility-grid">
        <!-- Widget 1: TS Portal Switcher -->
        <div class="widget-panel">
            <div class="widget-header">
                <span class="widget-icon">🗺️</span>
                <h3>Telangana Portal Selector</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Select the property type to display the correct step-by-step official gateway guidelines.
            </p>
            <div class="tab-header">
                <button class="tab-btn active" id="btn-igrs">IGRS Portal (Non-Agri)</button>
                <button class="tab-btn" id="btn-dharani">Dharani (Agricultural)</button>
            </div>
            
            <div class="tab-pane active" id="pane-igrs">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>For Plots, Apartments & Houses:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Open IGRS TS Portal.</li>
                        <li style="margin-bottom: 0.4rem;">Register or login to your account.</li>
                        <li style="margin-bottom: 0.4rem;">Click "Encumbrance Certificate".</li>
                        <li>Search by Document Number & Year or Property Details.</li>
                    </ol>
                    <a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Go to IGRS TS</a>
                </div>
            </div>
            
            <div class="tab-pane" id="pane-dharani">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>For Agricultural & Farm Land:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Open the Dharani Land Dashboard.</li>
                        <li style="margin-bottom: 0.4rem;">Select "Land Details Search" link.</li>
                        <li style="margin-bottom: 0.4rem;">Select search type (Survey No. or Passbook No.).</li>
                        <li>Enter Mandal, District, and Village details to check.</li>
                    </ol>
                    <a href="https://dharani.telangana.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Go to Dharani Portal</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: TS Document Checklist -->
        <div class="widget-panel">
            <div class="widget-header">
                <span class="widget-icon">📋</span>
                <h3>TS EC Search Checklist</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check the boxes below to track your document parameters before initiating search queries.
            </p>
            <div class="progress-bar-wrap">
                <div class="progress-bar-fill" id="ts-progress"></div>
            </div>
            <div class="checklist-list" id="ts-checklist">
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>District & Sub-Registrar Office (SRO) Name</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Property Registered Document Number & Year</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Land Survey Number or Town Survey (TS) No.</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Pattadar Passbook Number (Only for Agricultural Lands)</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Property Boundaries (North, South, East, West boundaries)</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: TS Fee Calculator -->
        <div class="widget-panel">
            <div class="widget-header">
                <span class="widget-icon">💰</span>
                <h3>TS Search Fee Calculator</h3>
            </div>
            <div class="calc-group">
                <label for="ts-years">Search Duration (Years):</label>
                <input type="number" id="ts-years" class="calc-input" min="1" max="100" value="13">
            </div>
            <div class="calc-result">
                <div class="calc-result-title">Estimated Government Fee:</div>
                <div class="calc-amount" id="ts-fee-display">₹320</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;">
                    Calculation: ₹200 (Base Fee for Year 1) + ₹10 per additional year.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnIgrs = document.getElementById("btn-igrs");
        const btnDharani = document.getElementById("btn-dharani");
        const paneIgrs = document.getElementById("pane-igrs");
        const paneDharani = document.getElementById("pane-dharani");

        btnIgrs.addEventListener("click", function() {
            btnIgrs.classList.add("active");
            btnDharani.classList.remove("active");
            paneIgrs.classList.add("active");
            paneDharani.classList.remove("active");
        });

        btnDharani.addEventListener("click", function() {
            btnDharani.classList.add("active");
            btnIgrs.classList.remove("active");
            paneDharani.classList.add("active");
            paneIgrs.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ts-checklist input[type=\'checkbox\']");
        const progress = document.getElementById("ts-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator logic
        const inputYears = document.getElementById("ts-years");
        const feeDisplay = document.getElementById("ts-fee-display");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            // Base Fee is Rs. 200 for year 1, and Rs. 10 for each subsequent year.
            const totalFee = 200 + (years - 1) * 10;
            feeDisplay.innerText = "₹" + totalFee;
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding ec online telangana Land Records</h2>
<p class="content-text">
    Telangana has completely digitized its property registration records to enhance transparency and efficiency. Citizens can perform an **ec online telangana** search for any registered property. By utilizing digital records, buyers can perform crucial land checks before making financial commitments. The government divides property administration into two distinct categories: agricultural land, which is tracked on the Dharani portal, and non-agricultural property, which is recorded on the Integrated Grievance Redressal System (IGRS) portal.
</p>
<p class="content-text">
    Obtaining an <a href="https://econline.in/">ec online</a> in Telangana is the single most important step for property title verification. It ensures that the plot or building is free from active mortgages, legal seizures, or secondary claims. Knowing how to run a <a href="/ec-view-online/">ec view online</a> search saves buyers from major transactional delays.
</p>

<h2>Dharani vs. IGRS TS: Where to Run a Search?</h2>
<p class="content-text">
    To locate your property transaction statement, you must choose the appropriate portal. If the property is agricultural (farm fields or village cultivation tracts), the database search must be initiated on the **Dharani EC online** portal. If the property is non-agricultural (house, residential plot, commercial shop, flat, or villa), you must use the official registry portal for <a href="https://econline.in/">ec online</a> details, which is managed by the IGRS Telangana website.
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Feature</th>
                <th style="padding: 12px; border: 1px solid var(--border);">IGRS Telangana (Non-Agri)</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Dharani Portal (Agri)</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Property Types</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Plots, Apartments, Houses, Shops</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Agricultural land, plantations, farm lands</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Required Details</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Document number, year, SRO, district</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Pattadar Passbook No., Survey Number</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Search Cost</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Calculated search fee (Min. ₹200)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Free to search on Dharani Dashboard</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide: IGRS Telangana EC Search</h2>
<p class="content-text">
    To execute an **ec telangana online search** for plots or buildings on the IGRS portal, follow these exact procedures:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Access IGRS TS Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the official registration site: <a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener">registration.telangana.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">User Registration</h3>
        <p class="content-text" style="margin-bottom:0;">Register your citizen profile using your mobile number and password, then login to proceed.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Select Encumbrance Certificate</h3>
        <p class="content-text" style="margin-bottom:0;">Select the **"Encumbrance Certificate (EC)"** link from the online services list.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Submit Details</h3>
        <p class="content-text" style="margin-bottom:0;">Input search parameters on the <a href="https://econline.in/">ec online</a> platform. Search by entering document details (Doc No. and SRO registration year).</p>
    </div>
</div>

<p class="content-text">
    For non-agricultural properties, obtaining your <a href="https://econline.in/">ec online</a> is handled by the sub-registrar office where the deed was executed. If you are comparing this with other states, you might also be interested in our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide or checking the generic instructions on <a href="/online-ec-download/">online ec download</a> properties.
</p>

<h2>Dharani Land Records: Agricultural EC Search</h2>
<p class="content-text">
    For agricultural land search, you can run a **telangana ec search online** using the Dharani dashboard. Dharani integrates land records with registration services:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Visit the official portal at **dharani.telangana.gov.in**.</li>
    <li style="margin-bottom: 0.5rem;">Select the **"Land Details Search"** menu option.</li>
    <li style="margin-bottom: 0.5rem;">Choose between **"Search by Survey No."** or **"Search by Pattadar Passbook Number"**.</li>
    <li style="margin-bottom: 0.5rem;">Select your District, Mandal, and Village name from the dropdown selectors.</li>
    <li style="margin-bottom: 0.5rem;">Verify the security captcha and click **"Fetch"** to display the land transaction records on your screen.</li>
</ol>
<p class="content-text">
    Once registration is complete, verification of your <a href="https://econline.in/">ec online</a> history should be checked immediately to ensure the new ownership has been mutated correctly in the revenue records.
</p>

<h2>Fees and Charges for Telangana EC Searches</h2>
<p class="content-text">
    When requesting an **online ec search telangana** through the IGRS portal, you must pay official stamp department fees. These fees are calculated based on the requested search duration:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">**First Year Base Charge**: ₹200</li>
    <li style="margin-bottom: 0.5rem;">**Subsequent Years Charge**: ₹10 per year (for each year added to the search period)</li>
    <li style="margin-bottom: 0.5rem;">**Service Charges**: Nominal online processing service charges are added dynamically at checkout.</li>
</ul>
<p class="content-text">
    Once you pay the fees, the system will process the document. You can print a certified copy of the <a href="https://econline.in/">ec online</a> document from your dashboard, which has legal validity for bank mortgage applications.
</p>';
    $faq_ts = '[{"question":"What details are required to check ec online telangana?","answer":"For non-agricultural properties, you need the property document number, registration year, and the specific Sub-Registrar Office (SRO) name. For agricultural land, you need the Pattadar Passbook Number or Survey/Sub-division Number along with the District, Mandal, and Village details."},{"question":"What is the fee for telangana ec search online?","answer":"The official government search fee is ₹200 for the first year, plus ₹10 for every additional year included in your search period. Additional service/portal processing charges may apply at the time of online payment."},{"question":"How do I download a certified copy of ts ec online?","answer":"Log in to the IGRS Telangana Portal, select \'Encumbrance Certificate\', enter your property registered details, calculate and pay the fees online. Once processed by the sub-registrar office, you can download the digitally signed PDF certified copy directly from your user dashboard."},{"question":"Can I check agricultural land encumbrance details for free?","answer":"Yes, you can search and check agricultural land records for free on the Dharani Portal under the \'Land Details Search\' service. This allows citizens to view ownership status, survey records, and liabilities instantly without paying any search fee."}]';
    $schema_type_ts = 'Article';

    $stmt = $pdo->prepare("
        INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status)
        VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ON DUPLICATE KEY UPDATE 
            keyword = VALUES(keyword),
            title = VALUES(title),
            meta_desc = VALUES(meta_desc),
            h1_title = VALUES(h1_title),
            content = VALUES(content),
            faq_data = VALUES(faq_data),
            schema_type = VALUES(schema_type),
            status = 'published'
    ");
    $stmt->execute([
        'slug' => $slug_ts,
        'keyword' => $keyword_ts,
        'title' => $title_ts,
        'meta_desc' => $meta_desc_ts,
        'h1_title' => $h1_ts,
        'content' => $content_ts,
        'faq_data' => $faq_ts,
        'schema_type' => $schema_type_ts
    ]);

    // --- 7. AUTO-INITIALIZE ONLINE EC AP PAGE ---
    $slug_ap = 'online-ec-ap';
    $keyword_ap = 'online ec ap';
    $title_ap = 'online ec ap';
    $h1_ap = 'online ec ap';
    $meta_desc_ap = 'Access the official AP IGRS portal. Learn how to verify land registries, check guidelines, and perform an online ec ap search for free property logs.';
    $content_ap = '<!-- Custom Interactive Styles for AP EC Dashboard -->
<style>
    .ap-toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    .ap-utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .ap-utility-grid {
            flex-direction: row;
        }
        .ap-widget-panel {
            flex: 1;
        }
    }
    .ap-widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .ap-widget-panel {
            padding: 1rem;
        }
    }
    .ap-widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .ap-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .ap-widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .ap-widget-icon {
        font-size: 1.5rem;
    }
    
    /* Tab Routing System */
    .ap-tab-header {
        display: flex;
        border-bottom: 2px solid var(--border);
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    .ap-tab-btn {
        flex: 1;
        padding: 0.6rem 0.8rem;
        background: none;
        border: none;
        border-bottom: 2px solid transparent;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--text-muted);
        cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast);
        text-align: center;
    }
    .ap-tab-btn.active {
        color: var(--accent);
        border-bottom-color: var(--accent);
    }
    .ap-tab-pane {
        display: none;
        animation: apFadeIn 0.3s ease;
    }
    .ap-tab-pane.active {
        display: block;
    }
    @keyframes apFadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist progress */
    .ap-progress-bar-wrap {
        background: var(--border);
        border-radius: 4px;
        height: 8px;
        width: 100%;
        margin-bottom: 1.25rem;
        overflow: hidden;
    }
    .ap-progress-bar-fill {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .ap-checklist-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .ap-checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        cursor: pointer;
    }
    .ap-checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        cursor: pointer;
    }
    .ap-checklist-item span {
        line-height: 1.4;
        color: var(--text-main);
        font-size: 0.95rem;
    }
    .ap-checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Calculator */
    .ap-calc-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .ap-calc-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
    }
    .ap-calc-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-size: 0.95rem;
        outline: none;
        box-sizing: border-box;
        font-family: var(--font-sans);
        color: var(--primary);
    }
    .ap-calc-input:focus {
        border-color: var(--accent);
    }
    .ap-calc-result {
        background: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1rem;
        margin-top: 1rem;
        color: var(--primary);
    }
    .ap-calc-result-title {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 0.25rem;
    }
    .ap-calc-amount {
        font-size: 1.5rem;
        color: var(--accent);
        font-weight: 800;
    }
</style>

<div class="ap-toolkit-container">
    <div class="ap-utility-grid">
        <!-- Widget 1: AP Portal Switcher -->
        <div class="ap-widget-panel">
            <div class="ap-widget-header">
                <span class="ap-widget-icon">🗺️</span>
                <h3>AP Portal Mode Selector</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Toggle between Guest View (free lookup) and Certified Copy download options.
            </p>
            <div class="ap-tab-header">
                <button class="ap-tab-btn active" id="ap-btn-guest">Guest View (Free)</button>
                <button class="ap-tab-btn" id="ap-btn-cert">Certified EC (Paid)</button>
            </div>
            
            <div class="ap-tab-pane active" id="ap-pane-guest">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Information Statement Only:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Visit IGRS AP website.</li>
                        <li style="margin-bottom: 0.4rem;">Select "Encumbrance Certificate" lookup.</li>
                        <li style="margin-bottom: 0.4rem;">Enter property parameters.</li>
                        <li>View transaction logs on screen without logging in.</li>
                    </ol>
                    <a href="https://registration.ap.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Launch AP Registry</a>
                </div>
            </div>
            
            <div class="ap-tab-pane" id="ap-pane-cert">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Digitally Signed Certified PDF:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Log in to AP Citizen Portal.</li>
                        <li style="margin-bottom: 0.4rem;">Fill online application details.</li>
                        <li style="margin-bottom: 0.4rem;">Pay search fee online (based on years).</li>
                        <li>Download official certificate after SRO officer review.</li>
                    </ol>
                    <a href="https://registration.ap.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Log in to AP Registration</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: AP Document Checklist -->
        <div class="ap-widget-panel">
            <div class="ap-widget-header">
                <span class="ap-widget-icon">📋</span>
                <h3>AP EC Search Parameters</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check parameters needed before querying the AP Land registration database.
            </p>
            <div class="ap-progress-bar-wrap">
                <div class="ap-progress-bar-fill" id="ap-progress"></div>
            </div>
            <div class="ap-checklist-list" id="ap-checklist">
                <label class="ap-checklist-item">
                    <input type="checkbox">
                    <span>District, Mandal & Village Names</span>
                </label>
                <label class="ap-checklist-item">
                    <input type="checkbox">
                    <span>Registered Document Number & Year</span>
                </label>
                <label class="ap-checklist-item">
                    <input type="checkbox">
                    <span>Survey Number / Plot Number</span>
                </label>
                <label class="ap-checklist-item">
                    <input type="checkbox">
                    <span>Sub-Registrar Office (SRO) Name</span>
                </label>
                <label class="ap-checklist-item">
                    <input type="checkbox">
                    <span>Property Boundaries (North, South, East, West)</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: AP Fee Calculator -->
        <div class="ap-widget-panel">
            <div class="ap-widget-header">
                <span class="ap-widget-icon">💰</span>
                <h3>AP EC Search Fee Calculator</h3>
            </div>
            <div class="ap-calc-group">
                <label for="ap-years">Search Duration (Years):</label>
                <input type="number" id="ap-years" class="ap-calc-input" min="1" max="100" value="13">
            </div>
            <div class="ap-calc-group">
                <label for="ap-doc-type">Certificate Type:</label>
                <select id="ap-doc-type" class="ap-calc-input">
                    <option value="signed">Digitally Signed (Official)</option>
                    <option value="guest">Guest View (Information Only)</option>
                </select>
            </div>
            <div class="ap-calc-result">
                <div class="ap-calc-result-title">Estimated Service Fee:</div>
                <div class="ap-calc-amount" id="ap-fee-display">₹225</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="ap-fee-note">
                    Calculation: ₹200 (Government fee up to 30 years) + ₹25 (Portal charges).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnGuest = document.getElementById("ap-btn-guest");
        const btnCert = document.getElementById("ap-btn-cert");
        const paneGuest = document.getElementById("ap-pane-guest");
        const paneCert = document.getElementById("ap-pane-cert");

        btnGuest.addEventListener("click", function() {
            btnGuest.classList.add("active");
            btnCert.classList.remove("active");
            paneGuest.classList.add("active");
            paneCert.classList.remove("active");
        });

        btnCert.addEventListener("click", function() {
            btnCert.classList.add("active");
            btnGuest.classList.remove("active");
            paneCert.classList.add("active");
            paneGuest.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ap-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("ap-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".ap-checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator logic
        const inputYears = document.getElementById("ap-years");
        const selectType = document.getElementById("ap-doc-type");
        const feeDisplay = document.getElementById("ap-fee-display");
        const feeNote = document.getElementById("ap-fee-note");

        function calculateFee() {
            const type = selectType.value;
            if (type === "guest") {
                feeDisplay.innerText = "₹0 (Free)";
                feeNote.innerText = "Guest view statements are for lookup only and contain no official digital signature.";
                return;
            }
            
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            let govFee = 200;
            if (years > 30) {
                govFee = 500;
                feeNote.innerText = "Calculation: ₹500 (Government fee above 30 years) + ₹25 (Portal charges).";
            } else {
                feeNote.innerText = "Calculation: ₹200 (Government fee up to 30 years) + ₹25 (Portal charges).";
            }
            
            feeDisplay.innerText = "₹" + (govFee + 25);
        }

        inputYears.addEventListener("input", calculateFee);
        selectType.addEventListener("change", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding online ec ap Land Registries</h2>
<p class="content-text">
    The Integrated Grievance Redressal System of Andhra Pradesh (IGRS AP) manages property registrations across the state. Performing an **online ec ap** search allows citizens to look up transaction history for plots, flats, and agricultural land. Knowing how to run a registry search is vital for protecting your property investments from title disputes.
</p>
<p class="content-text">
    Before buying real estate, obtaining a verified <a href="https://econline.in/">ec online</a> in Andhra Pradesh is highly recommended. It serves as clean legal evidence that the asset is free from pending court attachment orders, bank loans, or boundary disputes.
</p>

<h2>Guest View vs. Certified Copy on IGRS AP</h2>
<p class="content-text">
    The official portal allows two kinds of property searches. The first is the Guest View service, which allows users to download and verify your <a href="https://econline.in/">ec online</a> records via the IGRS AP website without paying search fees. However, this Guest View printout is only for information and has no legal validity. For loans or courts, users must register, pay fees, and request a digitally signed copy.
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Search Type</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Official Fees</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Digital Signature</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Legal Validity</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Guest View Only</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0 (Free)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">No</td>
                <td style="padding: 12px; border: 1px solid var(--border);">For informational lookup only</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Certified Copy (<= 30 Yrs)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹200 + ₹25 service fee</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Sub-Registrar Signed)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Full validity for loans & courts</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Certified Copy (> 30 Yrs)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹500 + ₹25 service fee</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Sub-Registrar Signed)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Full validity for loans & courts</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide: AP EC Search Process</h2>
<p class="content-text">
    To execute an **online ec andhra pradesh** search on the IGRS portal, follow these step-by-step instructions:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Visit the Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the official registration site: <a href="https://registration.ap.gov.in" target="_blank" rel="nofollow noopener">registration.ap.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Select Services</h3>
        <p class="content-text" style="margin-bottom:0;">Locate the citizen services panel and select the **"Encumbrance Certificate (EC)"** search menu.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Parameters</h3>
        <p class="content-text" style="margin-bottom:0;">Property verification requires an <a href="https://econline.in/">ec online</a> search to inspect details. Input SRO, document numbers, and boundary limits.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Download Statement</h3>
        <p class="content-text" style="margin-bottom:0;">Verify the captcha, click search, and download the resulting property transaction statement.</p>
    </div>
</div>

<p class="content-text">
    For general registry search parameters, you can review our <a href="/ec-view-online/">ec view online</a> directory. Additionally, you may learn how to check guidelines for neighboring states by reading the <a href="/ec-online-telangana/">ec online telangana</a> manual or our detailed <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide.
</p>

<h2>AP EC Search Limitations</h2>
<p class="content-text">
    Before initiating a search, you should keep the following database constraints in mind:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">**Year Limit**: Digital property records on the portal are generally available from **January 1, 1983** onwards. For records prior to this period, physical search applications must be filed at the concerned SRO.</li>
    <li style="margin-bottom: 0.5rem;">**Boundary Verification**: Make sure you have the exact land boundaries. AP registration details may be mapped differently depending on when the site layout was approved.</li>
    <li style="margin-bottom: 0.5rem;">**Unregistered Deeds**: The portal only captures deeds registered with SRO offices. Oral agreements, partition deeds, or unregistered family arrangements will not be listed.</li>
</ul>
<p class="content-text">
    Knowing how to apply for a formal <a href="https://econline.in/">ec online</a> certified document ensures you can verify these details safely. Once the registration process is complete, checking the <a href="https://econline.in/">ec online</a> is the best way to trace the title chain.
</p>

<h2>How to Download Certified AP EC PDF</h2>
<p class="content-text">
    For certified downloads, citizens must perform a **ap online ec download** from the IGRS portal:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Log in to the AP Online Portal.</li>
    <li style="margin-bottom: 0.5rem;">Select **"Encumbrance Certificate Certified Copy"**.</li>
    <li style="margin-bottom: 0.5rem;">Input property details and attach transaction deeds for validation.</li>
    <li style="margin-bottom: 0.5rem;">Submit the application and pay the required fees (₹225 or ₹525 depending on search duration).</li>
    <li style="margin-bottom: 0.5rem;">The application will be routed to the concerned SRO. Once they cryptographically sign the document, you can print out the final <a href="https://econline.in/">ec online</a> certificate for loan submission.</li>
</ol>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are preparing documents for multiple states, check our generic <a href="/online-ec-download/">online ec download</a> dashboard which outlines signature validation protocols across other systems.
</p>';
    $faq_ap = '[{"question":"What is the fee for an online ec ap certified copy?","answer":"For searches up to 30 years, the government fee is ₹200 plus a portal service charge of ₹25, totaling ₹225. For searches extending beyond 30 years, the fee is ₹500 plus a ₹25 service charge, totaling ₹525. The Guest View informational search is completely free of charge."},{"question":"Are older land records available on the IGRS AP website?","answer":"Digital records on the AP registration portal are available from January 1, 1983. For property transactions, deeds, or encumbrance histories dated prior to 1983, you must submit a physical search application at the concerned local Sub-Registrar Office (SRO)."},{"question":"How to check ec online in andhra pradesh for free?","answer":"Go to the official registration.ap.gov.in portal and navigate to the Encumbrance Certificate section under citizen services. Use the \'Guest Search\' option, enter the property details (SRO, Document number, and year), and you can instantly check and view the EC on your screen for free."},{"question":"How long does it take to download a certified copy of AP EC?","answer":"After paying the fees online, the request is verified by the local SRO. Typically, the digitally signed certified EC certificate is approved and available for download in your portal account within 24 to 48 hours."}]';
    $schema_type_ap = 'Article';

    $stmt = $pdo->prepare("
        INSERT INTO econline_pages (slug, keyword, title, meta_desc, h1_title, content, faq_data, schema_type, status)
        VALUES (:slug, :keyword, :title, :meta_desc, :h1_title, :content, :faq_data, :schema_type, 'published')
        ON DUPLICATE KEY UPDATE 
            keyword = VALUES(keyword),
            title = VALUES(title),
            meta_desc = VALUES(meta_desc),
            h1_title = VALUES(h1_title),
            content = VALUES(content),
            faq_data = VALUES(faq_data),
            schema_type = VALUES(schema_type),
            status = 'published'
    ");
    $stmt->execute([
        'slug' => $slug_ap,
        'keyword' => $keyword_ap,
        'title' => $title_ap,
        'meta_desc' => $meta_desc_ap,
        'h1_title' => $h1_ap,
        'content' => $content_ap,
        'faq_data' => $faq_ap,
        'schema_type' => $schema_type_ap
    ]);

    // --- 8. AUTO-INITIALIZE TN EC ONLINE PAGE ---
    $slug_tn = 'tn-ec-online';
    $keyword_tn = 'tn ec online';
    $title_tn = 'tn ec online';
    $h1_tn = 'tn ec online';
    $meta_desc_tn = 'Access the official TNREGINET portal. Learn how to verify property registrations, view Villangam certificates, and perform a tn ec online search.';
    $content_tn = '<!-- Custom Interactive Styles for TN EC Dashboard -->
<style>
    .tn-toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    .tn-utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .tn-utility-grid {
            flex-direction: row;
        }
        .tn-widget-panel {
            flex: 1;
        }
    }
    .tn-widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .tn-widget-panel {
            padding: 1rem;
        }
    }
    .tn-widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .tn-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .tn-widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .tn-widget-icon {
        font-size: 1.5rem;
    }
    
    /* Tab Routing System */
    .tn-tab-header {
        display: flex;
        border-bottom: 2px solid var(--border);
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    .tn-tab-btn {
        flex: 1;
        padding: 0.6rem 0.8rem;
        background: none;
        border: none;
        border-bottom: 2px solid transparent;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--text-muted);
        cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast);
        text-align: center;
    }
    .tn-tab-btn.active {
        color: var(--accent);
        border-bottom-color: var(--accent);
    }
    .tn-tab-pane {
        display: none;
        animation: tnFadeIn 0.3s ease;
    }
    .tn-tab-pane.active {
        display: block;
    }
    @keyframes tnFadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist progress */
    .tn-progress-bar-wrap {
        background: var(--border);
        border-radius: 4px;
        height: 8px;
        width: 100%;
        margin-bottom: 1.25rem;
        overflow: hidden;
    }
    .tn-progress-bar-fill {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .tn-checklist-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .tn-checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        cursor: pointer;
    }
    .tn-checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        cursor: pointer;
    }
    .tn-checklist-item span {
        line-height: 1.4;
        color: var(--text-main);
        font-size: 0.95rem;
    }
    .tn-checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Calculator */
    .tn-calc-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .tn-calc-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
    }
    .tn-calc-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-size: 0.95rem;
        outline: none;
        box-sizing: border-box;
        font-family: var(--font-sans);
        color: var(--primary);
    }
    .tn-calc-input:focus {
        border-color: var(--accent);
    }
    .tn-calc-result {
        background: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1rem;
        margin-top: 1rem;
        color: var(--primary);
    }
    .tn-calc-result-title {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 0.25rem;
    }
    .tn-calc-amount {
        font-size: 1.5rem;
        color: var(--accent);
        font-weight: 800;
    }
</style>

<div class="tn-toolkit-container">
    <div class="tn-utility-grid">
        <!-- Widget 1: TN Portal Switcher -->
        <div class="tn-widget-panel">
            <div class="tn-widget-header">
                <span class="tn-widget-icon">🗺️</span>
                <h3>TN Search Type Selector</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Select your lookup method on the official TNREGINET registration portal.
            </p>
            <div class="tn-tab-header">
                <button class="tn-tab-btn active" id="tn-btn-prop">Search by Property</button>
                <button class="tn-tab-btn" id="tn-btn-doc">Search by Document</button>
            </div>
            
            <div class="tn-tab-pane active" id="tn-pane-prop">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Survey Number Lookup:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Visit the TNREGINET portal.</li>
                        <li style="margin-bottom: 0.4rem;">Go to E-Services > EC > View EC.</li>
                        <li style="margin-bottom: 0.4rem;">Select Zone, District, SRO, and Village.</li>
                        <li>Enter Survey Number & Sub-Division Number.</li>
                    </ol>
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Go to TNREGINET</a>
                </div>
            </div>
            
            <div class="tn-tab-pane" id="tn-pane-doc">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Document Number Lookup:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Visit the TNREGINET portal.</li>
                        <li style="margin-bottom: 0.4rem;">Go to E-Services > EC > View EC.</li>
                        <li style="margin-bottom: 0.4rem;">Select search type "Documentwise".</li>
                        <li>Input SRO, Document Number, and Year.</li>
                    </ol>
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Go to TNREGINET</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: TN Document Checklist -->
        <div class="tn-widget-panel">
            <div class="tn-widget-header">
                <span class="tn-widget-icon">📋</span>
                <h3>TN EC Search Parameters</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check the parameters needed before querying the Tamil Nadu registry database.
            </p>
            <div class="tn-progress-bar-wrap">
                <div class="tn-progress-bar-fill" id="tn-progress"></div>
            </div>
            <div class="tn-checklist-list" id="tn-checklist">
                <label class="tn-checklist-item">
                    <input type="checkbox">
                    <span>District & Registration Zone Name</span>
                </label>
                <label class="tn-checklist-item">
                    <input type="checkbox">
                    <span>Sub-Registrar Office (SRO) Name</span>
                </label>
                <label class="tn-checklist-item">
                    <input type="checkbox">
                    <span>Village Name & Patta/Survey Number</span>
                </label>
                <label class="tn-checklist-item">
                    <input type="checkbox">
                    <span>Property Registered Document Number & Year</span>
                </label>
                <label class="tn-checklist-item">
                    <input type="checkbox">
                    <span>Valid Citizen Portal Account Credentials</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: TN Fee Calculator -->
        <div class="tn-widget-panel">
            <div class="tn-widget-header">
                <span class="tn-widget-icon">💰</span>
                <h3>TN Search Fee Calculator</h3>
            </div>
            <div class="tn-calc-group">
                <label for="tn-years">Search Duration (Years):</label>
                <input type="number" id="tn-years" class="tn-calc-input" min="1" max="100" value="13">
            </div>
            <div class="tn-calc-result">
                <div class="tn-calc-result-title">Estimated Certified Fee:</div>
                <div class="tn-calc-amount" id="tn-fee-display">₹195</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="tn-fee-note">
                    Calculation: ₹15 (1st Year) + ₹60 (Subsequent Years) + ₹100 (Copy Charge) + ₹20 (Portal fee).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnProp = document.getElementById("tn-btn-prop");
        const btnDoc = document.getElementById("tn-btn-doc");
        const paneProp = document.getElementById("tn-pane-prop");
        const paneDoc = document.getElementById("tn-pane-doc");

        btnProp.addEventListener("click", function() {
            btnProp.classList.add("active");
            btnDoc.classList.remove("active");
            paneProp.classList.add("active");
            paneDoc.classList.remove("active");
        });

        btnDoc.addEventListener("click", function() {
            btnDoc.classList.add("active");
            btnProp.classList.remove("active");
            paneDoc.classList.add("active");
            paneProp.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#tn-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("tn-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".tn-checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator logic
        const inputYears = document.getElementById("tn-years");
        const feeDisplay = document.getElementById("tn-fee-display");
        const feeNote = document.getElementById("tn-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 15, subsequent Rs. 5 per year.
            const searchFee = 15 + (years - 1) * 5;
            const copyFee = 100;
            const portalFee = 20;
            const totalFee = searchFee + copyFee + portalFee;
            
            feeDisplay.innerText = "₹" + totalFee;
            feeNote.innerText = "Calculation: ₹15 (1st Year) + ₹" + ((years - 1) * 5) + " (Subsequent Years) + ₹100 (Copy Charge) + ₹20 (Portal fee).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding tn ec online Land Records</h2>
<p class="content-text">
    The Inspector General of Registration (IGR) of Tamil Nadu manages property deeds, mortgages, and land records online via the official **TNREGINET** portal. Acquiring a **tn ec online** statement enables property buyers and owners to trace legal liabilities, verify boundaries, and review historic transactions.
</p>
<p class="content-text">
    Before finalising any real estate transaction, obtaining a property <a href="https://econline.in/">ec online</a> in Tamil Nadu is vital. It acts as legal assurance that the land or building is free from outstanding encumbrances, bank loans, or family court proceedings.
</p>

<h2>Guest View vs. Certified Copy on TNREGINET</h2>
<p class="content-text">
    The state registration portal offers two levels of lookups. First, the basic View EC service allows guest users to search and download the registry records via the <a href="https://econline.in/">ec online</a> service portal for free. This draft is sufficient for immediate search validation. However, for property sales or bank loan evaluations, users must login, submit an application, pay the fees, and download a digitally signed certified copy.
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Search Type</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Search Fee Scale</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Digital Signature</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Legality</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Draft View (Search EC)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0 (Free)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">No</td>
                <td style="padding: 12px; border: 1px solid var(--border);">For informational lookup only</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Certified Copy (Apply Online)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 base + ₹5/yr + ₹100 copy fee</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Digitally Signed by SRO)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Legally binding in banks & courts</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide: TNREGINET EC Search Process</h2>
<p class="content-text">
    To execute a **tnreginet online ec** search using the official TN registration portal, follow these instructions:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Visit TNREGINET Site</h3>
        <p class="content-text" style="margin-bottom:0;">Navigate to the official portal page: <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener">tnreginet.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Navigate to EC Search</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the header menu and select **"More" &rarr; "Search EC" &rarr; "View EC"**.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Search Parameters</h3>
        <p class="content-text" style="margin-bottom:0;">A legal title check requires an <a href="https://econline.in/">ec online</a> lookup to identify details. Select Zone, SRO, and enter the Survey/Sub-division number.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">View or Print PDF</h3>
        <p class="content-text" style="margin-bottom:0;">Verify the captcha, click search, and instantly review the property transaction history on your screen.</p>
    </div>
</div>

<p class="content-text">
    For other states, you can inspect the <a href="/ec-view-online/">ec view online</a> directory. Additionally, you may learn how to check guidelines for neighboring states by reading the <a href="/ec-online-telangana/">ec online telangana</a> manual or our detailed <a href="/online-ec-ap/">online ec ap</a> guide.
</p>

<h2>How to Apply for Certified TN EC Online</h2>
<p class="content-text">
    If you need an official, legally valid document, you must learn how to apply for an official <a href="https://econline.in/">ec online</a> certificate:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Create a user account on the official portal at **tnreginet.gov.in**.</li>
    <li style="margin-bottom: 0.5rem;">Log in using your credentials and select **"Apply Online"** under the EC menu section.</li>
    <li style="margin-bottom: 0.5rem;">Provide SRO registration details and specify the year duration boundaries.</li>
    <li style="margin-bottom: 0.5rem;">Pay the calculated search charges online using net banking or credit cards.</li>
    <li style="margin-bottom: 0.5rem;">Once the sub-registrar signs the deed, checking the <a href="https://econline.in/">ec online</a> history confirms the certificate is ready for download in your dashboard.</li>
</ol>
<p class="content-text">
    Once approved by SRO officers, download the cryptographically certified <a href="https://econline.in/">ec online</a> copy from your panel. If you need help verifying digital signatures on these PDFs, you can consult our <a href="/online-ec-download/">online ec download</a> signature validator instructions.
</p>

<h2>TN EC Verification Parameters</h2>
<p class="content-text">
    When running a **tn ec online download** or performing a **tn ec check online**, citizens must double check these key parameters:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">**SRO Jurisdiction**: Property transactions are recorded only in the specific Sub-Registrar Office (SRO) where the deed was executed. Selecting the wrong SRO will yield no results.</li>
    <li style="margin-bottom: 0.5rem;">**Sub-Division Numbers**: Land parcels are frequently divided. Be sure to check the exact sub-division suffix to get the correct transaction ledger.</li>
    <li style="margin-bottom: 0.5rem;">**Certified Validation Key**: Certified PDFs include an authentication code. You can check its validity under the portal\'s "Verify Certificate" section.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you need to check neighboring states, see the detailed <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> portal guide.
</p>';
    $faq_tn = '[{"question":"What is the fee for tn ec online certified copy?","answer":"The certified copy fee consists of an application fee of ₹1, a search fee of ₹15 for the first year, ₹5 for each subsequent year, a copy fee of ₹100, and a nominal portal processing service fee of ₹20."},{"question":"Can I check my Tamil Nadu EC online for free?","answer":"Yes, you can search and check your EC for free using the Guest Search service under the E-Services section on the official TNREGINET portal. This allows you to view the transaction logs on screen."},{"question":"What is the difference between TNREGINET guest search and certified copy?","answer":"Guest search allows you to view the EC draft on screen for informational use. Certified copies are reviewed and digitally signed by the Sub-Registrar Officer, making them legally valid for home loans and court verification."},{"question":"How long does it take for a certified TN EC to be approved?","answer":"Once you pay the fee online, the request goes to the SRO office. Under standard circumstances, the SRO verifies the details and signs the certificate digitally within 2 to 3 working days."}]';
    $schema_type_tn = 'Article';

    $stmt->execute([
        'slug' => $slug_tn,
        'keyword' => $keyword_tn,
        'title' => $title_tn,
        'meta_desc' => $meta_desc_tn,
        'h1_title' => $h1_tn,
        'content' => $content_tn,
        'faq_data' => $faq_tn,
        'schema_type' => $schema_type_tn
    ]);

    // --- 9. AUTO-INITIALIZE EC TELANGANA ONLINE SEARCH PAGE ---
    $slug_tss = 'ec-telangana-online-search';
    $keyword_tss = 'ec telangana online search';
    $title_tss = 'ec telangana online search';
    $h1_tss = 'ec telangana online search';
    $meta_desc_tss = 'Learn how to perform an ec telangana online search. Verify land deeds, track Dharani logs, and check property registration details online.';
    $content_tss = '<!-- Custom Interactive Styles for TS Search EC Dashboard -->
<style>
    .tss-toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    .tss-utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .tss-utility-grid {
            flex-direction: row;
        }
        .tss-widget-panel {
            flex: 1;
        }
    }
    .tss-widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .tss-widget-panel {
            padding: 1rem;
        }
    }
    .tss-widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .tss-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .tss-widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .tss-widget-icon {
        font-size: 1.5rem;
    }
    
    /* Checklist progress */
    .tss-progress-bar-wrap {
        background: var(--border);
        border-radius: 4px;
        height: 8px;
        width: 100%;
        margin-bottom: 1.25rem;
        overflow: hidden;
    }
    .tss-progress-bar-fill {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .tss-checklist-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .tss-checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        cursor: pointer;
    }
    .tss-checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        cursor: pointer;
    }
    .tss-checklist-item span {
        line-height: 1.4;
        color: var(--text-main);
        font-size: 0.95rem;
    }
    .tss-checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Calculator */
    .tss-calc-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .tss-calc-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
    }
    .tss-calc-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-size: 0.95rem;
        outline: none;
        box-sizing: border-box;
        font-family: var(--font-sans);
        color: var(--primary);
    }
    .tss-calc-input:focus {
        border-color: var(--accent);
    }
    .tss-calc-result {
        background: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1rem;
        margin-top: 1rem;
        color: var(--primary);
    }
    .tss-calc-result-title {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 0.25rem;
    }
    .tss-calc-amount {
        font-size: 1.5rem;
        color: var(--accent);
        font-weight: 800;
    }
</style>

<div class="tss-toolkit-container">
    <div class="tss-utility-grid">
        <!-- Widget 1: TS Portal Matcher -->
        <div class="tss-widget-panel">
            <div class="tss-widget-header">
                <span class="tss-widget-icon">🔍</span>
                <h3>TS Search Parameters Matcher</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Select what details you have to find the correct official website for your search.
            </p>
            <div class="tss-calc-group">
                <label for="tss-have">I have the following property detail:</label>
                <select id="tss-have" class="tss-calc-input">
                    <option value="doc">Property Registered Document Number & Year</option>
                    <option value="survey_agri">Survey Number of Agricultural Land</option>
                    <option value="survey_nonagri">Plot Number/Survey Number of Urban House/Plot</option>
                    <option value="passbook">Pattadar Passbook Number</option>
                </select>
            </div>
            <div class="tss-calc-result" id="tss-matcher-result" style="background: #f0fdf4; border-color: rgba(22, 163, 74, 0.15); color: #15803d;">
                <div class="tss-calc-result-title" style="color: #166534;">Recommended Search Gateway:</div>
                <strong id="tss-match-title" style="font-size: 1.05rem;">IGRS TS Portal - Documentwise Search</strong>
                <p id="tss-match-desc" style="font-size: 0.85rem; line-height: 1.4; margin-top: 0.5rem; margin-bottom: 0.75rem; color: #166534;">
                    Input the Document ID, SRO, and Registration Year on the official Stamps & Registration portal.
                </p>
                <a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" id="tss-match-btn" style="display: inline-block; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none; background-color: #16a34a;">Open IGRS TS</a>
            </div>
        </div>

        <!-- Widget 2: TS Document Checklist -->
        <div class="tss-widget-panel">
            <div class="tss-widget-header">
                <span class="tss-widget-icon">📋</span>
                <h3>TS EC Search Parameters</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check the parameters needed before querying the Telangana registry database.
            </p>
            <div class="tss-progress-bar-wrap">
                <div class="tss-progress-bar-fill" id="tss-progress"></div>
            </div>
            <div class="tss-checklist-list" id="tss-checklist">
                <label class="tss-checklist-item">
                    <input type="checkbox">
                    <span>District & SRO Office Location</span>
                </label>
                <label class="tss-checklist-item">
                    <input type="checkbox">
                    <span>Registered Document ID Number & Year</span>
                </label>
                <label class="tss-checklist-item">
                    <input type="checkbox">
                    <span>Revenue Survey / Plot / Block / Ward Number</span>
                </label>
                <label class="tss-checklist-item">
                    <input type="checkbox">
                    <span>Pattadar Passbook (Only for Farms/Agri land)</span>
                </label>
                <label class="tss-checklist-item">
                    <input type="checkbox">
                    <span>Property Boundaries (North, South, East, West)</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: TS Fee Calculator -->
        <div class="tss-widget-panel">
            <div class="tss-widget-header">
                <span class="tss-widget-icon">💰</span>
                <h3>TS Search Fee Calculator</h3>
            </div>
            <div class="tss-calc-group">
                <label for="tss-years">Search Duration (Years):</label>
                <input type="number" id="tss-years" class="tss-calc-input" min="1" max="100" value="13">
            </div>
            <div class="tss-calc-result">
                <div class="tss-calc-result-title">Estimated Certified Fee:</div>
                <div class="tss-calc-amount" id="tss-fee-display">₹320</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="tss-fee-note">
                    Calculation: ₹200 (1st Year) + ₹120 (Subsequent Years).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Matcher logic
        const selectHave = document.getElementById("tss-have");
        const matchTitle = document.getElementById("tss-match-title");
        const matchDesc = document.getElementById("tss-match-desc");
        const matchBtn = document.getElementById("tss-match-btn");

        const matches = {
            doc: {
                title: "IGRS TS Portal - Documentwise Search",
                desc: "Input the Document ID, SRO, and Registration Year on the official Stamps & Registration portal.",
                link: "https://registration.telangana.gov.in",
                color: "#16a34a"
            },
            survey_agri: {
                title: "Dharani Portal - Land Details Search",
                desc: "Select District, Mandal, Village, and enter the Survey Number on the Dharani Dashboard for Agricultural Land.",
                link: "https://dharani.telangana.gov.in",
                color: "#b45309"
            },
            survey_nonagri: {
                title: "IGRS TS Portal - Property Search Option",
                desc: "Use the Property Search option on the IGRS site by entering SRO name, Ward, Block, and Survey/Plot details.",
                link: "https://registration.telangana.gov.in",
                color: "#16a34a"
            },
            passbook: {
                title: "Dharani Portal - Pattadar Passbook Search",
                desc: "Directly search the agricultural revenue ledger by inputting the Pattadar Passbook ID on Dharani.",
                link: "https://dharani.telangana.gov.in",
                color: "#b45309"
            }
        };

        selectHave.addEventListener("change", function() {
            const data = matches[selectHave.value];
            matchTitle.innerText = data.title;
            matchDesc.innerText = data.desc;
            matchBtn.href = data.link;
            matchBtn.style.backgroundColor = data.color;
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#tss-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("tss-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".tss-checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator logic
        const inputYears = document.getElementById("tss-years");
        const feeDisplay = document.getElementById("tss-fee-display");
        const feeNote = document.getElementById("tss-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 200, subsequent Rs. 10 per year.
            const searchFee = 200 + (years - 1) * 10;
            feeDisplay.innerText = "₹" + searchFee;
            feeNote.innerText = "Calculation: ₹200 (1st Year) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding ec telangana online search Guidelines</h2>
<p class="content-text">
    Telangana has digitized property registrations to streamline transactions. Carrying out an **ec telangana online search** helps buyers, sellers, and financial institutions identify previous transactions. By analyzing digital parameters, citizens can trace structural liabilities before signing deeds.
</p>
<p class="content-text">
    When verifying property titles in Hyderabad or other districts, obtaining a clean <a href="https://econline.in/">ec online</a> is the most crucial task. It confirms the asset is free from active court claims, mortgage loans, or division disputes.
</p>

<h2>Choosing the Right Portal for TS EC Search</h2>
<p class="content-text">
    To perform a **telangana ec search online**, you must select the appropriate gateway. If you are investigating a plot, apartment, house, or commercial building, you can download official transaction records using the <a href="https://econline.in/">ec online</a> registry portal managed by IGRS Telangana. If you are inspecting agricultural land or farm fields, the database search must be queried on the Dharani portal using the **dharani ec online** dashboard.
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Property Parameter</th>
                <th style="padding: 12px; border: 1px solid var(--border);">IGRS TS Search</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Dharani Portal Search</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Property Category</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Plots, Flats, Apartments, Houses</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Agricultural land, fields, crop lands</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Search Options</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Document ID, SRO, Property Details</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Pattadar Passbook No., Survey Number</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Official Fees</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹200 first year + ₹10/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Free to lookup and view</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide: IGRS TS Document Search</h2>
<p class="content-text">
    To perform an **online ec search telangana** using document details, follow this generic protocol:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Visit IGRS Telangana</h3>
        <p class="content-text" style="margin-bottom:0;">Navigate to the official portal page: <a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener">registration.telangana.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Citizen Login</h3>
        <p class="content-text" style="margin-bottom:0;">Log in to your citizen profile using your mobile number and password, or register as a new user.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Select EC Search</h3>
        <p class="content-text" style="margin-bottom:0;">Property verification involves an <a href="https://econline.in/">ec online</a> lookup to identify prior claims. Select the **"Encumbrance Certificate (EC)"** link.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Input Document ID</h3>
        <p class="content-text" style="margin-bottom:0;">Choose document search mode and enter the registration number and year to retrieve the ledger.</p>
    </div>
</div>

<p class="content-text">
    For similar state search options, you can review our <a href="/ec-view-online/">ec view online</a> directory. Additionally, you may compare Telangana rules with neighboring states by reading the <a href="/ec-online-telangana/">ec online telangana</a> guide, the <a href="/online-ec-ap/">online ec ap</a> dashboard, or the <a href="/tn-ec-online/">tn ec online</a> directory.
</p>

<h2>Dharani Agricultural Search</h2>
<p class="content-text">
    For farm records, citizens can perform a **ts online ec** search via Dharani:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Access the Dharani dashboard page: **dharani.telangana.gov.in**.</li>
    <li style="margin-bottom: 0.5rem;">Navigate to **"Land Details Search"** citizen services.</li>
    <li style="margin-bottom: 0.5rem;">Toggle search mode (Survey/Sub-division number or Pattadar passbook number).</li>
    <li style="margin-bottom: 0.5rem;">Select your District, Mandal, and Village name from the dropdown.</li>
    <li style="margin-bottom: 0.5rem;">Verify the security captcha, hit fetch, and view the land mutation ledger instantly.</li>
</ol>
<p class="content-text">
    Once the property registration is complete, checking the <a href="https://econline.in/">ec online</a> is crucial to confirm ownership has mutated correctly in the revenue logs.
</p>

<h2>TS Registration Search Fees & Timelines</h2>
<p class="content-text">
    To apply for an official, digitally signed document, you must learn how to apply for an official <a href="https://econline.in/">ec online</a> statement:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">**First Year Search Charge**: ₹200</li>
    <li style="margin-bottom: 0.5rem;">**Subsequent Years Charge**: ₹10 per year</li>
    <li style="margin-bottom: 0.5rem;">**Portal Processing Charges**: Nominal charges added at checkout.</li>
</ul>
<p class="content-text">
    Once the registration department processes the request, print the cryptographically verified <a href="https://econline.in/">ec online</a> copy from your dashboard. If you need details on verifying PDF digital signatures, see our <a href="/online-ec-download/">online ec download</a> signature validator instructions.
</p>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you need details on other systems, see the detailed <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide.
</p>';
    $faq_tss = '[{"question":"What is the fee for an ec telangana online search certified copy?","answer":"The certified copy fee is ₹200 for the first year, plus ₹10 for each subsequent year included in the search period. Nominal portal service charges may be added during online checkout. Agricultural land search on Dharani is free."},{"question":"Can I search for Telangana EC by property document number?","answer":"Yes, you can search document details on the IGRS TS Portal by selecting the \'Encumbrance Certificate\' service, choosing the \'By Document Number\' search mode, and entering the registration number, registration year, and local SRO name."},{"question":"How to check ec online in telangana for free?","answer":"For agricultural land, you can check the transaction history for free on the Dharani Portal under \'Land Details Search\'. For non-agricultural properties, you can perform a guest search on IGRS TS to view property ledgers on screen without payment."},{"question":"How long does a certified TS EC search take?","answer":"Once the application and fees are submitted online on the IGRS Telangana portal, the request is verified by the local Sub-Registrar. It is typically digitally signed and ready for download within 24 to 48 hours."}]';
    $schema_type_tss = 'Article';

    $stmt->execute([
        'slug' => $slug_tss,
        'keyword' => $keyword_tss,
        'title' => $title_tss,
        'meta_desc' => $meta_desc_tss,
        'h1_title' => $h1_tss,
        'content' => $content_tss,
        'faq_data' => $faq_tss,
        'schema_type' => $schema_type_tss
    ]);

    $stmt->execute([
        'slug' => $slug_tss,
        'keyword' => $keyword_tss,
        'title' => $title_tss,
        'meta_desc' => $meta_desc_tss,
        'h1_title' => $h1_tss,
        'content' => $content_tss,
        'faq_data' => $faq_tss,
        'schema_type' => $schema_type_tss
    ]);

    // --- 10. AUTO-INITIALIZE ONLINE EC KARNATAKA PAGE ---
    $slug_ka = 'online-ec-karnataka';
    $keyword_ka = 'online ec karnataka';
    $title_ka = 'online ec karnataka';
    $h1_ka = 'online ec karnataka';
    $meta_desc_ka = 'Access Kaveri Online Services. Learn how to verify land records, calculate copy fees, and perform an online ec karnataka search.';
    $content_ka = '<!-- Custom Interactive Styles for KA EC Dashboard -->
<style>
    .ka-toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    .ka-utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .ka-utility-grid {
            flex-direction: row;
        }
        .ka-widget-panel {
            flex: 1;
        }
    }
    .ka-widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .ka-widget-panel {
            padding: 1rem;
        }
    }
    .ka-widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .ka-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .ka-widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .ka-widget-icon {
        font-size: 1.5rem;
    }
    
    /* Tab Routing System */
    .ka-tab-header {
        display: flex;
        border-bottom: 2px solid var(--border);
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    .ka-tab-btn {
        flex: 1;
        padding: 0.6rem 0.8rem;
        background: none;
        border: none;
        border-bottom: 2px solid transparent;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--text-muted);
        cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast);
        text-align: center;
    }
    .ka-tab-btn.active {
        color: var(--accent);
        border-bottom-color: var(--accent);
    }
    .ka-tab-pane {
        display: none;
        animation: kaFadeIn 0.3s ease;
    }
    .ka-tab-pane.active {
        display: block;
    }
    @keyframes kaFadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist progress */
    .ka-progress-bar-wrap {
        background: var(--border);
        border-radius: 4px;
        height: 8px;
        width: 100%;
        margin-bottom: 1.25rem;
        overflow: hidden;
    }
    .ka-progress-bar-fill {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .ka-checklist-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .ka-checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        cursor: pointer;
    }
    .ka-checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        cursor: pointer;
    }
    .ka-checklist-item span {
        line-height: 1.4;
        color: var(--text-main);
        font-size: 0.95rem;
    }
    .ka-checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Calculator */
    .ka-calc-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .ka-calc-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
    }
    .ka-calc-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-size: 0.95rem;
        outline: none;
        box-sizing: border-box;
        font-family: var(--font-sans);
        color: var(--primary);
    }
    .ka-calc-input:focus {
        border-color: var(--accent);
    }
    .ka-calc-result {
        background: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1rem;
        margin-top: 1rem;
        color: var(--primary);
    }
    .ka-calc-result-title {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 0.25rem;
    }
    .ka-calc-amount {
        font-size: 1.5rem;
        color: var(--accent);
        font-weight: 800;
    }
</style>

<div class="ka-toolkit-container">
    <div class="ka-utility-grid">
        <!-- Widget 1: KA Portal Selector -->
        <div class="ka-widget-panel">
            <div class="ka-widget-header">
                <span class="ka-widget-icon">🗺️</span>
                <h3>Karnataka Portal Router</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Select property records system to view the correct step-by-step instructions.
            </p>
            <div class="ka-tab-header">
                <button class="ka-tab-btn active" id="ka-btn-kaveri">Kaveri Online (Urban)</button>
                <button class="ka-tab-btn" id="ka-btn-bhoomi">Bhoomi Portal (Agri)</button>
            </div>
            
            <div class="ka-tab-pane active" id="ka-pane-kaveri">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>For Houses, Apartments & Plots:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Visit the Kaveri Portal.</li>
                        <li style="margin-bottom: 0.4rem;">Register or log in to your account.</li>
                        <li style="margin-bottom: 0.4rem;">Click "Online EC" under services.</li>
                        <li>Search and verify transaction history records.</li>
                    </ol>
                    <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Go to Kaveri Portal</a>
                </div>
            </div>
            
            <div class="ka-tab-pane" id="ka-pane-bhoomi">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>For Agricultural Revenue Lands:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Go to the Bhoomi Land Records site.</li>
                        <li style="margin-bottom: 0.4rem;">Click on "Land Services" dashboard.</li>
                        <li style="margin-bottom: 0.4rem;">Enter District, Taluk, Hobli, and Village.</li>
                        <li>Input Survey Number to fetch RTC mutations.</li>
                    </ol>
                    <a href="https://landrecords.karnataka.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Go to Bhoomi Portal</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: KA Document Checklist -->
        <div class="ka-widget-panel">
            <div class="ka-widget-header">
                <span class="ka-widget-icon">📋</span>
                <h3>KA EC Search Checklist</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check the fields below to track your document metrics before performing lookups.
            </p>
            <div class="ka-progress-bar-wrap">
                <div class="ka-progress-bar-fill" id="ka-progress"></div>
            </div>
            <div class="ka-checklist-list" id="ka-checklist">
                <label class="ka-checklist-item">
                    <input type="checkbox">
                    <span>District & SRO Office Jurisdiction</span>
                </label>
                <label class="ka-checklist-item">
                    <input type="checkbox">
                    <span>Property registered Survey Number & boundaries</span>
                </label>
                <label class="ka-checklist-item">
                    <input type="checkbox">
                    <span>Deed Registration Document ID & Year</span>
                </label>
                <label class="ka-checklist-item">
                    <input type="checkbox">
                    <span>Owner Name (Pattadar/Buyer name details)</span>
                </label>
                <label class="ka-checklist-item">
                    <input type="checkbox">
                    <span>Active Kaveri Online registered account login</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: KA Fee Calculator -->
        <div class="ka-widget-panel">
            <div class="ka-widget-header">
                <span class="ka-widget-icon">💰</span>
                <h3>KA Search Fee Calculator</h3>
            </div>
            <div class="ka-calc-group">
                <label for="ka-years">Search Duration (Years):</label>
                <input type="number" id="ka-years" class="ka-calc-input" min="1" max="100" value="13">
            </div>
            <div class="ka-calc-result">
                <div class="ka-calc-result-title">Estimated Government Fee:</div>
                <div class="ka-calc-amount" id="ka-fee-display">₹135</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="ka-fee-note">
                    Calculation: ₹15 (1st Year) + ₹120 (Subsequent Years).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnKaveri = document.getElementById("ka-btn-kaveri");
        const btnBhoomi = document.getElementById("ka-btn-bhoomi");
        const paneKaveri = document.getElementById("ka-pane-kaveri");
        const paneBhoomi = document.getElementById("ka-pane-bhoomi");

        btnKaveri.addEventListener("click", function() {
            btnKaveri.classList.add("active");
            btnBhoomi.classList.remove("active");
            paneKaveri.classList.add("active");
            paneBhoomi.classList.remove("active");
        });

        btnBhoomi.addEventListener("click", function() {
            btnBhoomi.classList.add("active");
            btnKaveri.classList.remove("active");
            paneBhoomi.classList.add("active");
            paneKaveri.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ka-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("ka-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".ka-checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator logic
        const inputYears = document.getElementById("ka-years");
        const feeDisplay = document.getElementById("ka-fee-display");
        const feeNote = document.getElementById("ka-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 15, subsequent Rs. 10 per year.
            const searchFee = 15 + (years - 1) * 10;
            feeDisplay.innerText = "₹" + searchFee;
            feeNote.innerText = "Calculation: ₹15 (1st Year) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding online ec karnataka Land Records</h2>
<p class="content-text">
    The Department of Stamps and Registration in Karnataka manages land deeds and property indexes digitally. Performing an **online ec karnataka** search is essential for title verification. By utilizing the official portal, users can quickly check if a property is free from liabilities before initiating deals.
</p>
<p class="content-text">
    Before finalising any real estate purchase in Bangalore or other districts, obtaining your <a href="https://econline.in/">ec online</a> in Karnataka is essential. It provides absolute title history, ensuring that the property is clear of active mortgages, court attachments, or illegal secondary sales.
</p>

<h2>Guest View vs. Certified Copy on Kaveri Portal</h2>
<p class="content-text">
    Karnataka citizens can run two categories of searches. First, the basic Guest Search allows users to download the transaction history using the <a href="https://econline.in/">ec online</a> portal for Kaveri for free. This draft copy is suitable for initial validation. For official bank loan verification or registration mutation, a certified copy must be requested. This involves registering a citizen account, paying the fees, and downloading a digitally signed PDF.
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Search Type</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Government Fee Scale</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Digital Signature</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Legality</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Guest EC Search</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0 (Free)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">No</td>
                <td style="padding: 12px; border: 1px solid var(--border);">For informational lookup only</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Certified Online EC</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 base + ₹10/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Digitally Signed by SRO Officer)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Fully valid in banks & court cases</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide: Kaveri Portal EC Search</h2>
<p class="content-text">
    To execute an **online ec karnataka** search on the Kaveri Services website, follow these procedures:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Visit the Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the official registration site: <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener">kaverionline.karnataka.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Citizen Login</h3>
        <p class="content-text" style="margin-bottom:0;">Log in using your registered mobile number and password, or click register to create a new profile.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Parameters</h3>
        <p class="content-text" style="margin-bottom:0;">Property title verification requires an <a href="https://econline.in/">ec online</a> search to inspect. Select "Online EC" and input the SRO, village name, and boundaries.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Search & Verify</h3>
        <p class="content-text" style="margin-bottom:0;">Submit the query, pay the calculated search fee, and view or print the resulting document ledger.</p>
    </div>
</div>

<p class="content-text">
    For other states, you can check our <a href="/ec-view-online/">ec view online</a> directory. Additionally, you may compare Karnataka guidelines with other regions by reading our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide, the <a href="/ec-online-telangana/">ec online telangana</a> manual, or the <a href="/online-ec-ap/">online ec ap</a> dashboard.
</p>

<h2>How to Apply for Certified Karnataka EC</h2>
<p class="content-text">
    If you need a certified copy for official loan applications, follow this protocol to learn how to apply for an official <a href="https://econline.in/">ec online</a> copy:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Log in to the Kaveri Online Services Portal.</li>
    <li style="margin-bottom: 0.5rem;">Navigate to the **"Online EC"** citizen services tab.</li>
    <li style="margin-bottom: 0.5rem;">Provide SRO office registration details, survey numbers, and coordinates.</li>
    <li style="margin-bottom: 0.5rem;">Submit the digital query and pay the government search fees (calculated at ₹15 first year + ₹10 per additional year).</li>
    <li style="margin-bottom: 0.5rem;">Once registration is complete, checking the <a href="https://econline.in/">ec online</a> ledger verifies the request has been approved.</li>
</ol>
<p class="content-text">
    Once approved by SRO officers, download the cryptographically signed <a href="https://econline.in/">ec online</a> certificate. For detailed PDF signature validation rules, read our <a href="/online-ec-download/">online ec download</a> portal instructions.
</p>

<h2>Bhoomi Portal: Agricultural Record Search</h2>
<p class="content-text">
    For agricultural and rural lands in Karnataka, records are managed under the **Bhoomi** database. To check mutation history:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Access the official portal page: **landrecords.karnataka.gov.in**.</li>
    <li style="margin-bottom: 0.5rem;">Select the **"Land Services"** dashboard.</li>
    <li style="margin-bottom: 0.5rem;">Select Hobli, Village, Taluk, and input the Land Survey Number.</li>
    <li style="margin-bottom: 0.5rem;">Click fetch to retrieve RTC and mutation record statements.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are comparing search parameters across regions, check our neighboring guides like the <a href="/ec-telangana-online-search/">ec telangana online search</a> manual or the <a href="/tn-ec-online/">tn ec online</a> portal.
</p>';
    $faq_ka = '[{"question":"What is the search fee for online ec karnataka?","answer":"The official Kaveri portal fee is ₹15 for the first year search, plus ₹10 for each subsequent year included in the search period duration."},{"question":"Can I view my Karnataka EC online for free?","answer":"Yes, the Kaveri portal provides a Guest User Search service that allows citizens to view property encumbrance drafts on screen for free."},{"question":"How long does it take to download a certified Kaveri EC?","answer":"After submitting the application and paying the search fee, the local Sub-Registrar Office (SRO) reviews and digitally signs the certificate, which is typically available for download in 2 to 3 working days."},{"question":"Is Bhoomi portal used for urban property EC searches?","answer":"No, Bhoomi portal is strictly for agricultural land records (RTC/Mutation). For urban houses, plots, flats, and apartments, the EC search must be performed on the Kaveri Online Services portal."}]';
    $schema_type_ka = 'Article';

    $stmt->execute([
        'slug' => $slug_ka,
        'keyword' => $keyword_ka,
        'title' => $title_ka,
        'meta_desc' => $meta_desc_ka,
        'h1_title' => $h1_ka,
        'content' => $content_ka,
        'faq_data' => $faq_ka,
        'schema_type' => $schema_type_ka
    ]);

    $stmt->execute([
        'slug' => $slug_ka,
        'keyword' => $keyword_ka,
        'title' => $title_ka,
        'meta_desc' => $meta_desc_ka,
        'h1_title' => $h1_ka,
        'content' => $content_ka,
        'faq_data' => $faq_ka,
        'schema_type' => $schema_type_ka
    ]);

    // --- 11. AUTO-INITIALIZE EC ONLINE KARNATAKA PAGE ---
    $slug_kac = 'ec-online-karnataka';
    $keyword_kac = 'ec online karnataka';
    $title_kac = 'ec online karnataka';
    $h1_kac = 'ec online karnataka';
    $meta_desc_kac = 'Verify property records on Kaveri Online Services. Learn how to perform an ec online karnataka search, verify SRO details, and download certified copies.';
    $content_kac = '<!-- Custom Interactive Styles for KAC EC Dashboard -->
<style>
    .kac-toolkit-container {
        margin: 2rem 0;
        width: 100%;
    }
    .kac-utility-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
    }
    @media (min-width: 768px) {
        .kac-utility-grid {
            flex-direction: row;
        }
        .kac-widget-panel {
            flex: 1;
        }
    }
    .kac-widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) {
        .kac-widget-panel {
            padding: 1rem;
        }
    }
    .kac-widget-panel:hover {
        border-color: var(--accent);
        box-shadow: var(--shadow-md);
    }
    .kac-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .kac-widget-header h3 {
        font-size: 1.15rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .kac-widget-icon {
        font-size: 1.5rem;
    }
    
    /* Tab Routing System */
    .kac-tab-header {
        display: flex;
        border-bottom: 2px solid var(--border);
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    .kac-tab-btn {
        flex: 1;
        padding: 0.6rem 0.8rem;
        background: none;
        border: none;
        border-bottom: 2px solid transparent;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--text-muted);
        cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast);
        text-align: center;
    }
    .kac-tab-btn.active {
        color: var(--accent);
        border-bottom-color: var(--accent);
    }
    .kac-tab-pane {
        display: none;
        animation: kacFadeIn 0.3s ease;
    }
    .kac-tab-pane.active {
        display: block;
    }
    @keyframes kacFadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist progress */
    .kac-progress-bar-wrap {
        background: var(--border);
        border-radius: 4px;
        height: 8px;
        width: 100%;
        margin-bottom: 1.25rem;
        overflow: hidden;
    }
    .kac-progress-bar-fill {
        height: 100%;
        width: 0%;
        background-color: var(--success);
        transition: width var(--transition-normal);
    }
    .kac-checklist-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .kac-checklist-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        cursor: pointer;
    }
    .kac-checklist-item input[type="checkbox"] {
        margin-top: 0.25rem;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        cursor: pointer;
    }
    .kac-checklist-item span {
        line-height: 1.4;
        color: var(--text-main);
        font-size: 0.95rem;
    }
    .kac-checklist-item.checked span {
        text-decoration: line-through;
        color: var(--text-muted);
    }

    /* Calculator */
    .kac-calc-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .kac-calc-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
    }
    .kac-calc-input {
        width: 100%;
        padding: 0.65rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        font-size: 0.95rem;
        outline: none;
        box-sizing: border-box;
        font-family: var(--font-sans);
        color: var(--primary);
    }
    .kac-calc-input:focus {
        border-color: var(--accent);
    }
    .kac-calc-result {
        background: #eff6ff;
        border: 1px solid rgba(37, 99, 211, 0.15);
        border-radius: var(--radius-sm);
        padding: 1rem;
        margin-top: 1rem;
        color: var(--primary);
    }
    .kac-calc-result-title {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 0.25rem;
    }
    .kac-calc-amount {
        font-size: 1.5rem;
        color: var(--accent);
        font-weight: 800;
    }
</style>

<div class="kac-toolkit-container">
    <div class="kac-utility-grid">
        <!-- Widget 1: Kaveri Application step tracker -->
        <div class="kac-widget-panel">
            <div class="kac-widget-header">
                <span class="kac-widget-icon">🗺️</span>
                <h3>Kaveri Guide Router</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Select target step to display detailed Kaveri portal walkthrough logs.
            </p>
            <div class="kac-tab-header">
                <button class="kac-tab-btn active" id="kac-btn-reg">1. Register Account</button>
                <button class="kac-tab-btn" id="kac-btn-apply">2. Request Certified Copy</button>
            </div>
            
            <div class="kac-tab-pane active" id="kac-pane-reg">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Citizen Portal Registration:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Go to Kaveri Online Services homepage.</li>
                        <li style="margin-bottom: 0.4rem;">Click on **"Register as a New User"**.</li>
                        <li style="margin-bottom: 0.4rem;">Enter Aadhaar, Name, Mobile, and Password details.</li>
                        <li>Activate via SMS OTP verification.</li>
                    </ol>
                    <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Launch Kaveri</a>
                </div>
            </div>
            
            <div class="kac-tab-pane" id="kac-pane-apply">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Certified Copy Process:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Log in to citizen dashboard.</li>
                        <li style="margin-bottom: 0.4rem;">Select "Online EC" citizen service.</li>
                        <li style="margin-bottom: 0.4rem;">Input SRO office, survey numbers, and coordinates.</li>
                        <li>Submit application and pay fee online.</li>
                    </ol>
                    <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Log in and Apply</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: KAC Document Checklist -->
        <div class="kac-widget-panel">
            <div class="kac-widget-header">
                <span class="kac-widget-icon">📋</span>
                <h3>Kaveri Search Parameters</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check details needed before querying the Karnataka land registry.
            </p>
            <div class="kac-progress-bar-wrap">
                <div class="kac-progress-bar-fill" id="kac-progress"></div>
            </div>
            <div class="kac-checklist-list" id="kac-checklist">
                <label class="kac-checklist-item">
                    <input type="checkbox">
                    <span>District & Sub-Registrar Office SRO Name</span>
                </label>
                <label class="kac-checklist-item">
                    <input type="checkbox">
                    <span>Property Registered Document ID & Year</span>
                </label>
                <label class="kac-checklist-item">
                    <input type="checkbox">
                    <span>Survey Number / Plot Number details</span>
                </label>
                <label class="kac-checklist-item">
                    <input type="checkbox">
                    <span>District boundaries (North, South, East, West)</span>
                </label>
                <label class="kac-checklist-item">
                    <input type="checkbox">
                    <span>Pattadar Passbook Number (For Agri Lands)</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: KAC Fee Calculator -->
        <div class="kac-widget-panel">
            <div class="kac-widget-header">
                <span class="kac-widget-icon">💰</span>
                <h3>Kaveri Search Fee Calculator</h3>
            </div>
            <div class="kac-calc-group">
                <label for="kac-years">Search Duration (Years):</label>
                <input type="number" id="kac-years" class="kac-calc-input" min="1" max="100" value="13">
            </div>
            <div class="kac-calc-result">
                <div class="kac-calc-result-title">Estimated Government Fee:</div>
                <div class="kac-calc-amount" id="kac-fee-display">₹135</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="kac-fee-note">
                    Calculation: ₹15 (1st Year) + ₹120 (Subsequent Years).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnReg = document.getElementById("kac-btn-reg");
        const btnApply = document.getElementById("kac-btn-apply");
        const paneReg = document.getElementById("kac-pane-reg");
        const paneApply = document.getElementById("kac-pane-apply");

        btnReg.addEventListener("click", function() {
            btnReg.classList.add("active");
            btnApply.classList.remove("active");
            paneReg.classList.add("active");
            paneApply.classList.remove("active");
        });

        btnApply.addEventListener("click", function() {
            btnApply.classList.add("active");
            btnReg.classList.remove("active");
            paneApply.classList.add("active");
            paneReg.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#kac-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("kac-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".kac-checklist-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator logic
        const inputYears = document.getElementById("kac-years");
        const feeDisplay = document.getElementById("kac-fee-display");
        const feeNote = document.getElementById("kac-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 15, subsequent Rs. 10 per year.
            const searchFee = 15 + (years - 1) * 10;
            feeDisplay.innerText = "₹" + searchFee;
            feeNote.innerText = "Calculation: ₹15 (1st Year) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding ec online karnataka Land Records</h2>
<p class="content-text">
    The Department of Stamps and Registration in Karnataka manages land deeds and property indexes digitally. Performing an **ec online karnataka** search is essential for title verification. By utilizing the official portal, users can quickly check if a property is free from liabilities before initiating deals.
</p>
<p class="content-text">
    Before finalising any real estate purchase in Bangalore or other districts, obtaining your <a href="https://econline.in/">ec online</a> in Karnataka is essential. It provides absolute title history, ensuring that the property is clear of active mortgages, court attachments, or illegal secondary sales.
</p>

<h2>Guest View vs. Certified Copy on Kaveri Portal</h2>
<p class="content-text">
    Karnataka citizens can run two categories of searches. First, the basic Guest Search allows users to download the transaction history using the <a href="https://econline.in/">ec online</a> portal for Kaveri for free. This draft copy is suitable for initial validation. For official bank loan verification or registration mutation, a certified copy must be requested. This involves registering a citizen account, paying the fees, and downloading a digitally signed PDF.
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Search Type</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Government Fee Scale</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Digital Signature</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Legality</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Guest EC Search</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0 (Free)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">No</td>
                <td style="padding: 12px; border: 1px solid var(--border);">For informational lookup only</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Certified Online EC</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 base + ₹10/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Digitally Signed by SRO Officer)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Fully valid in banks & court cases</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide: Kaveri Portal EC Search</h2>
<p class="content-text">
    To execute an **online ec karnataka** search on the Kaveri Services website, follow these procedures:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Visit the Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the official registration site: <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener">kaverionline.karnataka.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Citizen Login</h3>
        <p class="content-text" style="margin-bottom:0;">Log in using your registered mobile number and password, or click register to create a new profile.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Parameters</h3>
        <p class="content-text" style="margin-bottom:0;">Property title verification requires an <a href="https://econline.in/">ec online</a> search to inspect. Select "Online EC" and input the SRO, village name, and boundaries.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Search & Verify</h3>
        <p class="content-text" style="margin-bottom:0;">Submit the query, pay the calculated search fee, and view or print the resulting document ledger.</p>
    </div>
</div>

<p class="content-text">
    For other states, you can check our <a href="/ec-view-online/">ec view online</a> directory. Additionally, you may compare Karnataka guidelines with other regions by reading our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide, the <a href="/ec-online-telangana/">ec online telangana</a> manual, or the <a href="/online-ec-ap/">online ec ap</a> dashboard.
</p>

<h2>How to Apply for Certified Karnataka EC</h2>
<p class="content-text">
    If you need a certified copy for official loan applications, follow this protocol to learn how to apply for an official <a href="https://econline.in/">ec online</a> copy:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Log in to the Kaveri Online Services Portal.</li>
    <li style="margin-bottom: 0.5rem;">Navigate to the **"Online EC"** citizen services tab.</li>
    <li style="margin-bottom: 0.5rem;">Provide SRO office registration details, survey numbers, and coordinates.</li>
    <li style="margin-bottom: 0.5rem;">Submit the digital query and pay the government search fees (calculated at ₹15 first year + ₹10 per additional year).</li>
    <li style="margin-bottom: 0.5rem;">Once registration is complete, checking the <a href="https://econline.in/">ec online</a> ledger verifies the request has been approved.</li>
</ol>
<p class="content-text">
    Once approved by SRO officers, download the cryptographically signed <a href="https://econline.in/">ec online</a> certificate. For detailed PDF signature validation rules, read our <a href="/online-ec-download/">online ec download</a> portal instructions.
</p>

<h2>Bhoomi Portal: Agricultural Record Search</h2>
<p class="content-text">
    For agricultural and rural lands in Karnataka, records are managed under the **Bhoomi** database. To check mutation history:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Access the official portal page: **landrecords.karnataka.gov.in**.</li>
    <li style="margin-bottom: 0.5rem;">Select the **"Land Services"** dashboard.</li>
    <li style="margin-bottom: 0.5rem;">Select Hobli, Village, Taluk, and input the Land Survey Number.</li>
    <li style="margin-bottom: 0.5rem;">Click fetch to retrieve RTC and mutation record statements.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are comparing search parameters across regions, check our neighboring guides like the <a href="/ec-telangana-online-search/">ec telangana online search</a> manual or the <a href="/tn-ec-online/">tn ec online</a> portal.
</p>';
    $faq_kac = '[{"question":"What is the search fee for online ec karnataka?","answer":"The official Kaveri portal fee is ₹15 for the first year search, plus ₹10 for each subsequent year included in the search period duration."},{"question":"Can I view my Karnataka EC online for free?","answer":"Yes, the Kaveri portal provides a Guest User Search service that allows citizens to view property encumbrance drafts on screen for free."},{"question":"How long does it take to download a certified Kaveri EC?","answer":"After submitting the application and paying the search fee, the local Sub-Registrar Office (SRO) reviews and digitally signs the certificate, which is typically available for download in 2 to 3 working days."},{"question":"Is Bhoomi portal used for urban property EC searches?","answer":"No, Bhoomi portal is strictly for agricultural land records (RTC/Mutation). For urban houses, plots, flats, and apartments, the EC search must be performed on the Kaveri Online Services portal."}]';
    $schema_type_kac = 'Article';

    $stmt->execute([
        'slug' => $slug_kac,
        'keyword' => $keyword_kac,
        'title' => $title_kac,
        'meta_desc' => $meta_desc_kac,
        'h1_title' => $h1_kac,
        'content' => $content_kac,
        'faq_data' => $faq_kac,
        'schema_type' => $schema_type_kac
    ]);

    // --- 12. AUTO-INITIALIZE EC ONLINE TAMIL PAGE ---
    $slug_ect = 'ec-online-tamil';
    $keyword_ect = 'ec online tamil';
    $title_ect = 'ec online tamil';
    $h1_ect = 'ec online tamil';
    $meta_desc_ect = 'Access the interactive ec online tamil search manual. Translate property registry terms from Tamil to English, calculate search fees, and check requirements.';
    $content_ect = '<!-- Custom Interactive Styles for ECT Dashboard -->
<style>
    .ect-toolkit { margin: 2rem 0; width: 100%; }
    .ect-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; width: 100%; }
    @media (min-width: 768px) {
        .ect-grid { flex-direction: row; }
        .ect-card-widget { flex: 1; }
    }
    .ect-card-widget {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) { .ect-card-widget { padding: 1rem; } }
    .ect-card-widget:hover { border-color: var(--accent); box-shadow: var(--shadow-md); }
    .ect-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .ect-widget-header h3 { font-size: 1.15rem; margin-bottom: 0; color: var(--primary); }
    .ect-widget-icon { font-size: 1.5rem; }
    .ect-form-group { margin-bottom: 1rem; width: 100%; }
    .ect-form-group label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-main); }
    .ect-input, .ect-select {
        width: 100%; padding: 0.65rem; border: 1px solid var(--border); border-radius: var(--radius-sm);
        font-size: 0.95rem; outline: none; box-sizing: border-box; font-family: var(--font-sans); color: var(--primary);
    }
    .ect-input:focus, .ect-select:focus { border-color: var(--accent); }
    
    /* Checklist Progress Bar */
    .ect-progress-wrap { background: var(--border); border-radius: 4px; height: 8px; width: 100%; margin-bottom: 1.25rem; overflow: hidden; }
    .ect-progress-fill { height: 100%; width: 0%; background-color: var(--success); transition: width var(--transition-normal); }
    .ect-chk-list { display: flex; flex-direction: column; gap: 0.75rem; }
    .ect-chk-item { display: flex; align-items: flex-start; gap: 0.75rem; cursor: pointer; }
    .ect-chk-item input[type="checkbox"] { margin-top: 0.25rem; width: 16px; height: 16px; flex-shrink: 0; cursor: pointer; }
    .ect-chk-item span { line-height: 1.4; color: var(--text-main); font-size: 0.95rem; }
    .ect-chk-item.checked span { text-decoration: line-through; color: var(--text-muted); }
    
    /* Result Box */
    .ect-result-box { background: #eff6ff; border: 1px solid rgba(37, 99, 211, 0.15); border-radius: var(--radius-sm); padding: 1rem; margin-top: 1rem; }
    .ect-result-title { font-size: 0.9rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.25rem; }
    .ect-result-val { font-size: 1.5rem; color: var(--accent); font-weight: 800; }
    
    /* Translator Live Filter Style */
    .ect-trans-row { display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid var(--border); font-size: 0.9rem; }
    .ect-trans-row:last-child { border-bottom: none; }
    .ect-trans-label { font-weight: 600; color: var(--primary); }
    .ect-trans-val { color: var(--accent); font-weight: 700; }
</style>

<div class="ect-toolkit">
    <div class="ect-grid">
        <!-- Widget 1: Tamil Terminology Translator -->
        <div class="ect-card-widget">
            <div class="ect-widget-header">
                <span class="ect-widget-icon">🗣️</span>
                <h3>Tamil Registry Translator</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Translate common English property records vocabulary to Tamil terminology for easier TNREGINET navigation.
            </p>
            <div class="ect-form-group">
                <label for="ect-search-term">Search Term (English):</label>
                <input type="text" id="ect-search-term" class="ect-input" placeholder="Type term (e.g. survey, registrar, deed)...">
            </div>
            <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem;" id="ect-trans-container">
                <div class="ect-trans-row" data-eng="encumbrance certificate ec">
                    <span class="ect-trans-label">Encumbrance Certificate (EC)</span>
                    <span class="ect-trans-val">வில்லங்கச் சான்றிதழ் (Villangam)</span>
                </div>
                <div class="ect-trans-row" data-eng="survey number">
                    <span class="ect-trans-label">Survey Number</span>
                    <span class="ect-trans-val">சர்வே எண் (Survey En)</span>
                </div>
                <div class="ect-trans-row" data-eng="sub registrar office sro">
                    <span class="ect-trans-label">Sub-Registrar Office (SRO)</span>
                    <span class="ect-trans-val">சார்பதிவாளர் அலுவலகம்</span>
                </div>
                <div class="ect-trans-row" data-eng="sale deed">
                    <span class="ect-trans-label">Sale Deed</span>
                    <span class="ect-trans-val">கிரயப் பத்திரம்</span>
                </div>
                <div class="ect-trans-row" data-eng="guideline value">
                    <span class="ect-trans-label">Guideline Value</span>
                    <span class="ect-trans-val">வழிகாட்டி மதிப்பு</span>
                </div>
                <div class="ect-trans-row" data-eng="patta chitta">
                    <span class="ect-trans-label">Patta Chitta</span>
                    <span class="ect-trans-val">பட்டா சிட்டா</span>
                </div>
            </div>
        </div>

        <!-- Widget 2: Tamil Nadu Search Checklist -->
        <div class="ect-card-widget">
            <div class="ect-widget-header">
                <span class="ect-widget-icon">📋</span>
                <h3>TNREGINET Search Parameters</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check parameters required to retrieve your Tamil Nadu property transaction history correctly.
            </p>
            <div class="ect-progress-wrap">
                <div class="ect-progress-fill" id="ect-progress"></div>
            </div>
            <div class="ect-chk-list" id="ect-checklist">
                <label class="ect-chk-item">
                    <input type="checkbox">
                    <span>Zone name (e.g. Chennai, Coimbatore, Madurai)</span>
                </label>
                <label class="ect-chk-item">
                    <input type="checkbox">
                    <span>District name (e.g. Kanchipuram, Tiruvallur)</span>
                </label>
                <label class="ect-chk-item">
                    <input type="checkbox">
                    <span>Sub-Registrar Office SRO Name</span>
                </label>
                <label class="ect-chk-item">
                    <input type="checkbox">
                    <span>Village Name & Revenue details</span>
                </label>
                <label class="ect-chk-item">
                    <input type="checkbox">
                    <span>Survey & Subdivision codes of property</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: TN Search Fee Calculator -->
        <div class="ect-card-widget">
            <div class="ect-widget-header">
                <span class="ect-widget-icon">💰</span>
                <h3>TN Search Fee Calculator</h3>
            </div>
            <div class="ect-form-group">
                <label for="ect-years">Search Duration (Years):</label>
                <input type="number" id="ect-years" class="ect-input" min="1" max="100" value="30">
            </div>
            <div class="ect-result-box">
                <div class="ect-result-title">Estimated Government Fee:</div>
                <div class="ect-result-val" id="ect-fee-display">₹160</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="ect-fee-note">
                    Calculation: ₹15 (1st Year) + ₹145 (Subsequent Years) + ₹0 application.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Live Filter for Translator
        const searchInput = document.getElementById("ect-search-term");
        const rows = document.querySelectorAll("#ect-trans-container .ect-trans-row");
        
        searchInput.addEventListener("input", function() {
            const query = searchInput.value.toLowerCase().trim();
            rows.forEach(row => {
                const text = row.getAttribute("data-eng") || "";
                if (text.includes(query)) {
                    row.style.display = "flex";
                } else {
                    row.style.display = "none";
                }
            });
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ect-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("ect-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".ect-chk-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator
        const inputYears = document.getElementById("ect-years");
        const feeDisplay = document.getElementById("ect-fee-display");
        const feeNote = document.getElementById("ect-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 15, subsequent Rs. 5 per year.
            const searchFee = 15 + (years - 1) * 5;
            feeDisplay.innerText = "₹" + searchFee;
            feeNote.innerText = "Calculation: ₹15 (1st Year) + ₹" + ((years - 1) * 5) + " (Subsequent Years).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding ec online tamil Registry Search Services</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> service in Tamil Nadu has revolutionized how citizens verify real estate and property land records. If you are researching land titles or property sales history in the state, understanding how to search for an **ec online tamil** language document or its English translation is vital. The Inspector General of Registration (TNREGINET) provides direct channels for inspecting transactions, allowing buyers to verify that a property is free of liabilities before completing the sale.
</p>
<p class="content-text">
    In this educational manual, we explore the procedures to verify <a href="https://econline.in/">ec online</a> registers using the TNREGINET portal in both Tamil and English. We cover the document requirements, translation strategies, sub-registrar coordinates, and guideline rates. Whether you are dealing with housing plots in Madurai, agricultural lands in Trichy, or apartments in Chennai, this step-by-step walkthrough will guide you to execute a safe real estate check.
</p>

<h2>Tamil vs. English EC Formats on TNREGINET</h2>
<p class="content-text">
    When requesting records using the <a href="https://econline.in/">ec online</a> portal system, the final document can be generated in either Tamil or English. It is important to know which format is required for your specific legal or financial purpose:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Tamil EC Copy</strong>: Generated when the query is executed in Tamil or when the local registrar ledger uses vernacular inputs. It is generally preferred by local courts, village administrative officers (VAO), and municipal mutation offices.</li>
    <li style="margin-bottom: 0.5rem;"><strong>English EC Copy</strong>: Highly requested by nationalized banks, private loan companies, and buyers from other states. To download your <a href="https://econline.in/">ec online</a> copies in English, you must select the English language toggle on the home navigation bar of the portal before submitting the search parameters.</li>
</ul>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Feature Parameter</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Tamil Copy (தமிழ்)</th>
                <th style="padding: 12px; border: 1px solid var(--border);">English Copy (English)</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Primary Use Case</td>
                <td style="padding: 12px; border: 1px solid var(--border);">VAO verification, local court partition cases, panchayat approvals.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Home loans verification, out-of-state buyers, multi-national agreements.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Office Terminology</td>
                <td style="padding: 12px; border: 1px solid var(--border);">சார்பதிவாளர் அலுவலகம் (SRO)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Sub-Registrar Office (SRO)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">SRO Name & Coordinates</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Survey Code Formats</td>
                <td style="padding: 12px; border: 1px solid var(--border);">புல எண் மற்றும் உட்பிரிவு</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Survey Number and Subdivision Code</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide to Search EC Online in Tamil Nadu</h2>
<p class="content-text">
    To perform an **online ec tamil** query on the registration department portal, follow these precise step-by-step instructions:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Access the Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the official registration site: <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener">tnreginet.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Toggle Language</h3>
        <p class="content-text" style="margin-bottom:0;">If you want instructions in Tamil, verify that the language toggle in the upper right header is set to "தமிழ்".</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">EC Search Menu</h3>
        <p class="content-text" style="margin-bottom:0;">Select <strong>"More" &rarr; "Search EC"</strong> from the top services tab to load the parameters query template.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Input Boundaries</h3>
        <p class="content-text" style="margin-bottom:0;">Input property descriptors, including survey and sub-division codes, zone names, and date ranges. Click submit to download the PDF draft.</p>
    </div>
</div>

<p class="content-text">
    For other regions, you can check our neighboring guides, such as the <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> portal directory or the <a href="/tn-ec-online/">tn ec online</a> checklist. If you are verifying agricultural properties in Karnataka or Telangana, check out the <a href="/ec-online-karnataka/">ec online karnataka</a> guide and the <a href="/ec-online-telangana/">ec online telangana</a> manual.
</p>

<h2>Important Search Parameters to Prevent Missing Records</h2>
<p class="content-text">
    When searching the database, errors in inputting survey numbers can result in a "Nil Encumbrance Certificate," even if transactions have occurred. To make sure you check the <a href="https://econline.in/">ec online</a> status ledger accurately, consider these critical rules:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Reconcile Survey Formats</strong>: In Tamil Nadu, survey numbers are written as <code>142/3A</code>. When entering them, input <code>142</code> in the survey number box and <code>3A</code> in the sub-division field.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Verify Revenue Villages</strong>: SRO jurisdictions can encompass multiple revenue villages. Ensure you select the exact revenue village listed on the physical deed, not just the municipal ward.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Review Date Limits</strong>: Keep in mind that digital records for some rural sub-registry zones are only available from 1975 onwards. For historic records prior to 1975, you must submit a manual request at the local SRO office.</li>
</ol>
<p class="content-text">
    Once you have verified the transaction history online, you can proceed to download the signed version. For guidelines on verifying digital signatures in Acrobat, read our <a href="/online-ec-download/">online ec download</a> reference.
</p>

<h2>Patta Chitta Verification for Land Mutation</h2>
<p class="content-text">
    To ensure a transaction is complete, retrieving the EC copy is only the first step. You must also check that the seller\'s name matches the current revenue department files. In Tamil Nadu, this is done by running a Patta Chitta query:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Access the official Revenue Department portal: <strong>eservices.tn.gov.in</strong>.</li>
    <li style="margin-bottom: 0.5rem;">Select the option to view Patta copy or Chitta land records ledger.</li>
    <li style="margin-bottom: 0.5rem;">Provide Taluk, District, Village, and Survey details.</li>
    <li style="margin-bottom: 0.5rem;">Verify that the seller\'s name is listed as the registered Pattadar (owner).</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are investigating other states, you can refer to our <a href="/ec-telangana-online-search/">ec telangana online search</a> guide or read about Andhra registry checks in the <a href="/online-ec-ap/">online ec ap</a> index. To inspect the general portal features, you can go back to our <a href="/ec-view-online/">ec view online</a> directory.
</p>';
    $faq_ect = '[{"question":"How can I download my EC in English on TNREGINET?","answer":"To download your EC in English, select the \"English\" language link in the upper-right header of the TNREGINET homepage before you navigate to the search page. The generated document will then be formatted in English."},{"question":"Is it possible to view historic records online in Tamil Nadu?","answer":"Yes, digital records from 1975 to the present are available online. For encumbrances prior to 1975, you must apply manually at the respective Sub-Registrar Office (SRO)."},{"question":"What is a Revenue Village in an EC search?","answer":"A Revenue Village is the official village division defined by the revenue department. It may cover several hamlets or local residential layouts. You must select the exact revenue village name mentioned in your sale deed."},{"question":"How much does a certified Tamil Nadu EC copy cost?","answer":"The official fee for a certified copy is ₹15 for the first year of search, plus ₹5 for each subsequent year, along with a nominal application and portal charge."}]';
    $schema_type_ect = 'Article';

    $stmt->execute([
        'slug' => $slug_ect,
        'keyword' => $keyword_ect,
        'title' => $title_ect,
        'meta_desc' => $meta_desc_ect,
        'h1_title' => $h1_ect,
        'content' => $content_ect,
        'faq_data' => $faq_ect,
        'schema_type' => $schema_type_ect
    ]);

    // --- 13. AUTO-INITIALIZE EC DOWNLOAD ONLINE PAGE ---
    $slug_ecd = 'ec-download-online';
    $keyword_ecd = 'ec download online';
    $title_ecd = 'ec download online';
    $h1_ecd = 'ec download online';
    $meta_desc_ecd = 'Access the interactive ec download online toolkit. Learn how to verify digital signatures, compute processing fees, and download encumbrance certificates.';
    $content_ecd = '<!-- Custom Interactive Styles for ECD Dashboard -->
<style>
    .ecd-toolkit { margin: 2rem 0; width: 100%; }
    .ecd-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; width: 100%; }
    @media (min-width: 768px) {
        .ecd-grid { flex-direction: row; }
        .ecd-card-widget { flex: 1; }
    }
    .ecd-card-widget {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) { .ecd-card-widget { padding: 1rem; } }
    .ecd-card-widget:hover { border-color: var(--accent); box-shadow: var(--shadow-md); }
    .ecd-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .ecd-widget-header h3 { font-size: 1.15rem; margin-bottom: 0; color: var(--primary); }
    .ecd-widget-icon { font-size: 1.5rem; }
    .ecd-form-group { margin-bottom: 1rem; width: 100%; }
    .ecd-form-group label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-main); }
    .ecd-input, .ecd-select {
        width: 100%; padding: 0.65rem; border: 1px solid var(--border); border-radius: var(--radius-sm);
        font-size: 0.95rem; outline: none; box-sizing: border-box; font-family: var(--font-sans); color: var(--primary);
    }
    .ecd-input:focus, .ecd-select:focus { border-color: var(--accent); }
    
    /* Checklist Progress Bar */
    .ecd-progress-wrap { background: var(--border); border-radius: 4px; height: 8px; width: 100%; margin-bottom: 1.25rem; overflow: hidden; }
    .ecd-progress-fill { height: 100%; width: 0%; background-color: var(--success); transition: width var(--transition-normal); }
    .ecd-chk-list { display: flex; flex-direction: column; gap: 0.75rem; }
    .ecd-chk-item { display: flex; align-items: flex-start; gap: 0.75rem; cursor: pointer; }
    .ecd-chk-item input[type="checkbox"] { margin-top: 0.25rem; width: 16px; height: 16px; flex-shrink: 0; cursor: pointer; }
    .ecd-chk-item span { line-height: 1.4; color: var(--text-main); font-size: 0.95rem; }
    .ecd-chk-item.checked span { text-decoration: line-through; color: var(--text-muted); }
    
    /* Result Box */
    .ecd-result-box { background: #eff6ff; border: 1px solid rgba(37, 99, 211, 0.15); border-radius: var(--radius-sm); padding: 1rem; margin-top: 1rem; }
    .ecd-result-title { font-size: 0.9rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.25rem; }
    .ecd-result-val { font-size: 1.5rem; color: var(--accent); font-weight: 800; }

    /* Portal Router system */
    .ecd-state-desc-box { background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem; }
</style>

<div class="ecd-toolkit">
    <div class="ecd-grid">
        <!-- Widget 1: State Portal Router -->
        <div class="ecd-card-widget">
            <div class="ecd-widget-header">
                <span class="ecd-widget-icon">🗺️</span>
                <h3>National Download Gateway</h3>
            </div>
            <div class="ecd-form-group">
                <label for="ecd-state-select">Select Target State:</label>
                <select id="ecd-state-select" class="ecd-select">
                    <option value="TN" selected>Tamil Nadu (TNREGINET)</option>
                    <option value="KA">Karnataka (Kaveri Portal)</option>
                    <option value="TS">Telangana (IGRS TS / Dharani)</option>
                    <option value="AP">Andhra Pradesh (IGRS AP)</option>
                </select>
            </div>
            <div class="ecd-state-desc-box" id="ecd-state-details">
                <strong>TNREGINET Download Process:</strong>
                <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                    <li style="margin-bottom: 0.4rem;">Select E-Services &rarr; Encumbrance Certificate &rarr; View EC.</li>
                    <li style="margin-bottom: 0.4rem;">Provide SRO, Village, Survey, and date filters.</li>
                    <li>Click search, enter Captcha, and download the free draft PDF.</li>
                </ol>
                <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Launch TN Portal</a>
            </div>
        </div>

        <!-- Widget 2: Download Parameters Checklist -->
        <div class="ecd-card-widget">
            <div class="ecd-widget-header">
                <span class="ecd-widget-icon">📋</span>
                <h3>Download Requirements Checklist</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check details required to successfully execute and download your property title search certificate.
            </p>
            <div class="ecd-progress-wrap">
                <div class="ecd-progress-fill" id="ecd-progress"></div>
            </div>
            <div class="ecd-chk-list" id="ecd-checklist">
                <label class="ecd-chk-item">
                    <input type="checkbox">
                    <span>Sub-Registrar Office (SRO) name of the region</span>
                </label>
                <label class="ecd-chk-item">
                    <input type="checkbox">
                    <span>Registered Document Number & Year of transaction</span>
                </label>
                <label class="ecd-chk-item">
                    <input type="checkbox">
                    <span>Survey & Subdivision codes (or Flat/Plot number)</span>
                </label>
                <label class="ecd-chk-item">
                    <input type="checkbox">
                    <span>Registered owner details & boundaries description</span>
                </label>
                <label class="ecd-chk-item">
                    <input type="checkbox">
                    <span>Valid Citizen login or Guest User access setup</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: Download Fee Calculator -->
        <div class="ecd-card-widget">
            <div class="ecd-widget-header">
                <span class="ecd-widget-icon">💰</span>
                <h3>Download Fee Calculator</h3>
            </div>
            <div class="ecd-form-group">
                <label for="ecd-calc-state">Select State:</label>
                <select id="ecd-calc-state" class="ecd-select">
                    <option value="TN" selected>Tamil Nadu</option>
                    <option value="KA">Karnataka</option>
                    <option value="TS">Telangana</option>
                    <option value="AP">Andhra Pradesh</option>
                </select>
            </div>
            <div class="ecd-form-group">
                <label for="ecd-calc-years">Number of Years:</label>
                <input type="number" id="ecd-calc-years" class="ecd-input" min="1" max="100" value="30">
            </div>
            <div class="ecd-result-box">
                <div class="ecd-result-title">Estimated Government Fee:</div>
                <div class="ecd-result-val" id="ecd-fee-display">₹160</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="ecd-fee-note">
                    Calculation: ₹15 (1st Year) + ₹145 (Subsequent Years) + ₹0 application.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // State Portal Router Logic
        const stateSelect = document.getElementById("ecd-state-select");
        const detailsContainer = document.getElementById("ecd-state-details");

        const stateInfo = {
            TN: {
                title: "TNREGINET Download Process:",
                steps: [
                    "Select E-Services &rarr; Encumbrance Certificate &rarr; View EC.",
                    "Provide SRO, Village, Survey, and date filters.",
                    "Click search, enter Captcha, and download the free draft PDF."
                ],
                url: "https://tnreginet.gov.in"
            },
            KA: {
                title: "Kaveri Portal Online EC Process:",
                steps: [
                    "Register or login to the Kaveri Online Services Portal.",
                    "Under citizen services, choose \"Online EC\".",
                    "Input SRO, survey numbers, coordinates, and pay calculated fees online."
                ],
                url: "https://kaverionline.karnataka.gov.in"
            },
            TS: {
                title: "Telangana IGRS / Dharani Process:",
                steps: [
                    "For urban units, visit the IGRS Telangana portal and choose \"EC\".",
                    "Input property document index or SRO coordinates.",
                    "For rural agricultural fields, query survey numbers on Dharani portal."
                ],
                url: "https://registration.telangana.gov.in"
            },
            AP: {
                title: "Andhra Pradesh IGRS Process:",
                steps: [
                    "Access the official IGRS AP website and choose \"Encumbrance Certificate\".",
                    "Enter zone details, district name, and survey numbers.",
                    "Validate online ledger on screen and save the transaction log."
                ],
                url: "https://igrs.ap.gov.in"
            }
        };

        stateSelect.addEventListener("change", function() {
            const data = stateInfo[stateSelect.value];
            let listHtml = "";
            data.steps.forEach(step => {
                listHtml += "<li style=\"margin-bottom: 0.4rem;\">" + step + "</li>";
            });
            detailsContainer.innerHTML = "<strong>" + data.title + "</strong><ol style=\"margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;\">" + listHtml + "</ol><a href=\"" + data.url + "\" target=\"_blank\" rel=\"nofollow noopener\" class=\"btn-primary\" style=\"display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;\">Launch Portal</a>";
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ecd-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("ecd-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".ecd-chk-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator
        const calcState = document.getElementById("ecd-calc-state");
        const calcYears = document.getElementById("ecd-calc-years");
        const feeDisplay = document.getElementById("ecd-fee-display");
        const feeNote = document.getElementById("ecd-fee-note");

        function calculateFee() {
            let years = parseInt(calcYears.value) || 1;
            if (years < 1) years = 1;
            const state = calcState.value;
            let totalFee = 0;
            let note = "";

            if (state === "TN") {
                totalFee = 15 + (years - 1) * 5;
                note = "Tamil Nadu Rate: ₹15 (1st Year) + ₹" + ((years - 1) * 5) + " (Subsequent Years).";
            } else if (state === "KA") {
                totalFee = 15 + (years - 1) * 10;
                note = "Karnataka Rate: ₹15 (1st Year) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            } else if (state === "TS") {
                totalFee = 200 + (years - 1) * 10;
                note = "Telangana Rate: ₹200 (Base Search Fee) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            } else if (state === "AP") {
                totalFee = 200 + (years - 1) * 10;
                note = "Andhra Pradesh Rate: ₹200 (Base Search Fee) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            }

            feeDisplay.innerText = "₹" + totalFee;
            feeNote.innerText = note;
        }

        calcState.addEventListener("change", calculateFee);
        calcYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding the ec download online Process for Property Records</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> certificate is an essential document required for verifying the title structure and transaction ledger of properties in India. Whether you are executing a transaction in Chennai, Bangalore, Hyderabad, or Visakhapatnam, knowing how to run a search and execute an **ec download online** action on state-managed land registries is a crucial skill for buyers. This digitally signed document lists historical sales, partitions, court orders, and unpaid bank mortgages.
</p>
<p class="content-text">
    In this guide, we provide a complete educational walkthrough of the download methods across major states. We cover the difference between guest checking and certified download copies, how to resolve invalid digital signature errors in Acrobat, and what registration details you need to keep ready. Preparing this information beforehand ensures you can verify your <a href="https://econline.in/">ec online</a> application records efficiently.
</p>

<h2>Guest Draft vs. Certified Copy: Which Download to Choose?</h2>
<p class="content-text">
    Most state departments manage two distinct flows for retrieving property certificates. Depending on whether you need the records for internal verification or bank loans, choose the correct process:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Draft Copy Download (Guest Search)</strong>: Typically free and generated instantly using the official <a href="https://econline.in/">ec online</a> portal system. It does not carry official seals or signatures and is meant for informational lookup only. This is perfect for initial title verification or review.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Certified Copy Download (Citizen Login)</strong>: Requires citizen account registration, SRO validation, and online fee payment. SRO officers verify the query and attach a digital signature. This certified copy is legally admissible in court hearings and home loan applications.</li>
</ul>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">State / Portal</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Free Draft Download</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Certified Copy Download</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Average Processing Duration</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Tamil Nadu (TNREGINET)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Instant PDF draft copy)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (SRO approved & signed copy)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Instant for draft; 3 days for certified.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Karnataka (Kaveri Portal)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (On-screen search results)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Digitally signed PDF)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">2 to 3 working days.</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Telangana (IGRS TS)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Instant ledger review)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Signed copies available)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">1 to 2 working days.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>How to Download Encumbrance Certificates Online</h2>
<p class="content-text">
    To run a download query for your property registers, follow these standard steps:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Choose Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to your state registration portal (e.g. TNREGINET, Kaveri Online, IGRS TS, IGRS AP).</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Login or Guest</h3>
        <p class="content-text" style="margin-bottom:0;">Log in to your citizen profile if you want a certified copy. Otherwise, choose the guest search option.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Survey Codes</h3>
        <p class="content-text" style="margin-bottom:0;">Provide registration parameters (SRO location, village name, survey numbers, and target dates).</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Pay & Download</h3>
        <p class="content-text" style="margin-bottom:0;">Verify the captcha, submit the query, pay the government fee if required, and click the final download link.</p>
    </div>
</div>

<p class="content-text">
    For localized state-specific search manuals, review our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide, the <a href="/ec-online-karnataka/">ec online karnataka</a> handbook, the <a href="/ec-online-telangana/">ec online telangana</a> manual, or the <a href="/online-ec-ap/">online ec ap</a> dashboard. For general search principles, read our <a href="/ec-view-online/">ec view online</a> directory.
</p>

<h2>Resolving Digital Signature Validation Issues</h2>
<p class="content-text">
    When you download certified <a href="https://econline.in/">ec online</a> documents, you may notice a warning icon stating "Signature Not Verified" or a question mark on the signature panel. To validate the signature using Adobe Acrobat Reader, follow this protocol to check the current <a href="https://econline.in/">ec online</a> signature rules:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Open the downloaded EC PDF in Adobe Acrobat Reader on a computer (signature validation is not supported on mobile browser viewers).</li>
    <li style="margin-bottom: 0.5rem;">Right-click on the signature panel or question mark icon and select **"Signature Properties"**.</li>
    <li style="margin-bottom: 0.5rem;">Click on **"Show Signer\'s Certificate"** to load the security parameters.</li>
    <li style="margin-bottom: 0.5rem;">Navigate to the **"Trust"** tab and click on **"Add to Trusted Certificates"**.</li>
    <li style="margin-bottom: 0.5rem;">Check all permissions (Certified documents, Dynamic content, Javascript) and click OK. Close the properties panel, and the signature will update to a green checkmark indicating a verified title history.</li>
</ol>
<p class="content-text">
    Once validated, print the document to retrieve the verified <a href="https://econline.in/">ec online</a> ledger copy for your bank loan application.
</p>

<h2>Comparing States: Processing Times & Fees</h2>
<p class="content-text">
    Different states run different database infrastructure, which affects the time required to complete the download. In Tamil Nadu, draft copies are instant, while certified versions take about three days. Karnataka Kaveri online downloads require two working days for SRO verification. Telangana and Andhra Pradesh process online copies within 24 to 48 hours. Always run your search early to prevent delays during property transactions.
</p>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    For other regional reference material, you can explore the <a href="/ec-online-tamil/">ec online tamil</a> guide, check our checklist on <a href="/tn-ec-online/">tn ec online</a>, or read about TS land registers in the <a href="/ec-telangana-online-search/">ec telangana online search</a> directory.
</p>';
    $faq_ecd = '[{"question":"Why does my downloaded EC PDF show a question mark on the signature?","answer":"The question mark indicates that Adobe Acrobat Reader has not yet trusted the digital certificate used by the Sub-Registrar Office to sign the PDF. You can trust it by adding the certificate to your Trusted Certificates list under Signature Properties."},{"question":"How can I download my EC for free?","answer":"In states like Tamil Nadu and Telangana, you can download a draft search copy for free by using the guest search option and inputting the property details. This copy is for informational review only."},{"question":"Can I download my property EC on a mobile phone?","answer":"Yes, you can access state registration portals and download the EC PDF on a mobile browser. However, validating the digital signature must be done on a desktop computer using Adobe Acrobat."},{"question":"What should I do if my survey number is not found during the download process?","answer":"If the survey number is not found, double-check that the spelling of the revenue village is correct and that the SRO selected is the one currently holding records. You may also need to check the format of survey subdivision inputs."}]';
    $schema_type_ecd = 'Article';

    $stmt->execute([
        'slug' => $slug_ecd,
        'keyword' => $keyword_ecd,
        'title' => $title_ecd,
        'meta_desc' => $meta_desc_ecd,
        'h1_title' => $h1_ecd,
        'content' => $content_ecd,
        'faq_data' => $faq_ecd,
        'schema_type' => $schema_type_ecd
    ]);

    // --- 14. AUTO-INITIALIZE ONLINE EC VIEW TAMILNADU PAGE ---
    $slug_ecvt = 'online-ec-view-tamilnadu';
    $keyword_ecvt = 'online ec view tamilnadu';
    $title_ecvt = 'online ec view tamilnadu';
    $h1_ecvt = 'online ec view tamilnadu';
    $meta_desc_ecvt = 'Access the interactive online ec view tamilnadu toolkit. Toggle search methodologies, calculate registration fees, and check document requirements.';
    $content_ecvt = '<!-- Custom Interactive Styles for ECVT Dashboard -->
<style>
    .ecvt-toolkit { margin: 2rem 0; width: 100%; }
    .ecvt-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; width: 100%; }
    @media (min-width: 768px) {
        .ecvt-grid { flex-direction: row; }
        .ecvt-card-widget { flex: 1; }
    }
    .ecvt-card-widget {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) { .ecvt-card-widget { padding: 1rem; } }
    .ecvt-card-widget:hover { border-color: var(--accent); box-shadow: var(--shadow-md); }
    .ecvt-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .ecvt-widget-header h3 { font-size: 1.15rem; margin-bottom: 0; color: var(--primary); }
    .ecvt-widget-icon { font-size: 1.5rem; }
    .ecvt-form-group { margin-bottom: 1rem; width: 100%; }
    .ecvt-form-group label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-main); }
    .ecvt-input, .ecvt-select {
        width: 100%; padding: 0.65rem; border: 1px solid var(--border); border-radius: var(--radius-sm);
        font-size: 0.95rem; outline: none; box-sizing: border-box; font-family: var(--font-sans); color: var(--primary);
    }
    .ecvt-input:focus, .ecvt-select:focus { border-color: var(--accent); }
    
    /* Tabs System */
    .ecvt-tab-header { display: flex; border-bottom: 2px solid var(--border); gap: 0.5rem; margin-bottom: 1.25rem; }
    .ecvt-tab-btn {
        flex: 1; padding: 0.6rem 0.8rem; background: none; border: none; border-bottom: 2px solid transparent;
        font-family: var(--font-sans); font-size: 0.95rem; font-weight: 700; color: var(--text-muted); cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast); text-align: center;
    }
    .ecvt-tab-btn.active { color: var(--accent); border-bottom-color: var(--accent); }
    .ecvt-tab-pane { display: none; animation: ecvtFadeIn 0.3s ease; }
    .ecvt-tab-pane.active { display: block; }
    @keyframes ecvtFadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist Progress Bar */
    .ecvt-progress-wrap { background: var(--border); border-radius: 4px; height: 8px; width: 100%; margin-bottom: 1.25rem; overflow: hidden; }
    .ecvt-progress-fill { height: 100%; width: 0%; background-color: var(--success); transition: width var(--transition-normal); }
    .ecvt-chk-list { display: flex; flex-direction: column; gap: 0.75rem; }
    .ecvt-chk-item { display: flex; align-items: flex-start; gap: 0.75rem; cursor: pointer; }
    .ecvt-chk-item input[type="checkbox"] { margin-top: 0.25rem; width: 16px; height: 16px; flex-shrink: 0; cursor: pointer; }
    .ecvt-chk-item span { line-height: 1.4; color: var(--text-main); font-size: 0.95rem; }
    .ecvt-chk-item.checked span { text-decoration: line-through; color: var(--text-muted); }
    
    /* Result Box */
    .ecvt-result-box { background: #eff6ff; border: 1px solid rgba(37, 99, 211, 0.15); border-radius: var(--radius-sm); padding: 1rem; margin-top: 1rem; }
    .ecvt-result-title { font-size: 0.9rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.25rem; }
    .ecvt-result-val { font-size: 1.5rem; color: var(--accent); font-weight: 800; }
</style>

<div class="ecvt-toolkit">
    <div class="ecvt-grid">
        <!-- Widget 1: Search Method Selector -->
        <div class="ecvt-card-widget">
            <div class="ecvt-widget-header">
                <span class="ecvt-widget-icon">🗺️</span>
                <h3>TN Search Assistant</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Select search type to view specific data fields requested on the TNREGINET portal.
            </p>
            <div class="ecvt-tab-header">
                <button class="ecvt-tab-btn active" id="ecvt-btn-survey">1. Search by Survey</button>
                <button class="ecvt-tab-btn" id="ecvt-btn-doc">2. Search by Document</button>
            </div>
            
            <div class="ecvt-tab-pane active" id="ecvt-pane-survey">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Survey Parameter Fields Required:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Zone &amp; District of registration.</li>
                        <li style="margin-bottom: 0.4rem;">Sub-Registrar Office SRO Name.</li>
                        <li style="margin-bottom: 0.4rem;">Revenue Village Name.</li>
                        <li>Survey Number &amp; Sub-division Code.</li>
                    </ol>
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Apply by Survey</a>
                </div>
            </div>
            
            <div class="ecvt-tab-pane" id="ecvt-pane-doc">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Document Parameter Fields Required:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Sub-Registrar Office SRO Name.</li>
                        <li style="margin-bottom: 0.4rem;">Document ID Number.</li>
                        <li style="margin-bottom: 0.4rem;">Registration Year.</li>
                        <li>Document Type (e.g. Regular, Book 4).</li>
                    </ol>
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Apply by Document</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: Audit Checklist -->
        <div class="ecvt-card-widget">
            <div class="ecvt-widget-header">
                <span class="ecvt-widget-icon">📋</span>
                <h3>Search Verification Steps</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check parameters to execute an error-free online ec view tamilnadu lookup.
            </p>
            <div class="ecvt-progress-wrap">
                <div class="ecvt-progress-fill" id="ecvt-progress"></div>
            </div>
            <div class="ecvt-chk-list" id="ecvt-checklist">
                <label class="ecvt-chk-item">
                    <input type="checkbox">
                    <span>Reconciled survey details from current sale deed copies</span>
                </label>
                <label class="ecvt-chk-item">
                    <input type="checkbox">
                    <span>Selected SRO name of the exact administrative village</span>
                </label>
                <label class="ecvt-chk-item">
                    <input type="checkbox">
                    <span>Verified spelling of the revenue village in registration logs</span>
                </label>
                <label class="ecvt-chk-item">
                    <input type="checkbox">
                    <span>Cross-checked boundaries description (North, South, East, West)</span>
                </label>
                <label class="ecvt-chk-item">
                    <input type="checkbox">
                    <span>Adjusted date parameters to begin from physical transaction year</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: TN EC Search Fee Calculator -->
        <div class="ecvt-card-widget">
            <div class="ecvt-widget-header">
                <span class="ecvt-widget-icon">💰</span>
                <h3>Fee Estimator Tool</h3>
            </div>
            <div class="ecvt-form-group">
                <label for="ecvt-years">Years to Inspect:</label>
                <input type="number" id="ecvt-years" class="ecvt-input" min="1" max="100" value="30">
            </div>
            <div class="ecvt-result-box">
                <div class="ecvt-result-title">Estimated Government Fee:</div>
                <div class="ecvt-result-val" id="ecvt-fee-display">₹160</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="ecvt-fee-note">
                    Calculation: ₹15 (1st Year) + ₹145 (Subsequent Years).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnSurvey = document.getElementById("ecvt-btn-survey");
        const btnDoc = document.getElementById("ecvt-btn-doc");
        const paneSurvey = document.getElementById("ecvt-pane-survey");
        const paneDoc = document.getElementById("ecvt-pane-doc");

        btnSurvey.addEventListener("click", function() {
            btnSurvey.classList.add("active");
            btnDoc.classList.remove("active");
            paneSurvey.classList.add("active");
            paneDoc.classList.remove("active");
        });

        btnDoc.addEventListener("click", function() {
            btnDoc.classList.add("active");
            btnSurvey.classList.remove("active");
            paneDoc.classList.add("active");
            paneSurvey.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ecvt-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("ecvt-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".ecvt-chk-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator
        const inputYears = document.getElementById("ecvt-years");
        const feeDisplay = document.getElementById("ecvt-fee-display");
        const feeNote = document.getElementById("ecvt-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 15, subsequent Rs. 5 per year.
            const searchFee = 15 + (years - 1) * 5;
            feeDisplay.innerText = "₹" + searchFee;
            feeNote.innerText = "Calculation: ₹15 (1st Year) + ₹" + ((years - 1) * 5) + " (Subsequent Years).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding online ec view tamilnadu Property Registers</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> lookup has become the foundation of property verification in southern India. For properties registered under the Inspector General of Registration in Tamil Nadu, executing a complete **online ec view tamilnadu** query provides transparency on ownership history. This search helps property buyers confirm if land has pending loans, court attachments, or secondary registry sales before buying.
</p>
<p class="content-text">
    In this educational reference guide, we examine the procedures required to check the <a href="https://econline.in/">ec online</a> registry ledgers. We cover the difference between searching by survey codes versus document indices, how to locate sub-registrar zones in Chennai and Coimbatore, and how to verify patta chitta matching files. Performing these steps prevents registry errors and protects real estate investments.
</p>

<h2>Search Methods on TNREGINET: Survey vs. Document Number</h2>
<p class="content-text">
    When using the <a href="https://econline.in/">ec online</a> portal for Tamil Nadu, users can choose between two search modes. Each method is useful depending on the details you have:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Search by Property (Survey Details)</strong>: This is the most comprehensive search method. It inspects all transactions recorded under a specific survey number and sub-division code. It allows buyers to trace all historical deals on a plot, regardless of who sold it.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Search by Document Number</strong>: This method is used when you want to retrieve a specific sale deed or verify that a particular transaction was registered. You must input the document number, SRO office, and registration year to download signed <a href="https://econline.in/">ec online</a> sheets.</li>
</ul>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Search Method</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Pros (Advantages)</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Cons (Limitations)</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Required Inputs</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Search by Property</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Shows all historical transactions; catches hidden mortgages.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Requires village names and exact subdivision codes.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Zone, District, SRO, Village, Survey & Subdivision.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Search by Document</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Quick search; perfect for validating a single transaction.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Will miss other transactions on the same land parcel.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">SRO name, Document Number, Registration Year.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Walkthrough to View EC Online in Tamil Nadu</h2>
<p class="content-text">
    To view your property records, follow this step-by-step procedure on the official portal:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Access Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the official registration department portal: <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener">tnreginet.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Select EC Search</h3>
        <p class="content-text" style="margin-bottom:0;">From the main navigation bar, hover over **"E-Services" &rarr; "Encumbrance Certificate" &rarr; "View EC"**.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Input Details</h3>
        <p class="content-text" style="margin-bottom:0;">Choose your search method (document or survey) and fill in the location filters (Zone, SRO, and dates).</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Download PDF</h3>
        <p class="content-text" style="margin-bottom:0;">Enter the Captcha code, click the **"Search"** button, and view the transaction history or save the PDF copy.</p>
    </div>
</div>

<p class="content-text">
    For other regional registration procedures, review our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide or verify our neighboring guides like the <a href="/tn-ec-online/">tn ec online</a> checklist. If you are comparing parameters for Karnataka or Telangana, check out the <a href="/ec-online-karnataka/">ec online karnataka</a> handbook or the <a href="/ec-online-telangana/">ec online telangana</a> manual.
</p>

<h2>Preventing Search Failures on TNREGINET</h2>
<p class="content-text">
    If the online search returns "No Record Found," it does not always mean the property is free of encumbrance. It may indicate a formatting issue. To verify that your <a href="https://econline.in/">ec online</a> record corresponds to the property, keep these tips in mind:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>SRO Jurisdictional Changes</strong>: Sub-Registrar Offices are periodically restructured. If the property was registered in 1995, the SRO code might have changed. Try searching under both the historical and current SRO listings.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Spell Check Villages</strong>: Administrative revenue villages can have multiple spellings in the registry database. Try matching spellings with current property tax receipts.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Clear Date Overlaps</strong>: Ensure search dates cover the entire period required (e.g. 1975 to current). Leaving date ranges incomplete can omit vital transaction history.</li>
</ol>
<p class="content-text">
    To print or validate downloaded files, review our <a href="/online-ec-download/">online ec download</a> instructions.
</p>

<h2>Patta Chitta Integration & Title Verification</h2>
<p class="content-text">
    Validating land titles is incomplete without matching registration files with the revenue database. Once you obtain the EC, execute a Patta Chitta verification query:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Open the revenue services portal page: <strong>eservices.tn.gov.in</strong>.</li>
    <li style="margin-bottom: 0.5rem;">Choose the Patta &amp; Chitta display link.</li>
    <li style="margin-bottom: 0.5rem;">Input SRO village, Taluk, and Survey details.</li>
    <li style="margin-bottom: 0.5rem;">Verify that the seller\'s name is listed as the latest land claimant.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are investigating other states, refer to the <a href="/ec-online-tamil/">ec online tamil</a> guide, read about TS registries in the <a href="/ec-telangana-online-search/">ec telangana online search</a> directory, or check out the <a href="/online-ec-ap/">online ec ap</a> guide. To inspect general portal configurations, you can also return to our <a href="/ec-view-online/">ec view online</a> directory.
</p>';
    $faq_ecvt = '[{"question":"Why is the SRO office list not displaying my village?","answer":"SRO jurisdictions can overlap or have changed over time. If a village is missing, check if it was moved to a newly formed SRO nearby or search the administrative maps on the TNREGINET home directory."},{"question":"Can I view Tamil Nadu EC records prior to 1975 online?","answer":"No. Currently, online digitalization on TNREGINET only extends back to 1975. For historic searches before 1975, you must visit the respective SRO office and file a manual search application."},{"question":"What does it mean if my search returns a Nil Encumbrance Certificate?","answer":"A Nil EC indicates that no transactions (like sales, mortgages, or court attachments) were registered for that specific survey number during the searched dates. Ensure your survey number input matches the deed exactly to rule out formatting errors."},{"question":"Do I need a citizen login to just view an EC online?","answer":"No, viewing a draft copy of the EC does not require user registration. You can access the search form as a guest user. Citizen registration is only required if you need to apply for a digitally signed certified copy."}]';
    $schema_type_ecvt = 'Article';

    $stmt->execute([
        'slug' => $slug_ecvt,
        'keyword' => $keyword_ecvt,
        'title' => $title_ecvt,
        'meta_desc' => $meta_desc_ecvt,
        'h1_title' => $h1_ecvt,
        'content' => $content_ecvt,
        'faq_data' => $faq_ecvt,
        'schema_type' => $schema_type_ecvt
    ]);

    // --- 15. AUTO-INITIALIZE TNREGINET EC VIEW ONLINE PAGE ---
    $slug_ectv = 'tnreginet-ec-view-online';
    $keyword_ectv = 'tnreginet ec view online';
    $title_ectv = 'tnreginet ec view online';
    $h1_ectv = 'tnreginet ec view online';
    $meta_desc_ectv = 'Access the interactive tnreginet ec view online dashboard. Toggle search methodologies, calculate registration fees, and check document requirements.';
    $content_ectv = '<!-- Custom Interactive Styles for ECTV Dashboard -->
<style>
    .ectv-toolkit { margin: 2rem 0; width: 100%; }
    .ectv-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; width: 100%; }
    @media (min-width: 768px) {
        .ectv-grid { flex-direction: row; }
        .ectv-card-widget { flex: 1; }
    }
    .ectv-card-widget {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) { .ectv-card-widget { padding: 1rem; } }
    .ectv-card-widget:hover { border-color: var(--accent); box-shadow: var(--shadow-md); }
    .ectv-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .ectv-widget-header h3 { font-size: 1.15rem; margin-bottom: 0; color: var(--primary); }
    .ectv-widget-icon { font-size: 1.5rem; }
    .ectv-form-group { margin-bottom: 1rem; width: 100%; }
    .ectv-form-group label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-main); }
    .ectv-input, .ectv-select {
        width: 100%; padding: 0.65rem; border: 1px solid var(--border); border-radius: var(--radius-sm);
        font-size: 0.95rem; outline: none; box-sizing: border-box; font-family: var(--font-sans); color: var(--primary);
    }
    .ectv-input:focus, .ectv-select:focus { border-color: var(--accent); }
    
    /* Tabs System */
    .ectv-tab-header { display: flex; border-bottom: 2px solid var(--border); gap: 0.5rem; margin-bottom: 1.25rem; }
    .ectv-tab-btn {
        flex: 1; padding: 0.6rem 0.8rem; background: none; border: none; border-bottom: 2px solid transparent;
        font-family: var(--font-sans); font-size: 0.95rem; font-weight: 700; color: var(--text-muted); cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast); text-align: center;
    }
    .ectv-tab-btn.active { color: var(--accent); border-bottom-color: var(--accent); }
    .ectv-tab-pane { display: none; animation: ectvFadeIn 0.3s ease; }
    .ectv-tab-pane.active { display: block; }
    @keyframes ectvFadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist Progress Bar */
    .ectv-progress-wrap { background: var(--border); border-radius: 4px; height: 8px; width: 100%; margin-bottom: 1.25rem; overflow: hidden; }
    .ectv-progress-fill { height: 100%; width: 0%; background-color: var(--success); transition: width var(--transition-normal); }
    .ectv-chk-list { display: flex; flex-direction: column; gap: 0.75rem; }
    .ectv-chk-item { display: flex; align-items: flex-start; gap: 0.75rem; cursor: pointer; }
    .ectv-chk-item input[type="checkbox"] { margin-top: 0.25rem; width: 16px; height: 16px; flex-shrink: 0; cursor: pointer; }
    .ectv-chk-item span { line-height: 1.4; color: var(--text-main); font-size: 0.95rem; }
    .ectv-chk-item.checked span { text-decoration: line-through; color: var(--text-muted); }
    
    /* Result Box */
    .ectv-result-box { background: #eff6ff; border: 1px solid rgba(37, 99, 211, 0.15); border-radius: var(--radius-sm); padding: 1rem; margin-top: 1rem; }
    .ectv-result-title { font-size: 0.9rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.25rem; }
    .ectv-result-val { font-size: 1.5rem; color: var(--accent); font-weight: 800; }
</style>

<div class="ectv-toolkit">
    <div class="ectv-grid">
        <!-- Widget 1: Search Method Selector -->
        <div class="ectv-card-widget">
            <div class="ectv-widget-header">
                <span class="ectv-widget-icon">🔍</span>
                <h3>TNREGINET Search Guide</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Select search type to view specific data fields requested on the TNREGINET portal.
            </p>
            <div class="ectv-tab-header">
                <button class="ectv-tab-btn active" id="ectv-btn-survey">1. Search by Survey</button>
                <button class="ectv-tab-btn" id="ectv-btn-doc">2. Search by Document</button>
            </div>
            
            <div class="ectv-tab-pane active" id="ectv-pane-survey">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Survey Parameter Fields Required:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Zone &amp; District of registration.</li>
                        <li style="margin-bottom: 0.4rem;">Sub-Registrar Office SRO Name.</li>
                        <li style="margin-bottom: 0.4rem;">Revenue Village Name.</li>
                        <li>Survey Number &amp; Sub-division Code.</li>
                    </ol>
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Apply by Survey</a>
                </div>
            </div>
            
            <div class="ectv-tab-pane" id="ectv-pane-doc">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Document Parameter Fields Required:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Sub-Registrar Office SRO Name.</li>
                        <li style="margin-bottom: 0.4rem;">Document ID Number.</li>
                        <li style="margin-bottom: 0.4rem;">Registration Year.</li>
                        <li>Document Type (e.g. Regular, Book 4).</li>
                    </ol>
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Apply by Document</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: Audit Checklist -->
        <div class="ectv-card-widget">
            <div class="ectv-widget-header">
                <span class="ectv-widget-icon">📋</span>
                <h3>Search Verification Steps</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check parameters to execute an error-free tnreginet ec view online lookup.
            </p>
            <div class="ectv-progress-wrap">
                <div class="ectv-progress-fill" id="ectv-progress"></div>
            </div>
            <div class="ectv-chk-list" id="ectv-checklist">
                <label class="ectv-chk-item">
                    <input type="checkbox">
                    <span>Reconciled survey details from current sale deed copies</span>
                </label>
                <label class="ectv-chk-item">
                    <input type="checkbox">
                    <span>Selected SRO name of the exact administrative village</span>
                </label>
                <label class="ectv-chk-item">
                    <input type="checkbox">
                    <span>Verified spelling of the revenue village in registration logs</span>
                </label>
                <label class="ectv-chk-item">
                    <input type="checkbox">
                    <span>Cross-checked boundaries description (North, South, East, West)</span>
                </label>
                <label class="ectv-chk-item">
                    <input type="checkbox">
                    <span>Adjusted date parameters to begin from physical transaction year</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: TN EC Search Fee Calculator -->
        <div class="ectv-card-widget">
            <div class="ectv-widget-header">
                <span class="ectv-widget-icon">💰</span>
                <h3>Copy Fee Calculator</h3>
            </div>
            <div class="ectv-form-group">
                <label for="ectv-years">Years to Inspect:</label>
                <input type="number" id="ectv-years" class="ectv-input" min="1" max="100" value="30">
            </div>
            <div class="ectv-result-box">
                <div class="ectv-result-title">Estimated Government Fee:</div>
                <div class="ectv-result-val" id="ectv-fee-display">₹280</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="ectv-fee-note">
                    Calculation: ₹15 (1st Year) + ₹145 (Subsequent Years) + ₹100 certified fee + ₹20 portal fee.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnSurvey = document.getElementById("ectv-btn-survey");
        const btnDoc = document.getElementById("ectv-btn-doc");
        const paneSurvey = document.getElementById("ectv-pane-survey");
        const paneDoc = document.getElementById("ectv-pane-doc");

        btnSurvey.addEventListener("click", function() {
            btnSurvey.classList.add("active");
            btnDoc.classList.remove("active");
            paneSurvey.classList.add("active");
            paneDoc.classList.remove("active");
        });

        btnDoc.addEventListener("click", function() {
            btnDoc.classList.add("active");
            btnSurvey.classList.remove("active");
            paneDoc.classList.add("active");
            paneSurvey.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ectv-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("ectv-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".ectv-chk-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator
        const inputYears = document.getElementById("ectv-years");
        const feeDisplay = document.getElementById("ectv-fee-display");
        const feeNote = document.getElementById("ectv-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 15, subsequent Rs. 5 per year + Rs. 120 extra fees.
            const searchFee = 15 + (years - 1) * 5 + 120;
            feeDisplay.innerText = "₹" + searchFee;
            feeNote.innerText = "Calculation: ₹15 (1st Year) + ₹" + ((years - 1) * 5) + " (Subsequent Years) + ₹120 (Certified copy and portal fees).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding the tnreginet ec view online Portal Utility</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> service is the single most important tool used by home buyers in Tamil Nadu to perform preliminary title due diligence. Through the official TNREGINET website, citizens can run a **tnreginet ec view online** check to track ownership history and verify mortgages or liens. The platform is designed to provide immediate access to registered property deeds dating back to 1975.
</p>
<p class="content-text">
    In this comprehensive guide, we provide a complete educational walkthrough of how to verify <a href="https://econline.in/">ec online</a> transactions using the official portal. We cover zone selections, revenue villages, sub-registrar offices, date bounds, and fee rates. Buyers who use this guide will gain a clear understanding of how to navigate the registration department portal to download signed or draft records.
</p>

<h2>View EC (Free) vs. Certified Copy: SRO Office Processes</h2>
<p class="content-text">
    Before using the official <a href="https://econline.in/">ec online</a> portal (TNREGINET) to search for details, it is helpful to determine whether a draft search or a certified copy is needed. The portal processes these two formats differently:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Informational View EC</strong>: This is a free draft search that displays on screen and allows you to search and download <a href="https://econline.in/">ec online</a> draft copies. It is instant and does not require registration. However, it lacks a digital signature and cannot be used in court trials or submitted to banks.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Certified Copy of EC</strong>: This requires a citizen registration account, portal login, and online fee payment. Sub-Registrar Office staff inspects the application, signs it cryptographically, and releases the final PDF for download. This version is legally admissible for mortgage verification.</li>
</ul>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Service Category</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Government Search Fees</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Admissibility (Validity)</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Officer Approval Need</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Draft View EC</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0 (Free of cost)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Informational only; cannot be used for bank loans.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">No approval needed; instant.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Certified Copy</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 (1st year) + ₹5/subsequent year + process fees</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Legally valid; accepted by banks and registration offices.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes; reviewed and digitally signed by SRO.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>How to Search and View EC on TNREGINET</h2>
<p class="content-text">
    To view property records on the TNREGINET portal, follow these step-by-step instructions:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Visit Site</h3>
        <p class="content-text" style="margin-bottom:0;">Navigate to the official Tamil Nadu Inspector General of Registration homepage: <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener">tnreginet.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Navigate to EC</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the header menu and select <strong>"E-Services" &rarr; "Encumbrance Certificate" &rarr; "View EC"</strong>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Survey Data</h3>
        <p class="content-text" style="margin-bottom:0;">Input Zone, District, SRO office, Village, Survey number, and the sub-division code of the plot.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Search & Verify</h3>
        <p class="content-text" style="margin-bottom:0;">Input the verification captcha code, click "Search" to display the records ledger, and export as a PDF draft.</p>
    </div>
</div>

<p class="content-text">
    To review detailed guides for neighboring states, read our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide, check our checklist on <a href="/tn-ec-online/">tn ec online</a>, read about AP registry searches in the <a href="/online-ec-ap/">online ec ap</a> index, or check the <a href="/ec-online-karnataka/">ec online karnataka</a> handbook. You can also view the general index at our <a href="/ec-view-online/">ec view online</a> directory.
</p>

<h2>Best Practices to Avoid Search Errors on the Portal</h2>
<p class="content-text">
    A common issue during property searches is typing errors in parameters. Keep these guidelines in mind to check the current <a href="https://econline.in/">ec online</a> status information correctly:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>SRO Jurisdictional History</strong>: If a property was registered twenty years ago, it may belong to a different SRO today. Be sure to check the historical registry charts on the portal.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Select Correct Revenue Village</strong>: SRO divisions contain several revenue villages. Choose the exact village listed in the sale deed schedule.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Check Date Formats</strong>: Search date boundaries must be formatted correctly. Set the start date to a few days before the registered transaction year.</li>
</ol>
<p class="content-text">
    To validate digital signature certificates on your downloaded copies, read the <a href="/online-ec-download/">online ec download</a> reference.
</p>

<h2>Patta Chitta Validation for Land Records</h2>
<p class="content-text">
    Title verification is only half complete with an EC download. You must also check the revenue records to confirm mutation is updated. For land parcels in Tamil Nadu, follow these steps to retrieve the Patta Chitta:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Access the official Revenue Department e-Services page: <strong>eservices.tn.gov.in</strong>.</li>
    <li style="margin-bottom: 0.5rem;">Select the option to view Patta copy or Chitta land records.</li>
    <li style="margin-bottom: 0.5rem;">Input SRO Village, Taluk, and Survey/Sub-division codes.</li>
    <li style="margin-bottom: 0.5rem;">Verify that the seller\'s name matches the current revenue Pattadar registry.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    For other regional directories, consult the <a href="/ec-online-tamil/">ec online tamil</a> guide, check our checklist on <a href="/ec-online-telangana/">ec online telangana</a>, or read about TS land registers in the <a href="/ec-telangana-online-search/">ec telangana online search</a> directory. To retrieve the verified <a href="https://econline.in/">ec online</a> logs, you can always check our main database references.
</p>';
    $faq_ectv = '[{"question":"Why does TNREGINET say No Record Found?","answer":"This can happen if the survey number was typed incorrectly, the sub-division field was left blank, or the village SRO selected is incorrect. Double-check your details and try searching with parent survey numbers."},{"question":"Is it possible to view historic Tamil Nadu EC records online?","answer":"Yes, online records on TNREGINET are available from 1975 to the present. For records prior to 1975, you must visit the SRO office to submit a physical search application."},{"question":"How can I download the English version of my TN EC?","answer":"Before you click the EC Search option on the TNREGINET homepage, select the \"English\" language toggle link in the top-right header menu. The portal will then render and generate documents in English."},{"question":"What is the fee to view an EC online on TNREGINET?","answer":"Viewing the draft copy of your encumbrance history is completely free. Fees are only charged if you request a digitally signed certified copy."}]';
    $schema_type_ectv = 'Article';

    $stmt->execute([
        'slug' => $slug_ectv,
        'keyword' => $keyword_ectv,
        'title' => $title_ectv,
        'meta_desc' => $meta_desc_ectv,
        'h1_title' => $h1_ectv,
        'content' => $content_ectv,
        'faq_data' => $faq_ectv,
        'schema_type' => $schema_type_ectv
    ]);

    // --- 16. AUTO-INITIALIZE KAVERI ONLINE EC DOWNLOAD PAGE ---
    $slug_ked = 'kaveri-online-ec-download';
    $keyword_ked = 'kaveri online ec download';
    $title_ked = 'kaveri online ec download';
    $h1_ked = 'kaveri online ec download';
    $meta_desc_ked = 'Access the interactive kaveri online ec download manual. Verify digital signature credentials, calculate search fees, and check parameters.';
    $content_ked = '<!-- Custom Interactive Styles for KED Dashboard -->
<style>
    .ked-toolkit { margin: 2rem 0; width: 100%; }
    .ked-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; width: 100%; }
    @media (min-width: 768px) {
        .ked-grid { flex-direction: row; }
        .ked-card-widget { flex: 1; }
    }
    .ked-card-widget {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) { .ked-card-widget { padding: 1rem; } }
    .ked-card-widget:hover { border-color: var(--accent); box-shadow: var(--shadow-md); }
    .ked-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .ked-widget-header h3 { font-size: 1.15rem; margin-bottom: 0; color: var(--primary); }
    .ked-widget-icon { font-size: 1.5rem; }
    .ked-form-group { margin-bottom: 1rem; width: 100%; }
    .ked-form-group label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-main); }
    .ked-input, .ked-select {
        width: 100%; padding: 0.65rem; border: 1px solid var(--border); border-radius: var(--radius-sm);
        font-size: 0.95rem; outline: none; box-sizing: border-box; font-family: var(--font-sans); color: var(--primary);
    }
    .ked-input:focus, .ked-select:focus { border-color: var(--accent); }
    
    /* Tabs System */
    .ked-tab-header { display: flex; border-bottom: 2px solid var(--border); gap: 0.5rem; margin-bottom: 1.25rem; }
    .ked-tab-btn {
        flex: 1; padding: 0.6rem 0.8rem; background: none; border: none; border-bottom: 2px solid transparent;
        font-family: var(--font-sans); font-size: 0.95rem; font-weight: 700; color: var(--text-muted); cursor: pointer;
        transition: color var(--transition-fast), border-color var(--transition-fast); text-align: center;
    }
    .ked-tab-btn.active { color: var(--accent); border-bottom-color: var(--accent); }
    .ked-tab-pane { display: none; animation: kedFadeIn 0.3s ease; }
    .ked-tab-pane.active { display: block; }
    @keyframes kedFadeIn {
        from { opacity: 0; transform: translateY(4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Checklist Progress Bar */
    .ked-progress-wrap { background: var(--border); border-radius: 4px; height: 8px; width: 100%; margin-bottom: 1.25rem; overflow: hidden; }
    .ked-progress-fill { height: 100%; width: 0%; background-color: var(--success); transition: width var(--transition-normal); }
    .ked-chk-list { display: flex; flex-direction: column; gap: 0.75rem; }
    .ked-chk-item { display: flex; align-items: flex-start; gap: 0.75rem; cursor: pointer; }
    .ked-chk-item input[type="checkbox"] { margin-top: 0.25rem; width: 16px; height: 16px; flex-shrink: 0; cursor: pointer; }
    .ked-chk-item span { line-height: 1.4; color: var(--text-main); font-size: 0.95rem; }
    .ked-chk-item.checked span { text-decoration: line-through; color: var(--text-muted); }
    
    /* Result Box */
    .ked-result-box { background: #eff6ff; border: 1px solid rgba(37, 99, 211, 0.15); border-radius: var(--radius-sm); padding: 1rem; margin-top: 1rem; }
    .ked-result-title { font-size: 0.9rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.25rem; }
    .ked-result-val { font-size: 1.5rem; color: var(--accent); font-weight: 800; }
</style>

<div class="ked-toolkit">
    <div class="ked-grid">
        <!-- Widget 1: Kaveri Tab System -->
        <div class="ked-card-widget">
            <div class="ked-widget-header">
                <span class="ked-widget-icon">🗺️</span>
                <h3>Kaveri Guide System</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Toggle guides to review citizen registration and search submission parameters.
            </p>
            <div class="ked-tab-header">
                <button class="ked-tab-btn active" id="ked-btn-reg">1. Register Profile</button>
                <button class="ked-tab-btn" id="ked-btn-apply">2. Apply Certified EC</button>
            </div>
            
            <div class="ked-tab-pane active" id="ked-pane-reg">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Citizen Portal Registration:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Visit the Kaveri Online Services Portal.</li>
                        <li style="margin-bottom: 0.4rem;">Click **"Register as a New User"**.</li>
                        <li style="margin-bottom: 0.4rem;">Input Aadhaar, Name, Mobile, and Password details.</li>
                        <li>Activate citizen account via SMS OTP.</li>
                    </ol>
                    <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Register on Kaveri</a>
                </div>
            </div>
            
            <div class="ked-tab-pane" id="ked-pane-apply">
                <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem;">
                    <strong>Application Steps:</strong>
                    <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.4rem;">Log in to citizen dashboard.</li>
                        <li style="margin-bottom: 0.4rem;">Select "Online EC" services.</li>
                        <li style="margin-bottom: 0.4rem;">Provide SRO village, Survey number, and dates.</li>
                        <li>Submit application and pay state search fees.</li>
                    </ol>
                    <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Log in & Apply</a>
                </div>
            </div>
        </div>

        <!-- Widget 2: Download Parameters Checklist -->
        <div class="ked-card-widget">
            <div class="ked-widget-header">
                <span class="ked-widget-icon">📋</span>
                <h3>Kaveri Search parameters</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check items to execute an error-free kaveri online ec download.
            </p>
            <div class="ked-progress-wrap">
                <div class="ked-progress-fill" id="ked-progress"></div>
            </div>
            <div class="ked-chk-list" id="ked-checklist">
                <label class="ked-chk-item">
                    <input type="checkbox">
                    <span>District & Sub-Registrar Office SRO Name</span>
                </label>
                <label class="ked-chk-item">
                    <input type="checkbox">
                    <span>Registered Document Number & Year</span>
                </label>
                <label class="ked-chk-item">
                    <input type="checkbox">
                    <span>Survey & Subdivision codes (or Plot/Flat number)</span>
                </label>
                <label class="ked-chk-item">
                    <input type="checkbox">
                    <span>Pattadar Passbook Number (for rural agricultural lands)</span>
                </label>
                <label class="ked-chk-item">
                    <input type="checkbox">
                    <span>Validated Citizen login or Guest User credentials</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: Kaveri Search Fee Calculator -->
        <div class="ked-card-widget">
            <div class="ked-widget-header">
                <span class="ked-widget-icon">💰</span>
                <h3>Search Fee Calculator</h3>
            </div>
            <div class="ked-form-group">
                <label for="ked-years">Search Duration (Years):</label>
                <input type="number" id="ked-years" class="ked-input" min="1" max="100" value="30">
            </div>
            <div class="ked-result-box">
                <div class="ked-result-title">Estimated Government Fee:</div>
                <div class="ked-result-val" id="ked-fee-display">₹305</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="ked-fee-note">
                    Calculation: ₹15 (1st Year) + ₹290 (Subsequent Years).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tab switching
        const btnReg = document.getElementById("ked-btn-reg");
        const btnApply = document.getElementById("ked-btn-apply");
        const paneReg = document.getElementById("ked-pane-reg");
        const paneApply = document.getElementById("ked-pane-apply");

        btnReg.addEventListener("click", function() {
            btnReg.classList.add("active");
            btnApply.classList.remove("active");
            paneReg.classList.add("active");
            paneApply.classList.remove("active");
        });

        btnApply.addEventListener("click", function() {
            btnApply.classList.add("active");
            btnReg.classList.remove("active");
            paneApply.classList.add("active");
            paneReg.classList.remove("active");
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#ked-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("ked-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".ked-chk-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator
        const inputYears = document.getElementById("ked-years");
        const feeDisplay = document.getElementById("ked-fee-display");
        const feeNote = document.getElementById("ked-fee-note");

        function calculateFee() {
            let years = parseInt(inputYears.value) || 1;
            if (years < 1) years = 1;
            
            // Search Fee: First year Rs. 15, subsequent Rs. 10 per year.
            const searchFee = 15 + (years - 1) * 10;
            feeDisplay.innerText = "₹" + searchFee;
            feeNote.innerText = "Calculation: ₹15 (1st Year) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
        }

        inputYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding Kaveri Online EC Download Services</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> search has transformed real estate inspections across Karnataka, particularly in Bangalore and urban zones. The Department of Stamps and Registration provides direct digital routes to access land deeds via the Kaveri Services platform. For property buyers, executing a complete **kaveri online ec download** provides clear information on historical transactions, ensuring the land title is clean before finalizing purchases.
</p>
<p class="content-text">
    In this educational reference guide, we examine the procedures required to request an <a href="https://econline.in/">ec online</a> download using the Kaveri portal. We cover user registration steps, SRO selection methodologies, date boundaries, and fee structures. By following these steps, buyers can verify their land titles and prevent registry errors.
</p>

<h2>Guest Search vs. Certified Copy: Which Download Flow?</h2>
<p class="content-text">
    When using the Kaveri <a href="https://econline.in/">ec online</a> portal, users can choose between two search categories:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Guest EC Search (Draft Copy)</strong>: This is a free search that displays transaction history on screen. It does not carry official signatures and is suitable for preliminary inspections. It does not require creating a user profile.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Certified Copy of EC</strong>: This requires registering a citizen account, logging in, and paying government search fees. SRO officers verify the query and attach a digital signature. This certified copy is legally valid in court and accepted by banks.</li>
</ul>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Search Type</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Government Search Fees</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Digital Signature</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Legality Status</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Guest EC Search</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0 (Free of cost)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">No</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Informational only; not accepted for mortgages.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Certified Online EC</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 (1st year) + ₹10/subsequent year</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Digitally signed by SRO)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Fully valid in banks & judicial trials.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Guide to Download EC on Kaveri</h2>
<p class="content-text">
    To search and download your property certificates on Kaveri, follow these steps:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Access Kaveri</h3>
        <p class="content-text" style="margin-bottom:0;">Go to the official Kaveri Online Services Portal: <a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener">kaverionline.karnataka.gov.in</a>.</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Citizen Login</h3>
        <p class="content-text" style="margin-bottom:0;">Log in using your registered mobile number and password, or click register to create a new profile.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Parameters</h3>
        <p class="content-text" style="margin-bottom:0;">Select the **"Online EC"** citizen service tab and fill in SRO details, survey numbers, and coordinates.</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Pay & Download</h3>
        <p class="content-text" style="margin-bottom:0;">Submit the query, pay the government search fees online, and download the signed PDF from your dashboard.</p>
    </div>
</div>

<p class="content-text">
    To review registration guidelines in neighboring regions, consult our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> portal directory or verify our neighboring guides like the <a href="/tn-ec-online/">tn ec online</a> checklist. If you are comparing parameters for Andhra or Telangana, check out the <a href="/online-ec-ap/">online ec ap</a> guide or the <a href="/ec-online-telangana/">ec online telangana</a> manual. You can also view the general index at our <a href="/ec-view-online/">ec view online</a> directory.
</p>

<h2>Preventing Search Failures on Kaveri</h2>
<p class="content-text">
    If the online search returns "No Record Found," it does not always mean the property is free of encumbrance. It may indicate a formatting issue. To verify the <a href="https://econline.in/">ec online</a> transaction logs accurately, consider these critical rules:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Reconcile Survey Formats</strong>: In Karnataka, survey numbers are written as <code>142/3A</code>. When entering them, input <code>142</code> in the survey number box and <code>3A</code> in the sub-division field.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Verify SRO Jurisdictions</strong>: Sub-Registrar Offices are periodically restructured. If the property was registered ten years ago, the SRO code might have changed. Try searching under both the historical and current SRO listings.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Confirm Boundaries</strong>: Ensure boundaries details match the physical deed parameters. Leaving boundaries blank can result in search failures.</li>
</ol>
<p class="content-text">
    To check the current <a href="https://econline.in/">ec online</a> copy approvals, you can check the transaction history page. To print or validate downloaded files, review our <a href="/online-ec-download/">online ec download</a> instructions.
</p>

<h2>Bhoomi Portal: Agricultural Record Integration</h2>
<p class="content-text">
    Title verification is only half complete with an EC download. You must also check the revenue records to confirm mutation is updated. For agricultural lands in Karnataka, follow these steps to retrieve the RTC:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">Access the official Bhoomi portal: <strong>landrecords.karnataka.gov.in</strong>.</li>
    <li style="margin-bottom: 0.5rem;">Select the option to view RTC copy or mutation status.</li>
    <li style="margin-bottom: 0.5rem;">Provide Hobli, Taluk, Village, and Survey details.</li>
    <li style="margin-bottom: 0.5rem;">Verify that the seller\'s name is listed as the latest claimant in mutation registers.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are investigating other states, refer to the <a href="/ec-online-tamil/">ec online tamil</a> guide, read about TS registries in the <a href="/ec-telangana-online-search/">ec telangana online search</a> directory, or check out the <a href="/online-ec-ap/">online ec ap</a> guide. To retrieve the verified <a href="https://econline.in/">ec online</a> record for banks, you can always check our main database references.
</p>';
    $faq_ked = '[{"question":"Why does Kaveri Online EC download show a question mark on the signature?","answer":"The question mark indicates that Adobe Acrobat Reader has not yet trusted the digital certificate used by the Sub-Registrar Office to sign the PDF. You can trust it by adding the certificate to your Trusted Certificates list under Signature Properties."},{"question":"How can I download my EC for free in Karnataka?","answer":"You can download a draft search copy for free by using the guest search option on Kaveri Online Services. This copy is for informational review only."},{"question":"Can I download my property EC on a mobile phone?","answer":"Yes, you can access the Kaveri portal and download the EC PDF on a mobile browser. However, validating the digital signature must be done on a desktop computer using Adobe Acrobat."},{"question":"What should I do if my survey number is not found during the Kaveri search?","answer":"If the survey number is not found, double-check that the spelling of the revenue village is correct and that the SRO selected is the one currently holding records. You may also need to check the format of survey subdivision inputs."}]';
    $schema_type_ked = 'Article';

    $stmt->execute([
        'slug' => $slug_ked,
        'keyword' => $keyword_ked,
        'title' => $title_ked,
        'meta_desc' => $meta_desc_ked,
        'h1_title' => $h1_ked,
        'content' => $content_ked,
        'faq_data' => $faq_ked,
        'schema_type' => $schema_type_ked
    ]);

    // --- 17. AUTO-INITIALIZE ONLINE EC SEARCH PAGE ---
    $slug_oes = 'online-ec-search';
    $keyword_oes = 'online ec search';
    $title_oes = 'online ec search';
    $h1_oes = 'online ec search';
    $meta_desc_oes = 'Access the interactive online ec search directory. Select your state portal, check parameters checklist, and calculate search fees dynamically.';
    $content_oes = '<!-- Custom Interactive Styles for OES Dashboard -->
<style>
    .oes-toolkit { margin: 2rem 0; width: 100%; }
    .oes-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; width: 100%; }
    @media (min-width: 768px) {
        .oes-grid { flex-direction: row; }
        .oes-card-widget { flex: 1; }
    }
    .oes-card-widget {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) { .oes-card-widget { padding: 1rem; } }
    .oes-card-widget:hover { border-color: var(--accent); box-shadow: var(--shadow-md); }
    .oes-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .oes-widget-header h3 { font-size: 1.15rem; margin-bottom: 0; color: var(--primary); }
    .oes-widget-icon { font-size: 1.5rem; }
    .oes-form-group { margin-bottom: 1rem; width: 100%; }
    .oes-form-group label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-main); }
    .oes-input, .oes-select {
        width: 100%; padding: 0.65rem; border: 1px solid var(--border); border-radius: var(--radius-sm);
        font-size: 0.95rem; outline: none; box-sizing: border-box; font-family: var(--font-sans); color: var(--primary);
    }
    .oes-input:focus, .oes-select:focus { border-color: var(--accent); }
    
    /* Checklist Progress Bar */
    .oes-progress-wrap { background: var(--border); border-radius: 4px; height: 8px; width: 100%; margin-bottom: 1.25rem; overflow: hidden; }
    .oes-progress-fill { height: 100%; width: 0%; background-color: var(--success); transition: width var(--transition-normal); }
    .oes-chk-list { display: flex; flex-direction: column; gap: 0.75rem; }
    .oes-chk-item { display: flex; align-items: flex-start; gap: 0.75rem; cursor: pointer; }
    .oes-chk-item input[type="checkbox"] { margin-top: 0.25rem; width: 16px; height: 16px; flex-shrink: 0; cursor: pointer; }
    .oes-chk-item span { line-height: 1.4; color: var(--text-main); font-size: 0.95rem; }
    .oes-chk-item.checked span { text-decoration: line-through; color: var(--text-muted); }
    
    /* Result Box */
    .oes-result-box { background: #eff6ff; border: 1px solid rgba(37, 99, 211, 0.15); border-radius: var(--radius-sm); padding: 1rem; margin-top: 1rem; }
    .oes-result-title { font-size: 0.9rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.25rem; }
    .oes-result-val { font-size: 1.5rem; color: var(--accent); font-weight: 800; }

    /* Portal Router system */
    .oes-state-desc-box { background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem; }
</style>

<div class="oes-toolkit">
    <div class="oes-grid">
        <!-- Widget 1: State Portal Router -->
        <div class="oes-card-widget">
            <div class="oes-widget-header">
                <span class="oes-widget-icon">🗺️</span>
                <h3>National Search Gateway</h3>
            </div>
            <div class="oes-form-group">
                <label for="oes-state-select">Select Target State:</label>
                <select id="oes-state-select" class="oes-select">
                    <option value="TN" selected>Tamil Nadu (TNREGINET)</option>
                    <option value="KA">Karnataka (Kaveri Portal)</option>
                    <option value="TS">Telangana (IGRS TS / Dharani)</option>
                    <option value="AP">Andhra Pradesh (IGRS AP)</option>
                </select>
            </div>
            <div class="oes-state-desc-box" id="oes-state-details">
                <strong>TNREGINET Search Process:</strong>
                <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                    <li style="margin-bottom: 0.4rem;">Select E-Services &rarr; Encumbrance Certificate &rarr; View EC.</li>
                    <li style="margin-bottom: 0.4rem;">Provide SRO, Village, Survey, and date filters.</li>
                    <li>Click search, enter Captcha, and view the free draft PDF.</li>
                </ol>
                <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Launch TN Portal</a>
            </div>
        </div>

        <!-- Widget 2: Download Parameters Checklist -->
        <div class="oes-card-widget">
            <div class="oes-widget-header">
                <span class="oes-widget-icon">📋</span>
                <h3>Search Requirements Checklist</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check details required to successfully execute your property title search certificate.
            </p>
            <div class="oes-progress-wrap">
                <div class="oes-progress-fill" id="oes-progress"></div>
            </div>
            <div class="oes-chk-list" id="oes-checklist">
                <label class="oes-chk-item">
                    <input type="checkbox">
                    <span>Sub-Registrar Office (SRO) name of the region</span>
                </label>
                <label class="oes-chk-item">
                    <input type="checkbox">
                    <span>Registered Document Number & Year of transaction</span>
                </label>
                <label class="oes-chk-item">
                    <input type="checkbox">
                    <span>Survey & Subdivision codes (or Flat/Plot number)</span>
                </label>
                <label class="oes-chk-item">
                    <input type="checkbox">
                    <span>Registered owner details & boundaries description</span>
                </label>
                <label class="oes-chk-item">
                    <input type="checkbox">
                    <span>Valid Citizen login or Guest User access setup</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: Download Fee Calculator -->
        <div class="oes-card-widget">
            <div class="oes-widget-header">
                <span class="oes-widget-icon">💰</span>
                <h3>Search Fee Calculator</h3>
            </div>
            <div class="oes-form-group">
                <label for="oes-calc-state">Select State:</label>
                <select id="oes-calc-state" class="oes-select">
                    <option value="TN" selected>Tamil Nadu</option>
                    <option value="KA">Karnataka</option>
                    <option value="TS">Telangana</option>
                    <option value="AP">Andhra Pradesh</option>
                </select>
            </div>
            <div class="oes-form-group">
                <label for="oes-calc-years">Number of Years:</label>
                <input type="number" id="oes-calc-years" class="oes-input" min="1" max="100" value="30">
            </div>
            <div class="oes-result-box">
                <div class="oes-result-title">Estimated Government Fee:</div>
                <div class="oes-result-val" id="oes-fee-display">₹160</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="oes-fee-note">
                    Calculation: ₹15 (1st Year) + ₹145 (Subsequent Years).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // State Portal Router Logic
        const stateSelect = document.getElementById("oes-state-select");
        const detailsContainer = document.getElementById("oes-state-details");

        const stateInfo = {
            TN: {
                title: "TNREGINET Search Process:",
                steps: [
                    "Select E-Services &rarr; Encumbrance Certificate &rarr; View EC.",
                    "Provide SRO, Village, Survey, and date filters.",
                    "Click search, enter Captcha, and download the free draft PDF."
                ],
                url: "https://tnreginet.gov.in"
            },
            KA: {
                title: "Kaveri Portal Online EC Process:",
                steps: [
                    "Register or login to the Kaveri Online Services Portal.",
                    "Under citizen services, choose \"Online EC\".",
                    "Input SRO, survey numbers, coordinates, and pay calculated fees online."
                ],
                url: "https://kaverionline.karnataka.gov.in"
            },
            TS: {
                title: "Telangana IGRS / Dharani Process:",
                steps: [
                    "For urban units, visit the IGRS Telangana portal and choose \"EC\".",
                    "Input property document index or SRO coordinates.",
                    "For rural agricultural fields, query survey numbers on Dharani portal."
                ],
                url: "https://registration.telangana.gov.in"
            },
            AP: {
                title: "Andhra Pradesh IGRS Process:",
                steps: [
                    "Access the official IGRS AP website and choose \"Encumbrance Certificate\".",
                    "Enter zone details, district name, and survey numbers.",
                    "Validate online ledger on screen and save the transaction log."
                ],
                url: "https://igrs.ap.gov.in"
            }
        };

        stateSelect.addEventListener("change", function() {
            const data = stateInfo[stateSelect.value];
            let listHtml = "";
            data.steps.forEach(step => {
                listHtml += "<li style=\"margin-bottom: 0.4rem;\">" + step + "</li>";
            });
            detailsContainer.innerHTML = "<strong>" + data.title + "</strong><ol style=\"margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;\">" + listHtml + "</ol><a href=\"" + data.url + "\" target=\"_blank\" rel=\"nofollow noopener\" class=\"btn-primary\" style=\"display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;\">Launch Portal</a>";
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#oes-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("oes-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".oes-chk-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator
        const calcState = document.getElementById("oes-calc-state");
        const calcYears = document.getElementById("oes-calc-years");
        const feeDisplay = document.getElementById("oes-fee-display");
        const feeNote = document.getElementById("oes-fee-note");

        function calculateFee() {
            let years = parseInt(calcYears.value) || 1;
            if (years < 1) years = 1;
            const state = calcState.value;
            let totalFee = 0;
            let note = "";

            if (state === "TN") {
                totalFee = 15 + (years - 1) * 5;
                note = "Tamil Nadu Rate: ₹15 (1st Year) + ₹" + ((years - 1) * 5) + " (Subsequent Years).";
            } else if (state === "KA") {
                totalFee = 15 + (years - 1) * 10;
                note = "Karnataka Rate: ₹15 (1st Year) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            } else if (state === "TS") {
                totalFee = 200 + (years - 1) * 10;
                note = "Telangana Rate: ₹200 (Base Search Fee) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            } else if (state === "AP") {
                totalFee = 200 + (years - 1) * 10;
                note = "Andhra Pradesh Rate: ₹200 (Base Search Fee) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            }

            feeDisplay.innerText = "₹" + totalFee;
            feeNote.innerText = note;
        }

        calcState.addEventListener("change", calculateFee);
        calcYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding the online ec search Process for Property Records</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> search has revolutionized how homebuyers inspect property transactions and verify land titles in India. Whether you are dealing with land plots, residential apartments, or commercial complexes, running an **online ec search** on official registries is mandatory for safe transactions. This certificate details sales deeds, bank mortgages, partition logs, and court orders registered under the property survey index.
</p>
<p class="content-text">
    In this comprehensive manual, we explore the procedures to verify <a href="https://econline.in/">ec online</a> databases using official state registration portals. We cover SRO administrative village parameters, date boundaries, and fee structures for different states. By checking these records early, buyers can confirm that the seller holds absolute title rights.
</p>

<h2>Search Typologies: Guest Lookup vs. Certified Application</h2>
<p class="content-text">
    Most state departments manage two distinct flows for retrieving property certificates. Depending on whether you need the records for internal verification or bank loans, choose the correct process:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Informational View (Guest Search)</strong>: Typically free and generated instantly using the official <a href="https://econline.in/">ec online</a> registration portal. It does not carry official seals or signatures and is meant for informational lookup only. This is perfect for initial title verification or review.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Certified Copy of EC</strong>: Requires citizen account registration, SRO validation, and online fee payment. SRO officers verify the query and attach a digital signature. This certified copy is legally admissible in court hearings and home loan applications. You must login to request an <a href="https://econline.in/">ec online</a> copy.</li>
</ul>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">State / Portal</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Free Search Availability</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Certified Search Charges</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Average Processing Time</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Tamil Nadu (TNREGINET)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Instant PDF draft copy)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 base + ₹5/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Instant for draft; 3 days for certified.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Karnataka (Kaveri Portal)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (On-screen search results)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 base + ₹10/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">2 to 3 working days.</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Telangana (IGRS TS)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Instant ledger review)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹200 base + ₹10/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">1 to 2 working days.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Walkthrough: Running an EC Search</h2>
<p class="content-text">
    To run a search query for your property registers, follow these standard steps:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Choose Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to your state registration portal (e.g. TNREGINET, Kaveri Online, IGRS TS, IGRS AP).</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Login or Guest</h3>
        <p class="content-text" style="margin-bottom:0;">Log in to your citizen profile if you want a certified copy. Otherwise, choose the guest search option.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Survey Codes</h3>
        <p class="content-text" style="margin-bottom:0;">Provide registration parameters (SRO location, village name, survey numbers, and target dates).</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Pay & Download</h3>
        <p class="content-text" style="margin-bottom:0;">Verify the captcha, submit the query, pay the government fee if required, and download the resulting file.</p>
    </div>
</div>

<p class="content-text">
    For localized state-specific search manuals, review our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide, the <a href="/ec-online-karnataka/">ec online karnataka</a> handbook, the <a href="/ec-online-telangana/">ec online telangana</a> manual, or the <a href="/online-ec-ap/">online ec ap</a> dashboard. For general search principles, read our <a href="/ec-view-online/">ec view online</a> directory.
</p>

<h2>Best Practices to Avoid Search Failures</h2>
<p class="content-text">
    If the online search returns "No Record Found," it does not always mean the property is free of encumbrance. It may indicate a formatting issue. To check the current <a href="https://econline.in/">ec online</a> status parameters accurately, consider these rules:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Reconcile Survey Formats</strong>: In most states, survey numbers are written as <code>142/3A</code>. When entering them, input <code>142</code> in the survey number box and <code>3A</code> in the sub-division field.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Verify SRO Jurisdictions</strong>: Sub-Registrar Offices are periodically restructured. If the property was registered ten years ago, the SRO code might have changed. Try searching under both the historical and current SRO listings.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Confirm Boundaries</strong>: Ensure boundaries details match the physical deed parameters. Leaving boundaries blank can result in search failures.</li>
</ol>
<p class="content-text">
    Once you have verified the transaction history online, you can proceed to download the signed version. For guidelines on verifying digital signatures in Acrobat, read our <a href="/online-ec-download/">online ec download</a> reference.
</p>

<h2>Revenue Records Integration: Patta Chitta and RTC</h2>
<p class="content-text">
    Title verification is only half complete with an EC search. You must also check the revenue records to confirm mutation is updated. For land parcels in Tamil Nadu, you must retrieve the Patta Chitta, while in Karnataka you must retrieve the RTC (Pahani). Let\'s verify this on the respective portals:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Tamil Nadu (eservices.tn.gov.in)</strong>: Select view Patta copy, input SRO village, Taluk, and Survey details. Verify seller\'s name.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Karnataka (landrecords.karnataka.gov.in)</strong>: Choose Bhoomi Land Services, input Hobli, Taluk, and Survey details. Verify latest mutation logs.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are investigating other states, refer to the <a href="/ec-online-tamil/">ec online tamil</a> guide, read about TS registries in the <a href="/ec-telangana-online-search/">ec telangana online search</a> directory, or check out the <a href="/online-ec-ap/">online ec ap</a> guide. To retrieve the verified <a href="https://econline.in/">ec online</a> ledger logs, you can always check our main database references.
</p>';
    $faq_oes = '[{"question":"Why does the online search return \"No Record Found\"?","answer":"This can happen if the survey number was typed incorrectly, the sub-division field was left blank, or the village SRO selected is incorrect. Double-check your details and try searching with parent survey numbers."},{"question":"Is it possible to view historic EC records online?","answer":"Yes, online records are generally available from 1975 to the present. For records prior to 1975, you must visit the respective SRO office to submit a physical search application."},{"question":"How can I download the English version of my EC?","answer":"Before you click the EC Search option on the portal homepage, select the \"English\" language toggle link in the top-right header menu. The portal will then render and generate documents in English."},{"question":"What is the fee to view an EC online?","answer":"Viewing the draft copy of your encumbrance history is completely free in most states. Fees are only charged if you request a digitally signed certified copy."}]';
    $schema_type_oes = 'Article';

    $stmt->execute([
        'slug' => $slug_oes,
        'keyword' => $keyword_oes,
        'title' => $title_oes,
        'meta_desc' => $meta_desc_oes,
        'h1_title' => $h1_oes,
        'content' => $content_oes,
        'faq_data' => $faq_oes,
        'schema_type' => $schema_type_oes
    ]);

    // --- 18. AUTO-INITIALIZE ONLINE EC APPLY PAGE ---
    $slug_oea = 'online-ec-apply';
    $keyword_oea = 'online ec apply';
    $title_oea = 'online ec apply';
    $h1_oea = 'online ec apply';
    $meta_desc_oea = 'Access the interactive online ec apply guide. Select your state registry, check parameters checklist, and calculate registration fees dynamically.';
    $content_oea = '<!-- Custom Interactive Styles for OEA Dashboard -->
<style>
    .oea-toolkit { margin: 2rem 0; width: 100%; }
    .oea-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; width: 100%; }
    @media (min-width: 768px) {
        .oea-grid { flex-direction: row; }
        .oea-card-widget { flex: 1; }
    }
    .oea-card-widget {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.5rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
        width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 480px) { .oea-card-widget { padding: 1rem; } }
    .oea-card-widget:hover { border-color: var(--accent); box-shadow: var(--shadow-md); }
    .oea-widget-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        border-bottom: 1px solid var(--border);
        padding-bottom: 0.75rem;
    }
    .oea-widget-header h3 { font-size: 1.15rem; margin-bottom: 0; color: var(--primary); }
    .oea-widget-icon { font-size: 1.5rem; }
    .oea-form-group { margin-bottom: 1rem; width: 100%; }
    .oea-form-group label { display: block; font-size: 0.9rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-main); }
    .oea-input, .oea-select {
        width: 100%; padding: 0.65rem; border: 1px solid var(--border); border-radius: var(--radius-sm);
        font-size: 0.95rem; outline: none; box-sizing: border-box; font-family: var(--font-sans); color: var(--primary);
    }
    .oea-input:focus, .oea-select:focus { border-color: var(--accent); }
    
    /* Checklist Progress Bar */
    .oea-progress-wrap { background: var(--border); border-radius: 4px; height: 8px; width: 100%; margin-bottom: 1.25rem; overflow: hidden; }
    .oea-progress-fill { height: 100%; width: 0%; background-color: var(--success); transition: width var(--transition-normal); }
    .oea-chk-list { display: flex; flex-direction: column; gap: 0.75rem; }
    .oea-chk-item { display: flex; align-items: flex-start; gap: 0.75rem; cursor: pointer; }
    .oea-chk-item input[type="checkbox"] { margin-top: 0.25rem; width: 16px; height: 16px; flex-shrink: 0; cursor: pointer; }
    .oea-chk-item span { line-height: 1.4; color: var(--text-main); font-size: 0.95rem; }
    .oea-chk-item.checked span { text-decoration: line-through; color: var(--text-muted); }
    
    /* Result Box */
    .oea-result-box { background: #eff6ff; border: 1px solid rgba(37, 99, 211, 0.15); border-radius: var(--radius-sm); padding: 1rem; margin-top: 1rem; }
    .oea-result-title { font-size: 0.9rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.25rem; }
    .oea-result-val { font-size: 1.5rem; color: var(--accent); font-weight: 800; }

    /* Portal Router system */
    .oea-state-desc-box { background: #f8fafc; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 1rem; font-size: 0.9rem; }
</style>

<div class="oea-toolkit">
    <div class="oea-grid">
        <!-- Widget 1: State Portal Router -->
        <div class="oea-card-widget">
            <div class="oea-widget-header">
                <span class="oea-widget-icon">🗺️</span>
                <h3>National Apply Gateway</h3>
            </div>
            <div class="oea-form-group">
                <label for="oea-state-select">Select Target State:</label>
                <select id="oea-state-select" class="oea-select">
                    <option value="TN" selected>Tamil Nadu (TNREGINET)</option>
                    <option value="KA">Karnataka (Kaveri Portal)</option>
                    <option value="TS">Telangana (IGRS TS / Dharani)</option>
                    <option value="AP">Andhra Pradesh (IGRS AP)</option>
                </select>
            </div>
            <div class="oea-state-desc-box" id="oea-state-details">
                <strong>TNREGINET Application Process:</strong>
                <ol style="margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;">
                    <li style="margin-bottom: 0.4rem;">Select E-Services &rarr; Encumbrance Certificate &rarr; View EC.</li>
                    <li style="margin-bottom: 0.4rem;">Provide SRO, Village, Survey, and date filters.</li>
                    <li>Click search, enter Captcha, and request signed copy by paying fee.</li>
                </ol>
                <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;">Launch TN Portal</a>
            </div>
        </div>

        <!-- Widget 2: Download Parameters Checklist -->
        <div class="oea-card-widget">
            <div class="oea-widget-header">
                <span class="oea-widget-icon">📋</span>
                <h3>Apply Requirements Checklist</h3>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">
                Check details required to successfully execute your property title search certificate application.
            </p>
            <div class="oea-progress-wrap">
                <div class="oea-progress-fill" id="oea-progress"></div>
            </div>
            <div class="oea-chk-list" id="oea-checklist">
                <label class="oea-chk-item">
                    <input type="checkbox">
                    <span>Sub-Registrar Office (SRO) name of the region</span>
                </label>
                <label class="oea-chk-item">
                    <input type="checkbox">
                    <span>Registered Document Number & Year of transaction</span>
                </label>
                <label class="oea-chk-item">
                    <input type="checkbox">
                    <span>Survey & Subdivision codes (or Flat/Plot number)</span>
                </label>
                <label class="oea-chk-item">
                    <input type="checkbox">
                    <span>Registered owner details & boundaries description</span>
                </label>
                <label class="oea-chk-item">
                    <input type="checkbox">
                    <span>Valid Citizen login or Guest User access setup</span>
                </label>
            </div>
        </div>

        <!-- Widget 3: Download Fee Calculator -->
        <div class="oea-card-widget">
            <div class="oea-widget-header">
                <span class="oea-widget-icon">💰</span>
                <h3>Apply Fee Calculator</h3>
            </div>
            <div class="oea-form-group">
                <label for="oea-calc-state">Select State:</label>
                <select id="oea-calc-state" class="oea-select">
                    <option value="TN" selected>Tamil Nadu</option>
                    <option value="KA">Karnataka</option>
                    <option value="TS">Telangana</option>
                    <option value="AP">Andhra Pradesh</option>
                </select>
            </div>
            <div class="oea-form-group">
                <label for="oea-calc-years">Number of Years:</label>
                <input type="number" id="oea-calc-years" class="oea-input" min="1" max="100" value="30">
            </div>
            <div class="oea-result-box">
                <div class="oea-result-title">Estimated Government Fee:</div>
                <div class="oea-result-val" id="oea-fee-display">₹160</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;" id="oea-fee-note">
                    Calculation: ₹15 (1st Year) + ₹145 (Subsequent Years).
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // State Portal Router Logic
        const stateSelect = document.getElementById("oea-state-select");
        const detailsContainer = document.getElementById("oea-state-details");

        const stateInfo = {
            TN: {
                title: "TNREGINET Application Process:",
                steps: [
                    "Select E-Services &rarr; Encumbrance Certificate &rarr; View EC.",
                    "Provide SRO, Village, Survey, and date filters.",
                    "Click search, enter Captcha, and request signed copy by paying fee."
                ],
                url: "https://tnreginet.gov.in"
            },
            KA: {
                title: "Kaveri Portal Online EC Process:",
                steps: [
                    "Register or login to the Kaveri Online Services Portal.",
                    "Under citizen services, choose \"Online EC\".",
                    "Input SRO, survey numbers, coordinates, and pay calculated fees online."
                ],
                url: "https://kaverionline.karnataka.gov.in"
            },
            TS: {
                title: "Telangana IGRS / Dharani Process:",
                steps: [
                    "For urban units, visit the IGRS Telangana portal and choose \"EC\".",
                    "Input property document index or SRO coordinates.",
                    "For rural agricultural fields, query survey numbers on Dharani portal."
                ],
                url: "https://registration.telangana.gov.in"
            },
            AP: {
                title: "Andhra Pradesh IGRS Process:",
                steps: [
                    "Access the official IGRS AP website and choose \"Encumbrance Certificate\".",
                    "Enter zone details, district name, and survey numbers.",
                    "Validate online ledger on screen and save the transaction log."
                ],
                url: "https://igrs.ap.gov.in"
            }
        };

        stateSelect.addEventListener("change", function() {
            const data = stateInfo[stateSelect.value];
            let listHtml = "";
            data.steps.forEach(step => {
                listHtml += "<li style=\"margin-bottom: 0.4rem;\">" + step + "</li>";
            });
            detailsContainer.innerHTML = "<strong>" + data.title + "</strong><ol style=\"margin-left: 1.25rem; margin-top: 0.5rem; margin-bottom: 0;\">" + listHtml + "</ol><a href=\"" + data.url + "\" target=\"_blank\" rel=\"nofollow noopener\" class=\"btn-primary\" style=\"display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;\">Launch Portal</a>";
        });

        // Checklist logic
        const checkboxes = document.querySelectorAll("#oea-checklist input[type=\"checkbox\"]");
        const progress = document.getElementById("oea-progress");

        function updateProgress() {
            const total = checkboxes.length;
            let checkedCount = 0;
            checkboxes.forEach(chk => {
                const label = chk.closest(".oea-chk-item");
                if (chk.checked) {
                    checkedCount++;
                    label.classList.add("checked");
                } else {
                    label.classList.remove("checked");
                }
            });
            const pct = Math.round((checkedCount / total) * 100);
            progress.style.width = pct + "%";
        }

        checkboxes.forEach(chk => chk.addEventListener("change", updateProgress));
        updateProgress();

        // Fee Calculator
        const calcState = document.getElementById("oea-calc-state");
        const calcYears = document.getElementById("oea-calc-years");
        const feeDisplay = document.getElementById("oea-fee-display");
        const feeNote = document.getElementById("oea-fee-note");

        function calculateFee() {
            let years = parseInt(calcYears.value) || 1;
            if (years < 1) years = 1;
            const state = calcState.value;
            let totalFee = 0;
            let note = "";

            if (state === "TN") {
                totalFee = 15 + (years - 1) * 5;
                note = "Tamil Nadu Rate: ₹15 (1st Year) + ₹" + ((years - 1) * 5) + " (Subsequent Years).";
            } else if (state === "KA") {
                totalFee = 15 + (years - 1) * 10;
                note = "Karnataka Rate: ₹15 (1st Year) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            } else if (state === "TS") {
                totalFee = 200 + (years - 1) * 10;
                note = "Telangana Rate: ₹200 (Base Search Fee) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            } else if (state === "AP") {
                totalFee = 200 + (years - 1) * 10;
                note = "Andhra Pradesh Rate: ₹200 (Base Search Fee) + ₹" + ((years - 1) * 10) + " (Subsequent Years).";
            }

            feeDisplay.innerText = "₹" + totalFee;
            feeNote.innerText = note;
        }

        calcState.addEventListener("change", calculateFee);
        calcYears.addEventListener("input", calculateFee);
        calculateFee();
    });
</script>

<h2>Understanding the online ec apply Process for Property Records</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> service is an essential tool used by property buyers in India to verify the legal history and registration records of real estate. Whether you are dealing with land plots, residential apartments, or commercial complexes, submitting an **online ec apply** request is a critical requirement for obtaining a digitally signed certified copy. This certificate outlines sales deeds, partition logs, court attachments, and outstanding mortgages.
</p>
<p class="content-text">
    In this comprehensive manual, we outline the exact procedures to verify <a href="https://econline.in/">ec online</a> registries using official state registration portals. We cover citizen registration steps, SRO selection coordinates, boundaries descriptors, and government processing charges. By learning how to submit an <a href="https://econline.in/">ec online</a> application correctly, buyers can confirm that the property title is clean.
</p>

<h2>Guest View vs. Certified Copy: Which Flow to Select?</h2>
<p class="content-text">
    Most state departments manage two distinct flows for retrieving property certificates. Depending on whether you need the records for internal verification or bank loans, choose the correct process:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Informational View (Guest Search)</strong>: Typically free and generated instantly using the official <a href="https://econline.in/">ec online</a> portal (TNREGINET / Kaveri). It does not carry official seals or signatures and is meant for informational lookup only. This is perfect for initial title verification or review.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Certified Copy of EC</strong>: Requires citizen account registration, SRO validation, and online fee payment. SRO officers verify the query and attach a digital signature. This certified copy is legally admissible in court hearings and home loan applications. You must login to search and request <a href="https://econline.in/">ec online</a> certified copies.</li>
</ul>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">State / Portal</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Free Search Availability</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Certified Search Charges</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Average Processing Time</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Tamil Nadu (TNREGINET)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Instant PDF draft copy)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 base + ₹5/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Instant for draft; 3 days for certified.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Karnataka (Kaveri Portal)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (On-screen search results)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15 base + ₹10/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">2 to 3 working days.</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Telangana (IGRS TS)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Yes (Instant ledger review)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹200 base + ₹10/yr subsequent</td>
                <td style="padding: 12px; border: 1px solid var(--border);">1 to 2 working days.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Step-by-Step Walkthrough: How to Apply for EC Online</h2>
<p class="content-text">
    To apply for an Encumbrance Certificate online, follow these standard steps:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Choose Portal</h3>
        <p class="content-text" style="margin-bottom:0;">Go to your state registration portal (e.g. TNREGINET, Kaveri Online, IGRS TS, IGRS AP).</p>
    </div>
    <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">Login or Guest</h3>
        <p class="content-text" style="margin-bottom:0;">Log in to your citizen profile if you want a certified copy. Otherwise, choose the guest search option.</p>
    </div>
    <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">Enter Survey Codes</h3>
        <p class="content-text" style="margin-bottom:0;">Provide registration parameters (SRO location, village name, survey numbers, and target dates).</p>
    </div>
    <div class="step-card">
        <div class="step-number">4</div>
        <h3 class="step-title">Pay & Download</h3>
        <p class="content-text" style="margin-bottom:0;">Verify the captcha, submit the query, pay the government fee if required, and check the current <a href="https://econline.in/">ec online</a> approval status.</p>
    </div>
</div>

<p class="content-text">
    For localized state-specific search manuals, review our <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide, the <a href="/ec-online-karnataka/">ec online karnataka</a> handbook, the <a href="/ec-online-telangana/">ec online telangana</a> manual, or the <a href="/online-ec-ap/">online ec ap</a> dashboard. For general search principles, read our <a href="/ec-view-online/">ec view online</a> directory.
</p>

<h2>Best Practices to Avoid Search Failures</h2>
<p class="content-text">
    If the online search returns "No Record Found," it does not always mean the property is free of encumbrance. It may indicate a formatting issue. To verify the <a href="https://econline.in/">ec online</a> transaction copy accurately, consider these rules:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Reconcile Survey Formats</strong>: In most states, survey numbers are written as <code>142/3A</code>. When entering them, input <code>142</code> in the survey number box and <code>3A</code> in the sub-division field.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Verify SRO Jurisdictions</strong>: Sub-Registrar Offices are periodically restructured. If the property was registered ten years ago, the SRO code might have changed. Try searching under both the historical and current SRO listings.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Confirm Boundaries</strong>: Ensure boundaries details match the physical deed parameters. Leaving boundaries blank can result in search failures.</li>
</ol>
<p class="content-text">
    Once you have verified the transaction history online, you can proceed to download the signed version. For guidelines on verifying digital signatures in Acrobat, read our <a href="/online-ec-download/">online ec download</a> reference.
</p>

<h2>Revenue Records Integration: Patta Chitta and RTC</h2>
<p class="content-text">
    Title verification is only half complete with an EC search. You must also check the revenue records to confirm mutation is updated. For land parcels in Tamil Nadu, you must retrieve the Patta Chitta, while in Karnataka you must retrieve the RTC (Pahani). Let\'s verify this on the respective portals:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Tamil Nadu (eservices.tn.gov.in)</strong>: Select view Patta copy, input SRO village, Taluk, and Survey details. Verify seller\'s name.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Karnataka (landrecords.karnataka.gov.in)</strong>: Choose Bhoomi Land Services, input Hobli, Taluk, and Survey details. Verify latest mutation logs.</li>
</ul>
<p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6;">
    If you are investigating other states, refer to the <a href="/ec-online-tamil/">ec online tamil</a> guide, read about TS registries in the <a href="/ec-telangana-online-search/">ec telangana online search</a> directory, or check out the <a href="/online-ec-ap/">online ec ap</a> guide. To retrieve the verified <a href="https://econline.in/">ec online</a> ledger logs, you can always check our main database references.
</p>';
    $faq_oea = '[{"question":"Why does the online search return \"No Record Found\"?","answer":"This can happen if the survey number was typed incorrectly, the sub-division field was left blank, or the village SRO selected is incorrect. Double-check your details and try searching with parent survey numbers."},{"question":"Is it possible to view historic EC records online?","answer":"Yes, online records are generally available from 1975 to the present. For records prior to 1975, you must visit the respective SRO office to submit a physical search application."},{"question":"How can I download the English version of my EC?","answer":"Before you click the EC Search option on the portal homepage, select the \"English\" language toggle link in the top-right header menu. The portal will then render and generate documents in English."},{"question":"What is the fee to view an EC online?","answer":"Viewing the draft copy of your encumbrance history is completely free in most states. Fees are only charged if you request a digitally signed certified copy."}]';
    $schema_type_oea = 'Article';

    $stmt->execute([
        'slug' => $slug_oea,
        'keyword' => $keyword_oea,
        'title' => $title_oea,
        'meta_desc' => $meta_desc_oea,
        'h1_title' => $h1_oea,
        'content' => $content_oea,
        'faq_data' => $faq_oea,
        'schema_type' => $schema_type_oea
    ]);

    // --- 19. AUTO-INITIALIZE ONLINE EC CHECK PAGE ---
    $slug_oech = 'online-ec-check';
    $keyword_oech = 'online ec check';
    $title_oech = 'Online EC Check: View Encumbrance Status & Land Records';
    $h1_oech = 'Online EC Check: Detailed State-wise Status & Verification Guide';
    $meta_desc_oech = 'Learn how to perform an online EC check for your property. Step-by-step guide to verify registration status, survey details, and download certified copies across states.';
    $content_oech = '<p class="content-text">
    An Encumbrance Certificate (EC) is a vital legal document for any real estate transaction in India. It serves as evidence of free title and reveals whether a property has any registered liabilities, pending legal disputes, or mortgages. Conducting an <strong>online ec check</strong> is the first critical step before buying a home, land, or commercial building. Thanks to digital governance, most state registration departments allow property owners and prospective buyers to verify these records online instantly.
</p>

<!-- Widget 1: State Portal Quick Router -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border: 1px solid var(--border);">
    <h3 style="margin-top: 0; color: var(--primary); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="color:var(--primary);"><path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
        State Portal Quick Router
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your state to instantly retrieve the official portal name, service fee information, and direct registration links.
    </p>
    <div style="display: grid; grid-template-columns: 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label for="state-selector" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #1e293b;">Select State:</label>
            <select id="state-selector" onchange="updateStateRouter()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 1rem; color: #1e293b; background-color: #ffffff;">
                <option value="tn">Tamil Nadu (TNREGINET)</option>
                <option value="ka">Karnataka (Kaveri 2.0)</option>
                <option value="ts">Telangana (IGRS TS)</option>
                <option value="ap">Andhra Pradesh (IGRS AP)</option>
                <option value="mh">Maharashtra (IGR Maharashtra)</option>
                <option value="kl">Kerala (Pearl Portal)</option>
            </select>
        </div>
    </div>
    
    <div id="router-result" style="background-color: #ffffff; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border); transition: all 0.3s ease;">
        <!-- Filled dynamically by JavaScript -->
    </div>
</div>

<script>
function updateStateRouter() {
    var selector = document.getElementById("state-selector");
    var resultBox = document.getElementById("router-result");
    var state = selector.value;
    
    var stateData = {
        tn: {
            portal: "TNREGINET Portal (Registration Department, Tamil Nadu)",
            link: "https://tnreginet.gov.in/",
            fee: "₹15 base fee + ₹5 per additional year of search.",
            duration: "Instant for draft search results. 3-5 days for digitally certified copy.",
            tips: "Requires a registered citizen user profile to apply for a signed certificate. Simple search can be viewed as on-screen text for free."
        },
        ka: {
            portal: "Kaveri 2.0 Portal (Department of Stamps and Registration, Karnataka)",
            link: "https://kaverionline.karnataka.gov.in/",
            fee: "₹15 base search fee + ₹10 per additional search year.",
            duration: "2 to 3 working days from submission.",
            tips: "You must enter the SRO office jurisdiction and Hobli correctly. If the transaction was registered via Kaveri 2.0, the record loads within minutes."
        },
        ts: {
            portal: "IGRS Telangana Portal",
            link: "https://registration.telangana.gov.in/",
            fee: "₹200 base fee + ₹10 search fee per additional calendar year.",
            duration: "1 to 2 working days after online fee payment verification.",
            tips: "Verify that the survey number doesn\'t have sub-division numbers under prohibited land categories."
        },
        ap: {
            portal: "IGRS Andhra Pradesh Portal",
            link: "https://registration.ap.gov.in/",
            fee: "₹200 base fee + ₹10 per subsequent year.",
            duration: "1 to 2 working days.",
            tips: "Ensure search is made using both the survey numbers and specific document reference IDs to crosscheck discrepancies."
        },
        mh: {
            portal: "e-ASR & e-Search Portal (Maharashtra)",
            link: "https://igrmaharashtra.gov.in/",
            fee: "Free for basic property lookups. ₹300 per search query for detailed database downloads.",
            duration: "Instant on-screen download for digitized years (generally post-2002).",
            tips: "Select the correct year-wise index type (Index II check) corresponding to the registration period."
        },
        kl: {
            portal: "Pearl Registration Portal (Kerala)",
            link: "https://keralaregistration.gov.in/",
            fee: "₹120 base inspection charge + ₹20 search charge per year.",
            duration: "2 working days.",
            tips: "Requires payment via e-Treasury integration on the portal before submitting the request."
        }
    };
    
    var data = stateData[state];
    resultBox.innerHTML = \'<div style="font-weight: 700; font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">\' + data.portal + \'</div>\' +
        \'<div style="display: grid; grid-template-columns: 1fr; gap: 0.5rem; font-size: 0.95rem; color: #475569; margin-bottom: 1rem;">\' +
            \'<div><strong>Government Charges:</strong> \' + data.fee + \'</div>\' +
            \'<div><strong>Estimated Processing Duration:</strong> \' + data.duration + \'</div>\' +
            \'<div><strong>Important Note:</strong> \' + data.tips + \'</div>\' +
        \'</div>\' +
        \'<a href="\' + data.link + \'" target="_blank" rel="noopener" style="display: inline-block; padding: 0.6rem 1.2rem; border-radius: 6px; background-color: var(--primary); color: #ffffff; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: background 0.2s;">\' +
            \'Go to Official Portal →\' +
        \'</a>\';
}
// Run on initial load
document.addEventListener("DOMContentLoaded", function() {
    updateStateRouter();
});
</script>

<p class="content-text">
    Before starting an <strong>online ec check</strong>, it is vital to know that the registration data is indexed by the State Sub-Registrar Offices (SRO). Therefore, you must have exact details of the property, including the district name, taluk name, village name, survey number, sub-division number, and the specific search timeline (e.g., last 15 years, 30 years, or since 1975). Using a systematic guide ensures that you don\'t end up with empty search results.
</p>

<h2>Why Perform an Online EC Check?</h2>
<p class="content-text">
    A property\'s title can be affected by multiple issues over its history. By completing an <a href="https://econline.in/">ec online</a> verification, you protect your hard-earned savings from several transaction risks:
</p>
<div class="info-grid">
    <div class="info-card">
        <h4 style="margin-top:0; color:var(--primary); font-size:1.1rem; margin-bottom:0.5rem;">1. Mortgage Identification</h4>
        <p class="content-text" style="font-size:0.9rem; margin-bottom:0;">It reveals whether the owner has collateralized the property with a bank or financial institution to secure a home loan or business credit.</p>
    </div>
    <div class="info-card">
        <h4 style="margin-top:0; color:var(--primary); font-size:1.1rem; margin-bottom:0.5rem;">2. Title Continuity Verify</h4>
        <p class="content-text" style="font-size:0.9rem; margin-bottom:0;">You can verify if all prior transfers (sales, partitions, gift deeds) match the legal succession chain, confirming the seller has the actual right to transfer.</p>
    </div>
    <div class="info-card">
        <h4 style="margin-top:0; color:var(--primary); font-size:1.1rem; margin-bottom:0.5rem;">3. Court Attachments Check</h4>
        <p class="content-text" style="font-size:0.9rem; margin-bottom:0;">If a civil court has attached the land or structure due to loan defaults or inheritance disputes, this restriction is recorded at the SRO office.</p>
    </div>
</div>

<p class="content-text">
    Having verified the liabilities, a home buyer can proceed with confidence. If you want to submit a formal application, read our guide on how to <a href="/online-ec-apply/">online ec apply</a>. For downloading digitized copies, refer to our <a href="/online-ec-download/">online ec download</a> document verification portal.
</p>

<!-- Widget 2: Interactive EC Document Status Checker (Simulator) -->
<div class="custom-card" style="margin: 2.5rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="color:var(--secondary);"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        EC Document Status Checker (Simulator)
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Check the status of your online EC application or transaction lookup using this interactive simulation. Enter a mock application number to run a check.
    </p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
        <div>
            <label style="display:block; font-weight:600; margin-bottom:0.5rem; font-size:0.85rem; color:#475569;">Application Number / Query ID</label>
            <input type="text" id="sim-app-number" value="EC/2026/88921" style="width:100%; padding:0.75rem; border-radius:6px; border:1px solid var(--border); font-size:0.95rem;" placeholder="e.g. EC/2026/12345">
        </div>
        <div>
            <label style="display:block; font-weight:600; margin-bottom:0.5rem; font-size:0.85rem; color:#475569;">Select Portal</label>
            <select id="sim-portal" style="width:100%; padding:0.75rem; border-radius:6px; border:1px solid var(--border); font-size:0.95rem; background-color:#fff;">
                <option value="tnreginet">TNREGINET EC Check</option>
                <option value="kaveri">Kaveri Online EC Check</option>
                <option value="tsigrs">IGRS Telangana EC Check</option>
                <option value="apigrs">IGRS Andhra Pradesh EC Check</option>
            </select>
        </div>
    </div>
    
    <button type="button" onclick="startSimulation()" style="width:100%; padding:0.75rem; font-size:1rem; border-radius:6px; background-color:var(--primary); color:#ffffff; font-weight:600; border:none; cursor:pointer; margin-bottom:1.5rem;">
        Run Status Verification
    </button>
    
    <div id="sim-progress-wrapper" style="display:none; margin-bottom:1.5rem;">
        <div style="display:flex; justify-content:space-between; margin-bottom:0.5rem; font-size:0.85rem; font-weight:600; color:#475569;">
            <span id="sim-step-text">Connecting to database...</span>
            <span id="sim-percent">0%</span>
        </div>
        <div style="width:100%; height:8px; background-color:#e2e8f0; border-radius:4px; overflow:hidden;">
            <div id="sim-progress-bar" style="width:0%; height:100%; background-color:var(--primary); transition: width 0.4s ease;"></div>
        </div>
    </div>
    
    <div id="sim-result-wrapper" style="display:none; padding:1.25rem; border-radius:8px; border:1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function startSimulation() {
    var appNum = document.getElementById("sim-app-number").value.trim();
    if (!appNum) {
        alert("Please enter an Application Number to test.");
        return;
    }
    
    var progressWrapper = document.getElementById("sim-progress-wrapper");
    var resultWrapper = document.getElementById("sim-result-wrapper");
    var stepText = document.getElementById("sim-step-text");
    var percentText = document.getElementById("sim-percent");
    var progressBar = document.getElementById("sim-progress-bar");
    
    progressWrapper.style.display = "block";
    resultWrapper.style.display = "none";
    progressBar.style.width = "0%";
    percentText.innerText = "0%";
    
    var steps = [
        { pct: 25, text: "Authenticating token with Registration database..." },
        { pct: 50, text: "Retrieving transaction ledger index files..." },
        { pct: 75, text: "Checking digital certificate signature status..." },
        { pct: 100, text: "Status compilation completed successfully." }
    ];
    
    var currentStep = 0;
    
    function runNextStep() {
        if (currentStep < steps.length) {
            progressBar.style.width = steps[currentStep].pct + "%";
            percentText.innerText = steps[currentStep].pct + "%";
            stepText.innerText = steps[currentStep].text;
            currentStep++;
            setTimeout(runNextStep, 400);
        } else {
            showSimulationResult();
        }
    }
    
    runNextStep();
}

function showSimulationResult() {
    var appNum = document.getElementById("sim-app-number").value;
    var portal = document.getElementById("sim-portal").value;
    var resultWrapper = document.getElementById("sim-result-wrapper");
    
    var portalName = "";
    if (portal === "tnreginet") portalName = "TNREGINET (Tamil Nadu)";
    else if (portal === "kaveri") portalName = "Kaveri Online (Karnataka)";
    else if (portal === "tsigrs") portalName = "IGRS Telangana";
    else if (portal === "apigrs") portalName = "IGRS Andhra Pradesh";
    
    resultWrapper.style.display = "block";
    resultWrapper.style.backgroundColor = "#f0fdf4";
    resultWrapper.style.borderColor = "#bbf7d0";
    
    resultWrapper.innerHTML = \'<div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.75rem;">\' +
            \'<span style="display:inline-block; width:10px; height:10px; border-radius:50%; background-color:#22c55e;"></span>\' +
            \'<strong style="color:#166534; font-size:1.05rem;">APPLICATION STATUS: Approved & Digitally Signed</strong>\' +
        \'</div>\' +
        \'<div style="font-size:0.9rem; color:#1e3a1e; line-height:1.5;">\' +
            \'<div><strong>Application Reference:</strong> \' + appNum + \'</div>\' +
            \'<div><strong>Target Portal:</strong> \' + portalName + \'</div>\' +
            \'<div><strong>Digital Signature Status:</strong> Verified (Approved by Sub-Registrar)</div>\' +
            \'<div style="margin-top:0.75rem; font-style:italic; color:#3f6212;">Note: This simulation shows how a finalized EC appears. In the actual state portal, you would now click the "Download PDF" icon to inspect the stamp.</div>\' +
        \'</div>\';
}
</script>

<h2>How to Do an Online EC Check: Detailed State Manuals</h2>
<p class="content-text">
    The steps to execute an <a href="https://econline.in/">ec online</a> inspection differ by state. Below are the precise workflows for the four major southern states:
</p>

<h3>1. Tamil Nadu (TNREGINET)</h3>
<p class="content-text">
    Tamil Nadu has a highly digitized registration department. Homebuyers can execute a free search for draft copies. If you are looking to run an <a href="https://econline.in/">ec online</a> lookup, the portal lists properties based on exact boundary directions.
</p>
<ul class="guide-list">
    <li>Go to the official portal: <strong>tnreginet.gov.in</strong>.</li>
    <li>Navigate to the top menu and hover over <strong>"E-Services"</strong>, then select <strong>"Encumbrance Certificate"</strong> → <strong>"View EC"</strong>.</li>
    <li>Choose between <strong>EC Document Wise</strong> (if you know the deed document number, SRO, and year) or <strong>Property Wise</strong>.</li>
    <li>For Property Wise, enter the District, Sub-Registrar Office, Taluk, Village, and Survey Number. Enter the subdivision field if applicable.</li>
    <li>Input the start date and end date for search history and submit.</li>
</ul>
<p class="content-text">
    For detailed guidelines, read our dedicated <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> guide or look up <a href="/tn-ec-online/">tn ec online</a> directories for quick check links.
</p>

<h3>2. Karnataka (Kaveri Portal)</h3>
<p class="content-text">
    Karnataka requires citizens to log in to search the land registry databases. To run a standard <a href="https://econline.in/">ec online</a> verify on Kaveri 2.0, you must first register as a citizen.
</p>
<ul class="guide-list">
    <li>Visit the Kaveri 2.0 website: <strong>kaverionline.karnataka.gov.in</strong>.</li>
    <li>Log in using your credentials. If you are a new user, register your account using PAN or Aadhaar card validation.</li>
    <li>Under the services panel, click on <strong>"Online EC Search"</strong>.</li>
    <li>Select the property type (Agricultural or Non-Agricultural), district, SRO, hobli, and village index.</li>
    <li>Enter the search boundaries, survey details, and choose the timeline. The draft list will load on-screen.</li>
</ul>
<p class="content-text">
    Learn more details in our <a href="/online-ec-karnataka/">online ec karnataka</a> handbook and the <a href="/ec-online-karnataka/">ec online karnataka</a> verification page.
</p>

<h3>3. Telangana (IGRS TS)</h3>
<p class="content-text">
    Telangana offers property ledger inspection on the IGRS portal. If the portal returns Nil, downloading the official <a href="https://econline.in/">ec online</a> ledger provides peace of mind before bank mortgage processes.
</p>
<ul class="guide-list">
    <li>Visit the portal: <strong>registration.telangana.gov.in</strong>.</li>
    <li>Click on the <strong>"Encumbrance Search (EC)"</strong> button on the landing dashboard.</li>
    <li>Read the user terms and conditions disclaimer page and click "Submit".</li>
    <li>Log in using your portal credentials. Enter your survey number or document number to look up records.</li>
</ul>
<p class="content-text">
    To locate TS registration offices, review our <a href="/ec-online-telangana/">ec online telangana</a> manual or research on <a href="/ec-telangana-online-search/">ec telangana online search</a> databases.
</p>

<h3>4. Andhra Pradesh (IGRS AP)</h3>
<p class="content-text">
    Andhra Pradesh uses the IGRS portal to search land records. If you want to perform an <a href="https://econline.in/">ec online</a> audit, make sure you compile all past survey subdivisions first.
</p>
<ul class="guide-list">
    <li>Go to the portal: <strong>registration.ap.gov.in</strong>.</li>
    <li>Click the <strong>"Encumbrance Certificate"</strong> button on the quick services panel.</li>
    <li>Select search criteria: Document Number, Memo Number, or None (to search by survey number).</li>
    <li>Enter SRO office codes and village details. Complete the search checklist.</li>
</ul>
<p class="content-text">
    For AP land details, read the <a href="/online-ec-ap/">online ec ap</a> registry directory.
</p>

<!-- Widget 3: EC Search Error Troubleshooter (Diagnostic Tool) -->
<div class="custom-card" style="margin: 2.5rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #fefefe 0%, #f8fafc 100%);">
    <h3 style="margin-top:0; color:#1e293b; margin-bottom:0.5rem; display:flex; align-items:center; gap:0.5rem;">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="color:var(--accent);"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        EC Search Error Troubleshooter
    </h3>
    <p class="content-text" style="font-size:0.9rem; color:var(--text-muted); margin-bottom:1.5rem;">
        Are you encountering an error while running an online EC check? Click on your symptom below to diagnose potential solutions and workarounds.
    </p>
    
    <div style="display:flex; flex-direction:column; gap:0.75rem; margin-bottom:1.5rem;">
        <button type="button" onclick="diagnose(\'no_record\')" style="text-align:left; padding:0.75rem 1rem; border-radius:6px; border:1px solid var(--border); background-color:#fff; color:#334155; font-weight:600; cursor:pointer; font-size:0.9rem; transition:all 0.2s;">
            Symptom 1: Portal returns "No Record Found"
        </button>
        <button type="button" onclick="diagnose(\'no_village\')" style="text-align:left; padding:0.75rem 1rem; border-radius:6px; border:1px solid var(--border); background-color:#fff; color:#334155; font-weight:600; cursor:pointer; font-size:0.9rem; transition:all 0.2s;">
            Symptom 2: SRO dropdown does not list my village
        </button>
        <button type="button" onclick="diagnose(\'sig_error\')" style="text-align:left; padding:0.75rem 1rem; border-radius:6px; border:1px solid var(--border); background-color:#fff; color:#334155; font-weight:600; cursor:pointer; font-size:0.9rem; transition:all 0.2s;">
            Symptom 3: Digitally signed PDF displays "?" error in Adobe
        </button>
    </div>
    
    <div id="diagnostic-result" style="display:none; padding:1.25rem; border-radius:8px; border:1px solid var(--border); background-color:#ffffff;">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function diagnose(symptom) {
    var resultBox = document.getElementById("diagnostic-result");
    resultBox.style.display = "block";
    resultBox.style.transition = "all 0.3s ease";
    
    if (symptom === "no_record") {
        resultBox.innerHTML = 
            "<div style=\\"font-weight:700; color:#c2410c; margin-bottom:0.5rem;\\">Diagnosis: Search Boundary or Survey Number Mismatch</div>" +
            "<p style=\\"font-size:0.9rem; color:#475569; margin:0 0 0.75rem 0; line-height:1.5;\\">" +
                "This error happens when the portal database has a different formatting convention than your search input. For example, <code>142/3A</code> might be stored as survey <code>142</code> and subdivision <code>3A</code>, or sometimes without any slash as <code>1423A</code>." +
            "</p>" +
            "<div style=\\"font-size:0.9rem; font-weight:600; color:#1e293b;\\">Workarounds:</div>" +
            "<ol style=\\"font-size:0.85rem; color:#475569; padding-left:1.25rem; margin:0.25rem 0 0 0;\\">" +
                "<li>Try searching with only the parent survey number (e.g. <code>142</code>) and leave the subdivision blank to see all matching subdivision results in the portal ledger list.</li>" +
                "<li>Verify your boundaries directions (North, South, East, West). Try entering simpler descriptions.</li>" +
            "</ol>";
    } else if (symptom === "no_village") {
        resultBox.innerHTML = 
            "<div style=\\"font-weight:700; color:#c2410c; margin-bottom:0.5rem;\\">Diagnosis: Jurisdictional Restructuring or Alternate Village Spelling</div>" +
            "<p style=\\"font-size:0.9rem; color:#475569; margin:0 0 0.75rem 0; line-height:1.5;\\">" +
                "If your village name is missing in the dropdown menu for the selected SRO, the registration office jurisdiction might have changed recently, or the village is indexed under an alternate historical spelling in the revenue records database." +
            "</p>" +
            "<div style=\\"font-size:0.9rem; font-weight:600; color:#1e293b;\\">Workarounds:</div>" +
            "<ol style=\\"font-size:0.85rem; color:#475569; padding-left:1.25rem; margin:0.25rem 0 0 0;\\">" +
                "<li>Search the state revenue department website to find which SRO code covers your survey numbers.</li>" +
                "<li>Check adjacent SRO dropdown lists in the menu to verify if the village is still indexed under the parent SRO location.</li>" +
            "</ol>";
    } else if (symptom === "sig_error") {
        resultBox.innerHTML = 
            "<div style=\\"font-weight:700; color:#c2410c; margin-bottom:0.5rem;\\">Diagnosis: Unverified Digital Root Certificate Authority</div>" +
            "<p style=\\"font-size:0.9rem; color:#475569; margin:0 0 0.75rem 0; line-height:1.5;\\">" +
                "The \\"?\\" question mark indicates that Adobe Acrobat Reader on your device has not yet trusted the State Sub-Registrar\'s digital signature certificate chain." +
            "</p>" +
            "<div style=\\"font-size:0.9rem; font-weight:600; color:#1e293b;\\">Workarounds:</div>" +
            "<ol style=\\"font-size:0.85rem; color:#475569; padding-left:1.25rem; margin:0.25rem 0 0 0;\\">" +
                "<li>Open the EC PDF document using standard Adobe Acrobat on a PC (not inside web browser view).</li>" +
                "<li>Right-click on the signature box displaying the \\"?\\" sign, choose <strong>\\"Signature Properties\\"</strong>.</li>" +
                "<li>Click <strong>\\"Show Signer\'s Certificate\\"</strong>, select the <strong>\\"Trust\\"</strong> tab, click <strong>\\"Add to Trusted Certificates\\"</strong>, and choose trust for all options. Revalidate the signature.</li>" +
            "</ol>";
    }
}
</script>

<h2>Understanding Encumbrance Certificate Terminology</h2>
<p class="content-text">
    When you verify the document draft after an <strong>online ec check</strong>, you will see a table formatted with specific columns. Understanding these terms is necessary to avoid transaction mistakes:
</p>
<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">EC Term</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Meaning / Definition</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Impact on Title</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Executant</td>
                <td style="padding: 12px; border: 1px solid var(--border);">The party executing the transaction (e.g. the seller, donor, or mortgagor).</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Confirms who is transferring or liability-linking the property title.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Claimant</td>
                <td style="padding: 12px; border: 1px solid var(--border);">The party receiving the title benefit (e.g. the buyer, donee, or bank).</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Specifies who currently holds or has a security claim on the property.</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Schedule of Property</td>
                <td style="padding: 12px; border: 1px solid var(--border);">The exact description of boundaries, land survey, and measurements.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Determines the exact limits and area size of the legal ownership deed.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Nil Encumbrance</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Indicates no transactions have been registered during the search window.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Clear indicator that no loans or transfers were indexed in the selected timeline.</td>
            </tr>
        </tbody>
    </table>
</div>

<p class="content-text">
    To ensure your land mutation matches these details, always verify the Patta or RTC document after the search. For online database records, check our <a href="/online-ec-search/">online ec search</a> handbook or lookup registry guides.
</p>

<h2>Best Practices for Property Title Verification</h2>
<p class="content-text">
    Executing an <strong>online ec check</strong> is the first step, but not the final step of due diligence. To ensure maximum legal security for your transaction, follow these additional practices:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Run Search for 30 Years</strong>: While banks require a minimum of 13 or 15 years search history for home loans, a 30-year search is recommended to rule out old partition deeds or minor inheritance claims.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Compare EC with Mother Deed</strong>: Check every transaction date, book reference, and page number in the online EC ledger against the physical documents given by the seller.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Verify Prohibited Lands Database</strong>: Some state portals feature a prohibited property list. Check if the survey number falls under public utilities, forest land, or waqf property categories.</li>
</ol>
<p class="content-text">
    If you need to retrieve state registry details or run additional searches, refer to the <a href="/online-ec-search/">online ec search</a> tools, review the <a href="/ec-online-tamil/">ec online tamil</a> resources, or search for TS records on the <a href="/ec-telangana-online-search/">ec telangana online search</a> index. The main portal can always be accessed via the homepage references.
</p>';
    $faq_oech = '[{"question":"How long is an online EC check valid?","answer":"An EC check shows the property history up to the date and time of the search. It does not have an expiration date, but when performing a new transaction, you should run a fresh check to ensure no new liabilities have been registered."},{"question":"Can I run an online EC check for free?","answer":"Yes, in states like Tamil Nadu and Maharashtra, you can search and view basic transaction details on-screen for free. However, if you require a signed certified copy for bank loans or legal disputes, a small government fee is charged."},{"question":"What is the difference between Nil EC and Encumbered EC?","answer":"A Nil EC means there are no registered transaction records (sales, mortgages, or court attachments) during the specified search period. An Encumbered EC displays a list of all registered transactions and liabilities on the property."},{"question":"What should I do if my survey number is not in the portal?","answer":"If the survey number is not found, verify that you selected the correct village and SRO. If the portal still does not display it, you should visit the physical Sub-Registrar Office to submit a manual search request."}]';
    $schema_type_oech = 'Article';

    $stmt->execute([
        'slug' => $slug_oech,
        'keyword' => $keyword_oech,
        'title' => $title_oech,
        'meta_desc' => $meta_desc_oech,
        'h1_title' => $h1_oech,
        'content' => $content_oech,
        'faq_data' => $faq_oech,
        'schema_type' => $schema_type_oech
    ]);

    // --- 20. AUTO-INITIALIZE EC VIEW ONLINE TAMILNADU PAGE ---
    $slug_evot = 'ec-view-online-tamilnadu';
    $keyword_evot = 'ec view online tamilnadu';
    $title_evot = 'EC View Online Tamilnadu: Search Land Encumbrance Records';
    $h1_evot = 'EC View Online Tamilnadu: Step-by-Step Property Guide';
    $meta_desc_evot = 'Detailed instructions to execute an EC view online Tamilnadu on the TNREGINET registration department website. Learn to search, inspect property deeds, and download PDFs.';
    $content_evot = '<p class="content-text">
    Viewing an Encumbrance Certificate (EC) online is a crucial step in property transactions across Tamil Nadu. The Registration Department of Tamil Nadu (TNREGINET) provides an electronic search system for citizen convenience. Whether you are validating a residential plot, verifying a villa, or analyzing commercial land, performing an <a href="https://econline.in/">ec online</a> lookup allows you to confirm that the seller holds an unencumbered title.
</p>

<!-- Widget 1: TNREGINET SRO Finder -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border: 1px solid var(--border);">
    <h3 style="margin-top:0; color:var(--primary); margin-bottom:0.5rem; display:flex; align-items:center; gap:0.5rem;">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="color:var(--primary);"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        TNREGINET SRO Finder
    </h3>
    <p class="content-text" style="font-size:0.9rem; color:var(--text-muted); margin-bottom:1.5rem;">
        Find the respective Sub-Registrar Office (SRO) zone information for major districts in Tamil Nadu to avoid choosing the wrong office during your search.
    </p>
    <div style="margin-bottom:1.5rem;">
        <label for="district-selector" style="display:block; font-weight:600; margin-bottom:0.5rem; color:#1e293b;">Select District Zone:</label>
        <select id="district-selector" onchange="updateSROList()" style="width:100%; padding:0.75rem; border-radius:6px; border:1px solid var(--border); font-size:1rem; color:#1e293b; background-color:#fff;">
            <option value="chennai">Chennai (North/South/Central)</option>
            <option value="cbe">Coimbatore Zone</option>
            <option value="madurai">Madurai Zone</option>
            <option value="trichy">Trichy Zone</option>
            <option value="salem">Salem Zone</option>
        </select>
    </div>
    
    <div id="sro-result" style="background-color:#ffffff; padding:1.25rem; border-radius:8px; border:1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function updateSROList() {
    var zone = document.getElementById("district-selector").value;
    var resultBox = document.getElementById("sro-result");
    
    var zoneData = {
        chennai: {
            desc: "Chennai District is split into Chennai North, South, and Central zones.",
            offices: [
                { sro: "SRO Adyar", address: "Kamaraj Avenue, Adyar, Chennai - 600020", code: "SRO-ADY" },
                { sro: "SRO Mylapore", address: "Justice Ramasamy Street, Mylapore, Chennai - 600004", code: "SRO-MYL" },
                { sro: "SRO Tambaram", address: "Rajaji Road, Tambaram, Chennai - 600045", code: "SRO-TAM" }
            ]
        },
        cbe: {
            desc: "Coimbatore region coordinates registrations for western districts.",
            offices: [
                { sro: "SRO Coimbatore Central", address: "State Bank Road, Coimbatore - 641018", code: "SRO-CBE-C" },
                { sro: "SRO Singanallur", address: "Trichy Road, Singanallur, Coimbatore - 641005", code: "SRO-SNG" },
                { sro: "SRO Ganapathy", address: "Sathy Road, Ganapathy, Coimbatore - 641006", code: "SRO-GNP" }
            ]
        },
        madurai: {
            desc: "Madurai registry covers southern districts registration archives.",
            offices: [
                { sro: "SRO Madurai South", address: "Palace Road, Madurai - 625001", code: "SRO-MDU-S" },
                { sro: "SRO Tallakulam", address: "Alagar Kovil Road, Tallakulam, Madurai - 625002", code: "SRO-TAL" }
            ]
        },
        trichy: {
            desc: "Trichy zone encompasses central delta districts land indices.",
            offices: [
                { sro: "SRO Trichy Joint 1", address: "Court Complex Road, Cantonment, Trichy - 620001", code: "SRO-TRY-J1" },
                { sro: "SRO Srirangam", address: "Gandhi Road, Srirangam, Trichy - 620006", code: "SRO-SRG" }
            ]
        },
        salem: {
            desc: "Salem registration district indexes records for steel city boundaries.",
            offices: [
                { sro: "SRO Salem Joint 1", address: "District Collectorate Campus, Salem - 636001", code: "SRO-SLM-J1" },
                { sro: "SRO Sooramangalam", address: "Steel Plant Road, Sooramangalam, Salem - 636005", code: "SRO-SOR" }
            ]
        }
    };
    
    var data = zoneData[zone];
    var listHTML = \'<div style="font-weight:700; color:var(--primary); margin-bottom:0.5rem;">\' + data.desc + \'</div>\' +
        \'<div style="display:flex; flex-direction:column; gap:0.75rem; margin-top:0.75rem;">\';
        
    for (var i = 0; i < data.offices.length; i++) {
        listHTML += \'<div style="padding:0.75rem; border-left:4px solid var(--primary); background-color:#f8fafc; font-size:0.9rem;">\' +
            \'<div style="font-weight:600; color:#1e293b;">\' + data.offices[i].sro + \' (\' + data.offices[i].code + \')</div>\' +
            \'<div style="color:#64748b; font-size:0.85rem;">\' + data.offices[i].address + \'</div>\' +
        \'</div>\';
    }
    listHTML += \'</div>\';
    resultBox.innerHTML = listHTML;
}
document.addEventListener("DOMContentLoaded", function() {
    updateSROList();
});
</script>

<p class="content-text">
    To carry out an <strong>ec view online tamilnadu</strong> verification search, users must access the official portal of TNREGINET. The website is managed by the Registration Department, Government of Tamil Nadu, and provides bilingual options (Tamil and English). Homebuyers can look up document details, verify survey records, and trace the history of land sales over several decades.
</p>

<h2>Importance of Checking EC in Tamil Nadu</h2>
<p class="content-text">
    In Tamil Nadu\'s real estate market, encumbrances can stem from ancestral partition disputes, unreleased bank mortgages, or lease agreements. Performing an <a href="https://econline.in/">ec online</a> lookup is essential for several reasons:
</p>
<ul class="guide-list">
    <li><strong>Verifying Prior Transfers</strong>: Confirming that the seller is the sole owner and has not executed any unregistered power of attorney (POA) or sale agreement with other parties.</li>
    <li><strong>Detecting Bank Liens</strong>: Checking if the property has a pending mortgage. If a bank has registered an equitable mortgage, the land title remains encumbered until a release deed is registered.</li>
    <li><strong>Identifying Prohibited Lands</strong>: TNREGINET keeps records of prohibited land categories, such as government properties, temple lands (devastanam), and public utility lands. Checking these indices prevents fraudulent transactions.</li>
</ul>

<p class="content-text">
    For state-specific search procedures, consult our guides like <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> or check the <a href="/tn-ec-online/">tn ec online</a> page. For checking the latest document status, use the <a href="/online-ec-check/">online ec check</a> portal.
</p>

<!-- Widget 2: Interactive TN Fee Calculator -->
<div class="custom-card" style="margin:2.5rem 0; padding:2rem; border-radius:12px; border:1px solid var(--border); background-color:#ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top:0; color:#0f172a; margin-bottom:0.5rem; display:flex; align-items:center; gap:0.5rem;">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="color:var(--secondary);"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 11h.01M12 7h.01M15 11h.01M3 21h18a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        TNREGINET EC Fee Calculator
    </h3>
    <p class="content-text" style="font-size:0.9rem; color:var(--text-muted); margin-bottom:1.5rem;">
        Estimate the official government fee required for search and compilation. Basic on-screen viewing is free. Certified signed copies incur charges.
    </p>
    
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1rem;">
        <div>
            <label style="display:block; font-weight:600; margin-bottom:0.5rem; font-size:0.85rem; color:#475569;">Search Start Year</label>
            <input type="number" id="fee-start-year" value="2010" min="1975" max="2026" style="width:100%; padding:0.75rem; border-radius:6px; border:1px solid var(--border); font-size:0.95rem;">
        </div>
        <div>
            <label style="display:block; font-weight:600; margin-bottom:0.5rem; font-size:0.85rem; color:#475569;">Search End Year</label>
            <input type="number" id="fee-end-year" value="2026" min="1975" max="2026" style="width:100%; padding:0.75rem; border-radius:6px; border:1px solid var(--border); font-size:0.95rem;">
        </div>
    </div>
    
    <div style="margin-bottom:1.5rem; display:flex; align-items:center; gap:0.5rem;">
        <input type="checkbox" id="certified-copy-required" style="width:18px; height:18px; cursor:pointer;">
        <label for="certified-copy-required" style="font-size:0.9rem; color:#334155; font-weight:600; cursor:pointer;">Request Digitally Signed Certified Copy (+ ₹100 post/copy fee)</label>
    </div>
    
    <button type="button" onclick="calculateTNFees()" style="width:100%; padding:0.75rem; font-size:1rem; border-radius:6px; background-color:var(--primary); color:#ffffff; font-weight:600; border:none; cursor:pointer; margin-bottom:1.5rem;">
        Calculate Government Charges
    </button>
    
    <div id="fee-calculator-result" style="display:none; padding:1.25rem; border-radius:8px; border:1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateTNFees() {
    var start = parseInt(document.getElementById("fee-start-year").value);
    var end = parseInt(document.getElementById("fee-end-year").value);
    var certified = document.getElementById("certified-copy-required").checked;
    var resultBox = document.getElementById("fee-calculator-result");
    
    if (isNaN(start) || isNaN(end) || start > end || start < 1975 || end > 2026) {
        alert("Please enter valid start and end years (1975-2026) ensuring start year is less than or equal to end year.");
        return;
    }
    
    var totalYears = end - start + 1;
    var searchFee = 15; // base fee first year
    if (totalYears > 1) {
        searchFee += (totalYears - 1) * 5; // subsequent years
    }
    
    var copyFee = certified ? 100 : 0;
    var totalFee = searchFee + copyFee;
    
    resultBox.style.display = "block";
    resultBox.style.backgroundColor = "#f8fafc";
    resultBox.style.borderColor = "var(--border)";
    
    resultBox.innerHTML = \'<div style="font-weight:700; color:var(--primary); margin-bottom:0.75rem; font-size:1.1rem;">TNREGINET Search Fee Breakup:</div>\' +
        \'<div style="font-size:0.95rem; color:#334155; line-height:1.6;">\' +
            \'<div><strong>Search History Duration:</strong> \' + totalYears + \' Year(s)</div>\' +
            \'<div><strong>Base Search Fee (1st Year):</strong> ₹15</div>\' +
            \'<div><strong>Subsequent Years Fee (₹5/yr):</strong> ₹\' + (totalYears > 1 ? (totalYears - 1) * 5 : 0) + \'</div>\' +
            \'<div><strong>Application & Certified Copy Charges:</strong> ₹\' + copyFee + \'</div>\' +
            \'<div style="border-top:1px solid var(--border); margin-top:0.75rem; padding-top:0.75rem; font-size:1.1rem; font-weight:700; color:#0f172a;">\' +
                \'Total Fee Payable: ₹\' + totalFee + 
            \'</div>\' +
            \'<div style="font-size:0.8rem; color:#64748b; margin-top:0.5rem; font-style:italic;">Note: If you only view the EC on-screen without requiring a certified signature, the fee is ₹0 (Free Search).</div>\' +
        \'</div>\';
}
</script>

<h2>How to Search and View EC on TNREGINET</h2>
<p class="content-text">
    To execute an <a href="https://econline.in/">ec online</a> lookup on the TNREGINET website, you must follow the steps below. This process is structured to prevent search failures and ensure accurate data retrieval:
</p>

<h3>Step 1: Navigate to the View EC Section</h3>
<p class="content-text">
    Go to the official website of the Tamil Nadu Registration Department at <strong>tnreginet.gov.in</strong>. In the header menu, hover over <strong>"E-Services"</strong>, slide your cursor down to <strong>"Encumbrance Certificate"</strong>, and click <strong>"View EC"</strong>. This directs you to the property query portal page.
</p>

<h3>Step 2: Enter Property Search Criteria</h3>
<p class="content-text">
    The portal provides two methods to search for records:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;">
        <strong>Property Wise Search</strong>: Select this option to locate records using boundary and survey codes. You must enter the District, Sub-Registrar Office, Taluk, Village, and Survey Number.
    </li>
    <li style="margin-bottom: 0.5rem;">
        <strong>Document Wise Search</strong>: Select this option if you know the document registration reference. You must input the SRO code, Document Number, and Year of registration.
    </li>
</ol>

<h3>Step 3: Enter Survey and Subdivision Fields</h3>
<p class="content-text">
    If you selected Property Wise Search, entering the survey details accurately is necessary. In Tamil Nadu, properties are split into subdivisions. Enter the parent survey number in the first box and the subdivision text in the second box.
</p>

<!-- Widget 3: Survey Division & Subdivision Formatter Helper -->
<div class="custom-card" style="margin:2.5rem 0; padding:2rem; border-radius:12px; border:1px solid var(--border); background: linear-gradient(135deg, #fefefe 0%, #f8fafc 100%);">
    <h3 style="margin-top:0; color:#1e293b; margin-bottom:0.5rem; display:flex; align-items:center; gap:0.5rem;">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="color:var(--accent);"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Survey Division Formatter
    </h3>
    <p class="content-text" style="font-size:0.9rem; color:var(--text-muted); margin-bottom:1.5rem;">
        Input your survey code (e.g., "142/3A" or "402-A") to split it into the standard format required by the TNREGINET database search engine.
    </p>
    
    <div style="margin-bottom:1rem;">
        <label style="display:block; font-weight:600; margin-bottom:0.5rem; font-size:0.85rem; color:#475569;">Enter Full Survey Code</label>
        <input type="text" id="raw-survey-input" value="142/3A" style="width:100%; padding:0.75rem; border-radius:6px; border:1px solid var(--border); font-size:0.95rem;" placeholder="e.g. 102/4B">
    </div>
    
    <button type="button" onclick="formatSurveyCode()" style="width:100%; padding:0.75rem; font-size:1rem; border-radius:6px; background-color:var(--primary); color:#ffffff; font-weight:600; border:none; cursor:pointer; margin-bottom:1.5rem;">
        Format Survey Code
    </button>
    
    <div id="survey-formatter-result" style="display:none; padding:1.25rem; border-radius:8px; border:1px solid var(--border); background-color:#ffffff;">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function formatSurveyCode() {
    var rawInput = document.getElementById("raw-survey-input").value.trim();
    var resultBox = document.getElementById("survey-formatter-result");
    
    if (!rawInput) {
        alert("Please enter a survey number to format.");
        return;
    }
    
    var surveyPart = rawInput;
    var subdivisionPart = "";
    
    var separatorIdx = rawInput.indexOf("/");
    if (separatorIdx === -1) {
        separatorIdx = rawInput.indexOf("-");
    }
    
    if (separatorIdx !== -1) {
        surveyPart = rawInput.substring(0, separatorIdx).trim();
        subdivisionPart = rawInput.substring(separatorIdx + 1).trim();
    }
    
    resultBox.style.display = "block";
    resultBox.style.borderColor = "var(--border)";
    resultBox.style.backgroundColor = "#f8fafc";
    
    resultBox.innerHTML = \'<div style="font-weight:700; color:var(--primary); margin-bottom:0.5rem;">Suggested Field Split for Portal:</div>\' +
        \'<div style="font-size:0.95rem; color:#334155; line-height:1.6;">\' +
            \'<div><strong>Survey Number Box:</strong> <code>\' + surveyPart + \'</code></div>\' +
            \'<div><strong>Subdivision Number Box:</strong> <code>\' + (subdivisionPart ? subdivisionPart : \'None\') + \'</code></div>\' +
            \'<div style="margin-top:0.75rem; font-size:0.85rem; color:#64748b; font-style:italic;">\' +
                \'Tip: If your subdivision has letters (like A, B, C), type them in UPPERCASE as TNREGINET is case-sensitive for index lookups.\' +
            \'</div>\' +
        \'</div>\';
}
</script>

<h3>Step 4: View the PDF Output</h3>
<p class="content-text">
    After entering the start year and end year, complete the security Captcha code and click <strong>"Search"</strong>. The portal will generate a link to download the EC PDF document. This is a draft version. If you require a certified copy, log in to your account, make a payment, and download the digitally signed certificate.
</p>

<p class="content-text">
    To trace document listings in detail, read our <a href="/online-ec-view-tamilnadu/">online ec view tamilnadu</a> manual or research TN registries at the <a href="/tnreginet-ec-view-online/">tnreginet ec view online</a> page.
</p>

<h2>Understanding Your TN Encumbrance Certificate</h2>
<p class="content-text">
    When you perform an <a href="https://econline.in/">ec online</a> lookup, the generated PDF document features a detailed ledger listing. The ledger has columns such as Serial Number, Date of Registration, Document Number, Volume/Book reference, Executant details, Claimant details, and Schedule of property. Understanding these fields ensures that you don\'t overlook critical property risks:
</p>
<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Column Name</th>
                <th style="padding: 12px; border: 1px solid var(--border);">What it Contains</th>
                <th style="padding: 12px; border: 1px solid var(--border);">What you should check</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Registration Date</td>
                <td style="padding: 12px; border: 1px solid var(--border);">The exact calendar date when the deed was registered at the SRO.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Ensure the transaction timeline matches the dates written in the physical sale deed.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Document Number</td>
                <td style="padding: 12px; border: 1px solid var(--border);">The registration ID assigned by the SRO (e.g. Doc 1234/2026).</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Verify that the parent deed document reference number appears in this database column.</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Executant (Seller)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">The seller or power agent executing the transfer of title.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Cross-reference if the executant\'s name matches the current owner listed on the Patta document.</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Claimant (Buyer)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">The buyer, bank, or mortgagee receiving the title or security lien.</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Ensure no bank name is listed as a claimant unless the loan is fully discharged.</td>
            </tr>
        </tbody>
    </table>
</div>

<p class="content-text">
    To perform an <a href="https://econline.in/">ec online</a> lookup for verification of other southern regions, consult the <a href="/online-ec-check/">online ec check</a> reference system or check regional land records.
</p>

<h2>Best Practices for Property Buying in Tamil Nadu</h2>
<p class="content-text">
    An <a href="https://econline.in/">ec online</a> lookup is a primary step, but property buyers should execute these additional checks to ensure a secure transaction:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Obtain Patta Mutation copy</strong>: Always verify the Patta copy on the Tamil Nadu e-Services website (eservices.tn.gov.in) to confirm mutation is completed and current land boundaries match SRO database indices.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Verify Layout Approval</strong>: Confirm if the plot is DTCP (Directorate of Town and Country Planning) or CMDA (Chennai Metropolitan Development Authority) approved to prevent regularization issues.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Check for Prohibited Properties</strong>: Review the prohibited register list on the TNREGINET website before making advance payments to ensure the property can be legally transferred.</li>
</ol>
<p class="content-text">
    If you want to read more about land record verification processes, check out the <a href="/tn-ec-online/">tn ec online</a> overview, review the <a href="/online-ec-tamilnadu/">online ec tamilnadu</a> portal guides, or verify documents on the <a href="/online-ec-check/">online ec check</a> system. Homepage details can be retrieved at the main web server location.
</p>';
    $faq_evot = '[{"question":"Can I view my EC online in Tamil Nadu for free?","answer":"Yes, the draft copy of the EC can be searched, viewed, and downloaded as a PDF on the TNREGINET portal completely free of charge. You do not need to pay any fee for this search."},{"question":"From which year is the online EC view available in Tamil Nadu?","answer":"Online EC data in Tamil Nadu is available from 1975 to the present day for all digitized zones. For records prior to 1975, you must visit the physical SRO location to submit a manual application."},{"question":"How can I find which SRO my village belongs to?","answer":"You can use the official TNREGINET Help utility under \"Know your Jurisdiction\" where you input your street or village name to get the exact SRO and District codes."},{"question":"Does the on-screen EC draft count as a legal document?","answer":"No, the free draft copy is only for inspection and reference. For bank loans, property registrations, or court disputes, you must apply for and pay for a digitally signed certified copy."}]';
    $schema_type_evot = 'Article';

    $stmt->execute([
        'slug' => $slug_evot,
        'keyword' => $keyword_evot,
        'title' => $title_evot,
        'meta_desc' => $meta_desc_evot,
        'h1_title' => $h1_evot,
        'content' => $content_evot,
        'faq_data' => $faq_evot,
        'schema_type' => $schema_type_evot
    ]);

} catch (PDOException $e) {
    // Fail silently in production
}







