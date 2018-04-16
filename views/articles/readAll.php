
<p>Here is a list of all articles</p>


<table style="width:70%">
  <tr>
    <th>Title</th>
    <th>Date created</th> 
    <th></th>
    <th></th>
    <th></th>
  </tr>
<?php foreach($articles as $article) { ?>
  <tr>
    <td><?php echo $article->title; ?> &nbsp; &nbsp; </td>
    <td><?php echo $article->date; ?> &nbsp; &nbsp;</td>
    <td> <a href='?controller=article&action=update&article_id=<?php echo $article->article_id; ?>'>Edit article</a> &nbsp;</td>
    <td><a href='?controller=article&action=delete&article_id=<?php echo $article->article_id; ?>'>Delete article</a> &nbsp; &nbsp;</td>
    <td><a href='?controller=article&action=read&article_id=<?php echo $article->article_id; ?>'>See all comments on this article</a> &nbsp; &nbsp;</td>
  </tr>
  <?php } ?>
</table>

