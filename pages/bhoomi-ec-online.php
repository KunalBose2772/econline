<?php
return array (
  'slug' => 'bhoomi-ec-online',
  'keyword' => 'bhoomi ec online, bhoomi ec online karnataka, ec bhoomi online, ec in bhoomi, bhoomi online ec',
  'title' => 'Bhoomi EC Online Karnataka: Pahani RTC & Kaveri EC (2026)',
  'meta_desc' => 'Search Bhoomi RTC Pahani land records and Kaveri online EC in Karnataka. Learn how to verify agricultural land mutation status and SRO deeds.',
  'h1_title' => 'Bhoomi EC Online Karnataka: RTC Pahani & Kaveri Search Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"Can I view an Encumbrance Certificate directly on the Bhoomi Karnataka portal?","answer":"No. The Bhoomi portal provides agricultural Pahani RTC (Record of Rights, Tenancy, and Crops) and Mutation Status. To view or download an Encumbrance Certificate (EC), you must access the Kaveri 2.0 portal (kaverionline.karnataka.gov.in)."},{"question":"How do I search Bhoomi RTC Pahani online in Karnataka?","answer":"Visit bhoomionline.karnataka.gov.in, select \'View RTC and MR\', select your District, Taluk, Hobli, Village, and input Survey Number, Surnoc, and Hissa Number."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">The <strong>Bhoomi Portal</strong> (`bhoomionline.karnataka.gov.in`) is Karnataka’s flagship flagship Revenue Land Records system, serving over 3 crore agricultural land RTC records. While Kaveri 2.0 manages SRO deed registrations and Encumbrance Certificates (Form 15/16), Bhoomi manages land revenue titles, survey sub-divisions, and mutation orders.</p>

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
    Property buyers, developers, and agricultural land owners in Karnataka rely on digitized land administration tools to verify titles, check possession statuses, and monitor mutation processes. In Karnataka, the land records system is divided between the revenue department\'s Bhoomi portal and the registration department\'s Kaveri portal. If you are conducting a transaction, you must query the main <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> search utility.
</p>

<p class="content-text">
    The Bhoomi system digitizes land registers, land maps, and RTC (Record of Rights, Tenancy, and Crops) details, making it one of India\'s most advanced agricultural land records portals. Keeping track of land ownership details, survey coordinates, and liabilities makes checking the status of your <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> application simple. In this detailed guide, we will walk you through searching Bhoomi, downloading your Pahani/RTC records, tracking mutation status, and understanding the differences between Bhoomi and Kaveri services.
</p>

<h2 id="heading-1">What is the Bhoomi Land Records Portal?</h2>
<p class="content-text">
    Launched in the year 2000 by the Government of Karnataka, Bhoomi is the flagship project for the management and digitization of land records across all 30 districts of the state. Prior to the Bhoomi portal, land records were maintained manually by village accountants, leading to significant delays, inaccuracies, and opportunities for exploitation. Bhoomi completely digitized agricultural land ledgers, ensuring that records of rights, tenancy details, and crop records are accessible to any citizen online. Today, users can retrieve documents, verify owner names, review active bank loans or court cases on a survey plot, and track mutation applications. To learn how other states manage their digitized registers, you can access comprehensive guides on our <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> resources section.
</p>

<!-- Widget 1: Karnataka Land District Locator -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, hsl(215, 30%, 98%) 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: hsl(215, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📍 Karnataka Land District Locator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your district to find the corresponding Bhoomi Taluk offices and service centres.
    </p>
    
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: hsl(215, 30%, 30%);">Select District</label>
            <select id="bhoomi-district-select" class="app-state-select" onchange="updateDistrictInfo()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="">-- Choose District --</option>
                <option value="bangalore_u">Bengaluru Urban</option>
                <option value="bangalore_r">Bengaluru Rural</option>
                <option value="mysore">Mysuru</option>
                <option value="belagavi">Belagavi</option>
                <option value="kalaburagi">Kalaburagi</option>
            </select>
        </div>
    </div>
    
    <div id="bhoomi-district-info" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function updateDistrictInfo() {
    var district = document.getElementById("bhoomi-district-select").value;
    var infoBox = document.getElementById("bhoomi-district-info");
    
    if (!district) {
        infoBox.style.display = "none";
        return;
    }
    
    infoBox.style.display = "block";
    infoBox.style.backgroundColor = "hsl(215, 100%, 98%)";
    infoBox.style.borderColor = "hsl(215, 100%, 88%)";
    
    var content = "";
    if (district === "bangalore_u") {
        content = "<strong>Bengaluru Urban (ಬೆಂಗಳೂರು ನಗರ):</strong> Contains 5 Taluks (North, South, East, Anekal, Yelahanka). Ideal for property mutation and RTC queries in tech corridors.";
    } else if (district === "bangalore_r") {
        content = "<strong>Bengaluru Rural (ಬೆಂಗಳೂರು ಗ್ರಾಮಾಂತರ):</strong> Contains 4 Taluks (Doddaballapur, Devanahalli, Hosakote, Nelamangala). Primary zone for agricultural land conversions.";
    } else if (district === "mysore") {
        content = "<strong>Mysuru (ಮೈಸೂರು):</strong> Contains 7 Taluks (Mysuru, Hunsur, Nanjangud, T.Narasipura, K.R.Nagar, Periyapatna, Saragur). Heritage district registry records.";
    } else if (district === "belagavi") {
        content = "<strong>Belagavi (ಬೆಳಗಾವಿ):</strong> Contains 14 Taluks. One of the largest districts for land record digitization in North Karnataka.";
    } else if (district === "kalaburagi") {
        content = "<strong>Kalaburagi (ಕಲಬುರಗಿ):</strong> Contains 11 Taluks. Key administrative hub for revenue department records in Kalyana-Karnataka region.";
    }
    
    infoBox.innerHTML = "<div style=\\"font-size: 0.95rem; color: hsl(215, 100%, 20%); line-height: 1.6;\\">" + content + "</div>";
}
</script>

<h2 id="heading-2">Understanding the RTC (Record of Rights, Tenancy, and Crops / Pahani)</h2>
<p class="content-text">
    The most important document managed by the Bhoomi portal is the Record of Rights, Tenancy, and Crops, popularly known as the RTC or Pahani (ಪಹಣಿ). This is a comprehensive certificate that contains vital information regarding a specific piece of land. A standard RTC is divided into several columns, each indicating key legal details. Section 1 outlines details like the district, taluk, hobli, village name, survey number, sub-division number, and total land area measured in acres and guntas. Section 2 records owner details, including the name of the owner, parentage, share details, and the source of ownership (such as sale deed, inheritance, partition deed, or gift deed).
</p>
<p class="content-text">
    Section 3 contains information about crop details, showing the types of crops grown, the season (Kharif or Rabi), the soil category (dry, wet, garden, or waste land), and the water source used for irrigation. Section 4 holds details of liabilities, which record any loans, mortgages, or bank encumbrances that exist on the land plot. Verifying the liabilities section of the RTC is a major step in the Karnataka <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> land title audit flow. If a bank has recorded a charge or mortgage, the land cannot be sold or mutated until a discharge deed is registered.
</p>

<h2 id="heading-3">Difference between Bhoomi Land Records and Kaveri Online Services</h2>
<p class="content-text">
    Many citizens get confused between the Bhoomi portal and the Kaveri Online Services portal, often trying to search for the same records on both. It is essential to understand that these two systems are managed by different government departments and serve distinct purposes. Bhoomi is managed by the Revenue Department of Karnataka, focusing on land possession, cropping patterns, mutation history, survey sketches, and RTC records.
</p>
<p class="content-text">
    On the other hand, Kaveri Online Services (Kaveri 2.0) is operated by the Department of Stamps and Registration. Kaveri is used to search registered deeds, check property valuation rates, and download certified copies of Encumbrance Certificates (EC). While Bhoomi shows who currently cultivates and owns the land, Kaveri tracks the legal registration history and financial liabilities. You will find detailed descriptions of government portals in the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> database lookup.
</p>

<!-- Widget 2: Bhoomi RTC & Mutation Fee Calculator -->
<div class="custom-card" id="app-calc-years" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: hsl(35, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 Bhoomi RTC & Mutation Fee Calculator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Compute the official government fees for downloading Record of Rights (RTC / Pahani) and Mutation reports.
    </p>
    
    <div style="display: grid; grid-template-columns: 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Document Type</label>
            <select id="bhoomi-doc-type" onchange="calculateBhoomiFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="rtc">Current Year RTC (₹15)</option>
                <option value="rtc_old">Old Year RTC (₹15 per year)</option>
                <option value="mutation_status">Mutation Status (₹15)</option>
                <option value="mutation_deed">Mutation Extract (₹15)</option>
            </select>
        </div>
        <div id="bhoomi-years-container" style="display: none;">
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Number of Years</label>
            <input type="number" id="bhoomi-calc-years-input" value="1" min="1" max="50" oninput="calculateBhoomiFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
    </div>
    
    <div id="bhoomi-fee-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateBhoomiFee() {
    var type = document.getElementById("bhoomi-doc-type").value;
    var yearsInput = document.getElementById("bhoomi-calc-years-input");
    var yearsContainer = document.getElementById("bhoomi-years-container");
    var resultBox = document.getElementById("bhoomi-fee-result");
    
    if (type === "rtc_old") {
        yearsContainer.style.display = "block";
    } else {
        yearsContainer.style.display = "none";
    }
    
    var unitFee = 15;
    var total = 0;
    var desc = "";
    
    if (type === "rtc") {
        total = unitFee;
        desc = "Current Year Pahani (RTC) download charge.";
    } else if (type === "rtc_old") {
        var years = parseInt(yearsInput.value);
        if (isNaN(years) || years < 1) years = 1;
        total = unitFee * years;
        desc = "Historical Pahani (RTC) download charges for " + years + " year(s).";
    } else if (type === "mutation_status") {
        total = unitFee;
        desc = "Mutation status verification charge.";
    } else if (type === "mutation_deed") {
        total = unitFee;
        desc = "Mutation extract certified copy charge.";
    }
    
    resultBox.style.display = "block";
    resultBox.style.backgroundColor = "hsl(35, 100%, 97%)";
    resultBox.style.borderColor = "hsl(35, 100%, 85%)";
    
    resultBox.innerHTML = "<div style=\\"font-weight: 700; color: hsl(35, 100%, 25%); margin-bottom: 0.75rem; font-size: 1.05rem;\\">Bhoomi Fee Summary:</div>" +
        "<div style=\\"font-size: 0.95rem; color: #334155; line-height: 1.6;\\">" +
            "<div><strong>Selected Service:</strong> " + desc + "</div>" +
            "<div style=\\"border-top: 1px solid hsl(35, 100%, 85%); margin-top: 0.75rem; padding-top: 0.75rem; font-size: 1.1rem; font-weight: 700; color: hsl(35, 100%, 20%);\\">" +
                "Total Government Fee: ₹" + total + 
            "</div>" +
        "</div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("bhoomi-doc-type")) {
        calculateBhoomiFee();
    }
});
</script>

