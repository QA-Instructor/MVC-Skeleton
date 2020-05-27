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

        $db = Db::getInstance();
       $sql = $db->prepare("INSERT INTO admin_login (email, hashpassword) VALUES (:email,  :hashpassword)");
        $sql->bindParam(':email', $email);
        $sql->bindParam(':hashpassword', $password);
        $password = password_hash($password, PASSWORD_DEFAULT);
        
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
    
    public function login() {

        $db = Db::getInstance();

        $stmt = $db->prepare("SELECT * FROM admin_login WHERE email =':email' AND hashpassword =':hashpassword'");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':hashpassword', $password);
        $stmt->execute();
        $rows = $stmt->fetchall();
        
       foreach($rows as $row){
           if ($password == $row['hashpassword']){
               $_SESSION(true);
               header('aboutus.php');
               // we could put our controller and action here!!!
           }
       }
        
        
        

        foreach ($rows as $row) {
            if (password_verify($password, $row["hashpassword"])) {
                $_Session['email'] = $this->email;// Hi Izzy, I am not sure what this session is going 
                header('aboutus.php');
            } else {
                throw new Exception();
            }
        }
    }
}
