<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@ecompnotes.in'
$email_subject = 'New Form Submission'
$email_body = "User Name: $name.\n ".
"User Name: $visitor_email.\n".
"User Name: $subject.\n".
"User Name: $message.\n";

$to = 'ecompnotes@gmail.com';
$header= "from: $email_form\r\n";
$header .= "Reply-To: $visitor_email";
mail($to,$email_subject,$email_body,$header);
header("Location: Contact.html");
?>