<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "sop.ropert@gmail.com";
  $subject = "Demande de contact";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Oh oh, il me semble qu'il y a un problème avec l'envoi...");
  echo "Merci ! Le message a bien été envoyé ;)";
?>
