<?php session_start(); ?>
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
                <?php include '../includes/header.php'; ?>
            </header>
			
			<?php include '../includes/formulaires.php'; ?>
			
            <div id="presentationVille" class="row">
                <p class="col-xs-12 whiteText">La ville dispose de plusieurs activités, voilà une liste des principales activités culturel disponible :</p><br><br>
                <div class="whiteText col-md-5 cadreVertNews">
                    <h2>Marathon :</h2>
                    <img class="imgNews" src="../images/marathon.jpg"/>
                    <p>Le marathon est une course organisée pour récolter des fonds pour l'asosiation piece jaune. Principalement fait en été.</p>
                </div>
                <div class="whiteText col-md-5 cadreVertNews">
                    <h2>Musée de la ville :</h2>
                    <img class="imgNews" src="../images/musee.jpg"/>
                    <p>Le musée est ouvert du lundi au samedi de 8H à 19H</p>
                </div>
                <div class="whiteText col-md-5 cadreVertNews">
                    <h2>Tir à l'arc :</h2>
                    <img class="imgNews" src="../images/tirAlArc-slide2.jpg"/>
                    <p>Notre ville dispose d'un stande de tir à l'arc ouvert à tous. La mairie peut éventuellement prêter le materièle (<i>Flèches et Arc</i>). Pour ce faire, veuillez nous contacter vià l'onglet Contact</p>
                </div>
                <div class="whiteText col-md-5 cadreVertNews">
                    <h2>Cyber-café :</h2>
                    <img class="imgNews" src="../images/cybercafes.jpg"/>
                    <p>Ayze propose un Cyber-café placer au centre de la ville. Vous pouvez accèder aux ordinateurs gratuitement si vous faites partie de la commune.</p>
                </div>
                <div class="whiteText col-md-5 cadreVertNews">
                    <h2>Tombola :</h2>
                    <img class="imgNews" src="../images/tombola.jpg"/>
                    <p>Toutes les fin de mois, une tombola est organisée pour récolter des dons pour la croix rouge.</p>
                </div>
                <div class="whiteText col-md-5 cadreVertNews">
                    <h2>Food-Truck :</h2>
                    <img class="imgNews" src="../images/Avatar-camion.png"/>
                    <p>Ayze possède plusieurs emplacement de Food-Trucks disponnible, pour vous rensseigner sur la disponibiliter d'un emplacement, veuillez nous contacter vià l'onglet Contacts.</p>
                </div>
            </div>
            <footer class="row navbar navbar-fixed-bottom">
                <?php include '../includes/footer.php'; ?>
            </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.5.5/js/bootstrap.min.js"></script>
            <script src="../JS/indexJS.js"></script>
    </body>

    </html>