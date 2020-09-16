<?php 
include 'dbconnect.php';
$email=$_POST["email"];
$query="SELECT * FROM login WHERE username='$email'";
$result = mysqli_query($db,$query);
$query2="SELECT * FROM supplier_reg WHERE email='$email'";
$result2 = mysqli_query($db,$query2);

   if($result->num_rows > 0)
   {         
    

      $link="http://localhost/project/forget_page/forget_form.html?email=".$email;
      $result="";
$maild='milkystore90@gmail.com';
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
$mail->Username='milkystore90@gmail.com';//send cheyyunna mail id
$mail->Password='Milky@1990';//ayinte password

$mail->setFrom($maild);
$mail->addAddress();//receiverinte mail
$mail->addReplyTo($maild);//thirich reply theranam engil a mail

$mail->isHTML(true);//html code mail ayakkan true akki iduka
$mail->Subject='Test Mail';//mail subject
$mail->Body="<h1>Hai User</h1><br><br><a href='".$link."'>Click This Link To Reset Your Password</a>";//body



$mail->send();
if(!$mail->send())
{
$result="Something went wrong";
echo $result;

}
else
{
    /*$result="Mail send Successfully. Please check mail and update your password";  
    echo $result;*/
    echo " <script>
    alert('Mail send Successfully. Please check mail and update your password');
    window.location='home.php'
    </script> ";
}

}
else if($result2->num_rows > 0)
{
echo '<script>alert("result2");</script>';
}
else
{
    echo '<script>alert("no result");</script>'
}
?>