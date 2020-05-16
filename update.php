<?php session_start();
?>
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
        $username = "theoriginal";
        $password = password_hash('K!ttyCat123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("UPDATE member SET passwords =:password WHERE userName =:username");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count > 0) {
                echo "Done.";
            } else {
                echo "Oops.Check your code.";
            }
            ?>
    </body>
</html>
