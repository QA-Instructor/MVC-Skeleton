<p>Fill in the following form to add a new blog:</p> //this is the html that makes the form pop up to add item
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add New Blog Post</h2>
</div>
    <p>
        <input class="w3-input" type="text" name="title" required autofocus>  
        <label>Title</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="body" required> 
        <label>Body</label>
    </p>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Blog">
  </p>
</form>