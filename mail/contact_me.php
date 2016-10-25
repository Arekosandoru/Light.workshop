<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['phone'])     ||
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
   
// Create the email and send the message
$to = 'masterskaya_svet@mail.ru'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n;
$headers = "From: noreply@lightworkshop.ru\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $phone,' ', $name";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
