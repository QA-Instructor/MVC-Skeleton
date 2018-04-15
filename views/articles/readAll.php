<p>Here is a list of all articles</p>

<?php foreach($articles as $article) { ?>
  <p>
    <?php echo $article->title; ?> &nbsp; &nbsp;
    <a href='?controller=article&action=read&article_id=<?php echo $article->id; ?>'>See article information</a> &nbsp; &nbsp;
    <a href='?controller=article&action=delete&article_id=<?php echo $article->id; ?>'>Delete article</a> &nbsp; &nbsp;
    <a href='?controller=article&action=update&article_id=<?php echo $article->id; ?>'>Update article</a> &nbsp;
  </p>
<?php } ?>