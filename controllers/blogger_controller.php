<?php

class bloggerController {

    public function login() {
        $bloggers = blogger::login();
        require_once(__DIR__ . '/../views/blogger/login.php');
    }

    public function error() {
        require_once(__DIR__ . 'views/pages/error.php');
    }

}
