
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
                        <input class="form-control form-control-lg" type="text" name="BlogPostName" placeholder="Update title" autofocus value="<?= $blogpost->blogPostName; ?>">
                        <!--                        <label>Blog Post Name</label>-->
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostSubName" placeholder="Update description" autofocus value="<?= $blogpost->blogPostSubName; ?>">     
                        <!--                        <label>Blog Post Sub Name</label>-->
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostContent" placeholder="Update Content" autofocus value="<?= $blogpost->blogPostContent; ?>">
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
<!--<<<<<<< HEAD-->
                            <input type="file" name="myUploader" class=""/>
<!--=======
                            <input type="file" name="myUploader" class="" />
>>>>>>> c3481f5570a3fb7c9f1dd5172c168a1e29740ee4-->
                        </div>
                        <div  class="form-group">
                            <button class="btn btn-primary" type="submit" value ="Update Blogpost">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>

            <!--the name field/HTML tag communicates to the DB and model-->
        </div>
        </div>
    </div>
</div>
