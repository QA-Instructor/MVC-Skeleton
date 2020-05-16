<?php
  class Post {

    // we define 3 attributes
    public $postID;
    public $memberID;    
    public $title;
    public $category;
    public $datePosted;
    public $dateUpdated;
    public $excerpt;
    public $content;

    public function __construct($postID, $memberID, $title, $category, $datePosted, $dateUpdated, $excerpt, $content) {
      $this->postID    = $postID;
      $this->memberID    = $memberID;
      $this->title  = $title;
      $this->category = $category;
      $this->datePosted = $datePosted;
      $this->dateUpdated = $dateUpdated;
      $this->excerpt = $excerpt;
      $this->content = $content;      
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM post');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['postID'], $post['memberID'],$post['title'], $post['category'], $post['datePosted'], $post['dateUpdated'], $post['excerpt'], $post['content']);
          }
      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM post WHERE postID = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();
if($post){
      return new Post($post['postID'], $post['memberID'],$post['title'], $post['category'], $post['datePosted'], $post['dateUpdated'], $post['excerpt'], $post['content']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update post set title=?, category=?, dateUpdated=CURDATE(), excerpt=?, content=? where postID=?");


// set name and price parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['category'])&& $_POST['category']!=""){
        $filteredCategory = filter_input(INPUT_POST,'category', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['excerpt'])&& $_POST['excerpt']!=""){
        $filteredExcerpt = filter_input(INPUT_POST,'excerpt', FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_STRING);
    }    
$title = $filteredTitle;
$category = $filteredCategory;
$excerpt = $filteredExcerpt;
$content = $filteredContent;
$req->execute([$title, $category, $excerpt, $content, $id]);

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['title'])) {
		Post::uploadFile($title);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into post(memberID, title, category, datePosted, excerpt, content) values (?, ?, ?, CURDATE(), ?, ?)");
    
// set parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['category'])&& $_POST['category']!=""){
        $filteredCategory = filter_input(INPUT_POST,'category', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['excerpt'])&& $_POST['excerpt']!=""){
        $filteredExcerpt = filter_input(INPUT_POST,'excerpt', FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_STRING);
    }    
$memberID = 1;
$title = $filteredTitle;
$category = $filteredCategory;
$excerpt = $filteredExcerpt;
$content = $filteredContent;
$req->execute([$memberID, $title, $category, $excerpt, $content]);

//upload product image
Post::uploadFile($title);
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

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "C:/xampp/htdocs/MVC/MVC-Skeleton/views/images/";
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
      $req = $db->prepare('delete FROM post WHERE postID = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
}
?>