
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PAWSOME - Our Adventurous Pets </title>
    </head>
    <body>
        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'home';
  }

    require_once('views/layout.php');
    
    //When you see require once and the file path - imagine as if all that code is underneath it.
        ?>
    </body>
</html>
