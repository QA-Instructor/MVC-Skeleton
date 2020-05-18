<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--bootstrap stylesheet-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!--fontawesome stylesheet: for icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!--custom style sheet-->
        <link rel="stylesheet" href="views/css/styles.css">


        <title>CONCATENATE</title>
    </head>
    
    
    <body>
        <!--Navigation Bar Section-->
        <div class="container-fluid logo">
            <div class="row justify-content-center">
                <img src="views/images/standard/logo.png" height="80px">
            </div>
        </div>
        <hr>
        <?php
//        $_COOKIE['user'] = 'uncomment to test log in switch';
        if (isset($_COOKIE['user'])) {
            require_once 'views/sections/nav-member.php';
        } else{
            require_once 'views/sections/nav-default.php';
        }    
        ?>


        <?php require_once('routes.php'); ?>

        <hr>
        <footer>
            <div class="row justify-content-around">
                <div class="col-md-3">
                    <ul>
                        <li><h5>Resources</h5></li>
                        <!--<li><hr></li>-->
                        <li>Example</li>
                        <li>Example</li>
                        <li>Example</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><h5>Contact</h5></li>
                        <!--<li><hr></li>-->
                        <li>Example</li>
                        <li>Example</li>
                        <li>Example</li>
                    </ul>
                </div>
                <div class="col-md-3"><ul>
                        <li><h5>Events</h5></li>
                        <!--<li><hr></li>-->
                        <li>Example</li>
                        <li>Example</li>
                        <li>Example</li>
                    </ul></div>
                <div class="col-md-3">
                    <ul>
                        <li><h5>Socials</h5></li>
                        <!--<li><hr></li>-->
                        <li><i class="fab fa-discord"></i></li>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-github"></i></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row justify-content-end align-content-middle">
                <div class="col-md-2">
                    <img src="views/images/standard/graphiclogo.png" width="30px">
                    <i class="far fa-copyright"></i> <?php echo date('Y') ?></div>
               
            </div>
        </footer>
        <script src='https://cdn.tiny.cloud/1/tsm4jflxmwzdk9w9ws3pt5kefzwep82nt1bcq1rduh7w70lu/tinymce/5/tinymce.min.js' referrerpolicy="origin">
        </script>
        <script>
            tinymce.init({
                selector: '#textarea'
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>