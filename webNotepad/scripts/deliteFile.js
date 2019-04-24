$(document).on('click',".deliteF", function(){

    var question = "Подтвердить?";

    result = confirm(question);

    var nameFile = $(this).attr('id');

    if(result)
    {

        $.ajax({
            url: "deliteFile.php",
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
    console.log(nameFile);

});