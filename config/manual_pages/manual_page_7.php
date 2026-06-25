<?php
// config/manual_pages/manual_page_7.php
return [
    'slug' => 'tn-guideline-value',
    'keyword' => 'tn guideline value',
    'title' => 'TN Guideline Value: Tamil Nadu Land Registry Value Finder',
    'meta_desc' => 'Find the official TN guideline value for property registrations. Learn how to query street rates, survey numbers, and calculate stamp duty on TNREGINET.',
    'h1_title' => 'TN Guideline Value: Tamil Nadu Land Registry Value Finder',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "How do I check the TN guideline value online?", "answer": "You can check the TN guideline value online by logging into the TNREGINET website, choosing the guideline value tab, and entering the survey number or street name."},
        {"question": "What is the fee to check the TN guideline value?", "answer": "Checking and viewing the TN guideline value on the registration portal is completely free of charge for all property location queries."},
        {"question": "Is stamp duty calculated on the TN guideline value or the sale agreement price?", "answer": "Stamp duty is calculated on the TN guideline value or the actual sale agreement value specified in the transfer deed, whichever is higher."},
        {"question": "What is Section 47A of the Stamp Act in Tamil Nadu?", "answer": "Section 47A applies when the sub-registrar believes the property registration deed is undervalued, resulting in a referral to the collector for market value audit."}
    ]',
    'content' => '
