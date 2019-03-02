<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  //Email information
  $admin_email = "btrobotics6342@gmail.com";
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
  $subject = "New Form Reply:";
  
  //send email
  mail($admin_email,"$subject", $message, "From:" . $email);
   header( "Location: ../../" );
  }
?>