<?php
// config/manual_pages/manual_page_2.php
return [
    'slug' => 'ec-view',
    'keyword' => 'ec view',
    'title' => 'EC View: Encumbrance Certificate Search & Property Verification Guide',
    'meta_desc' => 'Perform an ec view property records check online. Learn how to verify property history, check sub-registrar transactions, and locate SRO survey numbers.',
    'h1_title' => 'EC View: Encumbrance Certificate Search & Property Verification Guide',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "What does an ec view report display?", "answer": "An ec view report displays a chronologically arranged table of all registered transactions on a property, including sale deeds, mortgages, partition deeds, and gift deeds."},
        {"question": "Can I search an ec view for any state in India?", "answer": "Most states with digitized land registration departments offer an online ec view tool, though the registration portal URL and search parameters vary by state administrative systems."},
        {"question": "How do I print my ec view results?", "answer": "Once the SRO query completes, you can view the results on screen. Most portals provide a Print or Download PDF button to save the record search log locally."},
        {"question": "Is an informational ec view document legally binding?", "answer": "No, an informational ec view is only for checking property records. For legal transactions and loan approvals, you must request a certified copy signed by the SRO."}
    ]',
    'content' => '
<div class="manual-page-container">
    <h1>EC View: Encumbrance Certificate Search & Property Verification Guide</h1>
    <p>Using the official <a href="/ec-online/">ec online</a> portal for an <strong>ec view</strong> search is a major step in verifying real estate ownership in India. An encumbrance certificate (EC) details all registered transactions on a property, showing whether it is free from liabilities or legal disputes. Digital land registration databases have changed how developers and buyers conduct title due diligence. Today, you can perform an online <strong>ec view</strong> search and <a href="/ec-download/">ec download</a> instantly from home, saving days of physical SRO search work.</p>

    <h2>The Legal Context of Property Registration</h2>
    <p>Under the Indian Registration Act of 1908, any transaction involving the transfer of immovable property must be registered at the local Sub-Registrar Office (SRO). Section 17 lists the documents for which registration is compulsory, including sale deeds, gift deeds, partition deeds, and mortgage deeds. When a deed is registered, it becomes a public record. The SRO indexes these transactions in Book I, which forms the basis for generating an encumbrance certificate. Conducting an <a href="/ec-online/">ec online</a> lookup allows buyers and legal professionals to inspect Book I entries digitally, safeguarding against double-registration fraud and illegal property transfers.</p>
    <p>The Transfer of Property Act, 1882, under Section 54, defines a sale as a transfer of ownership in exchange for a price paid or promised. For the sale to be complete, a registered instrument is mandatory. Unregistered agreements do not convey any legal title or interest in the property. Therefore, when you perform an <a href="/ec-online/">ec online</a> search, you are verifying that the chain of titles consists of validly registered deeds. Any gap in the chain of registered sale deeds (such as during a <a href="/land-ec/">land ec</a> verification) indicates a potential title defect that could lead to legal disputes or rejection of home loan applications by financial institutions.</p>

    <h2>Why Encumbrance Verification Matters</h2>
    <p>An encumbrance is any charge, liability, or lien created on a property. Common forms of encumbrance include bank mortgages, court attachments, leases, tax liabilities, and easement rights. When a bank lends money against a property, it creates an equitable mortgage by deposit of title deeds. The SRO registers this mortgage as a memorandum of deposit of title deeds, which immediately appears on the property\'s encumbrance certificate. If the buyer fails to search the <a href="/villangam/">villangam certificate</a> database, they might unknowingly purchase a mortgaged property, inheriting the debt and the risk of foreclosure by the lending bank.</p>
    <p>Additionally, properties are often subject to civil suits where courts issue attachment orders prohibiting the transfer of the asset. SROs are notified of these orders and record them in the registry. An <a href="/ec-online/">ec online</a> search will reveal such court attachments, warning the buyer that the transaction is legally blocked. Easement rights, such as a neighbor\'s right of way through the land, are also registered in some states and will be documented in the EC. Thus, title search via a <a href="/tn-ec/">TN EC</a> portal provides absolute clarity on what liabilities are associated with the property before you sign a sale agreement.</p>

    <h2>Portal Systems Across Indian States</h2>
    <p>State governments have developed custom digital portals to handle land registrations. In Tamil Nadu, the Registration Department operates the TNREGINET portal, which provides free view of encumbrance certificates and certified copy downloads. Karnataka uses the Kaveri 2.0 portal, which requires user registration but offers highly structured encumbrance reports. Andhra Pradesh and Telangana utilize their respective IGRS portals to provide online search capabilities. These systems index properties using survey numbers, subdivision numbers, and boundary details, making it essential to have accurate land parameters before initiating your search.</p>

    <h2>Detailed Analysis of SRO Book Indexing</h2>
    <p>SRO registries organize transactions into separate ledger books. Book I is the register of non-testamentary documents relating to immovable property. All sale deeds, gift settlements, partition arrangements, and mortgages are compiled here. Book II is the record of reasons for refusal to register. Book III is the register of wills and authorities to adopt, while Book IV is the miscellaneous register for documents not affecting land titles. Encumbrance searches compile data strictly from Book I. This means details of a registered will or power of attorney may not directly appear on a standard land EC, requiring secondary indices checks at the SRO archives.</p>
    <p>To run a thorough property check, legal professionals also verify Index I and Index II. Index I is a nominal index of executants and claimants, arranged alphabetically. Index II is a descriptive index of properties, categorized by village and survey number. The digital portals retrieve records by querying Index II, which is why a minor error in survey number indexing can omit critical transaction lines. Verification should always include manual validation of the registered document number at the local sub-registrar office if any discrepancies are spotted in the online search results.</p>

    <h2>Key Parameters in an EC View Search Result</h2>
    <p>When you query the state registry portal and access the <strong>ec view</strong> dashboard, the results will display a list of transactions. You should carefully verify the following parameters:</p>
    <ul>
        <li><strong>Document Number & Year</strong>: The unique registration identifier assigned by the SRO (formatted as Doc No / Year / Book type).</li>
        <li><strong>SRO Name & Code</strong>: The local Sub-Registrar Office where the transaction deed was registered.</li>
        <li><strong>Executant</strong>: The party transferring the rights (usually the seller or mortgagor).</li>
        <li><strong>Claimant</strong>: The party receiving the rights (usually the buyer or lending bank).</li>
        <li><strong>Schedule of Property</strong>: The physical descriptions, survey numbers, boundaries, and measurements of the property.</li>
    </ul>

    <h2>Property Data Fields Matrix</h2>
    <div style="overflow-x: auto; width: 100%;">
        <table class="responsive-data-table" style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <thead>
                <tr style="background-color: #0f172a; color: #ffffff;">
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Field Name</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Format Type</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Legal Purpose</th>
                    <th style="padding: 12px; border: 1px solid #cbd5e1;">Search Importance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Survey Number</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Alphanumeric</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Identifies land parcel on spatial maps</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Critical for locating transactions</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">SRO Code</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Numeric</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Identifies the administrative SRO office</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Mandatory for localizing queries</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Boundaries</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Text description</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Specifies East, West, North, South neighbors</td>
                    <td style="padding: 12px; border: 1px solid #cbd5e1;">Prevents plot identification errors</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2>How to Perform a Property Search Online</h2>
    <p>To run an <strong>ec view</strong> query, access the land registration portal of the respective state. For instance, in Tamil Nadu, navigate to the TNREGINET website and select the search menu. Choose the option to search by property location. Input the SRO office details, village name, and the specific survey number. If the property has been subdivided, ensure you append the correct subdivision alphanumeric suffix, as incorrect subdivisions will yield empty results or report on an entirely different parcel of land.</p>
    <p>Once you click search, the database displays matched entries. Always inspect the claimant and executant details in the search results. If you notice a name that is not in the title deeds you possess, it indicates that a transaction occurred that you were not informed about. This is why the <strong>ec view</strong> utility is so helpful during pre-purchase due diligence. It allows you to cross-examine what the seller claims against the official SRO records in real-time.</p>

    <h2>Resolving Discrepancies in Encumbrance Records</h2>
    <p>Sometimes, transaction entries may not appear on the digital certificate despite physical deeds being registered. This error, known as data entry omission, typically happens for older deeds registered during the early digitization phase (between 2000 and 2010). If you identify a missing entry, you must file a correction application with the respective Sub-Registrar. You will need to present the original registered sale deed, the corresponding survey sketch, and the current land mutation patta. The SRO will verify the archives and manually update the digital database to ensure future search queries display the complete, correct chain of titles.</p>
    <p>In other instances, a mortgage that was fully repaid might still show as an active charge. This occurs when the borrower fails to register a deed of release (discharge of mortgage) after repaying the loan. A bank loan closure letter is not enough to clear the SRO registry; the discharge deed must be executed and registered at the same SRO. Once the discharge deed is registered, the mortgage charge is officially cancelled, and subsequent searches will show the release details, ensuring clean title representation.</p>

    <h2>Secondary Property Verification Steps</h2>
    <p>Relying solely on database logs is never advised. In addition to a standard search, buyers should perform physical verify steps on land revenue records, specifically checking the patta ledger at the taluk administration. Patta mutation records show current tax liability names. Furthermore, inspecting physical layouts for public pathway easements is critical to check if neighbors have unregistered rights of way. Buyers must also run court archives searches to confirm no litigation is pending regarding ancestral family shares or partition disputes. These composite safety precautions ensure maximum protection against fraud.</p>

    <!-- Interactive HSL Widgets Section -->
    <div class="interactive-widgets-section" style="background-color: #f8fafc; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; margin-top: 30px;">
        <h3>Interactive Property Registry Utilities</h3>
        
        <!-- Widget 1: State/Jurisdiction Selector -->
        <div id="app-state-select" class="widget-container" style="margin-bottom: 20px;">
            <label style="font-weight: 600; display: block; margin-bottom: 8px;">Select State to Identify Official Portal & Processing Time:</label>
            <select id="state_selector_ecview" onchange="updateStateInfo_ecview()" style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #cbd5e1; font-size: 1rem; outline: none; background: #ffffff;">
                <option value="">-- Choose State --</option>
                <option value="tn">Tamil Nadu (TNREGINET)</option>
                <option value="ka">Karnataka (Kaveri 2.0)</option>
                <option value="ts">Telangana (IGRS TS)</option>
            </select>
            <div id="state_info_box_ecview" style="margin-top: 10px; padding: 12px; border-radius: 6px; background-color: #f1f5f9; display: none;"></div>
        </div>

        <!-- Widget 2: Tenure Selector / Fee Calculator -->
        <div id="app-calc-years" class="widget-container" style="margin-bottom: 20px;">
            <label style="font-weight: 600; display: block; margin-bottom: 8px;">Deed Search Tenure (Years) & Fee Estimator:</label>
            <input type="number" id="tenure_years_ecview" min="1" max="50" value="15" oninput="calculateEstimates_ecview()" style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #cbd5e1; outline: none; box-sizing: border-box;" />
            <div id="calc_results_box_ecview" style="margin-top: 10px; padding: 12px; border-radius: 6px; background-color: #f1f5f9; font-weight: 500;">
                Estimated search fee: Rs. 85.00
            </div>
        </div>

        <!-- Widget 3: Verification Checklist -->
        <div id="app-readiness-deed" class="widget-container">
            <label style="font-weight: 600; display: block; margin-bottom: 8px;">Property Document Checklist Tracker:</label>
            <div style="display: grid; gap: 8px;">
                <label style="display: flex; align-items: center; gap: 8px;"><input type="checkbox" class="chk_ecview" onclick="updateChecklist_ecview()"> Survey / Subdivision Number</label>
                <label style="display: flex; align-items: center; gap: 8px;"><input type="checkbox" class="chk_ecview" onclick="updateChecklist_ecview()"> Sub-Registrar Office (SRO) Name</label>
                <label style="display: flex; align-items: center; gap: 8px;"><input type="checkbox" class="chk_ecview" onclick="updateChecklist_ecview()"> Previous Sale Deed Document Number</label>
            </div>
            <div style="margin-top: 12px; height: 8px; background-color: #e2e8f0; border-radius: 4px; overflow: hidden;">
                <div id="progress_bar_ecview" style="width: 0%; height: 100%; background-color: #10b981; transition: width 0.3s ease;"></div>
            </div>
            <div id="checklist_status_ecview" style="margin-top: 8px; font-size: 0.9rem; font-weight: 500;">Readiness: 0%</div>
        </div>
    </div>

    <script>
    function updateStateInfo_ecview() {
        var selector = document.getElementById("state_selector_ecview");
        var infoBox = document.getElementById("state_info_box_ecview");
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
    function calculateEstimates_ecview() {
        var years = parseInt(document.getElementById("tenure_years_ecview").value) || 0;
        var cost = 10 + (years * 5);
        document.getElementById("calc_results_box_ecview").innerText = "Estimated search fee: Rs. " + cost.toFixed(2);
    }
    </script>
    <script>
    function updateChecklist_ecview() {
        var chks = document.getElementsByClassName("chk_ecview");
        var checkedCount = 0;
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) checkedCount++;
        }
        var percent = Math.round((checkedCount / chks.length) * 100);
        document.getElementById("progress_bar_ecview").style.width = percent + "%";
        document.getElementById("checklist_status_ecview").innerText = "Readiness: " + percent + "%";
    }
    </script>
</div>
'
];
