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

    </head>

    <body>

        <div class="container">
            <div class="row-fluid ">

                <?php foreach ($blog as $blog) : ?>
                    <div class="col-sm-4 ">
                        <div class="card-columns-fluid">
                            <div class="card mx-auto" style = "width: 900px; height: 800px; padding-bottom: 70px; border: none;" >
                                <img class="card-img-top"  src="views/images/img/<?php echo $blog->blogID; ?>.jpg"  style = "width: 800px; height: 600px;" alt="Card image cap">


                                <div class="card-body">
                                    <h5 class="card-title"><b><?php echo $blog->title . "<br>"; ?></b></h5>


                                    <a href="?controller=blog&action=read&id=<?php echo $blog->blogID; ?>" class="btn btn-secondary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div> <!--container div  -->







    </body>

</html>