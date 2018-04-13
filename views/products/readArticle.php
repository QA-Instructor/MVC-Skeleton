<p>This is the article page</p>

<?php
$file = 'views/images/' . $product->id. '.jpg';
if (file_exists($file)) {
    $img = "<img src='$file' width='100%' />";
    echo $img;
} 
?>
<h2><?php echo $product->title; ?></h2>
<p><?php echo $product->content; ?></p>
<p><?php echo $product->date; ?></p>

<!-- map will be inserted here if exists -->
<div id="map"></div> 


<p>------ Comments ------</p>

<?php foreach ($comments as $commentObj) { ?>
    <p><?php echo $commentObj->subscriber; ?> says:</p>
    <p><?php echo $commentObj->comment; ?></p>
    <p><?php echo $commentObj->date; ?></p>
<?php } ?>


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
