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
            
            <?php
        
            if(isset ($_SESSION['userID'])) { 
            ?>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ml-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="?controller=user&action=home" class="nav-link m-2 menu-item nav-active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=user&action=logout" class="nav-link m-2 menu-item">Logout</a>
                    </li>
                    
                </ul>
            </div>
            <?php
            } else {       
            ?>           
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ml-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="?controller=pages&action=landing" class="nav-link m-2 menu-item nav-active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=user&action=login" class="nav-link m-2 menu-item">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=user&action=registration" class="nav-link m-2 menu-item">Register</a>
                    </li>
                </ul>
            </div>
            <?php
            }
            ?>
            
        </nav>

        <div class="w3-container">
            <?php require_once('routes.php'); ?>
        </div>
        <!--                <div class="w3-container">-->
        <footer>
            <div>
                <div class="container text-align-left">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 footer-columns">

                            <h3 class="footer-headings">Blog</h3>

                            <ul class="list-unstyled">
                                <li><a href="#">Homepage</a></li>
                                <li><a href="#">Top Stories This Week</a></li>
                                <li><a href="#">Legal Terms</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 footer-columns">

                            <h3 class="footer-headings">Connect</h3>

                            <ul class="list-unstyled">
                                <li><a href="?controller=user&action=registration">Become a Blogger</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 footer-columns">

                            <h3 class="footer-headings">Social Media</h3>

                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                            </ul>

                        </div>

                    </div>
                     </div>   
                <div class="container">
                    <div class="row">
                       <div class="span12 pagination-centered">
                        <p>Copyright &COPY; Women In Tech <?= date('Y'); ?> . All rights reserved.</p>
                       </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>