<?php 

$msg = htmlspecialchars($_POST['msg']);
$msg = wordwrap($msg,70);
$subject = htmlspecialchars($_POST['subject']);

mail("xjejevbx@gmail.com" , $subject , $msg);

header('Location: ../site/index.php');
?>