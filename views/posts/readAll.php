<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>See post information</a> &nbsp; &nbsp;
    
    <?PHP if(isset ($_SESSION['userID'])) {?> 
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update post</a> &nbsp;
    <?PHP }?>
  </p>
<?php } ?>