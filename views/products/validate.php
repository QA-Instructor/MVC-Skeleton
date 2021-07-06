<?php

//<?php require '../controllers/authController.php'; ?>
<!DOCTYPE html>
<?php // require '../controllers/authController.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!--external stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset md-4 form-div login">
                    <form action="" method="POST">
                        <h1 class="text-center">Login</h1>

                        <?php // if (count($errors) > 0): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php // foreach ($errors as $error): ?>
                                    <p><?php // echo $error; ?></p>
                                <?php // endforeach; ?>
                            </div>
                        <?php // endif; ?>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php ?>" class="form-control form-control-lg">
                        </div>

                        <div class="form-group">
                            <label >Password</label>
                            <input type="password" name="password" class="form-control form-control-lg">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                        </div>
                        <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a></p>



                    </form>


                </div>   


            </div>



        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>


