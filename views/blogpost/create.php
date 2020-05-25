<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="card-body">
<!--            <p>Fill in the following form to create a new blog:</p>-->
            <form action="" method="POST" class="form-signin" enctype="multipart/form-data">
                <fieldset>
                    <legend>Create Post</legend>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostName" placeholder="Enter a title" required autofocus>
                        <!--                        <label>Blog Post Name</label>-->
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostSubName" placeholder="Enter a short description" required autofocus>     
                        <!--                        <label>Blog Post Sub Name</label>-->
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="BlogPostContent" placeholder="Write away..." required autofocus>
                        <!--                        <label>Blog Post Content </label>-->
                    </div>
                    <div class="form-group">
                        <p> Select pet </p>
                        <select class="custom-select" name="PetTypeID">
                            <option value="1">Dog</option>
                            <option value="2">Cat</option>
                            <option value="3">Hedgehog</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <p> Select category </p>
                        <select class="custom-select" name="CategoryID">
                            <option value="1">Aww</option>
                            <option value="2">LOL</option>
                            <option value="3">Wow</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <p> Select your name </p>
                        <select class="custom-select" name="BloggerID">
                            <option value="1">Aleisha</option>
                        </select>
                    </div>
                    <!--This is hardcoded. A more efficient way of doing the above is creating a foreeach, so that the data is being brought from the DB tables more dynamically-->

                    <div>
                        <div  class="form-group">
                            <input type="hidden" 
                                   name="MAX_FILE_SIZE" 
                                   value="10000000"
                                   />
                            <input type="file" name="myUploader" class="" required/>
                        </div>
                        <div  class="form-group">
                            <button href="" class="btn btn-primary" type="submit">Publish</button>
                        </div>
                    </div>
                </fieldset>
            </form>

            <!--the name field/HTML tag communicates to the DB and model-->
        </div>
        </div>
    </div>
</div>
