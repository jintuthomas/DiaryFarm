



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Page of Milky Store</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="pay/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="pay/vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="pay/css/style.css">
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


<script>
		
var cname="";
var bname="";
var branch="";
var accno="";
var ifsc="";
var amount="";
function fvalidate(e)
{
 
  
  
  var cname=document.getElementById("cname").value;
  var bname=document.getElementById("bname").value;
  var branch=document.getElementById("branch").value;
  var accno=document.getElementById("accno").value;
  var ifsc=document.getElementById("ifsc").value;
  var amount=document.getElementById("amount").value;

	
   if(cname == "")
   {
     alert("Please Fill name Field");
     document.getElementById('cname').focus();
     return false;
   }
 
    if(bname == "")
    {
     alert("Please Enter Your Bank Name");
    document.getElementById("bname").focus();
    return false;
    }
	
	 if(branch == "")
     {
     alert("Please Enter your Branch of enterd bank");
    document.getElementById("branch").focus();
    return false;
    }
	
    if(accno == "")
    {
    alert("Enter your Valid Account Number");
    document.getElementById("accno").focus();
    return false;
    } 
    
	if(ifsc == "")
    {

    alert("Enter the IFSC code");
    document.getElementById("ifsc").focus();
    return false;
    }
	
	
   if(amount == "")
   {
     alert("Please Enter Your Account Balance");
     document.getElementById("amount").focus();
    return false;
     }
	 
	return true;

}


		</script>
</head>
<body class="bg">
    


    <div class="main">
<br><br>
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    
                    <img src="pay/images/pay.jpg" alt="">
                    <div class="signup-img-content">
                        
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="myForm">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Name of Account holder</label>
                                    <input type="text" name="name" id="cname" />
                                </div>
                                
                                <div class="form-input">
                                    <label for="company" class="required">Bank Name</label>
                                    <input type="text" name="bname" id="bname" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Branch</label>
                                    <input type="text" name="branch" id="branch" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Account Number</label>
                                    <input type="text" name="accno" id="accno" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">IFSC</label>
                                    <input type="text" name="ifsc" id="ifsc" />
                                </div>
                               
                               
                            </div>
                            <div class="form-group">
                               
                           <div class="form-input">
                                        <label>Account Type</label>
                                    
                                       
                                        <select name="type" style="width:350px; height:30px;">
                                            <option value="">select</option>
                                            <option value="Current">Current</option>
                                            <option value="Savings">Savings</option>
                                        </select>
                                    
                                </div>
                               
                               
                               
                                <div class="form-input">
                                    <label for="payable" class="required">Amount</label>
                                    <input type="text" name="amount" id="amount" />
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-submit">
                            <input type="submit" value="Register" class="submit" id="submit" name="submit" onclick="return fvalidate(this)">
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" onclick="myFunction()" />
                            <input type="submit" value="Back" class="submit" id="reset" name="back" onclick="myFun()"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script>
function myFunction() {
  document.getElementById("myForm").reset();
}
function myFun() {
    window.location="admin.php"
  
}

</script>
    <script src="pay/vendor/jquery/jquery.min.js"></script>
    <script src="pay/vendor/nouislider/nouislider.min.js"></script>
    <script src="pay/vendor/wnumb/wNumb.js"></script>
    <script src="pay/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="pay/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="pay/js/main.js"></script>
</body>
</html>



	
<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$bname=$_POST['bname'];
$branch=$_POST['branch'];
$accno=$_POST['accno'];
$ifsc=$_POST['ifsc'];
$type=$_POST['type'];
$amount=$_POST['amount'];
//$ano=md5($_POST['accno']);


//echo "<script>alert('$fname');</script>";

$q1="INSERT INTO `supp_bank`(`pname`, `bank_name`, `branch`, `acc_no`, `ifsc`, `acc_type`, `amount`) VALUES
      ('$name','$bname','$branch','$accno','$ifsc','$type','$amount')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Registration Completed...!);
 window.location='/project/home.php'
 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
}
mysqli_close($con);
?>
	


