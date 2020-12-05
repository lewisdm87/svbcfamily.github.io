<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "email@dlewis.info";
    $email_subject = "New form submissions";


    $care_fname = $_POST['fname']; // required
    $care_lname = $_POST['lname'];
    $care_phone = $_POST['phone'];
    $care_email = $_POST['email']; // required
    $care_hospital = $_POST['hospital'];
    $care_bible = $_POST['bible'];
    $care_funeral = $_POST['funeral'];
    $care_grocery = $_POST['grocery'];
    $user_message = $_POST['msg']; // required



    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name)+" "+ .clean_string($care_lname) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>