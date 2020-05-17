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
        
        if (isset($_POST['recover'])) {
            $login_username = $_POST['login_username'];
            //The password is encrypted
            $email=$_POST['email'];
            
            echo $login_username;
            echo $email;
           
            $stmt = $pdo->prepare("SELECT userName, email FROM member WHERE userName =:username and email =:email");
            $stmt->bindParam(":username", $login_username);
            $stmt->bindParam(":email", $email);
            
          
            $stmt->execute();
            $count = $stmt->rowCount();
            
             if ($count > 0) {
             $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
             $stmt1 = $pdo->prepare("UPDATE member SET passwords =:password WHERE userName =:username");
              $stmt1->bindParam(":username", $login_username);
            $stmt1->bindParam(":password", $password);
            
            $stmt1->execute();
            $count1 = $stmt1->rowCount();
            
            if ($count1>0){
                
            echo "success";}
            
           else {echo "Try again";}
            
            
          
                
            } else {
                echo "Username does not exist.";
        }
        }
        ?>

        <form action = "" method = "POST">
            Username:
            <input type='text' name='login_username' required>

            Email address:

            <input type='email' name='email' required>
            <input type='password' name='password'>
            <button type='submit' name='recover'>Recover</button>
            
        </form>
            
            </body>
            </html>
