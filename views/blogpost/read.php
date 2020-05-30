
<!--<p>This is the requested product:</p>-->
<div id="realTimeContents">
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">

            <p>Blogpost ID: <?php echo $blogpost->blogpostID; ?></p>
            <p>Pet: <?php echo $blogpost->pettypeID; ?></p>
            <p>Category: <?php echo $blogpost->categoryID; ?></p>
            <p>Blogpost Name: <?php echo $blogpost->blogPostName; ?></p>
            <p>Blogpost SubName: <?php echo $blogpost->blogPostSubName; ?></p>
            <p>Blogpost Content: <?php echo $blogpost->blogPostContent; ?></p>
 
<?php 
$file = $blogpost->blogPostPhoto;//the last step that we did
//C:/xampp/htdocs/MVC-Skeleton/views/images/Test1.jpeg
//$file is getting the photo from DB. 
//$file = 'views/images/' . $blogpost->title . '.jpeg';

if(file_exists($file)){
    $file = explode('/', $file, 5);   
    $img = "<img src='$file[4]' width='150' />";

    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}


//What I did to ensure that the photo I upload displays on the page:
//1. Fixed the error inside the blogpost model
//2. 


?>
</div>
        
 <div>
     <div>
        <div>             
            <?php 
  try{
      if($comments){
 foreach ($comments as $comment1) {         
    
?>  
            <p>Username: <?php echo $comment1->username; ?></p>
            <p>Comments: <?php echo $comment1->commentContent; ?></p>
            <p>Date: <?php echo $comment1->commentTime; ?></p>            
            <a href='?controller=blogpost&action=read&id=<?php echo $_GET['id']; ?>&CommentID=<?php echo $comment1->commentID; ?>'>Delete</a> &nbsp; &nbsp;

        </div>
    </div>
</div>  
 <?php } 
      }else{
          throw new Exception('No comments');
      } 
  }catch (Exception $e){
      ?>
        
      <p>Comments: <?php echo 'Message: ' .$e->getMessage();?></p>
 <?php 
 
  } 
 ?>
<form action="" method="POST" class="" enctype="multipart/form-data">
    
    <p>New Comment</p>
</div>
    <p>
       <span style="color:red">*</span>
        <input class="" type="text" name="Username" placeholder="Name" required>
        
    </p>
        <p>
        <span style="color:red">*</span>
        <input class="" type="text" name="CommentContent" placeholder="Comment" required>
       
    </p>          
  
  <p>
    <input class="" type="submit" value="Comment">
  </p>
</form>
      

	
