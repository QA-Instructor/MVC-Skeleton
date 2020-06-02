
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
  background-image:url("views/images/img/this.jpeg");
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
                        <h3 class="text-center">POST A BLOG</h3>


                            <div class="form-group">
                            <label for="=email">Title</label>
                            <input type="text" name="title" class="form-control form-control-lg" required>
                        </div>
                         <div class="form-group">
                            <label for="=email">Description</label>
                            <input type="text" name="blogDescription" class="form-control form-control-lg" required>
                        </div>
                         <div class="form-group">
                            <label for="=email">Blog Body</label>
                    
 <textarea class="form-control form-control-lg" rows="2" cols="25" name='body' required autofocus></textarea>
                        </div>

                    
                  


                        
                        <p class="form-group">  <label for="cars">Choose a country</label>

<select name='country' id="cars" required autofocus>
    <option disabled selected value> -- select an option -- </option>
  <option value="Vietnam">Vietnam</option>
    <option value="Poland">Poland</option>
  <option value="Morocco">Italy</option>
  <option value="Turkey">Turkey</option>
  <option value="USA">U.S.A</option>
</select>
 </p>
 

 
 
 
 <p class="form-group">  <label for="cars" >Choose a category</label>
 <select name="categories" id="cars" required autofocus>
     <option disabled selected value> -- select an option -- </option>
  <option value="Restaurants">Restaurants</option>
    <option value="Trips">Trips</option>
  <option value="Kids">Kids</option>
  <option value="Nightlife">Nightlife</option>
  <option value="Tips">Tips</option>
</select>
 </p>
 
 <div class="form-group">
      
 
     <button  action='index.php'type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                        </div>
                        <p class="text-center"> Not sure what to write? Hit the button for inspo <a href="?controller=blog&action=readAll">Read Examples</a></p>
                </div>   
                    

<!--     //<a href="?controller=blog&action=readAllAdminUser" style="font-color: black;">Submit</a>-->


            </div>



        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>

