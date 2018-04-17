<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>What's up London</title>
        <link rel="stylesheet" href="views/css/styles.css">
        <!--navbar bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <!--social share buttons-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head> 
    <body>
        <style type="text/css">
            .navbar-inverse{
                border-radius: 0px;
            }
        </style>
        <nav class="navbar navbar-inverse">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <style type="text/css">
                    .navbar-brand{
                        font-family: 'Quicksand', cursive;
                    } </style>
                <a href="#" class="navbar-brand">What's up London</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href='index.php'>Home</a></li>
                    <li><a href='?controller=article&action=readcategory'>What's on</a></li>
                    <li><a href='?controller=product&action=create'>Food & Drink</a></li>
                    <li><a href="#">Social</a></li>
                    <li><a href="#">Sight Seeing</a></li>
                    <li><a href="#">Hotels</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </form>
            </div>
        </nav>
        <div class='container'>
            <?php require_once('routes.php'); ?>
        </div>
        <footer class="footer navbar-fixed-bottom collapse">
            <div class='container-fluid'>
                <div class="col-md-5">
                    <div class="row">
                        <div class="footer-contact">
                        <p><a href='?controller=product&action=create'>About us</a></p>
                            <p><a href='?controller=product&action=create'>Contact us</a></p>
                            <p><a href='?controller=blogger&action=login'>Blogger login</a></p> 
                            <p><a href='?controller=blogger&action=logout'>Blogger logout</p><a/>
                        </div>

                    </div>
                </div>
                <div class="col-md-7">

                    <div class="row">
                        <div class="pull-right">
                            <form action="action_page.php">
                                <div class="footer-newsletter">
                                  <p>Sign up to our news</p>
                                </div>
                                <input type="text" placeholder="Email address" name="mail" required>
                                <input type="submit" value="Subscribe">
                            </form>  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>				
                        </div>
                    </div>
                </div>
                </div
            </div>
        </footer>
    </body>
</html>                            

