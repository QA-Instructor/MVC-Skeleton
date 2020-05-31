

<?php

//change everything that is product to your controller BLOG

class blogController {
    public function readAll() {
      // we store all the posts in a variable
      $blog = blog::all();
      require_once('views/blog/readAll.php');
    }

    
    
    //changed until this point, need to change the below.
    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id'])) 
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blog = blog::find($_GET['id']);
      require_once('views/blog/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    public function create() { //when you click it shows you the blank form
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){

          require_once('views/products/create.php');
         
      }
      else { 
//          
          if (!empty($_POST)){
             $title = ($_POST["title"]);
             $body =($_POST["body"]);
//             $date = date("y-m-d");
             $blogDescription = ($_POST["blogDescription"]);
          } 
          
            blog::add(); //calling the add function that sends query into the database 
             
//            $products = blog::all(); //$products is used within the view
//            require_once('views/products/readAll.php'); 

            require_once('views/blog/readAll.php'); 
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['blogID']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $blog = Blog::find($_GET['blogID']);
      
        require_once('views/blog/update.php');
        }
      else
          { 
            $blogID = $_GET['blogID'];
            Blog::update($blogID);
                        
            $blog = blog::all();
            require_once('views/blog/readAll.php');
      }
      
    }
    public function delete() {
            Product::remove($_GET['id']);
            
            $products = Product::all();
            require_once('views/products/readAll.php');
      }
      
    }
  
?>