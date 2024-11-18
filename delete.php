<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM student_info WHERE id=$id");
header("Location: index.php");
?>
