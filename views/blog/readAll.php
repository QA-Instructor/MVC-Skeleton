


<!DOCTYPE html>
<html lang="en">

<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">

 <title>Gits abroad Blogs</title>

 <!-- Bootstrap core CSS -->
<!-- <link href="css_POST/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

<!--  Custom styles for this template 
 <link href="css_POST/blog-post.css" rel="stylesheet">-->


</head>

<body>
   <div class="col-lg-8" style="margin-left: 20%; padding: 10%;">
   
<?php foreach($blog as $blog) { ?>
 <!-- Page Content -->
 <div class="container">

   <div class="row">

     <!-- Post Content Column -->
     

       <!-- Title -->
       <h1 class="mt-4"><?php echo $blog->title . "<br>"; ?></h1>
       <br>
       <!-- Author -->
       <p class="lead">
          
           <br>
       </p>
       <br>
       <div style=' 
    display: inline-block;
    text-align: center;
    float: left;
    width: 70%;
    length: 60%;
    position: relative;'
       <!-- Preview Image -->
       <img  style=";" class="img-fluid rounded"  style=" position: absolute;
  " src="views/images/img/<?php echo $blog->blogID; ?>.jpg" alt="">

       </div>
        <a href='?controller=blog&action=read&id=<?php echo $blog->blogID; ?>'>read more</a> &nbsp; &nbsp;      
 
<?php } ?>
     </div>
<!--side bar widget stuff-->
<!--       <div class="col-md-4">

        Extra Functionality Widget
       <div class="card my-4">
         <div class="card-body">
           <div class="input-group">
              <a href='?controller=blog&action=subscribe'class="btn btn-primary">Subscribet&rarr;</a>
           
           </div>
         </div>
       </div>-->

<!--         Categories Widget
       <div class="card my-4">
         <h5 class="card-header">Categories</h5>
         <div class="card-body">
           <div class="row">
             <div class="col-lg-6">
               <ul class="list-unstyled mb-0">
                 <li>
                   <a href="#">Tips</a>
                 </li>
                 <li>
                   <a href="#">Resteraunt</a>
                 </li>
                 <li>
                   <a href="#">Trips</a>
                 </li>
               </ul>
             </div>
             <div class="col-lg-6">
               <ul class="list-unstyled mb-0">
                 <li>
                   <a href="#">Money</a>
                 </li>
                 <li>
                   <a href="#">Kids</a>
                 </li>
                 <li>
                   <a href="#">Not sure</a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>-->

 

     </div>

   </div>
   <!-- /.row -->

 <!-- /.container -->

<!--  Bootstrap core JavaScript 
 <script src="css_POST/vendor/jquery/jquery.min.js"></script>
 <script src="css_POST/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

</body>

</html>