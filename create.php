<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add New Student</h1>
        <form action="create.php" method="POST">
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="middlename" placeholder="Middle Name">
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <textarea name="address" placeholder="Address" required></textarea>
            <input type="text" name="course_section" placeholder="Course & Section" required>
            <button type="submit" name="submit" class="btn">Add Student</button>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $course_section = $_POST['course_section'];

        $sql = "INSERT INTO student_info (firstname, middlename, lastname, age, address, course_section)
                VALUES ('$firstname', '$middlename', '$lastname', $age, '$address', '$course_section')";
        $conn->query($sql);
        header("Location: index.php");
    }
    ?>
</body>
</html>
