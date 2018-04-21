
<div class="page-header text-center">
    <h2><?php echo $article->title; ?></h2>
<small style="color:graytext"> <i>Posted on <?php echo $article->date; ?></i></small>
</div>
    <div style="background-color:gold" class="">
        
<?php
$file = 'views/images/' . $article->id. '.jpg';
if (file_exists($file)) {
    $img = "<img src='$file' width='100% heght= 30%' />";
    echo $img;
} 
?>
    </div>


<p class="text-justify" style="margin-top: 30px; margin-bottom: 40px"><?php echo $article->content; ?></p>



<!-- map will be inserted here if exists -->
<div id="map"></div> 



<p class="page-header"></p>

<?php foreach ($comments as $commentObj) { ?>
<div class="media">
    <div class="media-body">
        <h5 class="media-heading"><?php echo $commentObj->subscriber; ?><br> <small><i>Posted on <?php echo $commentObj->date; ?></i></small></h5>
    <p ><?php echo $commentObj->comment; ?></p>
    </div>
    </div>   

<?php } ?>
 
<form action="" method="POST"  enctype="multipart/form-data">
   
    <div class="form-group row">
       <div class="col-xs-12">
       <label >Leave your comment:</label>
    <textarea class="form-control well well-md"  name="comment" required autofocus></textarea>
       </div>
   </div>  
    
    <div class="form-group row">
        <div class="col-sm-4 col-xs-6">
        <label>Name</label>
        <input class="form-control" type="text" name="name" required > 
        </div>
    </div>
        <div class="form-group row">
            <div class="col-xs-6 col-sm-4">
            <label>Email</label>
            <input class="form-control" type="email" name="email" required>
            </div>            
        </div>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <p>
      <button class="btn btn-info btn-lg"  type="submit">Submit</button>
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
