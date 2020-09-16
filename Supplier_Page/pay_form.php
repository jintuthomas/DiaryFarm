<?php

include "dbconnect.php";
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$id=$_SESSION['loginid'];
if($login)
{


    $sq=mysqli_query($db,"SELECT * FROM `supp_bank`");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $a=$r['acc_no'];
    
    $sq2="select * from supp_bank where loginid='$id'";
    $result=mysqli_query($conn,$sq2);
    $rowcount=mysqli_num_rows($result);
	
if($rowcount==0)
{
    
    
     
    ?>




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
                                    <input type="text" name="name" id="name" />
                                </div>
                                
                                <div class="form-input">
                                    <label for="company" class="required">Bank Name</label>
                                    <input type="text" name="bname" id="bname" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Branch</label>
                                    <input type="text" name="branch" id="branch" />
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
                                    <label for="email" class="required">Account Number</label>
                                    <input type="text" name="accno" id="accno" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">IFSC</label>
                                    <input type="text" name="ifsc" id="ifsc" />
                                </div>
                               
                               
                              
                            </div>
                        </div>
                       
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" onclick="myFunction()" />
                            <a href="javascript:history.back()" class="submit">Back</a>
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
//$ph=$_POST['phone_number'];
//$email=$_POST['email'];
//$amount=$_POST['amount'];
//$ano=md5($_POST['accno']);


//echo "<script>alert('$fname');</script>";
$lid=$id;

$q1="INSERT INTO `supp_bank`(`loginid`,`pname`, `bank_name`, `branch`, `acc_no`, `ifsc`, `acc_type`) VALUES
      ('$lid','$name','$bname','$branch','$accno','$ifsc','$type')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Add Bank Information Successfully Into This Site');
 window.location='profile.php'
 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
}
mysqli_close($con);

?>
	
<?php
}
else
{
?>




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

                <?php
            include "dbconnect.php";
           $sel="SELECT * FROM `supp_bank` where loginid='$id'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
             
            
    ?>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="myForm">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Name of Account holder</label>
                                    <input type="text" name="name" id="name" value="<?php echo $row["pname"]; ?>"/>
                                </div>
                                
                                <div class="form-input">
                                    <label for="company" class="required">Bank Name</label>
                                    <input type="text" name="bname" id="bname" value="<?php echo $row["bank_name"]; ?>" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Branch</label>
                                    <input type="text" name="branch" id="branch" value="<?php echo $row["branch"]; ?>"/>
                                </div>
                                
                               
                               
                            </div>
                            <div class="form-group">
                               
                           <div class="form-input">
                                        <label>Account Type</label>
                                    
                                       
                                        <select name="type" style="width:350px; height:30px;">
                                            <option><?php echo $row["acc_type"]; ?></option>
                                            <option value="Current">Current</option>
                                            <option value="Savings">Savings</option>
                                        </select>
                                    
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Account Number</label>
                                    <input type="text" name="accno" id="accno" value="<?php echo $row["acc_no"]; ?>" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">IFSC</label>
                                    <input type="text" name="ifsc" id="ifsc" value="<?php echo $row["ifsc"]; ?>"/>
                                </div>
                               
                               
                               
                                
                            </div>
                        </div>
                        
                       
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" onclick="myFunction()" />
                            <a href="javascript:history.back()" class="submit">Back</a>
                        </div>
                    </form>
                    <?php  }?>
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
//$ph=$_POST['phone_number'];
//$email=$_POST['email'];
//$amount=$_POST['amount'];
//$ano=md5($_POST['accno']);


//echo "<script>alert('$fname');</script>";

$q1="UPDATE `supp_bank` SET pname='$name', bank_name='$bname', branch='$branch', acc_no='$accno', ifsc='$ifsc', 
    acc_type='$type' where loginid='$id'";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Update Bank Information Successfully Into This Site');
 window.location='profile.php'
 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
}
mysqli_close($con);

?>





<?php

}
}
else
{
header("location:home.php");
}
?>
