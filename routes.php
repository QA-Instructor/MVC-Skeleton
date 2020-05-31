<?php

function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch ($controller) {
        //for non-data-driven pages use the PagesController class
        case 'pages':
            $controller = new PagesController();

            break;

        default:
            //for all data-driven pages use a specific Controller class
            //we need the model to query the database later in the process
            require_once("models/{$controller}.php");
            $controllerClassName = $controller . 'Controller';
            $controller = new $controllerClassName();
            // the above esen tially instansiates the GET requests name of controller and puts it into $controller
            break;
    }
//  
    // call the requested action - ur taking the controller which is now an instansiated class of the 
    // productcontroller and you are calling the $action which was assigned by the getter, in the 
    // products case READALL- so that method is called within the class. 
    $controller->{ $action }();
}

// for validation we list the allowed controllers and their actions
// Add an entry for each new controller and its actions

$controllers = array('pages' => ['home', 'aboutus', 'error'],
    'product' => ['readAll', 'read', 'create', 'update', 'delete'],
    'blog' => ['readAll', 'read', 'create', 'update', 'delete', 'readAllAdminUser'],
    'authentication' => ['create', 'login'],
    'contactus' => ['create'],
    'controllerXXX' => ['actionYYY', 'actionZZZ'],
);

//after you make it all the last step is go to routes and add new model, new array and same cruds
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