



<?php 
$file = 'views/images/img' . $blog->title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='500' height: '500' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	



<div class="card" style="width: 50rem;">
  
  
  <div class="card-body">
    <h5 class="card-title"><?php echo $blog->title; ?></h5>
    <p class="card-text"><?php echo $blog->body; ?></p>
    <a href="index.php" class="btn btn-primary">Homepage</a>
  </div>
 
</div>

	
