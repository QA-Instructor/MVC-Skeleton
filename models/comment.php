<?php

class Comment {

    public $id;
    public $comment;
    public $date;
    public $subscriber;

    public function __construct($id, $comment, $date, $subscriber) {
        $this->id = $id;
        $this->comment = $comment;
        $this->date = $date;
        $this->subscriber= $subscriber;
    }

    public static function articleComments($id) {
        $list = [];
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT c.comment_id, c.comment, c.date, s.name FROM comment as c INNER JOIN subscriber as s ON c.subscriber_id=s.subscriber_id WHERE c.comment_status_id=1 AND c.article_id = :id ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $comments = $req->fetchAll();
        foreach ($comments as $comment) {
            $list[] = new Comment($comment['comment_id'], $comment['comment'], $comment['date'], $comment['name']);
        }
        return $list;    
    }
    
    public static function newComment($id) {
        $db = Db::getInstance();
        $id = intval($id);
        $req1 = $db->prepare("INSERT INTO subscriber(name, email) SELECT :name, :email FROM subscriber WHERE NOT EXISTS (SELECT * FROM subscriber WHERE email= :email ) LIMIT 1");
        $req2 = $db->prepare("INSERT INTO comment(comment, article_id, comment_status_id, subscriber_id) "
                . "values (:comment, :id, '3', (SELECT subscriber_id FROM subscriber WHERE email = :email))");
        $req1->bindParam(':name', $name);
        $req1->bindParam(':email', $email);
        $req2->bindParam(':comment', $comment);
        $req2->bindParam(':id', $id);
        $req2->bindParam(':email', $email);

// set parameters and execute
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $filteredName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        if (isset($_POST['comment']) && $_POST['comment'] != "") {
            $filteredComment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        $name = $filteredName;
        $email= $filteredEmail;
        $comment= $filteredComment;
        $req1->execute();
        $req2->execute();
    }

}
