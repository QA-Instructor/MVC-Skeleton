<?php

class blogger {

    private $username;
    private $password;
    
    public function __construct($username, $password) {
        if ($username == null and $password == null) {
            return("Incorrect username or password");
        }
        $this->username = $username;
        $this->password = $password;
    }
    
    public static function login() {
        $db = Db::getInstance();
        $req = $db->query('SELECT username, password FROM blogger');
    }
}
// we create a list of Product objects from the database results