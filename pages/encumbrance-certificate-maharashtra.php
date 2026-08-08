<?php
return array (
  'slug' => 'encumbrance-certificate-maharashtra',
  'keyword' => 'encumbrance certificate maharashtra, igr maharashtra search 2.0, e-search maharashtra ec, maharashtra property search online',
  'title' => 'Encumbrance Certificate Maharashtra: IGR e-Search 2.0 Guide (2026)',
  'meta_desc' => 'Search and download Maharashtra Encumbrance Certificate online via IGR Maharashtra (igrmaharashtra.gov.in) e-Search 2.0. Check 7/12 extract and Ready Reckoner.',
  'h1_title' => 'Encumbrance Certificate Maharashtra: IGR e-Search 2.0 Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"How do I search for property encumbrances in Maharashtra online?","answer":"Visit igrmaharashtra.gov.in, select \'e-Search\' -> \'Search 2.0\', select District, Taluka, Village, and enter Survey No / CTS No or Document Registration Number."},{"question":"What is Index II in Maharashtra property registration?","answer":"Index II is the certified legal summary extract issued by the SRO in Maharashtra detailing document registration number, buyer/seller names, CTS/Survey number, market value, and stamp duty paid."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">In Maharashtra, property encumbrance checks and Index II inspection copies are retrieved online using the <strong>IGR Maharashtra e-Search 2.0 Portal</strong> (`igrmaharashtra.gov.in`), while land title records are checked via <strong>Mahabhulekh 7/12 (Satbara)</strong> across Mumbai, Pune, Thane, Nagpur, Nashik, and all districts.</p>

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
    Buying real estate in Maharashtra requires thorough verification of historical registration records to verify ownership and check for legal liabilities. The Inspector General of Registration and Stamp (IGRS) in Maharashtra provides online utilities to search property encumbrances. Checking registered property files using <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portals ensures that buyers verify deed histories, confirm Index II extracts, and secure clean titles.
</p>

<h2 id="heading-1">Understanding Encumbrance Records and Index II in Maharashtra</h2>
<p class="content-text">
    An encumbrance certificate lists all recorded property transactions for a specified search tenure. In Maharashtra, property registration records are categorized into distinct index registers: Index I (Nominal Index of Parties), Index II (Property Descriptive Extract), Index III (Wills), and Index IV (Movable Property Transactions). Index II serves as the official primary document detailing registered sale deeds, mortgages, agreements for sale, gift deeds, partitions, and court stays.
</p>
<p class="content-text">
    If the owner mortgaged their property to a bank or financial institution, a Notice of Intimation (NOI) or Mortgage Deed is registered with the Sub-Registrar Office (SRO). The online <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> e-Search portal displays these entries, preventing buyers from purchasing encumbered flats or land parcels. Transactions completed without verifying these logs can result in severe financial liabilities and legal disputes.
</p>

<!-- Widget 1: Maharashtra District Selector (app-state-select) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, hsl(215, 30%, 98%) 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: hsl(215, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🏢 Maharashtra District SRO Finder
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your Maharashtra district to view SRO jurisdiction details, CTS search tips, and digital record coverage.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Select Registration District</label>
            <select id="mh-district-selector" class="app-state-select" onchange="showMhDistrictInfo()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="">-- Choose District --</option>
                <option value="mumbai">Mumbai Suburban & City (CTS / Cadastral Survey No Search)</option>
                <option value="pune">Pune Zone (Haveli SROs & PCMC Area)</option>
                <option value="thane">Thane Zone (Thane, Kalyan, Navi Mumbai SROs)</option>
                <option value="nagpur">Nagpur Zone SROs</option>
                <option value="nashik">Nashik Zone SROs</option>
            </select>
        </div>
    </div>
    <div id="mh-district-details" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function showMhDistrictInfo() {
    var d = document.getElementById("mh-district-selector").value;
    var box = document.getElementById("mh-district-details");
    if (!d) { box.style.display = "none"; return; }
    box.style.display = "block";
    box.style.backgroundColor = "hsl(215, 100%, 98%)";
    box.style.borderColor = "hsl(215, 100%, 88%)";
    var info = {
        mumbai: "<strong>Mumbai Region:</strong> Search by City Survey (CTS) Number or Division / Village name. Digitised records on e-Search 2.0 cover transactions from 1985 onwards. Cross-verify Property Card details.",
        pune: "<strong>Pune Region:</strong> Covers Haveli 1 to 26 SRO offices. Specify Survey Number / Gat Number or CTS Number for urban areas. Check MahaRERA status for under-construction projects.",
        thane: "<strong>Thane & Navi Mumbai:</strong> Includes SROs across Thane, Kalyan, Dombivli, and Navi Mumbai node zones. Verify CIDCO / NMMC transfer permissions alongside SRO Index II.",
        nagpur: "<strong>Nagpur Region:</strong> Covers NIT / NMC layout plots and agricultural land in Nagpur rural. Verify both 7/12 Satbara extract and e-Search Index II logs.",
        nashik: "<strong>Nashik Region:</strong> Covers urban municipal areas and agricultural belts. Trace ownership chain using historical Index II records for at least 30 years."
    };
    box.innerHTML = "<div style=\\"font-size: 0.92rem; color: hsl(215, 100%, 20%); line-height: 1.8;\\">" + info[d] + "</div>";
}
</script>

<h2 id="heading-2">Role of IGR Maharashtra Portal and e-Search 2.0</h2>
<p class="content-text">
    The Inspector General of Registration and Stamps (IGRS), Government of Maharashtra, operates digital networks to eliminate physical visits to SRO offices. Utilizing <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> search utilities on `igrmaharashtra.gov.in` allows citizens to inspect transaction logs across all districts.
</p>
<p class="content-text">
    The portal features two main search options: Free e-Search (for basic document index lookup) and Paid e-Search 2.0 (for comprehensive property-wise search and certified Index II PDF downloads). Users must create a login profile to search by CTS number, survey number, or party name.
</p>

<h2 id="heading-3">Step-by-Step Guide to Search Encumbrances on IGR Maharashtra e-Search 2.0</h2>
<p class="content-text">
    To execute an accurate property title search in Maharashtra, follow these step-by-step instructions:
</p>
<ol class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li>Navigate to the official portal (`igrmaharashtra.gov.in`) and click on <strong>e-Search &rarr; Search 2.0</strong>.</li>
    <li>Create a user profile or log in with your registered email and mobile credentials.</li>
    <li>Select your target District, Taluka, and Village / City Survey division.</li>
    <li>Select the Search Category: <strong>Property Details</strong> (Survey No / CTS No) or <strong>Document Details</strong> (Registration No / Year / SRO Office).</li>
    <li>Enter the Survey Number / Gat Number or CTS (City Survey) Number and Subdivision details.</li>
    <li>Select the search year duration (e.g., 1985 to 2026).</li>
    <li>Click "Search" to display matching registered document entries.</li>
    <li>Click on the Index II link to view transaction parameters, buyer/seller names, and market valuations.</li>
    <li>Pay the required fee online via e-GRAS gateway to download the certified digitally signed Index II PDF.</li>
</ol>

<!-- Widget 2: Maharashtra Search & Stamp Fee Estimator (app-calc-years) -->
<div class="custom-card" id="app-calc-years" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: hsl(15, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 Maharashtra Search & Document Fee Calculator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Calculate estimated e-Search inspection fees and certified Index II document copy charges. Estimating charges with our <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> fee calculator helps manage property due diligence expenses.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Search Period (in Years)</label>
            <input type="number" id="mh-search-years" value="15" min="1" max="50" oninput="calculateMhFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
    </div>
    <div id="mh-fee-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateMhFee() {
    var yrs = parseInt(document.getElementById("mh-search-years").value);
    var box = document.getElementById("mh-fee-result");
    if (isNaN(yrs) || yrs < 1) { box.style.display = "none"; return; }
    var searchFee = 25 + (yrs > 1 ? (yrs - 1) * 15 : 0);
    var indexCopyFee = 100;
    var serviceFee = 20;
    var total = searchFee + indexCopyFee + serviceFee;
    box.style.display = "block";
    box.style.backgroundColor = "hsl(15, 100%, 97%)";
    box.style.borderColor = "hsl(15, 100%, 85%)";
    box.innerHTML = "<div style=\\"font-weight: 700; color: hsl(15, 100%, 25%); margin-bottom: 0.75rem; font-size: 1.05rem;\\">Estimated Inspection Fee Breakdown:</div>" +
        "<div style=\\"font-size: 0.95rem; color: #334155; line-height: 1.8;\\">" +
        "<div><strong>Search Duration:</strong> " + yrs + " Year(s)</div>" +
        "<div><strong>e-Search Portal Fee:</strong> ₹" + searchFee + "</div>" +
        "<div><strong>Index II Certified Copy Fee:</strong> ₹" + indexCopyFee + "</div>" +
        "<div><strong>e-GRAS Handling Charge:</strong> ₹" + serviceFee + "</div>" +
        "<div style=\\"border-top: 1px solid hsl(15, 100%, 85%); margin-top: 0.75rem; padding-top: 0.75rem; font-weight: 700; font-size: 1.1rem; color: hsl(15, 100%, 20%);\\">Total Estimated Cost: ₹" + total + "</div></div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("mh-search-years")) { calculateMhFee(); }
});
</script>

<h2 id="heading-4">Cross-Verifying Mahabhulekh 7/12 Extract (Satbara) & Property Card</h2>
<p class="content-text">
    A comprehensive property due diligence check in Maharashtra requires cross-verifying SRO registration records with land revenue databases. While IGR Maharashtra manages registered deeds and Index II extracts, revenue authorities maintain title logs:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>Mahabhulekh 7/12 (Satbara) Extract:</strong> Maintained by Talathi officers for rural and agricultural lands. Displays owner names, survey area, crop details, and liabilities (Other Rights / Form 8A).</li>
    <li><strong>Property Card (Malmatta Patrak):</strong> Issued by City Survey Officers (CTSO) for urban non-agricultural lands in Mumbai, Pune, Thane, etc. Lists CTS number, plot area, and title transfers.</li>
</ul>
<p class="content-text">
    Buyers must ensure that the owner name appearing in the latest registered Sale Deed matches the name recorded in the 7/12 extract or Property Card. Mismatches indicate pending mutation (Ferfar entry), which can impede future property sales or bank home loan sanctions. Accessing the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> directory provides step-by-step guidance on aligning revenue and registration documents.
</p>

<!-- Widget 3: Document Readiness Checklist (app-readiness-deed) -->
<div class="custom-card" id="app-readiness-deed" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, hsl(140, 30%, 98%) 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📋 Maharashtra Property Title Readiness Checklist
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select the verified documents to evaluate title cleanliness prior to executing sale agreements.
    </p>
    <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem;">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="mh-chk1" onchange="runMhCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="mh-chk1" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Index II extract matches seller name and current survey / CTS number.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="mh-chk2" onchange="runMhCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="mh-chk2" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Mahabhulekh 7/12 extract or Property Card (Malmatta Patrak) shows updated Ferfar entry.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="mh-chk3" onchange="runMhCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="mh-chk3" style="font-size: 0.9rem; color: #334155; cursor: pointer;">No active bank mortgage / Notice of Intimation (NOI) or litigation stay is registered.</label>
        </div>
    </div>
    <div id="mh-check-result" style="padding: 1rem; border-radius: 6px; border: 1px solid var(--border); background-color: #f1f5f9; font-size: 0.9rem; font-weight: 600; color: #475569;">
        Check the boxes to evaluate title readiness.
    </div>
</div>

<script>
function runMhCheck() {
    var c1 = document.getElementById("mh-chk1").checked;
    var c2 = document.getElementById("mh-chk2").checked;
    var c3 = document.getElementById("mh-chk3").checked;
    var box = document.getElementById("mh-check-result");
    var score = (c1 ? 1 : 0) + (c2 ? 1 : 0) + (c3 ? 1 : 0);
    if (score === 0) {
        box.style.backgroundColor = "#f1f5f9"; box.style.borderColor = "var(--border)"; box.style.color = "#475569";
        box.innerHTML = "Check the boxes to evaluate title readiness.";
    } else if (score < 3) {
        box.style.backgroundColor = "hsl(38, 92%, 95%)"; box.style.borderColor = "hsl(38, 92%, 82%)"; box.style.color = "hsl(38, 92%, 25%)";
        box.innerHTML = "&#9888; Incomplete title verification. Resolve missing revenue or mortgage logs.";
    } else {
        box.style.backgroundColor = "hsl(140, 65%, 95%)"; box.style.borderColor = "hsl(140, 65%, 80%)"; box.style.color = "hsl(140, 65%, 22%)";
        box.innerHTML = "&#10003; Outstanding! All parameters verified for clean property title execution.";
    }
}
</script>

<h2 id="heading-5">Notice of Intimation (NOI) and Mortgage Registration Standards</h2>
<p class="content-text">
    Under Maharashtra registration rules, when a home buyer secures a loan from a bank by depositing title deeds, the financial institution or borrower must file a <strong>Notice of Intimation (NOI)</strong> online within 30 days. The NOI filing is indexed in the SRO database.
</p>
<p class="content-text">
    When running an e-Search query, checking for registered NOI records confirms whether the property is pledged as collateral. Once the home loan is fully repaid, the bank issues a Deed of Reconveyance or Release Deed, which must also be registered to clear the encumbrance entry on the Index II extract.
</p>

<h2 id="heading-6">Ready Reckoner Rates (ASR) & Stamp Duty Verification</h2>
<p class="content-text">
    The Government of Maharashtra annually publishes the <strong>Annual Statement of Rates (ASR)</strong>, commonly known as Ready Reckoner Rates. Stamp duty for property registration (under the Maharashtra Stamp Act 1958) is calculated on whichever is higher: the agreed transaction value or the official ASR valuation.
</p>
<p class="content-text">
    Verifying Ready Reckoner rates prior to deed execution ensures proper stamp duty payment, avoiding undervaluation penalties under Section 31 or Section 32A of the Maharashtra Stamp Act.
</p>

<h2 id="heading-7">Resolving Discrepancies in Index II Records</h2>
<p class="content-text">
    If an error occurs in the registered Index II extract—such as a typographical mistake in the seller name, wrong flat area, or incorrect CTS number—the parties must register a <strong>Rectification Deed (Correction Deed)</strong> at the concerned SRO.
</p>
<p class="content-text">
    For clerical mistakes made during database digitisation by the registration department, citizens can submit an online correction application via the IGR portal along with certified physical deed copies for SRO verification and database update.
</p>

<h2 id="heading-8">Bilingual Glossary of Maharashtra Registration & Land Terms</h2>
<p class="content-text">
    Familiarizing yourself with state-specific land and registration terms ensures smooth title verification on the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> platform:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>Index II (सूची २):</strong> Official certified extract showing document registration details, property description, and party names.</li>
    <li><strong>Satbara / 7/12 (सातबारा उतारा):</strong> Village land revenue record showing ownership, survey number, area, and cultivation rights.</li>
    <li><strong>CTS Number (সিটি सर्व्हे नंबर):</strong> City Survey Number assigned to urban property plots by the Land Records Department.</li>
    <li><strong>Ferfar (फेरफार):</strong> Revenue mutation entry recording change of land ownership.</li>
    <li><strong>Malmatta Patrak (मालमत्ता पत्रक):</strong> Property Card for urban municipal properties.</li>
    <li><strong>ASR / Ready Reckoner (रेडी रेकनर दर):</strong> Government prescribed benchmark property valuation rate for stamp duty calculation.</li>
    <li><strong>SRO (दुय्यम निबंधक कार्यालय):</strong> Sub-Registrar Office where deeds are registered.</li>
</ul>
</div>


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
                <th style="padding: 10px; border: 1px solid var(--border);">Form 15 (Encumbrance Statement) / Index II</th>
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
                <td style="padding: 10px; border: 1px solid var(--border);">Signed digitally by SRO or downloaded via state portals (IGR Maharashtra e-Search 2.0, Kaveri, TNREGINET).</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Verified by SRO index register searches across Index I and Index II.</td>
            </tr>
        </tbody>
    </table>

    <h3 style="color: var(--primary); font-size: 1.25rem; margin-top: 25px;">Essential Due Diligence Checklist Before Purchasing Property</h3>
    <ol style="padding-left: 20px;">
        <li><strong>Cross-Verify EC Entries with Original Sale Deeds:</strong> Ensure document numbers, registration dates, and SRO volumes correspond exactly to physical title documents.</li>
        <li><strong>Check Revenue Records vs. SRO Registrations:</strong> Verify that SRO registrations match local municipality records (Satbara 7/12 in MH, Patta/Chitta in TN, RTC Bhoomi in KA, Adangal/1B in AP, Dharani in TS).</li>
        <li><strong>Verify Mortgage Discharge Certificates:</strong> If a prior mortgage appears on Index II / Form 15, ensure a registered Release Deed or Memorandum of Deposit of Title Deeds (MODTD) discharge receipt is attached.</li>
        <li><strong>Obtain Certified Search Copies for Missing Periods:</strong> If digital portal records show gaps due to historical digitisation limits (pre-1985), submit a physical application for manual SRO index searches.</li>
    </ol>
</div>
',Description:
