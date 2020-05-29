<?php

Class blogPostController {

    public function create() {
        // we expect a url of form ?controller=products&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/DynamicPages/createNewPost.php');
        } else {
            blogPost::add();

            $posts = blogPost::all(); //$products is used within the view
            require_once('views/DynamicPages/readAllposts.php');//just using this page to test reading back
        }
    }
    public function readAll() {
        // we store all the posts in a variable
        $posts = blogPost::all();
        require_once('views/DynamicPages/readAllPosts.php');
    }

    public function search() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['category']))
            return call('pages', 'error');

        try {
            // we use the given id to get the correct post
            $posts = blogPost::search($_GET['category']);
            require_once('views/DynamicPages/readAllPosts.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

}
