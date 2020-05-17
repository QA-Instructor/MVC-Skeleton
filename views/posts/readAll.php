<p>Here is a list of all blogs:</p>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach ($posts as $post) { ?>



            <?php
            $img = "views/images/{$post->title}.jpeg";
            ?>

            <div class="card customcard" onclick="location.href = '?controller=post&action=read&id=<?php echo $post->postID; ?>';" style="width: 18rem;">
                <img src="<?php echo $img ?>"  class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted"><?php echo $post->datePosted ?></small></p>
                    <h5 class="card-title"><?php echo $post->title ?></h5>
                    <p class="card-text"><?php echo $post->excerpt ?></p>
                <!--    <a href='?controller=post&action=read&id=<?php // echo $post->postID;  ?>'class="btn btn-primary">Go somewhere</a>-->
                </div>
            </div>


        <?php } ?>

    </div>
</div>
