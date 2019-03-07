<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "prameetkotak@me.com"; // Your email address here
$Subject = "Contact form";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Phone = Trim(stripslashes($_POST['phone'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "Email for LTTT enquiry";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Phone, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  echo "<script type='text/javascript'>alert('Enquiry Sent');</script>";
}
else{
  echo "<script type='text/javascript'>alert('Enquiry not Sent');</script>";
}
?>