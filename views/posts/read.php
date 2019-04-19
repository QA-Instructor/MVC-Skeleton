<p>This is the requested post:</p>

<p>Blog ID: <?php echo $post->id; ?></p>
<p>Title: <?php echo $post->title; ?></p>
<!--<p>Written by:<?php echo $post->username; ?></p>-->
<?php 
$file = 'views/images/posts/' . $post->postImage;

if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
