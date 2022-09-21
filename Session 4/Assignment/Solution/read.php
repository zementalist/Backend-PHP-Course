<?php
echo "<pre>";
// 1- Connect to school_db
$conn = new mysqli("localhost", "root", "", "school_db");
$rows = [];

// 2- check if form is submitted
if(isset($_GET["submit"])){
    // 3- GET filters (id, name, gender)
    $query = "SELECT * FROM students ";
    if(!empty($_GET["id"])) {
        $id = $_GET["id"];
        $query = $query . "WHERE id = $id ";
    }
    // 4- Use whatever is set (single or multiple filters) to find student(s)

    if(!empty($_GET["name"])) {
        $name = $_GET["name"];
        $query .= str_contains($query, "WHERE") ? " OR" : " WHERE";
        $query = $query . " name LIKE '%$name%' ";
    }

    if(isset($_GET["gender"])) {
        $gender = $_GET["gender"];
        $query .= str_contains($query, "WHERE") ? " OR " : " WHERE";
        $query = $query . " gender = '$gender'";
    }

    $result = $conn->query($query);
    if($result === FALSE){
        echo "<br>FAILED<br>";
    }

    else {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }
    echo $query;

}
echo "</pre>";
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
    <h1>Filter students by ID OR name OR gender</h1>
    <form action="" method="GET">
        <label for="id">ID:</label>
        <input type="number" name="id">
        <br>

        <label for="name">Name:</label>
        <input type="text" name="name">
        <br>

        <label for="gender">Gender:</label>
        <br>
        <input type="radio" name="gender" value="male">Male
        <br>
        <input type="radio" name="gender" value="female">Female
        <br>



        <input type="submit" value="Search" name="submit">
    </form>


    <pre>
        <?php var_dump($rows); ?>
    </pre>

</body>
</html>