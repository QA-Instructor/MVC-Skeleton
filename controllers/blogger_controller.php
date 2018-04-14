<?php

include_once __DIR__ . '/../models/blogger.php';

class bloggerController {

    public $blogger;

    public function login() {

        session_start();

        if (isset($_POST['submit'])) {
            $blogger = blogger::getBloggerIfValid($_POST['username'], $_POST['password']);
            if ($blogger !== NULL) {
                $_SESSION['blogger_id'] = $blogger->getBloggerId();
                header('Location: ?controller=product&action=create');
            }
        }
        require_once(__DIR__ . '/../views/blogger/login.php');
    }

    public function error() {
        require_once(__DIR__ . '/../views/pages/error.php');
    }

}
