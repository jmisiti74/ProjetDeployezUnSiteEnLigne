<?php
include 'codesql.php';

//definition des variables
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['email'];
$pass = $_POST['pass'];

define('nom', htmlspecialchars($nom));
define('prenom', htmlspecialchars($prenom));
define('mail', htmlspecialchars($mail));
define('pass', htmlspecialchars(sha1(frontSeed.$pass.backSeed)));

$req = $bdd->prepare('INSERT INTO membres(prenom, nom, mail, pass) VALUES(:prenom, :nom, :mail, :pass)');
$req->execute(array(
	'prenom' => prenom,
	'nom' => nom,
	'mail' => mail,
	'pass' => pass
	));

setcookie('mail', mail, time() + 365*24*3600, null, null, false, true);
setcookie('pass', pass, time() + 365*24*3600, null, null, false, true);
setcookie('nom', nom, time() + 365*24*3600, null, null, false, true);
setcookie('prenom', prenom, time() + 365*24*3600, null, null, false, true);

header('Location: index.php');
?>