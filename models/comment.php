<?php
  class Comment {

    // we define 3 attributes
    public $commentID;
    public $blogpostID;
    public $username;
    public $comment;
    public $commentTime;
    

    public function __construct($commentID, $blogpostID, $username, $comment, $commentTime) {
      $this->commentID = $commentID;
      $this->blogpostID = $blogpostID;
      $this->comment  = $username;
      $this->username = $comment;
      $this->commentTime = $commentTime;
    }

//    public static function all() {
//      $list = [];
//      $db = Db::getInstance();
//      $req = $db->query('SELECT * FROM product');
//      // we create a list of Product objects from the database results
//      foreach($req->fetchAll() as $product) {
//        $list[] = new Product($product['id'], $product['name'], $product['price']);
//      }
//      return $list;
//    }

    public static function find($blogpostID) {
      $list = [];  
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $blogpostID = intval($blogpostID);
      $req = $db->prepare('SELECT * FROM commentpost WHERE BlogPostID= :BlogPostID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogPostID' => $blogpostID));
      $comments = $req->fetchAll();  

    foreach($comments as $comment) {
        $list[] = new Comment($comment['CommentID'], $comment['BlogPostID'], $comment['Username'], $comment['Comment'], $comment['CommentTime']);
    }
    return $list;
    }
           
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into product(name, price) values (:name, :price)");
    $req->bindParam(':name', $name);
    $req->bindParam(':price', $price);

// set parameters and execute
    if(isset($_POST['name'])&& $_POST['name']!=""){
        $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['price'])&& $_POST['price']!=""){
        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$name = $filteredName;
$price = $filteredPrice;
$req->execute();

//upload product image
Product::uploadFile($name);
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
