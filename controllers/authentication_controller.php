<?php

class AuthenticationController {

 

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {


            require_once('C:\xampp\htdocs\FinProject\views\pages\signup.php'); // takes it to the form that they need to sign up
        } else {
            Authentication::insertAdmin();
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require_once('C:\xampp\htdocs\FinProject\views\pages\login.php');
        } else {

            Authentication::login();

            
        }
    }

}


