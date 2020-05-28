<?php
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch($controller) {
        //for non-data-driven pages use the PagesController class
        case 'pages':
            $controller = new PagesController();
        break;

        default:
        //for all data-driven pages use a specific Controller class
        //we need the model to query the database later in the process
        require_once("models/{$controller}.php");
        $controllerClassName = $controller . 'Controller'; //instance of the class ProductController
        $controller = new $controllerClassName();
        break;
    }
    // call the requested action
    $controller->{ $action }();
  }

// for validation we list the allowed controllers and their actions
// Add an entry for each new controller and its actions
$controllers = array('pages' => ['home', 'error'],
                    'product' => ['readAll','read','create','update','delete'],//add the functions into this array each time you make a new model
                    'blogpost' => ['readAll','readCategory', 'read','create','update','delete'],
                    'user'=> ['create','login', 'search'],
                    'controllerXXX' => ['actionYYY', 'actionZZZ'],//this is an example 
                    );

  // check that the requested controller and action are both allowed
  // if someone tries to access something else they will be redirected 
  // to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
  ?>