<!DOCTYPE html>
<!--index > layout > routes > controller > functionality (models)-->
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >-->
<!--<link rel="stylesheet" href="views/css/styles.css">-->

  <!-- Bootstrap Flatly Theme -->
<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-mhpbKVUOPCSocLzx2ElRISIORFRwr1ZbO9bAlowgM5kO7hnpRBe+brVj8NNPUiFs" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="views/images/PawsomeLogo.png"><img src="views/images/PawsomeLogo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="views/pages/home.php">Home<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="views/pages/Register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Aww</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lol</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Wow</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
<title>Pawsome</title>
  </head>
  <body>
    <header class="w3-container w3-white">
      <a href='/MVC-Skeleton'>Home</a>
<!--      <a href='?controller=product&action=readAll'>Products</a> 
      <a href='?controller=product&action=create'>Add Product</a>-->
      <a href='?controller=blogpost&action=readAll'>Blogs</a>
      <a href='?controller=blogpost&action=create'>Add Blog</a>
      <a href='?controller=user&action=create'>Register</a>     

      

    </header>
<div class="w3-container w3-white">
    <?php require_once('routes.php'); ?>

</<div>
<div class="w3-container w3-white">

    <footer >
        Copyright &COPY; <?= date('Y'); ?>
        
        
<!--The other way that we can do this is not just typing the URL in the browser, but embedded in the HTML are what are called anchor tags which are clickable links that have an href, 
a Hyper Text Reference, inside that.
Each time the user clicks on an anchor tag with an href = value to switch to a new page, the browser makes a connection to the web server and issues a GET request - to GET the contents of the page at the specified URL.
The server returns the HTML document to the browser, which formats and displays the document to the user.-->
    </footer>
</div>
  </body>
</html>