<h2 id="heading-4">How to Search RTC and Mutation Status on Bhoomi Online</h2>
<p class="content-text">
    To view your RTC (Pahani) records on the Bhoomi portal without paying a fee, follow these steps. First, open the official Bhoomi portal at landrecords.karnataka.gov.in. Under the citizen services tab, click on "View RTC and MR". You will be redirected to an input search page. Choose the District, Taluk, Hobli, and Village where the land parcel is situated. Enter the Survey Number and click the search button. The system will display the available sub-division numbers under that survey ledger. Select the correct sub-division number and select the year of the RTC you want to search.
</p>
<p class="content-text">
    The screen will show details such as the owner name, total area, and cropping details. If you want to check the history of title transfers, click on the "MR" (Mutation Register) tab next to the RTC tab. The MR tab displays the mutation entry status (whether approved, rejected, or pending verification). The mutation status reflects if a deed has successfully mutated in the revenue registry books. If you need details about downloading certified copies, check our homepage link <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> for more guides.
</p>

<!-- Widget 3: Bhoomi vs Kaveri Portal Service Directory -->
<div class="custom-card" id="app-readiness-deed" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, hsl(140, 30%, 98%) 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📋 Karnataka Land Portal Service Directory
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Click on any land record service to identify whether you should use the Bhoomi portal or the Kaveri Online Services portal.
    </p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <button type="button" onclick="setServiceInfo(\'rtc\')" style="padding: 0.75rem; font-weight: bold; border-radius: 6px; border: 1px solid var(--border); background-color: white; color: var(--primary); cursor: pointer; transition: all 0.2s;">RTC (Pahani) Extract</button>
        <button type="button" onclick="setServiceInfo(\'ec\')" style="padding: 0.75rem; font-weight: bold; border-radius: 6px; border: 1px solid var(--border); background-color: white; color: var(--primary); cursor: pointer; transition: all 0.2s;">Encumbrance Certificate (EC)</button>
        <button type="button" onclick="setServiceInfo(\'mutation\')" style="padding: 0.75rem; font-weight: bold; border-radius: 6px; border: 1px solid var(--border); background-color: white; color: var(--primary); cursor: pointer; transition: all 0.2s;">Mutation Status</button>
        <button type="button" onclick="setServiceInfo(\'valuation\')" style="padding: 0.75rem; font-weight: bold; border-radius: 6px; border: 1px solid var(--border); background-color: white; color: var(--primary); cursor: pointer; transition: all 0.2s;">Property Market Valuation</button>
    </div>
    
    <div id="karnataka-portal-info" style="padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border); background-color: #ffffff; font-size: 0.95rem; color: #475569; line-height: 1.6;">
        Click a button above to view routing details.
    </div>
