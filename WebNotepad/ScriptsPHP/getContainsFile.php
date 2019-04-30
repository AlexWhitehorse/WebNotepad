<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once '../config.php';

// qerry($_POST['nameChannel']);
$data = $_POST;

// Reading the file
if($data){

    $patchToFile = PATH_TO_FOLDER . "/" .  $data['nameFile'];

    $file_array = file($patchToFile);

    $json = json_encode($file_array);
    
    echo($json);
}
else{
    echo('Error - 02');
}

?>