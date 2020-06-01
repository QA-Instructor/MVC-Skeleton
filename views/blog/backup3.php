

  <p>Here is a list of all blogs:</p>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
 </ol>
 <div class="carousel-inner">
   <div class="carousel-item active">
     <img class="d-block w-100" src="views/images/img/poland.jpg" alt="Poland">
   </div>
   <div class="carousel-item">
     <img class="d-block w-100" src="views/images/img/newyork.jpg" alt="New York">
   </div>
   
   <div class="carousel-item">
     <img class="d-block w-100" src="views/images/img/vietnam2.jpg" alt="Morocco">

   </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
   

<?php foreach($blog as $blog) { ?> <!--this page when you do blog post table this needs to be updated -->


   
    <div class="card text-center">
 <div class="card-header">
   Featured
 </div>
 <div class="card-body">
   <h5 class="card-title"><?php echo $blog->title; ?></h5>
    <a href='?controller=blog&action=read&id=<?php echo $blog->blogID; ?>'>read more</a> &nbsp; &nbsp;
 </div>
 <div class="card-footer text-muted">
   2 days ago
 </div>
</div>
 

<?php } ?>