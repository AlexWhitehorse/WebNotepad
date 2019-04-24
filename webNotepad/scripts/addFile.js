$(document).on('click',"#AddFile", function(){

    var text = "Введине название файла";

    var def = null;

    // result = confirm(question);
    var nameFile = prompt(text, def);

    nameFile = nameFile.replace(/\s/g, '');;

    if(nameFile != 'null' | nameFile == '' | nameFile)
    {

    $.ajax({
        url: "editFile.php",
        type: "post",
        data: {'nameFile' : nameFile, 'text' : ''},
    datatype: 'json',
        success: function(data){

            // console.log(data);
            location.reload();
            
        },
        error:function(){
            // TO DO
            alert('Error!');
        }   

    
    });
    console.log(nameFile)
    
}else{
    alert('Oшибка ввода');
}

});