<?php
return array (
  'slug' => 'how-to-get-ec-online-in-bangalore',
  'keyword' => 'how to get ec online in bangalore, online ec bangalore, kaveri ec search bangalore, bbmp pid ec search, ec online bangalore',
  'title' => 'How to Get EC Online in Bangalore: BBMP PID & Kaveri 2.0 Guide (2026)',
  'meta_desc' => 'Step-by-step 2026 guide to search and download Encumbrance Certificate (EC) online in Bangalore. Use PID number, Khata details, and Kaveri 2.0 SRO lookup.',
  'h1_title' => 'How to Get EC Online in Bangalore: Kaveri 2.0 & BBMP Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"How do I search for an EC in Bangalore using a BBMP PID Number?","answer":"Log into Kaveri 2.0, select \'Online EC\', select your Bangalore SRO (e.g., Jayanagar, Indiranagar, Rajajinagar, Banashankari), choose \'Property Identification Number (PID)\', and enter your 10-digit BBMP PID."},{"question":"Which Bangalore SRO zones are covered on Kaveri 2.0?","answer":"All 5 Bangalore registration zones (Bangalore Urban, Bangalore Rural, Gandhinagar, Rajajinagar, and Shivajinagar) and their respective Sub-Registrar Offices are fully integrated."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">Buying a flat, residential plot, or commercial property in Bangalore requires obtaining an <strong>Encumbrance Certificate (EC)</strong> to verify that the property title is free from bank mortgages and prior sale liabilities. Through <strong>Kaveri 2.0</strong> (`kaverionline.karnataka.gov.in`), citizens search Bangalore EC records using <strong>BBMP PID numbers</strong>, <strong>BDA allotment numbers</strong>, or <strong>Khata numbers</strong>.</p>

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
    Property buyers and land developers in Karnataka must verify historical ownership title details before executing any real estate transactions. If you want to check registered documents, you must run an <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> search. In Bangalore, the document is managed by the Department of Stamps and Registration on the Kaveri 2.0 portal. To start the process, query the official <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portal.
</p>

<h2 id="heading-1">Understanding the legal importance of an Encumbrance Certificate (EC)</h2>
<p class="content-text">
    An Encumbrance Certificate (EC) is a crucial administrative register that records all registered deeds, mortgages, lease agreements, and family partitions associated with a specific property survey number. The document serves as primary proof that the land or building is free from any active legal charges, bank liabilities, or outstanding property loans. When a bank processes a home loan application in Bangalore, they require a minimum of thirteen to thirty years of historical records to verify that there are no prior claims on the property.
</p>
<p class="content-text">
    The Kaveri online system compiles records from various Sub-Registrar Offices (SRO) across Bangalore. If no transactions have occurred within the specified search period, the system issues a "Nil Encumbrance Certificate", proving that the property has no registered claims. Understanding the distinction between a draft copy and a digitally certified copy is critical. A draft copy retrieved online has no legal value and is only for viewing, while a certified copy bears a cryptographic digital signature and is legally binding in a court of law.
</p>

<!-- Widget 1: Kaveri 2.0 Zone & SRO Selector Tool (app-state-select) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, hsl(220, 30%, 98%) 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: hsl(220, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🏢 Bangalore SRO Directory
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your Bangalore registration zone to display corresponding Sub-Registrar Office details and contact info.
    </p>
    
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Registration Zone</label>
            <select id="kaveri-zone-selector" class="app-state-select" onchange="showKaveriSroDetails()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="">-- Choose Zone --</option>
                <option value="gandhinagar">Gandhinagar Zone</option>
                <option value="jayanagar">Jayanagar Zone</option>
                <option value="rajajinagar">Rajajinagar Zone</option>
                <option value="basavanagudi">Basavanagudi Zone</option>
                <option value="shivajinagar">Shivajinagar Zone</option>
            </select>
        </div>
    </div>
    
    <div id="kaveri-sro-details" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function showKaveriSroDetails() {
    var zone = document.getElementById("kaveri-zone-selector").value;
    var infoBox = document.getElementById("kaveri-sro-details");
    
    if (!zone) {
        infoBox.style.display = "none";
        return;
    }
    
    infoBox.style.display = "block";
    infoBox.style.backgroundColor = "hsl(220, 100%, 98%)";
    infoBox.style.borderColor = "hsl(220, 100%, 88%)";
    
    var content = "";
    if (zone === "gandhinagar") {
        content = "<strong>Gandhinagar SRO:</strong> Kandaya Bhawan, KG Road, Bangalore - 560009. Phone: 080-22211560. Timings: 10:00 AM - 5:30 PM.";
    } else if (zone === "jayanagar") {
        content = "<strong>Jayanagar SRO:</strong> 4th Block, 9th Main Road, Bangalore - 560011. Phone: 080-22442560. Timings: 10:00 AM - 5:30 PM.";
    } else if (zone === "rajajinagar") {
        content = "<strong>Rajajinagar SRO:</strong> 1st Block, Dr. Rajkumar Road, Bangalore - 560010. Phone: 080-23321520. Timings: 10:00 AM - 5:30 PM.";
    } else if (zone === "basavanagudi") {
        content = "<strong>Basavanagudi SRO:</strong> Near National College, Bangalore - 560004. Phone: 080-26612880. Timings: 10:00 AM - 5:30 PM.";
    } else if (zone === "shivajinagar") {
        content = "<strong>Shivajinagar SRO:</strong> Infantry Road, Near Police Station, Bangalore - 560001. Phone: 080-22864120. Timings: 10:00 AM - 5:30 PM.";
    }
    
    infoBox.innerHTML = "<div style=\\"font-size: 0.95rem; color: hsl(220, 100%, 20%); line-height: 1.6;\\">" + content + "</div>";
}
</script>

<h2 id="heading-2">How to register a citizen profile on the Kaveri 2.0 portal</h2>
<p class="content-text">
    To request a certified Encumbrance Certificate, you must register a citizen user profile on the Kaveri 2.0 portal (kaverionline.karnataka.gov.in). Open your web browser, navigate to the portal homepage, and locate the login panel. Click on the "Register as New User" link to open the registration form. The form requires you to select your citizen type, choose a unique login ID, and enter your full name exactly as it appears on your government identification documents. You must specify a password containing uppercase characters, numbers, and special symbols.
</p>
<p class="content-text">
    Enter your personal details including gender, date of birth, email address, and active mobile number. The system requires providing an ID proof type, such as Aadhaar Card, PAN Card, Voter ID, or Passport. Enter the ID number carefully. In the address details section, enter your current house door number, street name, city, district, and postal pin code. Solve the captcha verification and click on the "Send OTP" button. The portal will send a one-time password to your registered mobile number. Enter the OTP code in the input box and click on the "Register" button to complete your registration. Once registered, users gain access to the citizen service dashboard to download documents. Mention that the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> dashboard is updated after every transaction.
</p>

<!-- Widget 2: Property Valuation & Search Fee Calculator (app-calc-years) -->
<div class="custom-card" id="app-calc-years" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: hsl(15, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 Kaveri Search Fee Calculator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Calculate estimated Kaveri 2.0 search fees based on your query duration.
    </p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Start Year</label>
            <input type="number" id="kaveri-start-year" value="1995" min="1975" max="2026" oninput="calculateKaveriSearchFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">End Year</label>
            <input type="number" id="kaveri-end-year" value="2025" min="1975" max="2026" oninput="calculateKaveriSearchFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
    </div>
    
    <div id="kaveri-fee-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateKaveriSearchFee() {
    var start = parseInt(document.getElementById("kaveri-start-year").value);
    var end = parseInt(document.getElementById("kaveri-end-year").value);
    var resultBox = document.getElementById("kaveri-fee-result");
    
    if (isNaN(start) || isNaN(end) || start > end) {
        resultBox.style.display = "none";
        return;
    }
    
    var years = end - start + 1;
    var searchCharge = 100 + (years > 1 ? (years - 1) * 30 : 0); // Karnataka search charges: ₹100 for 1st year, ₹30/additional year
    var copyCharge = 100;
    var total = searchCharge + copyCharge + 20; // service charges
    
    resultBox.style.display = "block";
    resultBox.style.backgroundColor = "hsl(15, 100%, 97%)";
    resultBox.style.borderColor = "hsl(15, 100%, 85%)";
    
    resultBox.innerHTML = "<div style=\\"font-weight: 700; color: hsl(15, 100%, 25%); margin-bottom: 0.75rem; font-size: 1.05rem;\\">Filing Cost Summary:</div>" +
        "<div style=\\"font-size: 0.95rem; color: #334155; line-height: 1.6;\\">" +
            "<div><strong>Duration:</strong> " + years + " Year(s)</div>" +
            "<div><strong>Search Surcharge:</strong> ₹" + searchCharge + "</div>" +
            "<div><strong>Certified Copy Fee:</strong> ₹" + copyCharge + "</div>" +
            "<div style=\\"border-top: 1px solid hsl(15, 100%, 85%); margin-top: 0.75rem; padding-top: 0.75rem; font-size: 1.1rem; font-weight: 700; color: hsl(15, 100%, 20%);\\">" +
                "Estimated Total: ₹" + total + 
            "</div>" +
        "</div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("kaveri-start-year")) {
        calculateKaveriSearchFee();
    }
});
</script>

