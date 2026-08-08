<?php
return array (
  'slug' => 'pondicherry-ec-online',
  'keyword' => 'pondicherry ec online, puducherry ec online, nilavarai puducherry ec, regn puducherry gov in, ec search pondicherry',
  'title' => 'Pondicherry EC Online: Puducherry Nilavarai Portal Guide (2026)',
  'meta_desc' => 'Search and download Puducherry Encumbrance Certificate (EC) online via regn.py.gov.in and Nilavarai portal. Check SRO charges and guideline values.',
  'h1_title' => 'Pondicherry EC Online: Puducherry Portal Guide',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"What is the official website for Puducherry EC online search?","answer":"The official portal administered by the Department of Revenue and Disaster Management, Registration Branch Puducherry is regn.py.gov.in."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">The Union Territory of Puducherry (Pondicherry, Karaikal, Mahe, Yanam) provides digital Encumbrance Certificate (EC) searches through the <strong>Puducherry Registration Department Portal</strong> (`regn.py.gov.in`) and <strong>Nilavarai Portal</strong>.</p>

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
    Property transactions and boundary verifications in the Union Territory of Puducherry require tracing ownership registers through the registration department. If you are conducting a title audit, you must perform a comprehensive <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> verification. The digitized land portal helps citizen users look up transaction history. To begin the query, access the official <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portal.
</p>

<h2 id="heading-1">Understanding the administrative regions and registration setup in Pondicherry</h2>
<p class="content-text">
    The Union Territory of Puducherry is divided into four geographically distinct regions: Puducherry, Karaikal, Mahe, and Yanam. Each region has its own administrative setup and Sub-Registrar Offices (SRO) managed by the Department of Revenue and Disaster Management. When a property transaction is registered, a deed is executed at the corresponding SRO. The registration indexes (Index I and II) compile all transaction details including the survey numbers, boundary details, names of buyers and sellers, and valuation records.
</p>
<p class="content-text">
    An Encumbrance Certificate (EC) acts as primary evidence that the property has not been sold or mortgaged. If a bank has extended credit against the property, the registered mortgage charge will appear in the certificate logs. For clean properties, the department issues a Nil Encumbrance Certificate, proving that no active charges exist. It is essential to obtain a certified copy bearing a digital cryptographic signature for legal transactions, municipal name transfers, or bank loan processing.
</p>

<!-- Widget 1: Pondicherry SRO & District Selector Tool (app-state-select) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, hsl(215, 30%, 98%) 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: hsl(215, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🏢 Puducherry Regional SRO Directory
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Select your Pondicherry territory region to display corresponding Sub-Registrar Office details and contact info.
    </p>
    
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Territory Region</label>
            <select id="pondy-region-selector" class="app-state-select" onchange="showPondySroDetails()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff; box-sizing: border-box;">
                <option value="">-- Choose Region --</option>
                <option value="puducherry">Puducherry Central</option>
                <option value="karaikal">Karaikal</option>
                <option value="mahe">Mahe</option>
                <option value="yanam">Yanam</option>
            </select>
        </div>
    </div>
    
    <div id="pondy-sro-details" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function showPondySroDetails() {
    var reg = document.getElementById("pondy-region-selector").value;
    var infoBox = document.getElementById("pondy-sro-details");
    
    if (!reg) {
        infoBox.style.display = "none";
        return;
    }
    
    infoBox.style.display = "block";
    infoBox.style.backgroundColor = "hsl(215, 100%, 98%)";
    infoBox.style.borderColor = "hsl(215, 100%, 88%)";
    
    var content = "";
    if (reg === "puducherry") {
        content = "<strong>Puducherry SRO:</strong> Kamaraj Salai, Saram, Puducherry - 605013. Phone: 0413-2201260. Timings: 9:30 AM - 5:30 PM.";
    } else if (reg === "karaikal") {
        content = "<strong>Karaikal SRO:</strong> Collectorate Complex, Karaikal - 609605. Phone: 04368-222480. Timings: 9:30 AM - 5:30 PM.";
    } else if (reg === "mahe") {
        content = "<strong>Mahe SRO:</strong> Civil Station Road, Mahe - 673310. Phone: 0490-2332150. Timings: 9:30 AM - 5:30 PM.";
    } else if (reg === "yanam") {
        content = "<strong>Yanam SRO:</strong> Sub-Registrar Office, Yanam - 533464. Phone: 0884-2321450. Timings: 9:30 AM - 5:30 PM.";
    }
    
    infoBox.innerHTML = "<div style=\\"font-size: 0.95rem; color: hsl(215, 100%, 20%); line-height: 1.6;\\">" + content + "</div>";
}
</script>

<h2 id="heading-2">Citizen Registration Process on the Puducherry Registration Portal</h2>
<p class="content-text">
    To apply for a certified Encumbrance Certificate, you must register a citizen user profile on the official Puducherry registration portal (regn.py.gov.in). Locate the user registration link on the homepage. The registration form requires you to select your citizen type, choose a unique username, and enter your full name exactly as it appears on your government identification documents. You must specify a password containing uppercase characters, numbers, and special symbols.
</p>
<p class="content-text">
    Enter your personal details including gender, date of birth, email address, and active mobile number. The system requires providing an ID proof type, such as Aadhaar Card, PAN Card, Voter ID, or Passport. Enter the ID number carefully. In the address details section, enter your current house door number, street name, city, district, and postal pin code. Solve the captcha verification and click on the "Send OTP" button. The portal will send a one-time password to your registered mobile number. Enter the OTP code in the input box and click on the "Register" button to complete your registration. Once registered, users gain access to the citizen service dashboard to download documents. Mention that the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> dashboard is updated after every transaction.
</p>
<p class="content-text">
    When registering a user account, you must select whether you want to register as a citizen or a document writer. Most users should choose citizen registration. Enter a unique login ID that contains alphanumeric characters. The system will run a lookup to check if the ID is available. Ensure that the email address and mobile number you provide are active, as the portal relies on these details for transactional notifications, OTP confirmations, and sending PDF download alerts. The registry database tracks user logins to prevent automated scraping of property index data.
</p>

<!-- Widget 2: Puducherry Search Surcharge Calculator (app-calc-years) -->
<div class="custom-card" id="app-calc-years" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: hsl(15, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 Puducherry Search Fee Calculator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Calculate estimated Puducherry search fees based on your query duration.
    </p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Start Year</label>
            <input type="number" id="pondy-start-year" value="2000" min="1975" max="2026" oninput="calculatePondySearchFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">End Year</label>
            <input type="number" id="pondy-end-year" value="2025" min="1975" max="2026" oninput="calculatePondySearchFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
    </div>
    
    <div id="pondy-fee-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculatePondySearchFee() {
    var start = parseInt(document.getElementById("pondy-start-year").value);
    var end = parseInt(document.getElementById("pondy-end-year").value);
    var resultBox = document.getElementById("pondy-fee-result");
    
    if (isNaN(start) || isNaN(end) || start > end) {
        resultBox.style.display = "none";
        return;
    }
    
    var years = end - start + 1;
    var searchCharge = 20 + (years > 1 ? (years - 1) * 10 : 0); // Puducherry search charges: ₹20 for 1st year, ₹10/additional year
    var copyCharge = 50;
    var total = searchCharge + copyCharge + 10; // service charges
    
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
    if (document.getElementById("pondy-start-year")) {
        calculatePondySearchFee();
    }
});
</script>

<h2 id="heading-3">Step-by-Step Guide to Search and Query Land Records in Pondicherry</h2>
<p class="content-text">
    To query property logs, log in to the registration portal and select the menu path: Citizen Services &rarr; Online EC. The search screen requires several fields that define the location of the property. Select the region (Puducherry, Karaikal, Mahe, or Yanam) and the specific SRO. Choose the village name from the drop-down list. Next, specify the search period by entering the "Start Date" and "End Date". The database supports digital searches from 2005 onwards. For older records, you must submit a manual request. You can check the status of your request using the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portal.
</p>
<p class="content-text">
    When selecting the Sub-Registrar Office, make sure you choose the correct administrative jurisdiction. In some cases, a single revenue village may fall under the search boundaries of multiple offices. To ensure you query the correct database index, look at the parent sale deed document. The header section of the deed lists the SRO name where the document was signed. Selecting the wrong office will result in a blank record response, even if the property has a long transaction history.
</p>
<p class="content-text">
    The most crucial step is entering the property identification parameters. Under the search type, select "Survey Wise" search. Enter the correct Survey Number and its corresponding Subdivision Number. If the property is defined by boundaries, you can select "Boundary Wise" search and enter the names of neighbors or streets bordering the plot on the North, South, East, and West sides. Finally, enter the captcha code and click "Search" to view the matching registry index entries.
</p>

<!-- Widget 3: Pondicherry Registry Readiness Checklist (app-readiness-deed) -->
<div class="custom-card" id="app-readiness-deed" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, hsl(140, 30%, 98%) 100%);">
    <h3 style="margin-top: 0; color: hsl(140, 90%, 25%); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        📋 Puducherry Readiness Checklist
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Confirm your system settings and SRO approval status to ensure a successful PDF download.
    </p>
    
    <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem;">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="pondy-check-app" onchange="runPondyCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="pondy-check-app" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Application status in the request list shows "Approved".</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="pondy-check-pay" onchange="runPondyCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="pondy-check-pay" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Government fee transaction is fully reconciled and success receipt generated.</label>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="pondy-check-pop" onchange="runPondyCheck()" style="width: 18px; height: 18px; cursor: pointer;">
            <label for="pondy-check-pop" style="font-size: 0.9rem; color: #334155; cursor: pointer;">Browser pop-up blockers are turned off for regn.py.gov.in domain.</label>
        </div>
    </div>
    
    <div id="pondy-check-result" style="padding: 1rem; border-radius: 6px; border: 1px solid var(--border); background-color: #f1f5f9; font-size: 0.9rem; font-weight: 600; color: #475569;">
        Verification checklist status.
    </div>
