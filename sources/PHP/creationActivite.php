<?php 
include '../includes/codesql.php';

$titre = htmlspecialchars($_POST['titre']);
$texte = htmlspecialchars($_POST['texte']);
$dateEvenement = htmlspecialchars($_POST['date']);

$req = $bdd->prepare('INSERT INTO activites(titre, texte, date, dateEvenement) VALUES(:titre, :texte, NOW(), :dateEvenement)');

$req->execute(array(
    'titre' => $titre,
    'texte' => $texte,
    'dateEvenement' => $dateEvenement
));

header('Location: ../site/administrationPage.php');
?>