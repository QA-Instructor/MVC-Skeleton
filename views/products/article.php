<p>This is the article page</p>

<?php 
$file = 'views/images/' . $product->title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}
?>
<h2><?php echo $product->title; ?></h2>
<p><?php echo $product->content; ?></p>
<p><?php echo $product->date; ?></p>
<p>------ Comments ------</p>

 <?php    foreach ($comments as $commentObj) {?>
        <p><?php echo $commentObj->comment;?></p>
        <p><?php echo $commentObj->date;?></p>
<?php } ?>

