<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    
    include_once 'config.php';
    
    // To get names filles in directory
    $filesDir = scandir($directory);

    if($filesDir){

        $json = json_encode($filesDir);
        
    }else{ 

        print("Error! - 115");
    }
    
    print_r($json);



?>