<?php

session_start();

if(isset($_SESSION["user"])) {
    header("location: profile.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Backend Dev - Session 2</title>
</head>
<body>
    <form action="control.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name='username'><br>

        <label for="password">Password</label>
        <input type="password" name='password'><br>

        <input type="submit" value="submit" name='loginform'>
    </form>

    <pre>
    <?php

       
    ?>
    </pre>
    
</body>
</html>