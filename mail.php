<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "lewis.dm87@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your message was sent to info@svbcfamily.com!";
echo "If you do not get a reply within a couple of days please call the office at 540-868-4020 to ensure receipt."
?>
