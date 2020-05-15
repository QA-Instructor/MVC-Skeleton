<?php

class BlogpostController {
    public function readAll() {
      // we store all the posts in a variable
      $blogpost = BlogPost::all();
      require_once('views/blogpost/readAll.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blogpost = BlogPost::find($_GET['id']);
      require_once('views/blogpost/read.php');
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
          require_once('views/blogpost/create.php');
      }
      else { 
            BlogPost::add();
             
            $blogpost = BlogPost::all(); //$products is used within the view
            require_once('views/blogpost/readAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $blogpost = BlogPost::find($_GET['id']);
      
        require_once('views/blogpost/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            BlogPost::update($id);
                        
            $blogpost = BlogPost::all();
            require_once('views/blogpost/readAll.php');
      }
      
    }
    public function delete() {
            BlogPost::remove($_GET['id']);
            
            $blogpost = BlogPost::all();
            require_once('views/blogpost/readAll.php');
      }
      
    }
  
?>