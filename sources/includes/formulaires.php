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