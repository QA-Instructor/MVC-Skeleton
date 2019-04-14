<?php
  
namespace models{
    
    spl_autoload_register(function($Name) {
    $filePath = "$Name.php";
    $macFilePath = str_replace('\\', '/', $filePath);
    require_once '../' . $macFilePath;   
    });

class Product {

    // we define 3 attributes
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {
      $this->id    = $id;
      $this->name  = $name;
      $this->price = $price;
    }

    public static function all() { //All function set into the array
      $list = [];
      $db = Db::getInstance(); //Instantiates database connection - once 'item' is loaded then starts the connection
      $req = $db->query('SELECT * FROM product');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $product) { //NEED TO CHAANGE FETCH ALL
        $list[] = new Product($product['id'], $product['name'], $product['price']);
      }
      return $list;
    }

    public static function find($id) { 
      $db = Db::getInstance(); //Connects to database through already established connection
      //use intval to make sure $id is an integer
      $id = intval($id); //validates that ID is actually an integer - returns integer value of the variable
      $req = $db->prepare('SELECT * FROM product WHERE id = :id'); //where ID matches - returns all values
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id)); //array of results
      $product = $req->fetch(); //assigns results to product
if($product){ //if Product exists create new class
      return new Product($product['id'], $product['name'], $product['price']); //AMEND as not testing for anything useful 
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here'); //AMEND to 'product does not exist etc.'
    }
    }

public static function update($id) { 
    $db = Db::getInstance(); 
    $req = $db->prepare("Update product set name=:name, price=:price where id=:id"); //prepare statement 
    $req->bindParam(':id', $id); //binds $ID to ID column
    $req->bindParam(':name', $name); //binds $name to name column
    $req->bindParam(':price', $price); //binds $price to price column
    
    //binding allows the variable to be used rathr than retyping prepare statement each time

// set name and price parameters and execute
    if(isset($_POST['name'])&& $_POST['name']!=""){ //{!= 'not' i.e. is not equal to something}. Therefore post cannot be empty.
        $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS); //validation of post i.e. not using SELECT*FROM as a name
    }
    if(isset($_POST['price'])&& $_POST['price']!=""){
        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$name = $filteredName;
$price = $filteredPrice;
$req->execute();

//upload product image if it exists - enabling us to update the image
        if (!empty($_FILES[self::InputKey]['name'])) { //Self refers to itself in the class
		Product::uploadFile($name); //If the superglobal file is not empty, then assign constant inputkey name
	} //Product::uploadFile is calling upon uploadfile function and does the error checking
        
    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into product(name, price) values (:name, :price)");
    $req->bindParam(':name', $name);
    $req->bindParam(':price', $price);

// set parameters and execute
    if(isset($_POST['name'])&& $_POST['name']!=""){
        $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['price'])&& $_POST['price']!=""){
        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$name = $filteredName;
$price = $filteredPrice;
$req->execute();

//upload product image
Product::uploadFile($name);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader'; //linked to the 'myuploader' form - knows where to get file from

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $name) {//DELETE string to remove error, replace with Regex or if statement

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) { //if error code is more than 0 then is an error
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/"; //AMEND to folder structure
	$destinationFile = $path . $name . '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}
public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM product WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
}
}
?>