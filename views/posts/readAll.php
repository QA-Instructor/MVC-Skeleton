<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  
    <?php echo "<h4>" . $post->title . "</h4><p>" . $post->description . "Published on: $post->date<br>"?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read the whole story</a></p> &nbsp; &nbsp;<!--
-->    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete</a> &nbsp; &nbsp;<!--
-->    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'> Edit this post</a> &nbsp;

<?php } ?>