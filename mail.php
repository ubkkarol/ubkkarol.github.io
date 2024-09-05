<?php
$recipient = "your-email@example.com";  // This can be any email, but it won't actually send an external email with MailHog
$subject = "Test Email via MailHog";
$message = "This is a test email sent from local development environment using MailHog.";
$headers = "From: me@example.com";

if (mail($recipient, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send the email.";
}
?>
