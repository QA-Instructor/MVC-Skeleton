
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

        public static function find($blogID) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $blogID = intval($blogID);
      $req = $db->prepare('SELECT * FROM blog WHERE blogID = :blogID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('blogID' => $blogID));
      $blog = $req->fetch();
if($blog){
      return new Blog($blog['blogID'], $blog['adminID'], $blog['categoriesID'], $blog['countryID'], $blog['title'], $blog['body'], $blog['blogDate']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('Could not find blog');
    }
    }

    
    
    //changed until this point
    //change the below, still victorias code.

public static function update($blogID) {
    $db = Db::getInstance();
    $req = $db->prepare("Update blog set title=:title, body=:body where blogID=:blogID");
    $req->bindParam(':blogID', $blogID);
    $req->bindParam(':title', $title);
    $req->bindParam(':body', $body);

// set name and price parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['body'])&& $_POST['body']!=""){
        $filteredBody = filter_input(INPUT_POST,'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredTitle;
$body = $filteredBody;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['title'])) {
		Blog::uploadFile($title);
	}

    }
    //add product when you run blog and you see ad product its this 
    
    public static function add() { //create
    $db = Db::getInstance();
    $req = $db->prepare("Insert into blog(title, body) values (:title, :body)");
    $req->bindParam(':title', $title);
    $req->bindParam(':body', $body);

// set parameters and execute
    
    //model communicates wtith the database
    
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['body'])&& $_POST['body']!=""){
        $filteredBody = filter_input(INPUT_POST,'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredTitle;
$body = $filteredBody;
$req->execute();
//executes the query
//all this is making sure that if someone writes a name and it isn't empty then post to database
//everytime someone created a new prodicut its assigning name variable to filtered name
//upload product image
Blog::uploadFile($title); //link to add as the code is enabling them to upload pics and error handlers are here look below
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $title) {

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
        $path = "views/images/";
	$destinationFile = $path . $title . '.jpeg';

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