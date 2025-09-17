<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employer Management Login</title>

</head>
<body>
    <div class="container">
        <h1>Employer Management</h1>
        <form id="loginForm" action="../controllers/loginCheck.php" method="post">
            <h2>Login</h2>

            <?php
            if (isset($_REQUEST['error']) && $_REQUEST['error'] == "invalid_log") {
                echo '<div style="color:red" class="error-message">Invalid Username or password!</br></div>';
            }
            ?>

            <div class="form-group">
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="username" placeholder="username" required>
            </div>

            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>

</body>
</html>