function ActChoise(numFile){

    var block = ''
    $.ajax({
        url: "ScriptsPHP/GetAllFiles.php",
        type: "post",
        data: '',
    datatype: 'json',
        success: function(data){
            
            var json = $.parseJSON(data);

            // console.log(json);

            $('#tbody-list').text('');
            
            for(var i = 2; i < json.length; i ++){

                oneElem = json[i];

                $('#tbody-list').append('<tr class="num-str-' + numFile + '">'+
                        '<th scope="row">' + Number(i - 1) + '</th>' +
                        '<td>' + oneElem + '\n</td>'+
                        '<td><button text="' + oneElem + '\n" class="btn btn-primary btn-OK" id="num-btn-' + numFile + '">OK</button></td>'+
                '</tr>');
            }

        },
        error:function(){
            // TO DO
            alert('Error!');
        }   

    });

    $('#listFiles').css({'visibility' : 'visible'});
    $('.popup').css({'display' : 'block'});

    // var numFile = this.id.match(/\d+/)[0];

    // console.log(numFile);

    // return numFile;

}

function ActApply(numFile, content){

    $('.text-'+numFile).text(content);

}

const sleep = (milliseconds) => {
    return new Promise(resolve => setTimeout(resolve, milliseconds))
  }

$(document).on('click',".btn-choise", function(){

    var numFile = this.id.match(/\d+/)[0];

    ActChoise(numFile);

});

$(document).on('click',".btn-OK", function(){

    var numFile = this.id.match(/\d+/)[0];

    var content = $(this).attr('text');

    var nameFile = $('#namePlaylist').text();

    $('.text-'+numFile).text('');
    $('.text-'+numFile).text(content);

    ActClose();
    ActSave();

    sleep(100);

    ActEdit(nameFile);
});