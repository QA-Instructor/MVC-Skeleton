<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="views/css/styles.css">
        <title>ADVNTR</title>
    </head>
    <body>
        <header class="w3-container w3-gray">
            <!-- <a href='/MVC_Skeleton'>Home</a>-->
            <a href='?controller=pages&action=home'>Home</a>
            <a href='?controller=product&action=readAll'>Products</a>
            <a href='?controller=product&action=create'>Add Product</a>
            <a href='?controller=blogPost&action=create'>Create new post</a>
            <a href='?controller=blogPost&action=readAll'>Posts</a>
            <a href='?controller=blogger&action=create'>Register Blogger</a>
            <a href='?controller=blogPostComment&action=create'>Add Comment</a>
            <a href='?controller=blogger&action=login'>Blogger Login</a>

        </header>
        <div class="w3-container w3-pink">
            <?php require_once('routes.php'); ?>
            </<div>
                <!--                <div class="w3-container w3-gray">
                                    <div class="topnav">
                                        <a href="#">About Me</a>
                                        <a href="#">Posts</a>
                                        <a href="#">More</a>
                                    </div>-->
                <body class="w3-white">
                    <footer >
 <!--     Copyright &COPY; <?//= date('Y'); ?>-->
                    </footer>
            </div>
    </body>
</html>