</div>

<script>
function runPondyCheck() {
    var check1 = document.getElementById("pondy-check-app").checked;
    var check2 = document.getElementById("pondy-check-pay").checked;
    var check3 = document.getElementById("pondy-check-pop").checked;
    var resultBox = document.getElementById("pondy-check-result");
    
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
    if (document.getElementById("pondy-check-app")) {
        runPondyCheck();
    }
});
</script>

<h2 id="heading-4">Filing the application and paying government fees online</h2>
<p class="content-text">
    Once you review the matching search results on the portal, click on the "Apply Online" button to initiate a certified copy request. The portal will direct you to the application details form, where you must confirm the search parameters and review the computed government filing fees. The fee structure for an online Puducherry application is determined by the duration of the search period. The registration department charges a search fee of twenty rupees for the first year, and ten rupees for every subsequent year. Additionally, a copying fee of fifty rupees is charged for issuing the digitally signed certificate, along with nominal portal service charges. This step initiates the payment verification workflow on the <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> portal.
</p>
<p class="content-text">
    Click on the payment button to proceed to the secure government payment gateway, which supports multiple payment modes, including SBI ePay, net banking, credit cards, debit cards, and UPI options. Select your preferred banking method and enter your details. Once the payment transaction is successful, the portal will generate an electronic payment receipt containing a unique Government Receipt Number (GRN) and temporary transaction reference code. It is essential to download and print this receipt for your records. If the payment is deducted from your bank account but the portal displays a failure status, do not make a second payment. The finance department reconciles transaction records within twenty-four hours, after which the status will update to success automatically.
