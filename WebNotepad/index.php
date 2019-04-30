<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once 'config.php';

if(isset($_COOKIE['password']) != LOGIN & isset($_COOKIE['login']) != PASSWORD)
{
    
    include_once 'pageLogining.html';
    print_r($_COOKIE);

}
else if(isset($_COOKIE['password']) == LOGIN & isset($_COOKIE['login']) == PASSWORD)
{
?>
<!-- ------------------------------------------------------------ -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2.0 Редактор</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="Dependances/bootstrap.css">

    <link rel="stylesheet" href="Styles/style.css">
</head>

<body>
<div class="container header rounded-bottom">
        <div class="row">
           
            <div class="col-sm-4">
        
                <button type="button" class="stl-btns btn btn-primary btn-group buttons" role="group" id="reloadDoc"> На главную </button>
                <button type="button" class="stl-btns btn btn-secondary btn-group buttons" role="group" id="AddFile"> Добавить файл </button>
        
            </div>
           
        </div>
    </div>

    <div class="container margings out rounded" id="output">
        <div class="row">
            <div class="col-sm-12">
                <table class="table">

                    <thead>

                        <tr>
                            <th scope="col-sm-1">#</th>
                            <th scope="col-sm-9">Имя Файла</th>
                            <th scope="col-sm-1">Изменить</th>
                            <th scope="col-sm-1">Удалить</th>
                        </tr>
                    </thead>

                    <tbody id="tbody">
                    <!-- '<tr>
                    '<th scope="row">' + (Number(i)-1) + '</th>' +
                    '<td id="">' + oneElem + '</td>' +
                    '<td><button id="' + oneElem + '" class="btnEditing btn btn-primary buttons">Редактировать</button></td>' +
                    '<td><button class="btn btn-danger buttons deliteF" id="' + oneElem + '">Удалить</button></td>' + -->
                <!-- '</tr>'+ -->
                        
                    </tbody>
                    
                </table>

            </div>
        </div>
    </div>
    <!-- ---------------------------------- -->
    <div id="listFiles">
        <div class="popup">
            <div class="container">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col-sm-1">#</th>
                                <th scope="col-sm-9">Имя Файла</th>
                                <th scope="col-sm-1">Добавить</th>
                                <th scope="col-sm-1"><button id="btn-close">Х</button></th>
                            </tr>
                        </thead>

                        <tbody id="tbody-list">
                            <tr>
                                <th scope="row">1</th>
                                <td>nameFile</td>
                                <td><button>OK</button></td>


                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- sodisdc <br>
            sdvSDV<br>
            adsbdab<br> -->

        </div>
    </div>

    <div class="container margings out rounded" id="input">
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <p>Редактируемый плейлист: <span class="rounded" id="namePlaylist"></span></p>
                <hr>
                <button id="btn-save" class="d-none">Сохранить</button>
                <button class="btn-add-row stl-btns btn btn-light">Добавить строку в конец</button>
                <table class="table oneFile">

                    <thead>

                        <tr>
                            <th scope="col-sm-1">#</th>
                            <th scope="col-sm-9">Имя Файла</th>
                            <th scope="col-sm-1">Выбрать</th>
                            <th scope="col-sm-1">Добавить строку</th>
                            <th scope="col-sm-1">Удалить</th>
                        </tr>
                    </thead>

                    <tbody id="tbody_text">
                        <!-- <tr id="#num-row-0">
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td><button class="btn-add-row">+</button></td>
                            <td></td>
                        
                        </tr> -->
                    </tbody>
                    
                </table>

            </div>
        </div>
    </div>
    
</body>

    <!-- Jquerry -->
    <script src="Dependances/jquery-3.3.1.min.js" defer></script>
    <!-- My scripts -->
    <script src="JsScripts/GetFilesOfDiretory.js" defer></script>
    <script src="JsScripts/AddFile.js" defer></script>
    <script src="JsScripts/ActionEdit.js" defer></script>
    <script src="JsScripts/ActionSave.js" defer></script>
    <script src="JsScripts/ActionAdd.js" async></script>
    <script src="JsScripts/ActionDelete.js" async></script>
    <script src="JsScripts/ActionChoise.js" defer></script>
    <script src="JsScripts/ActionClose.js" async></script>
    <script src="JsScripts/DeleteFile.js" defer></script>
    <script src="JsScripts/RebootPage.js" async></script>
    <script src="JsScripts/GoTOMainPage.js" async></script>

</html>

<!-- -------------------------------------------------------------- -->
<?php

}else
{
    echo('Error 01');
}
?>

    
