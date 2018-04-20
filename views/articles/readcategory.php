
<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row">
<?php
foreach ($articles as $article){
   $file = 'views/images/' . $article->id. '.jpg';
?>  
  <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <div class="w3-card-4" style="margin-top: 10px;padding-left: 10px" >
  <img src="<?php echo $file?>" alt="Norway" style="width: 250px;height:150px;margin-left: 13px;margin-right: 5px;margin-top: 5px">
  <div class="w3-container w3-center">
     <h6><?php echo $article->title; ?></h6>
     <div class="g-follow" data-href="" data-rel="relationshipType"></div>
    <p class="blogtext w3-small"><?php echo $article->content; ?></p>
    <button class="btn" style="margin-bottom:5px">Read more</button>
  </div>
</div>
        </div>
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>
