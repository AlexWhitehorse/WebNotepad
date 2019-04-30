function ActDelete(numFile){

    var nameFile = $('#namePlaylist').text();

    $("#num-row-" + numFile).remove()

    ActSave();
    ActEdit(nameFile);

    // var test = $('.flag-text').text();
    // console.log(test);

    // var json = JSON.stringify(test);
    // console.log(json);
}

$(document).ready(function() {
    $(document).on('click',".btn-delete", function(){

        var numFile = this.id.match(/\d+/)[0];

        ActDelete(numFile);
    });
});