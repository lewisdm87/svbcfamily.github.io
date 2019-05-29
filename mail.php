<?php 
# Gather Responses
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "lewis.dm87@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

# Send an email to lewis.dm87@gmail.com
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

# Notify user email was sent
echo "Your message was sent to info@svbcfamily.com! \n";
echo "If you do not get a reply within a couple of days please call the office at 540-868-4020 to ensure receipt."

# Notify recipient of new message from contact form
mail("5407714532@txt.sprint.net", "", "You have a new form submission from svbcfamily.com!", "From: SVBCFAMILY.COM")

?>
