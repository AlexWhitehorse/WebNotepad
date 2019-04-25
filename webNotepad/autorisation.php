
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once 'config.php';

print_r($_POST['password'], $_POST['login']);



if($_POST['login'] == LOGIN & $_POST['password'] == PASSWORD)
    {
        
    print_r($_COOKIE);
    echo('Sucsess');

        setcookie("password", PASSWORD, time()+7600);
        setcookie("login", LOGIN, time()+7600);

    }
    else{
        echo('error');
    }

    header("Location: /WebNotepad/webNotepad//index.php");
    exit;

?>