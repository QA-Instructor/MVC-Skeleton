<div id="home">
    <div class="landing-text">
        <h2><?php echo $post->title; ?></h2>
        <h4><?php echo $post->username; ?></h4>
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm6">
                <p><?php echo $post->content; ?></p>
                <a class="btn btn-default btn-lg"><?php echo $post->tag; ?></a>

            </div>

            <div <div class="col-sm-4"> align="right">

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

                </div>

                </div>
                </div>
                </div>
              