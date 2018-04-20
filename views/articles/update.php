
<p>Fill in the following form to update an existing article:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Item</h2>
    <p>
        <input class="w3-input" type="text" name="title" value="<?= $article->title; ?>">
        <label>Title</label>
    </p>
    <!--p>
        <input class="w3-input" type="text" name="content" value="<?= $article->content; ?>" />
        <label>Content</label>
    </p-->
    <p>    
        <textarea class="w3-input" type="text" name="content" rows="10" cols="30"><?= $article->content; ?></textarea>
        <br>
    </p>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <?php
//$file = 'views/images/' . $product->name . '.jpeg';

$file = 'views/images/' . 'test.jpeg';
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

    <input class="w3-btn w3-gray" type="submit" value="Update Article">

    </p>
</form>
<br/>
<p>
    --- Comments Awaiting Approval ---

</p>
<table style="width:70%">
    <tr>
        <th>Title</th>
        <th>Date created</th> 
        <th></th>
        <th></th>
        <th></th>
    </tr>
<?php foreach ($comment as $comm) { ?>
        <tr>
            <td><?php echo $comm->comment; ?> &nbsp; &nbsp; </td>
            <td><?php echo $comm->comment_status; ?> &nbsp; &nbsp;</td>
            <td> <a href="">Approve</a> &nbsp;</td>
            <td><a href="">Reject</a> &nbsp; &nbsp;</td>
        </tr>
<?php } ?>
</table>
<br/>
<br/>

