<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once 'config.php';

// qerry($_POST['nameChannel']);
$data = $_POST;

// Reading the file
if($data){

    // print_r($data['nameFile']);

    $patchToFile = $directory . '/' . $data['nameFile'];

    $fp = fopen($patchToFile, 'r');

    if ($fp) 
    {

        while (!feof($fp))
        {

            $mytext = fgets($fp);

            echo($mytext);

            // echo('<br>');
        }

    }else{

        echo('Error - 111!');
}

}else{
    echo("Error! - 112");
}



?>