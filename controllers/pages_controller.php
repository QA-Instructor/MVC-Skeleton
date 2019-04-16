<?php

namespace controllers{

include "autoload.php";
    
//    spl_autoload_register(function($Name) {
//        $filePath = "$Name.php";
//        $macFilePath = str_replace('\\', '/', $filePath);
//        require_once '../' . $macFilePath;   
//    });
    
   
    
class PagesController {
   
    public function home() {
      //example data to use in the home page
      $first_name = 'Lisa';
      $last_name  = 'Simpson';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
}
}