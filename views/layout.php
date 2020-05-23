<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >
<link rel="stylesheet" href="views/css/styles.css">
<title>Shopping Cart</title>
  </head>
  <body>
    <header class="w3-container w3-gray">
      <a href='/finalProject'>Home</a>
<!--      this this is due to the fact it leads with a ? mark it means it appends it-->
     

<!--this is where victoria wants us to pass the arguments within this line, controller action
and a third argument being passed in as which country - a selective read. -->
<!--maybe then we could almost do like a find action keyword in, search string, and then apply a 
variable to the rest of it, and then process this variable and see where it applies. -->
<a  href ='http://localhost/finalProject/index.php?controller=product&action=readAll'>TestRun</a>
      <a href='?controller=product&action=readAll'>Products</a>
      <a href='?controller=product&action=create'>Add Product</a>
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