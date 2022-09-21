<pre>
<?php
session_start();

$all_users = [
    "mohamed" => [
        "id" => 1,
        "name" => "mohamed",
        "password" => "12345",
        "major" => "CS"
    ],
    'nada' => [
        "id" => 2,
        "name" => "nada",
        "password" => "54321",
        "major" => "General"
    ]
    ];

    if(isset($_POST["loginform"])) {
        if(empty($_POST["username"]))
            echo "username is missing";
        if(empty($_POST["password"]))
            echo "password is missing";

        $username = $_POST["username"];
        $password = $_POST["password"];
        if(array_key_exists($username, $all_users)) {
            if($password == $all_users["$username"]["password"]) {
                echo "logged in succesfully";
                $_SESSION["user"] = $all_users["$username"];
            }
            else {
                echo "wrong password";
            }
        }
        else {
            echo "please  create new account";
        }
    }
?>
</pre>


<?php
    // Check if form is submitted
 
    // Start your code here
?>