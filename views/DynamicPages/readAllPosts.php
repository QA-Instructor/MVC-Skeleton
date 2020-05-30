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
        <style>  .leftcolumn {
                float: left;
                width: 75%;
            }
            .img {
                /*            display: block;  
                            width: 96%;
                            background-color: #aaa;*/
                padding: 20px;
            }

            /* Add a card effect for articles */
            .card {
                float: left;
                background-color: white;
                /*                width:20%;*/
                padding: 20px;
                margin-top: 20px;
            }
        </style>
        <?php
        foreach ($posts as $p) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="leftcolumn">
                        <div class="card">
                            <h3>   <?php echo$p->title . PHP_EOL; ?> </h3>

                            <?php echo$p->content . PHP_EOL; ?> 
                            <?php
                            if ($p->postImage !== NULL) {
                                $path = dirname(__DIR__) . "\\images\\";
                                $file = $path . $p->postImage;
                                if (file_exists($file)) {
                                    //need to use local path name to display images full name doesnt work
                                    $img = "<img src='views/images/$p->postImage' width='800' height = '600' />";
                                    echo $img;
                                } else {
                                    echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
                                }
                            }
                            echo$p->publishedAt . PHP_EOL;
                        }
                        ?> </td>
                        <!--&nbsp;-->
                        <div class="img" style="height:200px;">Image</div>
                    </div>
                </div>
            </div>
        </div>
  <!--<a href='?controller=product&action=read&id=<?php // echo $product->id;      ?>'>See product information</a> &nbsp; &nbsp;
  <a href='?controller=product&action=delete&id=<?php // echo $product->id;      ?>'>Delete Product</a> &nbsp; &nbsp;
  <a href='?controller=product&action=update&id=<?php // echo $product->id;      ?>'>Update Product</a> &nbsp;-->
    </p>
</body>
</html>
