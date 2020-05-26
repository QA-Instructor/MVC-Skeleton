<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Our Blog</title>
    <!--We need the meta tag to properly scale the responsive CSS code-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Here I went ahead and imported two fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="views/css/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <header>
        
         <a href="index.html" class="header-brand">Our Travel Blog</a>
        
              <nav>
        <ul>
            <li><a href='/MVC_Skeleton'>Home</a></li>
          <li><a href='?controller=product&action=readAll'>About us</a></li>
          <li><a href='?controller=blog&action=readAll'>Blogs</a></li>
          <li><a href='?controller=product&action=update'>Contact us</a></li>
         
        </ul>
        <a href="login.html" class="header-cases">Register/Login</a>
         <a href="login.html" class="header-cases">Subscribe</a>
         
                 
     
      </nav>
    
    
    </header>
<div class="w3-container w3-pink">
    <?php require_once('routes.php'); ?>
</<div>
<div class="w3-container w3-gray">
    <footer >
        Copyright &COPY; <?= date('Y'); ?>
    </footer>
</div>
  </body>
</html>