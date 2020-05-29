<?php

//Controller does the calls to the functionalities inside the models.

class BlogPostController {
    public function readAll() {
      // we store all the posts in a variable
      $blogposts = BlogPost::all(); //ALL blogposts
      require_once('views/blogpost/readAll.php');
    }   
    
    public function readCategory() {
     if (!isset($_GET['categoryID']))
        return call('pages', 'error');

      try{          
              $checker=$_GET['categoryID'];   
      
      if ($checker=="1"){
          $blogposts = BlogPost::category($checker);
      require_once('views/blogpost/readAww.php');}
      elseif ($checker=="2") {
          $blogposts = BlogPost::category($checker);
      require_once('views/blogpost/readLol.php');}
      else{
          $blogposts = BlogPost::category($checker);
      require_once('views/blogpost/readWow.php');}
//      // we use the given id to get the correct post
//      $blogposts = BlogPost::category($_GET['categoryID']);
//      require_once('views/blogpost/readAll.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      try{           
       //we use the given id to get the correct post          
      $blogpost = BlogPost::find($_GET['id']);
      require_once('models/comment.php');
      $comments = Comment::find($_GET['id']);
      require_once('views/blogpost/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    public function create() {
      // we expect a url of form ?controller=blogpost&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/blogpost/create.php');
      }
      else { 
            BlogPost::add();
             
            $blogposts = BlogPost::all(); //$blogposts is used within the view //ALL blogposts
            require_once('views/blogpost/readAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $blogpost = BlogPost::find($_GET['id']); //first it looks for the blogpost
      
        require_once('views/blogpost/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            BlogPost::update($id); //then it updates it depending on what we update blogpost with
                        
            $blogposts = BlogPost::all(); //ALL blogposts
            require_once('views/blogpost/readAll.php');
      }
      
    }
    public function delete() {
            BlogPost::remove($_GET['id']);
            
            $blogposts = BlogPost::all(); //ALL blogposts
            require_once('views/blogpost/readAll.php');
      }
      
    }
  
?>