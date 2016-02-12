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
                <p><b>Formulaire de contact :</b><br>
                    <label for="sujetContact">Titre :</label><br>
                    <input class="blackText" required type="text" id="sujetContact" name="subjectContact" /><br>
                    <label for="texteContact">Texte :</label><br>
                    <textarea class="blackText" required id="texteContact" name="texteContact" ></textarea><br>
                    <label for="nomContact">Votre nom :</label><br>
                    <input class="blackText" required type="text" id="nomContact" name="nomContact" /><br>
                    <label for="emailContact">Votre e-mail :</label><br>
                    <input class="blackText" required type="text" id="emailContact" name="emailContact" /><br>
					<label for="residentContact">Êtes-vous un résident de la ville :</label><br>
					<input type="checkbox" id="residentContact" name="residentContact"/><br>
					<label for="nationalityContact">Quel-est votre nationalitée :</label><br>
					<select class="blackText" required id="nationalityContact" name="nationalityContact">
						<?php include '../includes/nationalityList.php'; ?>
					</select>
					<br>
					<br>
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