<?php
$name = $_POST[ 'name' ];
$email = $_POST[ 'email' ];
$msg = $_POST[ 'msg' ];
$formcontent = "From: $name \n Message: $msg";
$recipient = "team@6324.ca";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail( $recipient, $subject, $formcontent, $mailheader )or die( "Error!" );
echo "Thank You!";
?>