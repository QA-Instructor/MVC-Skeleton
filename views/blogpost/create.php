<p>Fill in the following form to create a new blog:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">

    <h2>Add New Blog Post</h2>

<p>
    <input class="w3-input" type="text" name="BlogPostName" required autofocus>
    <label>Blog Post Name</label>
</p>
<p>
    <input class="w3-input" type="text" name="BlogPostSubName" required>     

    <label>Blog Post Sub Name</label>
</p>
<p>
    <input class="w3-input" type="text" name="BlogPostContent" required autofocus>
    <label>Blog Post Content </label>
</p>
<div class="form-group">
    <p> Please select a pet: </p>;
    <select class="custom-select" name="PetTypeID">
      <option value="1">Dog</option>
      <option value="2">Cat</option>
      <option value="3">Hedgehog</option>
    </select>
  </div>
<div class="form-group">
    <p> Please select a blog post category: </p>;
    <select class="custom-select" name="CategoryID">
      <option value="1">Aww</option>
      <option value="2">LOL</option>
      <option value="3">Wow</option>
    </select>
  </div><div class="form-group">
    <p> Please select your name: </p>;
    <select class="custom-select" name="BloggerID">
      <option value="1">Aleisha</option>
    </select>
  </div>
    <!--This is hardcoded. A more efficient way of doing the above is creating a foreeach, so that the data is being brought from the DB tables more dynamically-->



<input type="hidden" 
       name="MAX_FILE_SIZE" 
       value="10000000"
       />

<input type="file" name="myUploader" class="w3-btn w3-pink" required />
<p>
    <input class="w3-btn w3-pink" type="submit" value="Add Blog Post">
</p>
</form>

<!--the name field/HTML tag communicates to the DB and model-->

