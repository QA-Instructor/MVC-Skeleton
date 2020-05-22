<p>This is the requested product:</p>

<<<<<<< HEAD
<p>Blogpost ID: <?php echo $blogpost->id; ?></p>
<p>Blogpost title: <?php echo $blogpost->title; ?></p>
<p>Blogpost content: <?php echo $blogpost->posttext; ?></p>
<?php 
$file = $blogpost->photo;//the last step that we did
//$file is getting the photo from DB. We
//$file = 'views/images/' . $blogpost->title . '.jpeg';

if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
=======
<p>Blogpost ID: <?php echo $blogpost->blogpostID; ?></p>
<p>Blogpost Name: <?php echo $blogpost->blogPostName; ?></p>
<p>Blogpost SubName: <?php echo $blogpost->blogPostSubName; ?></p>
<p>Blogpost Content: <?php echo $blogpost->blogPostContent; ?></p>
<p>DatePosted: <?php echo $blogpost->datePosted; ?></p>

<?php 
$file = $blogpost->blogPostPhoto;//the last step that we did
//C:/xampp/htdocs/MVC-Skeleton/views/images/Test1.jpeg
//$file is getting the photo from DB. 
//$file = 'views/images/' . $blogpost->title . '.jpeg';

if(file_exists($file)){
    $file = explode('/', $file, 5);   
    $img = "<img src='$file[4]' width='150' />";
>>>>>>> mvcpets
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
	
