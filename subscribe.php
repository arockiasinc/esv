<?php
ini_set('display_errors',1);

    require_once('PHPMailer/class.phpmailer.php');  
        require_once('PHPMailer/class.smtp.php');  
include_once 'admin/classes/access.php';
$_admin=new Access();
    $id=$_Email=trim($_POST['your-email']);
    $data=array('email'=>$id);
    $result=$_admin->add($data);
//var_dump(base64_encode($data["email"]));
if($result==0) {
	 //$data['message'] = '<span style="font-weight:bold;color:white;">You already subscribed.<br>(Kindly check the mailbox and spam folder to confirm subscription)</span>';
	 $data['message'] = '<span style="font-weight:bold;color:white;">You already subscribed.</span>';
	    echo json_encode($data);exit;
}//echo 123;return;
      $data['message'] = '<span style="font-weight:bold;color:#6eb917;">Subscribed Successfully!</span>';
echo json_encode($data);exit;
/* below code email now not needed @ May 19, 2021
    //$_Email=$_POST['your-email'];
    $_Subject = "New Subscription - East Side Ventilation";

    $html='<!DOCTYPE html>'.
                        '<html xmlns="http://www.w3.org/1999/xhtml">'.
                        '<head>'.
                        '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.
                        '<title>East Side Ventilation Subscription</title>'.
                        '<meta name="description" content="East Side Ventilation subscription..." />'.
                        '<meta name="keywords" content="East Side Ventilation subscription" />'.
                        '<meta name="viewport" content="width=device-width, initial-scale=1.0">'. 
                        '<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">'.
                        '<style>@media(max-width:767px){.mb-width{width:100% !important;padding:0 !important;}.mb-pad-0{padding:0px 0px 30px !important}}'.
                        '</style>'.
                        '</head>'.
                        '<body style="background-color:#f7f7f7;">'.
                        '	<section class="form">'.
                        '		<div class="container-fluid">'.
                        '			<div class="content  mb-width" style="padding:50px;margin: 0 auto;">'.
                        '				<div class="head" style="background-color:#007cba;padding:20px 10px;">'.
                        '					<h3 style="color:white;text-align:center;font-family:Poppins;">Thank you for subscribing East Side Ventilation emails.</h3>'.
                        '				</div>'.
                        '				<div class="text" style="background-color:#fff;padding:30px 40px;font-family:Poppins;color:#636363;">'.
                        '					<h4 style="color:black;font-weight:bold;">Hi,</h4>'.
                        '					<p>Our records indicate that you recently agreed to receive East Side Ventilation emails. <br>We will keep you updated at regular intervals.</p><br>'.
                        '					<p><a href="'.$_SERVER['SERVER_NAME'].'/confirmation?id='.base64_encode($data["email"]).'">Please click here to confirm your subscription.</a></p>(OR)<br>'.
                        '					<p><a href="'.$_SERVER['SERVER_NAME'].'/unsubscribe?id='.base64_encode($data["email"]).'">You can unsubscribe by clicking here...</a></p>'.
                        '					<p>Sincerely,<br>East Side Ventilation</p>'.
                        '				</div>'.
                        '				<div class="text mb-pad-0" style="background-color:#fff;padding:0px 40px 30px;font-family:Poppins;color:#636363;">'.
                        '					<h5 style="text-align:center;margin-top: 0px; background-color: #e4e4e4;color:#eeb40d;padding:10px 0;"><a href="https://www.esvhvac.ca/" target="_blank" style="color:#000;text-decoration: none; font-weight: 400;">www.esvhvac.ca</a></h5>'.
                        '				</div>'.
                        '			</div>'.
                        '		</div>'.
                        '	<section>'.
                        '</body>'.
                        '</html>';


    //$_Frm = "eastsidevent@gmail.com";
    //$_Frm = "info@esvent.ca";
    //$_Frm = "arockiasinc30@gmail.com";
        $_Frm = "info@eastsideventilation.ca";
    $_fromName = "East Side Ventilation";
          
    $BCC='arockiasinc30@gmail.com';
    $BCC='simonwtss@gmail.com';//to-do
    $BCCName='Simon';
    $mail = new PHPMailer(); // defaults to using php "mail()"
    $mail->IsSendmail();
   /* 
    $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = "mail.eastsideventilation.ca";
        //$mail->Host = "smtp.gmail.com";
        //$mail->Host = "smtp.eastsideventilation.ca";
               //$mail->Host = "s50-62-56-108.secureserver.net";
                $mail->SMTPAuth = true;                          
        $mail->Username = 'online@eastsideventilation.ca';
       $mail->Password = 'qOAOy~HswVf!'; 
       // $mail->Username = 'arockiasinc30@gmail.com';
        //$mail->Password = 'anbarasi@2020';
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
      // $mail->Port = 465;*/
   /* 
    $mail->SetFrom($_Frm,$_fromName);
    $mail->AddReplyTo($_Frm,$_fromName);
    $mail->AddAddress($_Email);
    $mail->AddBCC($BCC,$BCCName);
    $mail->Subject    = $_Subject;
    $mail->MsgHTML($html);
    //var_dump($mail->Send());return;
    if(!$mail->Send()) {
      $data['status'] = 'error';
      $data['message'] = $mail->ErrorInfo;    
    } else {
      $data['message'] = '<span style="font-weight:bold;color:#6eb917;">Please check your email to confirm subscription<br>(Kindly check the mailbox spam folder too)</span>';
    }
        
    echo json_encode($data);
  
exit;*/
?>
