<div>
    <h3>Add new post</h3>

</div>
<center>
<div class="paddedBlock">
    <form>
    <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <p>Fill in the following form to create a new post:</p>
    <div class="form-group">
        <label class="control-label"><p>Title of your post: </p></label>
        <input class="form-control" type="text" name="title" autofocus/>
    </div>
    <div class="form-group">
        <label class="control-label" for="contentid">Content of your post:</label>
        <textarea class="form-control" id="contentid" row="5" type="text" name="content"/></textarea>
    </div>
    <div class="form-group">
        <label class="control-label">Tag:</label>
        <input class="form-control" type="text" name="tag"/>
    </div>
    <div>
      <input type="hidden" 
               name="MAX_FILE_SIZE" 
             value="10000000"
             />

      <input type="file" name="myUploader" class="btn btn-primary" />
      <p>
      <input class="btn btn-primary" type="submit" value="Add Post">
      </p>
    </div>
    </form>
</div>
</center>