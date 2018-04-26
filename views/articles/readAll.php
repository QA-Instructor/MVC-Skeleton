<?php if (isset($_SESSION['blogger_id'])){?>
    <p>Hello &nbsp;<?php echo $_SESSION['blogger_f_name'];?>  &nbsp; <?php echo $_SESSION['blogger_l_name'];?></p>
        <div class="row">
    <div class="pull-right">
            <a href='?controller=blogger&action=logout' class="btn btn-info" role="button">Logout</a>
    </div>
</div>

<a href='?controller=article&action=createArticle'>Create New Article</a>

<p>Here is a list of all articles</p>
<table style="width:70%">
    <tr>
        <th>Title</th>
        <th>Date created</th> 
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($articles as $article) { ?>
        <tr>
            <td><?php echo $article->title; ?> &nbsp; &nbsp; </td>
            <td><?php echo $article->date; ?> &nbsp; &nbsp;</td>
            <td> <a href='?controller=article&action=update&article_id=<?php echo $article->id; ?>'>Edit article</a> &nbsp;</td>
            <td><a href='?controller=article&action=delete&article_id=<?php echo $article->id;?>' onclick="return deleletconfig()">Delete article</a> &nbsp; &nbsp;</td>
        
            <script>
                function deleletconfig(){
                var del=confirm("Are you sure you want to delete this articl?");
                if (del==true){
                   alert ("Article deleted")
                }
                return del;
                }
                </script>

        </tr>
    <?php } ?>
</table>
<?php }else{ 
    call('pages', 'error');
}
?>
