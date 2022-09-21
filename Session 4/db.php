<?php

// 1- Initialize connection to DB
$server = "localhost";
$username = "root";
$password = "";
$db = "school_db";

$conn = new mysqli($server, $username, $password, $db);
echo "<pre>";
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}
else {

    ######## SELECT ########
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    # Fetch assoc - manual style
    $first_row = $result->fetch_assoc(); 
    $second_row = $result->fetch_assoc();


    # Fetch assoc - loop style
    while($row = $result->fetch_assoc()) {
        var_dump($row["name"]);
    }

    # Fetch all - array of associative arrays
    $rows = $result->fetch_all(MYSQLI_ASSOC);



    ######## SELECT WHERE ########
    $sql = "SELECT * FROM students WHERE id = 1";



    ######## INSERT ########
    $sql = "INSERT INTO students(name, age, gender) ";
    $sql .= " VALUES ('Mohamed', 30, 'male')";
    $result = $conn->query($sql);
    if($result === false)
        echo "Query Failed";
    else 
        echo "Rows inserted";


    $username = "Mahmoud";
    $sql = "UPDATE students SET name = '$username'";
    $result = $conn->query($sql);
    if($result === false)
        echo "ERROR";
    else {
        echo "UPDATED";
    }
    

    
    ######## DELETE ########
    $sql = "DELETE FROM students WHERE id = 6";
    $result = $conn->query($sql);
    if($result === false)
        echo "error";
    else   
        echo "DELETED";


    ######### JOIN ########

    

    ######### SQL INJECTION #########
    
}
echo "</pre>";
?>
