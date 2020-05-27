<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" >
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
        
   
       
        
    <nav>
        <ul>
            <li><a href="index.php" >Home</a></li>
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
</div>
<div class="wrapper">
    <footer >
        
             <!--The main footer menu-->
        <ul class="footer-links-main">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Subscribe and Login</a></li>
        </ul>
        <!--The latest cases footer menu-->
     
        <!--The social media footer menu-->
        <div class="footer-sm">
          <a href="#">
            <img src="views/images/img/youtube-symbol.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="views/images/img/twitter-logo-button.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="views/images/img/facebook-logo-button.png" alt="youtube icon">
          </a>
        </div>
        Copyright &COPY; <?= date('Y'); ?>
    </footer>
</div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  

</body>
</html>


 