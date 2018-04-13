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

}
