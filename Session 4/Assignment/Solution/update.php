<?php

// 1- connect to school_db 
$conn = new mysqli("localhost", "root", "", "school_db");

$student_id = $student_name = $student_age = $student_gender = "";
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    // 2- SELECT student by id
    $query = "SELECT * FROM students WHERE id = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    // 3- If student is found, set student_variables

        $student_id = $row["id"]; // change this
        $student_name = $row["name"]; // and so on ..
        $student_age = $row["age"];
        $student_gender = $row["gender"];
    

}

if(isset($_POST["submit"])) {
    // 4- Use POST data to UPDATE student record
    // POST data: name, age, student_id
    $name = $_POST["name"];
    $age = $_POST["age"];
    $std_id = $_POST["student_id"];

    $query = "UPDATE students SET name = '$name', age = $age WHERE id = $std_id";
    $result = $conn->query($query);
    if($result)
        echo "UPDATED";
    else
        echo "FAILED";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $student_name ?>">
        <br>

        <label for="age">Age:</label>
        <input type="number" name="age" value="<?= $student_age ?>">
        <br>

        <label for="gender">Gender:</label>
        <br>
        <input type="radio" disabled name="gender" value="male" <?= $student_gender == "male" ? "checked" : "" ?>>Male
        <br>
        <input type="radio" disabled name="gender" value="female" <?= $student_gender == "female" ? "checked" : "" ?>>Female
        <br>

        <input type="hidden" name="student_id" value="<?= $student_id ?>">

        <input type="submit" value="Update" name="submit">
    </form>
    
</body>
</html>