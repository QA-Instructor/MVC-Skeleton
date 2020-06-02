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
  background-image:url("views/images/img/vietnam4.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
                
        </style>

    </head>
    <body>
        
        <div class="container" >
            <div class="row">
                <div class="col-md-4 offset md-4 form-div login"   style="top: -110px">
                    <form action="" method="POST">
                        <h3 class="text-center">Contact Us</h3>
                       
                       
                        <div class="form-group">
                            <label for="=firstName">First Name</label>
                            <input type="text" name="firstName"   class="form-control form-control-lg " required autofocus="" >
                        </div>
                        <div class="form-group">
                            <label for="=surname">Surname</label>
                            <input type="text" name="surname"  class="form-control form-control-lg" required>
                        </div>
                        
                         <div class="form-group">   
                            <label for="=email">Email</label>
                            <input type="email" name="email"  class="form-control form-control-lg required " required>
                        </div>
                         <div class="form-group">   

                             <label for="=body">Message</label>

                             <textarea id="body" name="body" rows="4" cols="50" class="form-control form-control-lg required " required=""></textarea></div> 
                        
                        <div class="form-group">
                            <button type="submit" name="contactus-btn" class="btn btn-primary btn-block btn-lg">Submit</button>
                        </div>
                     
   



                    </form>


                </div>   


            </div>




        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>








<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

