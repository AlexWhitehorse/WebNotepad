$(document).on('click',".deliteF", function(){

    
    var nameFile = $(this).attr('id');

    var question = "Удалить файл " + nameFile + "?";

    result = confirm(question);

    if(result)
    {

        $.ajax({
            url: "ScriptsPHP/DeleteFile.php",
            type: "post",
            data: {'nameFile' : nameFile},
        datatype: 'json',
            success: function(data){

                console.log(data);
                location.reload();
                
            },
            error:function(){
                // TO DO
                alert('Error!');
            }   

        
        });
    };
    // console.log(nameFile);

});