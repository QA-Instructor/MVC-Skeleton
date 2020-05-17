<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <?php session_start();
?>

    
       
        

    </head>
    <body>
        <?php
        $dsn = "mysql:host=127.0.0.1;dbname=blog";
        $user = "root";
        $password = NULL;
        $options = NULL;
        $message = "";
        try {
            $pdo = new PDO($dsn, $user, $password, $options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $message = $e->getMessage();
        }


        if (isset($_POST['login'])) {
            $login_username = $_POST['login_username'];
            //The password is encrypted
            $login_password = $_POST['login_password'];
            $stmt = $pdo->prepare("SELECT userName, passwords FROM member WHERE userName =:username");
            $stmt->bindParam(":username", $login_username);
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetchall();
            foreach ($data as $row) {
                $hashed_password = $row['passwords'];
            }
            if ($count > 0) {
                if (password_verify($login_password, $hashed_password)) {
                    $_SESSION["login_username"] = $login_username;
                    echo "Hello " . $_SESSION["login_username"] . ". Login Successful";
                } else {
                    echo "Password incorrect.";
                }
            } else {
                echo "Username does not exist.";
            }
        }
        if (isset($_POST['register'])) {
            if (isset($_POST['confirm'])) {
                if ($_POST['password'] != $_POST['confirm_password']) {
                    echo "Passwords do not match. Please try it again.";
                } else {
                    $username = $_POST['username'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $firstname = $_POST ['firstname'];
                    $lastname = $_POST ['lastname'];
                    $email = $_POST ['email'];
                    $gender = $_POST ['gender'];
                    $accesslevel = 3;
                    $stmt = $pdo->prepare("INSERT INTO member (firstName, lastName, email, userName,accessLevel,passwords, gender) VALUES (:firstname, :lastname, :email ,:username,:accesslevel, :password, :gender)");
                    $stmt->bindParam(":firstname", $firstname);
                    $stmt->bindParam(":lastname", $lastname);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':accesslevel', $accesslevel);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(':password', $password);
                    $stmt->bindparam(":gender", $gender);
                    $stmt->execute();
                    $count = $stmt->rowCount();
                    if ($count > 0) {
                        $_SESSION["username"] = $username;
                        echo "Hello " . $_SESSION["username"] . ". Registration Successful";
                    } else {
                        echo "Registration Unsuccessful";
                    }
                }
            } else {
                echo "whaaaaaaaaaaaaaaaaaaaaaaaaaaaat?";
            }
        }
        ?>

        <h3>Log In Here</h3>

        <form action = "" method = "POST">
            Username:
            <input type = "text" name = "login_username" required>
            Password:
            <input type = "password" name = "login_password" required>
            <button type = 'submit' name = 'login'>Log In</button>
        </form>

        <h3>Register Today!</h3>
        <form action = "" method = "POST" name="register" onSubmit="return confirm();">
            Username:
            <input type = "text" name = "username" required>
            Password:
            <input type = "password" name = "password" required>
            Confirm Password:
            <input type = "password" name = "confirm_password" required>
            First Name:
            <input type = "text" name = "firstname" required>
            Last Name:
            <input type = "text" name = "lastname" required>
            Email:
            <input type = "email" name = "email" required>
            Gender:
            <input type = "radio" name = "gender" checked='checked' value = "1">Female
            <input type = "radio" name = "gender" value = "2">Male
            <input type = "radio" name = "gender" value = "3">Non-Binary
            <input type = "radio" name = "gender"  value = "4">Other

            <button type = 'submit' name = 'register'>Register</button>

            <input type = "checkbox" name = "confirm" value = "Agree">I confirmed that I like cats.


        </form>
