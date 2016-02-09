$(function () {
    $('#lienAdministration').text('Espace administration');
    $('#lienAdministration').click(function () {
        $('#includeEspaceMembre').fadeToggle(540);
        $('#includeInscriptionActi').hide();
    });
    $('#includeEspaceMembre').hide();
});