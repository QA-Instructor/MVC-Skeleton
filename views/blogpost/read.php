<p>This is the requested product:</p>

<p>Blogpost ID: <?php echo $blogpost->id; ?></p>
<p>Blogpost title: <?php echo $blogpost->title; ?></p>
<p>Blogpost content: <?php echo $blogpost->posttext; ?></p>
<?php 
$file = $blogpost->photo;//the last step that we did
//$file is getting the photo from DB. We
//$file = 'views/images/' . $blogpost->title . '.jpeg';

if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}


//What I did to ensure that the photo I upload displays on the page:
//1. Fixed the error inside the blogpost model
//2. 


?>
	
