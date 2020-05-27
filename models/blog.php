
<?php
  class blog { 

    // we define 3 attributes
    public $blogID;
    public $adminID; //finish this
    public $categoriesID;
    public $countryID;
    public $title;
    public $body;
    public $blogDate;
    

    public function __construct($blogID, $adminID, $categoriesID, $countryID, $title, $body, $blogDate) { //pass all in
      $this->blogID    = $blogID; //pass all in
      $this->adminID  = $adminID;
      $this->categoriesID = $categoriesID;
       $this->countryID = $countryID;
        $this->title = $title;
         $this->body = $body;
         $this->blogDate = $blogDate;
    }

    public static function all() {
      $list = [];
      // this part under is just instansiating the connector to make the connection between the database-DB class in connection.php
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM blog'); //change
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $blog) { //change to blog
        $list[] = new Blog($blog['blogID'], $blog['adminID'], $blog['categoriesID'], $blog['countryID'], $blog['title'], $blog['body'], $blog['blogDate']);
      }
      return $list; //come back to make it only show body and title and blog date.
    }

    public static function find($blogID) { //replace with field name
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $blogID = intval($blogID); //I NEED TO CHECK THIS
      $req = $db->prepare('SELECT * FROM blog WHERE blogID = :blogID'); //change all id
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('blogID' => $blogID)); //change
      $blog = $req->fetch();
if($blog){ //change
      return new Blog($blog['blogID'], $blog['adminID'], $blog['categoriesID'], $blog['countryID'], $$blog['title'], $blog['body'], $blog['blogDate']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('this blog does not exist'); //feel free to change
    }
    }
    
    
    //changed until this point
    //change the below, still victorias code.

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update product set name=:name, price=:price where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':name', $name);
    $req->bindParam(':price', $price);

// set name and price parameters and execute
    if(isset($_POST['name'])&& $_POST['name']!=""){
        $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['price'])&& $_POST['price']!=""){
        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$name = $filteredName;
$price = $filteredPrice;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['name'])) {
		Product::uploadFile($name);
	}

    }
    //add product when you run blog and you see ad product its this 
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blog(title, body, blogDate, description) values (:title, :body, :blogDate, :description)");
    $req->bindParam(':title', $title);
    $req->bindParam(':body', $body);
    $req->bindParam(':descrption', $description);
    $req->bindParam(':date', $date);
       
// set parameters and execute
    
    //model communicates wtith the database
    
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredName = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['price'])&& $_POST['price']!=""){
        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$name = $filteredName;
$price = $filteredPrice;
$req->execute();
//executes the query
//all this is making sure that if someone writes a name and it isn't empty then post to database
//everytime someone created a new prodicut its assigning name variable to filtered name
//upload product image
Product::uploadFile($name); //link to add as the code is enabling them to upload pics and error handlers are here look below
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $name) {

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/htdocs/MVC_Skeleton/views/images/";
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
?>