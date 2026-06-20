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
    $content_tn = '<!-- Custom Interactive Styles -->
<style>
    .toolkit-container {
        margin: 2rem 0;
    }
    .utility-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    @media (max-width: 768px) {
        .utility-grid {
            grid-template-columns: minmax(0, 1fr);
        }
    }
    .widget-panel {
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 1.75rem;
        box-shadow: var(--shadow-sm);
        transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
    }
    @media (max-width: 600px) {
        .widget-panel {
            padding: 1.25rem;
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
        font-size: 1.2rem;
        margin-bottom: 0;
        color: var(--primary);
    }
    .widget-icon {
        font-size: 1.5rem;
    }
    .form-group {
        margin-bottom: 1rem;
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
    }
    .form-select:focus, .form-input:focus {
        border-color: var(--accent);
    }
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

    /* Portal Grid */
    .portal-quick-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
    }
    @media (max-width: 900px) {
        .portal-quick-grid {
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        }
    }
    @media (max-width: 480px) {
        .portal-quick-grid {
            grid-template-columns: minmax(0, 1fr);
        }
    }
    .portal-btn {
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
    .portal-btn:hover {
        border-color: var(--accent);
        background-color: #eff6ff;
        color: var(--accent);
        transform: translateY(-2px);
    }
    .portal-btn-icon {
        font-size: 1.5rem;
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
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 0.5rem;">
                    <label style="font-weight: 500; cursor: pointer; display: flex; align-items: center; gap: 0.25rem;">
                        <input type="radio" name="calc-type" value="view" checked> View EC (Free Check)
                    </label>
                    <label style="font-weight: 500; cursor: pointer; display: flex; align-items: center; gap: 0.25rem;">
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
    <div style="overflow-x: auto; margin: 1.5rem 0; width: 100%;">
        <table class="comparison-table" style="width:100%; border-collapse: collapse; margin: 0; min-width: 500px;">
            <thead>
                <tr style="background-color: var(--primary); color: white; border-bottom: 2px solid var(--border);">
                    <th style="padding: 12px; text-align: left; font-weight: 600;">Feature</th>
                    <th style="padding: 12px; text-align: left; font-weight: 600;">Free View EC</th>
                    <th style="padding: 12px; text-align: left; font-weight: 600;">Certified Copy (Paid)</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 12px; font-weight: 600; border: 1px solid var(--border);">Purpose</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">Quick checking, title inspection, verification.</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">Bank loans, court submissions, registration.</td>
                </tr>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 12px; font-weight: 600; border: 1px solid var(--border);">Fee</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">Free of Cost (₹0)</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">₹15 per search year + Application Fees</td>
                </tr>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 12px; font-weight: 600; border: 1px solid var(--border);">Legality</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">Informational only, not legally binding.</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">Contains Digital Signature, legally admissible.</td>
                </tr>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 12px; font-weight: 600; border: 1px solid var(--border);">Time taken</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">Instant (Few seconds)</td>
                    <td style="padding: 12px; border: 1px solid var(--border);">2 to 7 working days for officer approval.</td>
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

} catch (PDOException $e) {
    // Fail silently in production
}
