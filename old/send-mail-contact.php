<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['your-address'];
    $service = $_POST['your-service'];
    $message = $_POST['message'];
    
    // Perform form validation if required
    // You can add your validation logic here
    if (!empty($_POST['s_field'])) {
        // Reject the submission
        // You can log the attempt or take other actions
        echo 'Submission rejected due to suspected spam.';
        exit;
    }


    // Call the sendEmail function to send the email
    sendEmail($first_name, $last_name, $email, $phone, $address, $service, $message);

    // Respond with a success message
    echo 'Thank you for contacting us. We will get back to you soon!';
    exit;
}

function sendEmail($first_name,$last_name, $email, $phone,$address,$service, $message) {
    
    
        // Replace this with your static 'From' address
    

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'esvhvacwpg@gmail.com';
        $mail->Password = 'itmh tadm qxjd junj'; // Replace with your generated App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        
        $timestamp = time();
      
    
        $subject = 'Enquiry through the website - ESV Residential';

        // Sender
        $mail->setFrom($email,$name);
        
        // Reply-To
        $mail->addReplyTo($email, $name);

        // Recipients
        $mail->addAddress('info@esvent.ca','East Side Ventilation');

        // CC recipients
        $mail->addCC('EastSideVent@gmail.com', 'East Side Ventilation');

        // BCC recipients
        $mail->addBCC('simonwtss@gmail.com', 'Simon');
        $mail->addBCC('website-leads@outlook.com', 'Simon');

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject . ' - ' . $timestamp;

      // Compose the email message using an HTML table
    $mailBody = '<html>';
    $mailBody .= '<body>';
    $mailBody .= '<table style="border: 1px solid #afa4a4;padding: 10px;width: 100%; max-width: 600px;">';
    $mailBody .= '<tr><td>First Name:</td><td>' . $first_name . '</td></tr>';
    $mailBody .= '<tr><td>Last Name:</td><td>' . $last_name . '</td></tr>';
    $mailBody .= '<tr><td>Email:</td><td>' . $email . '</td></tr>';
    $mailBody .= '<tr><td>Phone:</td><td>' . $phone . '</td></tr>';
    $mailBody .= '<tr><td>Address:</td><td>' . $address . '</td></tr>';
    $mailBody .= '<tr><td>Service:</td><td>' . $service . '</td></tr>';
    if(!empty($message)){
    $mailBody .= '<tr><td>Message:</td><td>'  . $message . '</td></tr>';
    }
    $mailBody .= '</table>';
    $mailBody .= '</body>';
    $mailBody .= '</html>';

    $mail->Body = $mailBody;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Send email
        $mail->send();
        echo 'Message has been sent. ';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
