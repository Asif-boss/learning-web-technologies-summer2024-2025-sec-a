<?php include 'partials/header.php'; ?>
<div class="app-container">
    <?php include 'partials/sidebar.php'; ?>
    <main class="main-content">
        <h2>Doctor Appointment</h2>
        <form>
            <label>Choose Doctor:</label>
            <select>
                <option>Dr. Rahman (Cardiology)</option>
                <option>Dr. Karim (Neurology)</option>
                <option>Dr. Ayesha (Dermatology)</option>
            </select>

            <label>Date:</label>
            <input type="date">

            <label>Time:</label>
            <input type="time">

            <button type="submit">Book Appointment</button>
        </form>
    </main>
</div>
<?php include 'partials/footer.php'; ?>
