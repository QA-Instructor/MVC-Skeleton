<p>This is the requested product:</p>

<p>Product ID: <?php echo $product->commentID; ?></p>
<p>Product Name: <?php echo $product->comment; ?></p>
<p>Product Price: <?php echo $product->username; ?></p>
<?php 
$file = 'views/images/' . $product->comment . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
