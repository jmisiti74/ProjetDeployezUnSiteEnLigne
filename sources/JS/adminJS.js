$(function () {
    
    $('#testJS').hide();
    // Création du cadre de création de news
    $('#cadreCreationNews').prepend('<form class="cadreVert" action="../includes/creationNews.php" methode="post" />');
    $('form').append('<div>');
    $('form').prepend('<h2>Creation de news');
    $('div:last').append('<label for="titre">*Titre : ');
    $('div:last').append('<br>');
    $('div:last').append(' <input type="text" placeholder="Titre de la news" id="titre"/>');
    $('form').append('<div>');
    $('div:last').append('<label for="texte">*Texte de la news : ');
    $('div:last').append(' <input type="text" placeholder="Texte de la news" id="titre"/>');
    $('form').append('<div>');
    $('div:last').append('<label for="image">Lien d\'une image : ');
    $('div:last').append(' <input type="text" placeholder="http://static.wamiz.fr/images/animaux/chiens/large/chien-courant-de-posavatz.jpg" id="image"/><br><br>');
    $('div:last').after('<p>* Obligatoire &nbsp;');
    $('p:last').append('<input class="blackText" type="submit" name="Valider" />');

    // Création du cadre de création d'activités
    $('#cadreCreationActivite').prepend('<form class="cadreVert" action="../includes/creationNews.php" methode="post" />');
    $('form:last').append('<div>');
    $('form:last').prepend('<h2>Creation d\'activités');
    $('div:last').append('<label for="titre">*Titre : ');
    $('div:last').append('<br>');
    $('div:last').append(' <input type="text" placeholder="Titre de la news" id="titre"/>');
    $('form:last').append('<div>');
    $('div:last').append('<label for="texte">*Texte de l\'activité : ');
    $('div:last').append(' <input type="text" placeholder="Texte de la news" id="titre"/>');
    $('form:last').append('<div>');
    $('div:last').append('<label for="date">*Date de l\'évenement : ');
    $('div:last').append(' <input type="text" placeholder="18 février 2016" id="date"/><br><br>');
    $('div:last').after('<p>* Obligatoire &nbsp;');
    $('p:last').append('<input class="blackText" type="submit" name="Valider" />');


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