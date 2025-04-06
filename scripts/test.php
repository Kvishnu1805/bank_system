<?php
// Database Connection
$host = "localhost";
$dbusername = "admin";  // Change this if using another user
$dbpassword = "admin123";  // Leave empty if root has no password
$databasename = "bms";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $databasename);

// Check if connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
