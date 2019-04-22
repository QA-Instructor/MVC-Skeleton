<center>
    <h3>Add new post</h3>
        <div class="paddedBlock">
            <form>
            <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
            <p>Update your blog below:</p>
            <div class="form-group">
                <label class="control-label">Title:</label>
                <input class="form-control" type="text" name="title" autofocus value="<?= $post->title; ?>"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="contentid">Content</label>
                <textarea class="form-control" id="contentid" row="5" type="text" name="content" value="<?= $post->content; ?>"/></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Tag:</label>
                <input class="form-control" type="text" name="tag" value="<?= $post->tag; ?>"/>
            </div>
           <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
        <?php 

        $file = 'views/images/posts/' . $post->postImage;
        if(file_exists($file)){ 
            $img = "<img src='$file' width='150' />";
            echo $img;
        }
        else
        {
        echo "<img src='views/images/posts/' width='150' />";
        }

        ?>
          <br/>
          <input type="file" name="myUploader" class="w3-btn w3-pink" />
          <p>
            <input class="btn btn-primary" type="submit" value="Update Post">
            </p>
        </form>
    </div>
</center>









