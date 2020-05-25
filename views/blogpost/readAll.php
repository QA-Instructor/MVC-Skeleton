

<div class="container">
    <div class="row">
        <div class="col">
            <!--      1 of 3-->
        </div>
        <div class="col-6">
            <!--      2 of 3 (wider)-->
        </div>
        <div class="col">
            <!--      3 of 3-->
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!--      1 of 3-->
        </div>
        <div class="col-5">
            <!--      2 of 3 (wider)-->
        </div>
        <div class="col">
            <!--      3 of 3-->
        </div>
    </div>
</div>

      <!-- ForEach over our blogposts -->
        
      <?php foreach ($blogposts as $blogpost) {  } ?>
      
  

<!-- Banner -->

<div class="jumbotron">
    <h1 class="display-3">Welcome to Pawsome</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>

<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
    
            <!-- Blog Post #1 -->
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">                    
                                <?php echo $blogpost->blogPostName; ?> 
                    </h2>
                    <p class="card-text">   <?php echo $blogpost->blogPostSubName; ?>  </p>
                     <a class="btn btn-primary" href='?controller=blogpost&action=read&id=<?php echo $blogpost->blogpostID; ?>'>Read More &rarr;</a>    
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2017 
                    <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->blogpostID; ?>'>Edit</a>
                    <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->blogpostID; ?>'>Delete</a>
                </div>
            </div>
            <?php ?>  

<!--             Blog Post #2 
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2017 by
                    <a href="#">Start Bootstrap</a>
                </div>
            </div>-->

            <!--           Side Widget 
                    <div class="card my-4">
                      <h5 class="card-header">Side Widget</h5>
                      <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                      </div>
                    </div>
            
                  </div>
            
                </div>
                 /.row 
            
              </div>
               /.container -->

            <?php foreach ($blogposts as $blogpost) { ?>
                <p>

                    <?php echo $blogpost->blogPostName; ?> &nbsp; &nbsp;
                    <a href='?controller=blogpost&action=read&id=<?php echo $blogpost->blogpostID; ?>'>See blogpost information</a> &nbsp; &nbsp;
                    <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->blogpostID; ?>'>Delete blogpost</a> &nbsp; &nbsp;
                    <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->blogpostID; ?>'>Update blogpost</a> &nbsp;

                </p>

            <?php } ?>