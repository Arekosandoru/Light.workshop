<?php
// if(empty($_POST['name'])      ||
//    empty($_POST['phone'])     ||
//    {
//    echo "No arguments Provided!";
//    return false;
//    }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
   
$to = 'masterskaya_svet@mail.ru';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n";
$headers = "From: noreply@lightworkshop.ru\n"; 
$headers .= "Reply-To: $phone,' ', $name";   
mail($to,$email_subject,$email_body,$headers);
// return true;         
?>
