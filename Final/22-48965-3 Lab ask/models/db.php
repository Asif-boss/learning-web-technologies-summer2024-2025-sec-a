<?php
$host = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "employees_portal"; 

function getConnection() {
    global $host, $dbuser, $dbpass, $dbname;
    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $con;
}
?>
