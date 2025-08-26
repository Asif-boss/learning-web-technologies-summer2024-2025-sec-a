<?php include 'partials/header.php'; ?>
<div class="app-container">
    <?php include 'partials/sidebar.php'; ?>
    <main class="main-content">
        <h2><i class="fa-solid fa-envelope"></i> Contact Us</h2>

        <form>
            <label>Name:</label>
            <input type="text" placeholder="Your full name">

            <label>Email:</label>
            <input type="email" placeholder="example@mail.com">

            <label>Message:</label>
            <textarea rows="5" placeholder="Write your message here..."></textarea>

            <button type="submit">Send</button>
        </form>
    </main>
</div>
<?php include 'partials/footer.php'; ?>

