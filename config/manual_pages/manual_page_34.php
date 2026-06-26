<?php
return [
    'slug' => 'rental-yield-calculator',
    'keyword' => 'rental yield calculator',
    'title' => 'Rental Yield Calculator: Property Investment Return Estimator',
    'meta_desc' => 'Calculate property gross and net rental yield percentages. Enter monthly rent, property cost, maintenance, and taxes to estimate real estate ROI.',
    'h1_title' => 'Rental Yield Calculator',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "What is a good rental yield in India?", "answer": "In India, residential rental yield typically ranges from 2% to 4%, while commercial property rental yield is higher, ranging from 6% to 9%."},
        {"question": "How do you calculate gross rental yield?", "answer": "Gross rental yield is calculated by dividing your total annual rental income by the property purchase price, then multiplying by 100."},
        {"question": "What is the difference between gross and net rental yield?", "answer": "Gross yield only considers rent and property price, while net yield subtracts annual operational expenses (maintenance, taxes, insurance, vacancy costs) before calculating returns."}
    ]',
    'content' => '
<div class="manual-page-container">
    <p>Understanding the return on investment (ROI) is crucial before purchasing buy-to-let real estate. Our **Rental Yield Calculator** helps you quickly estimate both the gross and net rental yield percentages of your residential or commercial property, taking into account purchase price, monthly rent, and ongoing operating expenses.</p>

    <!-- Interactive Calculator -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); margin: 30px 0;">
        <h3 style="margin-top: 0; color: var(--primary); font-size: 1.2rem; border-bottom: 2px solid var(--accent); padding-bottom: 10px; margin-bottom: 20px;">Calculate Rental Yield</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Property Purchase Price (Rs):</label>
                <input type="number" id="yield_property_price" value="5000000" oninput="calculateYield_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Expected Monthly Rent (Rs):</label>
                <input type="number" id="yield_monthly_rent" value="15000" oninput="calculateYield_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; margin-bottom: 20px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Annual Maintenance (Rs):</label>
                <input type="number" id="yield_annual_maint" value="24000" oninput="calculateYield_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Annual Property Tax (Rs):</label>
                <input type="number" id="yield_annual_tax" value="6000" oninput="calculateYield_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Annual Insurance/Other (Rs):</label>
                <input type="number" id="yield_annual_misc" value="2000" oninput="calculateYield_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
        </div>

        <div style="background: #f8fafc; border-radius: 8px; padding: 20px; border: 1px solid #e2e8f0; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div style="text-align: center; border-right: 1px solid #cbd5e1; padding-right: 10px;">
                <div style="font-size: 0.85rem; font-weight: 600; color: #64748b; text-transform: uppercase;">Gross Rental Yield</div>
                <div id="yield_gross_pct" style="font-size: 1.8rem; font-weight: 800; color: var(--primary); margin-top: 5px;">3.60%</div>
                <div style="font-size: 0.8rem; color: #94a3b8; margin-top: 5px;">Annual Income: Rs. <span id="yield_annual_inc">1,80,000</span></div>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 0.85rem; font-weight: 600; color: #64748b; text-transform: uppercase;">Net Rental Yield</div>
                <div id="yield_net_pct" style="font-size: 1.8rem; font-weight: 800; color: var(--accent); margin-top: 5px;">2.96%</div>
                <div style="font-size: 0.8rem; color: #94a3b8; margin-top: 5px;">Annual Expenses: Rs. <span id="yield_annual_exp">32,000</span></div>
            </div>
        </div>
    </div>

    <script>
    function calculateYield_econline() {
        var price = parseFloat(document.getElementById("yield_property_price").value) || 0;
        var rent = parseFloat(document.getElementById("yield_monthly_rent").value) || 0;
        var maint = parseFloat(document.getElementById("yield_annual_maint").value) || 0;
        var tax = parseFloat(document.getElementById("yield_annual_tax").value) || 0;
        var misc = parseFloat(document.getElementById("yield_annual_misc").value) || 0;
        
        var annualIncome = rent * 12;
        var annualExpenses = maint + tax + misc;
        var netIncome = annualIncome - annualExpenses;

        var grossYield = price > 0 ? (annualIncome / price) * 100 : 0;
        var netYield = price > 0 ? (netIncome / price) * 100 : 0;

        document.getElementById("yield_gross_pct").innerText = grossYield.toFixed(2) + "%";
        document.getElementById("yield_net_pct").innerText = netYield.toFixed(2) + "%";
        document.getElementById("yield_annual_inc").innerText = annualIncome.toLocaleString(undefined);
        document.getElementById("yield_annual_exp").innerText = annualExpenses.toLocaleString(undefined);
    }
    window.addEventListener("load", calculateYield_econline);
    </script>
</div>
'
];
