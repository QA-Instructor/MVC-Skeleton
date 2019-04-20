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
        <header class="w3-container w3-gray">
            <a href='/MVC-Skeleton'>Home</a>
            <!--These should only be available if no one is logged in-->
            <a href="">Login</a>
            <a href="">Register</a>
            <!--These should only be available after logging in-->
            <!--      <a href="">My Profile</a>
                  <a href="">My Posts</a>
                  <a href="">Logout</a>-->

            <!--      <a href='?controller=post&action=readAll'>Posts</a>
                  <a href='?controller=post&action=create'>Add Post</a>-->
        </header>
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
                </body>
                </html>