<?php 

if (isset($_POST['msg']) && isset($_POST['subject'])) {
    $msg = htmlspecialchars($_POST['msg']);
    $msg = wordwrap($msg,70);
    $subject = htmlspecialchars($_POST['subject']);
}
if (isset($_POST['nomActivit']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateActivit'])) {
    $dateActivit = htmlspecialchars($_POST['dateActivit']);
    $nomActivit = htmlspecialchars($_POST['nomActivit']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    
    echo $prenom . ' ' . $nom . ' C\'est inscrit à l\'activité ' . $nomActivit . ' qui commence le ' . $dateActivit;
    
}
?>