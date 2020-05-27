<?php
class AuthenticationController {
    
public $errors = array();

    public function validate() {
        if (!isset($_GET['email']))
            return call('pages', 'error');

        try {
            $row = Auth::duplicate_check($_GET['email']);
            //require_once('../views/auth/signup.php');
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require_once('C:\xampp\htdocs\FinProject\views\pages\signup.php'); // takes it to the form that they need to sign up

          
        }else{  Authentication::insertAdmin();
                    $stmt = Authentication::all();
                
            }
        }
    
        
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require_once('C:\xampp\htdocs\FinProject\views\pages\login.php');
        } else {
          
            Authentication::login();

           // $row=Authentication::all();
        }
    }

}
