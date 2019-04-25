$(document).on('click',".nameFile", function(){

    var nameFile = $(this).attr('id');

    // console.log(nameFile);

    $.ajax({
        url: "openFile.php",
        type: "post",
        data: {'nameFile' : nameFile},
    datatype: 'json',
        success: function(data){

            // console.log(data);

            $('#TextArea').text(data);
            $('.labelTextArea').text(nameFile);

            $('#input').css({'display': 'block'});
            $('#output').css({'display': 'none'});
            
        },
        error:function(){
            // TO DO
            alert('Error!');
        }   

    
    });

});
