<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once '../config.php';

$data = $_POST;

// $str = '["sdvdfbk\n","adfbmadf;bm\n","adf;lbmad;fb\n","ad;lfmbakldnb\n","AVNASJDBV"]';

// Writing into file
if($data){

    $text = $data['json'];

    $fileName = $data['nameFille'];

    $pathToFile = PATH_TO_FOLDER . $fileName;

    $fp = fopen($pathToFile, "w");

    $decode = json_decode($text);

    for($i = 0; $i < count($decode); $i++)
    {
        $str = $decode[$i];

        $test = fwrite($fp, $str); // Запись в файл
        
    }

    if ($text) echo 'Данные в файл успешно занесены.';
    else echo 'Ошибка при записи в файл.';

    fclose($fp); //Закрытие файла
}
else{
    echo('Error - 03');
}

?>