<?php
    if (isset($_COOKIE['mail']) && isset($_COOKIE['pass']) && isset($_COOKIE['prenom']) && isset($_COOKIE['nom'])){
            
        echo '  
                <div id="espaceMembre">
                <p>Connecté en tant que</p>
                <p>Nom : '.$_COOKIE['nom'].'</p>
                <p>Prénom : '.$_COOKIE['prenom'].'</p>
                </div>
             ';
            
        
        } else {
            
            echo '  
                <div id="espaceMembre">
                    <form action="connectionMembre.php" method="post"/>
                        <p>Connecté vous :<br>
                        Email : <input class="blackText" type="text" name="email" /><br>
                        Mot de passe : <input class="blackText" type="password" name="pass" />
                        <input class="blackText" type="submit" name="Valider" /></p>
                    </form>
                    <button id="creerCompteButton" class="blackText">Créer un compte</button>
                </div>
             '; 
            
        }
    ?>