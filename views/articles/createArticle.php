


<form action="#" method="POST" class="w3-container" enctype="multipart/form-data">

    <div class='form-group'>
        <label>Title</label>
        <input class="form-control" type="text" name="title" required >
    </div>
    
    <!-- image upload-->
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />
  <p style="margin-top: 20px"><input type="file" name="myUploader" /></p>
  <i style="color:graytext">to upload image</i>
    
  <div style="margin-top:20px" class='form-group'>
        <label>Content</label>
        <textarea class="form-control" rows='10' name="content" required></textarea>      
    </div >
   
  <!-- map-->
  
  <div > <p style="font-weight:bold">Map coordinates</p></div>
    <div class="">
        <label>Latitude</label>
        <input class="w2-input" type="text" name="latitude" >
        <label>Longitude</label>
        <input class="w2-input" type="text" name="longitude" >
    </div> 
  
  <p style="margin-top: 20px">
    <input class="btn btn-primary btn-sm" type="submit" name='submit' value="Create Article">
  </p>
</form>
       
