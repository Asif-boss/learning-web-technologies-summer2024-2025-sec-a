<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login Form</title>
</head>
<body>
    <h1>HTML Log in Form with PHP</h1>
    <hr><br>

    <form method="post" action="task2.php">       
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="abc@email.com"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Password" name="password"><br><br>

        <input type="reset">
        <input type="submit" value="Log in">
        <br><br>
    </form>

    <?php    
        print_r($_POST);
        echo "<br>".$_POST["email"];
    ?>
</body>
</html>