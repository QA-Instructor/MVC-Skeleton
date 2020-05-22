

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

<div class="jumbotron">
  <h1 class="display-3">Welcome to Pawsome</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<?php foreach($blogposts as $blogpost) { ?>
  <p>
<<<<<<< HEAD
    <?php echo $blogpost->title; ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&id=<?php echo $blogpost->id; ?>'>See blogpost information</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->id; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->id; ?>'>Update blogpost</a> &nbsp;
=======
    <?php echo $blogpost->blogPostName; ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&id=<?php echo $blogpost->blogpostID; ?>'>See blogpost information</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->blogpostID; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->blogpostID; ?>'>Update blogpost</a> &nbsp;
>>>>>>> mvcpets
  </p>
<?php } ?>