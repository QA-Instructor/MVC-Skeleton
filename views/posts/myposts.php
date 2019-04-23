<div class="container" id="cards-container"> 
    <div class="row">
        <div class="col">
            <h3>My posts:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href='?controller=post&action=read&id=2'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" <?php echo $post->postImage; ?> >
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                    <a href='?controller=post&action=update&id=2'>Update</a>
                    <a href='?controller=post&action=delete&id=2'>Delete</a>
                </div>
            </div></a>
        </div>
        <div class="col-md-3">
             <a href='?controller=post&action=read&id=3'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src=<?php echo $post->postImage; ?> >
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                    <a href='?controller=post&action=update&id=2'>Update</a>
                    <a href='?controller=post&action=delete&id=2'>Delete</a>
                </div>
            </div>
             </a>
        </div>
        <div class="col-md-3">
             <a href='?controller=post&action=read&id=1'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src=<?php echo $post->postImage; ?> >
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                    <a href='?controller=post&action=update&id=1'>Update</a>
                    <a href='?controller=post&action=delete&id=1'>Delete</a>
                </div>
            </div>
             </a>
        </div>
       
    </div>
</div>

       
   
    </body>
</html>