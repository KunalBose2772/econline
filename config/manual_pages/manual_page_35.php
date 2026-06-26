<?php
return [
    'slug' => 'capital-gains-tax-calculator-property',
    'keyword' => 'capital gains tax calculator property',
    'title' => 'Capital Gains Tax Calculator on Property Sales in India',
    'meta_desc' => 'Calculate STCG and LTCG taxes on real estate sales in India. Features a built-in Cost Inflation Index (CII) lookup for automatic indexation calculations.',
    'h1_title' => 'Capital Gains Tax Calculator on Property',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "How is LTCG on property calculated in India?", "answer": "LTCG is calculated by subtracting the indexed cost of acquisition and any sale expenses from the total sale price. The net gain is taxed at 20% (plus surcharge and cess)."},
        {"question": "What is the holding period for long-term capital gains on property?", "answer": "If you hold a residential or commercial property for more than 24 months before selling, the gains are classified as Long-Term Capital Gains (LTCG). Otherwise, they are Short-Term Capital Gains (STCG)."},
        {"question": "How is the indexed cost of acquisition calculated?", "answer": "Indexed Cost = (Purchase Price) x (CII of Sale Year) / (CII of Purchase Year). CII stands for Cost Inflation Index, which is notified annually by the Income Tax Department."}
    ]',
    'content' => '
