function ActClose(){
    $('#listFiles').css({'visibility' : 'hidden'});
    $('.popup').css({'display' : 'none'});

}


$(document).on('click',"#btn-close", function(){
    ActClose();
});