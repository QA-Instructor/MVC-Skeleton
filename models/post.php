<?php

//namespace models{
//include "..\autoload.php";    
//    spl_autoload_register(function($Name) {
//    $filePath = "$Name.php";
//    $macFilePath = str_replace('\\', '/', $filePath);
//    require_once '../' . $macFilePath;   
//    });

class Post {

    // we define 3 attributes
    public $id;
    public $title;
    public $tag;
    public $content;
    public $date;
    public $postImage;
    public $username;

    public function __construct($id, $title, $tag, $content, $date, $postImage, $username) {
        $this->id = $id;
        $this->title = $title;
        $this->tag = $tag;
        $this->content = $content;
        $this->date = $date;
        $this->postImage = $postImage;
        $this->username = $username;
    }

    public static function all() { //All function set into the array
        $list = [];
        $db = Db::getInstance(); //Instantiates database connection - once 'item' is loaded then starts the connection
        $req = $db->query('SELECT p.postID, p.title, p.tagID, p.content, p.date, p.postImage, u.username FROM user
as u
inner JOIN
user_post
as up
on u.userID=up.userID
inner JOIN
post
as p
on up.postID=p.postID');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $blogPost) { //NEED TO CHANGE FETCH ALL
            $list[] = new Post($blogPost['postID'], $blogPost['title'], $blogPost['tagID'], $blogPost['content'], $blogPost['date'], $blogPost['postImage'], $blogPost['username']);
        }
        return $list;
    }


    public static function find($id) {
        $db = Db::getInstance(); //Connects to database through already established connection
        //use intval to make sure $id is an integer
        $id = intval($id); //validates that ID is actually an integer - returns integer value of the variable
        $req = $db->prepare('SELECT p.postID, p.title, p.tagID, p.content, p.date, p.postImage, u.username FROM user as u
inner JOIN
user_post
as UP
on u.userID=up.userID
inner JOIN
post
as p
on up.postID=p.postID WHERE p.postID = :postID'); //where ID matches - returns all values WHERE postID = :postID
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('postID' => $id)); //array of results
        $blogPost = $req->fetch(); //assigns results to product
        if ($blogPost) { //if Post exists create new class
            return new Post($blogPost['postID'], $blogPost['title'], $blogPost['tagID'], $blogPost['content'], $blogPost['date'], $blogPost['postImage'], $blogPost['username']); //AMEND as not testing for anything useful 
        } else {
            //replace with a more meaningful exception
            throw new Exception('A real exception should go here'); //AMEND to 'product does not exist etc.'
        }
    }

    public static function update($id) {
        $db = Db::getInstance();
        $req = $db->prepare("Update post set title=:title, tagID=:tag, content=:content, date=:date, postImage=:postImage where postID=:id"); //prepare statement 
        $req->bindParam(':id', $id); //binds $ID to ID column
        $req->bindParam(':title', $title); //binds $name to name column
        $req->bindParam(':content', $content); //binds $price to price column
        $req->bindParam(':date', $date);
        $req->bindParam(':postImage', $postImage);
        $req->bindParam(':tag', $tag);
        //binding allows the variable to be used rather than retyping prepare statement each time
// set name and price parameters and execute

        if (isset($_POST['title']) && $_POST['title'] != "") { //{!= 'not' i.e. is not equal to something}. Therefore post cannot be empty.
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS); //validation of post i.e. not using SELECT*FROM as a name
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['postImage']) && $_POST['postImage'] != "") {
            $filteredPostImage = filter_input(INPUT_POST, 'postImage', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['tag']) && $_POST['tag'] != "") {
            $filteredTag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_SPECIAL_CHARS);
        }


        $title = $filteredTitle;
        $content = $filteredContent;
        $postImage = $filteredPostImage;
        $tag = $filteredTag;
        $date;

        $req->execute();


//upload product image if it exists - enabling us to update the image
        if (!empty($_FILES[self::InputKey]['title'])) { //Self refers to itself in the class
            Product::uploadFile($title); //If the superglobal file is not empty, then assign constant inputkey name
        } //Product::uploadFile is calling upon uploadfile function and does the error checking
    }

    public static function add($title, $content, $tag) {
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO post (title, tagID, content, postImage) VALUES (:title, :tag, :content, :postImage)"); //prepare statement 
        $req->bindParam(':title', $title); //binds $name to name column
        $req->bindParam(':tag', $tag);
        $req->bindParam(':content', $content); //binds $price to price column
        //print_r($_FILES);
        $path = "views/images/posts/"; //AMEND to folder structure
        $postImage = $path . $title . '.jpeg';
        $req->bindParam(':postImage', $postImage);

// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") { //{!= 'not' i.e. is not equal to something}. Therefore post cannot be empty.
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS); //validation of post i.e. not using SELECT*FROM as a name
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        //    if(isset($_POST['postImage'])&& $_POST['postImage']!=""){
        //    $filteredPostImage = filter_input(INPUT_POST,'postImage', FILTER_SANITIZE_SPECIAL_CHARS);
        //}
        if (isset($_POST['tag']) && $_POST['tag'] != "") {
            $filteredTag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_SPECIAL_CHARS);
        }


        $title = $filteredTitle;
        $content = $filteredContent;
        $tag = $filteredTag;

        $req->execute();

//upload product image

        Post::uploadFile($title);
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'myUploader'; //linked to the 'myuploader' form - knows where to get file from

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling

    public static function uploadFile(string $title) {//DELETE string to remove error, replace with Regex or if statement
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
        //chmod -R 777 images/
        $path = "views/images/posts/"; //AMEND to folder structure
        $destinationFile = $path . $title . '.jpeg'; // CHECK FILE PATH - POTENTIALLY INCORRECT

        $postImage = $path . $title . '.jpeg';

        if (!move_uploaded_file($tempFile, $destinationFile)) { //FIX THIS, NOT WORKING
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
        $req = $db->prepare('delete FROM post WHERE postID = :id');
        // the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
    }

}

//}
?>