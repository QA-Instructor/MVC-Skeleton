<?php


//This is one of the models.
//Class BlogPost where the functionalities are defined & where the DB connection is made & prepared statements.

  class BlogPost {

    // we define 3 attributes
    public $id;
    public $title;
    public $posttext;
    public $photo;

    public function __construct($id, $title, $posttext, $photo) {
      $this->id    = $id;
      $this->title  = $title;
      $this->posttext = $posttext;
      $this->photo = $photo;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM blogpost');
      // we create a list of blogposts objects from the database results
      foreach($req->fetchAll() as $blogpost) {
        $list[] = new BlogPost($blogpost['id'], $blogpost['title'], $blogpost['posttext'], $blogpost['photo']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM blogpost WHERE id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $blogpost = $req->fetch();
if($blogpost){
      return new BlogPost($blogpost['id'], $blogpost['title'], $blogpost['posttext'], $blogpost['photo']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($id) {
    
    if (($_FILES[self::InputKey]['size'] == 0)){
        $db = Db::getInstance();
    $req = $db->prepare("Update blogpost set title=:title, posttext=:posttext where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':title', $title);
    $req->bindParam(':posttext', $posttext);


// set title and text parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['posttext'])&& $_POST['posttext']!=""){
        $filteredPostText = filter_input(INPUT_POST,'posttext', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredTitle;
$posttext = $filteredPostText;
$req->execute();

    }else{
    
    $db = Db::getInstance();
    $req = $db->prepare("Update blogpost set title=:title, posttext=:posttext, photo=:photo where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':title', $title);
    $req->bindParam(':posttext', $posttext);
    $req->bindParam(':photo', $photo);

// set title and text parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['posttext'])&& $_POST['posttext']!=""){
        $filteredPostText = filter_input(INPUT_POST,'posttext', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredTitle;
$posttext = $filteredPostText;
//upload blog posts image if it exists
        if (!empty($_FILES[self::InputKey]) && ($_FILES[self::InputKey]['size'] != 0)){
		$photo=BlogPost::uploadFile($title);
	}
        $req->execute();

    }
}
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blogpost(title, posttext, photo) values (:title, :posttext, :photo)");
    $req->bindParam(':title', $title);
    $req->bindParam(':posttext', $posttext);
    $req->bindParam(':photo', $photo);


// set parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['posttext'])&& $_POST['posttext']!=""){
        $filteredPostText = filter_input(INPUT_POST,'posttext', FILTER_SANITIZE_SPECIAL_CHARS);
    }     
  
$title = $filteredTitle;
$posttext = $filteredPostText;
$photo=BlogPost::uploadFile($title);
$req->execute();

//upload blog posts image


 

    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $title) {

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
	$destinationFile = $path . $title. '.jpeg';  //in the database, we store the reference to that path.
        

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
        return $destinationFile;
}
public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM blogpost WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
}
?>