<h2 id="heading-3">How to enter precise search parameters for online Kaveri queries</h2>
<p class="content-text">
    To execute an accurate property title search, log in to your Kaveri account and navigate to the menu: Citizen Services &rarr; Online EC. The search screen requires several fields that define the location of the land parcel. Select the District as "Bangalore Urban" or "Bangalore Rural". Select the specific Sub-Registrar Office (SRO) where the property deed was originally executed. Choose the target revenue Village name from the drop-down list. Next, specify the search period by entering the "Start Date" and "End Date". The database supports digital searches from 2004 to the current date. For older records, you must submit a manual request. You can check the status of your request using the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portal.
</p>
<p class="content-text">
    The most crucial step is entering the property identification parameters. Under the search type, select "Property Wise" search. Enter the correct Survey Number and its corresponding Subdivision Number. For example, if your land is in survey 154/2B, enter 154 in the survey box and 2B in the subdivision box. If you do not enter a subdivision number, the system will pull all records for survey 154, leading to a long list of matching records. If the property is defined by boundaries, you can select "Boundary Wise" search and enter the names of neighbors or streets bordering the plot on the North, South, East, and West sides. Finally, enter the captcha code and click "Search" to view the matching registry index entries.
</p>

<!-- Widget 3: Kaveri 2.0 Document Readiness Checklist (app-readiness-deed) -->
<div class="custom-card" id="app-readiness-deed" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, hsl(140, 30%, 98%) 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📋 Kaveri 2.0 Readiness Checklist
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Confirm your system settings and SRO approval status to ensure a successful PDF download.
    </p>
    
    <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem;">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="kaveri-check-app" onchange="runKaveriCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="kaveri-check-app" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Application status in the request list shows "Approved".</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="kaveri-check-pay" onchange="runKaveriCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="kaveri-check-pay" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Government fee transaction is fully reconciled and success receipt generated.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="kaveri-check-pop" onchange="runKaveriCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="kaveri-check-pop" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Browser pop-up blockers are turned off for kaverionline domain.</label>
        </div>
    </div>
    
    <div id="kaveri-check-result" style="padding: 1rem; border-radius: 6px; border: 1px solid var(--border); background-color: #f1f5f9; font-size: 0.9rem; font-weight: 600; color: #475569;">
        Verification checklist status.
    </div>
