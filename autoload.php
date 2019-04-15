<?php

//    spl_autoload_register(function($Name) {
//    $filePath = "$Name.php";
//    $macFilePath = str_replace('\\', '/', $filePath);
//    require_once '../' . $macFilePath;   
//    });

spl_autoload_register(function ($class_name) {
    // $class_name = Library\Users\Guest
    $file_path = "$class_name.php";
    // $file_path = Library\Users\Guest.php
    $file_path = str_replace('\\', '/', $file_path);
    // $file_path = Library/Users/Guest.php
    
    if (file_exists($file_path)) {
        include $file_path;//if file with autoload is run from the root directory (Source Files)
    } else {
        $file_path = "../../$file_path";//if file with autoload is run from Test Files directory
        if (file_exists($file_path)) {
            include $file_path;
        } else {
            echo "$class_name not found";
        }
    }
});