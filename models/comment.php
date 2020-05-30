<?php
  class Comment {

    // we define 3 attributes
    public $commentID;
    public $blogpostID;
    public $username;
    public $commentContent;
    public $commentTime;
    

    public function __construct($commentID, $blogpostID, $username, $commentContent, $commentTime) {
      $this->commentID = $commentID;
      $this->blogpostID = $blogpostID;
      $this->username= $username;
      $this->commentContent = $commentContent;
      $this->commentTime = $commentTime;
    }

//    public static function all() {
//      $list = [];
//      $db = Db::getInstance();
//      $req = $db->query('SELECT * FROM commentpost');
//      // we create a list of Product objects from the database results
//      foreach($req->fetchAll() as $comment) {
//        $list[] = new Comment($comment['CommentID'], $comment['BlogPostID'], $comment['Username'], $comment['CommentContent'], $comment['CommentTime']);
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
        $list[] = new Comment($comment['CommentID'], $comment['BlogPostID'], $comment['Username'], $comment['CommentContent'], $comment['CommentTime']);
    }
    return $list;
    }
           
    public static function add($blogpostID) {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into commentpost(BlogPostID, Username, CommentContent, CommentTime) values (:BlogPostID, :Username,:CommentContent, :CommentTime)");
    $req->bindParam(':BlogPostID', $blogpostID);
    $req->bindParam(':Username', $username);
    $req->bindParam(':CommentContent', $commentContent);
    $req->bindParam(':CommentTime', $commentTime);

// set parameters and execute
    if(isset($_POST['Username'])&& $_POST['Username']!=""){
        $filteredUserame = filter_input(INPUT_POST,'Username', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['CommentContent'])&& $_POST['CommentContent']!=""){
        $filteredCommentContent = filter_input(INPUT_POST,'CommentContent', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//$blogpostID = $_GET['id'];
$username = $filteredUserame;
$commentContent = $filteredCommentContent;
$commentTime=date("Y-m-d H:i:s");
$req->execute();

    }

public static function remove($blogpostID,$commentID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $blogpostID = intval($blogpostID);
      $commentID = intval($commentID);
      $req = $db->prepare('DELETE FROM commentpost WHERE BlogPostID=:BlogPostID AND CommentID = :CommentID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogPostID' => $blogpostID, 'CommentID' => $commentID));
  }
  
}
?>
