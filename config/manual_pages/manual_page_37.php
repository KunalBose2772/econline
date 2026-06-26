<?php
return [
    'slug' => 'property-registration-fee-calculator',
    'keyword' => 'property registration fee calculator',
    'title' => 'Property Registration Fee Calculator: Detailed SRO Charges TN',
    'meta_desc' => 'Calculate property registration fees online in Tamil Nadu. Detailed breakdown of SRO fees, computer charges, scanning fees, and processing costs.',
    'h1_title' => 'Property Registration Fee Calculator',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "How much is the registration fee for property in Tamil Nadu?", "answer": "The registration fee is 2% of the guideline value or the sale value (whichever is higher) for standard sale deeds. It is 1% (capped at Rs. 4,000) for family settlements/gifts."},
        {"question": "What are the additional charges during SRO registration?", "answer": "In addition to the registration fee, SROs collect computer charges (Rs. 200), scanning charges (Rs. 50 per page), and municipal/panchayat surcharges if applicable."},
        {"question": "Is registration fee refundable if the deed is rejected?", "answer": "No, once registration fees are paid online and the document is submitted to the SRO, the fees are non-refundable."}
    ]',
    'content' => '
<div class="manual-page-container">
    <p>When purchasing property in Tamil Nadu, registration fees are separate from stamp duty. Use our **Property Registration Fee Calculator** to compute the exact filing fees, computer charges, and scanning costs charged by the Sub-Registrar Office (SRO).</p>

    <!-- Calculator Box -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); margin: 30px 0;">
        <h3 style="margin-top: 0; color: var(--primary); font-size: 1.2rem; border-bottom: 2px solid var(--accent); padding-bottom: 10px; margin-bottom: 20px;">Calculate Detailed SRO Fees</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 25px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Property Value (Rs):</label>
                <input type="number" id="reg_property_value" value="3000000" oninput="calculateRegFees_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Transaction Type:</label>
                <select id="reg_deed_type" onchange="calculateRegFees_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; background: white; box-sizing: border-box;">
                    <option value="sale" selected>Sale Deed (2%)</option>
                    <option value="family">Family Gift / Settlement (1% cap Rs 4,000)</option>
                    <option value="poa">Power of Attorney (Flat Rs 100)</option>
                </select>
            </div>
        </div>

        <h4 style="margin: 0 0 12px 0; font-size: 1rem; color: var(--primary);">Breakdown of SRO Charges:</h4>
        <div style="overflow-x: auto; margin-bottom: 20px;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
                <thead>
                    <tr style="background: #f1f5f9; border-bottom: 2px solid #cbd5e1;">
                        <th style="padding: 10px; font-weight: 600;">Fee Component</th>
                        <th style="padding: 10px; font-weight: 600; text-align: right;">Amount (Rs)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Basic Registration Fee</td>
                        <td id="res_reg_fee" style="padding: 10px; text-align: right; font-weight: 600;">60,000.00</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Computer Processing Charges</td>
                        <td style="padding: 10px; text-align: right; font-weight: 600;">200.00</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Scanning Charges (approx 10 pages)</td>
                        <td style="padding: 10px; text-align: right; font-weight: 600;">500.00</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Electronic Copying Charges</td>
                        <td style="padding: 10px; text-align: right; font-weight: 600;">300.00</td>
                    </tr>
                    <tr style="background: #f8fafc; border-top: 2px solid #cbd5e1;">
                        <td style="padding: 12px; font-weight: 700; color: var(--primary);">Total Registration Fees Payable</td>
                        <td id="res_total_reg" style="padding: 12px; text-align: right; font-weight: 800; color: var(--accent); font-size: 1.1rem;">61,000.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    function calculateRegFees_econline() {
        var val = parseFloat(document.getElementById("reg_property_value").value) || 0;
        var type = document.getElementById("reg_deed_type").value;
        
        var basicFee = 0;
        if (type === "sale") {
            basicFee = val * 0.02;
        } else if (type === "family") {
            basicFee = Math.min(val * 0.01, 4000);
        } else if (type === "poa") {
            basicFee = 100;
        }

        var total = basicFee + 200 + 500 + 300;

        document.getElementById("res_reg_fee").innerText = basicFee.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
        document.getElementById("res_total_reg").innerText = total.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }
    window.addEventListener("load", calculateRegFees_econline);
    </script>
</div>
'
];
