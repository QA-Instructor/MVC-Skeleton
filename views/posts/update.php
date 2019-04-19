<p>Fill in the following form to update an existing product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Item</h2>
    <p>
        <input class="w3-input" type="text" name="title" value="<?= $post->title; ?>">
<<<<<<< HEAD
        <label>Name</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="content" value="<?= $post->content; ?>" >
        <label>Price</label>
=======
        <label>Title</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="content" value="<?= $post->content; ?>" >
        <label>Content</label>
    </p>    
    <p>
        <input class="w3-input" type="text" name="tag" value="<?= $post->tag; ?>" >
        <label>Tag</label>
>>>>>>> 0731314bd50297f30dcb287febb2721a07283d3e
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 
<<<<<<< HEAD
$file = 'views/images/posts' . $post->postImage;
if(file_exists($file)){
=======
$file = 'views/images/posts/' . $post->postImage;
if(file_exists($file)){ 
>>>>>>> 0731314bd50297f30dcb287febb2721a07283d3e
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/posts/' width='150' />";
}

?>
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Post">
    </p>
</form>