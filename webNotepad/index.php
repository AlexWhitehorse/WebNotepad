<?php
    

    include_once 'config.php';
?>


<?php

    if(isset($_COOKIE['password']) == LOGIN & isset($_COOKIE['login']) == PASSWORD){
        include_once 'choiseFile.php';
    }
    else{
        ?>
            <div class="container">
            <div class="row">
                <form action="autorisation.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя пользователя</label>
                        <input type="login" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите имя пользователя">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- <input type="name" name="name" class="form-control" id="Inputlogin" aria-describedby="emailHelp" placeholder="Введите имя пользователя">
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Пароль">
                <button type="submit" id="submitAutorisation" class="btn btn-primary">Submit</button> -->


                <script src="dependances/jquery-3.3.1.min.js"></script>
                <script src="dependances/bootstrap.js"></script>
                <script src="scripts/processingForm.js"></script>
            </div>
        </div>

        <?php


    }
?>