</p>
<p class="content-text">
    After successful payment, the application is forwarded to the digital worklist of the Sub-Registrar Office (SRO) where the property is registered. A clerk from the registration department reviews the digitized index files (Index I, II, and III), verifies the survey number boundaries, and cross-checks the details against the registered deeds database. If the entries match, the Sub-Registrar reviews the report and signs the document using a cryptographic USB token key. The certified certificate is then converted into a secure PDF document and uploaded to the portal, a process that typically takes three to five business days.
</p>

<h2 id="heading-5">How to download the certified PDF copy and validate the signature</h2>
<p class="content-text">
    To download your approved Encumbrance Certificate, log in to the Puducherry portal using your citizen credentials. Navigate to the top menu, select "Citizen Services", and click on the "Request List" tab from the drop-down menu. The screen will display all your submitted applications along with their current status. Find your application using the reference number. If the status is marked as "Approved", you will see a download button next to the entry. Click on the link to download the certified copy PDF document to your local computer.
</p>
<p class="content-text">
    The downloaded certified copy is a multi-page document that displays the official government seal, a unique QR code, a barcode, and the cryptographic digital signature details of the Sub-Registrar. To check the validity of the certificate, open the PDF file in Adobe Acrobat Reader. Upon opening, you may notice a signature block displaying a yellow question mark with the status message "Signature Not Verified". This occurs because Adobe Reader does not automatically trust the security certificate of the Puducherry registration department.
</p>
<p class="content-text">
    To resolve this, right-click on the signature panel and select "Show Signature Properties" from the context menu. Click on "Show Signer Certificate" in the dialog box, and navigate to the "Trust" tab. Click on "Add to Trusted Certificates" and confirm the security prompt. Check the boxes that permit trusting this certificate for certified documents, dynamic content, and JavaScript execution. Click "OK" to close the dialogs. Finally, click on the "Validate Signature" button in the signature panel. The yellow question mark will instantly change into a green checkmark, confirming that the digital signature is authentic and the document has not been altered since it was signed.
</p>

<h2 id="heading-6">Bilingual glossary of Puducherry land administration terms</h2>
<p class="content-text">
    When conducting a property title search and reviewing your registration records, you will encounter several local land administration terms. Understanding these concepts is essential to verify ownership details:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>Patta (பட்டா)</strong>: A land revenue document issued by the Deputy Collector (Revenue) confirming ownership of the land.</li>
    <li><strong>Chitta (சிட்டா)</strong>: A record maintained by the VAO detailing ownership, land classification ( Punja or Nanja ), and tax details.</li>
    <li><strong>Adangal (அடங்கல்)</strong>: The annual cultivation register tracking land type, crop cultivation, and tenancy.</li>
    <li><strong>Guideline Value</strong>: The minimum market value of a property set by the government for registration and stamp duty calculation.</li>
    <li><strong>SRO</strong>: The Sub-Registrar Office where property deeds are executed, registered, and archived.</li>
    <li><strong>FMB Sketch / Boundary Map</strong>: The field measurement sketch showing survey boundaries and subdivision stones.</li>
</ul>
<p class="content-text">
    Property buyers should check that the details on the certified copy match the details on the Patta and boundary sketch. Any mismatch in owner names or survey subdivision parameters could create issues during land mutation. For additional support, consult the main <strong><a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a></strong> guide.
</p></div>',
);
