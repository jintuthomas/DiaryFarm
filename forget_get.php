
<?php  

$email=$_GET['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Password Reset Page</title>
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
 
  
  
  var user=document.getElementById("user").value;
  var npass=document.getElementById("npass").value;
  var cpass=document.getElementById("cpass").value;
  
   
	 if(user == "")
     {
     alert("Please enter your registerd E-mail");
    document.getElementById("user").focus();
    return false;
    }
	if(npass == "")
     {
     alert("Please enter your New password");
    document.getElementById("npass").focus();
    return false;
    }
	if(cpass == "")
     {
     alert("Re-enter your password");
    document.getElementById("cpass").focus();
    return false;
    }
	
	
	

}

</script>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" autocomplete="off" onsubmit="return fvalidate(this)">
					<span class="login100-form-title p-b-43">
						Change Password
					</span>
					
					<!--<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="email" name="user" id="user">
						<span class="focus-input100"></span>
						<span class="label-input100">E-mail</span>
					</div>-->
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="newp" id="npass">
						<span class="focus-input100"></span>
						<span class="label-input100">New Password</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="cpass" id="cpass">
						<span class="focus-input100"></span>
						<span class="label-input100">Re-Enter Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						

						
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
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
				include "dbconnect.php";
	 
				if(isset($_POST['submit']))
				{
					//$username=$_POST["user"];
					$newp=$_POST["newp"];
					$cpass=$_POST["cpass"];
					
					
					$npas=md5($_POST['newp']);
					$cpas=md5($_POST['cpass']);
					$re=mysqli_query($con,"select * from login where username='$email'");
					
					if(mysqli_num_rows($re)>0)
					{
						
						if ($npas==$cpas)
						{ 
						mysqli_query($con,"update login set password='$npas' where username='$email'");
						?>
							<script>
							alert("successfully updated");
						   window.location='home.php'
							</script>
							<?php
							
						}
						else
						{
							?>
							<script>
							alert("Password MisMatch")
							</script>
						
					<?php
						}
					}
					
					}?>
					