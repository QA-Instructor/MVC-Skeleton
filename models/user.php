<?php

class User {
    public $userID;
    public $firstName;
    public $lastName;
    public $email;
    public $username;
    public $password;
    public $phoneNumber;
    public $userTypeID;

    public function __construct($userID, $firstName, $lastName, $email, $username, $password, $phoneNumber, $userTypeID) {
        $this->userID = $userID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->phoneNumber = $phoneNumber;
        $this->userTypeID = $userTypeID;
    }

   public static function login($username, $password) {
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM user WHERE username=:username and password=:password");
        $req->execute(array('username' => $username, 'password' => $password)); 
        $loggedInUser = $req->fetch(); 
        if ($loggedInUser) { 
            
            return new User($loggedInUser['userID'], $loggedInUser['firstName'], $loggedInUser['lastName'], $loggedInUser['email'], $loggedInUser['username'], $loggedInUser['password'], $loggedInUser['phoneNumber'], $loggedInUser['userTypeID']);
        
         
        } else {
          
            throw new Exception('Username or password is incorrect');
        }

    }
    
    public static function userTypeForRegistration($userTypeOption) {
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM user_type WHERE userTypeName=:userTypeOption");
        $req->execute(array('userTypeOption' => $userTypeOption)); 
        $returnUserType = $req->fetch(); 
        if ($returnUserType) { 
            
            return $returnUserType['userTypeID'];
         
        } else {
          
            throw new Exception('Invalid user type');
        }
    }
    
    public static function findUserById($userID) {
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM user WHERE userID=:userID");
        $req->execute(array('userID' => $userID)); 
        $loggedInUser = $req->fetch(); 
         if ($loggedInUser) { 
            
            return new User($loggedInUser['userID'], $loggedInUser['firstName'], $loggedInUser['lastName'], $loggedInUser['email'], $loggedInUser['username'], $loggedInUser['password'], $loggedInUser['phoneNumber'], $loggedInUser['userTypeID']);
        
         
        } else {
          
            throw new Exception('Username or password is incorrect');
        }

    }
 
    
    public static function registration($firstName, $lastName, $email, $username, $password, $phoneNumber, $userTypeID) {
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO user (firstName, lastName, email, username, password, phoneNumber, userTypeID) VALUES (:firstName, :lastName, :email, :username, :password, :phoneNumber, :userTypeID)");
        $req->execute(array('firstName' => $firstName, 'lastName' => $lastName, 'email' => $email, 'username' => $username, 'password' => $password, 'phoneNumber' => $phoneNumber, 'userTypeID' => $userTypeID)); 
        $loggedInUser = $req->fetch(); 
        if ($loggedInUser) { 
            
            return new User($loggedInUser['userID'], $loggedInUser['firstName'], $loggedInUser['lastName'], $loggedInUser['email'], $loggedInUser['username'], $loggedInUser['password'], $loggedInUser['phoneNumber'], $loggedInUser['userTypeID']);
        
         
        } else {
          
            throw new Exception('Username or password is incorrect');
        }

    }
}
    


?>