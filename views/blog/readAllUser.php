<!DOCTYPE html>
<html>
    <head>
        <!--We need the meta tag to properly scale the responsive CSS code-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Gits abroad Blogs</title>

        <!--Here I went ahead and imported two fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!--<link href="views/css/style.css" rel="stylesheet" type="text/css"/> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <!--  Custom styles for this template -->
        <link rel="stylesheet" href="css/styles2.css">
        <style>
            body {
                padding-left: 10px;
            }
            h3{
                padding-bottom: 20px;
            }
            
        </style>

    </head>

    <body>
        <h3>Welcome Blogger!! Here is a list of your capabilities </h3>



        <a href="?controller=blog&action=create&id=<?php ?>" class="btn btn-secondary btn-lg mx-auto" role="button">Post a Blog</a>
        <br>
        <br>
        <a href="index.php" class="btn btn-warning btn-lg" role="button">Logout</a>
        
        
        
        
        
        
        
        <!--  this is the page where simply there is a list of names of products and next to it whether they are 
          to be deleted etc-->

        <!--these buttons here are also super important as they determine which controller is called, here 
        they are all products, and the method decides which method is then called in order to fulfill the tasks-->

        <div class="container">
            <div class="row-fluid ">
                <!-- my php code which uses x-path to get results from xml query. -->
                <?php foreach ($blog as $blog) : ?>
                    <div class="col-sm-4 ">
                        <div class="card-columns-fluid">
                            <div class="card mx-auto" style = "width: 900px; height: 800px; padding-bottom: 70px; border: none;" >
                                <img class="card-img-top"  src="views/images/img/<?php echo $blog->blogID; ?>.jpg"  style = "width: 800px; height: 600px;" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php echo $blog->title . "<br>"; ?></b></h5>


                                    <a href="?controller=blog&action=read&id=<?php echo $blog->blogID; ?>" class="btn btn-secondary">Read More</a>

                                    <a href='?controller=blog&action=update&id=<?php echo $blog->blogID; ?>' class="btn btn-secondary">Update Blog</a>
                                    <a href='?controller=blog&action=delete&id=<?php echo $blog->blogID; ?>' class="btn btn-secondary">Delete</a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div> <!--container div  -->