<?php
return array (
  'slug' => 'online-ec-view-tamilnadu-english',
  'keyword' => 'online ec view tamilnadu english, tnreginet english portal, view villangam english tnreginet, tnreginet ec search in english',
  'title' => 'Online EC View Tamil Nadu (English Interface): TNREGINET Guide (2026)',
  'meta_desc' => 'Search and view Tamil Nadu Encumbrance Certificate (Villangam) online in English via TNREGINET portal. Step-by-step English menu translation and SRO guide.',
  'h1_title' => 'Online EC View Tamil Nadu (English Portal Guide)',
  'schema_type' => 'TechArticle',
  'faq_data' => '[{"question":"How do I switch the TNREGINET portal language from Tamil to English?","answer":"Click the \'English\' language toggle button located at the top right header of tnreginet.gov.in to translate all navigation menus and EC search forms into English."},{"question":"Can I download an English version of the Villangam Certificate on TNREGINET?","answer":"Yes. Selecting the English language toggle before executing the search generates the EC index statement in English terminology."}]',
  'content' => '
<div class="manual-page-container" style="line-height: 1.7; color: var(--text-main);">
    
    <p style="font-size: 1.05rem; margin-bottom: 25px;">For non-Tamil speaking citizens, buyers, and financial institutions, the Commercial Taxes and Registration Department of Tamil Nadu provides a complete <strong>English interface on TNREGINET</strong> (`tnreginet.gov.in`) to view and download Encumbrance Certificates (Villangam).</p>

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
    Property transactions and real estate title deeds in the state of Tamil Nadu are officially cataloged in the Tamil language by the Registration Department. However, for non-resident Indians (NRIs), institutional lenders, property buyers from other states, and legal firms, retrieving and understanding these records in English is a critical requirement. Accessing the official <strong>online ec view tamilnadu english</strong> lookup toolkit allows buyers to conduct thorough due diligence, confirm the succession chain, and verify if the land or apartment carries any liabilities in a language they fully comprehend.
</p>

<p class="content-text">
    Before entering into any purchase agreement or paying booking advances, ensuring you check the transaction ledger through an <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> system is a basic security step. Doing so ensures you do not inherit structural mortgage liabilities or legal encumbrances. In this article, we provide a complete step-by-step bilingual guide to searching, translating, and checking the Encumbrance Certificate details in English via the official TNREGINET portal.
</p>

<!-- Widget 1: Registry Terms Translator (Tamil to English) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);">
    <h3 style="margin-top: 0; color: var(--primary); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🗣️ TN Land Registry English-Tamil Translator
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Translate standard Tamil land registry terms appearing on your Villangam Certificate to English legal terms instantly.
    </p>
    
    <div style="margin-bottom: 1.25rem;">
        <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Select Tamil Term</label>
        <select id="translator-select" onchange="runTranslation()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff;">
            <option value="executant">எழுதிக்கொடுத்தவர் (Executant)</option>
            <option value="claimant">எழுதி வாங்கியவர் (Claimant)</option>
            <option value="sro">சார்பதிவாளர் (Sub-Registrar)</option>
            <option value="encumbrance">வில்லங்கம் (Encumbrance)</option>
            <option value="patta">பட்டா (Land Title / Record)</option>
            <option value="survey">புல எண் (Survey Number)</option>
            <option value="subdivision">உட்பிரிவு (Subdivision Number)</option>
            <option value="deed">பத்திரம் (Deed / Document)</option>
        </select>
    </div>
    
    <div id="translation-result" style="padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border); background-color: #ffffff;">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function runTranslation() {
    var term = document.getElementById("translator-select").value;
    var resultBox = document.getElementById("translation-result");
    
    var dictionary = {
        executant: {
            tamil: "எழுதிக்கொடுத்தவர்",
            english: "Executant (Seller / Transferor / Mortgagor)",
            desc: "The person who executes the deed. In a sale transaction, this is the seller. In a mortgage transaction, this is the property owner who is pledging the land to a bank."
        },
        claimant: {
            tamil: "எழுதி வாங்கியவர்",
            english: "Claimant (Buyer / Transferee / Mortgagee)",
            desc: "The person or entity receiving the rights to the property. In a sale, this is the buyer. In a mortgage, this is the bank lending the money."
        },
        sro: {
            tamil: "சார்பதிவாளர்",
            english: "Sub-Registrar Office (SRO)",
            desc: "The local government authority where properties within a specific jurisdiction are registered and records are archived."
        },
        encumbrance: {
            tamil: "வில்லங்கம்",
            english: "Encumbrance",
            desc: "Any liability, legal claim, or financial charge (like an unpaid mortgage) registered against the property that restricts the owner from transferring clean title."
        },
        patta: {
            tamil: "பட்டா",
            english: "Patta (Revenue Title Document)",
            desc: "An official revenue record issued by the Tahsildar department showing the registered owner of a piece of land, its area, and survey number details."
        },
        survey: {
            tamil: "புல எண்",
            english: "Survey Number",
            desc: "A unique number assigned to a specific parcel of land by the revenue department for identification and boundary mapping."
        },
        subdivision: {
            tamil: "உட்பிரிவு",
            english: "Subdivision Number",
            desc: "A sub-code assigned when a larger plot of land with a single survey number is split into smaller portions (e.g., 102/4B)."
        },
        deed: {
            tamil: "பத்திரம்",
            english: "Deed (Document)",
            desc: "The legal instrument (sale deed, partition deed, gift deed) that proves the transfer of property ownership or creation of liabilities."
        }
    };
    
    var data = dictionary[term];
    resultBox.style.borderColor = "var(--border)";
    resultBox.style.backgroundColor = "#f8fafc";
    resultBox.innerHTML = "<div style=\\"font-size: 0.9rem; color: var(--text-muted); font-weight: 600;\\">Tamil Term: <span style=\\"color: var(--accent); font-size: 1rem;\\">" + data.tamil + "</span></div>" +
        "<div style=\\"font-weight: 700; font-size: 1.15rem; color: var(--primary); margin: 0.5rem 0;\\">English: " + data.english + "</div>" +
        "<div style=\\"font-size: 0.95rem; color: #475569; line-height: 1.5;\\">" + data.desc + "</div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("translator-select")) {
        runTranslation();
    }
});
</script>

