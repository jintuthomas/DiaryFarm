<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manager Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/project/staff_reg/css/style.css">
	<script>
	
	
	
	</script>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="/project/staff_reg/images/milk.jpg" alt="" height="800">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" name="myform" Onsubmit="return stvalidate(this)" action=""  enctype="multipart/form-data">
                        <h2>Manager registration form</h2>
                        <br><div class="form-group" style="margin-left:400px;">
                            <label for="regi_date" name="regi_date" >Date</label>
                            <?php
                        echo " " . date("Y-m-d") .  "<br>";

                         ?>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="fname" id="fname" autocomplete="off">
                            </div>
							
                            <div class="form-group">
                                <label for="father_name">Father Name :</label>
                                <input type="text" name="father_name" id="father_name" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" name="location" id="location" autocomplete="off" Placeholder="Current locality">
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male"value="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                       <!-- <div class="form-row">
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <input type="text" name="state" id="state" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">  
									<input type="text" name="city" id="city" autocomplete="off">                
                                </div>
                            </div>
                        </div>-->
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" autocomplete="off">
                        </div>
						<div class="form-group">
                            <label for="work">Work</label>
                            <input type="text" name="work" id="work" autocomplete="off">
                        </div>
						<div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number_format" name="salary" id="salary" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Upload Profile Pic</label>
                            <input type="file" name="file" id="file">
                        </div>
                        
						<div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
						<div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="confirm" id="confirm">
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
							<br><br>
							
							
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>

    </div>
   
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="/project/staff_reg/js/main.js"></script>
	 <script src="/project/staff_reg/js/staff_reg.js"></script>
	
	


</body>
</html>


<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$father_name=$_POST['father_name'];
$location=$_POST['location'];
$gender=$_POST['gender'];
//$state=$_POST['state'];
//$city=$_POST['city'];
//$regi_date=$_POST['regi_date'];
$phone=$_POST['phone'];
$work=$_POST['work'];
$salary=$_POST['salary'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
//$pic="icon.png";
$p=md5($_POST['password']);

$dir='pic/';
    $target_file=$dir.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);



$sq2="select * from login where username='$email'";
    $result=mysqli_query($conn,$sq2);
    $rowcount=mysqli_num_rows($result);
	
if($rowcount==0)
{

 $sq1="insert into login(username,password,status)values('$email','$p',2)";
if(mysqli_query($conn,$sq1))
{
  $s=mysqli_query($conn,"select loginid from login where username='$email'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $lid1=$r['loginid'];

$q1="insert into staff_reg(`loginid`, `firstname`, `lastname`, `location`, `gender`, `phone_no`, `work`, `salary`, `email`,`pic`,`status`)
    values('$lid1','$fname','$father_name','$location','$gender','$phone','$work','$salary','$email','$target_file',2)";
	
	$ch=mysqli_query($conn,$q1);
	if($ch)
	{ 

  
 /* echo " <script>
 alert('Registered  Successfully');
 window.location='/project/admin.php'
 </script>";*/
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
$mail->addAddress($email);//receiverinte mail
$mail->addReplyTo($maild);//thirich reply theranam engil a mail

$mail->isHTML(true);//html code mail ayakkan true akki iduka
$mail->Subject='Manager Registration';//mail subject
$mail->Body='<h1>Hai '.$fname.'</h1><br><p>Registration is successfull</p><br><br>Your username is :'.$email.'<br>Your Password is : '.$password.'<br>';//body



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
    alert('Registered  Successfully');
    window.location='/project/admin.php'
    </script>";
}
 }
 /*else
 {
  echo"error:".$ql."<br>".mysqli_error($conn);
   }*/
 } 
 }
 
 else
{?>
	<script>
        alert("User Already Exists");
    </script>
<?php
}
}
mysqli_close($conn);
?>
	