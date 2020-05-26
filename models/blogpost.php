<?php


//This is one of the models.
//Class BlogPost where the functionalities are defined & where the DB connection is made & prepared statements.

  class BlogPost {

    // we define attributes
    public $blogpostID;
    public $bloggerID;
    public $pettypeID;
    public $categoryID;
    public $blogPostName;
    public $blogPostSubName;
    public $blogPostContent;
    public $blogPostPhoto;
    public $datePosted;
  
    public function __construct($bloggerID, $pettypeID, $categoryID, $blogpostID,$blogPostName, $blogPostSubName, $blogPostContent, $blogPostPhoto, $datePosted) {
      $this->bloggerID=$bloggerID;
      $this->pettypeID=$pettypeID;
      $this->categoryID=$categoryID;
      $this->blogpostID = $blogpostID;
      $this->blogPostName = $blogPostName;
      $this->blogPostSubName = $blogPostSubName;
      $this->blogPostContent = $blogPostContent;
      $this->blogPostPhoto = $blogPostPhoto;
      $this->datePosted = $datePosted;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();

      $req = $db->query('SELECT * FROM blogpost');
      // we create a list of blogposts objects from the database results
      foreach($req->fetchAll() as $blogpost) {
        $list[] = new BlogPost($blogpost['BloggerID'], $blogpost['PetTypeID'], $blogpost['CategoryID'], $blogpost['BlogPostID'], $blogpost['BlogPostName'], $blogpost['BlogPostSubName'], $blogpost['BlogPostContent'], $blogpost['BlogPostPhoto'], $blogpost['DatePosted']);
        //$petTypeID['PetTypeID'],$categoryID['CategoryID '],
      }
      return $list;
    }


    public static function find($blogpostID) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $blogpostID = intval($blogpostID);
      $req = $db->prepare('SELECT * FROM blogpost WHERE BlogPostID = :BlogPostID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogPostID' => $blogpostID));
      $blogpost = $req->fetch();
