<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    
    include_once '../config.php';

    $outArr = array();
    
    // To get names filles in directory
    $filesDir = scandir(PATH_TO_FOLDER);

    // Находит файлы с нужным расширением
    for($i = 2; $i < count($filesDir); $i++){

        $numOfElems = count(TEXT_EXTENSIONS); 

        // Сравнивает форматы с конфига и найденные в директории
        for($j = 0; $j < $numOfElems; $j++){

            $numOfSmbls = iconv_strlen(TEXT_EXTENSIONS[$j]);

            if(substr($filesDir[$i], ($numOfSmbls*(-1)) ) == TEXT_EXTENSIONS[$j])
                $outArr[] = $filesDir[$i];
                
        }
    }
    // print_r($outArr);

    if($outArr){

        $json = json_encode($outArr);
        
    }else{ 

        print("Error! - 115");
    }
    
    print_r($json);
?>