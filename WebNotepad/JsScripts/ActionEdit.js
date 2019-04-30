
function ActEdit(nameFile = false){

    $.ajax({
        url: "ScriptsPHP/getContainsFile.php",
        type: "post",
        data: {'nameFile' : nameFile},
    datatype: 'json',
        success: function(data){

            var json = $.parseJSON(data);   
            
            $('#namePlaylist').text(nameFile);

            if(json != '[]'){

                // Очистка содержимого тега
                $('#tbody_text').text('');

                for(var i = 0; i < json.length; i ++){

                    var oneLine = json[i];
                    
                    $('#tbody_text').append(''+
                        '<tr class="" id="num-row-' + (Number(i)+1) + '">' +
                            '<th scope="row">' + (Number(i)+1) + '</th>' +
                            '<td class="flag-text text-'+(Number(i)+1)+'">'+ oneLine +'</td>' +
                            '<td><button class="btn btn-primary stl-btns btn-choise" id="choise-'+(Number(i)+1)+'">Выбрать</button></td>' +
                            '<td><button class="btn btn-secondary stl-btns btn-add-row" id="row-' + (Number(i)+1) + '">+</button></td>' +
                            '<td><button class="btn btn-danger stl-btns btn-delete" id="del-' + (Number(i)+1) + '">Удалить</button></td>' +
                        '</tr>');

                }
            }else{
                // TO DO
            }
        },
        error:function(){
            // TO DO
            alert('Error!');
        }   

    });

};
$(document).ready(function() {
    $(document).on('click',".btnEditing", function(){

        var nameFile = $(this).attr('id');

        ActEdit(nameFile);

        $('#output').css({'visibility':'collapse'});
        $('#input').css({'visibility':'visible'});
    });
});