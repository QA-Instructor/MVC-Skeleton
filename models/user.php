
<?php

//Register function defined in User class 
//This will be a 'create' function as it will be inserting a user's details into the Blogger table in database.
//Need to link the insert query with the html registeration form and test that a user can register successfully

class User {

    // we define 3 attributes 
    private $bloggerID;
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $hashcode;
    private $datejoined;
    private $profilephoto;
    private $aboutme;

    public function __construct($bloggerID, $firstname, $lastname, $username, $email, $hashcode, $datejoined, $profilephoto, $aboutme) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->hashcode = $hashcode;
        $this->datejoined = $datejoined;
        $this->profilephoto = $datejoined;
        $this->aboutme = $datejoined;
    }

    public function getBloggerID($bloggerID) {
        $this->bloggerID = $bloggerID;
    }

    public function getUsername($username) {
        $this->username = $username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function logIn() {
        
    }

    public function logOut() {
        
    }

//    public static function all() {
//      $list = [];
//      $db = Db::getInstance();
//      $req = $db->query('SELECT * FROM blog');
//      // we create a list of Product objects from the database results
//      foreach($req->fetchAll() as $blog) {
//        $list[] = new BlogPost($blog['id'], $blog['title'], $blog['text']);
//      }
//      return $list;
//    }
//
//    public static function find($id) {
//      $db = Db::getInstance();
//      //use intval to make sure $id is an integer
//      $id = intval($id);
//      $req = $db->prepare('SELECT * FROM product WHERE id = :id');
//      //the query was prepared, now replace :id with the actual $id value
//      $req->execute(array('id' => $id));
//      $product = $req->fetch();
//if($product){
//      return new BlogPost($blog['id'], $blog['title'], $blog['text']);
//    }
//    else
//    {
//        //replace with a more meaningful exception
//        throw new Exception('A real exception should go here');
//    }
//    }
//
//public static function update($id) {
//    $db = Db::getInstance();
//    $req = $db->prepare("Update product set title=:title, text=:text where id=:id");
//    $req->bindParam(':id', $id);
//    $req->bindParam(':title', $title);
//    $req->bindParam(':text', $text);
//
//// set title and text parameters and execute
//    if(isset($_POST['title'])&& $_POST['title']!=""){
//        $filteredName = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//    if(isset($_POST['text'])&& $_POST['text']!=""){
//        $filteredPrice = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//$title = $filteredName;
//$text = $filteredPrice;
//$req->execute();
//
////upload product image if it exists
//        if (!empty($_FILES[self::InputKey]['title'])) {
//		Product::uploadFile($title);
//	}
//
//    }

    public static function Register() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into Blogger(FirstName, LastName, Username, Email, Hashcode, DateJoined, ProfilePhoto, AboutMe)) values (:FirstName, :LastName, :Username, :Email, :Hashcode, :DateJoined, :ProfilePhoto, :AboutMe)");
        $req->bindParam(':FirstName', $firstname);
        $req->bindParam(':LastName', $lastname);
        $req->bindParam(':Username', $username);
        $req->bindParam(':Email', $email);
        $req->bindParam(':Hashcode', $hashcode);
        $req->bindParam(':DateJoined', $datejoined);
        $req->bindParam(':ProfilePhoto', $profilePhoto);
        $req->bindParam(':AboutMe', $aboutme);


// set parameters and execute
        if (isset($_POST['FirstName']) && $_POST['FirstName'] != "") {
            $filteredFirstName = filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['LastName']) && $_POST['LastName'] != "") {
            $filteredSecondName = filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Username']) && $_POST['Username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Email']) && $_POST['Email'] != "") {
            $filteredEmail = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
            
        } if (isset($_POST['Hashcode']) && $_POST['Hashcode'] != "") {
            $filteredHashcode = filter_input(INPUT_POST, 'Hashcode', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if (isset($_POST['AboutMe']) && $_POST['AboutMe'] != "") {
            $filteredAboutMe = filter_input(INPUT_POST, 'AboutMe', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $firstname = $filteredFirstName;
        $lastname = $filteredLastName;  
        $username = $filteredUsername;
        $email = $filteredEmail;  
        $hashcode = $filteredHashcode;  
        $datejoined = $filteredDateJoined;
        $aboutme = $filteredAboutMe;
                
        $req->execute();

//upload product image
        User::uploadFile($bloggerID); //? what to change to?
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadProfilePhoto(string $bloggerID) {

        if (empty($_FILES[self::InputKey])) {
            //die("File Missing!");
            trigger_error("File Missing!");
        }

        if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }


        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }

        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
        $destinationFile = $path . $title . '.jpeg';

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
    }

    public static function DeleteAccount($id) {
        $db = Db::getInstance();
        //make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('delete FROM product WHERE id = :id');
        // the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
    }

}
?>
<!--
//For logins: just different queries
//Log in
//Log out

//user class
//main generic

//Blogger
//Add blog-->