<div class="manual-page-container">
    <h1>TN Guideline Value: Tamil Nadu Land Registry Value Finder</h1>
    <p>Checking the official <strong>tn guideline value</strong> is an essential pre-registration step for property buyers in Tamil Nadu. The guideline value is the minimum estimated market rate of land in a specific street, survey number, or village as determined by the state government. Under the Indian Stamp Act, property registrations must pay stamp duty and registration fees calculated on the guideline value or the actual sale consideration, whichever is higher. Retrieving your document records through an <a href="/ec-online/">ec online</a> portal can help confirm that previous transactions were registered under correct valuation baselines.</p>

    <h2>The Legal Basis of Guideline Values</h2>
    <p>Under the Stamp Act, the registration department is authorized to determine minimum values for property transactions to prevent tax evasion through undervalued sale deeds. In Tamil Nadu, the Valuation Committee revises the <strong>tn guideline value</strong> periodically based on location parameters. When a buyer registers a sale deed, SRO officers check the property schedule. If the declared value in the deed falls below the guideline rate, Section 47A of the Act allows the SRO to suspend the deed and refer the valuation to the Special Deputy Collector (Stamps) for market rate assessment. Conducting a parallel search via <a href="/land-ec/">land ec</a> lookup helps confirm that all previous transactions complied with state valuation codes.</p>
    <p>To avoid legal delays or penalty procedures, buyers must search the guideline database before drafting a sale agreement. The guideline rate forms the base for calculating the 7% stamp duty and 4% registration charges (reduced to 2% for some deeds) applicable in Tamil Nadu. Thus, a clear understanding of these values protects buyers from unexpected tax liabilities during deed registration. A parallel check on the <a href="/ec-certificate-download/">ec certificate download</a> portal will display historical transaction values, giving you a historic baseline of what the property was valued at in prior sales.</p>

    <h2>Retrieving Guideline Value on TNREGINET</h2>
    <p>To view guideline rates, log in to the official TNREGINET website. On the menu, choose the option to check the guideline value. Select the search tab, select the year range, and input your district, taluk, village name, and survey number. The portal displays a tabular view showing the street name, survey subdivision code, guideline value per square foot (or hectare for agricultural land), and the property classification (residential, commercial, or agricultural). Conducting an <a href="/ec-view/">ec view</a> lookup is highly recommended to verify that the classification matches previous registrations.</p>

    <h2>Detailed Analysis of SRO Book Indexing</h2>
    <p>SRO registries organize transactions into separate ledger books. Book I is the register of non-testamentary documents relating to immovable property. All sale deeds, gift settlements, partition arrangements, and mortgages are compiled here. Book II is the record of reasons for refusal to register. Book III is the register of wills and authorities to adopt, while Book IV is the miscellaneous register for documents not affecting land titles. Encumbrance searches compile data strictly from Book I. This means details of a registered will or power of attorney may not directly appear on a standard land EC, requiring secondary indices checks at the SRO archives.</p>
    <p>To run a thorough property check, legal professionals also verify Index I and Index II. Index I is a nominal index of executants and claimants, arranged alphabetically. Index II is a descriptive index of properties, categorized by village and survey number. The digital portals retrieve records by querying Index II, which is why a minor error in survey number indexing can omit critical transaction lines. Verification should always include manual validation of the registered document number at the local sub-registrar office if any discrepancies are spotted in the online search results. Performing a search on a <a href="/tn-ec/">TN EC</a> portal can retrieve these indexes, helping verify historical values registered for similar survey numbers in the area.</p>

    <h2>Tamil Nadu Registration Fee Structure Matrix</h2>
    <div style="overflow-x: auto; width: 100%;">
        <table class="responsive-data-table" style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <thead>
                <tr style="background-color: #475569; color: #ffffff;">
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Deed Classification</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Stamp Duty Rate</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Registration Fee</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Valuation Base</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Sale Deed (Outright Sale)</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">7% of Property Value</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">2% of Property Value</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Guideline Value or Sale Price (Higher)</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Gift Settlement (Family)</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">1% of Property Value</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">1% (Max Rs. 4,000)</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Guideline Value of Property</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Partition Deed (Family)</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Rs. 25,000 flat stamp</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">1% of Value (Max Rs. 4,000)</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Guideline Value of Shares</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2>Ensuring Value Classification Correctness</h2>
    <p>When searching the guideline portal, pay close attention to land classification. Agricultural lands are valued per hectare or acre, while residential layouts are valued per square foot or square meter. Entering residential land under an agricultural classification is a common error that leads to undervaluation warnings from the SRO. If the portal reports "Value not found", it indicates that the specific subdivision has not been updated in the digital registry, requiring a physical application at the SRO to obtain a certificate of value. Buyers can use a <a href="/villangam/">villangam certificate</a> check to inspect previous sales, which lists property descriptions and helps confirm correct land classifications.</p>

    <h2>The Section 47A Valuation Reference Process</h2>
    <p>If the Sub-Registrar Office determines that the property is undervalued, the registration transaction is flagged. The document is registered provisionally, but the physical deed is retained by the SRO. The case file is referred to the Special Deputy Collector (Stamps) under Section 47A of the Indian Stamp Act. The Collector conducts a field inspection of the property, queries local market indexes, and issues a notice to the buyer specifying the determined market value and the stamp duty deficit. The buyer has 21 days to appeal the valuation or pay the deficit. Once paid, the SRO releases the original registered sale deed. Checking records via the <a href="/ec-online/">ec online</a> lookup is highly advised, as court attachments or pending valuation disputes are recorded under the property\'s transaction log.</p>

    <h2>The Future of Integrated Digital Registry Systems</h2>
    <p>State governments are actively updating stamps and registration infrastructure to build unified property cards. These new systems aim to link sub-registrar transaction data with land revenue records in real time. When a sale deed is registered, the system automatically triggers a mutation request in the revenue database, reducing mutation delays. Furthermore, integrated portals will verify property boundaries using geographic information system coordinate maps. This prevents multiple registrations for the same layout plot. Buyers can look forward to accessing comprehensive deed, patta, tax, and survey logs through a single portal.</p>

    <h2>Secondary Property Verification Steps</h2>
    <p>Relying solely on database logs is never advised. In addition to a standard search, buyers should perform physical verify steps on land revenue records, specifically checking the patta ledger at the taluk administration. Patta mutation records show current tax liability names. Furthermore, inspecting physical layouts for public pathway easements is critical to check if neighbors have unregistered rights of way. Subjecting the property to court litigation checks is also necessary to verify no legal disputes are active. These composite safety precautions ensure maximum protection against fraud. Consistently verifying these guideline records prevents future legal and financial surprises during property valuation adjustments.</p>

    <h2>Resolving Discrepancies in Guideline Values</h2>
    <p>Guideline values are often subject to errors, where a street rate is indexed higher than actual market values, or commercial rates are mistakenly applied to residential properties. In such cases, property owners can appeal to the Valuation Committee for a rate revision. The appeal requires presenting the site layout, local market sale agreements, and structural reports. Until the committee approves the revision, registration fees must be paid based on the existing rates to avoid transaction delays. Property due diligence requires checking these values carefully before execution.</p>
    <p>Furthermore, in developing suburban areas, SRO registers might show a guideline value that is outdated compared to rapid infrastructure changes. When the market price grows rapidly, the state government holds public hearings to adjust street index parameters. As a property buyer, staying aware of these public valuation schedules is essential to ensure that your draft sale agreement is budgeted correctly for stamp duties. Consulting with a local property lawyer who actively monitors these revisions is always recommended before final deed drafting.</p>

    <!-- Interactive HSL Widgets Section -->
    <div class="interactive-widgets-section" style="background-color: #f8fafc; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; margin-top: 30px;">
        <h3>Interactive Property Registry Utilities</h3>
        
        <!-- Widget 1: State/Jurisdiction Selector -->
        <div id="app-state-select" class="widget-container" style="margin-bottom: 20px;">
            <label style="font-weight: 600; display: block; margin-bottom: 8px;">Select State to Identify Official Portal & Processing Time:</label>
            <select id="state_selector_tnguideline" onchange="updateStateInfo_tnguideline()" style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #cbd5e1; font-size: 1rem; outline: none; background: #ffffff;">
                <option value="">-- Choose State --</option>
                <option value="tn">Tamil Nadu (TNREGINET)</option>
                <option value="ka">Karnataka (Kaveri 2.0)</option>
                <option value="ts">Telangana (IGRS TS)</option>
            </select>
            <div id="state_info_box_tnguideline" style="margin-top: 10px; padding: 12px; border-radius: 6px; background-color: #f1f5f9; display: none;"></div>
        </div>

        <!-- Widget 2: Tenure Selector / Fee Calculator -->
        <div id="app-calc-years" class="widget-container" style="margin-bottom: 20px;">
            <label style="font-weight: 600; display: block; margin-bottom: 8px;">Deed Search Tenure (Years) & Fee Estimator:</label>
            <input type="number" id="tenure_years_tnguideline" min="1" max="50" value="15" oninput="calculateEstimates_tnguideline()" style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #cbd5e1; outline: none; box-sizing: border-box;" />
            <div id="calc_results_box_tnguideline" style="margin-top: 10px; padding: 12px; border-radius: 6px; background-color: #f1f5f9; font-weight: 500;">
                Estimated search fee: Rs. 85.00
            </div>
        </div>

        <!-- Widget 3: Verification Checklist -->
        <div id="app-readiness-deed" class="widget-container">
            <label style="font-weight: 600; display: block; margin-bottom: 8px;">Property Document Checklist Tracker:</label>
            <div style="display: grid; gap: 8px;">
                <label style="display: flex; align-items: center; gap: 8px;"><input type="checkbox" class="chk_tnguideline" onclick="updateChecklist_tnguideline()"> Survey / Subdivision Number</label>
                <label style="display: flex; align-items: center; gap: 8px;"><input type="checkbox" class="chk_tnguideline" onclick="updateChecklist_tnguideline()"> Sub-Registrar Office (SRO) Name</label>
                <label style="display: flex; align-items: center; gap: 8px;"><input type="checkbox" class="chk_tnguideline" onclick="updateChecklist_tnguideline()"> Previous Sale Deed Document Number</label>
            </div>
            <div style="margin-top: 12px; height: 8px; background-color: #e2e8f0; border-radius: 4px; overflow: hidden;">
                <div id="progress_bar_tnguideline" style="width: 0%; height: 100%; background-color: #10b981; transition: width 0.3s ease;"></div>
            </div>
            <div id="checklist_status_tnguideline" style="margin-top: 8px; font-size: 0.9rem; font-weight: 500;">Readiness: 0%</div>
        </div>
    </div>

    <script>
    function updateStateInfo_tnguideline() {
        var selector = document.getElementById("state_selector_tnguideline");
        var infoBox = document.getElementById("state_info_box_tnguideline");
        if (selector.value === "tn") {
            infoBox.innerHTML = "<strong>Portal</strong>: TNREGINET <br><strong>Processing Time</strong>: 2 hours (View) / 3 Days (Certified)<br><strong>Link</strong>: <a href=\'https://tnreginet.gov.in\' target=\'_blank\'>tnreginet.gov.in</a>";
            infoBox.style.display = "block";
        } else if (selector.value === "ka") {
            infoBox.innerHTML = "<strong>Portal</strong>: Kaveri 2.0 <br><strong>Processing Time</strong>: 1 Day (Certified)<br><strong>Link</strong>: <a href=\'https://kaverionline.karnataka.gov.in\' target=\'_blank\'>kaverionline.karnataka.gov.in</a>";
            infoBox.style.display = "block";
        } else if (selector.value === "ts") {
            infoBox.innerHTML = "<strong>Portal</strong>: IGRS Telangana <br><strong>Processing Time</strong>: Instant (View) / 2 Days (Certified)<br><strong>Link</strong>: <a href=\'https://registration.telangana.gov.in\' target=\'_blank\'>registration.telangana.gov.in</a>";
            infoBox.style.display = "block";
        } else {
            infoBox.style.display = "none";
        }
    }
    </script>
    <script>
    function calculateEstimates_tnguideline() {
        var years = parseInt(document.getElementById("tenure_years_tnguideline").value) || 0;
        var cost = 10 + (years * 5);
        document.getElementById("calc_results_box_tnguideline").innerText = "Estimated search fee: Rs. " + cost.toFixed(2);
    }
    </script>
    <script>
    function updateChecklist_tnguideline() {
        var chks = document.getElementsByClassName("chk_tnguideline");
        var checkedCount = 0;
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) checkedCount++;
        }
        var percent = Math.round((checkedCount / chks.length) * 100);
        document.getElementById("progress_bar_tnguideline").style.width = percent + "%";
        document.getElementById("checklist_status_tnguideline").innerText = "Readiness: " + percent + "%";
    }
    </script>
</div>
'
];
