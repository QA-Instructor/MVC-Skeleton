<?php

class blogger {

    // we define 3 attributes
    public $blogID;
    public $blogName;
    public $firstName;
    public $lastName;
    public $email;
    public $phoneNumber;
    public $registeredAt;
    public $lastLogin;
    public $intro;
    public $aboutMe;
    public $passwordHASH;

    public function __construct($blogID, $blogName, $firstName, $lastName, $email, $phoneNumber, $registeredAt, $lastLogin, $intro, $aboutMe, $passwordHASH) {
        $this->blogID = $blogID;
        $this->blogName = $blogName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->registeredAt = $registeredAt;
        $this->lastLogin = $lastLogin;
        $this->intro = $intro;
        $this->aboutMe = $aboutMe;
        $this->passwordHASH = $passwordHASH;
    }

    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into register_table(blogName, firstName, lastName, email, registeredAt, lastLogin, phoneNumber, intro, aboutMe, passwordHASH) values (:blogName, :firstName, :lastName, :email, :registeredAt, :lastLogin, :phoneNumber, :intro, :aboutMe, :password)");
        $req->bindParam(':blogName', $blogName);
        $req->bindParam(':firstName', $firstName);
        $req->bindParam(':lastName', $lastName);
        $req->bindParam(':email', $email);
        $req->bindParam(':phoneNumber', $phoneNumber);
        $req->bindParam(':registeredAt', $registeredAt);
        $req->bindParam(':lastLogin', $lastLogin);
        $req->bindParam(':intro', $intro);
        $req->bindParam(':aboutMe', $aboutMe);
        $req->bindParam(':password', $passwordHASH);

// set parameters and execute
        if (isset($_POST['blogName']) && $_POST['blogName'] != "") {
            $filteredblogName = filter_input(INPUT_POST, 'blogName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['firstName']) && $_POST['firstName'] != "") {
            $filteredfirstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['lastName']) && $_POST['lastName'] != "") {
            $filteredlastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredemail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        if (isset($_POST['phoneNumber']) && $_POST['phoneNumber'] != "") {
            $filteredphoneNumber = filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['intro']) && $_POST['intro'] != "") {
            $filteredintro = filter_input(INPUT_POST, 'intro', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['aboutMe']) && $_POST['aboutMe'] != "") {
            $filteredaboutMe = filter_input(INPUT_POST, 'aboutMe', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['password']) && $_POST['password'] != "") {
            $filteredpassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $blogName = $filteredblogName;
        $firstName = $filteredfirstName;
        $lastName = $filteredlastName;
        $email = $filteredemail;
        $registeredAt = date("d-m-y");
        $lastLogin = date("d-m-y");
        $phoneNumber = $filteredphoneNumber;
        $intro = $filteredintro;
        $aboutMe = $filteredaboutMe;
        $passwordHASH = password_hash($filteredpassword, PASSWORD_DEFAULT);
        $req->execute();
        //retrieving last ID (BlogID for use in displaying blogs
        $blogid = $db->lastInsertId();
        $req = $db->prepare('SELECT * FROM register_table WHERE blogID = :blogID');
        $req->bindParam(':blogID', $blogid);
        $req->execute();
        $blogger = $req->fetch();
        $bloggerObject = new blogger($blogger['blogID'], $blogger['blogName'], $blogger['firstName'], $blogger['lastName'], $blogger['email'], $blogger['registeredAt'], $blogger['lastLogin'], $blogger['phoneNumber'], $blogger['intro'], $blogger['aboutMe'], $blogger['passwordHASH']);
        return $bloggerObject;
    }

    public static function findBlogger($bloggers) {
        $db = Db::getInstance();
                  

// set parameters and execute
        if (isset($_POST['blogName']) && $_POST['blogName'] != "") {
            $filteredblogName = filter_input(INPUT_POST, 'blogName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if (isset($_POST['password']) && $_POST['password'] != "") {
            $filteredpassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $blogName = $filteredblogName;
       // $passwordHASH = password_verify($filteredpassword, PASSWORD_DEFAULT);
       $loggedin = false;
        foreach ($bloggers as $blogger) {
            if (($blogger->blogName == $blogName) && (password_verify($filteredpassword, $blogger->passwordHASH)))
            {
                $loggedin = true;
                break;                         
                }
            }
           


//AND (passwordHASH = :passwordHASH)")
        //can also try a prepare
      //  $req = $db->query("SELECT * FROM register_table WHERE (blogName = :blogName)");
        // $req->bindParam(':blogName', $blogName);
       // $req->bindParam(':passwordHASH', $passwordHASH);
       // $req->execute();
       // $blogger = $req->fetch();
       
        

        if ($loggedin) {
          return $blogger;
            //($blogger['blogID'], $blogger['blogName'], $blogger['firstName'], $blogger['lastName'], $blogger['email'], $blogger['phoneNumber'], $blogger['publishedAt'], $blogger['lastLogin'], $blogger['intro'], $blogger['aboutMe'], $blogger['passwordHASH']);
        } else {
            //replace with a more meaningful exception
            //throw new Exception('A real exception should go here');

            throw new TooManyLoginAttempts();
        }
        }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM register_table');
        // we create a list of blogger objects from the database results
        foreach ($req->fetchAll() as $bloggers) {
            $list[] = new blogger($bloggers['blogID'], $bloggers['blogName'], $bloggers['firstName'], $bloggers['lastName'], $bloggers['email'], $bloggers['phoneNumber'], $bloggers['registeredAt'], $bloggers['lastLogin'],  $bloggers['intro'], $bloggers['aboutMe'], $bloggers['passwordHASH']);
        }
        return $list;
    }

}
