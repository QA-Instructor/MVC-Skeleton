<?php

Class newPostController {

    public function create() {
        // we expect a url of form ?controller=products&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/DynamicPages/createNewPost.php');
        } else {
            newPost::add();

            $posts = newPost::all(); //$products is used within the view
            require_once('views/DynamicPages/readAllposts.php');//just using this page to test reading back
        }
    }

}
