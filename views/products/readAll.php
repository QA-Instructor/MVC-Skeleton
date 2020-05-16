<p>Here is a list of all products:</p>

<?php foreach($products as $product) { ?>
  <p>
    <?php echo $product->name; ?> &nbsp; &nbsp;
    <a href='?controller=product&action=read&id=<?php echo $product->id; ?>'>See product information</a> &nbsp; &nbsp;
    <a href='?controller=product&action=delete&id=<?php echo $product->id; ?>'>Delete Product</a> &nbsp; &nbsp;
    <a href='?controller=product&action=update&id=<?php echo $product->id; ?>'>Update Product</a> &nbsp;
    <a href='?controller=product&action=share&id=<?php echo $product->id; ?>'>Review Product</a> &nbsp;
  </p>
<?php } ?>