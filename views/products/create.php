
<head>    <meta charset="UTF-8">
        <!-- Bootstrap link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!--external stylesheet -->
        <link rel="stylesheet" href="css/style.css">
</head>



<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <div class="col-md-4 offset md-4 form-div" >
    
    <h2 class="text-center">Add new blog</h2>

    <p class="form-group">
         <label>Blog Title</label>
        <input class="w3-input" type="text" name="title" required autofocus>  
  </p>
     <p class="form-group">
         <label>Description</label>
        <input class="w3-input" type="text" name="description" required autofocus>  
  </p>
        <p class="form-group">
               <label>Main Body</label>
        <textarea rows="2" cols="25" type='text' name='body' required autofocus></textarea>
 </p>
 
 <p class="form-group">  <label for="cars">Choose a country</label>

<select name='country' id="cars" required autofocus>
    <option disabled selected value> -- select an option -- </option>
  <option value="Vietnam">Vietnam</option>
    <option value="Poland">Poland</option>
  <option value="Morocco">Morocco</option>
  <option value="Turkey">Turkey</option>
  <option value="US">US</option>
</select>
 </p>
 
 <?php
 // this isnt going to stay im just playing around with how we could 
 // assign the post a specific country etc

 ?>
 
 
 
 <p class="form-group">  <label for="cars" required autofocus>Choose a category</label>
 <select name="categories" id="cars">
     <option disabled selected value> -- select an option -- </option>
  <option value="Restaurants">Restaurants</option>
    <option value="Trips">Trips</option>
  <option value="Kids">Kids</option>
  <option value="Nightlife">Nightlife</option>
  <option value="Tips">Tips</option>
</select>
 </p>
 
 
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  <p>
    <input class="form-group"  type="submit" name='submit'>
  </p>
</form>

</div>