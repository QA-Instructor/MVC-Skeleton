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
        $req = $db->prepare("Insert into register_table(blogName, firstName, lastName, email, phoneNumber, registeredAt, lastLogin, intro, aboutMe, passwordHASH) values (:blogName, :firstName, :lastName, :email, :phoneNumber, :registeredAt, :lastLogin, :intro, :aboutMe, :passwordHASH)");
        $req->bindParam(':blogName', $blogName);
        $req->bindParam(':firstName', $firstName);
        $req->bindParam(':lastname', $lastName);
        $req->bindParam(':email', $email);
        $req->bindParam(':phoneNumber', $phoneNumber);
        $req->bindParam(':registeredAt', $registeredAt);
        $req->bindParam(':lastLogin', $lastLogin);
        $req->bindParam(':intro', $intro);
        $req->bindParam(':aboutMe', $aboutMe);
        $req->bindParam(':passwordHASH', $passwordHASH);
        
// set parameters and execute
        if (isset($_POST['blogName']) && $_POST['blogName'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'blogName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['firstName']) && $_POST['firstName'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['lastName']) && $_POST['lastName'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        if (isset($_POST['phoneNumber']) && $_POST['phoneNumber'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['intro']) && $_POST['intro'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'intro', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['aboutMe']) && $_POST['aboutMe'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'aboutMe', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        $blogName = $filteredblogName;
        $firstName = $filteredfirstName;
        $lastName = $filteredlastName;
        $email = $filteredemail;
        $phoneNumber = $filteredphoneNumber;
        $intro = $filteredintro;
        $aboutMe= $filteredaboutMe;
        
        $req->execute();
}
}
