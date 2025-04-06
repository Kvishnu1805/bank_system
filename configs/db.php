<?php
// Database Connection
// $host = "localhost";
// $dbusername = "admin";
// $dbpassword = "admin123";
// $databasename = "bms";
// $conn = mysqli_connect($host, $dbusername, $dbpassword, $databasename);

$host = "localhost";
$dbusername = "admin";
$dbpassword = "admin123";
$databasename = "bms";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $databasename);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>


