<?php

// 1- Connect to DB

// 2- Check if form is submitted

    // 3- get data from POST

    // 4- insert data to students table

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