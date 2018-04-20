<?php

include_once __DIR__ . '/../models/blogger.php';

class bloggerController {

    public function login() {
        if (isset($_POST['submit'])) {
            $blogger = blogger::getBloggerIfValid($_POST['username'], $_POST['password']);
            if ($blogger !== NULL) {
                $_SESSION['blogger_id'] = $blogger->getBloggerId();
                echo '<script> location.replace("?controller=article&action=readAll"); </script>';
            }
        }
        require_once(__DIR__ . '/../views/blogger/login.php');
    }

    public function error() {
        require_once(__DIR__ . '/../views/pages/error.php');
    }

    public function logout() {
        session_destroy();
        require_once(__DIR__ . '/../views/blogger/logout.php');
    }

}
