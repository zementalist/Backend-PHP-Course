<?php

// 1- Connect to school_db
$conn = new mysqli("127.0.0.1", "root", "", "school_db");
// 2- Check if form is submitted
if(isset($_POST["submit"])){
    // 3- get ID and DELETE it from students table
    $id = $_POST["id"];
    $query = "DELETE FROM students WHERE id = $id";
    $result = $conn->query($query);
    if($result)
        echo "DELETED $id";
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
    
    <form action="" method="post">
        <label for="id">Student ID:</label>
        <input type="number" name="id">
        <br>

        <input type="submit" value="Delete" name="submit">
    </form>

</body>
</html>