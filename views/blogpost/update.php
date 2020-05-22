<p>Fill in the following form to update an existing blogpost:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Blogpost</h2>
    <p>

        <input class="w3-input" type="text" name="BlogPostName" value="<?= $blogpost->blogPostName; ?>">
        <label>Blog Post Name</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="BlogPostSubName" value="<?= $blogpost->blogPostSubName; ?>" >
        <label>Blog Post Sub Name</label>
    </p>
     <p>
        <input class="w3-input" type="text" name="BlogPostContent" value="<?= $blogpost->blogPostContent; ?>" >
        <label>Blog Post Content</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="DatePosted" value="<?= $blogpost->datePosted; ?>" >
        <label>Date Posted</label>

    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 

$file = 'views/images/' . $blogpost->blogPostName . '.jpeg';

if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Blogpost">
    </p>
</form>