if($blogpost){
      return new BlogPost($blogpost['BloggerID'], $blogpost['PetTypeID'], $blogpost['CategoryID'], $blogpost['BlogPostID'], $blogpost['BlogPostName'], $blogpost['BlogPostSubName'], $blogpost['BlogPostContent'], $blogpost['BlogPostPhoto'],$blogpost['DatePosted']);
    }
    else
    {
        //replace with a more meaningful exception

        throw new Exception('Blogposts could not be found.');
    }
    }
    
    public static function category($categoryID) {
        
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $categoryID = intval($categoryID);
      $req = $db->prepare('SELECT * FROM blogpost WHERE CategoryID = :$CategoryID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('$CategoryID' => $categoryID));
      $blogpost = $req->fetch();
if($blogpost){
      return new BlogPost($blogpost['BloggerID'], $blogpost['PetTypeID'], $blogpost['CategoryID'], $blogpost['BlogPostID'], $blogpost['BlogPostName'], $blogpost['BlogPostSubName'], $blogpost['BlogPostContent'], $blogpost['BlogPostPhoto'],$blogpost['DatePosted']);
    }
    else
    {
        //replace with a more meaningful exception

        throw new Exception('Blogposts could not be found.');
    }
    }


//public static function update($blogpostID) {

public static function update($blogpostID) {
    
    if (($_FILES[self::InputKey]['size'] == 0)){
        $db = Db::getInstance();
    $req = $db->prepare("Update blogpost set BlogPostName=:BlogPostName, BlogPostSubName=:BlogPostSubName, BlogPostContent=:BlogPostContent where BlogPostID=:BlogPostID");
    $req->bindParam(':BlogPostID', $blogpostID);
    $req->bindParam(':BlogPostName', $blogPostName);
    $req->bindParam(':BlogPostSubName', $blogPostSubName);
    $req->bindParam(':BlogPostContent', $blogPostContent);
  
// set title and text parameters and execute
     if(isset($_POST['BlogPostName'])&& $_POST['BlogPostName']!=""){
        $filteredBlogPostName = filter_input(INPUT_POST,'BlogPostName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['BlogPostSubName'])&& $_POST['BlogPostSubName']!=""){
        $filteredBlogPostSubName = filter_input(INPUT_POST,'BlogPostSubName', FILTER_SANITIZE_SPECIAL_CHARS);
    }    
    if(isset($_POST['BlogPostContent'])&& $_POST['BlogPostContent']!=""){
        $filteredBlogPostContent = filter_input(INPUT_POST,'BlogPostContent', FILTER_SANITIZE_SPECIAL_CHARS);
    }   
    
$blogPostName = $filteredBlogPostName;
$blogPostSubName = $filteredBlogPostSubName;
$blogPostContent = $filteredBlogPostContent;
$req->execute();
    }else{    
    $db = Db::getInstance();
    $req = $db->prepare("Update blogpost set BlogPostName=:BlogPostName, BlogPostSubName=:BlogPostSubName, BlogPostContent=:BlogPostContent, BlogPostPhoto=:BlogPostPhoto where BlogPostID=:BlogPostID");
    $req->bindParam(':BlogPostID', $blogpostID);
    $req->bindParam(':BlogPostName', $blogPostName);
    $req->bindParam(':BlogPostSubName', $blogPostSubName);
    $req->bindParam(':BlogPostContent', $blogPostContent);
    $req->bindParam(':BlogPostPhoto', $blogPostPhoto);
  
// set title and text parameters and execute
    if(isset($_POST['BlogPostName'])&& $_POST['BlogPostName']!=""){
        $filteredBlogPostName = filter_input(INPUT_POST,'BlogPostName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['BlogPostSubName'])&& $_POST['BlogPostSubName']!=""){
        $filteredBlogPostSubName = filter_input(INPUT_POST,'BlogPostSubName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['BlogPostContent'])&& $_POST['BlogPostContent']!=""){
        $filteredBlogPostContent = filter_input(INPUT_POST,'BlogPostContent', FILTER_SANITIZE_SPECIAL_CHARS);
    } 
  
$blogPostName = $filteredBlogPostName;
$blogPostSubName = $filteredBlogPostSubName;
$blogPostContent = $filteredBlogPostContent;
//upload blog posts image if it exists
        if (!empty($_FILES[self::InputKey]) && ($_FILES[self::InputKey]['size'] != 0)){
		$blogPostPhoto=BlogPost::uploadFile($blogPostName);
	}
        $req->execute();
    }
}
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blogpost(BloggerID, PetTypeID, CategoryID, BlogPostName, BlogPostSubName, BlogPostContent, BlogPostPhoto) values (:BloggerID, :PetTypeID, :CategoryID, :BlogPostName, :BlogPostSubName, :BlogPostContent, :BlogPostPhoto)");
    $req->bindParam(':BlogPostName', $blogPostName);
    $req->bindParam(':BlogPostSubName', $blogPostSubName);
    $req->bindParam(':BlogPostContent', $blogPostContent);
    $req->bindParam(':BlogPostPhoto', $blogPostPhoto);
    $req->bindParam(':BloggerID', $bloggerID);
    $req->bindParam(':PetTypeID', $pettypeID);
    $req->bindParam(':CategoryID', $categoryID);
        

// set parameters and execute2
    if(isset($_POST['BlogPostName'])&& $_POST['BlogPostName']!=""){
        $filteredBlogPostName = filter_input(INPUT_POST,'BlogPostName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['BlogPostSubName'])&& $_POST['BlogPostSubName']!=""){
        $filteredBlogPostSubName = filter_input(INPUT_POST,'BlogPostSubName', FILTER_SANITIZE_SPECIAL_CHARS);
    }     
      if(isset($_POST['BlogPostContent'])&& $_POST['BlogPostContent']!=""){
        $filteredBlogPostContent = filter_input(INPUT_POST,'BlogPostContent', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['BloggerID'])&& $_POST['BloggerID']!=""){
        $filteredBloggerID = filter_input(INPUT_POST,'BloggerID', FILTER_SANITIZE_SPECIAL_CHARS);
        
    }if(isset($_POST['PetTypeID'])&& $_POST['PetTypeID']!=""){
        $filteredPetTypeID = filter_input(INPUT_POST,'PetTypeID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['CategoryID'])&& $_POST['CategoryID']!=""){
        $filteredBlogCategoryID = filter_input(INPUT_POST,'CategoryID', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    
$blogPostName = $filteredBlogPostName;
$blogPostSubName = $filteredBlogPostSubName;
$blogPostContent = $filteredBlogPostContent;
$bloggerID = $filteredBloggerID;
$pettypeID =  $filteredPetTypeID;
$categoryID = $filteredBlogCategoryID;
$blogPostPhoto=BlogPost::uploadFile($blogPostName);
$req->execute();

//upload blog posts image
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling

public static function uploadFile(string $blogPostName) {

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name']; //saves them to a temporary directory. You have to ensure the images are saved to a premanent directory.
        $path = "C:/xampp/htdocs/MVC-Skeleton/views/images/"; //We store the photo in this folder
	$destinationFile = $path . $blogPostName. '.jpeg';  //in the database, we store the reference to that path.
        

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}

        return $destinationFile;
}
public static function remove($blogpostID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $blogpostID = intval($blogpostID);
      $req = $db->prepare('delete FROM blogpost WHERE BlogPostID = :BlogPostID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogPostID' => $blogpostID));

  }
  
}
?>