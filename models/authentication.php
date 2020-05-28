<?php



Class Authentication {

    private $email;
    private $password;

    //should this be in the controller -- line 12!!
//  
    // assign the variables, 
    // if statement in the controller - P - if statements validating and then calling the model
    // go through the queries and change them to the DB names
    public function __construct($email, $password) {

        $this->email = $email;
        $this->password = $password;
    }

    public function findEmail($email) {
        $db = Db::getInstance();
        $sql = $db->prepare("SELECT * FROM admin_login WHERE email = :email");
        $sql->execute(array('email' => $email));
        $row = $sql->fetch();
   if($row){
            return new Auth($count['email']);
        } else {
            //replace with a more meaningful exception
            throw new Exception('Email already exist, please login');
        }
    }

 public function insertAdmin() {
$errors = array();

$db = Db::getInstance();

if (isset($_POST["signup-btn"])) {
$email = $_POST["email"];
$password = $_POST["password"];

//validation

if (empty($email)) {
$errors["email"] = "Email Required";
die();
}

if (empty($password)) {
$errors["password"] = "Password Required";
die();
}

$sql = $db->prepare("INSERT INTO admin_login(hashpassword, email) VALUES (:password , :email)");
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$password = password_hash($password, PASSWORD_DEFAULT);

if (isset($_POST['email']) && $_POST['email'] != "") {
$filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}
if (isset($_POST['password']) && $_POST['password'] != "") {
$filteredPassword = filter_input(INPUT_POST, 'hashpassword', FILTER_SANITIZE_SPECIAL_CHARS);
}
$email = $filteredEmail;
$password = $filteredPassword;
$sql->execute();

header("location:index.php");
}
}
    
    
    
    
    
    
    
//    public function login() {
//
//        $db = Db::getInstance();
//
//        $stmt = $db->prepare("SELECT * FROM admin_login WHERE email =':email' AND hashpassword =':hashpassword'");
//        $stmt->bindParam(':email', $email);
//        $stmt->bindParam(':hashpassword', $password);
//        $stmt->execute();
//        $rows = $stmt->fetchall();
//        
//       foreach($rows as $row){
//           if ($password == $row['hashpassword']){
//               $_SESSION('exists') = true;
//               header('aboutus.php');
//               // we could put our controller and action here!!!
//           }
//       }
//        
//        
//        
//
//        foreach ($rows as $row) {
//            if (password_verify($password, $row["hashpassword"])) {
//                $_Session['email'] = $this->email;// Hi Izzy, I am not sure what this session is going 
//                header('aboutus.php');
//            } else {
//                throw new Exception();
//            }
//        }
//    }
    
    
public function login() {
    

$db = Db::getInstance();

if(isset($_POST['login-btn'])) {
$email = trim($_POST['email']);
$password = trim($_POST['password']);
if($email != "" && $password != "") {
    
  $email = trim($_POST['email']);
$password = trim($_POST['password']);

try {
$query = $db->prepare( "SELECT * FROM admin_login WHERE email=:email AND hashpassword=:hashpassword");
$query->bindParam(':email', $email);
$query->bindParam(':hashpassword', $password);
$query->execute();
$count = $query->rowCount();
$row = $query->fetch(PDO::FETCH_ASSOC);


if($count == 1 ) {
$_SESSION['email'] = $_POST['email'];
$session['password'] = $_POST['password'];
//redirect
header("pages/views/aboutus.php");


 } else {
        echo "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
      echo "Both fields are required!";
  }
}
    
    
    //"SELECT count(*) FROM admin_login WHERE :email='$email' AND :password='$password' AND email<>'' AND hashpassword <> '' LIMIT 1"
    //&&!empty($row)
}
}