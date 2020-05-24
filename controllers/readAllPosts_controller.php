<?php

class readAllPostsController {

    public function readAll() {
        // we store all the posts in a variable
        $posts = readAllPosts::all();
        require_once('views/DynamicPages/readAllPosts.php');
    }

    public function read() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
            return call('pages', 'error');

        try {
            // we use the given id to get the correct post
            $product = Product::find($_GET['id']);
            require_once('views/DynamicPages/readAllPosts.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }
}