
<p>Fill in the following form to update an existing article:</p>

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

$file = 'views/images/' . $article->id . '.jpg';

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
  <input type="file" name="myUploader" class="btn btn-primary btn-md" />
  
  <br/>
    <p>
      <input class="w3-button w3-block w3-teal" type="submit" name='submit' value="Update Article">
    </p>
    

<br/>
<p>
    --- Comments  ---

</p>
<table style="width:70%">
    <tr>
        <th>Title</th>
        <th>Added on</th> 
        <th></th>
    </tr>
<?php foreach ($comment as $comm) { ?>
        <tr>
            <td><?php echo $comm->comment; ?> &nbsp; &nbsp; </td>
            <td><?php echo $comm->date; ?> &nbsp; &nbsp;</td>
            <td> <a href='?controller=article&action=deleteComment&comment_id=<?php echo $comm->id;?>&article_id=<?php echo $article->id;?>'>Delete Comment</a> &nbsp;</td>
        </tr>
<?php } ?>
</table>
<br/>
<br/>

