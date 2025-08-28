<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    exit('Access denied.');
}


$config = include __DIR__ . '/config.php';

// Load PHPMailer
require __DIR__ . '/assets/PHPMailer/src/Exception.php';
require __DIR__ . '/assets/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/assets/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<div class='message-container'><div class='alert success'>Thanks Your message has been sent.</div></div>";
    die();
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $details = $_POST['details'] ?? '';

    // Honeypot check (anti-spam)
    if (!empty($_POST['website'])) {
        die('Spam detected');
    }

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $config['smtp_host'];
        $mail->SMTPAuth   = $config['smtp_auth'];
        $mail->Username   = $config['smtp_username'];
        $mail->Password   = $config['smtp_password'];
        $mail->SMTPSecure = $config['smtp_secure'];
        $mail->Port       = $config['smtp_port'];

        // From
        $mail->setFrom($config['from_email'], $config['from_name']);

        // Add multiple recipients
        foreach ($config['to_emails'] as $email) {
            $mail->addAddress($email);
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Rawingtech Submission from $name";
        $mail->Body    = "
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Message:</strong><br>{$details}</p>
        ";

        $mail->send();

        echo "<div class='message-container'><div class='alert success'>Thanks $name! Your message has been sent.</div></div>";
    } catch (Exception $e) {
        echo "<div class='.message-container'><div class='alert error'>Sorry, message could not be sent. Please try again later</div></div>";
    }
}
