<?php 

  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent="From: $email \n Message: $message";
  $recipient = "AndyPf@web.de";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You!";
?>
