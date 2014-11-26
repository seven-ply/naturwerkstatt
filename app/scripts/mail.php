<?php 
if($_POST){
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent="From: $email \n Message: $message";
  $recipient = "AndyPf@web.de";
  $subject = "[Website] Neue Nachricht";
  $mailheader = "From: $email \r\n";
  $errorMsg = "Error!";
  $successMsg = "Thank You!";
  mail($recipient, $subject, $formcontent, $mailheader) or die($errorMsg);
  echo $successMsg;
}

?>
