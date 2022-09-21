<?php

// 1- Connect to DB
$conn = new mysqli("localhost", "root", "", "school_db");

// 2- Check if form is submitted
if(isset($_POST["submit"])){
    // 3- get data from POST
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // 4- insert data to students table

    $query = "INSERT INTO students(name, age, gender) VALUES (?,?,?)";
    echo "<br>$query<br>";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sis", $name, $age, $gender);
    $stmt->execute();
    if($conn->error) {
        echo "FAILED";
    }
    else {
        echo "Student with ID (" . $conn->insert_id . ")";
    }
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
        <input type="text" name="name">
        <br>

        <label for="age">Age:</label>
        <input type="number" name="age">
        <br>

        <label for="gender">Gender:</label>
        <br>
        <input type="radio" name="gender" value="male">Male
        <br>
        <input type="radio" name="gender" value="female">Female
        <br>

        <input type="submit" value="Create" name="submit">
    </form>
    
</body>
</html>