<p>This is the requested product:</p>

<p>Blog ID: <?php echo $post->postID; ?></p>
<p>Title: <?php echo $post->title; ?></p>
<p>Excerpt: £<?php echo $post->excerpt; ?></p>
<?php 
$file = 'views/images/' . $post->title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
