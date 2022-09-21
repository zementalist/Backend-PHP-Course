<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>

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
                            
    
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link waves-effect" href="/blogsol/pages/posts/create.php">Create Post</a>
                                </li>
                                <!-- If user is logged in -->
                                <li class="nav-item">
                                    <a class="nav-link waves-effect" href="/blogsol?posts_by_uid=">My Posts</a>
                                </li>
                            @endauth
                            <!-- end if -->
                            <li class="nav-item">
                                <form action="" method="get">
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                </form>
                            </li>
                        </ul>
    
                        <!-- Else: user is NOT logged in -->
                        <!-- Right -->
                        @guest
                            <ul class="navbar-nav nav-flex-icons">
                                <li class="nav-item">
                                    <a href="/blogsol/pages/auth/login.php" class="nav-link waves-effect">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/blogsol/pages/auth/register.php" class="nav-link waves-effect">Register</a>
                                </li>
                            </ul>
                        
                            @else
                        
    
                            <!-- end else -->
                            <ul class="navbar-nav nav-flex-icons">
                                <li class="nav-item">
                                    <a href="" class="nav-link waves-effect"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="/blogsol/control/logout.php" class="nav-link waves-effect">Logout</a>
                                </li>
                            </ul>
                        @endguest
    
                    </div>
    
                </div>
            </nav>
            <!-- Navbar -->
    
        </header>
        <!--Main Navigation-->
    
    
    
        <!--Main layout-->
        <main class="mt-5 pt-5">
            <div class="container">
                
                @yield("content")

            </div>
        </main>
        <!--Main layout-->
    
        <!--Footer-->
        <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
    
    
            <!--Copyright-->
            <div class="footer-copyright footer-dark py-1">
                © 2021 Copyright:
                <strong> Backend Dev </strong>
            </div>
            <!--/.Copyright-->
    
        </footer>
        <!--/.Footer-->
    </body>
    
    </html>