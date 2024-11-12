<?php
// Include the database configuration
include('conf.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $firstname = $_POST['firstname'];
    $middlen`ame = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $course_section = $_POST['course_section'];
   

    // Prepare the SQL query to insert the data
    $sql = "INSERT INTO users (firstname, middlename, lastname, age, address, course_section) 
            VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$course_section')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>