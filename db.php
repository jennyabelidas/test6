<?php
$servername = "localhost";
$username = "jenny"; // Change if needed
$password = "jenny";     // Change if needed
$dbname = "students";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
