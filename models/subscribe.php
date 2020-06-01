
<?php

class subscribe {

    // we define 3 attributes
    public $subscriptionsID;
    public $firstName; 
    public $surname;
    public $email;
  

    public function __construct($subscriptionsID,$firstName,$surname,$email) { 
    $this-> $subscriptionsID;
    $this-> $firstName; 
    $this-> $surname;
    $this-> $email;
  
    }

        public static function add() { //create
   $db = Db::getInstance();
   $req = $db->prepare("Insert into subscriptions(email) values (:email)");
   //$req->bindParam(':subscriptionsID', $subscriptionsID);
   //$req->bindParam(':firstName', $firstName);
   //$req->bindParam(':surname', $surname);
   $req->bindParam(':email', $email);

// set parameters and execute
   
   //model communicates with the database
   
  /*  if(isset($_POST['subscriptionsID'])&& $_POST['subscriptionsID']!=""){
       $filteredsubscriptionsID = filter_input(INPUT_POST,'subscriptionsID', FILTER_SANITIZE_SPECIAL_CHARS);
  /*  }
   if(isset($_POST['firstName'])&& $_POST['firstName']!=""){
       $filteredFirstName = filter_input(INPUT_POST,'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
  /* }
   if(isset($_POST['surname'])&& $_POST['surname']!=""){
       $filteredSurname = filter_input(INPUT_POST,'surname', FILTER_SANITIZE_SPECIAL_CHARS); */
   //}
   if(isset($_POST['email'])&& $_POST['email']!=""){
       $filteredEmail = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
 
   }

//$subscriptionsID = $filteredsubscriptionsID;
//$firstName = $filteredFirstName;
//$surname = $filteredSurname;
$email = $filteredEmail;

$req->execute();

if ($req->execute()) {
 include("views/subscribe/thank_you.php");
   
   echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
   // header("location:index.php");
    }
}
}


