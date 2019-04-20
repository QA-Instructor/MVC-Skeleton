<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="views/css/styles.css">
        <title>Events Blog</title>
    </head>
    <body>
<!--        <header>
            <div class="container">
                <div class="row text-right">
                    <div class="col-sm">
                        
                    </div>
            <a href='/MVC-Skeleton'>Home</a>
            These should only be available if no one is logged in
            <a href="">Login</a>
            <a href="">Register</a>
            These should only be available after logging in
                  <a href="">My Profile</a>
                  <a href="">My Posts</a>
                  <a href="">Logout</a>

                  <a href='?controller=post&action=readAll'>Posts</a>
                  <a href='?controller=post&action=create'>Add Post</a>
                </div>
                </div>
        </header>-->

<nav class="navbar navbar-expand-lg">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block" href="#">
            Name and Logo
        </a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
            Name and <img src="" alt="logo">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item nav-active">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Login</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Register</a>
            </li>
        </ul>
    </div>
</nav>

        <div class="w3-container">
            <?php require_once('routes.php'); ?>
            </<div>
                <div class="w3-container">
                    <footer>
                        <ul> <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="row">
                                        Blog
                                    </div>
                                    <div class="row">
                                        Homepage
                                    </div>
                                    <div class="row">
                                        Tope Stories This Week
                                    </div>
                                    <div class="row">
                                        Legal Terms
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        Connect
                                    </div>
                                    <div class="row">
                                        Become a Blogger
                                    </div>
                                    <div class="row">
                                        About us
                                    </div>
                                    <div class="row">
                                        Contact Us
                                    </div>
                                </div>
                                     
                                <div class="col-sm-4">
                                    <div class="row">
                                        Social Media
                                    </div>
                                    <div class="row">
                                        Facebook
                                    </div>
                                    <div class="row">
                                        Twitter
                                    </div>
                                    <div class="row">
                                       Instagram
                                    </div>
                                    <div> 
                                </div>
                              
                </div>

                        Copyright &COPY; Women In Tech <?= date('Y'); ?> . All rights reserved.
                    </footer>
                </div>
                                
                                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                                
                </body>
                </html>