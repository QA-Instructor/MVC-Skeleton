<?php

class blogPostCommentController {
    public function readAll() {
      // we store all the posts in a variable
      $postComments = blogPostComment::all();
      require_once('views/products/readAll.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $product = blogPostComment::find($_GET['id']);
      require_once('views/products/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    public function create() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/DynamicPages/readAllPosts.php');
      }
      else { 
            blogPostComment::add();
             
            $postComments = blogPostComment::all(); //$products is used within the view
            require_once('views/DynamicPages/readAllPosts.php');
            
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $postComment = blogPostComment::find($_GET['id']);
      
        require_once('views/products/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            blogPostComment::update($id);
                        
            $postComments = blogPostComment::all();
            require_once('views/products/readAll.php');
      }
      
    }
    public function delete() {
            blogPostComment::remove($_GET['id']);
            
            $postComments = blogPostComment::all();
            require_once('views/products/readAll.php');
      }
      
    }
  
?>

