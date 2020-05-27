
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="card-body">
<!--            <p>Fill in the following form to create a new blog:</p>-->
            <form action="" method="POST" class="form-signin" enctype="multipart/form-data">
                <fieldset>
                    <legend>Update Post</legend>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostName" placeholder="Update title" required autofocus value="<?= $blogpost->blogPostName; ?>">
                        <!--                        <label>Blog Post Name</label>-->
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostSubName" placeholder="Update description" required autofocus value="<?= $blogpost->blogPostSubName; ?>">     
                        <!--                        <label>Blog Post Sub Name</label>-->
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostContent" placeholder="Update Content" required autofocus value="<?= $blogpost->blogPostContent; ?>">
                        <!--                        <label>Blog Post Content </label>-->
                    </div>
                    <div>
                        <div  class="form-group">
                            <input type="hidden" 
                                   name="MAX_FILE_SIZE" 
                                   value="10000000"
                                   />
                             <?php
        $file = 'views/images/' . $blogpost->blogPostName . '.jpeg';

        if (file_exists($file)) {
            $img = "<img src='$file' width='150' />";
            echo $img;
        } else {
            echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
        }
        ?>
                            <input type="file" name="myUploader" class="" required/>
                        </div>
                        <div  class="form-group">
                            <button href="" class="btn btn-primary" type="submit" value ="Update Blogpost">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>

            <!--the name field/HTML tag communicates to the DB and model-->
        </div>
        </div>
    </div>
</div>
