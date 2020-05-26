<?php

Class BloggerController {

    public function create() {
        // we expect a url of form ?controller=blogger&action=create
        // if it's a GET request display a blank form for creating a new blogger
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/DynamicPages/createNewBlogger.php');
        } else {
            blogger::add();

            $bloggers = blogger::all(); //$blogger is used within the view
            require_once('views/DynamicPages/readAllBloggers.php');
        }
    }
    
    public function readAll() {
      // we store all the bloggers in a variable
      $bloggers = blogger::all();
      require_once('views/DynamicPages/readAllBloggers.php');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           $blogger = blogger::login();
//pass the data back to the 'start here' page to display the blogger user name and also last login
        }
    }
    
}