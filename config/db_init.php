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
            <a href="#tn-guide" class="btn-primary">View TN Guide</a>
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

} catch (PDOException $e) {
    // Fail silently in production
}
