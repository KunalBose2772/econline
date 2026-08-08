<?php
return array (
  'slug' => 'encumbrance-certificate-check-online',
  'keyword' => 'encumbrance certificate check online, encumbrance search, check ec online, free ec online, verify ec online',
  'title' => 'Encumbrance Certificate Check Online: National Verification Guide (2026)',
  'meta_desc' => 'National guide to Encumbrance Certificate (EC) online search and verification. Check SRO registered property deeds, bank mortgages, and Nil EC status.',
  'h1_title' => 'Encumbrance Certificate Check Online: National Portal Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"How do I check if an Encumbrance Certificate is authentic?","answer":"Authentic digitally signed ECs issued by state SRO portals contain a unique Application Number, SRO Seal, Digital Signature Certificate, and QR Verification Code that can be scanned online."},{"question":"Can I perform a free online EC check across all Indian states?","answer":"Yes. Most major state portals (including Karnataka Kaveri 2.0, Tamil Nadu TNREGINET, Telangana IGRS, Andhra Pradesh IGRS, Kerala PEARL, and Maharashtra Search 2.0) offer free online EC search for viewing information entries."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">Checking an <strong>Encumbrance Certificate (EC) online</strong> is the most critical first step in real estate due diligence in India. It guarantees that the property you intend to buy or finance is free from undisclosed bank mortgages, court attachments, or illegal title transfers.</p>

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


<div class="db-legacy-content" style="margin-top: 30px;"><p class="content-text">
    An encumbrance certificate records the registered legal history of a property. When you purchase a house, land parcel, or commercial structure, conducting an <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> transaction search ensures the title is clear and that no active court attachments or bank mortgages are pending. Digitised land records have simplified checking these public records.
</p>

<h2 id="heading-1">What is an encumbrance search and why does it matter?</h2>
<p class="content-text">
    State stamps and registration departments digitise transaction registers to assist property buyers. Throughout state websites, running an <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> search is standard practice to confirm that a property has no outstanding liabilities.
</p>
<p class="content-text">
    When a property has active liabilities, the Sub-Registrar Office (SRO) issues Form 15, which lists all registered transactions. If no transactions are registered during the query period, the portal issues Form 16, which is a Nil Encumbrance Certificate. Both forms serve as essential legal documents for title verification.
</p>

<!-- Widget 1: State Portal Selector (app-state-select) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, hsl(140, 30%, 98%) 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 80%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📂 State EC Portal Selector
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your state to identify the correct registration website and search rules.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Select State</label>
            <select id="eco-state-selector" class="app-state-select" onchange="showEcoStateInfo()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="">-- Choose State --</option>
                <option value="tn">Tamil Nadu (TNreginet)</option>
                <option value="ka">Karnataka (Kaveri Portal)</option>
                <option value="ts">Telangana (Dharani / IGRS)</option>
                <option value="ap">Andhra Pradesh (IGRS AP)</option>
                <option value="py">Puducherry (Puducherry Portal)</option>
            </select>
        </div>
    </div>
    <div id="eco-state-details" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function showEcoStateInfo() {
    var s = document.getElementById("eco-state-selector").value;
    var box = document.getElementById("eco-state-details");
    if (!s) { box.style.display = "none"; return; }
    box.style.display = "block";
    box.style.backgroundColor = "hsl(140, 80%, 98%)";
    box.style.borderColor = "hsl(140, 80%, 88%)";
    var info = {
        tn: "<strong>Tamil Nadu (TNreginet):</strong> Search using survey number or document registration number. Digitised records are online from 1987 onwards. Certified copies are delivered within 3 days.",
        ka: "<strong>Karnataka (Kaveri Portal):</strong> Enter District, Hobli, Village, and Survey. Search copies are free; certified digitally signed PDFs require fee payment.",
        ts: "<strong>Telangana (IGRS / Dharani):</strong> Agricultural land records are managed on Dharani portal; non-agricultural properties use IGRS Telangana. Select the appropriate portal.",
        ap: "<strong>Andhra Pradesh (IGRS AP):</strong> Access the portal at registration.ap.gov.in. Verify the transaction log tables using the main survey/plot coordinates.",
        py: "<strong>Puducherry (Puducherry Portal):</strong> Select Commune and Revenue Village details. Paysera/treasury gateway integrations are active for certified copies."
    };
    box.innerHTML = "<div style=\\"font-size: 0.92rem; color: hsl(140, 80%, 20%); line-height: 1.8;\\">" + info[s] + "</div>";
}
</script>

<h2 id="heading-2">How to request an EC check online: Step-by-step walkthrough</h2>
<p class="content-text">
    To apply for and check an encumbrance certificate online, follow this detailed procedure:
</p>
<ol class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li>Visit the stamps and registration website for your state (e.g. TNreginet or Kaveri).</li>
    <li>Register a citizen profile and verify with OTP or Aadhaar.</li>
    <li>Select **"Apply for Encumbrance Certificate"** from the portal dashboard.</li>
    <li>Enter the property identification details: Survey Number, SRO office, Taluk, Village, and boundaries.</li>
    <li>Input the query duration. Choose a 30-year period to satisfy lender audit requirements.</li>
    <li>Click search. If the indexes match, pay the government fee online.</li>
    <li>Monitor your dashboard. Once SRO officers approve the request, a download link for the signed PDF will appear.</li>
</ol>

<!-- Widget 2: EC Search Fee Calculator (app-calc-years) -->
<div class="custom-card" id="app-calc-years" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: hsl(140, 80%, 22%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 EC Search Fee Calculator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Calculate estimated search and copying fees based on your query duration. Calculating estimated charges using our <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> fee calculator below helps manage your budget.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Search Period (in Years)</label>
            <input type="number" id="eco-search-years" value="13" min="1" max="50" oninput="calculateEcoFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
    </div>
    <div id="eco-fee-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateEcoFee() {
    var yrs = parseInt(document.getElementById("eco-search-years").value);
    var box = document.getElementById("eco-fee-result");
    if (isNaN(yrs) || yrs < 1) { box.style.display = "none"; return; }
    var searchFee = 25 + (yrs > 1 ? (yrs - 1) * 12 : 0);
    var copyingCharges = 90;
    var serviceFee = 30;
    var total = searchFee + copyingCharges + serviceFee;
    box.style.display = "block";
    box.style.backgroundColor = "hsl(140, 80%, 97%)";
    box.style.borderColor = "hsl(140, 80%, 87%)";
    box.innerHTML = "<div style=\\"font-weight: 700; color: hsl(140, 80%, 25%); margin-bottom: 0.75rem;\\">Search Fee Breakdown:</div>" +
        "<div style=\\"font-size: 0.95rem; color: #334155; line-height: 1.8;\\">" +
        "<div><strong>Search Years:</strong> " + yrs + " Year(s)</div>" +
        "<div><strong>Search Fee:</strong> \\u20B9" + searchFee + "</div>" +
        "<div><strong>Copying Charges:</strong> \\u20B9" + copyingCharges + "</div>" +
        "<div><strong>Service Fee:</strong> \\u20B9" + serviceFee + "</div>" +
        "<div style=\\"border-top: 1px solid hsl(140, 80%, 87%); margin-top: 0.75rem; padding-top: 0.75rem; font-weight: 700; font-size: 1.1rem; color: hsl(140, 80%, 22%);\\">Total Estimated: \\u20B9" + total + "</div></div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("eco-search-years")) { calculateEcoFee(); }
});
</script>

