<?php

class TooManyLoginAttempts extends Exception{
          private $maxAttempts = 3; //$TooManyLoginAttempts is the object and private is the access modifier
          protected $message = "You have Exceeded Maximum Login Attempts";
         
          public function getMaxAttempts(){
              return $this->maxAttempts;
          }
      }

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
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/DynamicPages/bloggerLogin.php');
        } else {
                try{
                  $bloggers = blogger::all();
                  $loggedin = blogger::findBlogger($bloggers);
                  echo $loggedin->blogName . ' you are logged in';
                  require_once('views/DynamicPages/readAllBloggers.php');
                }
                catch(TooManyLoginAttempts $e){
                  $currentAttempts = $_SESSION['attempts'] + 1;
                  if($currentAttempts < $e->getMaxAttempts() ){
                    $_SESSION['attempts'] = $currentAttempts;
                    require_once('views/DynamicPages/bloggerLogin.php');
                  }else{
                    echo $e->getMessage(). PHP_EOL;
                    echo "Have you registered ?";
                  }
                }
    }
}
}