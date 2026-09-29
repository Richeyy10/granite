<?php
/**
 * send-consultation.php
 * Handles the "Request a Consultation" form (currently used on index.php)
 * and emails the submission to Granite Peak Healthcare Solutions.
 *
 * Sends via SMTP using PHPMailer (see /libs/PHPMailer) instead of PHP's
 * built-in mail() function, because mail() requires a locally configured
 * mail server that most machines — including localhost dev setups —
 * don't have. Fill in real credentials in mail-config.php before testing.
 */

require __DIR__ . '/libs/PHPMailer/Exception.php';
require __DIR__ . '/libs/PHPMailer/PHPMailer.php';
require __DIR__ . '/libs/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Only accept POST requests.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

// Simple honeypot spam trap — real visitors never fill this hidden field in.
if (!empty($_POST['website'])) {
    header("Location: index.php?consultation=sent");
    exit;
}

// Collect and sanitize form fields.
function clean($value) {
    $value = trim($value ?? '');
    $value = str_replace(["\r", "\n"], '', $value); // prevent header injection
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$name         = clean($_POST['name'] ?? '');
$email        = clean($_POST['email'] ?? '');
$phone        = clean($_POST['phone'] ?? '');
$service      = clean($_POST['service'] ?? '');
$facilityType = clean($_POST['facility_type'] ?? '');
$message      = trim($_POST['message'] ?? '');

// Required fields.
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $phone === '') {
    header("Location: index.php?consultation=error");
    exit;
}

$config = require __DIR__ . '/mail-config.php';

$body  = "You have a new consultation request from the website:\n\n";
$body .= "Name: " . ($name !== '' ? $name : "(not provided)") . "\n";
$body .= "Email: {$email}\n";
$body .= "Phone: {$phone}\n";
$body .= "Service requested: " . ($service !== '' ? $service : "(not specified)") . "\n";
$body .= "Facility type: " . ($facilityType !== '' ? $facilityType : "(not specified)") . "\n\n";
$body .= "Message:\n" . (trim($message) !== '' ? trim($message) : "(no message)") . "\n";

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = $config['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['SMTP_USERNAME'];
    $mail->Password   = $config['SMTP_PASSWORD'];
    $mail->SMTPSecure = $config['SMTP_SECURE'] === 'ssl'
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $config['SMTP_PORT'];

    // Sender / recipient
    $mail->setFrom($config['FROM_EMAIL'], $config['FROM_NAME']);
    $mail->addAddress($config['TO_EMAIL']);
    $mail->addReplyTo($email, $name !== '' ? $name : $email);

    // Content
    $mail->isHTML(false);
    $mail->Subject = "New Consultation Request" . ($name !== '' ? " from {$name}" : "");
    $mail->Body    = $body;

    $mail->send();
    header("Location: index.php?consultation=sent");
} catch (Exception $e) {
    // Log the real error server-side for debugging; don't expose it to visitors.
    error_log("Consultation form mail error: " . $mail->ErrorInfo);
    header("Location: index.php?consultation=error");
}
exit;