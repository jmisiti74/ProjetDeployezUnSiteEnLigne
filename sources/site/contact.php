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


            <div class="col-sm-2 cadreVertActivit">
                <form action="../PHP/mail.php" method="post" />
                <p>Formulaire de contact :<br>
                    <br> Sujet :
                    <input class="blackText" type="text" name="subject" />
                    <br> Texte :
                    <input class="blackText" type="text" name="msg" />
                    <input class="blackText" type="submit" name="Valider" />
                </p>
                </form>
            </div>
            <footer class="row navbar navbar-fixed-bottom">
                <?php include '../includes/footer.php'; ?>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="../JS/indexJS.js"></script>
    </body>

    </html>