<?php


//This is one of the models
//Class BlogPost
//No table in DB has been created yet for blogs

  class BlogPost {

    // we define 3 attributes
    public $id;
    public $title;
    public $text;

    public function __construct($id, $title, $text) {
      $this->id    = $id;
      $this->title  = $title;
      $this->text = $text;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM blog');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $blog) {
        $list[] = new BlogPost($blog['id'], $blog['title'], $blog['text']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM product WHERE id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $product = $req->fetch();
if($product){
      return new BlogPost($blog['id'], $blog['title'], $blog['text']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update product set title=:title, text=:text where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':title', $title);
    $req->bindParam(':text', $text);

// set title and text parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredName = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredPrice = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredName;
$text = $filteredPrice;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['title'])) {
		Product::uploadFile($title);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into product(title, text) values (:title, :text)");
    $req->bindParam(':title', $title);
    $req->bindParam(':text', $text);

// set parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredName = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredPrice = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredName;
$text = $filteredPrice;
$req->execute();

//upload product image
Product::uploadFile($title);
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

	$tempFile = $_FILES[self::InputKey]['tmp_title'];
        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
	$destinationFile = $path . $title . '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}
public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM product WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
}
?>