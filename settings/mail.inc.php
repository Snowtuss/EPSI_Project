<?php


require_once("../phpmailer/class.smtp.php");
require_once("../phpmailer/class.phpmailer.php");
$mail= new PHPMailer();
$mail->isSMTP();
 $mail->SMTPAuth   = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'dawavecorp@gmail.com';
$mail->Password = '15995123sN';
$mail->setFrom('dawavecorp@gmail.com');
$mail->Subject = 'Your verification Code';


function mailBody($code){
    $htmlbody = file_get_contents("../templates/mailBody.html");
    $htmlbody = str_replace("OurVerificationCode",$code,$htmlbody);
    return $htmlbody;
}
?>
	