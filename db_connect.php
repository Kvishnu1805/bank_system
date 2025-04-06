<?php
$servername = "localhost"; // Wamp uses localhost
$username = "root"; // Default user is root
$password = "vishnu@123k"; // Leave empty (default)
$database = "bms"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
