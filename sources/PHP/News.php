<?php 
include '../includes/codesql.php';

$req = $bdd->query('SELECT titre, texte, image, DAY(date) AS jour, MONTH(date) AS mois, YEAR(date) AS ans FROM news ORDER BY id DESC LIMIT 0, 5');

while ($donnees = $req->fetch()){
    switch ($donnees['mois']) {
        case 1:
            $donnees['mois'] = "Janvier";
            break;
        case 2:
            $donnees['mois'] = "Fevrier";
            break;
        case 3:
            $donnees['mois'] = "Mars";
            break;
        case 4:
            $donnees['mois'] = "Avril";
            break;
        case 5:
            $donnees['mois'] = "Mais";
            break;
        case 6:
            $donnees['mois'] = "Juin";
            break;
        case 7:
            $donnees['mois'] = "Juillet";
            break;
        case 8:
            $donnees['mois'] = "Août";
            break;
        case 9:
            $donnees['mois'] = "Septembre";
            break;
        case 10:
            $donnees['mois'] = "Octobre";
            break;
        case 11:
            $donnees['mois'] = "Novembre";
            break;
        case 12:
            $donnees['mois'] = "Décembre";
            break;
    }
    if($donnees['image']) {
        echo '<div class="col-md-5 whiteText"><div class="cadreVertNews"><h2>' . $donnees['titre'] . '</h2> <br /><img  class="imgNews" src="' . $donnees['image'] . '"/><br /><p>' . $donnees['texte'] . '</p><br /><p class="dateNews">le ' . $donnees['jour'] . ' ' . $donnees['mois'] . ' ' . $donnees['ans'] . '</p></div>';
    } else {
        echo '<div class="col-md-5 whiteText"><div class="cadreVertNews"><h2>' . $donnees['titre'] . '</h2><br /><p>' . $donnees['texte'] . '</p><br /><p class="dateNews">le ' . $donnees['jour'] . ' ' . $donnees['mois'] . ' ' . $donnees['ans'] . '</p></div></div>';
    }
}

$req->closeCursor();
?>