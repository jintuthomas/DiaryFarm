<html>
<body>
<form action="#" method="POST">
<input type="email" name="email" placeholder="email" required>
<input type="submit" name="submit" value="reset">
</form>
</body>
</html>
<?php
  include 'dbconnect.php';
  if(isset($_POST['submit']))
  {

    $em=$_POST['email'];
    $s="SELECT * from login  WHERE username='$em'";
    $ch=mysqli_query($db,$s);
    if($ch)
    {
        ?>
        <?php
    $result="";
    $maild='spardental2020@gmail.com';
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
    $mail->Username='sparkdental2020@gmail.com';//send cheyyunna mail id
    $mail->Password='spark2020dental#';//ayinte password
    
    $mail->setFrom($maild);
    $mail->addAddress($em);//receiverinte mail
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
    }
    else{
      echo "error";
    }
  }
?>