<h2 id="heading-1">How to Change Language to English on the TNREGINET Portal</h2>
<p class="content-text">
    The Inspector General of Registration (IGR) website in Tamil Nadu features a complete bilingual interface. If you are not comfortable with the Tamil language, you can switch the entire portal structure to English using the language selector. To search and download your <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> document in English, follow this setup guide:
</p>
<ol style="margin-left: 2rem; color: #475569; margin-bottom: 1.5rem; line-height: 1.8;">
    <li>Go to the official registration homepage: <code>https://tnreginet.gov.in</code>.</li>
    <li>Look at the top header area on the right side of the screen. You will see a text hyperlink titled <strong>"English"</strong> (or "தமிழ்" if the portal is currently in English).</li>
    <li>Click on the <strong>English</strong> option. The website will refresh, translating the menus, drop-down options, and navigation tabs.</li>
    <li>Under the main menu, go to <strong>"More" &rarr; "Search EC" &rarr; "Apply Online"</strong> or <strong>"E-Services" &rarr; "Encumbrance Certificate" &rarr; "View EC"</strong>.</li>
    <li>The entry fields (Zone, District, Sub-Registrar Office, Taluk, Village, Survey Number, Subdivision) will be listed in English.</li>
</ol>
<p class="content-text">
    Selecting this setting ensures that the draft copy generated will contain bilingual labels, making it easier to parse details about the property title.
</p>