</div>

<script>
function setServiceInfo(service) {
    var infoBox = document.getElementById("karnataka-portal-info");
    
    if (service === "rtc") {
        infoBox.innerHTML = 
            "<div style=\\"font-weight: 700; color: hsl(140, 90%, 20%); margin-bottom: 0.5rem;\\">Service: Record of Rights, Tenancy & Crops (RTC / Pahani)</div>" +
            "<div><strong>Portal:</strong> Bhoomi Land Records Portal</div>" +
            "<div><strong>Purpose:</strong> View cropping patterns, owner details, soil type, and active land liabilities. Certified RTC costs ₹15 online.</div>";
    } else if (service === "ec") {
        infoBox.innerHTML = 
            "<div style=\\"font-weight: 700; color: hsl(140, 90%, 20%); margin-bottom: 0.5rem;\\">Service: Encumbrance Certificate (EC)</div>" +
            "<div><strong>Portal:</strong> Kaveri Online Services Portal (Kaveri 2.0)</div>" +
            "<div><strong>Purpose:</strong> Search registered deeds, sales, and mortgages. While Bhoomi manages possession details, Kaveri records registered deed histories.</div>";
    } else if (service === "mutation") {
        infoBox.innerHTML = 
            "<div style=\\"font-weight: 700; color: hsl(140, 90%, 20%); margin-bottom: 0.5rem;\\">Service: Mutation Report & Tracking</div>" +
            "<div><strong>Portal:</strong> Bhoomi Land Records Portal</div>" +
            "<div><strong>Purpose:</strong> Track title transfers after property purchase, inheritances, or gifts. Get mutation status and process registers.</div>";
    } else if (service === "valuation") {
        infoBox.innerHTML = 
            "<div style=\\"font-weight: 700; color: hsl(140, 90%, 20%); margin-bottom: 0.5rem;\\">Service: Guidance Value Lookup</div>" +
            "<div><strong>Portal:</strong> Kaveri Online Services Portal (Kaveri 2.0)</div>" +
            "<div><strong>Purpose:</strong> Determine minimum registry values for land plots, apartments, and commercial areas prior to deed execution.</div>";
    }
}
</script>

