<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap link -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!--external stylesheet -->
        <link rel="stylesheet" href="css/styles1.css">
        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset md-4 form-div login">
                    <form action="" method="POST">
                        <h3 class="text-center">Register</h3>
                       
                       
                        <div class="form-group">
                            <label for="=email">Email</label>
                            <input type="text" name="email" value required="" class="form-control form-control-lg ">
                        </div>
                        <div class="form-group">
                            <label for="=password">Password</label>
                            <input type="password" name="password" required="" class="form-control form-control-lg">
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>
                        <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
   



                    </form>


                </div>   


            </div>



        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>

