

<p>New Article:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add New Item</h2>

    <p>
        <input class="w3-input" type="text" name="title" required autofocus>
        <label>Title</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="content" required>
        <label>Content</label>
    </p>
    <p>
        <input class="w2-input" type="text" name="latitude" >
        <label>Latitude</label>
        <input class="w2-input" type="text" name="longitude" >
        <label>Longitude</label>
    </p>
    
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Product">
  </p>
</form>
       
