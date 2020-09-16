<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="change/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="change/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="change/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="change/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="change/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="change/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="change/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="change/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="change/css/util.css">
	<link rel="stylesheet" type="text/css" href="change/css/main.css">
<!--===============================================================================================-->

<script>
function cvalidate(a)
{
	var username=document.getElementById("username").value;
  var old=document.getElementById("old").value;
  var newp=document.getElementById("newp").value;
  var cpass=document.getElementById("cpass").value;
  
	
	
	
	if(username == "")
    {

    alert("Enter the Username");
    document.getElementById("username").focus();
    return false;
    }
	
	
   if(old == "")
   {
     alert("Please Enter Your password");
     document.getElementById("old").focus();
    return false;
     }

    
	  
	  if(newp == "")
   {
     alert("Please Enter Your new password");
     document.getElementById("newp").focus();
    return false;
     }

    
	  else if(newp.length<8)
    {
         alert("Your password should be 8 letters");
     document.getElementById("newp").focus();
         return false;
    }
	var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"); 
    if(!strongRegex.test(document.myform.newp.value)) 
	  {
      alert("Error: password should contain atleast one uppercase,lowercase ,digit and special characters!");
      myform.newp.focus();
      return false;
     } 
	 if(cpass == "")
     {
     alert("Please Re-enter password");
     document.getElementById("cpass").focus();
    return false;
     }
	  else if(cpass.length<8)
    {
         alert("Your password should be 8 letters");
     document.getElementById("cpass").focus();
         return false;
    }
	var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"); 
    if(!strongRegex.test(document.myform.cpass.value)) 
	  {
      alert("Error: password should contain atleast one uppercase,lowercase ,digit and special characters!");
      myform.cpass.focus();
      return false;
     } 
	if(newp != cpass)
	{
		alert("Passwords dosen't match");
     document.getElementById("newp").focus();
         return false;
	}
	

	
return true;
}


</script>
<style>
.bg{
    background-image:  url("images/bg7.jpg");
  background-size: cover;
  background-repeat: no-repeat;
 
  background-attachment: fixed;
  display: table;
	width: 100%;
	height: 100vh;
}
</style>
</head>
<body class="bg">
	
	<div class="limiter">
		<div><br><br><br><br><br>
			<div class="wrap-login100" style="margin-left:550px;">
				<div class="login100-form-title" style="background-image: url(change/images/main.jpg);">
					<span class="login100-form-title-1">
						Change Password
					</span>
				</div>

				<form class="login100-form validate-form" name="myform" id="myform" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username/E-mail</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100"> Old Password</span>
						<input class="input100" type="password" name="old" id="old" placeholder="Enter Old password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100"> New Password</span>
						<input class="input100" type="password" name="newp" id="newp" placeholder="Enter New password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100"> Confirm Password</span>
						<input class="input100" type="password" name="cpass" id="cpass" placeholder="Re-Enter password">
						<span class="focus-input100"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" onclick="return cvalidate(this)" />
							Change Password
						</button>
					</div><br><br><br>
					<a href = "javascript:history.back()" style="font-size:20px; margin-left:300px;">Go Back </a>
				</form>
				
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="change/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="change/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="change/vendor/bootstrap/js/popper.js"></script>
	<script src="change/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="change/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="change/vendor/daterangepicker/moment.min.js"></script>
	<script src="change/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="change/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="change/js/main.js"></script>

</body>
</html>


<?php 
include 'dbconnect.php'; 
if(isset($_POST['submit']))
{
$username= $_POST["username"];
$old=$_POST["old"];
$newp=$_POST["newp"];
$cpass=$_POST["cpass"];

$opas=md5($_POST['old']);
$npas=md5($_POST['newp']);
$cpas=md5($_POST['cpass']);
$re=mysqli_query($con,"select * from login where username='$username' and password='$opas'");

if(mysqli_num_rows($re)>0)
{
    
    if ($npas==$cpas)
    { 
    mysqli_query($con,"update login set password='$npas' where username='$username'");
    ?>
        <script>
        alert("successfully updated");
	   window.location='admin.php'
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
else
{
    
    ?>
    
    <script>
    alert("Password Does not exists")
    </script>    
    <?php }
}?>

