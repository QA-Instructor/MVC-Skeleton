<?php

Class Authentication {

    private $email;
    private $password;
    private $passwordconf;

    public function __construct($email, $password) {

        $this->email = $email;
        $this->password = $password;
        $this->passwordconf = $passwordconf;
    }

    public function insertAdmin() {

     

        $db = Db::getInstance();

        if (isset($_POST["signup-btn"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordconf = $_POST["passwordconf"];


            if (empty($email)) {
                die("Email Required");
            }

            if (empty($password)) {
                die("Password Required");
            }
            if ($password !== $passwordconf) {
                die("The two password do not match");
            }


            $sql = $db->prepare("SELECT count(*) FROM admin_login WHERE email = :email");
            $sql->execute(array('email' => $email));
            $row = $sql->fetch();
            $count = $row[0];

            if ($count > 0) {
                die("Email address already exists, please login.");
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

        if (isset($_POST['login-btn'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            if ($email != "" && $password != "") {



                try {
                    $query = $db->prepare("SELECT adminID, email, password FROM admin_login WHERE email = :email");
                    $query->bindParam(':email', $email);
                    $query->execute();

                    $row = $query->fetch(PDO::FETCH_ASSOC);



                    if ($row === FALSE) {
                        die('Incorrect email / password combination!');
                    } else {
                        $validpassword = (password_verify($password, $row['password']));
                     
                       if ($validpassword) {
                           $_SESSION['email'] = $_POST['email'];
                 
                            header("location:?controller=blog&action=readAll");
                      } else {
                           echo "Invalid email and password!";
                      }
                    }
                } catch (PDOException $e) {
                    echo "Error : " . $e->getMessage();
                }
            }
        }
    }

}