<!-- Widget 2: Certified EC Fee Calculator (English Edition) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background-color: #ffffff; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
    <h3 style="margin-top: 0; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🧮 TN Certified EC Fee Calculator (English)
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Compute the exact government fee required to apply for and download a digitally signed Certified copy of your EC.
    </p>
    
    <div style="display: grid; grid-template-columns: 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Search Period (in Years)</label>
            <input type="number" id="fee-calc-years" value="30" min="1" max="100" oninput="calculateEnglishFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; box-sizing: border-box;">
        </div>
        <div>
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Copy Delivery Mode</label>
            <select id="fee-calc-mode" onchange="calculateEnglishFee()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff;">
                <option value="online">Online PDF Download (₹0 Portal Charge)</option>
                <option value="post">Registered Post Delivery (₹100 Postage Fee)</option>
            </select>
        </div>
    </div>
    
    <div id="fee-calc-result" style="display: none; padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border);">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function calculateEnglishFee() {
    var years = parseInt(document.getElementById("fee-calc-years").value);
    var mode = document.getElementById("fee-calc-mode").value;
    var resultBox = document.getElementById("fee-calc-result");
    
    if (isNaN(years) || years < 1) {
        resultBox.style.display = "none";
        return;
    }
    
    var baseFee = 15;
    var subsequentFee = (years > 1) ? (years - 1) * 5 : 0;
    var applicationFee = 1; // standard nominal fee
    var postageFee = (mode === "post") ? 100 : 0;
    var total = baseFee + subsequentFee + applicationFee + postageFee;
    
    resultBox.style.display = "block";
    resultBox.style.backgroundColor = "#f0fdf4";
    resultBox.style.borderColor = "#bbf7d0";
    
    resultBox.innerHTML = "<div style=\\"font-weight: 700; color: #15803d; margin-bottom: 0.75rem; font-size: 1.1rem;\\">TN Government Fee Estimation:</div>" +
        "<div style=\\"font-size: 0.95rem; color: #334155; line-height: 1.6;\\">" +
            "<div><strong>Search Duration:</strong> " + years + " Year(s)</div>" +
            "<div><strong>Base Year Application Fee:</strong> ₹" + baseFee + "</div>" +
            "<div><strong>Subsequent Year Search Charges:</strong> ₹" + subsequentFee + " (₹5/year)</div>" +
            "<div><strong>System Service Fee:</strong> ₹" + applicationFee + "</div>" +
            "<div><strong>Delivery/Postage Charges:</strong> ₹" + postageFee + "</div>" +
            "<div style=\\"border-top: 1px solid #bbf7d0; margin-top: 0.75rem; padding-top: 0.75rem; font-size: 1.15rem; font-weight: 700; color: #166534;\\">" +
                "Estimated Total Fee: ₹" + total + 
            "</div>" +
        "</div>";
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("fee-calc-years")) {
        calculateEnglishFee();
    }
});
</script>

<h2 id="heading-2">State-Wise Search Duration and Costs Comparison Table</h2>
<p class="content-text">
    When requesting certified copies, the fee increases based on the depth of the search. While you can search the database using a digital <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> lookup platform, here is the cost breakdown for the state of Tamil Nadu:
</p>

<div style="overflow-x: auto; margin: 1.5rem 0;">
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid var(--border);">
        <thead>
            <tr style="background-color: var(--primary); color: white;">
                <th style="padding: 12px; border: 1px solid var(--border);">Search Duration</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Base Search Fee</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Additional Year Charge</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Portal Fee</th>
                <th style="padding: 12px; border: 1px solid var(--border);">Total Certified Copy Fee</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">1 Year</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0</td>
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600; color: var(--accent);">₹16</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">10 Years</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹45 (9 years)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0</td>
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600; color: var(--accent);">₹61</td>
            </tr>
            <tr style="background-color: #ffffff;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">20 Years</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹95 (19 years)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0</td>
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600; color: var(--accent);">₹111</td>
            </tr>
            <tr style="background-color: #f8fafc;">
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600;">30 Years</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹15</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹145 (29 years)</td>
                <td style="padding: 12px; border: 1px solid var(--border);">₹0</td>
                <td style="padding: 12px; border: 1px solid var(--border); font-weight: 600; color: var(--accent);">₹161</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Widget 3: Zone SRO Assistant (English Directory) -->
<div class="custom-card" style="margin: 2rem 0; padding: 2rem; border-radius: 12px; border: 1px solid var(--border); background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);">
    <h3 style="margin-top: 0; color: var(--primary); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
        🗺️ SRO Zone Finder (English Edition)
    </h3>
    <p class="content-text" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        Locate the Sub-Registrar Office (SRO) name and code in English under key TN Zones.
    </p>
    
    <div style="margin-bottom: 1.25rem;">
        <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.85rem; color: #475569;">Select Zone</label>
        <select id="sro-zone-select" onchange="runSROFinder()" style="width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid var(--border); font-size: 0.95rem; background-color: #fff;">
            <option value="chennai">Chennai Zone</option>
            <option value="coimbatore">Coimbatore Zone</option>
            <option value="madurai">Madurai Zone</option>
            <option value="trichy">Trichy Zone</option>
        </select>
    </div>
    
    <div id="sro-finder-result" style="padding: 1.25rem; border-radius: 8px; border: 1px solid var(--border); background-color: #ffffff;">
        <!-- Filled dynamically -->
    </div>
</div>

