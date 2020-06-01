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
        <style>
          
body{
  height: 100%;
  background-image:url("views/images/img/beach1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
                
        </style>
    </head>
    <body>
        
        <div class="container" >
            <div class="row">
                <div class="col-md-4 offset md-4 form-div login">
                    <form action="" method="POST">
                        <h3 class="text-center">Register</h3>
                       
                       
                        <div class="form-group">
                            <label for="=email">Email</label>
                            <input type="text" name="email"   placeholder="Please Enter Your Email" class="form-control form-control-lg " required >
                        </div>
                        <div class="form-group">
                            <label for="=password">Password</label>
                            <input type="password" name="password" placeholder="Please Enter Your Password" class="form-control form-control-lg" required >
                        </div>
                        
                         <div class="form-group">   
                            <label for="=passwordconf">Confirm Password</label>
                            <input type="password" name="passwordconf" placeholder="Please Confirm Your Password" class="form-control form-control-lg required " required>
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

