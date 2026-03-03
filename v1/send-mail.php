<?php
    require_once('PHPMailer/class.phpmailer.php');  

//if(isset($_POST['first_name'])) {
//if(isset($_POST['your-role'])) {
         
    $_FirstName=$_POST['first_name'];
    $_LastName=$_POST['last_name'];
    $_Email=$_POST['email_id'];
    $_Phoneno=$_POST['phone_no'];
    $_Comments=$_POST['your-message'];
    if(!isset($_POST['your-role'])) {
        $_yourService=$_POST['your-service'];
        $yourAddress=$_POST['your-address'];
        $_Subject = "Enquiry through the website - ESV";
    } else {
        $yourRole=$_POST['your-role'];
        $_Subject = "ESV Carrer Enquiry for ".$_POST['apply_for'];
    }
   
    $html='<!DOCTYPE html>';
    $html.='<html style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
    $html.='<head>';
    $html.='<meta name="viewport" content="width=device-width">';
    $html.='<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
    $html.='<title>Really Simple HTML Email Template</title>';
    $html.='</head>';
    $html.='<body bgcolor="#f6f6f6" style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; -webkit-font-smoothing: antialiased; height: 100%; -webkit-text-size-adjust: none; width: 100% !important; margin: 0; padding: 0;">';
    $html.='<table class="body-wrap" bgcolor="#f6f6f6" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 20px;"><tr style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
    $html.='<td style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
    $html.='<td class="container" bgcolor="#FFFFFF" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; Margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0;">';
    $html.='<div class="content" style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;">';
    $html.='<table style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
    $html.='<td style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Hi,</p>';
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">First name   : '.$_FirstName.'</p>';
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Last name    : '.$_LastName.'</p>';
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Email ID     : '.$_Email.'</p>';
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Phone number : '.$_Phoneno.'</p>';
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Service Type : '.$_yourService.'</p>';
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Address      : '.$yourAddress.'</p>';
    if(!empty($_Comments))
    $html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Comments     : '.$_Comments.'</p>';
    $html.='</td>';
    $html.='</tr></table>';
    $html.='</div>';
    $html.='</td>';
    $html.='<td style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
    $html.='</tr></table>';
    $html.='<table class="footer-wrap" style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; width: 100%; margin: 0; padding: 0;"><tr style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
    $html.='<td style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
    $html.='<td class="container" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; margin: 0 auto; padding: 0;">';
    $html.='<div class="content" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;">';
    $html.='<table style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
    $html.='<td align="center" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
    $html.='</td>';
    $html.='</tr></table>';
    $html.='</div>';
    $html.='</td>';
    $html.='<td style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
    $html.='</tr></table>';
    $html.='</body>';
    $html.='</html>';

    $_To = "arockiasinc30@gmail.com";
    $_ToName = "ESV";
          
    $BCC='arockiasinc30@gmail.com';
    //$BCC='simonwtss@gmail.com';//to-do
    $BCCName='Simon';
     
    $mail = new PHPMailer(); // defaults to using php "mail()"
    $mail->IsSendmail();
    $mail->SetFrom($_Email, $_fName.' '.$_lName);
    $mail->AddReplyTo($_Email,$_Name);
    $address = $_To;
    $mail->AddAddress($address, $_ToName);
    $mail->AddBCC($BCC,$BCCName);
    $mail->Subject    = $_Subject;
    $mail->MsgHTML($html);

    if(!$mail->Send()) {
      $data['status'] = 'error';
      $data['message'] = $mail->ErrorInfo;    
    } else {
      $data['message'] = '<span style="color:#6eb917;">Thank you for contacting us. We will get back to you soon!</span>';
    }
        
    echo json_encode($data);
  // }
//echo 123;
return;
?>