<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

    if(!isset($_POST['your-resume-title'])) {
        $_FirstName=$_POST['first_name'];
        $_LastName=$_POST['last_name'];
        $_Email=$_POST['email_id'];
        $_Phoneno=$_POST['phone_no'];
        $_Comments='Additional Information: '.$_POST['your-message'];
        $_yourService=$_POST['your-service'];
        $yourAddress=$_POST['your-address'];
        $_Subject = "Enquiry through the website - ESV Residential test";
        $captcha=$_POST['g-recaptcha-response'];
        $lst='';
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeqGtcaAAAAAL-PZtzfFp1XmOCKo3AQg8tDxGPn
&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)//on missuse
        {
            $data['message'] = '<span id="cmsg" tabindex="0" style="font-weight:bold;color:#6eb917;">Thank you for contacting us. We will get back to you soon!</span>';
            echo json_encode($data);
            exit;
        }
    } else {
    $_FirstName=$_POST['your-name'];
    $_LastName=$_POST['your-lastname'];
    $_Email=$_POST['your-email'];
    $_Phoneno=$_POST['your-phone'];
    $_Comments=$lst='<p>Cover Note: '.$_POST['your-message'].'</p>';
        $yourRole=$_POST['your-resume-title'];
       // $_Subject = "New Application for ".$_POST['apply_for']." - East Side Ventilation";
        $_Subject = "Job Application - ESV Residential";
    }
    if(isset($_yourService))
        $lst.='<p">Service Type : '.$_yourService.'</p>';
    if(isset($yourRole))
        $lst.='<p">Resume Title : '.$yourRole.'</p>';
    if(!empty($yourAddress))
        $lst.='<p">Address      :  '.$yourAddress.'</p>';
//Set who the message is to be sent from
$mail->setFrom($_Email, 'test esv');
//Set an alternative reply-to address
//$mail->addReplyTo('esv@example.ca', 'test 2');
//Set who the message is to be sent to
//$mail->addAddress('anbarasi.s@triumphsolutions.net', 'ESV');
$mail->addAddress('sgdhanapal@ymail.com', 'ESV');
//$mail->addAddress('Simon@cbaos.ca', 'ESV');
//$mail->addBCC('simonmadras@gmail.com', 'ESV');
//$mail->addBCC('simonwtss@gmail.com', 'ESV');
//$mail->addCC('arockiasinc30@gmail.com', 'ESV');
//Set the subject line
$mail->Subject = $_Subject.date("Y-m-d H:i:s");
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->isHTML(true); 
//$html='<!DOCTYPE html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><title>East Side Ventilation</title></head><body bgcolor="#f6f6f6" style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; -webkit-font-smoothing: antialiased; height: 100%; -webkit-text-size-adjust: none; width: 100% !important; margin: 0; padding: 0;"><table class="body-wrap" bgcolor="#f6f6f6"><tr><td></td><td class="container" bgcolor="#FFFFFF" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; Margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0;"><div class="content" style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;"><table style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"><td style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"><p >Hi,</p><p >First name   : </p><p >Last name    :</p><p >Email ID     : <p >Phone number : </p><p >Service Type : </p> <p >Resume Title : </p><p >Address      : </p><p ></p></td></tr></table></div></td><td></td></tr></table><table class="footer-wrap" style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; width: 100%; margin: 0; padding: 0;"><tr style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"><td style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td><td class="container" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; margin: 0 auto; padding: 0;"><div class="content" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;"><table style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"><td align="center" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td></tr></table></div></td><td style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td></tr></table></body></html>';
$html='<!DOCTYPE html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><title>East Side Ventilation</title></head><body bgcolor="#f6f6f6"><table class="body-wrap" bgcolor="#f6f6f6"><tr><td></td><td class="container" bgcolor="#FFFFFF"><div class="content" ><table><td><p >Hi,</p><p >First name   : '.$_FirstName.' </p><p >Last name    : '.$_LastName.'</p><p >Email ID     : '.$_Email.' <p >Phone number : '.$_Phoneno.' </p>'.$lst.'</td></tr></table></div></td><td></td></tr></table><table class="footer-wrap"><tr><td></td><td class="container"><table style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr><td align="center"></td></tr></table></div></td><td style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td></tr></table></body></html>';
//$html="esvhvac.ca test mail on ".date("Y-m-d H:i:s");
$mail->msgHTML($html);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.webp');
 /*$debug = '';
$mail->Debugoutput = function($str, $level) {
    $GLOBALS['debug'] .= "$level: $str\n";
};*/
//send the message, check for errors
if (!$mail->send()) {
    
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   
//...later
echo $debug;
    echo "Message sent!";
}exit;
?>