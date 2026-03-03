<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Simple spam honeypot field check
    if (!empty($_POST['s_field'])) {
        echo 'Submission rejected due to suspected spam.';
        exit;
    }

    // Retrieve and sanitize input data
    $fname    = trim($_POST['first_name']);
    $lname    = trim($_POST['last_name']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $title    = trim($_POST['title']);
    $message  = trim($_POST['message']);
    $applyfor = trim($_POST['applyfor']);
    $resume   = $_FILES['resume'];

    // Validate resume upload
    if (
        empty($resume['tmp_name']) ||  
        !in_array(strtolower(pathinfo($resume['name'], PATHINFO_EXTENSION)), ['pdf', 'doc', 'docx'])
    ) {
        echo 'Please upload a valid resume file (PDF, DOC, or DOCX).';
        exit;
    }

    // Validate required fields
    if (empty($fname) || empty($lname) || empty($email) || empty($applyfor)) {
        echo 'Please fill in all required fields.';
        exit;
    }

    // Check for valid email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
        exit;
    }

    // Spam word and pattern filter
    $spam_patterns = [
        '/\$\d+/',                    // dollar amounts like $3,222
        '/deposit available/i',       // spam phrase
        '/http|https|www/i',          // links
        '/viagra|loan|crypto|bitcoin/i', // spam keywords
        '/xxx|porn|sex/i',            // adult content
        '/[^\w\s@.,?!-]/u'            // weird special chars or unicode spam
    ];

    foreach ([$fname, $lname, $email, $phone, $title, $message, $applyfor] as $input) {
        foreach ($spam_patterns as $pattern) {
            if (preg_match($pattern, $input)) {
                echo 'Spam detected. Submission blocked.';
                exit;
            }
        }
    }

    // If passed all checks, send email
    $result = sendEmail($fname, $lname, $email, $phone, $title, $message, $applyfor, $resume);

    echo $result
        ? 'Thank you for contacting us. We will get back to you soon!'
        : 'Failed to send the email. Please try again later.';
    exit;
}

function sendEmail($fname, $lname, $email, $phone, $title, $message, $applyfor, $resume_file)
{
   
    $toemail = 'info@esvent.ca';
    $subject = 'Job Application through website - ESV Commercial';
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'wtsslead@gmail.com';
        $mail->Password = 'xixy vnzh vbrh wbmo'; // Replace with your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $timestamp = time();

        // Sender and recipient
        $mail->setFrom($email, $fname . ' ' . $lname);
        $mail->addAddress($toemail);
        $mail->addCC('EastSideVent@gmail.com', 'East Side Ventilation');
        $mail->addBCC('simonwtss@gmail.com', 'Simon');
        $mail->addBCC('website-leads@outlook.com', 'Simon');

        // Attachments
        $mail->addAttachment($resume_file['tmp_name'], $resume_file['name']);

        // Email body
        $mail->isHTML(true);
        $mail->Subject = $subject . ' - ' . $timestamp;
        $mail->Body = '
        <html>
        <body>
        <table style="border: 1px solid #afa4a4; padding: 10px; width: 100%; max-width: 600px;">
            <tr><td><b>Applied For:</b></td><td>' . htmlspecialchars($applyfor) . '</td></tr>
            <tr><td>First Name:</td><td>' . htmlspecialchars($fname) . '</td></tr>
            <tr><td>Last Name:</td><td>' . htmlspecialchars($lname) . '</td></tr>
            <tr><td>Email:</td><td>' . htmlspecialchars($email) . '</td></tr>
            <tr><td>Phone:</td><td>' . htmlspecialchars($phone) . '</td></tr>
            <tr><td>CV Title:</td><td>' . htmlspecialchars($title) . '</td></tr>
            <tr><td>Message:</td><td>' . nl2br(htmlspecialchars($message)) . '</td></tr>
        </table>
        </body>
        </html>';

        $mail->addReplyTo($email, $fname . ' ' . $lname);
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
