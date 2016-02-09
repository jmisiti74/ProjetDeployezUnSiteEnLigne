<?php 
include '../includes/codesql.php';

$req = $bdd->query('SELECT titre, texte, image FROM news ORDER BY id LIMIT 0, 1');
   
while ($donnees = $req->fetch()){
    echo '<div class="cadreVertNews"><h2>' . $donnees['titre'] . '</h2> <br /><img  class="imgNews" src="' . $donnees['image'] . '"/><br /><p>' . $donnees['texte'] . '</p><br /></div>';
}

$req->closeCursor();
?>