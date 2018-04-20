<h2>Your search for <i> <?php echo $keyword ?> </i></h2>

<?php
$num_rows = count($list);
if ($num_rows > 0) { 
    foreach ($list as $article) { ?>
<tr>
    <td> <a href='?controller=article&action=read&article_id= <?php echo $article->article_id;?>'>
        <?php echo $article->title . " ";?> </a>published on <?php echo $article->date; ?> </br> </td>    
</tr> 
  <?php }
} else {
    echo "Your search returned no results";
}
?>
