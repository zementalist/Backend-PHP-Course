<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="/blog/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/blog/assets/css/font-awesome.min.css">
    <style>
        .card-comments img {
            width: 4rem
        }

        #article-meta {
            color: gray;
            margin-left: 10px;
        }

        .footer-dark {
            padding: 50px 0;
            color: #f0f9ff;
            background-color: #282d32;
            bottom: 0;
            width: 100%;
            position: fixed;
        }

        .auth-form form {
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        ul.errorlist {
            display: none;
        }

        .username_url {
            color: white;
            text-decoration: none;
        }

        .username:hover {
            background-color: #FF6565;
        }

        .card-content {
            margin-top: 3vh;
            background: #ffffff;
            border: 4px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        }

        .card-img {
            position: relative;
            overflow: hidden;
            border-radius: 0;
            z-index: 1;
            height: 26.5vh;
        }

        .card-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-img span {
            position: absolute;
            top: 15%;
            left: 12%;
            background: #0087FF;
            padding: 6px;
            color: #fff;
            font-size: 12px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            transform: translate(-50%, -50%);
        }

        .card-img span h4 {
            font-size: 12px;
            margin: 0;
            padding: 10px 5px;
            line-height: 0;
        }

        .card-desc {
            padding: 1.25rem;
        }

        .card-desc h3 {
            color: #000000;
            font-weight: 600;
            font-size: 1.5em;
            line-height: 1.3em;
            margin-top: 0;
            margin-bottom: 5px;
            padding: 0;
        }

        .card-desc p {
            color: #747373;
            font-size: 14px;
            font-weight: 400;
            font-size: 1em;
            line-height: 1.5;
            margin: 0px;
            margin-bottom: 20px;
            padding: 0;
            font-family: 'Raleway', sans-serif;
        }

        .btn-card {
            background-color: #0087FF;
            color: #fff;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            padding: .84rem 2.14rem;
            font-size: .81rem;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            margin: 0;
            border: 0;
            -webkit-border-radius: .125rem;
            border-radius: .125rem;
            cursor: pointer;
            text-transform: uppercase;
            white-space: normal;
            word-wrap: break-word;
            color: #fff;
        }

        .btn-card:hover {
            background: #FF6565;
        }

        a.btn-card {
            text-decoration: none;
            color: #fff;
        }
    </style>
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
                            <a class="nav-link waves-effect" href="/blog">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="/posts/create">Create Post</a>
                        </li>
                        <!-- If user is logged in -->
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#">My Posts</a>
                        </li>
                        <!-- end if -->
                    </ul>

                    <!-- Else: user is NOT logged in -->
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="/blog/pages/auth/login.php" class="nav-link waves-effect">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/blog/pages/auth/register.php" class="nav-link waves-effect">Register</a>
                        </li>
                    </ul>
                    <!-- end else -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link waves-effect">Logout</a>
                        </li>
                    </ul>

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
            <div class="alert alert-? text-center">
                <!-- Message -->
            </div>
            <!-- End message -->
