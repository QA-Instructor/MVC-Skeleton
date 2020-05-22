
<header><h1>Create New post</h1></header>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">

    <h2>Please fill in boxes below to upload post onto your blog:</h2>
</div>
<div class="container-fluid">
    <p>
        <input class="input" type="text" name="title" required autofocus>
        <label>Title</label>
    </p>
</div>
<div class="container-fluid">
    <p>
        <input class="input" type="text" name="content" rows="3" required>
        <label>Content</label>
    </p>
</div>   
<div class="container-fluid">
    <input type="hidden" 
           name="MAX_FILE_SIZE" 
           value="10000000"
           />

    <input type="file" name="myUploader" class="button" required />
    <p>
        <input class="button" type="submit" value="Add Post">
    </p>
    </<div>
        </form>