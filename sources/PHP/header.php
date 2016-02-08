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
                    <li> <a href="#contact"><span>Acceuil</span></a> </li>
                    <li> <a href="#accueil"><span>Actualités</span></a> </li>
                    <li> <a href="#contact"><span>Plus d'infos</span></a> </li>
                    <li> <a href="#qui"><span>Activités du mois</span></a> </li>
                    <li> <a href="#contact"><span>Contact</span></a> </li>
                </ul>
            </div>
        </div>
        <div id="includeEspaceMembre" class="col-xs-4">
            <a id="lienAdministration" href="#">Espace administration</a>
            <div id="espaceConnexionMembre">
                <form action="administrationPage.php" method="post" />
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
    </div>
</nav>