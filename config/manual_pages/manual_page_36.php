<?php
return [
    'slug' => 'home-loan-emi-calculator',
    'keyword' => 'home loan emi calculator',
    'title' => 'Home Loan EMI Calculator: Check Monthly Repayments & Interest',
    'meta_desc' => 'Calculate your monthly home loan EMI payments. Estimate total interest payable and outstanding principal amounts instantly.',
    'h1_title' => 'Home Loan EMI Calculator',
    'schema_type' => 'Article',
    'faq_data' => '[
        {"question": "How is home loan EMI calculated?", "answer": "The EMI formula is: EMI = [P x R x (1+R)^N]/[(1+R)^N - 1], where P is principal, R is monthly interest rate, and N is tenure in months."},
        {"question": "Does home loan EMI change during the tenure?", "answer": "In floating-rate home loans, EMIs can change when interest rates are revised by lenders. In fixed-rate loans, the EMI remains constant throughout the tenure."},
        {"question": "Can I prepay my home loan to reduce EMI?", "answer": "Yes, making part-prepayments reduces your outstanding principal amount, which allows you to either lower your monthly EMI or reduce your remaining loan tenure."}
    ]',
    'content' => '
<div class="manual-page-container">
    <p>Planning to finance your home purchase? Our **Home Loan EMI Calculator** helps you estimate your monthly repayments, total interest payable, and the total cost of the loan over different tenures.</p>

    <!-- Calculator Box -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); margin: 30px 0;">
        <h3 style="margin-top: 0; color: var(--primary); font-size: 1.2rem; border-bottom: 2px solid var(--accent); padding-bottom: 10px; margin-bottom: 20px;">Calculate Monthly EMI</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; margin-bottom: 20px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Loan Amount (Rs):</label>
                <input type="number" id="emi_amount" value="3000000" oninput="calculateEMI_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Interest Rate (% p.a.):</label>
                <input type="number" step="0.05" id="emi_rate" value="8.5" oninput="calculateEMI_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 8px; font-size: 0.9rem;">Tenure (Years):</label>
                <input type="number" id="emi_tenure" value="20" oninput="calculateEMI_econline()" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; outline: none; box-sizing: border-box;" />
            </div>
        </div>

        <div style="background: #f8fafc; border-radius: 8px; padding: 20px; border: 1px solid #e2e8f0; display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; text-align: center;">
            <div style="border-right: 1px solid #e2e8f0; padding-right: 10px;">
                <div style="font-size: 0.85rem; font-weight: 600; color: #64748b; text-transform: uppercase;">Monthly EMI</div>
                <div id="emi_result_monthly" style="font-size: 1.5rem; font-weight: 800; color: var(--accent); margin-top: 5px;">Rs. 26,035</div>
            </div>
            <div style="border-right: 1px solid #e2e8f0; padding-right: 10px; padding-left: 10px;">
                <div style="font-size: 0.85rem; font-weight: 600; color: #64748b; text-transform: uppercase;">Total Interest</div>
                <div id="emi_result_interest" style="font-size: 1.5rem; font-weight: 800; color: var(--primary); margin-top: 5px;">Rs. 32,48,335</div>
            </div>
            <div style="padding-left: 10px;">
                <div style="font-size: 0.85rem; font-weight: 600; color: #64748b; text-transform: uppercase;">Total Payoff</div>
                <div id="emi_result_total" style="font-size: 1.5rem; font-weight: 800; color: var(--primary); margin-top: 5px;">Rs. 62,48,335</div>
            </div>
        </div>
    </div>

    <script>
    function calculateEMI_econline() {
        var principal = parseFloat(document.getElementById("emi_amount").value) || 0;
        var annualRate = parseFloat(document.getElementById("emi_rate").value) || 0;
        var tenureYears = parseFloat(document.getElementById("emi_tenure").value) || 0;

        if (principal <= 0 || annualRate <= 0 || tenureYears <= 0) {
            return;
        }

        var monthlyRate = (annualRate / 12) / 100;
        var totalMonths = tenureYears * 12;

        var emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, totalMonths)) / (Math.pow(1 + monthlyRate, totalMonths) - 1);
        var totalPayoff = emi * totalMonths;
        var totalInterest = totalPayoff - principal;

        document.getElementById("emi_result_monthly").innerText = "Rs. " + emi.toLocaleString(undefined, {maximumFractionDigits: 0});
        document.getElementById("emi_result_interest").innerText = "Rs. " + totalInterest.toLocaleString(undefined, {maximumFractionDigits: 0});
        document.getElementById("emi_result_total").innerText = "Rs. " + totalPayoff.toLocaleString(undefined, {maximumFractionDigits: 0});
    }
    window.addEventListener("load", calculateEMI_econline);
    </script>
</div>
'
];
