<p>Fill in the following form to update an existing product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Item</h2>
    <p>
       <label>Title</label>
       <input class="w3-input" type="text" name="title" value="<?= $post->title; ?>">       
    </p>
    <p>
        <label>Excerpt</label>
        <input class="w3-input" type="text" name="excerpt" value="<?= $post->excerpt; ?>" >        
    </p>
    <p>
       <label>Content</label>
       <input class="w3-input" type="text" name="content" value="<?= $post->content; ?>">       
    </p>
    <p>
        <label>Category</label>
        <input class="w3-input" type="text" name="category" value="<?= $post->category; ?>" >        
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
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
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Product">
    </p>
</form>