<h2 id="heading-5">How to Apply for Mutation of Land Records Online</h2>
<p class="content-text">
    When land is purchased or inherited in Karnataka, the title details must be transferred in the revenue department registers. This administrative process is known as mutation (MR). Initiating a mutation on the Bhoomi portal requires submitting several physical documents to the nearest Taluk office or Bhoomi Kiosk center. The essential documents include the registered sale deed (crore details page, executant, and claimant details), the parent deed copy, the latest RTC extract, and the land partition sketch (FMB/Tippan) if applicable.
</p>
<p class="content-text">
    Once the documents are submitted, a Revenue Inspector (RI) visits the land to perform a physical inspection. A public notice is published in the local village chavadi, giving neighbors and stakeholders 30 days to raise any objections to the title transfer. If no objections are received within the stipulated period, the Tahsildar approves the mutation. The Bhoomi database updates the owner column on the RTC, completing the transaction cycle.
</p>

<h2 id="heading-6">How to Resolve Mismatches in Bhoomi and Kaveri Records</h2>
<p class="content-text">
    It is common for land buyers in Karnataka to encounter inconsistencies between the owner names recorded on Kaveri registration deeds and the owner details shown in Column 9 of the Bhoomi RTC. These mismatches usually occur when a mutation transaction was never initiated or remained pending due to administrative delays. In other cases, clerical errors during the digitization of legacy manual records can result in minor name spelling mistakes or survey number transcription errors.
