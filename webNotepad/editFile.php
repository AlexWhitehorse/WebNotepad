<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once 'config.php';

// qerry($_POST['nameChannel']);
$data = $_POST;

// Reading the file
if($data){

    $patchToFile = $directory . '/' . $data['nameFile'];
    
    $fd = fopen($patchToFile, 'w') or die("не удалось создать файл");
    $str = $data['text'];
    fwrite($fd, $str);
    fclose($fd);
    
}


?>