</div>

<script>
function runKaveriCheck() {
    var check1 = document.getElementById("kaveri-check-app").checked;
    var check2 = document.getElementById("kaveri-check-pay").checked;
    var check3 = document.getElementById("kaveri-check-pop").checked;
    var resultBox = document.getElementById("kaveri-check-result");
    
    var score = 0;
    if (check1) score++;
    if (check2) score++;
    if (check3) score++;
    
    if (score === 0) {
        resultBox.style.backgroundColor = "#f1f5f9";
        resultBox.style.borderColor = "var(--border)";
        resultBox.style.color = "#475569";
        resultBox.innerHTML = "Check all items to verify download readiness.";
    } else if (score < 3) {
        resultBox.style.backgroundColor = "hsl(35, 92%, 95%)";
        resultBox.style.borderColor = "hsl(35, 92%, 85%)";
        resultBox.style.color = "hsl(35, 92%, 25%)";
        resultBox.innerHTML = "⚠️ Status: Incomplete. Ensure you disable browser pop-up blocks to download files.";
    } else {
        resultBox.style.backgroundColor = "hsl(142, 70%, 95%)";
        resultBox.style.borderColor = "hsl(142, 70%, 85%)";
        resultBox.style.color = "hsl(142, 70%, 25%)";
        resultBox.innerHTML = "✓ Ready! You can download the certified copy PDF from the portal.";
    }
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("kaveri-check-app")) {
        runKaveriCheck();
    }
});
</script>

