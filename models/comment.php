<?php

class Comment {

    public $id;
    public $comment;
    public $date;

    //public $date;

    public function __construct($id, $comment, $date) {
        $this->id = $id;
        $this->comment = $comment;
        $this->date = $date;
    }

    public static function allComments($id) {
        $list = [];
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM comment WHERE comment_status_id=1 AND article_id = :id ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $comments = $req->fetchAll();
        foreach ($comments as $comment) {
            $list[] = new Comment($comment['comment_id'], $comment['comment'], $comment['date']);
        }
        return $list;
    }

}
