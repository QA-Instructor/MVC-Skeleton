
<p>Fill in the following Sing Up form to become a member of the blog:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">

    <h2>Add New Blog Post</h2>
</div>
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
<p>
    <input class="w3-input" type="text" name="DatePosted" required autofocus>
    <label>Date Posted</label>
</p>


<input type="hidden" 
       name="MAX_FILE_SIZE" 
       value="10000000"
       />

<input type="file" name="myUploader" class="w3-btn w3-pink" required />
<p>
    <input class="w3-btn w3-pink" type="submit" value="Add Blog Post">
</p>
</form>