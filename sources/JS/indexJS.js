$(function () {
    $('#lienAdministration').text('Espace administration');
    $('#lienAdministration').click(function () {
        $('#espaceConnexionMembre').fadeToggle(540);
    });
    $('#espaceConnexionMembre').hide();
});