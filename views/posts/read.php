<p>This is the requested post:</p>

<<<<<<< HEAD
<p>Product ID: <?php echo $post->id; ?></p>
<p>Product Name: <?php echo $post->title; ?></p>
<p>Product Price: £<?php echo $post->postImage; ?></p>
<?php 
$file = 'views/images/' . $post->postImage . '.jpeg';
=======
<p>Blog ID: <?php echo $post->postID; ?></p>
<p>Title: <?php echo $post->title; ?></p>
<p>Written by:<?php echo $post->username; ?></p>
<?php 
$file = 'views/images/' . $post->username . '.jpeg';
>>>>>>> 36e161687f1c664729ea154a59c511785cbd6571
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
