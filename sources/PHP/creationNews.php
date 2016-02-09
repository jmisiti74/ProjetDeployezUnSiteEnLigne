<?php 
include '../includes/codesql.php';

$titre = htmlspecialchars($_POST['titre']);
$texte = htmlspecialchars($_POST['texte']);
$image = htmlspecialchars($_POST['image']);

$req = $bdd->prepare('INSERT INTO news(date, titre, texte, image) VALUES(NOW(), :titre, :texte, :image)');

$req->execute(array(
    'titre' => $titre,
    'texte' => $texte,
    'image' => $image
));

header('Location: ../site/administrationPage.php');
?>