<p>Here is a list of all blogs:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->postID; ?>'>See post information</a> &nbsp; &nbsp;
    <a href='?controller=post&action=delete&id=<?php echo $post->postID; ?>'>Delete post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->postID; ?>'>Update post</a> &nbsp;
  </p>
<?php } ?>