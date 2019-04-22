<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC Skeleton</title>
    </head>
    <body>
        <?php
        session_start(); 
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) { //determines what controller to use
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'home';
  }
    require_once('views/layout.php');
        ?>
    </body>
</html>