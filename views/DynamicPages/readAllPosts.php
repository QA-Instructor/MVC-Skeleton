<!DOCTYPE html>
<head><h1>Create New ADVNTR post</h1>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<html>
<body>


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
              //need to use local path name to display images full name doesnt work
                 $img = "<img src='views/images/$p->postImage' width='1920' height = '1080' />";
                 echo $img;
          }
          else
          {
            echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
          }
        }
    }
    ?> &nbsp; &nbsp;

  <!--<a href='?controller=product&action=read&id=<?php // echo $product->id;  ?>'>See product information</a> &nbsp; &nbsp;
  <a href='?controller=product&action=delete&id=<?php // echo $product->id;  ?>'>Delete Product</a> &nbsp; &nbsp;
  <a href='?controller=product&action=update&id=<?php // echo $product->id;  ?>'>Update Product</a> &nbsp;-->
</p>
</body>
</html>