</p>
<p class="content-text">
    To resolve these discrepancies, you must submit a formal rectification application at the corresponding Taluk office. You must attach copies of the registered sale deed, the parent deed history, the current RTC, and the mutation extract. The Revenue Inspector will review the original paper files from the record room, verify the physical signatures, and recommend updates. Once approved, the Tahsildar issues a correction order, and the Bhoomi database is updated. Maintaining consistent records on both portals ensures that any future transaction passes legal scrutiny.
</p>

<h2 id="heading-7">Karnataka Land Administration Document Details Comparison Table</h2>
<p class="content-text">
    To assist buyers and sellers in navigating Karnataka’s complex land registry portals, we have compiled a summary table of various documents, departments, and fees:
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Document Name</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Managing Portal</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Administrative Department</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Government Fee</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Record of Rights (RTC / Pahani)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Bhoomi Portal</td>
                <td>Revenue Department of Karnataka</td>
                <td>₹15 per copy</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Mutation Register Extract (MR)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Bhoomi Portal</td>
                <td>Revenue Department of Karnataka</td>
                <td>₹15 per copy</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Encumbrance Certificate (EC)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Kaveri Online (2.0)</td>
                <td>Department of Stamps and Registration</td>
                <td>Varies by duration (approx. ₹100-250)</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">Land Survey Sketch (FMB / Tippan)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">Bhoomi Portal</td>
                <td>Survey Settlement and Land Records</td>
                <td>₹30 per sketch</td>
            </tr>
        </tbody>
    </table>
</div>

<h2 id="heading-8">Bilingual Checklist for Karnataka Land Purchase Title Audit</h2>
<p class="content-text">
    Buying agricultural or converted land in Karnataka requires a meticulous checklist process to ensure the registry details are clean and undisputable:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>RTC Owner Check</strong>: Compare the owner name in Column 9 of the current RTC with the seller listed in the sale deed.</li>
    <li><strong>Mutation Status Reconcile</strong>: Request the MR copy of the previous transition to ensure no pending notices or objections are active.</li>
    <li><strong>Liabilities and Mortgages Check</strong>: Check Column 11 of the RTC to ensure there are no bank charges or loans registered on the survey coordinates.</li>
    <li><strong>Tippan / FMB Map Audit</strong>: Verify the boundary map from the Survey Office (Akarband / Tippan) to confirm coordinates match ground boundary stones.</li>
    <li><strong>Kaveri EC Audit</strong>: Run a minimum 30-year search history on Kaveri 2.0 to confirm there are no legacy unregistered transactions.</li>
</ul>

<h2 id="heading-9">Conclusion & Revenue Help Desk Information</h2>
<p class="content-text">
    Conducting a thorough check using Bhoomi and Kaveri services is the safest path to property acquisition in Karnataka. If survey errors, name spelling variations, or missing survey subdivisions appear, citizens must file a rectification petition with the local Tahsildar. The Bhoomi back-end allows correcting these errors through formal revenue courts.
</p></div>',
);
