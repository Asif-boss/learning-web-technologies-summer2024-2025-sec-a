<?php include 'partials/header.php'; ?>
<div class="app-container">
    <?php include 'partials/sidebar.php'; ?>
    <main class="main-content">
        <h2><i class="fa-solid fa-file-invoice-dollar"></i> Billing</h2>

        <form>
            <label>Service Name:</label>
            <input type="text" placeholder="e.g. X-ray">

            <label>Amount:</label>
            <input type="number" placeholder="Enter amount">

            <label>Payment Method:</label>
            <select>
                <option>Cash</option>
                <option>Card</option>
                <option>Bkash</option>
            </select>

            <button type="submit">Generate Bill</button>
        </form>

        <!-- Insurance Claim Popup -->
        <button onclick="openInsurancePopup()">Submit Insurance Claim</button>

        <div id="insuranceModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeInsurancePopup()">&times;</span>
                <h3>Insurance Claim</h3>
                <form>
                    <label>Insurance Provider:</label>
                    <input type="text" placeholder="Provider Name">

                    <label>Policy Number:</label>
                    <input type="text" placeholder="Policy Number">

                    <label>Claim Amount:</label>
                    <input type="number">

                    <button type="submit">Submit Claim</button>
                </form>
            </div>
        </div>
    </main>
</div>
<?php include 'partials/footer.php'; ?>
