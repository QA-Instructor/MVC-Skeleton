<?php

class Article {

    public $id;
    public $title;
    public $content;
    public $date;
    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';
    

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

    public static function addArticle() {
        session_start();
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO article(title, content, date, blogger_id) VALUES (:title, :content, CURDATE(), :blogger_id) '); 
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':blogger_id', $blogger);
      
// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_SESSION['blogger_id']) && $_SESSION['blogger_id'] != "") {
            $filteredBlogger = $_SESSION['blogger_id'];
        }
        
        $title = $filteredTitle;
        $content = $filteredContent;
        $blogger = $filteredBlogger;
        $req->execute(); 
        $article_id = $db->lastInsertId(); //return article_id 
        
        //add a map to db and article
        if (isset ($_POST['latitude']) && $_POST['latitude'] != "" && isset ($_POST['longitude']) && $_POST['longitude'] != ""){
            $req2 = $db->prepare('UPDATE article SET map_id=:map_id WHERE article_id = :article_id');
            $map_id = Article::addMap();
            $req2->bindParam(':map_id', $map_id);
            $req2->bindParam(':article_id', $article_id);
            $req2->execute();            
        }
        //upload product image
        
        if (isset($_FILES['myUploader']) && $_FILES['myUploader']['error'] == 0){
            Article::uploadFile($article_id);
        }
        
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('Select * from article ORDER by date DESC limit 6'); //SELECT * FROM `article` 
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
    
    public static function addMap() {
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO map(latitude, longitude) SELECT :latitude, :longitude FROM map WHERE NOT EXISTS (SELECT * FROM map WHERE latitude= :latitude AND longitude= :longitude ) LIMIT 1");
        $req->bindParam(':latitude', $lat);
        $req->bindParam(':longitude', $long);
        $lat = filter_input(INPUT_POST, 'latitude', FILTER_VALIDATE_FLOAT);
        $long = filter_input(INPUT_POST, 'longitude', FILTER_VALIDATE_FLOAT);
        
        $req->execute();
        return $db->lastInsertId();
        
    }
   

    public static function find($id) {
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

    public static function update($id) {
        $db = Db::getInstance();
        $req = $db->prepare("Update article set title=:title, content=:content where article_id=:article_id");
        $req->bindParam(':article_id', $id);
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);

      //$req->bindParam(':date', $date);

// set name and price parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        /* if(isset($_POST['date'])&& $_POST['date']!=""){
          $filteredDate = filter_input(INPUT_POST,'date', FILTER_SANITIZE_SPECIAL_CHARS);
          } */
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
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $content = $filteredContent;
        $date = $filteredDate;
        $req->execute();

//upload product image
        Article::uploadFile($title);
    }

    public static function searchAll($keyword) {
        $list = [];
        $db = Db::getInstance();
        $result = $db->query("SELECT * FROM article AS a JOIN blogger as b ON a.blogger_id = b.blogger_id WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%' ORDER BY date DESC");
        foreach ($result->fetchAll() as $article) {
            $list[] = new Article($article['article_id'], $article['title'], $article['content'], $article['date']);  
        }
        return $list;
    }



//die() function calls replaced with trigger_error() calls
//replace with structured exception handling

    public static function uploadFile($id) {

        if (empty($_FILES['myUploader'])) {
            //die("File Missing!");
            trigger_error("File Missing!");
        }

        if ($_FILES['myUploader']['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[self::InputKey]['error']);
        }


        if (!in_array($_FILES['myUploader']['type'], self::AllowedTypes)) {
            trigger_error("File Type Not Allowed: " . $_FILES['myUploader']['type']);
        }

        $tempFile = $_FILES['myUploader']['tmp_name'];
        $path = "views/images/";
        $destinationFile = $path . $id . '.jpg';

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("File didn't load to destination");
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
        $req = $db->prepare('delete FROM article WHERE article_id = :article_id');
        // the query was prepared, now replace :id with the actual $id value
        $req->execute(array('article_id' => $id));
    }

   
//     public static function update($id) {
//         $db = Db::getInstance();
//         $req = $db->prepare("Update article set title=:title, content=:content where article_id=:article_id");
//         $req->bindParam(':article_id', $id);
//         $req->bindParam(':title', $title);
//         $req->bindParam(':content', $content);
//         //$req->bindParam(':date', $date);
//     }
}

