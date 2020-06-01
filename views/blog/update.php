


<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap link -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!--external stylesheet -->
        <link rel="stylesheet" href="css/styles1.css">
        <title>Login</title>
        <style>
          
body{
  height: 100%;
  background-image:url("views/images/img/update.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
                
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset md-4 form-div login"  style="top: -70px; left: -10px">
                    <form action="" method="POST">
                 

                        <div class="form-group">
                            <label for="=email">Update Title</label>
                            <input type="text" name="title" class="form-control form-control-lg" >
                        </div>  
                        

                        <div class="form-group">
                            <label for="=username">Update Body</label>
                             <textarea  name="body" class="form-control form-control-lg" rows="2" cols="25"></textarea>

                    
                        </div>

                        <div class="form-group">
                            <button  type="submit" value="Update Blog"  class="btn btn-primary btn-block btn-lg">Submit</button>
                        </div>
<!--                        <p class="text-center">Not yet a member? <a href="re">Sign Up</a></p>-->



                    </form>


                </div>   


            </div>



        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>


<!--<p>Fill in the following form to update an existing Blog:</p>-->
<!--<form action="" method="POST" class="w3-container" enctype="multipart/form-data">-->
    <!--<h2>Update Blog</h2>-->
    <!--<p>-->
        <!--<input class="w3-input" type="text" name="title" value="<?= $blog->title; ?>">-->
        <!--<label>Title</label>-->
    <!--</p>-->
    <!--<p>-->
        <!--<input class="w3-input" type="text" name="body" value="<?= $blog->body; ?>" >-->
        <!--<label>Body</label>-->
    <!--</p>-->
            
  <!--<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />-->
//<?php 
//$file = 'views/images/' . $blog->title . '.jpeg';
//if(file_exists($file)){
//    $img = "<img src='$file' width='150' />";
//    echo $img;
//}
//else
//{
//echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
//}

?>
  <!--<br/>-->
  <!--<input type="file" name="myUploader" class="w3-btn w3-pink" />-->
  <!--<p>-->
    <!--<input class="w3-btn w3-gray" type="submit" value="Update Blog">-->
    <!--</p>-->
<!--</form>-->