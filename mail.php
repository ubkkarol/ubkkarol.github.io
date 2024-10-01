<?php
// Server settings
$mail->isSMTP();
$mail->Host = 'localhost';   // Mercury Mail Server is running locally
$mail->SMTPAuth = false;     // No authentication is required for localhost
$mail->Port = 25;            // Default SMTP port for local

// Recipients
$mail->setFrom('your-email@localhost', 'Mailer'); // Replace with your local Mercury email
$mail->addAddress('estrada.cristian@hotmail.com'); // Recipient's email

// Content
$mail->isHTML(true);
$mail->Subject = 'New Message From Karol\'s Portfolio';
$mail->Body    = "You have received a new message from your website contact form.<br><br>".
                 "Here are the details:<br><br>".
                 "Name: $name<br>".
                 "Email: $email<br>".
                 "Message:<br>$message";
$mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

?>
