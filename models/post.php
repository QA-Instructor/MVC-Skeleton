<?php

class Post {

//    attributes
    private $postID;
    private $memberID;
    private $title;
    private $category;
    private $datePosted;
    private $dateUpdated;
    private $excerpt;

//    constructor
    public function __construct($postID, $memberID, $title, $category, $datePosted, $dateUpdated, $excerpt) {
        $this->postID = $postID;
        $this->memberID = $memberID;
        $this->title = $title;
        $this->categoryID = $category;
        $this->datePosted = $datePosted;
        $this->dateUpdated = $dateUpdated;
        $this->excerpt = $excerpt;
    }
    
    
//    getters
    public function getPostID() {
        return $this->postID;
    }
    public function getMemberID() {
        return $this->memberID;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getCategoryID() {
        return $this->categoryID;
    }
    public function getDatePosted() {
        return $this->datePosted;
    }
    public function getDateUpdated() {
        return $this->dateUpdated;
    }
    public function getExcerpt() {
        return $this->excerpt;
    }
    
    
 //    setters
    public function setPostID($postID) {
        $this->postID = $postID;
    }
    public function setMemberID($memberID) {
        $this->memberID = $memberID;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function setCategoryID($categoryID) {
        $this->category = $categoryID;
    }
    public function setExcerpt($excerpt) {
        $this->excerpt = $excerpt;
    }   
    
    
    
    
    
    
    

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM post');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['postID'], $post['memberID'], $post['title'], $post['category'], $post['datePosted'], $post['dateUpdated'], $post['excerpt']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM post WHERE postID = :id');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        if ($post) {
            return new Post($post['postID'], $post['memberID'], $post['title'], $post['category'], $post['datePosted'], $post['dateUpdated'], $post['excerpt']);
        } else {
            //replace with a more meaningful exception
            throw new Exception('A real exception should go here');
        }
    }

    public static function update($id) {
        $db = Db::getInstance();
        $req = $db->prepare("Update post set title=?, category=?, dateUpdated=CURDATE(), excerpt=? where postID=?");


// set name and price parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['category']) && $_POST['category'] != "") {
            $filteredCategory = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['excerpt']) && $_POST['excerpt'] != "") {
            $filteredExcerpt = filter_input(INPUT_POST, 'excerpt', FILTER_SANITIZE_STRING);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
        }
        $title = $filteredTitle;
        $category = $filteredCategory;
        $excerpt = $filteredExcerpt;
        $req->execute([$title, $category, $excerpt, $id]);

        $file = "C:/xampp/htdocs/MVC/MVC-Skeleton/views/blogs/{$id}.txt";
        if (!empty($_POST)) {
            $newcontent = $_POST['content'];
            if (is_file($file)) {
                file_put_contents($file, $newcontent);
            }
        }


//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['title'])) {
            Post::uploadFile($title);
        }
    }

    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into post(memberID, title, category, datePosted, excerpt) values (?, ?, ?, CURDATE(), ?)");

// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['category']) && $_POST['category'] != "") {
            $filteredCategory = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['excerpt']) && $_POST['excerpt'] != "") {
            $filteredExcerpt = filter_input(INPUT_POST, 'excerpt', FILTER_SANITIZE_STRING);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
        }
        $memberID = 1;
        $title = $filteredTitle;
        $category = $filteredCategory;
        $excerpt = $filteredExcerpt;
        $req->execute([$memberID, $title, $category, $excerpt]); //this means there's a new entry
        $postID = $db->lastInsertID();

        //Make another query to the database to get the postID of the most recent post where the title matches the submitted title.
//        $db = Db::getInstance();
//        $req = $db->prepare("SELECT postID FROM post WHERE title = ? ORDER BY postID DESC LIMIT 1");
//        $req->execute([$_POST['title']]);  
//        $post = $req->fetch();    

        if (isset($_POST) && isset($postID)) { //checks if form is submitted and previous query was successful
            $file = "C:/xampp/htdocs/MVC/MVC-Skeleton/views/blogs/{$postID}.txt"; //declare file path
            $content = $_POST['content']; //set $content to be the value submitted in the content text box from the form
            if (!is_file($file)) { // check if declared file exists
                file_put_contents($file, $content); //store content from form into declared file
            }
        }

//upload product image
        Post::uploadFile($title);
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFile(string $postID) {

        if (empty($_FILES[self::InputKey])) {
            //die("File Missing!");
            trigger_error("File Missing!");
        }

        if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[self::InputKey]['error']);
        }


        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }

        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "C:/xampp/htdocs/MVC/MVC-Skeleton/views/images/";
        $destinationFile = $path . $postID . '.jpeg';

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
        $req = $db->prepare('delete FROM post WHERE postID = :id');
        // the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
    }

}

?>