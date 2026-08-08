<?php
return array (
  'slug' => 'ec-online-kerala',
  'keyword' => 'ec online kerala, kerala pearl portal ec, encumbrance certificate online kerala, keralaregistration gov in ec, kerala sro search',
  'title' => 'EC Online Kerala: PEARL Registration Portal Guide (2026)',
  'meta_desc' => 'Search and download Kerala Encumbrance Certificate (Kudippika / EC) online via PEARL portal (keralaregistration.gov.in). Check SRO fees and Fair Value.',
  'h1_title' => 'EC Online Kerala: PEARL Portal Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"What is the official website for Kerala EC and registration services?","answer":"The official portal administered by the Registration Department of Kerala is keralaregistration.gov.in (PEARL System)."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">In Kerala, an <strong>Encumbrance Certificate (Kudippika)</strong> is an essential statutory document verifying registered deed transactions and property encumbrances. The <strong>PEARL System</strong> on `keralaregistration.gov.in` provides online EC search and certified downloads across all Kerala districts.</p>

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
    In Kerala, securing real estate titles through the portal for <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> requests is standard when purchasing property or verifying ownership details. The Registration Department provides these online services using the PEARL portal, allowing citizens to search and verify property transaction details.
</p>

<h2 id="heading-1">Understanding PEARL and IGR Kerala portal systems</h2>
<p class="content-text">
    The Stamps and Registration Department of Kerala has digitised land records across SRO limits to simplify real estate transactions. Through the PEARL portal database, getting an <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> certificate is standard to verify property transactions.
</p>
<p class="content-text">
    If the search query returns registered transactions, they are structured into Form 15, which lists the date, execution details, transaction parties, and property extents. If no transactions exist, SRO officers issue Form 16, representing a Nil Encumbrance Certificate. Both versions are signed digitally by the SRO officer and are valid for legal purposes.
</p>

<!-- Widget 1: Kerala District Finder (app-state-select) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, hsl(170, 30%, 98%) 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: hsl(170, 80%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📂 Kerala District Finder
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your property district to identify matching SRO rules and database coverage.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Property District</label>
            <select id="eok-district-selector" class="app-state-select" onchange="showEokDistrictInfo()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="">-- Choose District --</option>
                <option value="trivandrum">Trivandrum (Trivandrum SRO, Kazhakoottam SRO)</option>
                <option value="ernakulam">Ernakulam (Kochi SRO, Aluva SRO)</option>
                <option value="kozhikode">Kozhikode Zone SROs</option>
                <option value="kollam">Kollam Zone SROs</option>
            </select>
        </div>
    </div>
    <div id="eok-district-details" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function showEokDistrictInfo() {
    var d = document.getElementById("eok-district-selector").value;
    var box = document.getElementById("eok-district-details");
    if (!d) { box.style.display = "none"; return; }
    box.style.display = "block";
    box.style.backgroundColor = "hsl(170, 80%, 98%)";
    box.style.borderColor = "hsl(170, 80%, 88%)";
    var info = {
        trivandrum: "<strong>Trivandrum District:</strong> Fully integrated. Digital records are available from 1989. Verify property survey numbers alongside Pokkuvaravu registers.",
        ernakulam: "<strong>Ernakulam District:</strong> High volume SRO registers. Ensure block and survey numbers are specified accurately. Check for industrial or residential layout logs.",
        kozhikode: "<strong>Kozhikode Zone:</strong> Fast processing limits. Trace ancestral inheritance deeds and parent documents back to 30 years.",
        kollam: "<strong>Kollam Zone:</strong> Digitsed records complete. Verify registration volume indexes to match local village boundaries."
    };
    box.innerHTML = "<div style=\\"font-size: 0.92rem; color: hsl(170, 80%, 20%); line-height: 1.8;\\">" + info[d] + "</div>";
}
</script>

<h2 id="heading-2">How to search land registration online EC in Kerala: Step-by-step</h2>
<p class="content-text">
    To apply for and download your property Encumbrance Certificate, follow this process:
</p>
<ol class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li>Visit the PEARL Online Services portal (keralaregistration.gov.in).</li>
    <li>Register a citizen profile and login using your credentials.</li>
    <li>Navigate to the dashboard and click on **"Online EC"** or select **"Encumbrance Certificate"**.</li>
    <li>Provide property identifiers: District, Sub Registrar Office (SRO), Taluk, Village, and Survey subdiv number.</li>
    <li>Select the search window start date and end date. Most financial institutions require a 30-year search history.</li>
    <li>Click search. Review the matching transaction index entries on the screen.</li>
    <li>Complete the nominal fee payment using the secure integrated payment gateway.</li>
    <li>Download the certified signed PDF directly from the dashboard application status menu.</li>
</ol>

<!-- Widget 2: Kerala EC Copying Fee Calculator (app-calc-years) -->
<div class="custom-card" id="app-calc-years" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: hsl(170, 80%, 22%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 Kerala EC Fee Calculator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Calculate estimated search and copying fees based on your query duration. Calculating estimated charges using our <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> fee estimator below helps manage your budget.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Search Period (in Years)</label>
            <input type="number" id="eok-search-years" value="13" min="1" max="50" oninput="calculateEokFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
    </div>
    <div id="eok-fee-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateEokFee() {
    var yrs = parseInt(document.getElementById("eok-search-years").value);
    var box = document.getElementById("eok-fee-result");
    if (isNaN(yrs) || yrs < 1) { box.style.display = "none"; return; }
    var searchFee = 25 + (yrs > 1 ? (yrs - 1) * 12 : 0);
    var copyingCharges = 90;
    var serviceFee = 30;
    var total = searchFee + copyingCharges + serviceFee;
    box.style.display = "block";
    box.style.backgroundColor = "hsl(170, 80%, 97%)";
    box.style.borderColor = "hsl(170, 80%, 87%)";
    box.innerHTML = "<div style=\\"font-weight: 700; color: hsl(170, 80%, 25%); margin-bottom: 0.75rem;\\">Search Fee Breakdown:</div>" +
        "<div style=\\"font-size: 0.95rem; color: #334155; line-height: 1.8;\\">" +
        "<div><strong>Search Years:</strong> " + yrs + " Year(s)</div>" +
        "<div><strong>Search Fee:</strong> \\u20B9" + searchFee + "</div>" +
        "<div><strong>Copying Charges:</strong> \\u20B9" + copyingCharges + "</div>" +
        "<div><strong>Service Fee:</strong> \\u20B9" + serviceFee + "</div>" +
        "<div style=\\"border-top: 1px solid hsl(170, 80%, 87%); margin-top: 0.75rem; padding-top: 0.75rem; font-weight: 700; font-size: 1.1rem; color: hsl(170, 80%, 22%);\\">Total Estimated: \\u20B9" + total + "</div></div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("eok-search-years")) { calculateEokFee(); }
});
</script>

<h2 id="heading-3">Cross-verifying mutation (Pokkuvaravu) with your EC</h2>
<p class="content-text">
    A comprehensive property title check involves cross-verifying the EC with mutation records. The EC shows transaction history, but the mutation register shows owner details recognized by revenue authorities (e.g. Pokkuvaravu/Thandaper).
</p>
<p class="content-text">
    Ensure that the seller name in the registered sale deed matches the latest entry in the Thandaper database. If there is a mismatch, the mutation has not been completed. This mismatch can block future transactions or bank loan approvals. Once transaction details match, select the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> certified copy option to download the legally certified PDF copy.
</p>

<!-- Widget 3: Document Readiness Checklist (app-readiness-deed) -->
<div class="custom-card" id="app-readiness-deed" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, hsl(140, 30%, 98%) 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 75%, 22%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📋 Title Verification Checklist
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Perform these checks to evaluate the title readiness before purchasing the property.
    </p>
    <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem;">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="eok-chk1" onchange="runEokCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="eok-chk1" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Seller name matches the latest entry in the EC transaction table.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="eok-chk2" onchange="runEokCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="eok-chk2" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Mutation records (Pokkuvaravu / Thandaper) match the seller details.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="eok-chk3" onchange="runEokCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="eok-chk3" style="font-size: 0.9rem; color: #334155; cursor: pointer;">No active court attachment or unresolved bank mortgages are listed.</label>
        </div>
    </div>
    <div id="eok-check-result" style="padding: 1rem; border-radius: 6px; border: 1px solid var(--border); background-color: #f1f5f9; font-size: 0.9rem; font-weight: 600; color: #475569;">
        Check the boxes to evaluate title readiness.
    </div>
</div>

<script>
function runEokCheck() {
    var c1 = document.getElementById("eok-chk1").checked;
    var c2 = document.getElementById("eok-chk2").checked;
    var c3 = document.getElementById("eok-chk3").checked;
    var box = document.getElementById("eok-check-result");
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
<p class="content-text">
    During judicial proceedings, a certified copy of the encumbrance registry serves as prime evidence of ownership transactions and chronological title transitions. If any individual raises a claim or attempts to dispute the validity of the sale transaction, the official certification issued by the Sub-Registrar is presented to show that the purchaser completed due diligence and performed a valid online search check before finalizing the transaction.
</p>

<h2 id="heading-8">Bilingual glossary of registration terms</h2>
<p class="content-text">
    Understanding the local terms used in land records is essential for correct interpretation of the certificate data. We have prepared a glossary explaining terms for the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> database chart:
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
    When searching records, ensure you verify both the online portion and the manual portion if required. Banks will always require a comprehensive search history to confirm that no older claims remain active. For details on local regulations, visit our main <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> dashboard directory for other states.
</p>

<h2 id="heading-9">How to correct errors or mistakes in your registered EC</h2>
<p class="content-text">
    If you find any mistakes in the downloaded certificate, such as a spelling error in the owner name, incorrect boundaries, or missing transaction records, you must submit a correction request. Visit the local Sub-Registrar Office where the property is registered and provide your certified copy along with the registered sale deed or parent documents.
</p>
<p class="content-text">
    If the error is a clerical mistake made during the digitization of registration department records, SRO officers will correct the index database without any additional charges. Once the records are updated, you can submit a new online search request to obtain the corrected certified copy. If the application is rejected, SRO officers usually specify the reason, such as mismatched boundaries or incorrect survey numbers. You must resolve these registration issues carefully and then file a completely new application search request.
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
