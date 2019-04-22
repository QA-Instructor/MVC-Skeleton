<div class="container" id="cards-container"> <!--cards container -->
    <div class="row">
        <div class="col">
            <h3>Your search results:</h3>
        </div>
    </div>
<?php foreach($posts as $post) { ?>
   <div class="row">
        <div class="col-md-3">
            <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo '..\MVC-Skeleton\views\images\posts\ . $post->title .jpeg' ?>" alt=""> <!-- CHECK IMAGE LINKS CONNECTION -->
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                </div>
            </div></a>
        </div>
    <?php echo $post->title; ?> &nbsp; &nbsp;
<!--    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>See post information</a> &nbsp; &nbsp;
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update post</a> &nbsp;-->
  
<?php } ?>