function ActSave(nameFile = false){

    //  Коичество элементов с таким классом
    var numOfStrings = $(".flag-text").length;

    // массив содержащий контент всех тегов с .flag-text
    var arrStrings = [];

    // Имя файла в который будет производится запись
    var nameFile = $('#namePlaylist').text();
    
    // Заполнение массива
    for(var i = 0; i < numOfStrings+100; i ++){

        var textoneLine = $('.text-' + (i + 1)).text();

        arrStrings[i] = textoneLine;
    }
    
    var json = JSON.stringify(arrStrings);
    
    $.ajax({
        url: "ScriptsPHP/EditFile.php",
        type: "post",
        data: {'json' : json, 'nameFille' : nameFile},
    datatype: 'json',
        success: function(data){

            // console.log(data);
            
        },
        error:function(){
            // TO DO
            alert('Error!');
        }   
    });
};

$(document).on('click',"#btn-save", function(){
    
    ActSave();
    // sleep(200);
    location.reload();
});