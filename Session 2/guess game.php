<?php
session_start();
    if(!isset($_SESSION["random_n"]))
        $_SESSION["random_n"] = rand(1,100);
    // echo $_SESSION["random_n"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guess the number</title>
</head>
<body>
    <form>
        <input type="number" name="answer">
        <br>
        <input type="submit" value="guess" name="submit">
    </form>

    <?php

        if(isset($_GET["submit"])){
            $answer = $_GET['answer'];
            $correct_answer = $_SESSION["random_n"];
            if($answer == $correct_answer){
                echo "You won: $answer, play again";
                $_SESSION["random_n"] = rand(1,100);
            }
            else if($answer < $correct_answer) {
                echo "Go High";
            }
            else {
                echo "Go Low";
            }
            
        }
    ?>
</body>
</html>