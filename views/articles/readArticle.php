<h2><?php echo $article->title; ?></h2>
<?php
$file = 'views/images/' . $article->id. '.jpg';
if (file_exists($file)) {
    $img = "<img src='$file' width='100%' />";
    echo $img;
} 
?>
<p><?php echo $article->content; ?></p>
<p><?php echo $article->date; ?></p>

<!-- map will be inserted here if exists -->
<div id="map"></div> 


<p>------ Comments ------</p>

<?php foreach ($comments as $commentObj) { ?>
    <p><?php echo $commentObj->subscriber; ?> says:</p>
    <p><?php echo $commentObj->comment; ?></p>
    <p><?php echo $commentObj->date; ?></p>
<?php } ?>
    
<p>Would you like to comment?</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <p>
        <input class="w3-input" type="text" name="comment" autofocus>
    </p>
    <p>
        <input class="w3-input" type="text" name="name" required >
        <label>Name</label>
    </p>
        <p>
            <input class="w3-input" type="email" name="email" required>
        <label>email</label>
    </p>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <p>
    <input class="w3-btn w3-pink" type="submit" value="Submit">
  </p>
</form>    
    
    


<?php 
// setting variables for coordinates to be used/echoed in JS
$lat = $map->latitude; 
$lng = $map->longitude;  
?>    
<script>
    function initMap() {
        var myCenter = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 15};
        if (<?php echo $lat; ?> && <?php echo $lng; ?> ){
            var map = new google.maps.Map(mapCanvas, mapOptions);
            mapCanvas.style.height = '200px'; //element's height
            mapCanvas.style.width = '500px'; //element's width
            var marker = new google.maps.Marker({position: myCenter});
            marker.setMap(map);
        }
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIUIVIME9OM1AlDAcjQFbD_bfq4usMdQM&callback=initMap"></script>
