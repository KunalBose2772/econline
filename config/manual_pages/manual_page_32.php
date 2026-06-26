<?php
return [
    'slug' => 'area-unit-converter',
    'keyword' => 'area unit converter',
    'title' => 'Land Area Unit Converter: Sq Ft, Cent, Ground, Acre & Guntha',
    'meta_desc' => 'Convert land measurements instantly with our Indian area unit converter. Convert between Ground, Cent, Acre, Guntha, Sq Ft, and Sq Meters.',
    'h1_title' => 'Land Area Unit Converter',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "How many square feet are in one cent of land?", "answer": "Exactly 435.6 square feet make up 1 cent of land in India."},
        {"question": "What is 1 ground of land in square feet?", "answer": "In Tamil Nadu and parts of South India, 1 ground of land equals exactly 2,400 square feet."},
        {"question": "How many cents make 1 acre of land?", "answer": "There are exactly 100 cents in 1 acre of land (which equals 43,560 square feet)."},
        {"question": "What is the relation between Guntha and Sq Ft?", "answer": "One Guntha (commonly used in Karnataka, Maharashtra, and Gujarat) equals 1,089 square feet (exactly 1/40th of an acre)."}
    ]',
    'content' => '
<div class="manual-page-container">
    <p>Indian land administration uses a mix of regional and standard metrics. To simplify due diligence, our **Land Area Unit Converter** provides instant, bidirectional conversions between key units used in Tamil Nadu, Karnataka, and across India, including Ground, Cent, Acre, Guntha, Square Feet, and Square Meters.</p>

    <!-- Interactive Converter Box -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); margin: 30px 0;">
        <h3 style="margin-top: 0; color: var(--primary); font-size: 1.2rem; border-bottom: 2px solid var(--accent); padding-bottom: 10px; margin-bottom: 20px;">Convert Land Units</h3>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 25px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Enter Area Value:</label>
                <input type="number" id="converter_value" value="1" oninput="convertUnits_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Select Source Unit:</label>
                <select id="converter_unit" onchange="convertUnits_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; background: white; box-sizing: border-box;">
                    <option value="sqft">Square Feet (Sq Ft)</option>
                    <option value="cent" selected>Cent</option>
                    <option value="ground">Ground</option>
                    <option value="acre">Acre</option>
                    <option value="guntha">Guntha</option>
                    <option value="sqm">Square Meters (Sq M)</option>
                </select>
            </div>
        </div>

        <h4 style="margin: 0 0 12px 0; font-size: 1rem; color: var(--primary);">Conversion Results:</h4>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
                <thead>
                    <tr style="background: #f1f5f9; border-bottom: 2px solid #cbd5e1;">
                        <th style="padding: 10px; font-weight: 600;">Unit</th>
                        <th style="padding: 10px; font-weight: 600; text-align: right;">Converted Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Square Feet (Sq Ft)</td>
                        <td id="res_sqft" style="padding: 10px; text-align: right; font-weight: 600; color: var(--accent);">435.60</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Cent</td>
                        <td id="res_cent" style="padding: 10px; text-align: right; font-weight: 600; color: var(--accent);">1.00</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Ground</td>
                        <td id="res_ground" style="padding: 10px; text-align: right; font-weight: 600; color: var(--accent);">0.18</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Acre</td>
                        <td id="res_acre" style="padding: 10px; text-align: right; font-weight: 600; color: var(--accent);">0.01</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Guntha</td>
                        <td id="res_guntha" style="padding: 10px; text-align: right; font-weight: 600; color: var(--accent);">0.40</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 10px; font-weight: 500;">Square Meters (Sq M)</td>
                        <td id="res_sqm" style="padding: 10px; text-align: right; font-weight: 600; color: var(--accent);">40.47</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    function convertUnits_econline() {
        var val = parseFloat(document.getElementById("converter_value").value) || 0;
        var unit = document.getElementById("converter_unit").value;
        
        // Convert input value to standard Sq Ft first
        var sqft = 0;
        switch(unit) {
            case "sqft": sqft = val; break;
            case "cent": sqft = val * 435.6; break;
            case "ground": sqft = val * 2400; break;
            case "acre": sqft = val * 43560; break;
            case "guntha": sqft = val * 1089; break;
            case "sqm": sqft = val * 10.76391; break;
        }

        // Calculate other units from Sq Ft
        var cent = sqft / 435.6;
        var ground = sqft / 2400;
        var acre = sqft / 43560;
        var guntha = sqft / 1089;
        var sqm = sqft / 10.76391;

        // Render results with appropriate precision
        document.getElementById("res_sqft").innerText = sqft.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
        document.getElementById("res_cent").innerText = cent.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 4});
        document.getElementById("res_ground").innerText = ground.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 4});
        document.getElementById("res_acre").innerText = acre.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 6});
        document.getElementById("res_guntha").innerText = guntha.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 4});
        document.getElementById("res_sqm").innerText = sqm.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }
    // Initialize
    window.addEventListener("load", convertUnits_econline);
    </script>
</div>
'
];