<script>
function runSROFinder() {
    var zone = document.getElementById("sro-zone-select").value;
    var resultBox = document.getElementById("sro-finder-result");
    
    var zoneMap = {
        chennai: {
            offices: [
                { name: "SRO Adyar", code: "SRO-ADY", district: "Chennai South" },
                { name: "SRO Mylapore", code: "SRO-MYL", district: "Chennai South" },
                { name: "SRO Tambaram", code: "SRO-TAM", district: "Chennai South" },
                { name: "SRO Central Chennai", code: "SRO-CEN", district: "Chennai Central" }
            ],
            tip: "Select Chennai South or Chennai Central district for municipal flats."
        },
        coimbatore: {
            offices: [
                { name: "SRO Coimbatore Central", code: "SRO-CBEC", district: "Coimbatore" },
                { name: "SRO Singanallur", code: "SRO-SING", district: "Coimbatore" },
                { name: "SRO Ganapathy", code: "SRO-GANA", district: "Coimbatore" }
            ],
            tip: "Coimbatore rural properties often fall under joint registrar offices."
        },
        madurai: {
            offices: [
                { name: "SRO Madurai South", code: "SRO-MDU-S", district: "Madurai" },
                { name: "SRO Tallakulam", code: "SRO-TAL", district: "Madurai" },
                { name: "SRO Melur", code: "SRO-MEL", district: "Madurai" }
            ],
            tip: "Double-check land records registered under colonial joint registrar codes."
        },
        trichy: {
            offices: [
                { name: "SRO Trichy Town", code: "SRO-TRY-T", district: "Tiruchirappalli" },
                { name: "SRO Srirangam", code: "SRO-SRI", district: "Tiruchirappalli" },
                { name: "SRO Lalgudi", code: "SRO-LAL", district: "Tiruchirappalli" }
            ],
            tip: "Ensure proper taluk village mapping before running searches."
        }
    };
    
    var data = zoneMap[zone];
    var html = "<div style=\\"font-weight: 700; margin-bottom: 0.5rem; color: var(--primary);\\">SRO Offices in this Zone:</div>";
    html += "<div style=\\"display: grid; grid-template-columns: 1fr; gap: 0.5rem; margin-bottom: 0.75rem;\\">";
    for (var i = 0; i < data.offices.length; i++) {
        var off = data.offices[i];
        html += "<div style=\\"padding: 0.5rem; border: 1px solid var(--border); border-radius: 4px; display: flex; justify-content: space-between; font-size: 0.9rem;\\">" +
                    "<strong>" + off.name + " (" + off.code + ")</strong>" +
                    "<span style=\\"color: var(--text-muted);\\">" + off.district + "</span>" +
                "</div>";
    }
    html += "</div>";
    html += "<div style=\\"font-size: 0.8rem; font-style: italic; color: var(--text-muted); border-top: 1px solid var(--border); padding-top: 0.5rem;\\">" +
                "Search Tip: " + data.tip +
            "</div>";
    resultBox.innerHTML = html;
}
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById("sro-zone-select")) {
        runSROFinder();
    }
});
</script>

<h2 id="heading-3">Understanding SRO Mapping & Boundary Reconciliations</h2>
<p class="content-text">
    To locate your property transaction registry indices without issues, you must ensure that you know the boundaries in English and cross-reference them with the Tamil revenue books. If the property borders are described in Tamil (வடக்கு for North, தெற்கு for South, கிழக்கு for East, மேற்கு for West), they must be properly translated in your title search notes. Always double check SRO details before filing a request on the <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> portal.
</p>

<h2 id="heading-4">Verification Checklist for Bilingual Title Verification</h2>
<p class="content-text">
    Property buyers should systematically run the following checks when executing a bilingual verification process:
</p>
<ul class="guide-list" style="margin-left: 2rem; color: #475569; line-height: 1.8;">
    <li><strong>Verify the SRO Office</strong>: Ensure SRO codes match the registration district boundaries.</li>
    <li><strong>Match Survey Numbers</strong>: Split survey numbers and subdivisions into distinct entry boxes to prevent search failures.</li>
    <li><strong>Retrieve Draft EC</strong>: Run a guest check to retrieve the transaction log index.</li>
    <li><strong>Translate Registry Columns</strong>: Reconcile Tamil terminologies such as Executant and Claimant with the deed details.</li>
    <li><strong>Cross-reference Patta</strong>: Ensure that the latest buyer listed in the claimant column matches the holder of the Patta document.</li>
    <li><strong>Print & Archive Ledger Records</strong>: Print out the final draft and verify the ledger details via <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> search.</li>
</ul>

<h2 id="heading-5">Conclusion & Professional Resources</h2>
<p class="content-text">
    Accessing the bilingual portal makes verifying property records straightforward for buyers. However, translating legal terminology remains crucial to avoid errors in succession checks. For any complex transaction history or disputed partitions, we recommend consulting a legal advisor in Tamil Nadu. For other states and general guidelines, refer to our central <a href="/ec-online/" title="Read our comprehensive guide on ec online">ec online</a> guidelines.
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
