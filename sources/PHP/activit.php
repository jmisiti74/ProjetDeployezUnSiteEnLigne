<?php 
include '../includes/codesql.php';

$req = $bdd->query('SELECT id, titre, texte, dateEvenement FROM activites ORDER BY id DESC LIMIT 0, 10');

while ($donnees = $req->fetch()){
    echo '<div class="col-xs-11"><div id="' . $donnees['id'] . '" class="cadreVertActivit"><h2>' . $donnees['titre'] . '</h2><br /><p>' . $donnees['texte'] . '</p><br /></div></div>';
}

$req->closeCursor();
?>