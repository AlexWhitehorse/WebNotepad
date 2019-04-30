$(document).on('click',".btn-add-row", function(){

    // Получить порядковый номер строки
    try{

        var numFile = this.id.match(/\d+/)[0];

    }catch (TypeError){
        
        var numOfStrings = $(".flag-text").length;

        if(numOfStrings == 0){

            var numFile = 1;

            $('#tbody_text').append('<tr id="num-row-1" class="d-none">' +
                    '<th scope="row">0</th>' +
                    '<td></td>' +
                    '<td></td>' +
                    '<td><button class="btn-add-row">+</button></td>' +
                    '<td></td>' +
                '</tr>');

        }else{

            var numFile = numOfStrings;
            
        }
    };

    // console.log(numFile);
    // Имя файла в который будет производится запись
    var nameFile = $('#namePlaylist').text();
    
    $('#num-row-'+ numFile).after('<tr class="" id="num-row-' + (Number(numFile)+1) + '">'+
        '<th scope="row">' + (Number(numFile)+1) + '</th>' +
        '<td class="flag-text text-'+(Number(numFile)+1)+'">\n</td>' +
        '<td><button class="btn-choise" id="choise-'+(Number(numFile)+1)+'">Выбрать</button></td>' +
        '<td><button class="btn-add-row" id="row-' + (Number(numFile)+1) + '">+</button></td>' +
        '<td><button class="btn-delete" id="del-' + (Number(numFile)+1) + '">Удалить</button></td>' +
    '</tr>');

    ActSave();
    sleep(100);
    ActEdit(nameFile);

});
