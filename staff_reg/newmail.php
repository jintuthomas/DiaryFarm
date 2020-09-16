<?php
$result="";
$maild='arjunedappllil@gmail.com';
require 'phpmailer/PHPMailerAutoload.php'; 
$mail = new PHPMailer(true);

$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
        );
$mail->isHTML(true);// Set email format to HTML
$mail->Username='donarose@mca.ajce.in';//send cheyyunna mail id
$mail->Password='9207515691';//ayinte password

$mail->setFrom($maild);
$mail->addAddress('donarosemathew97@gmail.com');//receiverinte mail
$mail->addReplyTo($maild);//thirich reply theranam engil a mail

$mail->isHTML(true);//html code mail ayakkan true akki iduka
$mail->Subject='Test Mail';//mail subject
$mail->Body='<h1>Hello Arjun</h1>';//body



$mail->send();
if(!$mail->send())
{
$result="Something went wrong";
echo $result;

}
else
{
    $result="Mail went successfully";  
    echo $result;
}
?>