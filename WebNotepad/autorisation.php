<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once 'config.php';

// Если имя и пароль совпадают с прописанными, то сохраняет в кукм и
// перенаправляет на главную
if($_POST['login'] == LOGIN & $_POST['password'] == PASSWORD)
    {
    
    echo('Sucsess');

        setcookie("password", PASSWORD, time()+7600);
        setcookie("login", LOGIN, time()+7600);

    }
    else{

        echo('error');
    }

    // header("Location: /WebNotepad/webNotepad//index.php");

    // Перенаправление на главную после ввода полей
    header("Location: ../WebNotepad/index.php");
    exit;
?>