<h2 id="heading-3">Cross-verifying mutation register (Khata/Patta) with EC search</h2>
<p class="content-text">
    A comprehensive property title check involves cross-verifying the EC with mutation records. The EC shows transaction history, but the mutation register shows owner details recognized by revenue authorities (e.g. Patta, Khata, or Bhoomi RTC).
</p>
<p class="content-text">
    Ensure that the seller name in the registered sale deed matches the latest entry in the revenue database. If there is a mismatch, a mutation has not been completed. This mismatch can lead to transaction rejections during future sales. Once search parameters are confirmed, select the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portal option to submit your certified copy request.
</p>

<!-- Widget 3: Title Readiness Checklist (app-readiness-deed) -->
<div class="custom-card" id="app-readiness-deed" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, hsl(140, 30%, 98%) 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 75%, 22%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📋 Title Verification Checklist
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Perform these checks to evaluate the title readiness before purchasing the property.
    </p>
    <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem;">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="eco-chk1" onchange="runEcoCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="eco-chk1" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Seller name matches the latest entry in the EC transaction table.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="eco-chk2" onchange="runEcoCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="eco-chk2" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Mutation records (Patta/RTC/Khata) match the seller details.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="eco-chk3" onchange="runEcoCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="eco-chk3" style="font-size: 0.9rem; color: #334155; cursor: pointer;">No active court attachment or unresolved bank mortgages are listed.</label>
        </div>
    </div>
    <div id="eco-check-result" style="padding: 1rem; border-radius: 6px; border: 1px solid var(--border); background-color: #f1f5f9; font-size: 0.9rem; font-weight: 600; color: #475569;">
        Check the boxes to evaluate title readiness.
    </div>
</div>

