$(document).on('click',"#submitAutorisation", function(){

    var login = $('#Inputlogin').val();
    var password = $('#InputPassword').val();

    console.log(login, password);

    $.ajax({
        url: "autorisation.php",
        type: "post",
        data: {'login' : login, 'password' : password},
    datatype: 'json',
        success: function(data){

            console.log(data);
            // location.reload();
            
        },
        error:function(){
            // TO DO
            alert('Error!');
        }   

    
    });

    


});