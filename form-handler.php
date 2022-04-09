<?php
$name = $_POST['name']; /* will extract name gotten from the contact form */
$visitor_email = $_POST['email']; /* will extract email gotten from the contact form */
$subject = $_POST['subject']; /* will extract subject gotten from the contact form */
$message = $_POST['message']; /* will extract contact form message gotten from the contact form */

$email_from = 'info@yourwebsite.com'; /* email of the website (domain name)*/

$email_subject = 'New Form Submission'; /* you can write any message */

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'climiradiroberts1@gmail.com'; /* email id where you want to receive the enquiry */

$headers = "From: $email_from \r\n";

$headers. = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers); /* to send the data or all info  to the email id */

header("Location: contact.html");
?>