

$(function() {

    $('.highslide-two').click(function(){
        var obj = $('#my-content');
        
        obj.slideDown(300);

        return false;
    });

    $('.close').click(function(){
        var obj = $('#my-content');
        obj.slideUp(300);
    });


    $('#show-leaving').click(function(){
        var obj = $('#sf_fieldset_____________');
        if( obj.css('display')=='none' )
            obj.slideDown(300);
        else
            obj.slideUp(300);
    });
});