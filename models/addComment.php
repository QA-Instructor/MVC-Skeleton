<?php

class addComment {

    // we define 3 attributes
    public $commentID;
    public $postID;
    public $title;
    public $publishedAt;
    public $postComment;
    public $visitorID;

    public function __construct($commentID, $postID, $title, $publishedAt, $postComment, $visitorID) {
        $this->commentID = $commentID;
        $this->postID = $postID;
        $this->title = $title;
        $this->publishedAt = $publishedAt;
        $this->postComment = $postComment;
        $this->visitorID = $visitorID;
    }

    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into comment_table(postID, title, publishedAt, postComment, visitorID) values (:postID, :title, :publishedAt, :postComment, :visitorID)");
        $req->bindParam(':postID', $postID);
        $req->bindParam(':title', $title);
        $req->bindParam(':publishedAt', $publishedAt);
        $req->bindParam(':postComment', $postComment);
        $req->bindParam(':visitorID', $visitorID);

    
// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['postComment']) && $_POST['postComment'] != "") {
            $filteredComment = filter_input(INPUT_POST, 'postComment', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $postComment = $filteredComment;
        $req->execute();

//upload product image
        //Product::uploadFile($name);
    //}

    
//    
//        
//    public static function all() {
//        $list = [];
//        $db = Db::getInstance();
//        $req = $db->query('SELECT * FROM product');
//        // we create a list of Product objects from the database results
//        foreach ($req->fetchAll() as $product) {
//            $list[] = new Product($product['id'], $product['name'], $product['price']);
//        }
//        return $list;
//    }
//
//    public static function find($id) {
//        $db = Db::getInstance();
//        //use intval to make sure $id is an integer
//        $id = intval($id);
//        $req = $db->prepare('SELECT * FROM product WHERE id = :id');
//        //the query was prepared, now replace :id with the actual $id value
//        $req->execute(array('id' => $id));
//        $product = $req->fetch();
//        if ($product) {
//            return new Product($product['id'], $product['name'], $product['price']);
//        } else {
//            //replace with a more meaningful exception
//            throw new Exception('A real exception should go here');
//        }
//    }
//
//    public static function update($id) {
//        $db = Db::getInstance();
//        $req = $db->prepare("Update product set name=:name, price=:price where id=:id");
//        $req->bindParam(':id', $id);
//        $req->bindParam(':name', $name);
//        $req->bindParam(':price', $price);
//
//// set name and price parameters and execute
//        if (isset($_POST['name']) && $_POST['name'] != "") {
//            $filteredName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        if (isset($_POST['price']) && $_POST['price'] != "") {
//            $filteredPrice = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        $name = $filteredName;
//        $price = $filteredPrice;
//        $req->execute();
//
////upload product image if it exists
//        if (!empty($_FILES[self::InputKey]['name'])) {
//            Product::uploadFile($name);
//        }
//    }
//
// 
//    const AllowedTypes = ['image/jpeg', 'image/jpg'];
//    const InputKey = 'myUploader';
//
////die() function calls replaced with trigger_error() calls
////replace with structured exception handling
//    public static function uploadFile(string $name) {
//
//        if (empty($_FILES[self::InputKey])) {
//            //die("File Missing!");
//            trigger_error("File Missing!");
//        }
//
//        if ($_FILES[self::InputKey]['error'] > 0) {
//            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
//        }
//
//
//        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
//            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
//        }
//
//        $tempFile = $_FILES[self::InputKey]['tmp_name'];
//        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
//        $destinationFile = $path . $name . '.jpeg';
//
//        if (!move_uploaded_file($tempFile, $destinationFile)) {
//            trigger_error("Handle Error");
//        }
//
//        //Clean up the temp file
//        if (file_exists($tempFile)) {
//            unlink($tempFile);
//        }
//    }
//
//    public static function remove($id) {
//        $db = Db::getInstance();
//        //make sure $id is an integer
//        $id = intval($id);
//        $req = $db->prepare('delete FROM product WHERE id = :id');
//        // the query was prepared, now replace :id with the actual $id value
//        $req->execute(array('id' => $id));
//    }
//
//}
//
//
    }
}