<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="views/css/styles.css">
        <title>Events Blog</title>
    </head>
    <body>
        <!--        navigation bar-->
        
        <nav class="navbar navbar-expand-lg sticky-top" id="nav1">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>
                <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                    Name and <img src="" alt="logo">
                </a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
     
            <?php
        
             
            if (isset($_SESSION['userID'])) {
//            
                ?>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item">
                            <a href="?controller=pages&action=home" class="nav-link m-2 menu-item nav-active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link m-2 menu-item nav-active">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link m-2 menu-item nav-active">My Posts</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=user&action=logout" class="nav-link m-2 menu-item">Logout</a>
                        </li>

                    </ul>
                </div>
                <?php
            } else {
//            
                ?>           
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item">
                            <a href="?controller=pages&action=home" class="nav-link m-2 menu-item nav-active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=user&action=login" class="nav-link m-2 menu-item nav-active">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=user&action=registration" class="nav-link m-2 menu-item nav-active">Register</a>
                        </li>

                    </ul>
                </div>
                <?php
            }
            
            ?>

        </nav>
        <!--end of navigation bar-->

        <!--pages as per controller-->
        <div class="w3-container">
<?php require_once('routes.php'); ?>
        </div>

        <!--end of controller page-->

        <!--footer-->
        <footer>

            <div class="navbar sticky-bottom"> <!-- use 'sticky/fixed' to move it with scrolling-->

                <div>

                    <div class="container text-align-left">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4 footer-columns">

                                <h5 class="footer-headings">Blog</h5>

                                <ul class="list-unstyled">
                                    <li><a href="../MVC-Skeleton/index.php#" class="footer-writing">Homepage</a></li>
                                    <li><a href="#" class="footer-writing">Top Stories This Week</a></li>
                                    <li><a href="#" class="footer-writing">Legal Terms</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 footer-columns">

                                <h5 class="footer-headings">Connect</h5>

                                <ul class="list-unstyled">

                                    <li><a href="?controller=user&action=registration" class="footer-writing">Become a Blogger</a></li>
                                    <li><a href="#" class="footer-writing">About us</a></li>
                                    <li><a href="#" class="footer-writing">Contact us</a></li>

                                </ul>
                            </div>

                            <div class="col-sm-4 footer-columns">

                                <h5 class="footer-headings">Social Media</h5>

                                <ul class="list-unstyled">
                                    <li><a href="#" class="footer-writing"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                                    <li><a href="#" class="footer-writing"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li><a href="#" class="footer-writing"><i class="fa fa-instagram"></i> Instagram</a></li>
                                </ul>

                            </div>

                        </div>
                    </div>   
                    <div class="container">
                        <div class="row">
                            <div class="col-xs">                   
                                Copyright &COPY; Women In Tech <?= date('Y'); ?>. All rights reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--end of footer-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script>    
function login(){
        
        var xmlhttp = new XMLHttpRequest(); // new HTTP request
        xmlhttp.onreadystatechange = function() {  // annonymous function for processing once the request is returned
            if (this.readyState == 4 && this.status == 200) {
                
                document.getElementById("nav1").innerHTML = document.getElementById("myNavbar").innerHTML;

            }
            
        };
        xmlhttp.open('GET', 'layout.php'); // making the HTTP request - function is asigned a key value pair of choice - read by _REQUEST superglobal - and added the strChoice argument
        xmlhttp.send();   // sending the HTTP request
            
        };

</script>-->
        
    </body>
</html>