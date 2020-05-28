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
        if ($p->postImage !== NULL){
          $path = dirname(__DIR__) . "\\images\\";
          $file = $path. $p->postImage;
          if(file_exists($file)){
                 $img = "<img src='$file' width='800' />";
                 echo $img;
          }
          else
          {
            echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
          }
        }
    }
    ?> &nbsp; &nbsp;

<html>
  <!--<a href='?controller=product&action=read&id=<?php // echo $product->id;  ?>'>See product information</a> &nbsp; &nbsp;
  <a href='?controller=product&action=delete&id=<?php // echo $product->id;  ?>'>Delete Product</a> &nbsp; &nbsp;
  <a href='?controller=product&action=update&id=<?php // echo $product->id;  ?>'>Update Product</a> &nbsp;-->
</p>

