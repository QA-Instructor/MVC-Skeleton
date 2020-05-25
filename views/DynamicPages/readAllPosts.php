<?php
echo "Hello you made it to our page, we fixed it!";
foreach ($posts as $p) {
    ?>
    <p>
        <?php
        echo $p->postID . PHP_EOL;
        echo $p->blogID . PHP_EOL;
        echo$p->categoryID . PHP_EOL;
        echo$p->title . PHP_EOL;
        echo$p->publishedAt . PHP_EOL;
        echo$p->content . PHP_EOL;
        echo$p->postImage . PHP_EOL;
    }
    ?> &nbsp; &nbsp;

<html>
  <!--<a href='?controller=product&action=read&id=<?php // echo $product->id;  ?>'>See product information</a> &nbsp; &nbsp;
  <a href='?controller=product&action=delete&id=<?php // echo $product->id;  ?>'>Delete Product</a> &nbsp; &nbsp;
  <a href='?controller=product&action=update&id=<?php // echo $product->id;  ?>'>Update Product</a> &nbsp;-->
</p>

