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
            
            $registerBlogger = blogger::add();
            createSessionData($registerBlogger);
            
            //$bloggers = blogger::all(); //$blogger is used within the view
            //require_once('views/DynamicPages/readAllBloggers.php');
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
                  createSessionData($loggedin);
                  echo $loggedin->blogName . ' you are logged in';
                  
                //  require_once('views/DynamicPages/readAllBloggers.php');
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

function createSessionData($blogger) {
    if (isset($_SESSION['attempts'])) {
        $_SESSION ['blogID'] = $blogger->blogID;
        $_SESSION ['blogName'] = $blogger->blogName;
        $_SESSION ['lastLogin'] = $blogger->lastLogin; 
        $_SESSION ['intro'] = $blogger->intro; 
        $_SESSION ['aboutMe'] = $blogger->aboutMe; 
        //$_SESSION ['aboutMe'] = 'This is where my aboutMe sentence should show';
    }
}
