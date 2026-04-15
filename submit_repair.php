<?php
// Enable error reporting (for debugging only, disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Composer autoload
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database configuration
// $host = "127.0.0.1";
// $db = "u924969600_add_crm";
// $user = "u924969600_Pra7456";
// $pass = "Service@7456$";


$host = "127.0.0.1";
$db = "u924969600_add_crm";
$user = "74U29s61KD";
$pass = "74U29s61KD";


// Create database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("<div class='alert alert-danger'>Database connection failed: " . $conn->connect_error . "</div>");
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and assign variables
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $brand = trim($_POST['brand']);
    $model = trim($_POST['model']);
    $issue = trim($_POST['issue']);

    // ----------- Prepared Statement for secure DB insert -------------
    $stmt = $conn->prepare("INSERT INTO repair_requests (name, phone, brand, model, issue) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $brand, $model, $issue);

    if ($stmt->execute()) {
        // ----------- SUCCESS: Send AJAX response -------------
        echo "<div class='alert alert-success'>Thank you <strong>$name</strong>! Your request has been submitted.</div>";

        // ----------- PHPMailer Email Notification -------------
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'service@screengo.in';
            $mail->Password = ':q+P!R6xF';  // SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('service@screengo.in', 'ScreenGo Mobile Service');
            $mail->addAddress('ss8886580513@gmail.com');
            $mail->addAddress('kumarkpawan16@gmail.com');
            $mail->addAddress('surajsingh20963@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'New Mobile Repair Request Submitted';
            $mail->Body = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; color: #333; }
                        table { border-collapse: collapse; width: 100%; }
                        td { padding: 8px; border-bottom: 1px solid #ddd; }
                        .label { font-weight: bold; width: 150px; }
                        a { color: #007BFF; text-decoration: none; }
                    </style>
                </head>
                <body>
                    <h2>New Mobile Repair Request</h2>
                    <table>
                        <tr><td class='label'>Name:</td><td>$name</td></tr>
                        <tr><td class='label'>Phone:</td><td>$phone</td></tr>
                        <tr><td class='label'>Brand:</td><td>$brand</td></tr>
                        <tr><td class='label'>Model:</td><td>$model</td></tr>
                        <tr><td class='label'>Issue:</td><td>$issue</td></tr>
                    </table>
                    <p>View in CRM: <a href='https://screengo.in/mobile-service/crm_dashboard.php'>Click Here</a></p>
                </body>
                </html>
            ";

            $mail->send();

        } catch (Exception $e) {
            echo "<div class='alert alert-warning'>Email could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
        }

        // ----------- Google Ads Server-side Conversion -------------
        $conversion_id = "AW-17771847457";                       // Your Conversion ID
        $conversion_label = "HEsmCMqJqdAbEKG-o5pC";            // Your Conversion Label
        @file_get_contents("https://www.googleadservices.com/pagead/conversion/$conversion_id/?label=$conversion_label&guid=ON&script=0");

    } else {
        // ERROR while inserting
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
}

$conn->close();
?>