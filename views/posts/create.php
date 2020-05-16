<p>Fill in the following form to create a new product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">

    <h2>Add New Item</h2>
</div>
<p>
    <label>Title</label>
    <input class="w3-input" type="text" name="title" required autofocus>
</p>
<p>
    <label>Category</label>
    <input class="w3-input" type="text" name="category" required>  
</p>
<p>
    <label>Excerpt</label>
    <input class="w3-input" type="text" name="excerpt" required>  
</p>
<p>
    <label>Content</label>
    <input class="w3-input" type="text" name="content" required>  
</p>


<input type="hidden" 
       name="MAX_FILE_SIZE" 
       value="10000000"
       />

<input type="file" name="myUploader" class="w3-btn w3-pink" required />
<p>
    <input class="w3-btn w3-pink" type="submit" value="Add Post">
</p>
</form>