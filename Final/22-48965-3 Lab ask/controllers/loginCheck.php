<?php
require_once('../models/db.php');
$username = trim($_REQUEST['username']);
$password = trim($_REQUEST['password']);

$con = getConnection();
$sql = "select * from employers where username ='{$username}' and password='{$password}'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count) {
    header('location: ../views/employer.php');
} else {
    header('location: ../views/login.php?error=invalid_log');
}
?>