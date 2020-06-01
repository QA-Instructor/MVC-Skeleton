


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
                    <form action="" method="POST" style="size: 400%;">
                 

                        <div class="form-group">
                            <label for="=email">Update Title</label>
                            <input type="text" name="title" class="form-control form-control-lg" value="<?= $blog->title; ?>">
                        </div>  
                        

                        <div class="form-group">
                            <label for="=username">Update Body</label>

                            <textarea name="body" class="form-control form-control-lg" rows="2" cols="25" type='text' name='body' value="<?= $blog->body; ?>"> "<?php echo $blog->body; ?></textarea>


                    
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

