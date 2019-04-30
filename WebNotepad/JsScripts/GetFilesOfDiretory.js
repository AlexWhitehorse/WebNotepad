// Вывод содержимого папкм на сервере
$(document).ready(function(){

    $.ajax({
        // url: "ScriptsPHP/GetAllFiles.php",
        url: "ScriptsPHP/GetTextFiles.php",
        type: "post",
        data: 'none',
    datatype: 'json',
        success: function(data){

            var json = $.parseJSON(data);

                for(var i = 0; i < json.length; i ++){
                oneElem = json[i];
                
                $('#tbody').append(''+
                '<tr>' +
                    '<th scope="row">' + (Number(i) +1) + '</th>' +
                    '<td id="">' + oneElem + '</td>' +
                    '<td><button id="' + oneElem + '" class="btnEditing btn btn-primary buttons">Редактировать</button></td>' +
                    '<td><button class="btn btn-danger buttons deliteF" id="' + oneElem + '">Удалить</button></td>' +
                '</tr>'+
                '');
            };

        },
        error:function(){
            // TO DO
            alert('Error!');
        }   
    });
});