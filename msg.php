<?php
if(isset($_POST['send'])) {
  $to = "rahnuma.mahzabin.cse@ulab.edu.bd";
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $from =  $_POST['EmailSender'];
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: $from' . "\r\n";
  $headers .= 'Cc: sadia.anjum1.cse@ulab.edu.bd' . "\r\n";
  $headers .= 'Bcc: fahim.hossain.cse@ulab.edu.bd' . "\r\n";

  if(mail($to,$subject,$message,$headers)) {
    echo 'Email send';
  }
  else {
    echo 'Email Failed';
  }
}
?>
