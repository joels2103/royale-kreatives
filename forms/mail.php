<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'royalekreativesweb@gmail.com'; // Your Gmail
    $mail->Password = 'tvrw sucl apok wcek'; // App Password from Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('royalekreativesweb@gmail.com', 'Royale Kreatives');
    $mail->addAddress('royalekreatives@outlook.com'); // Recipient
    $mail->addReplyTo('royalekreativesweb@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Gmail via PHPMailer';
    $mail->Body    = '<b>This is a test email sent from Gmail SMTP using PHPMailer.</b>';

    $mail->send();
    echo '✅ Message sent!';
} catch (Exception $e) {
    echo "❌ Mailer Error: {$mail->ErrorInfo}";
}
?>
