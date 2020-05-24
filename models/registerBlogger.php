<?php

class registerBlogger {

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
        $req = $db->prepare("Insert into register_table(blogName, firstName, lastName, email, registeredAt, phoneNumber, intro, aboutMe, passwordHASH) values (:blogName, :firstName, :lastName, :email, :registeredAt, :phoneNumber, :intro, :aboutMe, :password)");
        $req->bindParam(':blogName', $blogName);
        $req->bindParam(':firstName', $firstName);
        $req->bindParam(':lastName', $lastName);
        $req->bindParam(':email', $email);
        $req->bindParam(':phoneNumber', $phoneNumber);
        //removed the lastLogin in query 34
        $req->bindParam(':registeredAt', $registeredAt);
//        $req->bindParam(':lastLogin', $lastLogin);
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
        $registeredAt= date("d-m-y");
        $phoneNumber = $filteredphoneNumber;
        $intro = $filteredintro;
        $aboutMe = $filteredaboutMe;
        $passwordHASH = password_hash($filteredpassword, PASSWORD_DEFAULT);
//could use password_DEFAULT --used for hashing and salting 
        $req->execute();
        //adding date and time to registeredAT
//        $lastid = $db->lastInsertId();
//        $req = $db->query("UPDATE register_table SET registeredAt = now() WHERE blogID=$lastid");
    }

}