<div class="manual-page-container">
    <p>Selling real estate in India attracts capital gains taxes. Depending on your holding period, these are classified as either **Short-Term Capital Gains (STCG)** or **Long-Term Capital Gains (LTCG)**. Use our interactive calculator, which features built-in Cost Inflation Index (CII) tables, to compute your tax liability under Income Tax rules.</p>

    <!-- Calculator Box -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); margin: 30px 0;">
        <h3 style="margin-top: 0; color: var(--primary); font-size: 1.2rem; border-bottom: 2px solid var(--accent); padding-bottom: 10px; margin-bottom: 20px;">Calculate Capital Gains</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Purchase Price (Rs):</label>
                <input type="number" id="cg_purchase_price" value="2000000" oninput="calculateCapitalGains_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Sale Price (Rs):</label>
                <input type="number" id="cg_sale_price" value="4500000" oninput="calculateCapitalGains_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; margin-bottom: 20px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Purchase Financial Year:</label>
                <select id="cg_purchase_year" onchange="calculateCapitalGains_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; background: white; box-sizing: border-box;">
                    <option value="2001">2001-02</option>
                    <option value="2002">2002-03</option>
                    <option value="2003">2003-04</option>
                    <option value="2004">2004-05</option>
                    <option value="2005">2005-06</option>
                    <option value="2006">2006-07</option>
                    <option value="2007">2007-08</option>
                    <option value="2008">2008-09</option>
                    <option value="2009">2009-10</option>
                    <option value="2010">2010-11</option>
                    <option value="2011">2011-12</option>
                    <option value="2012">2012-13</option>
                    <option value="2013">2013-14</option>
                    <option value="2014">2014-15</option>
                    <option value="2015" selected>2015-16</option>
                    <option value="2016">2016-17</option>
                    <option value="2017">2017-18</option>
                    <option value="2018">2018-19</option>
                    <option value="2019">2019-20</option>
                    <option value="2020">2020-21</option>
                    <option value="2021">2021-22</option>
                    <option value="2022">2022-23</option>
                    <option value="2023">2023-24</option>
                    <option value="2024">2024-25</option>
                </select>
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Sale Financial Year:</label>
                <select id="cg_sale_year" onchange="calculateCapitalGains_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; background: white; box-sizing: border-box;">
                    <option value="2015">2015-16</option>
                    <option value="2016">2016-17</option>
                    <option value="2017">2017-18</option>
                    <option value="2018">2018-19</option>
                    <option value="2019">2019-20</option>
                    <option value="2020">2020-21</option>
                    <option value="2021">2021-22</option>
                    <option value="2022">2022-23</option>
                    <option value="2023">2023-24</option>
                    <option value="2024" selected>2024-25</option>
                </select>
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Improvement Costs (Rs):</label>
                <input type="number" id="cg_improv_costs" value="100000" oninput="calculateCapitalGains_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
        </div>

        <div style="background: #f8fafc; border-radius: 8px; padding: 20px; border: 1px solid #e2e8f0; margin-top: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.95rem;">
                <span style="font-weight: 500; color: #475569;">Gains Classification:</span>
                <span id="cg_type_label" style="font-weight: 700; color: var(--primary);">Long-Term (LTCG)</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.95rem;">
                <span style="font-weight: 500; color: #475569;">Indexed Cost of Acquisition:</span>
                <span id="cg_indexed_cost" style="font-weight: 700; color: var(--primary);">Rs. 28,58,267</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.95rem;">
                <span style="font-weight: 500; color: #475569;">Net Taxable Gain:</span>
                <span id="cg_net_gain" style="font-weight: 700; color: var(--primary);">Rs. 15,41,733</span>
            </div>
            <hr style="border: 0; border-top: 1px solid #cbd5e1; margin: 15px 0;" />
            <div style="display: flex; justify-content: space-between; font-size: 1.15rem;">
                <span style="font-weight: 700; color: var(--primary);">Estimated Tax Payable:</span>
                <span id="cg_tax_payable" style="font-weight: 800; color: var(--accent);">Rs. 3,08,347</span>
            </div>
        </div>
    </div>

    <script>
    var ciiTable = {
        2001: 100, 2002: 105, 2003: 109, 2004: 113, 2005: 117,
        2006: 122, 2007: 129, 2008: 137, 2009: 148, 2010: 167,
        2011: 184, 2012: 200, 2013: 220, 2014: 240, 2015: 254,
        2016: 264, 2017: 272, 2018: 280, 2019: 289, 2020: 301,
        2021: 317, 2022: 331, 2023: 348, 2024: 363
    };

    function calculateCapitalGains_econline() {
        var buyPrice = parseFloat(document.getElementById("cg_purchase_price").value) || 0;
        var sellPrice = parseFloat(document.getElementById("cg_sale_price").value) || 0;
        var improv = parseFloat(document.getElementById("cg_improv_costs").value) || 0;
        
        var buyYear = parseInt(document.getElementById("cg_purchase_year").value);
        var sellYear = parseInt(document.getElementById("cg_sale_year").value);

        if (sellYear < buyYear) {
            document.getElementById("cg_tax_payable").innerText = "Invalid Years";
            return;
        }

        var isLongTerm = (sellYear - buyYear) >= 2;
        var indexedCost = buyPrice;
        var netGain = 0;
        var tax = 0;

        if (isLongTerm) {
            var ciiBuy = ciiTable[buyYear];
            var ciiSell = ciiTable[sellYear];
            indexedCost = buyPrice * (ciiSell / ciiBuy);
            var indexedImprov = improv * (ciiSell / ciiBuy); // simplified indexation for improvements
            
            var totalIndexedCost = indexedCost + indexedImprov;
            netGain = Math.max(0, sellPrice - totalIndexedCost);
            tax = netGain * 0.20; // 20% flat tax on LTCG

            document.getElementById("cg_type_label").innerText = "Long-Term (LTCG)";
            document.getElementById("cg_indexed_cost").innerText = "Rs. " + totalIndexedCost.toLocaleString(undefined, {maximumFractionDigits: 0});
        } else {
            // Short-term gains are taxed at slab rates (calculated as income here)
            netGain = Math.max(0, sellPrice - (buyPrice + improv));
            tax = netGain * 0.30; // representative slab rate of 30% for illustrative purposes

            document.getElementById("cg_type_label").innerText = "Short-Term (STCG)";
            document.getElementById("cg_indexed_cost").innerText = "Rs. " + (buyPrice + improv).toLocaleString(undefined, {maximumFractionDigits: 0});
        }

        document.getElementById("cg_net_gain").innerText = "Rs. " + netGain.toLocaleString(undefined, {maximumFractionDigits: 0});
        document.getElementById("cg_tax_payable").innerText = "Rs. " + tax.toLocaleString(undefined, {maximumFractionDigits: 0});
    }
    window.addEventListener("load", calculateCapitalGains_econline);
    </script>
</div>
'
];
