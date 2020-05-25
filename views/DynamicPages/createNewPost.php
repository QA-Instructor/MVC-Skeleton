<header><h1>Create New post</h1>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head></header>
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
<!--            <input class="input" type="text" name="content" rows="3" required>-->
    <label for="categoryID">Choose a category:</label>
    <select name="categoryID" id="category">
        <option value="1">Canyoning</option>
        <option value="2">Climbing</option>
        <option value="3">Hiking</option>
        <option value="4">Wild Swimming</option>
        <option value="5">Fell Running</option>
        <option value="6">Kayaking</option>
        <option value="7">Cycling</option>
        <option value="8">Fishing</option>
        <option value="9">Coasteering</option>
        <option value="10">Camping</option>
        <option value="11">Family</option>
    </select>

</div>   
<div class="container-fluid">
    <input type="hidden" 
           name="MAX_FILE_SIZE" 
           value="10000000"
           />
</div>
<div class="container-fluid">
    <input type="file" name="myUploader" class="button" required />
</div>
<div class="container-fluid">
    <p>
        <input class="button" type="submit" value="Add Post">
    </p>
    </<div>
        </form>