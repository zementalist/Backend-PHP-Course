<?php
    if(!isset($_SESSION))
        session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="/blogsol/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/blogsol/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/blogsol/assets/css/layout.css">

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</head>

<body>
    

<body>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#">
                    <strong class="blue-text">Blog-X</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="/blogsol">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php if(isset($_SESSION["user"])) { ?>
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="/blogsol/pages/posts/create.php">Create Post</a>
                            </li>
                            <!-- If user is logged in -->
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="/blogsol?posts_by_uid=<?= $_SESSION["user"]["id"] ?>">My Posts</a>
                            </li>
                        <?php } ?>
                        <!-- end if -->
                    </ul>

                    <!-- Else: user is NOT logged in -->
                    <!-- Right -->
                    <?php if(!isset($_SESSION["user"])) { ?>
                        <ul class="navbar-nav nav-flex-icons">
                            <li class="nav-item">
                                <a href="/blogsol/pages/auth/login.php" class="nav-link waves-effect">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="/blogsol/pages/auth/register.php" class="nav-link waves-effect">Register</a>
                            </li>
                        </ul>
                    
                    <?php } else { ?>
                    

                        <!-- end else -->
                        <ul class="navbar-nav nav-flex-icons">
                            <li class="nav-item">
                                <a href="" class="nav-link waves-effect"><?= "Welcome " . $_SESSION["user"]["username"] ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="/blogsol/control/logout.php" class="nav-link waves-effect">Logout</a>
                            </li>
                        </ul>
                    <?php } ?>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->



    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">
            <!-- If session has message -->
            <?php foreach($_SESSION["messages"] as $msg) { ?>
                <div class="alert alert-info text-center">
                    <!-- Message -->
                    <?= $msg ?>
                    
                </div>
            <?php } $_SESSION["messages"] = []; ?>
            <!-- End message -->
