<nav class="navbar navbar-inverse navbar-fixed-top col-xs-12" role="navigation">
    <div class="row">
        <div class="col-xs-8">
            <div class="navbar-header">
                <img style="width:125px;" src="../images/logo.png" id="logopng" alt="Logo ayze" />
                <button id="navButton" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li> <a href="../site/"><span><span class="glyphicon glyphicon-home"></span> Acceuil</span></a> </li>
                    <li> <a href="../site/actu.php"><span><span class="glyphicon glyphicon-exclamation-sign"></span> Actualités</span></a> </li>
                    <li> <a href="../site/plusInfo.php"><span><span class="glyphicon glyphicon-info-sign"></span> Plus d'infos</span></a> </li>
                    <li> <a href="../site/actiDuMois.php"><span><span class="glyphicon glyphicon-leaf"></span> Activités du mois</span></a> </li>
                    <li> <a href="../site/contact.php"><span><span class="glyphicon glyphicon-envelope"></span> Contact</span></a> </li>
                </ul>
            </div>
        </div>
        <!-- Formulaire cacher Espace Membre -->
        <div id="includeEspaceMembre" class="col-xs-2">
            <div class="espaceConnexionMembre">
                <form action="../site/administrationPage.php" method="post">
                <p><b>Connecté vous :</b></p>
                <label for="email">Email :</label>
                <input class="blackText" required type="text" id="email" name="email" />
                <label for="pass">Mot de passe :</label>
                <input class="blackText" required type="password" id="pass" name="pass" />
                <input class="blackText" type="submit" name="Valider" />
                </form>
            </div>
        </div>
        <!-- Formulaire cacher Espace Membre -->
        <div id="includeInscriptionActi" class="col-xs-2">
            <div class="espaceConnexionMembre">
                <form action="../PHP/mail.php" method="post">
                <p><b>Inscrivez vous à l'activitez:</b></p>
                <label for="prenom">Prénom :</label>
                <input class="blackText" required type="text" id="prenom" name="prenom" />
                <label for="nom">Nom :</label>
                <input class="blackText" required type="text" id="nom" name="nom" />
                <input id="dateActivit" required hidden type="text" value="date de l'activité" name="dateActivit" />
                <input id="nomActivit" required hidden type="text" value="nom de l'activité" name="nomActivit" />
                <input class="blackText" type="submit" name="Valider" />
                </form>
            </div>
        </div>
    </div>
</nav>