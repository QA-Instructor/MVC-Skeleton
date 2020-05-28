<?php

class blogPost {

    // Define attributes - missing postImage
    public $postID;
    public $blogID;
    public $categoryID;
    public $title;
    public $publishedAt;
    public $content;
    public $postImage;

    public function __construct($postID, $blogID, $categoryID, $title, $publishedAt, $content, $postImage) {
        $this->postID = $postID;
        $this->blogID = $blogID;
        $this->categoryID = $categoryID;
        $this->title = $title;
        $this->publishedAt = $publishedAt;
        $this->content = $content;
        $this->postImage = $postImage;
    }

    //add a post into the database
    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into post_table(blogID, categoryID, title, publishedAt, content, postImage) values (:blogID, :categoryID, :title, :publishedAt, :content, :postImage)");
        $req->bindParam(':blogID', $blogID);
        $req->bindParam(':categoryID', $categoryID);
        $req->bindParam(':title', $title);
        $req->bindParam(':publishedAt', $publishedAt);
        $req->bindParam(':content', $content);
        $req->bindParam(':postImage', $postImage);

// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if (isset($_POST['categoryID']) && $_POST['categoryID'] != "") {
            $filteredcategoryID = filter_input(INPUT_POST, 'categoryID', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $blogID = 1;
        $categoryID = $filteredcategoryID;
        $title = $filteredTitle;
        $publishedAt = date("d-m-y");
        $content = $filteredContent;
        $req->execute();

        //to enable a 'published at' date and time
        $lastid = $db->lastInsertId();
        $postString = 'postNo' . $lastid;
        //need to change date(...) to do date and time so we can get rid of query below
        $req = $db->query("UPDATE post_table SET publishedAt = now() WHERE postID=$lastid");

//upload post image to images directory and store filename in database
        $postImage = blogPost::uploadFile($postString);
        $req = $db->prepare("UPDATE post_table SET postImage = :postImage WHERE postID=$lastid"); 
        $req->bindParam(':postImage', $postImage);
        $req->execute();
}

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'myUploader';

    //die() function calls replaced with trigger_error() calls
    //replace with structured exception handling
    public static function uploadFile(string $postString) {
        
        $success = NULL;
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
        //Updated file path option
        $path = dirname(__DIR__) . "\\views\images\\";
        list($txt, $ext) = explode("/",$_FILES[self::InputKey]['type'] );
//        $ext = ".php";
//        $fullpath = $path . $className . $ext;
//        include_once $fullpath;

        //mac path
//        $path = "https://Applications/xampp/htdocs/MVC_Skeleton/views/images/";
        //pc path
//        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
//        
//      $destinationFile = $path . $name . '.jpeg';
        $destinationFile = $path . $postString .".".$ext;//$_FILES[self::InputKey]['type'];

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }
        else{
            $success = $postString.".".$ext;
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
        return $success;
    }
    
//read all the post data from the database
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM post_table');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $posts) {
            $list[] = new blogPost($posts['postID'], $posts['blogID'], $posts['categoryID'], $posts['title'], $posts['publishedAt'], $posts['content'], $posts['postImage']);
        }
        return $list;
    }

}
