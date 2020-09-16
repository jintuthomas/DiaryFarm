<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Registration</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">


        
        
		<script>
		
		var fname="";
		var address="";
		var contact="";
		var email="";
		
		function svalidate(s)
		{
		 
		  
		  
		  var address1=document.getElementById("address1").value;
          var address2=document.getElementById("address2").value;
          var address3=document.getElementById("address3").value;
		  var email=document.getElementById("email").value;
		  var contact=document.getElementById("contact").value;
	
		
			
			var x=document.forms["myform"]["fname"].value;
		   if(x=="")
		   {
			 alert("Please Fill name Field");
			 document.getElementById('fname').focus();
			 return false;
		   }
		 
		 if ((x.length < 3) || (x.length > 30))
		  {
			alert("Your Character must be 3 to 15 Character");
			document.getElementById('fname').focus();
			 return false;
		   }
		
		  
			var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
			  if(!pattern1.test(document.myform.fname.value)) 
			  {
			  alert("Error: Please enter valid name!");
			  myform.fname.focus();
			return false;
			 
		}
			
			if(address1 == "")
			{
			 alert("Please enter your Housename or House number");
			document.getElementById("address1").focus();
			return false;
			}
			var pattern1 = new RegExp("^[a-zA-Z0-9 ]*$"); 
			  if(!pattern1.test(document.myform.address1.value)) 
			  {
			  alert("Error: Please enter valid Value!");
			  myform.address1.focus();
			return false;
			 
		}
            if(address2 == "")
			{
			 alert("Please enter your Location Or Post Office");
			document.getElementById("address2").focus();
			return false;
			}
			var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
			  if(!pattern1.test(document.myform.address2.value)) 
			  {
			  alert("Error: Please enter valid Value!");
			  myform.address2.focus();
			return false;
			 
		}
            if(address3 == "")
			{
			 alert("Please enter your pincode");
			document.getElementById("address3").focus();
			return false;
			}
			else if(isNaN(address3))
			{
			  alert("Enter the valid Pincode");
			  document.getElementById("address3").focus();
			  return false;
			}
			else if(address3.length>0 && address3.length!=6)
			{
			  alert("Your Pincode is not less than 6 numbers,Please Enter a valid Pincode");
			  document.getElementById("address3").focus();
			  return false;
			}

			
			 if(email == "")
			 {
			 alert("Fill this email");
			document.getElementById("email").focus();
			return false;
			}
			
			
			//phone
			if(contact == "")
			{
			alert("Enter the Phone Number");
			document.getElementById("contact").focus();
			return false;
			} 
			else if(isNaN(contact))
			{
			  alert("Enter the valid Phone Number");
			  document.getElementById("contact").focus();
			  return false;
			}
			else if(contact.length>0 && contact.length!=10)
			{
			  alert("Your Phone number is less than 10 digits");
			  document.getElementById("contact").focus();
			  return false;
			}
			var pattern = new RegExp("^([6-9]{1})([0-9]{9})$"); 
			  if(!pattern.test(document.myform.contact.value)) 
			  {
			  alert("Error: Phone Number is invalid!");
			  myform.contact.focus();
			return false;
			 }
			
			
			
		
			
			
		
		}
		
		
				</script>
<style>
.bg{
    background-image:  url("img/slider/bg1.jpg");
  background-size: cover;
  background-repeat: no-repeat;
 
  background-attachment: fixed;
  display: table;
	width: 100%;
	height: 100vh;
}
</style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="/project/home.php"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
                        </button>
                        <font size="50">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item active" ><a class="nav-link" href="registration.php">Home</a></li> 
								
							</ul>
							
                        </div> 
</font>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           
				<div class="bg">
               
						
							
							
								<br><br><br><br>
										<div style="margin-left:500px; margin-right:800px;" >
                                            
                                        

                                        <h2>Customer Registration Form</h2><br><br>
                        <form action="" method="POST" onsubmit="return svalidate(this)" name="myform" id="myform" enctype="multipart/form-data">
					  <br><br>
          <div class="form-wrapper" style="margin-right:10px;">
					<label>  Date :&nbsp;&nbsp;</label>
						 <?php echo " " . date("d-m-Y") .  "<br>"; ?>
						<i></i>
					</div><br>
					<div class="form-group">
						<input type="text" placeholder="Customer Name" class="form-control" name="fname" id="fname" autocomplete="off">
						
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Address Line1 (House_name/House Number)" class="form-control" name="address1" id="address1" autocomplete="off">
						<i class="zmdi zmdi-account"></i><br>
                    </div>
                    <div class="form-wrapper">
						<input type="text" placeholder="Address Line2 (location or post office)" class="form-control" name="address2" id="address2" autocomplete="off">
						<i class="zmdi zmdi-account"></i><br>
                    </div>
                    <div class="form-wrapper">
						<input type="number" placeholder="Address Line3 (pincode)" class="form-control" name="address3" id="address3" autocomplete="off">
						<i class="zmdi zmdi-account"></i><br>
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" class="form-control" name="email" id="email" autocomplete="off"><br>
						<i class="zmdi zmdi-email"></i>
					</div>
				
					<div class="form-wrapper">
						<input type="text" placeholder="Contact Number" class="form-control" name="contact" id="contact" autocomplete="off"><br>
						<i></i>
					</div>
					
				
                    <label>Upload Photo</label>
                    <div class="form-wrapper">
						<input type="file" class="form-control" name="file" id="file"><br>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    
					
					
					<button name="submit" id="submit" class="banner_btn">
					
					REGISTER
					
						</button>
					
				</form>
                            
                         


<br>
<a href = "/project/home.php#Testimonial">Already Have An Account? Please Login Click here.. </a>

<br><br>























											
										</div>

					
                 </div>	
				
			</div>
        </section>
        <!--================End Home Banner Area =================-->
        
       
       

        
        <!--================ start footer Area  =================-->	
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>



	
<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$address3=$_POST['address3'];
$email=$_POST['email'];
$contact=$_POST['contact'];
//$photo=$_POST['photo'];
$dir='upload/';
    $target_file=$dir.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
    
	
    $Generator = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $j = substr(str_shuffle($Generator),0,10);
    $pass=md5($j);


//echo "<script>alert('$fname');</script>";
$sq1="select * from login where username='$email'";
    $result=mysqli_query($con,$sq1);
    $rowcount=mysqli_num_rows($result);
	
if($rowcount==0)
{
    $sq="insert into login(username,password,status)values('$email','$pass',5)";
    if(mysqli_query($con,$sq))
    {
      $s=mysqli_query($con,"select loginid from login where username='$email'");
      $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
      $lid=$r['loginid'];

$q1="insert into cust_reg(`loginid`,`cust_name`, `address1`,`address2`,`address3`, `email`, `phone`,`photo`,`status`)
    values('$lid','$fname','$address1','$address2','$address3','$email','$contact','$target_file',0)";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Successfully Registerd!');
 window.location='registration.php'
 </script> ";



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
$mail->Subject='Registration';//mail subject
$mail->Body='<h1>Hai '.$fname.'</h1><br><p> Your Registration is successfull</p><br><br>Your username is :'.$email.'<br>Your Password is : '.$j.'<br>';//body



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
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
 }
}
 else
{?>
	<script>
        alert("User Already Exists, Please Change Your Username or Password");
    </script>
<?php
}
}
mysqli_close($con);
?>