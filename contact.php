<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "gordontang236@gmail.com"; // Your email address here ut.canoe@gmail.com
$Subject = Trim(stripslashes($_POST['subject']));  //"Website Contact Form"
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  echo "Success";
}
else{
  echo "Error";
}
?>