<?php

class Blogger {

    private $blogger_id;
    private $username;
    private $f_name;
    private $l_name;
    private $email;

    public function __construct($blogger_id, $username, $f_name, $l_name, $email) {
        $this->blogger_id = $blogger_id;
        $this->username = $username;
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->email = $email;
    }

    public static function getBloggerIfValid($username, $password) {
        $db = Db::getInstance();
        $result = $db->query("SELECT blogger_id, f_name, l_name, email FROM blogger where username='$username' and password='$password'");
        $rows = $result->fetchAll();
        $num_rows = count($rows);
        if ($num_rows == 1) {
            $blogger_info = $rows[0];
            return new Blogger($blogger_info['blogger_id'], $username, $blogger_info['f_name'], $blogger_info['l_name'], $blogger_info['email']);
        } else {
            return NULL;
        }
    }

    public function logoutBlogger() {
        $_SESSION['blogger_id'] = FALSE;
        session_destroy();
        }

        public static function getBloggerById($blogger_id) {
        $db = Db::getInstance();
        $result = $db->query("SELECT f_name, l_name, username, email FROM blogger where blogger_id='$blogger_id'");
        $rows = $result->fetchAll();
        $num_rows = count($rows);
        if ($num_rows == 1) {
        $blogger_info = $rows[0];
        return new Blogger ($blogger_id, $blogger_info['username'], $blogger_info['f_name'], $blogger_info['l_name'], $blogger_info['email']);
        } else {
            return NULL;
        }
    }

    public function getFname() {
        return $this->f_name;
    }

    public function getLname() {
        return $this->l_name;
    }

    public function getBloggerId() {
        return $this->blogger_id;
    }
    

}