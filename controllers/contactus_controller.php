<?php

class contactusController {

  /*  public function readAll() {
        // we store all the posts in a variable
        $contactus = contactus::all();
        require_once('views/contactus/create.php');
    }
*/
    public function create() { //when you click it shows you the blank form
        // we expect a url of form ?controller=products&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/contactus/create.php');
        } else {
            contactus::add(); //calling the add function that sends query into the database

 /*          $contactus = contactus::all();
            require_once('views/contactus/create.php');

        }//takes you back to all products
    }
*/
}
    
}}