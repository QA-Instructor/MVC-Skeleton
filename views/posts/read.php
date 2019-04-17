
<h1 id="title"><?php echo $post->title; ?></h1>
<h4 id="date"><?php echo $post->date; ?></h4><br>
<?php 
$file = 'views/images/' . $post->title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='400' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
<p id="post"><?php echo $post->content; ?></p>

	
