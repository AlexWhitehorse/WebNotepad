// Перезапись файла в папке
$(document).on('click',".saveFile", function(){

    // alert($("#TextArea").val());
    var textArea_text = $("#TextArea").val();

    var nameFile = $('.labelTextArea').text();

    // console.log(nameFile);

    $.ajax({
        url: "editFile.php",
        type: "post",
        data: {'nameFile': nameFile,'text' : textArea_text},
    datatype: 'json',
    success: function(data){
        // console.log(data);

        // Перезагрузка страницы
        location.reload();

    },
    error:function(){
        // TO DO
        alert('Error!' + data);
    }   


});
    

});