<?php

include __DIR__ . '/../models/blogger.php';

class PagesController {

    public function home() {
        session_start();
        if (isset($_SESSION['blogger_id'])) {
            $blogger = blogger::getBloggerById($_SESSION['blogger_id']);
            $name = $blogger->getFname() . " " . $blogger->getLname();
        } else {
            $name = "Guest";
        }
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }

}
