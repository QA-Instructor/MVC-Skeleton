<?php

class Comment {

    public $id;
    public $comment;
    public $date;
    public $subscriber;
    public $comment_status;

    public function __construct($id, $comment, $date, $subscriber, $comment_status) {
        $this->id = $id;
        $this->comment = $comment;
        $this->date = $date;
        $this->subscriber= $subscriber;
        $this->subscriber= $comment_status;
    }

    public static function allArticleComments($id) {
        $list = [];
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT c.comment_id, c.comment, c.date, s.name, cs.comment_status FROM comment as c INNER JOIN subscriber as s ON c.subscriber_id=s.subscriber_id INNER JOIN comment_status as cs ON c.comment_status_id=cs.comment_status_id WHERE c.article_id = :id ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $comments = $req->fetchAll();
        foreach ($comments as $comment) {
            $list[] = new Comment($comment['comment_id'], $comment['comment'], $comment['date'], $comment['name'], $comment['comment_status']);
        }
        return $list;
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
            $list[] = new Comment($comment['comment_id'], $comment['comment'], $comment['date'], $comment['name'], $comment['comment_status']);
        }
        return $list;
    }

}
