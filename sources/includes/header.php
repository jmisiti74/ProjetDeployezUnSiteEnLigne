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
        <div id="includeEspaceMembre" class="col-sm-2">
            <div class="espaceConnexionMembre">
                <form action="../site/administrationPage.php" method="post" />
                <p>Connecté vous :
                    <br> Email :
                    <input class="blackText" type="text" name="email" />
                    <br> Mot de passe :
                    <input class="blackText" type="password" name="pass" />
                    <input class="blackText" type="submit" name="Valider" />
                </p>
                </form>
            </div>
        </div>
        <!-- Formulaire cacher Espace Membre -->
        <div id="includeInscriptionActi" class="col-sm-2">
            <div class="espaceConnexionMembre">
                <form action="../site/mail.php" method="post" />
                <p>Inscrivez vous à l'activitez:
                    <br> Prénom :
                    <input class="blackText" type="text" name="prenom" />
                    <br> Nom :
                    <input class="blackText" type="text" name="nom" />
                    <input class="blackText" type="submit" name="Valider" />
                </p>
                </form>
            </div>
        </div>
    </div>
</nav>
