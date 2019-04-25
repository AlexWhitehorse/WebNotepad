<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактор</title>

    <!-- Styles -->

    <!-- Bootstrap -->
    <!-- <style type="text/css" src="dependances/bootstrap.css"></style> -->
    <link rel="stylesheet" type="text/css" href="dependances/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/choiseFile.css">
    <!-- <style type="text/css" src="styles/choiseFile.css"></style> -->
    <!-- ----------------------- -->

</head>
<body>
    <div class="container header rounded-bottom">
        <div class="row">
           
            <div class="col-sm-4">
        
                <button type="button" class="btn btn-primary btn-group buttons" role="group" id="reloadDoc"> Список Файлов </button>
                <button type="button" class="btn btn-secondary btn-group buttons" role="group" id="AddFile"> Добавить файл </button>
        
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
                        <!-- js -->
                    </tbody>
                    
                </table>

            </div>
        </div>
    </div>

    <div class="container margings out rounded" id="input">
        <div class="row paddings-top">

            <div class="blockInput">Редактирование:  <span class="labelTextArea"></span></div>
            <!-- <label class="blockInput" for="exampleFormControlTextarea1"></label> -->

            <button type="submit" id="SaveFile" class="saveFile d-flex btn btn-success buttons">Сохранить</button>

            <textarea class="form-control" id="TextArea" rows="20"></textarea>

        </div>
    </div>


</body>
    <!-- scripts -->
    <script src="dependances/jquery-3.3.1.min.js"></script>
    <script src="dependances/bootstrap.js"></script>
    <script src="scripts/outListFiles.js"></script>
    <script src="scripts/btnEditing.js"></script>
    <script src="scripts/saveFile.js"></script>
    <script src="scripts/reloadPage.js"></script>
    <script src="scripts/addFile.js"></script>
    <script src="scripts/deliteFile.js"></script>



    <!-- ----------------------- -->
</html>