$(function () {
    $('#lienAdministration').text('Espace administration');
    $('#lienAdministration').click(function () {
        $('#includeEspaceMembre').fadeToggle(540);
        $('#includeInscriptionActi').hide();
    });
    $('#includeEspaceMembre').hide();
    $('#includeInscriptionActi').hide();	 
    $('.fermetureFormulaire').click(function () {
        $('#includeInscriptionActi').hide(400);
        $('#includeEspaceMembre').hide(400);
    });   
});