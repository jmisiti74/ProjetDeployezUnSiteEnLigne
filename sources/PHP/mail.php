<?php 

if (isset($_POST['msg']) && isset($_POST['subject'])) {
    $msg = htmlspecialchars($_POST['msg']);
    $msg = wordwrap($msg,70);
    $subject = htmlspecialchars($_POST['subject']);
	mail('xjejevbx@gmail.com', $subject, $msg);
	
	header('Location: ../site/contact.php');
}
if (isset($_POST['nomActivit']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateActivit'])) {
    $dateActivit = htmlspecialchars($_POST['dateActivit']);
    $nomActivit = htmlspecialchars($_POST['nomActivit']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    
	$msg = $nom . " " . $prenom . " viens de s'inscrire à l'activitée " . $nomActivit . " qui commence le " . $dateActivit . ".";
	$msg = wordwrap($msg,70);
	
	mail('xjejevbx@gmail.com', "Inscription à une activitée", $msg);
	
	header('Location: ../site/actiDuMois.php');
}
?>