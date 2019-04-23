<?php

class UserController {
   
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') { //calls the login form if the user hasn't submitted any data
            require_once('views/users/login.php');
        } else {
            try {
                $loggedInUser = User::login($_POST['username'], $_POST['password']); //if the user has submitted data (password + username), it calls the login function in the models to check if the user exists in the database   
                $_SESSION['userID'] = $loggedInUser->userID;
                
                require_once('views/pages/home.php'); //go to the homepage
                
              
                
            } catch (Exception $ex) {
                require_once('views/users/login.php'); //if user doesn't exist, stay in login to enter data again    
            }
        }
    }
    
     public function logout() {
        session_destroy();
    }

    public function registration() {
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
             require_once('views/users/registration.php');
        } else {
            try {
                //fetch user type
               $userType = User::userTypeForRegistration($_POST['userTypeID']);
                $loggedInUser = User::registration($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['phoneNumber'], $userType);
                $_SESSION['userID'] = $loggedInUser->userID;
                
                require_once('views/pages/home.php'); //go to the homepage
                             
            } catch (Exception $ex) {
                require_once('views/users/registration.php');
            }
        }
     
    }
    
      public function home() {
        $loggedInUser = User::findUserById($_SESSION['userID']);   
                
      require_once('views/pages/home.php');
    }
}




