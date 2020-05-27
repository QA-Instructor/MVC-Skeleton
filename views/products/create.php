
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>ADD NEW BLOG</h2>
</div>
    <p>
         <label>Blog Title</label>
        <input class="w3-input" type="text" name="title" required autofocus>  
  </p>
     <p>
         <label>Description</label>
        <input class="w3-input" type="text" name="description" required autofocus>  
  </p>
        <p>
               <label>Main Body</label>
        <textarea rows="2" cols="25" type='text' name='body'></textarea>
 </p>
 <p>
                   <label>Select Country</label>
        <input class="w3-input" type="text" name="country" required autofocus>  
  </p> 
   
    
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  <p>
    <input class="w3-btn w3-pink" type="submit" >
  </p>
</form>