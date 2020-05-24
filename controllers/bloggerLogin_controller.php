<?php

Class bloggerLoginController {

    public function readLogin() {
        // we expect a url of form ?controller=products&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/DynamicPages/bloggerLogin.php');
        } else {
            bloggerLogin::readLogin();

            $blogger = bloggerLogin::all(); //$products is used within the view
            require_once('views/DynamicPages/bloggerLogin.php');
        }
    }
}