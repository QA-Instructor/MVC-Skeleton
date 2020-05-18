<!--Search Section-->
<div class="container-fluid animated">
    <div class="container">
        <div class="row ">
            <div class="col-md-3"></div>
            <form class="col-md-6 animated-container">
                <h1>Looking for something?</h1>
                <label class="sr-only" for="inlineFormInputGroup">Search</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-search"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="search">
                </div>
                 <p class="smalltext"><b>try:</b> motivational, career, lifestyle</p> 
            </form>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>





<!--Results / ReadAll Section-->
<section>
    <div class="row justify-content-center">
        <?php foreach ($posts as $post) { ?>



            <?php
            $img = "views/images/{$post->title}.jpeg";
            ?>

            <div class="card customcard" onclick="location.href = '?controller=post&action=read&id=<?php echo $post->postID; ?>';" style="width: 20rem;">
                <img src="<?php echo $img ?>"  class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted"><?php echo $post->datePosted ?></small></p>
                    <h5 class="card-title"><?php echo $post->title ?></h5>
                    <p class="card-text"><?php echo $post->excerpt ?></p>
                <!--    <a href='?controller=post&action=read&id=<?php // echo $post->postID;        ?>'class="btn btn-primary">Go somewhere</a>-->
                </div>
            </div>


        <?php } ?>

    </div>
</section>