<h2 id="heading-4">Filing the application and paying government fees online</h2>
<p class="content-text">
    Once you review the matching search results on the portal, click on the "Apply Online" button to initiate a certified copy request. The portal will direct you to the application details form, where you must confirm the search parameters and review the computed government filing fees. The fee structure for an online Kaveri application is determined by the duration of the search period. The registration department charges a search fee of one hundred rupees for the first year, and thirty rupees for every subsequent year included in the search. Additionally, a copying fee of one hundred rupees is charged for issuing the digitally signed certificate, along with nominal portal service charges. This step initiates the payment verification workflow on the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portal.
</p>
<p class="content-text">
    Click on the payment button to proceed to the secure government payment gateway, which supports multiple payment modes, including SBI ePay, net banking, credit cards, debit cards, and UPI options. Select your preferred banking method and enter your details. Once the payment transaction is successful, the portal will generate an electronic payment receipt containing a unique Government Receipt Number (GRN) and temporary transaction reference code. It is essential to download and print this receipt for your records. If the payment is deducted from your bank account but the portal displays a failure status, do not make a second payment. The finance department reconciles transaction records within twenty-four hours, after which the status will update to success automatically.
</p>
<p class="content-text">
    After successful payment, the application is forwarded to the digital worklist of the Sub-Registrar Office (SRO) where the property is registered. A clerk from the registration department reviews the digitized index files (Index I, II, and III), verifies the survey number boundaries, and cross-checks the details against the registered deeds database. If the entries match, the Sub-Registrar reviews the report and signs the document using a cryptographic USB token key. The certified certificate is then converted into a secure PDF document and uploaded to the portal, a process that typically takes three to five business days.
</p>

<h2 id="heading-5">How to download the certified PDF copy and validate the signature</h2>
<p class="content-text">
    To download your approved Encumbrance Certificate, log in to the Kaveri portal using your citizen credentials. Navigate to the top menu, select "Citizen Services", and click on the "Request List" tab from the drop-down menu. The screen will display all your submitted applications along with their current status. Find your application using the reference number. If the status is marked as "Approved", you will see a download button next to the entry. Click on the link to download the certified copy PDF document to your local computer.
</p>
<p class="content-text">
    The downloaded certified copy is a multi-page document that displays the official government seal, a unique QR code, a barcode, and the cryptographic digital signature details of the Sub-Registrar. To check the validity of the certificate, open the PDF file in Adobe Acrobat Reader. Upon opening, you may notice a signature block displaying a yellow question mark with the status message "Signature Not Verified". This occurs because Adobe Reader does not automatically trust the security certificate of the Karnataka registration department.
</p>
<p class="content-text">
    To resolve this, right-click on the signature panel and select "Show Signature Properties" from the context menu. Click on "Show Signer Certificate" in the dialog box, and navigate to the "Trust" tab. Click on "Add to Trusted Certificates" and confirm the security prompt. Check the boxes that permit trusting this certificate for certified documents, dynamic content, and JavaScript execution. Click "OK" to close the dialogs. Finally, click on the "Validate Signature" button in the signature panel. The yellow question mark will instantly change into a green checkmark, confirming that the digital signature is authentic and the document has not been altered since it was signed.
</p>

<h2 id="heading-6">Bilingual glossary of Karnataka land administration terms</h2>
<p class="content-text">
    When conducting a property title search and reviewing your Kaveri records, you will encounter several local land administration terms. Understanding these concepts is essential to verify ownership details:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>RTC / Pahani (ಪಹಣಿ)</strong>: A land revenue document issued by the Bhoomi portal indicating property ownership, survey area, crop, and tenancy details.</li>
    <li><strong>Mutation Register (MR)</strong>: The register tracking transfers of land ownership (mutation transactions) in the revenue logs.</li>
    <li><strong>Akarband</strong>: A survey settlement record showing land description, survey number, and revenue assessment details.</li>
    <li><strong>Guideline Value</strong>: The minimum market value of a property set by the government for registration and stamp duty calculation.</li>
    <li><strong>SRO</strong>: The Sub-Registrar Office where property deeds are executed, registered, and archived.</li>
    <li><strong>Tippan / FMB Sketch</strong>: The field measurement sketch showing survey boundaries and subdivision stones.</li>
</ul>
<p class="content-text">
    Property buyers should check that the details on the certified copy match the details on the RTC and Tippan sketch. Any mismatch in owner names or survey subdivision parameters could create issues during land mutation. For additional support, consult the main <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> guide.
</p></div>',
);
