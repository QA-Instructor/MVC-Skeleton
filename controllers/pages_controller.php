<?php

//namespace controllers;

//include "autoload.php";
    
//    spl_autoload_register(function($Name) {
//        $filePath = "$Name.php";
//        $macFilePath = str_replace('\\', '/', $filePath);
//        require_once '../' . $macFilePath;   
//    });
    
   
class PagesController {
  
    
    public function landing() {
      require_once('views/pages/landing.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
}
//}