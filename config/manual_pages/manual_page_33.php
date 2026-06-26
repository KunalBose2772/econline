<?php
return [
    'slug' => 'stamp-duty-calculator',
    'keyword' => 'stamp duty calculator',
    'title' => 'Tamil Nadu Stamp Duty & Registration Fee Calculator',
    'meta_desc' => 'Calculate stamp duty and registration fees online in Tamil Nadu. Includes standard sales, family gifts, settlements, POA, and release deeds.',
    'h1_title' => 'Stamp Duty & Registration Fee Calculator',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "What is the stamp duty rate in Tamil Nadu for a sale deed?", "answer": "For standard property sale deeds, the stamp duty is 7% and the registration fee is 2% of the property guideline value or purchase value, whichever is higher (total 9%)."},
        {"question": "How much is the stamp duty for a gift deed to family in TN?", "answer": "For family members, the stamp duty is 1% (maximum limit of Rs. 25,000) and the registration fee is 1% (maximum limit of Rs. 4,000)."},
        {"question": "Is registration fee calculated on guideline value?", "answer": "Yes, both stamp duty and registration fees are calculated on the guideline value of the property or the agreed transaction value, whichever is higher."}
    ]',
    'content' => '
<div class="manual-page-container">
    <p>Planning a property transaction in Tamil Nadu? Use our official **Stamp Duty and Registration Fee Calculator** to estimate the total payable government charges. This tool handles sale deeds, family settlements, gift deeds, release deeds, and power of attorney (POA) filings under latest Tamil Nadu registration rules.</p>

    <!-- Calculator Box -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); margin: 30px 0;">
        <h3 style="margin-top: 0; color: var(--primary); font-size: 1.2rem; border-bottom: 2px solid var(--accent); padding-bottom: 10px; margin-bottom: 20px;">Calculate Registration Costs</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Transaction Value / Guideline Value (Rs):</label>
                <input type="number" id="stamp_property_value" value="2500000" oninput="calculateStampDuty_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Deed Type:</label>
                <select id="stamp_deed_type" onchange="calculateStampDuty_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; background: white; box-sizing: border-box;">
                    <option value="sale" selected>Sale Deed (Standard Sale)</option>
                    <option value="family_settlement">Family Settlement / Gift / Release</option>
                    <option value="non_family_gift">Non-Family Gift / Settlement</option>
                    <option value="poa">Power of Attorney (POA)</option>
                </select>
            </div>
        </div>

        <div style="background: #f8fafc; border-radius: 8px; padding: 20px; border: 1px solid #e2e8f0; margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.95rem;">
                <span style="font-weight: 500; color: #475569;">Estimated Stamp Duty:</span>
                <span id="stamp_duty_amount" style="font-weight: 700; color: var(--primary);">Rs. 1,75,000</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.95rem;">
                <span style="font-weight: 500; color: #475569;">Estimated Registration Fee:</span>
                <span id="stamp_reg_amount" style="font-weight: 700; color: var(--primary);">Rs. 50,000</span>
            </div>
            <hr style="border: 0; border-top: 1px solid #cbd5e1; margin: 15px 0;" />
            <div style="display: flex; justify-content: space-between; font-size: 1.1rem;">
                <span style="font-weight: 700; color: var(--primary);">Total Registration Cost:</span>
                <span id="stamp_total_amount" style="font-weight: 800; color: var(--accent);">Rs. 2,25,000</span>
            </div>
        </div>

        <div id="stamp_info_note" style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.5; padding: 10px; border-left: 3px solid var(--accent); background: #f1f5f9;">
            * Rate Details: 7% Stamp Duty + 2% Registration Fee applies to the property transaction value.
        </div>
    </div>

    <script>
    function calculateStampDuty_econline() {
        var val = parseFloat(document.getElementById("stamp_property_value").value) || 0;
        var type = document.getElementById("stamp_deed_type").value;
        
        var stampDuty = 0;
        var regFee = 0;
        var note = "";

        if (type === "sale") {
            stampDuty = val * 0.07;
            regFee = val * 0.02;
            note = "* Rate Details: 7% Stamp Duty + 2% Registration Fee applies to the property transaction value.";
        } else if (type === "family_settlement") {
            stampDuty = Math.min(val * 0.01, 25000);
            regFee = Math.min(val * 0.01, 4000);
            note = "* Concessional Family Rate: 1% Stamp Duty (capped at Rs. 25,000) and 1% Registration Fee (capped at Rs. 4,000).";
        } else if (type === "non_family_gift") {
            stampDuty = val * 0.07;
            regFee = val * 0.02;
            note = "* Non-Family Gift: Standard stamp rates apply (7% Stamp Duty + 2% Registration Fee).";
        } else if (type === "poa") {
            stampDuty = 1000;
            regFee = 100;
            note = "* Power of Attorney (POA): Flat rate of Rs. 1,000 Stamp Duty and Rs. 100 Registration Fee for general authorization.";
        }

        document.getElementById("stamp_duty_amount").innerText = "Rs. " + stampDuty.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
        document.getElementById("stamp_reg_amount").innerText = "Rs. " + regFee.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
        document.getElementById("stamp_total_amount").innerText = "Rs. " + (stampDuty + regFee).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
        document.getElementById("stamp_info_note").innerText = note;
    }
    window.addEventListener("load", calculateStampDuty_econline);
    </script>
</div>
'
];
