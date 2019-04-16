<?php

//namespace controller{
//    include "..\autoload.php";
    
//    spl_autoload_register(function($Name) {
//    $filePath = "$Name.php";
//    $macFilePath = str_replace('\\', '/', $filePath);
//    require_once '../' . $macFilePath;   
//    });
    
//    use models\post;

class PostController {
    public function readAll() {
      // we store all the posts in a variable
      $posts = Post::all(); //relates in Line 15 in model/product - therefore instantiates new product class
      require_once('views/posts/readAll.php'); //includes view file to display the readAll
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id'])) // if ID not set then error 
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $post = Post::find($_GET['id']); // similar to readAll - get ID and display in viewer
      require_once('views/posts/read.php');
      }
 catch (Exception $ex){ //AMEND - to return getMessage, getLine for the back end
     return call('pages','error');
 }
    }
    
    public function create() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){ //if server method is GET, then allowed to create
          require_once('views/posts/create.php');
      }
      else { 
          Post::add(); //otherwise it's an add function and therefore create new entry
             
            $posts = Post::all(); //$products is used within the view
            require_once('views/posts/readAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $post = Post::find($_GET['id']);
      
        require_once('views/posts/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            Post::update($id);
                        
            $posts = Post::all();
            require_once('views/posts/readAll.php');
      }
      
    }
    public function delete() {
            Post::remove($_GET['id']);
            
            $posts = Post::all();
            require_once('views/posts/readAll.php'); 
      }
      
}
?>