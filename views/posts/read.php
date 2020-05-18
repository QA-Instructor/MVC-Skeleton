<?php
$filename = 'views/blogs/' . $_GET['id'] . '.txt';


if (file_exists("views/images/{$post->title}.jpeg")) {
    $img = "views/images/{$post->title}.jpeg";
} else {
    $img = "views/images/standard/_noproductimage.png";
}
//Checks if file declared exists. If it does, get all content from inside that file and store it into a variable.
if (is_file($filename)) {
    $content = file_get_contents($filename);
}
?>

<div class="container">

    <p>This is the requested product:</p>
    <div class="row justify-content-center">

        <div class="card" style="width: 30rem;">
            <h5 class="card-title"><?php echo $post->title ?></h5>
            <img src="<?php echo $img ?>"  class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted"><?php echo $post->datePosted ?></small></p>

                <p class="card-text"><?php echo $post->excerpt ?></p>
                <p class="card-text"><?php echo $content ?></p>
            <!--    <a href='?controller=post&action=read&id=<?php // echo $post->postID;   ?>'class="btn btn-primary">Go somewhere</a>-->
            </div>
        </div>
    </div>
</div>





