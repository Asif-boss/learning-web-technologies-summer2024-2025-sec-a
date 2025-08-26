<?php include 'partials/header.php'; ?>
<div class="app-container">
    <?php include 'partials/sidebar.php'; ?>
    <main class="main-content">
        <h2><i class="fa-solid fa-user"></i> Profile Management</h2>

        <form>
            <label>Profile Picture:</label>
            <input type="file" accept="image/*">

            <label>Phone Number:</label>
            <input type="tel" placeholder="+8801XXXXXXXXX">

            <label>Change Password:</label>
            <input type="password" placeholder="Enter new password">

            <button type="submit">Update Profile</button>
        </form>
    </main>
</div>
<?php include 'partials/footer.php'; ?>
