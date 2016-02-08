<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ayze</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ProjetDeployezUnSiteEnLigne/sources/CSS/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <header class="row">
            <?php include 'header.php'; ?>
        </header>



        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            
            $('#creerCompteButton').click(function () {
                $('#espaceMembre').remove();
                $('#includeEspaceMembre').prepend('<div id="espaceMembre"></div>');
                $('#espaceMembre').append('<form action="creerMembre.php" method="post" /></form>');
                $('#espaceMembre form').append('<p></p>');
                $('#espaceMembre form p').append('Créer votre compte :<br> Email :');
                $('#espaceMembre form p').append('<input class="blackText" type="text" required name="email" />');
                $('#espaceMembre form p').append('<br> Mot de passe :');
                $('#espaceMembre form p').append('<input class="blackText" type="password" required name="pass" />');
                $('#espaceMembre form p').append('<br> Prénom :');
                $('#espaceMembre form p').append('<input class="blackText" type="text" required name="prenom" />');
                $('#espaceMembre form p').append('<br> Nom :');
                $('#espaceMembre form p').append('<input class="blackText" type="text" required name="nom" />');          
                $('#espaceMembre form p').after('<input class="blackText" type="submit" name="Valider" />');
                $('#espaceMembre form').after('<button id="connectionButton" class="blackText">Connexion</button>');

            });
            $('#connectionButton').click(function () {
                $('#espaceMembre').remove();
                $('#includeEspaceMembre').prepend('<div id="espaceMembre"></div>');
                $('#espaceMembre').append('<form action="connectionMembre.php" method="post" /></form>');
                $('#espaceMembre form').append('<p></p>');
                $('#espaceMembre form p').append('Connecté vous :<br> Email :');
                $('#espaceMembre form p').append('<input class="blackText" type="text" required name="email" />');
                $('#espaceMembre form p').append('<br> Mot de passe :');
                $('#espaceMembre form p').append('<input class="blackText" type="password" required name="pass" />');         
                $('#espaceMembre form p').after('<input class="blackText" type="submit" name="Valider" />');
                $('#espaceMembre form').after('<button id="creerCompteButton" class="blackText">Créer un compte</button>');

            });
        });
    </script>
</body>

</html>