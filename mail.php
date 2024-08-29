<?php

// Set the recipient email address
$recepient = "estrada.cristian@hotmail.com"; // Replace with your actual email address
$sitename = "Karol's Portfolio";

// Retrieve and sanitize user inputs
$name = isset($_POST["name"]) ? trim(strip_tags($_POST["name"])) : "";
$email = isset($_POST["email"]) ? trim(strip_tags($_POST["email"])) : "";
$text = isset($_POST["text"]) ? trim(strip_tags($_POST["text"])) : "";

// Prepare the email message
$message = "Name: $name \nEmail: $email \nMessage: $text";

// Set the email subject
$pagetitle = "New Message From \"$sitename\"";

// Set the email headers
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: $email\r\n";

// Send the email
if (mail($recepient, $pagetitle, $message, $headers)) {
    echo "Message sent successfully.";
} else {
    echo "Failed to send the message.";
}
?>
