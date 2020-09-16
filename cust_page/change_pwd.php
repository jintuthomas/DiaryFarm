<?php
session_start();
$login=$_SESSION['login'];
$dbu_name=$_SESSION['username'];

/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['cust_name'];
//$usr_lname=$_SESSION['lname'];
$id=$_SESSION['loginid'];
$usr_id=$_SESSION['cust_id'];
if($login)
{
	?>





<!doctype html>
<html lang="en">
  <head>
  	<title>Customer Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    

<link rel="icon" type="image/png" href="staff_changepass/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="staff_changepass/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="staff_changepass/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="staff_changepass/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="staff_changepass/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="staff_changepass/css/util.css">
	<link rel="stylesheet" type="text/css" href="staff_changepass/css/main.css">
<!--===============================================================================================-->
  
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
  .dot {
  height: 8px;
  width: 8px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
}

  </style>




<script>
function svalidate(a)
{
	//var email=document.getElementById("email").value;
    var oldpass=document.getElementById("oldpass").value;
    var newpass=document.getElementById("newpass").value;
    var cpass=document.getElementById("cpass").value;
    
	
	
	
	/*if(email== "")
    {

    alert("Enter the Email");
    document.getElementById("email").focus();
    return false;
    }
	var email = document.myform.email.value;
   atpos = email.indexOf("@");
   dotpos = email.lastIndexOf(".");
  if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
   {
     alert("Please enter correct email ID")
     document.getElementById('email').focus();
     return false;
  }*/
	
	
   if(oldpass == "")
   {
     alert("Please Enter Your password");
     document.getElementById("oldpass").focus();
    return false;
     }

    
	  
	  if(newpass == "")
   {
     alert("Please Enter Your new password");
     document.getElementById("newpass").focus();
    return false;
     }

    
	  else if(newpass.length<8)
    {
         alert("Your password should be 8 letters");
     document.getElementById("newpass").focus();
         return false;
    }
	var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"); 
    if(!strongRegex.test(document.myform.newpass.value)) 
	  {
      alert("Error: password should contain atleast one uppercase,lowercase ,digit and special characters!");
      myform.newpass.focus();
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
	if(newpass != cpass)
	{
		alert("Passwords dosen't match");
     document.getElementById("newpass").focus();
         return false;
	}
	

	
return true;
}
    
</script>

  </head>
  <body class="bg">
  
		
		<div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
       <!-- <div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>-->
       <form action="" Method="POST" enctype="multipart/form-data">
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg2.jpg);">
	  			<div class="user-logo">
                      
                      
                   <?php
                      include "dbconnect.php";
                      
                      $sel="SELECT * FROM `cust_reg` where loginid='$id'";
                      
                      $res=mysqli_query($db,$sel);
                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                       {
                      /*while($row=$s -> fetch_assoc())*/
                      
                        $pic=$row['photo'];
                      
                      ?>
                      <div class="img" style="background-image: url(/project/registration/<?php echo $row['photo']; ?> );"></div>
                      <?php
                      }
                      ?>
                      </form>
	  				
            <h3><?php echo $usr_name;?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="customer.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
        
         
         
                 
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <br><br>
      
        <div style="margin-left:450px;margin-right:600px;">
				<form class="login100-form validate-form" name="myform" method="POST" onsubmit="return svalidate(this)">
					<span class="login100-form-title p-b-55" style="margin-left:-28px;">
						CHANGE PASSWORD
					</span>

					<!--<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email"  id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>-->
          

					<div>
						<input class="input100" type="password" name="oldpass" id="oldpass" placeholder=" Old Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div><br><br><br>

					<div>
						<input class="input100" type="password" name="newpass" id="newpass" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div><br><br><br>
                   <div>
						<input class="input100" type="password" name="cpass" id="cpass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div><br><br><br>

					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" name="submit" style="margin-right:50px;">
							Change
						</button>
					</div>

					<br>
					

				
                </form>
               </div>

    
         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="staff_changepass/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="staff_changepass/vendor/bootstrap/js/popper.js"></script>
	<script src="staff_changepass/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="staff_changepass/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="staff_changepass/js/main.js"></script>

    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>


<?php 
include "dbconnect.php";
if(isset($_POST['submit']))
{
//$email= $_POST["email"];
$oldpass=$_POST["oldpass"];
$newpass=$_POST["newpass"];
$cpass=$_POST["cpass"];
$email=$dbu_name;

$opas=md5($_POST['oldpass']);
$npas=md5($_POST['newpass']);
$cpas=md5($_POST['cpass']);
$re=mysqli_query($con,"select * from login where username='$email' and password='$opas'");

if(mysqli_num_rows($re)>0)
{
    
    if ($npas==$cpas)
    { 
    mysqli_query($con,"update login set password='$npas' where username='$email'");
    ?>
        <script>
        alert("successfully updated");
	   window.location='customer.php'
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


