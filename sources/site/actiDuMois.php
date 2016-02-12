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
			
			<div class="row">
				<!-- Formulaire cacher Espace Membre -->
				<div id="includeEspaceMembre" class="col-xs-12">
					<div class="espaceConnexionMembre">
						<form action="../site/administrationPage.php" method="post">
							<p><b>Connecté vous :</b><span class="fermetureFormulaire">x</span></p>
							<label for="email">Email :</label><br>
							<input class="blackText" required type="text" id="email" name="email" /><br>
							<label for="pass">Mot de passe :</label><br>
							<input class="blackText" required type="password" id="pass" name="pass" /><br>
							<input class="blackText" type="submit" name="Valider" />
						</form>
					</div>
				</div>
				<!-- Formulaire cacher Espace Membre -->
				<div id="includeInscriptionActi" class="col-xs-12">
					<div class="espaceConnexionMembre">
						<form action="../PHP/mail.php" method="post">
							<p><b>Inscrivez vous à l'activité :</b><span class="fermetureFormulaire">x</span></p>
							<label for="prenom">Prénom :</label><br>
							<input class="blackText" required type="text" id="prenom" name="prenom" /><br>
							<label for="nom">Nom :</label><br>
							<input class="blackText" required type="text" id="nom" name="nom" /><br>
							<input id="dateActivit" required hidden type="text" value="date de l'activité" name="dateActivit" />
							<input id="nomActivit" required hidden type="text" value="nom de l'activité" name="nomActivit" />
							<input class="blackText" type="submit" name="Valider" />
						</form>
					</div>
				</div>
			</div>
				
            <div class="row">
                <?php include '../PHP/activit.php' ?>
            </div>

            <footer class="row navbar navbar-fixed-bottom">
                <?php include '../includes/footer.php'; ?>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="../JS/indexJS.js"></script>
        <script src="../JS/inscriptionActiJS.js"></script>
    </body>

    </html>