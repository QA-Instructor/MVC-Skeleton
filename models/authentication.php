<?php


Class Authentication {

private $email;
private $password;

public function __construct($email, $password) {

$this->email = $email;
$this->password = $password;
}

public function findEmail($email) {
$db = Db::getInstance();
$sql = $db->prepare("SELECT * FROM admin_login WHERE email = :email");
$sql->execute(array('email' => $email));
$row = $sql->fetch();
if ($row) {
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

$passwordhash = password_hash($password, PASSWORD_DEFAULT);

$sql = $db->prepare("INSERT INTO admin_login (email, password) VALUES (:email,  :password)");
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $passwordhash);


if (isset($_POST['email']) && $_POST['email'] != "") {
$filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}
if (isset($_POST['password']) && $_POST['password'] != "") {

$filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

}
$email = $filteredEmail;
$password = $filteredPassword;
$sql->execute();

header("location:index.php");
}
}

public function login() {
    

$db = Db::getInstance();

if(isset($_POST['login-btn'])) {
$email = trim($_POST['email']);
$password = trim($_POST['password']);
if($email != "" && $password != "") {
    


try {
$query = $db->prepare("SELECT adminID, email, password FROM admin_login WHERE email = :email");
$query->bindParam(':email', $email);
$query->execute();
//$count = $query->rowCount();
$row = $query->fetch(PDO::FETCH_ASSOC);


//if($count == 1 &&!empty($row)) {
if($row ===FALSE){
   die('Incorrect email / password combination!');
    } else {
 $validpassword = (password_verify($password, $row['password']));

if ($validpassword) {
$_SESSION['email'] = $_POST['email'];
header("location:index.php");


 } else {
        echo "Invalid email and password!";
      }
} }
catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
   

}
}
}
}
}
