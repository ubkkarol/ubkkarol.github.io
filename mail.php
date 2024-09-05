<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer's files
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Retrieve and sanitize form inputs
$name = isset($_POST["name"]) ? htmlspecialchars(trim($_POST["name"])) : "";
$email = isset($_POST["email"]) ? htmlspecialchars(trim($_POST["email"])) : "";
$message = isset($_POST["text"]) ? htmlspecialchars(trim($_POST["text"])) : "";

if ($name && $email && $message) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.home.pl'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@yourdomain.com'; // Your SMTP username
        $mail->Password = 'your-email-password'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS
        $mail->Port = 587; // SMTP port

        // Recipients
        $mail->setFrom('your-email@yourdomain.com', 'Mailer');
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

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Please fill all required fields!';
}
?>
