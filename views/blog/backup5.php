
 
<!DOCTYPE html>
<html lang="en">

<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">

 <title>Gits Abroad Blog Posts</title>

 <!-- Bootstrap core CSS -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- Custom fonts for this template -->
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

 <!-- Custom styles for this template -->
 <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>


 

 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/about-bg.jpg')">
   <div class="overlay"></div>
   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-10 mx-auto">
         <div class="page-heading">
             <?php foreach($blog as $blog) { ?>
           <h1><?php echo $blog->title . "<br>"; ?></h1>
             <a class="navbar-brand" href='?controller=blog&action=read&id=<?php echo $blog->blogID; ?>'>Read More</a> &nbsp; &nbsp;      
           <?php } ?>
         </div>
       </div>
     </div>
   </div>
 </header>

 <!-- Main Content -->
 

 <hr>


 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Custom scripts for this template -->
 <script src="js/clean-blog.min.js"></script>

</body>

</html>
