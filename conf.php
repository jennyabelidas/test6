<?php
// Database configuration
$servername = "localhost"; // Typically "localhost"
$username = "user"; // Database username (default for XAMPP or WAMP is 'root')
$password = "password"; // Database password (default for XAMPP or WAMP is an empty string)
$dbname = "mydb"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
