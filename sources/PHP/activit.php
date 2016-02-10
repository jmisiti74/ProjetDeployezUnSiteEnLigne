<?php 
include '../includes/codesql.php';

$req = $bdd->query('SELECT id, titre, texte, dateEvenement FROM activites ORDER BY id DESC LIMIT 0, 10');

while ($donnees = $req->fetch()){
    echo '<div class="col-xs-11"><div id="' . $donnees['id'] . '" class="cadreVertActivit"><h2 class="' . $donnees['titre'] . '">' . $donnees['titre'] . '</h2><br /><p>' . $donnees['texte'] . '</p><br><p class="' . $donnees['dateEvenement'] . '">Date de l\'évenement : le ' . $donnees['dateEvenement'] . '</p></div></div>';
}

$req->closeCursor();
?>