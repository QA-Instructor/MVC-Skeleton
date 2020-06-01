<p>Here is a list of all products:</p>

<?php foreach($products as $product) { ?> //this page when you do blog post table this needs to be updated 
  <p>
    <?php echo $product->name; ?> &nbsp; &nbsp;
    <a href='?controller=product&action=read&id=<?php echo $product->id; ?>'>See product information</a> &nbsp; &nbsp;
    <a href='?controller=product&action=delete&id=<?php echo $product->id; ?>'>Delete Product</a> &nbsp; &nbsp;
    <a href='?controller=product&action=update&id=<?php echo $product->id; ?>'>Update Product</a> &nbsp;
  </p>
<?php } ?>

<!--  this is the page where simply there is a list of names of products and next to it whether they are 
  to be deleted etc-->

<!--these buttons here are also super important as they determine which controller is called, here 
they are all products, and the method decides which method is then called in order to fulfill the tasks-->



