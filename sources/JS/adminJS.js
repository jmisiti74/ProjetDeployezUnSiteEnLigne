$(function () {
    
    $('#testJS').hide();

    $('#creationNews').click(function () {

        $('#cadreCreationNews').toggle(1500);
        $('#cadreCreationActivite').hide(1500);

    });
    $('#creationActivit').click(function () {

        $('#cadreCreationActivite').toggle(1500);
        $('#cadreCreationNews').hide(1500);

    });


    $('#cadreCreationActivite').hide();
    $('#cadreCreationNews').hide();

});