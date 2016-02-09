<?php 
include '../includes/codesql.php';

$titre = $_POST['titre'];
$texte = $_POST['texte'];
$date = $_POST['date'];

echo $date . ',<br>' . $titre . ',<br>' . $texte . '.'

?>