<p>Here is a list of all products:</p>

<?php foreach($products as $product) { ?>
  <p>
    <?php echo $product->comment; ?> &nbsp; &nbsp;
    <a href='?controller=product&action=read&id=<?php echo $product->commentID; ?>'>See product information</a> &nbsp; &nbsp;
    <a href='?controller=product&action=delete&id=<?php echo $product->commentID; ?>'>Delete Product</a> &nbsp; &nbsp;
    <a href='?controller=product&action=update&id=<?php echo $product->commentID; ?>'>Update Product</a> &nbsp;
    <a href='?controller=product&action=review&id=<?php echo $product->commentID; ?>'>Review Product</a> &nbsp;
  </p>
<?php } ?>