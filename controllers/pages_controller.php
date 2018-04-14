<?php

include __DIR__ . '/../models/blogger.php';

class PagesController {

    public function home() {
        session_start();
        //example data to use in the home page
        $blogger = blogger::getBloggerById($_SESSION['blogger_id']);
        $first_name = $blogger->getFname();
        $last_name = $blogger->getLname();
        require_once('views/pages/home.php');
        
    }

    public function error() {
        require_once('views/pages/error.php');
    }

}
