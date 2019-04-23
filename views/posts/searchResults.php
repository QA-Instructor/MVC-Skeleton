<div class="container" id="searchResults-cards-container"> <!--cards container -->
    <div class="row">
        <div class="col">
            <h3>Your search results:</h3>
        </div>
    </div>
    <?php 
    if (!isset($posts)) {
        echo "<p>Item not found.</p>";
    }
    else {
    
    foreach ($posts as $post) { ?>
        <div class="row">
            <div class="col-md-3">
                <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src='..\MVC-Skeleton\views\images\posts\<?php echo $post->title ?>.jpg' alt=""> <!-- CHECK IMAGE LINKS CONNECTION -->
                        <div class="card-body">
                            <p class="card-text"><?php echo $post->title; ?></p>
                        </div>
                    </div></a>
            </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>