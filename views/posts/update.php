<center>
    <h3>Add new post</h3>
        <div class="paddedBlock">
<!--            <form>-->
            <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
                <p><h5>Update your blog below:<h5></p>
            <div class="form-group">
                <label class="control-label">Title:</label>
                <input class="form-control" type="text" name="title" autofocus value="<?= $post->title; ?>"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="contentid">Content</label>
                <input class="form-control" id="contentid" type="text" name="content" value="<?= $post->content; ?>"/>
            </div>
            <div class="form-group">
                <label class="control-label">Tag:</label>
                <input class="form-control" type="text" name="tag" value="<?= $post->tag; ?>"/>
            </div>
           <br><br><br>
           <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
        <?php 

        $file = 'views/images/posts/' . $post->postImage;
        if(file_exists($file)){ 
            $img = "<img src='$file' width='300' />";
            echo $img;
        }
        else
        {
        echo "<img src='views/images/posts/' width='300' />";
        }

        ?>
          <br/><br><br>
          <input type="file" name="myUploader" class="btn btn-primary" />
          <p><br><br>
            <input class="btn btn-primary" type="submit" value="Save all changes">
            </p>
        </form>
    </div>
</center>









