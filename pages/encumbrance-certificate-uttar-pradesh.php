<?php
return array (
  'slug' => 'encumbrance-certificate-uttar-pradesh',
  'keyword' => 'encumbrance certificate uttar pradesh, igrsup up gov in ec, up ec search online, bhulekh up ror, up sro document search',
  'title' => 'Encumbrance Certificate Uttar Pradesh: IGRSUP Search (2026)',
  'meta_desc' => 'Search and download UP Encumbrance Certificate online via IGRSUP (igrsup.gov.in). Check SRO property deed search, circle rate UP, and Bhulekh Khatauni.',
  'h1_title' => 'Encumbrance Certificate Uttar Pradesh: IGRSUP Search Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"What is the official website for searching EC in Uttar Pradesh?","answer":"The official portal for property registration and encumbrance search in UP is igrsup.gov.in (Stamp and Registration Department, UP)."},{"question":"How do I check UP property circle rates online?","answer":"Visit igrsup.gov.in, select \'Mulyankan Suchi\' (Evaluation List), choose District, Sub-Registrar Office, and Village/Ward to view current per sq meter circle rates."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">In Uttar Pradesh, property encumbrance checks and certified deed searches are conducted online through the <strong>IGRSUP Portal</strong> (`igrsup.gov.in`), while land ownership and Khatauni ROR details are verified through <strong>Bhulekh UP</strong> across all 75 districts including Noida, Ghaziabad, Lucknow, Kanpur, Varanasi, and Agra.</p>

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
    Executing real estate acquisitions in Uttar Pradesh necessitates comprehensive investigation of registered deed indexes to verify legal title and check for encumbrances. The Stamp and Registration Department of UP provides digital services on `igrsup.gov.in` to examine historical transaction files. Conducting property searches using <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> tools allows buyers to confirm SRO register entries, examine registered mortgages, and secure clear titles.
</p>

<h2 id="heading-1">Understanding Encumbrance Records and IGRSUP Index Registers</h2>
<p class="content-text">
    An Encumbrance Certificate (Bharam Praman Patra) outlines all legal liabilities and registered deeds executed on a property over a designated search duration. In Uttar Pradesh, registered transactions are recorded across SRO index books. Form 15 details active entries such as sale deeds, agreements for sale, mortgages, gift deeds, partitions, and judicial attachments. Form 16 (Nil Encumbrance Certificate) is issued when zero registered encumbrances are found.
</p>
<p class="content-text">
    If the owner mortgaged the land or flat to secure a bank loan, a mortgage deed or Memorandum of Deposit of Title Deeds is registered with the local SRO. Performing an <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> inquiry on IGRSUP verifies whether the title is clear, protecting purchasers from pre-existing debts or litigation stays under Section 52 of the Transfer of Property Act 1882.
</p>

<!-- Widget 1: UP District SRO Directory Selector (app-state-select) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, hsl(215, 30%, 98%) 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: hsl(215, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🏢 Uttar Pradesh District SRO Directory
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your UP district to display SRO office details, development authority jurisdiction, and search guidance.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Select Registration District</label>
            <select id="up-district-selector" class="app-state-select" onchange="showUpDistrictInfo()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="">-- Choose District --</option>
                <option value="gautam_buddha_nagar">Gautam Buddha Nagar (Noida, Greater Noida, Yamuna Expressway SROs)</option>
                <option value="ghaziabad">Ghaziabad (Ghaziabad SRO, GDA Layouts)</option>
                <option value="lucknow">Lucknow (Lucknow Sadar, LDA Layouts & Trans-Gomti SROs)</option>
                <option value="kanpur">Kanpur Nagar (Kanpur Sadar, KDA Layouts)</option>
                <option value="varanasi">Varanasi (Varanasi SRO & VDA Layouts)</option>
            </select>
        </div>
    </div>
    <div id="up-district-details" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function showUpDistrictInfo() {
    var d = document.getElementById("up-district-selector").value;
    var box = document.getElementById("up-district-details");
    if (!d) { box.style.display = "none"; return; }
    box.style.display = "block";
    box.style.backgroundColor = "hsl(215, 100%, 98%)";
    box.style.borderColor = "hsl(215, 100%, 88%)";
    var info = {
        gautam_buddha_nagar: "<strong>Noida / Greater Noida Zone:</strong> Search by Khasra Number, Plot Number, or Allotment Deed. Verify NOIDA / GNIDA / YEIDA lease transfer permissions alongside IGRSUP EC.",
        ghaziabad: "<strong>Ghaziabad Zone:</strong> Covers SRO 1 to 5. Check GDA approved layout maps and verify both SRO deed search and Bhulekh UP Khatauni records.",
        lucknow: "<strong>Lucknow Zone:</strong> Covers LDA and Awas Vikas colonies. Trace property chain for 30 years and verify Dakhil Kharij (mutation) status in Tehsil revenue books.",
        kanpur: "<strong>Kanpur Nagar:</strong> High volume commercial & residential registry registers. Verify KDA NOC and check for active court stays or bank charges.",
        varanasi: "<strong>Varanasi Zone:</strong> Trace historical land deeds. Verify VDA layout approvals and ensure seller details match current Bhulekh Khatauni entries."
    };
    box.innerHTML = "<div style=\\"font-size: 0.92rem; color: hsl(215, 100%, 20%); line-height: 1.8;\\">" + info[d] + "</div>";
}
</script>

<h2 id="heading-2">Role of IGRSUP Portal and Sampatti Panjiyan Services</h2>
<p class="content-text">
    The Stamp and Registration Department, Government of UP, provides citizen-centric online tools on `igrsup.gov.in`. Using <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> search facilities on IGRSUP allows property buyers to perform property-wise and document-wise inquiries without visiting SRO offices physically.
</p>
<p class="content-text">
    Key utilities integrated into the IGRSUP portal include: Sampatti Khoje (Property Search), Bharam Praman Patra Application (Encumbrance Certificate), Mulyankan Suchi (Circle Rate Evaluation), and E-Stamp Verification.
</p>

<h2 id="heading-3">Step-by-Step Guide to Apply and Search EC Online on IGRSUP</h2>
<p class="content-text">
    Follow these practical steps to search and obtain an Encumbrance Certificate in Uttar Pradesh:
</p>
<ol class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li>Visit the official UP registration portal (`igrsup.gov.in`).</li>
    <li>Click on <strong>"Sampatti Panjiyan" (Property Registration) &rarr; "Bharam Praman Patra" (Encumbrance Certificate)</strong>.</li>
    <li>Select <strong>"Aavedan Kare" (Apply Online)</strong> to create a new search request.</li>
    <li>Select District, Tehsil, SRO Office, and Village / Ward name.</li>
    <li>Enter Property Identifiers: Khasra Number / Plot Number / House Number or Deed Registration Number and Year.</li>
    <li>Enter the search window start year and end year (minimum 13 to 30 years recommended).</li>
    <li>Enter applicant details (Name, Address, Mobile Number) and submit the form.</li>
    <li>Pay the nominal search fee online via Nivesh Mitra / Rajkosh e-Challan gateway.</li>
    <li>Track application status and download the digitally signed EC PDF once verified by the SRO.</li>
</ol>

<!-- Widget 2: UP Search Fee & Stamp Duty Concession Estimator (app-calc-years) -->
<div class="custom-card" id="app-calc-years" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: hsl(15, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 UP EC Search Fee & Stamp Duty Concession Calculator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Calculate estimated IGRSUP search fees and check applicable UP stamp duty rates (including 1% concession for female buyers). Computing estimated costs using our <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> fee calculator helps plan property due diligence budgets.
    </p>
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Search Period (in Years)</label>
            <input type="number" id="up-search-years" value="15" min="1" max="50" oninput="calculateUpFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Buyer Gender Classification</label>
            <select id="up-buyer-gender" onchange="calculateUpFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
                <option value="male">Male Buyer (Standard 7% Stamp Duty)</option>
                <option value="female">Female Buyer (Concessional 6% Stamp Duty - Max ₹1 Lakh Discount)</option>
                <option value="joint">Joint Buyer (Male + Female - 6.5% Stamp Duty)</option>
            </select>
        </div>
    </div>
    <div id="up-fee-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateUpFee() {
    var yrs = parseInt(document.getElementById("up-search-years").value);
    var gender = document.getElementById("up-buyer-gender").value;
    var box = document.getElementById("up-fee-result");
    if (isNaN(yrs) || yrs < 1) { box.style.display = "none"; return; }
    var searchFee = 15 + (yrs > 1 ? (yrs - 1) * 10 : 0);
    var copyFee = 60;
    var totalFee = searchFee + copyFee;
    var stampRate = "7.0%";
    if (gender === "female") stampRate = "6.0% (1% Rebate Applicable)";
    else if (gender === "joint") stampRate = "6.5% (0.5% Rebate Applicable)";

    box.style.display = "block";
    box.style.backgroundColor = "hsl(15, 100%, 97%)";
    box.style.borderColor = "hsl(15, 100%, 85%)";
    box.innerHTML = "<div style=\\"font-weight: 700; color: hsl(15, 100%, 25%); margin-bottom: 0.75rem; font-size: 1.05rem;\\">UP Search & Registration Fee Summary:</div>" +
        "<div style=\\"font-size: 0.95rem; color: #334155; line-height: 1.8;\\">" +
        "<div><strong>Search Period:</strong> " + yrs + " Year(s)</div>" +
        "<div><strong>IGRSUP Search Fee:</strong> ₹" + searchFee + "</div>" +
        "<div><strong>Certified Copy Fee:</strong> ₹" + copyFee + "</div>" +
        "<div><strong>Applicable Stamp Duty Rate:</strong> " + stampRate + "</div>" +
        "<div style=\\"border-top: 1px solid hsl(15, 100%, 85%); margin-top: 0.75rem; padding-top: 0.75rem; font-weight: 700; font-size: 1.1rem; color: hsl(15, 100%, 20%);\\">Total Estimated Search Fee: ₹" + totalFee + "</div></div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("up-search-years")) { calculateUpFee(); }
});
</script>

<h2 id="heading-4">Cross-Verifying Bhulekh UP Khatauni ROR & Tehsil Mutation (Dakhil Kharij)</h2>
<p class="content-text">
    While IGRSUP manages registered deeds and encumbrances, revenue ownership is tracked through the <strong>Bhulekh UP Portal</strong> (`upbhulekh.gov.in`). The Bhulekh Khatauni (Record of Rights - ROR) lists the names of recorded tenure holders (Bhumidhar with Transferable Rights), Khasra numbers, land area in hectares, and revenue liabilities.
</p>
<p class="content-text">
    After registering a sale deed at the SRO, the buyer must apply for <strong>Dakhil Kharij (Revenue Mutation)</strong> in the concerned Tehsil court. Dakhil Kharij updates the seller name to the buyer name in the Bhulekh Khatauni register. Verifying both IGRSUP EC logs and Bhulekh UP Khatauni entries confirms that title transfers are complete in both registration and revenue departments. Our main <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> directory provides complete state-by-state verification workflows.
</p>

<!-- Widget 3: Document Readiness Checklist (app-readiness-deed) -->
<div class="custom-card" id="app-readiness-deed" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, hsl(140, 30%, 98%) 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📋 Uttar Pradesh Property Verification Checklist
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select the completed due diligence checks to evaluate title cleanliness in UP.
    </p>
    <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem;">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="up-chk1" onchange="runUpCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="up-chk1" style="font-size: 0.9rem; color: #334155; cursor: pointer;">IGRSUP EC search matches seller name and current Khasra / Plot Number.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="up-chk2" onchange="runUpCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="up-chk2" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Bhulekh UP Khatauni ROR confirms seller as Bhumidhar with Transferable Rights.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="up-chk3" onchange="runUpCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="up-chk3" style="font-size: 0.9rem; color: #334155; cursor: pointer;">No active bank mortgage, Gram Sabha restriction, or court stay is registered.</label>
        </div>
    </div>
    <div id="up-check-result" style="padding: 1rem; border-radius: 6px; border: 1px solid var(--border); background-color: #f1f5f9; font-size: 0.9rem; font-weight: 600; color: #475569;">
        Check the boxes to evaluate title readiness.
    </div>
</div>

<script>
function runUpCheck() {
    var c1 = document.getElementById("up-chk1").checked;
    var c2 = document.getElementById("up-chk2").checked;
    var c3 = document.getElementById("up-chk3").checked;
    var box = document.getElementById("up-check-result");
    var score = (c1 ? 1 : 0) + (c2 ? 1 : 0) + (c3 ? 1 : 0);
    if (score === 0) {
        box.style.backgroundColor = "#f1f5f9"; box.style.borderColor = "var(--border)"; box.style.color = "#475569";
        box.innerHTML = "Check the boxes to evaluate title readiness.";
    } else if (score < 3) {
        box.style.backgroundColor = "hsl(38, 92%, 95%)"; box.style.borderColor = "hsl(38, 92%, 82%)"; box.style.color = "hsl(38, 92%, 25%)";
        box.innerHTML = "&#9888; Incomplete title check. Verify Bhulekh Khatauni or SRO mortgage logs.";
    } else {
        box.style.backgroundColor = "hsl(140, 65%, 95%)"; box.style.borderColor = "hsl(140, 65%, 80%)"; box.style.color = "hsl(140, 65%, 22%)";
        box.innerHTML = "&#10003; Verified! Required parameters checked for clean property title execution.";
    }
}
</script>

<h2 id="heading-5">Checking UP Property Circle Rates (Mulyankan Suchi)</h2>
<p class="content-text">
    The Stamp and Registration Department publishes minimum benchmark property circle rates on the IGRSUP portal under <strong>"Mulyankan Suchi"</strong>. Circle rates vary based on location parameters: road width (e.g. 9m, 12m, 18m, 24m+), plot category (agricultural, residential, commercial), and construction quality.
</p>
<p class="content-text">
    Stamp duty must be paid on whichever is higher: the actual transaction value or the circle rate valuation. Verifying circle rates beforehand avoids deed impounding or under-stamping proceedings under Section 47A of the Indian Stamp Act.
</p>

<h2 id="heading-6">Identifying Prohibited & Ceiling Lands in UP</h2>
<p class="content-text">
    Under Section 154 of the UP Revenue Code 2006, land holdings exceeding prescribed ceiling limits or assigned Gram Sabha / Abadi lands carry legal transfer restrictions. Sub-registrars maintain lists of restricted survey numbers.
</p>
<p class="content-text">
    Executing an EC search on IGRSUP confirms whether a plot is flagged under public restriction or government reservation, safeguarding buyers from purchasing unregistrable or disputed land.
</p>

<h2 id="heading-7">Resolving Errors in UP Registered Deeds & Index Logs</h2>
<p class="content-text">
    If clerical errors occur in registered deeds (such as wrong Khasra numbers or misspelt buyer names), the parties must execute and register a <strong>Tatpurti Lekh / Shodhan Patra (Correction Deed)</strong> at the concerned SRO.
</p>
<p class="content-text">
    For online database indexing discrepancies on IGRSUP, citizens can submit an application along with certified physical deed copies for SRO reconciliation.
</p>

<h2 id="heading-8">Bilingual Glossary of UP Land Administration Terms</h2>
<p class="content-text">
    Understanding Uttar Pradesh revenue and registration terminology facilitates efficient due diligence on the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> platform:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>Bharam Praman Patra (भारमुक्त प्रमाण पत्र):</strong> Official Encumbrance Certificate issued by the SRO.</li>
    <li><strong>Bhulekh Khatauni (भूलेख खतौनी):</strong> Revenue Record of Rights listing landowners, Khasra numbers, and land area.</li>
    <li><strong>Khasra Number (खसरा संख्या):</strong> Specific survey plot number assigned to land parcels.</li>
    <li><strong>Dakhil Kharij (दाखिल खारिज):</strong> Revenue mutation process transferring owner name in Tehsil records.</li>
    <li><strong>Bhumidhar (भूमिधर):</strong> Landowner with transferable ownership rights under the UP Revenue Code.</li>
    <li><strong>Circle Rate / Mulyankan (सर्किल रेट / मूल्यांकन):</strong> Government minimum valuation rate per sq meter.</li>
    <li><strong>SRO / Sub-Registrar (उप-निबंधक कार्यालय):</strong> Office where deeds are registered.</li>
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
                <td style="padding: 10px; border: 1px solid var(--border);">Signed digitally by SRO or downloaded via state portals (IGRSUP UP, Kaveri, TNREGINET).</td>
                <td style="padding: 10px; border: 1px solid var(--border);">Verified by SRO index register searches across Index I and Index II.</td>
            </tr>
        </tbody>
    </table>

    <h3 style="color: var(--primary); font-size: 1.25rem; margin-top: 25px;">Essential Due Diligence Checklist Before Purchasing Property</h3>
    <ol style="padding-left: 20px;">
        <li><strong>Cross-Verify EC Entries with Original Sale Deeds:</strong> Ensure document numbers, registration dates, and SRO volumes correspond exactly to physical title documents.</li>
        <li><strong>Check Revenue Records vs. SRO Registrations:</strong> Verify that SRO registrations match local municipality records (Bhulekh Khatauni in UP, Satbara 7/12 in MH, Patta/Chitta in TN, RTC Bhoomi in KA, Adangal/1B in AP).</li>
        <li><strong>Verify Mortgage Discharge Certificates:</strong> If a prior mortgage appears on Form 15, ensure a registered Memorandum of Deposit of Title Deeds (MODTD) discharge receipt is attached.</li>
        <li><strong>Obtain Certified Search Copies for Missing Periods:</strong> If digital portal records show gaps due to historical digitisation limits (pre-1995 or pre-2004), submit a physical application for manual SRO index searches.</li>
</div>
',
);
