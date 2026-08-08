<?php
return array (
  'slug' => 'tnreginet-ec-view',
  'keyword' => 'tnreginet ec view, ecview tnreginet, tnreginet net ec view, tnreginet ec online view, villangam download online',
  'title' => 'TNREGINET EC View: Online Encumbrance Certificate (2026)',
  'meta_desc' => 'How to use TNREGINET EC View online search service. View Villangam certificates by document number, survey number, or plot details in Tamil Nadu.',
  'h1_title' => 'TNREGINET EC View: Online Villangam Certificate Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"How do I perform a TNREGINET EC View search by Document Number?","answer":"Select \'Document Wise\' search under TNREGINET EC View, choose your Sub-Registrar Office (SRO), select Document Type (Regular / Document), and enter your Document Number and Registration Year."},{"question":"What should I do if TNREGINET EC View displays \'No Matching Records Found\'?","answer":"Check whether the survey number has sub-divisions (e.g. 45/1A), verify if the SRO office jurisdiction was recently bifurcated, or select \'Survey Wise\' search with a broader date range."},{"question":"Is TNREGINET EC View accessible 24/7 without user login?","answer":"Yes. Public EC viewing on TNREGINET is accessible to guest users 24/7 without mandatory account login."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <!-- Summary -->
    <p style="font-size: 1.05rem; margin-bottom: 25px;">The <strong>TNREGINET EC View</strong> service on the official Tamil Nadu Commercial Taxes and Registration Department portal (`tnreginet.gov.in`) allows property owners, buyers, and legal advocates to inspect registered property encumbrances online free of cost.</p>

    <h2 style="color: var(--primary); font-size: 1.5rem; margin-top: 30px; margin-bottom: 15px;">Two Search Modes on TNREGINET EC View</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 25px 0;">
        <div style="border: 1px solid var(--border); border-top: 4px solid #059669; border-radius: 8px; padding: 20px; background: var(--surface);">
            <h3 style="color: var(--primary); margin-top: 0;">1. Document-Wise Search</h3>
            <p style="margin: 0; font-size: 0.95rem; color: var(--text-muted);">Ideal when you already possess the registered Sale Deed, Settlement Deed, or Mortgage Document Number and SRO office name.</p>
        </div>
        <div style="border: 1px solid var(--border); border-top: 4px solid var(--accent); border-radius: 8px; padding: 20px; background: var(--surface);">
            <h3 style="color: var(--primary); margin-top: 0;">2. Survey-Wise Search</h3>
            <p style="margin: 0; font-size: 0.95rem; color: var(--text-muted);">Ideal when searching a land plot or agricultural field using Village name, Survey Number, and Sub-division Number.</p>
        </div>
    </div>

    <!-- Author E-E-A-T Box -->
    <div class="author-bio-card" style="border: 1px solid var(--border); border-radius: 8px; padding: 20px; background: rgba(248, 250, 252, 0.6); margin-top: 40px; display: flex; gap: 15px; align-items: flex-start;">
        <div style="flex-shrink: 0; width: 50px; height: 50px; border-radius: 50%; background: var(--primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.3rem;">
            V
        </div>
        <div>
            <h4 style="margin: 0 0 5px 0; color: var(--primary); font-size: 1.05rem;">Written by Vikash</h4>
            <p style="margin: 0; font-size: 0.9rem; color: var(--text-muted);">Land Records & Property Registration Specialist. Expert in Indian state SRO portal operations, property due diligence, and encumbrance certificate verification standards.</p>
        </div>
    </div>

</div>


<div class="db-legacy-content" style="margin-top: 30px;"><!-- Custom Interactive Styles for ECTV Dashboard -->
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
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;" title="Visit the official Apply by Survey website (External Link)">Apply by Survey</a>
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
                    <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" class="btn-primary" style="display: inline-block; margin-top: 1rem; font-size: 0.85rem; padding: 0.5rem 1rem; text-decoration: none;" title="Visit the official Apply by Document website (External Link)">Apply by Document</a>
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
        const checkboxes = document.querySelectorAll("#ectv-checklist input[type=\\"checkbox\\"]");
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

<h2 id="heading-1">Understanding the tnreginet ec view online Portal Utility</h2>
<p class="content-text">
    An <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> service is the single most important tool used by home buyers in Tamil Nadu to perform preliminary title due diligence. Through the official TNREGINET website, citizens can run a **tnreginet ec view online** check to track ownership history and verify mortgages or liens. The platform is designed to provide immediate access to registered property deeds dating back to 1975.
</p>
<p class="content-text">
    In this comprehensive guide, we provide a complete educational walkthrough of how to verify <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> transactions using the official portal. We cover zone selections, revenue villages, sub-registrar offices, date bounds, and fee rates. Buyers who use this guide will gain a clear understanding of how to navigate the registration department portal to download signed or draft records.
</p>

<h2 id="heading-2">View EC (Free) vs. Certified Copy: SRO Office Processes</h2>
<p class="content-text">
    Before using the official <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> portal (TNREGINET) to search for details, it is helpful to determine whether a draft search or a certified copy is needed. The portal processes these two formats differently:
</p>
<ul style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>Informational View EC</strong>: This is a free draft search that displays on screen and allows you to search and download <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> draft copies. It is instant and does not require registration. However, it lacks a digital signature and cannot be used in court trials or submitted to banks.</li>
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

<h2 id="heading-3">How to Search and View EC on TNREGINET</h2>
<p class="content-text">
    To view property records on the TNREGINET portal, follow these step-by-step instructions:
</p>
<div class="steps-container">
    <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">Visit Site</h3>
        <p class="content-text" style="margin-bottom:0;">Navigate to the official Tamil Nadu Inspector General of Registration homepage: <a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener" title="Visit the official tnreginet.gov.in website (External Link)">tnreginet.gov.in</a>.</p>
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
    To review detailed guides for neighboring states, read our <a href="/online-ec-tamilnadu/" title="Read our comprehensive guide on online ec tamilnadu">online ec tamilnadu</a> guide, check our checklist on <a href="/tn-ec-online/" title="Read our comprehensive guide on tn ec online">tn ec online</a>, read about AP registry searches in the <a href="/online-ec-ap/" title="Read our comprehensive guide on online ec ap">online ec ap</a> index, or check the <a href="/ec-online-karnataka/" title="Read our comprehensive guide on ec online karnataka">ec online karnataka</a> handbook. You can also view the general index at our <a href="/ec-view-online/" title="Read our comprehensive guide on ec view online">ec view online</a> directory.
</p>

<h2 id="heading-4">Best Practices to Avoid Search Errors on the Portal</h2>
<p class="content-text">
    A common issue during property searches is typing errors in parameters. Keep these guidelines in mind to check the current <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> status information correctly:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem;">
    <li style="margin-bottom: 0.5rem;"><strong>SRO Jurisdictional History</strong>: If a property was registered twenty years ago, it may belong to a different SRO today. Be sure to check the historical registry charts on the portal.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Select Correct Revenue Village</strong>: SRO divisions contain several revenue villages. Choose the exact village listed in the sale deed schedule.</li>
    <li style="margin-bottom: 0.5rem;"><strong>Check Date Formats</strong>: Search date boundaries must be formatted correctly. Set the start date to a few days before the registered transaction year.</li>
</ol>
<p class="content-text">
    To validate digital signature certificates on your downloaded copies, read the <a href="/online-ec-download/" title="Read our comprehensive guide on online ec download">online ec download</a> reference.
</p>

<h2 id="heading-5">Patta Chitta Validation for Land Records</h2>
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
    For other regional directories, consult the <a href="/ec-online-tamil/" title="Read our comprehensive guide on ec online tamil">ec online tamil</a> guide, check our checklist on <a href="/ec-online-telangana/" title="Read our comprehensive guide on ec online telangana">ec online telangana</a>, or read about TS land registers in the <a href="/ec-telangana-online-search/" title="Read our comprehensive guide on ec telangana online search">ec telangana online search</a> directory. To retrieve the verified <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> logs, you can always check our main database references.
</p></div>


<div class="comprehensive-seo-depth-block" style="margin-top: 35px; border-top: 2px solid var(--border); padding-top: 25px; line-height: 1.8;">
    <h2 style="color: var(--primary); font-size: 1.5rem;">Statutory Importance of Encumbrance Certificates under Indian Registration Laws</h2>
    <p>Under the <strong>Registration Act of 1908</strong> and the <strong>Transfer of Property Act of 1882</strong>, verifying title deeds and encumbrances is the foundational step for any real estate transaction in India. An Encumbrance Certificate (EC) serves as an official legal transcript issued by the Sub-Registrar Office (SRO) within whose jurisdiction the property resides. It outlines all registered transactions—including sale deeds, mortgages, gifts, court attachments, partition deeds, and release deeds—executed over a designated search period (typically 13 to 30 years).</p>
    
    <h3 style="color: var(--primary); font-size: 1.25rem; margin-top: 25px;">Key Information Verified in an Official EC Search</h3>
    <ul style="padding-left: 20px;">
        <li><strong>Ownership Continuity:</strong> Chronological chain of title transfers from grantor to grantee.</li>
        <li><strong>Lien and Mortgage Disclosures:</strong> Details of equitable or registered mortgages created by financial institutions or nationalized banks under the SARFAESI Act.</li>
        <li><strong>Court Injunctions & Lis Pendens:</strong> Registration of judicial stays, probate disputes, or suit notices under Section 52 of the Transfer of Property Act.</li>
        <li><strong>Property Identifiers:</strong> Exact survey numbers, door numbers, plot measurements, boundary dimensions, and ward/village classification matching revenue records.</li>
    </ul>

    <h3 style="color: var(--primary); font-size: 1.25rem; margin-top: 25px;">Difference Between Form 15 and Form 16 EC</h3>
    <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
        <thead>
            <tr style="background: var(--surface); text-align: left;">
                <th style="padding: 10px; border: 1px solid var(--border);">Feature Parameter</th>
                <th style="padding: 10px; border: 1px solid var(--border);">Form 15 (Encumbrance Statement)</th>
                <th style="padding: 10px; border: 1px solid var(--border);">Form 16 (Nil Encumbrance Certificate)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid var(--border);">Transaction Record</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Contains listed registered deeds, volume/page numbers, and party details.</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Issued when ZERO registered encumbrances exist for the specified search duration.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid var(--border);">Bank Loan Acceptability</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Required by banks to inspect past mortgages, clear title, and deed references.</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Mandatory proof of unencumbered, clear title for home loan sanction.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid var(--border);">Verification Source</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Signed digitally by SRO or downloaded via state portals (Kaveri, TNREGINET, IGRS).</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Verified by SRO index register searches across Index I and Index II.</td>
            </tr>
        </tbody>
    </table>

    <h3 style="color: var(--primary); font-size: 1.25rem; margin-top: 25px;">Essential Due Diligence Checklist Before Purchasing Property</h3>
    <ol style="padding-left: 20px;">
        <li><strong>Cross-Verify EC Entries with Original Sale Deeds:</strong> Ensure document numbers, registration dates, and SRO volumes correspond exactly to physical title documents.</li>
        <li><strong>Check Revenue Records vs. SRO Registrations:</strong> Verify that SRO registrations match local municipality records (Patta/Chitta in TN, RTC Bhoomi in KA, Adangal/1B in AP, Dharani in TS, 7/12 in MH).</li>
        <li><strong>Verify Mortgage Discharge Certificates:</strong> If a prior mortgage appears on Form 15, ensure a registered Memorandum of Deposit of Title Deeds (MODTD) discharge receipt is attached.</li>
        <li><strong>Obtain Certified Search Copies for Missing Periods:</strong> If digital portal records show gaps due to historical digitisation limits (pre-1975 or pre-2004), submit a physical application for manual SRO index searches.</li>
    </ol>
</div>
',
);
