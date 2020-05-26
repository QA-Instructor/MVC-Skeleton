<?php

class blogPostComment {

    // we define 3 attributes
    public $commentID;
    public $postID;
    public $title;
    public $publishedAt;
    public $postComment;
    public $visitorID;

    public function __construct($commentID, $postID, $title, $publishedAt, $postComment, $visitorID) {
        $this->commentID = $commentID;
        $this->postID = $postID;
        $this->title = $title;
        $this->publishedAt = $publishedAt;
        $this->postComment = $postComment;
        $this->visitorID = $visitorID;
    }

    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into comment_table(postID, title, publishedAt, postComment, visitorID) values (:postID, :title, :publishedAt, :postComment, :visitorID)");
        $req->bindParam(':postID', $postID);
        $req->bindParam(':title', $title);
        $req->bindParam(':publishedAt', $publishedAt);
        $req->bindParam(':postComment', $postComment);
        $req->bindParam(':visitorID', $visitorID);

    
// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['postComment']) && $_POST['postComment'] != "") {
            $filteredComment = filter_input(INPUT_POST, 'postComment', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $postComment = $filteredComment;
        $req->execute();


    }
}