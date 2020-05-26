<?php


class AuthenticationController {

    public function validate() {
        if (!isset($_GET['email']))
            return call('pages', 'error');

        try {
            $row = Auth::duplicate_check($_GET['email']);
            require_once('../views/auth/signup.php');
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require_once('views/products/signup.php'); // takes it to the form that they need to sign in
          
        }else{
            Authentication::insertAdmin();
            $stmt = Authentication::all();
            //require_once('..//');
        }
    }

    public function loginAdmin() {
//         require_once('views/products/validate.php');
        
        if (isset($_POST["login-btn"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

//            require_once('/products/validate.php');
            //validation
            
  
               
            if (empty($email)) {
                $errors["email"] = "Username Required";
            }

            if (empty($password)) {
                $errors["password"] = "Password Required";
            }
        }
              require_once('views/products/validate.php');
            
//                     require_once('views/products/validate.php');
//        } else {
            
            authentication::login();
//            require_once('../views/signup.php');

//            $rows = authentication::all();
//        }
    }

}
