<?php  

class newPost {

    // Define attributes - missing postImage
    public $postID;
    public $blogID;
    public $categoryID;
    public $title;
    public $publishedAt;
    public $content;

    public function __construct($postID, $blogID, $categoryID, $title, $publishedAt, $content) {
        $this->postID = $postID;
        $this->blogID = $blogID;
        $this->categoryID = $categoryID;
        $this->title = $title;
        $this->publishedAt = $publishedAt;
        $this->content = $content;
    }
    
public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into post_table(title, publishedAt, content) values (:title, :publishedAt, :content)");
        $req->bindParam(':title', $title);
        $req->bindParam(':publishedAt', $publishedAt);
        $req->bindParam(':content', $content);
        
        
// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $content = $filteredContent;
        $req->execute();

//upload product image
        newPost::uploadFile($postID);
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'myUploader';

    //die() function calls replaced with trigger_error() calls
    //replace with structured exception handling
    public static function uploadFile(string $imageName) {

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
        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
	$destinationFile = $path . $imageName . $_FILES[self::InputKey]['type']; //. '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}
    
    }