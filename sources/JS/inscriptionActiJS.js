$(function () {
    var dateActivit;
    var nomActivit;
    $('.cadreVertActivit').click(function () {
        $('#includeInscriptionActi').hide();
        nomActivit = $(this).children('h2:first').attr('class');
        dateActivit = $(this).children('p:last').attr('class');
        $('#nomActivit').attr('value', nomActivit);
        $('#dateActivit').attr('value', dateActivit);
        $('#includeInscriptionActi').fadeToggle(540);
        $('#includeEspaceMembre').hide();
		$(window).scrollTop( $('.espaceConnexionMembre').scrollTop())
    });
});