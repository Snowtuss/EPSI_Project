<?php

//require_once '../phpmailer/PHPMailerAutoload.php';
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
//$mail->Body = 'jkjkjkj';
//$mail->addAddress('taguiamine@gmail.com');
//$mail->send();

function mailBody($code){
    $htmlbody = '
                            <!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title></title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style>
		* {
			box-sizing: border-box;
		}

		th.column {
			padding: 0
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		@media (max-width:620px) {
			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.row-content {
				width: 100% !important;
			}

			.image_block img.big {
				width: auto !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}
		}
	</style>
</head>
<body style="background-color: #d9dffa; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; background-color: #d9dffa;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; background-color: #cfd6f4;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="600">
<tbody>
<tr>
<th class="column" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;padding-top:20px;">
<div align="center" style="line-height:10px"><img alt="Card Header with Border and Shadow Animated" class="big" src="https://i.ibb.co/xfb3GBF/animated-header.gif" style="display: block; height: auto; border: 0; width: 600px; max-width: 100%;" title="Card Header with Border and Shadow Animated" width="600"/></div>
</td>
</tr>
</table>
</th>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; background-color: #d9dffa; background-image: url(\'https://i.ibb.co/8YZjyjN/body-background-2.png\'); background-position: top center; background-repeat: repeat;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="600">
<tbody>
<tr>
<th class="column" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top; padding-left: 50px; padding-right: 50px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:25px;">
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #506bec; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; font-size: 14px;"><strong><span style="font-size:38px;">Confirmation code</span></strong></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; font-size: 14px;"><span style="font-size:16px;">Hey, your awesome authentification code is down bellow !</span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; font-size: 14px;"><span style="font-size:16px;">What are you waiting for !</span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tr>
<td style="padding-bottom:20px;padding-left:10px;padding-right:10px;padding-top:20px;text-align:left;">
<!--[if mso]><a:roundrect xmlns:a="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" style="height:40px;width:46px;v-text-anchor:middle;" arcsize="40%" stroke="false" fillcolor="#506bec"><w:anchorlock/><v:textbox inset="5px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:12px"><![endif]-->
<div style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#506bec;border-radius:16px;width:auto;border-top:0px solid TRANSPARENT;border-right:0px solid TRANSPARENT;border-bottom:0px solid TRANSPARENT;border-left:0px solid TRANSPARENT;padding-top:8px;padding-bottom:8px;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:25px;padding-right:20px;font-size:12px;display:inline-block;letter-spacing:normal;"><span style="font-size: 12px; line-height: 2; word-break: break-word; mso-line-height-alt: 24px;">'.$code.'</span></span></div>
<!--[if mso]></center></v:textbox></a:roundrect><![endif]-->
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; font-size: 14px;"><span style="font-size:14px;">Having trouble? <a href="http://www.example.com/" rel="noopener" style="text-decoration: none; color: #40507a;" target="_blank" title="@socialaccount"><strong>@socialaccount</strong></a></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td style="padding-bottom:25px;padding-left:10px;padding-right:10px;padding-top:10px;">
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; font-size: 14px;">Didn’t request a verification code ? You can ignore this message.</p>
</div>
</div>
</td>
</tr>
</table>
</th>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="600">
<tbody>
<tr>
<th class="column" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;padding-bottom:5px;">
<div align="center" style="line-height:10px"><img alt="Card Bottom with Border and Shadow Image" class="big" src="https://i.ibb.co/74HCvQ2/bottom-img.png" style="display: block; height: auto; border: 0; width: 600px; max-width: 100%;" title="Card Bottom with Border and Shadow Image" width="600"/></div>
</td>
</tr>
</table>
</th>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="600">
<tbody>
<tr>
<th class="column" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top; padding-left: 10px; padding-right: 10px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tr>
<td style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;width:100%;">
<div align="center" style="line-height:10px"><a href="http://www.example.com/" style="outline:none" tabindex="-1" target="_blank"><img alt="Your Logo" src="images/logo.png" style="display: block; height: auto; border: 0; width: 145px; max-width: 100%;" title="Your Logo" width="145"/></a></div>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="social_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="72px">
<tr>
<td style="padding:0 2px 0 2px;"><a href="https://www.instagram.com/" target="_blank"><img alt="Instagram" height="32" src="images/instagram2x.png" style="display: block; height: auto; border: 0;" title="instagram" width="32"/></a></td>
<td style="padding:0 2px 0 2px;"><a href="https://www.twitter.com/" target="_blank"><img alt="Twitter" height="32" src="images/twitter2x.png" style="display: block; height: auto; border: 0;" title="twitter" width="32"/></a></td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #97a2da; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; font-size: 14px; text-align: center;">+(123) 456–7890</p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #97a2da; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; font-size: 14px; text-align: center;">This link will expire in the next 24 hours.<br/>Please feel free to contact us at email@yourbrand.com. </p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; word-break: break-word;" width="100%">
<tr>
<td style="padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px;">
<div style="font-family: sans-serif">
<div style="font-size: 14px; color: #97a2da; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
<p style="margin: 0; text-align: center; font-size: 12px;"><span style="font-size:12px;">Copyright© 2021 Your Brand.</span></p>
<p id="m_8010100107078456808text01" style="margin: 0; text-align: center; font-size: 12px;"><span style="font-size:12px;"><a href="http://www.example.com/" rel="noopener" style="text-decoration: underline; color: #97a2da;" target="_blank" title="Unsubscribe ">Unsubscribe</a> | <a href="http://www.example.com/" rel="noopener" style="text-decoration: underline; color: #97a2da;" target="_blank" title="Manage your preferences">Manage your preferences</a> | <a href="http://www.example.com/" rel="noopener" style="text-decoration: underline; color: #97a2da;" target="_blank" title="Privacy Policy">Privacy Policy</a></span></p>
</div>
</div>
</td>
</tr>
</table>
</th>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="600">
<tbody>
<tr>
<th class="column" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="icons_block" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tr>
<td style="color:#9d9d9d;font-family:inherit;font-size:15px;padding-bottom:10px;padding-top:10px;text-align:center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0;" width="100%">
<tr>
<td style="text-align:center;">
<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0; mso-table-rspace: 0; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
<!--<![endif]-->
<tr>
<td style="text-align:center;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:6px;"><a href="https://www.designedwithbee.com/"><img align="center" alt="Designed with BEE" class="icon" height="32" src="images/bee.png" style="display: block; height: auto; border: 0;" width="34"/></a></td>
<td style="font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:15px;color:#9d9d9d;vertical-align:middle;letter-spacing:undefined;text-align:center;"><a href="https://www.designedwithbee.com/" style="color:#9d9d9d;text-decoration:none;">Designed with BEE</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</th>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><!-- End -->
</body>
</html>
                            ';
    return $htmlbody;
}
?>
	