<!DOCTYPE html>
<html>
   <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    <title>Our Blog</title>
    
       <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!--External bootstrap Stylesheet -->
<link href="views/css/styles1.css" rel="stylesheet" type="text/css"/> 

    <!--We need the meta tag to properly scale the responsive CSS code
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!--Here I went ahead and imported two fonts
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
    <!--<link href="views/css/style.css" rel="stylesheet" type="text/css"/> -->
    
  </head>
  <body>
    <header>
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">GITS ABROAD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href='/finalProject'>Home
                                 <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controller=pages&action=aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='?controller=blog&action=readAll'>Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controller=contactus&action=create">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='?controller=authentication&action=login'>Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='?controller=authentication&action=create'>Sign Up</a>
                            
                        </li>
                        <li class="nav-item">
                               <a class="nav-link" href='?controller=subscribe&action=create'>Subscribe here</a> 
                        </li>

                    </ul>
                </div>
            </div>
        </nav>       

     
      
    
    
    </header>
<div class="w3-container w3-pink">
    <?php require_once('routes.php'); ?>
</div>
    
         

  <!--<footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white"> Our Travel Blog  &copy <?= date('Y');?></p>
            </div></footer> -->
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>