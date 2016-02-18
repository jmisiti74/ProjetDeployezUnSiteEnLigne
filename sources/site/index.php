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


                <div id="presentationVille">
                    <div class="row">
                        <p class="col-md-4 whiteText">Bienvenue sur le site de la ville d'Ayze (<i>Ayse</i>), vous trouverez sur ce site différentes informations sur la ville mais aussi un espace d'inscription pour différents types d'activitées culturelles et sportives proposées par la commune. Vous pouvez nous contacter directement via le formulaire de contact mis à disposition en cliquant sur le lien "Contact" dans le menu de navigation.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 whiteText">
                            <?php include '../PHP/latestNews.php' ?>
                        </div>
                    </div>
                </div>
                <footer class="row navbar navbar-fixed-bottom">
                    <?php include '../includes/footer.php'; ?>
                </footer>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <script src="../JS/indexJS.js"></script>
    </body>

    </html>