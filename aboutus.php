<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
    </head>
    <body>
        <?php      

    
        if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'aboutus';
  }
  
   require_once('views/layout.php');

        ?>
    </body>
</html>

