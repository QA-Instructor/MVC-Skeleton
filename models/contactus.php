<?php

class contactus {

    // we define 3 attributes
    public $contactID;
    public $blogID; 
    public $subscriptionsID;
    public $responseID;
    public $firstName;
    public $surname;
    public $email;
    public $dates;
    public $body;

    public function __construct($contactID,$blogID,$subscriptionsID,$responseID,$firstName,$surname,$email,$dates,$body) { 
    $this-> $contactID;
    $this-> $blogID; 
    $this-> $subscriptionsID;
    $this-> $responseID;
    $this-> $firstName;
    $this-> $surname;
    $this-> $email;
    $this-> $dates;
    $this-> $body;
    }

    public static function all() {
        $list = [];
        // this part under is just instansiating the connector to make the connection between the database-DB class in connection.php
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM contact_us'); //change
        // we create a list of contactus objects from the database results
        foreach ($req->fetchAll() as $contact) { 
            $list[] = new Contact ($contact['contactID'], $contact['blogID'], $contact['subscriptionsID'], $contact['responseID'], $contact['firstName'], $contact['surname'], $contact['email'], $contact['dates'], $contact ['body']);
        } 
        return $list; 
    }

    public static function find($contactID) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $blogID = intval($blogID);
        $req = $db->prepare('SELECT * FROM contactus WHERE contactID = :contactID');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('contactID' => $contactID));
        $blog = $req->fetch();
        if ($blog) {
            return new Contact($contact['contactID'], $contact['blogID'], $contact['subscriptionsID'], $contact['responseID'], $contact['firstName'], $contact['surname'], $contact['email'], $contact['dates'], $contact ['body']);
        } else {
            //replace with a more meaningful exception
            throw new Exception('Could not find contact');
        }
    }
}
