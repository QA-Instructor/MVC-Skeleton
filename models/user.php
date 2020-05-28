
<?php

//Register function defined in the User class.
//This will be a 'create' function as it will be inserting a user's details into the Blogger table in the database.
//This function & insert query has been connected to the HTML registeration form and tested to see if a user can register successfully.

//For logins/logouts: will require a different query & sessions
//*If Blogger is logged in, set to True
//*If not, set to False
//if $_SESSION is true, make sure they see this on the navbar
////i.e. if (ISSET($_SESSION['blogger']))
//if $_SESSION is false, make sure they see this on the navbar
//Layout.php?
//You can choose what to show in that session

class User {

    // we define attributes 
    private $bloggerID;
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $hashcode;
    private $datejoined;
    private $profilephoto;
    private $aboutme;

    public function __construct($firstname, $lastname, $username, $email, $hashcode, $datejoined, $profilephoto, $aboutme) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->hashcode = $hashcode;
        $this->datejoined = $datejoined;
        $this->profilephoto = $profilephoto;
        $this->aboutme = $aboutme;
    }

    public static function Register() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into Blogger(BloggerID, FirstName, LastName, Username, Email, Hashcode, DateJoined, ProfilePhoto, AboutMe) values (:BloggerID, :FirstName, :LastName, :Username, :Email, :Hashcode, :DateJoined, :ProfilePhoto, :AboutMe)");
        $req->bindParam(':BloggerID', $bloggerID);
        $req->bindParam(':FirstName', $firstname);
        $req->bindParam(':LastName', $lastname);
        $req->bindParam(':Username', $username);
        $req->bindParam(':Email', $email);
        $req->bindParam(':Hashcode', $hashcode);
        $req->bindParam(':DateJoined', $datejoined);
        $req->bindParam(':ProfilePhoto', $profilephoto);
        $req->bindParam(':AboutMe', $aboutme);


// set parameters and execute
        if (isset($_POST['FirstName']) && $_POST['FirstName'] != "") {
            $filteredFirstName = filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['LastName']) && $_POST['LastName'] != "") {
            $filteredLastName = filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Username']) && $_POST['Username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Email']) && $_POST['Email'] != "") {
            $filteredEmail = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Hashcode']) && $_POST['Hashcode'] != "") {
            $filteredHashcode = filter_input(INPUT_POST, 'Hashcode', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['DateJoined']) && $_POST['DateJoined'] != "") {
            $filteredDateJoined = filter_input(INPUT_POST, 'DateJoined', FILTER_SANITIZE_SPECIAL_CHARS);
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
        $profilephoto=User::uploadFile($firstname);
        $aboutme = $filteredAboutMe;
        $req->execute();
//
////upload product image
//        User::uploadFile($firstname); //? what to change to?
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFile(string $firstname) {

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
        $destinationFile = $path . $firstname . '.jpeg';

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
    }

    public function getUsername() {
        $this->_username = $username;
    }

    public static function login() { 
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM blogger WHERE Username = :Username AND Hashcode = :Hashcode LIMIT 1");
        $login = htmlentities(addslashes($_POST['Username']));
	$hashcode = htmlentities(addslashes($_POST['Hashcode']));
        $req->bindValue(":Username", $login);
        $req->bindValue(":Hashcode", $hashcode);
        $req->execute();
        
        $register_number=$req->rowCount();
        return $register_number;
        
    }
//
////check for num rows
//        if ($req->num_rows > 0) {
//            //success
//            $req->close();
//            return true;
//        } else {
//            //failure
//            $req->close();
//            return false;
//        } else {
//            die("Error! Could not log in");
//        }
//    }
//
//    public function logout() {
//        session_destroy();
//        session_start();
//    }

    public function search() {

    $db = Db::getInstance();
    if (isset($_POST["query"])) {


    $search = mysqli_real_escape_string($db, $_POST["query"]); //This function is used to create a legal SQL string that you can use in an SQL statement. 
    //The given string is encoded to an escaped SQL string, taking into account the current character set of the connection.
    //This is good to use and avoids sql injection
    $query = "
  SELECT * FROM blogpost
  WHERE BlogPostName LIKE '%" . $search . "%'
  OR BlogPostSubName LIKE '%" . $search . "%' 
  OR BlogPostContent LIKE '%" . $search . "%' 
 "; //MySQL query with placeholders
        } else {
            $query = "
  SELECT * FROM blogpost ORDER BY BlogPostName
 ";
        }
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) > 0) {
            $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Title </th>
     <th>Subtitle</th>
     <th>Blog Post</th>
     <th></th>
     <th></th>
    </tr>
 ';
            while ($row = mysqli_fetch_array($result)) {//while the function is fetching the array, display the title, date published, quantity in stock of the page.
                $output .= '
   <tr>
    <td>' . $row["BlogPostName"] . '</td>
    <td>' . $row["BlogPostSubName"] . '</td>
    <td>' . $row["BlogPostContent"] . '</td>
   </tr>
  ';
            }
            echo $output;
        } else {
            echo 'Blog post not found.';
        }
    }

}

//Functions we may need if we create an admin user, or if we decide to make our current blogger a normal blogger user as well as an admin with a range of powers over the blog:
//*All users
//*Find users
//*Add users
//*Update users
//*Remove users
?>
