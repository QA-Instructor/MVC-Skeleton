<?php
class Map {

    public $latitude;
    public $longitude;
    
    public function __construct($latitude, $longitude) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        
    }

    public static function coordinates($id) {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT map.latitude, map.longitude FROM map INNER JOIN article ON article.map_id=map.map_id WHERE article.article_id = :id ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $coordinates = $req->fetch();
        return new Map($coordinates['latitude'], $coordinates['longitude']);
        
    }

}

