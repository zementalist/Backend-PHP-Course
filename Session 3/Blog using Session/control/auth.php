<?php
session_start();

include_once "../helpers/validator.php";


    if(isset($_POST["regform"])) {
        // username, password, password_confirm
        $data_is_valid = checkForm($_POST, ["username", "password", "password_confirm"]);
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_conf = $_POST["password_confirm"];

        if(
            checkLength($username, 20) && checkLength($password, 50, 8) &&
            $password === $password_conf
        ) {
            $_SESSION["users"]["$username"] = [
                "id" => count($_SESSION["users"]) + 1,
                "username" => $username,
                "password" => $password
            ];
            array_push($_SESSION["messages"], "Account Created successfully, please login");
            header("location: /blogsol/pages/auth/login.php");
        }
        else {
            $error = "Registration data is invalid.";
            array_push($_SESSION["messages"], $error);
            header("location: /blogsol/pages/auth/register.php");
        }

    }


    if(isset($_POST["loginform"])) {
        $data_is_valid = checkForm($_POST, ["username", "password"]);
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Has user registered an account ?
        if(array_key_exists($username, $_SESSION["users"])) {
            if($password == $_SESSION["users"]["$username"]["password"]) {
                $_SESSION["user"] = $_SESSION["users"]["$username"];
                header("location: /blogsol/index.php");
            }
            else {
                $error = "Incorrect password";
                array_push($_SESSION["messages"], $error);
                header("location: /blogsol/pages/auth/login.php");
            }
        }
        else {
            $error = "Create an account first.";
            array_push($_SESSION["messages"], $error);
            header("location: /blogsol/pages/auth/register.php");
        }
            
    }
?>