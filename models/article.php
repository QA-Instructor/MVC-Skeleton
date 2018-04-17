<?php

  class Article {


    // we define 3 attributes
    public $id;
    public $title;
    public $content;
    public $date;


    public function __construct($id, $title, $content, $date) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
    }
    
    
    public static function findArticle($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM article WHERE article_id = :id');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $article = $req->fetch();
        if ($article) {
            return new Article($article['article_id'], $article['title'], $article['content'], $article['date']);
        } else {
            //replace with a more meaningful exception
            throw new Exception('A real exception should go here');
        }
    }


    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('Select * from article ORDER by date ASC limit 6'); //SELECT * FROM `article` 
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $article) {
        $list[] = new Article($article['article_id'], $article['title'], $article['content'], $article['date']);
      }
      return $list;
    }
    
    public static function allcategory() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('select * from article join article_category on article.article_id=article_category.article_id where category_id=1 order by Date desc limit 6'); //SELECT * FROM `article` 
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $article) {
        $list[] = new Article($article['article_id'], $article['title'], $article['content'], $article['date']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM article WHERE article_id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $article = $req->fetch();
if($article){
      return new Article($article['article_id'], $article['title'], $article['content'], $article['date']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update article set title=:title, content=:content where article_id=:article_id");
    $req->bindParam(':article_id', $id);
    $req->bindParam(':title', $title);
    $req->bindParam(':content', $content);
    //$req->bindParam(':date', $date);

// set name and price parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    /*if(isset($_POST['date'])&& $_POST['date']!=""){
        $filteredDate = filter_input(INPUT_POST,'date', FILTER_SANITIZE_SPECIAL_CHARS);
    }*/
$title = $filteredTitle;
$content = $filteredContent;
//$date = $filteredDate;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['title'])) {
            Article::uploadFile($title);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into article(title, content, date) values (:title, :content, :date)");
    $req->bindParam(':title', $title);
    $req->bindParam(':content', $content);

// set parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredTitle;
$content = $filteredContent;
$date = $filteredDate;
$req->execute();

//upload product image
        Article::uploadFile($title);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
/*
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
        $path = "C:/xampp/htdocs/MVC-Skeleton/views/images/";
	//$destinationFile = $path . $name . '.jpeg';
        $destinationFile = $path . 'test.jpeg';
	
        if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}
 * 
 */
public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM article WHERE article_id = :article_id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('article_id' => $id));
  }
  /*  
   * public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update article set title=:title, content=:content where article_id=:article_id");
    $req->bindParam(':article_id', $id);
    $req->bindParam(':title', $title);
    $req->bindParam(':content', $content);
    //$req->bindParam(':date', $date);
   * 
   */
}

?>