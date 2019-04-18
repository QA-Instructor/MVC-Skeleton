<p>This is the requested product:</p>

<p>Product ID: <?php echo $post->id; ?></p>
<p>Product Name: <?php echo $post->title; ?></p>
<p>Product Price: £<?php echo $post->postImage; ?></p>
<?php 
$file = 'views/images/' . $post->postImage . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
