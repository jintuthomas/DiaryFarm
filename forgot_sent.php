<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/css/util.css">
	<link rel="stylesheet" type="text/css" href="/project/forgot_sent/css/main.css">
<!--===============================================================================================-->




<script>
	function fvalidate(e)
{
 
  
  
  var email=document.getElementById("email").value;
  
   
	 if(email == "")
     {
     alert("Please enter your registerd E-mail");
    document.getElementById("email").focus();
    return false;
    }
	
	
	

}

</script>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  onsubmit="return fvalidate(this)" method="POST" action="" autocomplete="off">
					<span class="login100-form-title p-b-43">
						Forget Password
					</span>
					<br><br>
					<label style="font-size:20px;">Email :</label><br>
					<div class="wrap-input100 validate-input">
						
						<input class="input100" type="email" name="email" id="email">
						
					</div>
					<br><br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" type="submit">
							Reset Password
						</button>
					</div>
					
					
					
				</form>

				<div class="login100-more" style="background-image: url('/project/images/forget1.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="/project/forgot_sent/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/project/forgot_sent/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/project/forgot_sent/vendor/bootstrap/js/popper.js"></script>
	<script src="/project/forgot_sent/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/project/forgot_sent/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/project/forgot_sent/vendor/daterangepicker/moment.min.js"></script>
	<script src="/project/forgot_sent/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/project/forgot_sent/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/project/forgot_sent/js/main.js"></script>


	
</body>
</html>


<?php
  include 'dbconnect.php';
  if(isset($_POST['submit']))
  {

	$em=$_POST['email'];
	


	/*$s=mysqli_query($con,"select username from login where username='$em'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $ee=$r['username'];*/

	$sq2="select username from login where username='$em'";
	$result=mysqli_query($con,$sq2);
	
if($result)
{
	
if($result->num_rows > 0)
{


	$result="";
	
	$link="http://localhost/project/forget_get.php?email=".$em;
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
$mail->addAddress($em);//receiverinte mail
$mail->addReplyTo($maild);//thirich reply theranam engil a mail

$mail->isHTML(true);//html code mail ayakkan true akki iduka
$mail->Subject='Reset Your Password';//mail subject
$mail->Body="<h1>Hai User</h1><br><a href=".$link.">Click This Link To Reset Your Password</a>";//body



$mail->send();
if(!$mail->send())
{
$result="Something went wrong";
echo $result;

}
else
{
    /*$result="Mail went successfully";  
	echo $result;*/
	echo " <script>
    alert('Please Check Your Mail, Reset your Password Using that link');
    window.location='home.php'
    </script> ";
}
}
else{
	
	echo " <script>
    alert('Please Check Your Entered Email and Re-enter a Valid E-mail');
	window.location='forgot_sent.php'
	
	</script> ";

}
}
 

  }
  ?>