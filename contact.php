<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'meganmansfield@arizona.edu';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

<?php
    if (isset($_POST['submitbtn']))
    {
        if (mail($mail_to, $subject, $body_message, $headers))
        {
            echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
        }
        else
        {
        echo "<font color=\"red\"><p>Your message sending has failed! Please manually email (your email)!</p></font>";
        }
    }
?>