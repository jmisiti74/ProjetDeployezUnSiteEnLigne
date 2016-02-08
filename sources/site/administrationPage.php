<!-- Les condition PHP pour que la page s'affiche -->

<?php  
session_start();
include '../includes/codesql.php';
$_SESSION['mail'] = htmlspecialchars($_POST['email']);
$_SESSION['pass'] = htmlspecialchars($_POST['pass']);

if (($_SESSION['mail'] == emailAdmin) && ($_SESSION['pass'] == passAdmin)) { ?>

<!-- La page HTML d'administration -->

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Ayze - Administration</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="/ProjetDeployezUnSiteEnLigne/sources/CSS/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid"> <!-- Conteneur BootStrap -->
            
            <!-- Header -->
            
            <header class="row">
                <nav class="navbar navbar-inverse col-xs-12" role="navigation">
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="navbar-header row">
                                <img style="width:125px;" src="/ProjetDeployezUnSiteEnLigne/sources/images/logo.png" id="logopng" alt="Logo ayze" />
                                <button id="navButton" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse row">
                                <ul class="nav navbar-nav">
                                    <li> <a href="#" id="creationNews"><span>Créer une news</span></a> </li>
                                    <li> <a href="#" id="creationActivit"><span>Créer une Activitée</span></a> </li>
                                    <li> <a href="#" id="annulation"><span>Annuler</span></a> </li>
                                </ul>
                            </div>
                        </div>
                        <a href="index.php">Retour à l'éspace membre</a>
                    </div>
                </nav>
            </header>
            
            <!-- Corps -->
            
            <span id="cadreCreationNews" class="whiteText"></span>
            <span id="cadreCreationActivite" class="whiteText"></span>
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="../JS/adminJS.js"></script>
    </body>

    </html>

<!-- La fin de la page PHP -->


    <?php } else {
    
    header('Location: index.php');
    
}?>