<script>
function runEcoCheck() {
    var c1 = document.getElementById("eco-chk1").checked;
    var c2 = document.getElementById("eco-chk2").checked;
    var c3 = document.getElementById("eco-chk3").checked;
    var box = document.getElementById("eco-check-result");
    var score = (c1 ? 1 : 0) + (c2 ? 1 : 0) + (c3 ? 1 : 0);
    if (score === 0) {
        box.style.backgroundColor = "#f1f5f9"; box.style.borderColor = "var(--border)"; box.style.color = "#475569";
        box.innerHTML = "Check the boxes to evaluate title readiness.";
    } else if (score < 3) {
        box.style.backgroundColor = "hsl(38, 92%, 95%)"; box.style.borderColor = "hsl(38, 92%, 82%)"; box.style.color = "hsl(38, 92%, 25%)";
        box.innerHTML = "&#9888; Incomplete title checks. Verify missing details before signing.";
    } else {
        box.style.backgroundColor = "hsl(140, 65%, 95%)"; box.style.borderColor = "hsl(140, 65%, 80%)"; box.style.color = "hsl(140, 65%, 22%)";
        box.innerHTML = "&#10003; Title check complete! Records appear consistent and clear.";
    }
}
</script>

<h2 id="heading-4">Importance of search duration in EC searches</h2>
<p class="content-text">
    When you apply for an encumbrance search, the start date and end date are critical. If you are applying for a home loan, banks will require a search duration of at least 30 years. This duration ensures that any long-term mortgage or lease registered in the past is identified. If you only search for the last 13 years, you might miss a mortgage registered 15 years ago that remains active because the loan has not been fully repaid.
</p>
<p class="content-text">
    Additionally, ensure that the search window extends to the present date. Sometimes, people perform a search that stops a month before the transaction. During this gap, the seller might have mortgaged the property or signed an agreement with another buyer. Always select the current date as the end date of the search window to capture any recent registration records.
</p>

<h2 id="heading-5">How to check application status of your EC online</h2>
<p class="content-text">
    After submitting your application and completing the payment for your certified copy, you can monitor the status on the registration website. Login to your account, click on "Track Application", and enter the registration number. The system will display if the application is pending, approved, or rejected. Once approved, you can download the digitally signed PDF containing transaction history.
</p>
<p class="content-text">
    If the application is rejected, SRO officers usually specify the reason, such as mismatched boundaries or incorrect survey numbers. You must resolve these issues and file a new application. The search fees paid for rejected applications are not refunded by the department.
</p>

<h2 id="heading-6">How to verify the digital signature on the EC PDF</h2>
<p class="content-text">
    Once the SRO approves your application, the status of your request changes to "Approved". You will receive an SMS alert, and the download link will be active in your citizen profile. Save the PDF certificate to your computer.
</p>
<p class="content-text">
    The downloaded file contains a cryptographic signature certificate. When you open the PDF in a browser or basic PDF viewer, you might see a message saying the signature validity is unknown. To validate it, open the document in Adobe Acrobat Reader. Right-click the signature block, select "Signature Properties", click "Show Signer Certificate", and go to the Trust tab. Click "Add to Trusted Certificates" and check the option to trust the certificate for certifying documents. Once completed, the signature will display a green checkmark, confirming it is a legally certified government copy.
</p>

<h2 id="heading-7">Using certified EC as a legal document</h2>
<p class="content-text">
    A certified EC containing the digital signature of the Sub-Registrar is legally valid and admissible in courts under the Indian Evidence Act. It is required for registering mortgages, processing bank loans, and resolving civil title disputes. The unsigned search copy is not legally valid and cannot be submitted to banks or government departments.
</p>

<h2 id="heading-8">Bilingual glossary of registration terms</h2>
<p class="content-text">
    Understanding the local terms used in land records is essential for correct interpretation of the certificate data. We have prepared a glossary explaining terms for the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> database:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>SRO</strong>: Sub-Registrar Office where deeds are formally registered.</li>
    <li><strong>Patta / Khata</strong>: Revenue document proving land ownership.</li>
    <li><strong>Chitta / RTC / Pahani</strong>: Village field book showing landowner and area extents.</li>
    <li><strong>Form 15</strong>: EC listing property transactions.</li>
    <li><strong>Form 16</strong>: Nil Encumbrance Certificate.</li>
    <li><strong>Mutation</strong>: Process of transferring owner name in revenue records.</li>
    <li><strong>Deed</strong>: A signed legal document that transfers ownership or grants rights.</li>
</ul>
<p class="content-text">
    When searching records, ensure you verify both the online portion and the manual portion if required. Banks will always require a comprehensive search history to confirm that no older claims remain active. For details on local regulations, visit our main <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> index page for other regional rules.
</p>

<h2 id="heading-9">How to correct errors or mistakes in your registered EC</h2>
<p class="content-text">
    If you find any mistakes in the downloaded certificate, such as a spelling error in the owner name, incorrect boundaries, or missing transaction records, you must submit a correction request. Visit the local Sub-Registrar Office where the property is registered and provide your certified copy along with the registered sale deed or parent documents.
</p>
<p class="content-text">
    If the error is a clerical mistake made during the digitization of registration department records, SRO officers will correct the index database without any additional charges. Once the records are updated, you can submit a new online search request to obtain the corrected certified copy.
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
