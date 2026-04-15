<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Test email details
$to = "ss8886580513@gmail.com";  // replace with your email
$subject = "Test Mail from Hostinger";
$message = "This is a test email to check if PHP mail() is working.";
$headers = "From: no-reply@screengo.in\r\n";

// Send mail
if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully!";
} else {
    echo "Mail sending failed!";
}
?>