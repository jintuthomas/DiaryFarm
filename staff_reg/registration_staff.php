<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	<script>
	
function fvalidate(a)
{
 
  
  
  var location=document.getElementById("location").value;
  var phone=document.getElementById("phone").value;
  var work=document.getElementById("work").value;
  var wt=document.getElementById("wt").value;
  var salary=document.getElementById("salary").value;
  var email=document.getElementById("email").value;
	
    var x=document.getElementById("fname").value;
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





     var y=document.getElementById("father_name").value;
    if(y=="")
    {
       alert("Please Enter Last Name");
       document.getElementById('father_name').focus();
       return false;
    }
 

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.father_name.value)) 
	  {
      alert("Error: Please enter valid name!");
      myform.father_name.focus();
    return false;
     
}

    if(location == "")
    {
     alert("Enter your location please");
    document.getElementById("location").focus();
    return false;
    }

    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.location.value)) 
	  {
      alert("Error: Please enter valid Location!");
      myform.location.focus();
    return false;
     
}
	
    if(phone == "")
    {
    alert("Enter your Contact Number");
    document.getElementById("phone").focus();
    return false;
    } 
    else if(isNaN(phone))
    {
      alert("Enter the valid Phone Number");
      document.getElementById("phone").focus();
      return false;
    }
    else if(phone.length>0 && phone.length!=10)
    {
      alert("Your Phone number is less than 10 digits");
      document.getElementById("phone").focus();
      return false;
    }
	var pattern = new RegExp("^([6-9]{1})([0-9]{9})$"); 
      if(!pattern.test(document.myform.phone.value)) 
	  {
      alert("Error: Phone Number is invalid!");
      myform.phone.focus();
    return false;
     }
	 
	if(work == "")
    {

    alert("Assign Post");
    document.getElementById("work").focus();
    return false;
    }
    if(wt == "")
    {

    alert("Enter Work Time");
    document.getElementById("wt").focus();
    return false;
    }
	if(salary == "")
    {

    alert("Salary for assign");
    document.getElementById("salary").focus();
    return false;
    }
    else if(isNaN(salary))
    {
      alert("Enter the valid Phone Number");
      document.getElementById("salary").focus();
      return false;
    }
	
	 if(email == "")
     {
     alert("Fill this email");
    document.getElementById("email").focus();
    return false;
    }
	

}
	
	
	</script>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/milk.jpg" alt="" height="800">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" name="myform" action="" onsubmit="return fvalidate(this)">
                        <h2>Staff registration form</h2>
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
                                <input type="radio" name="gender" id="male" value="male">
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
                            <!--<input type="text" name="work" id="work" autocomplete="off">-->

                            <?php
include "dbconnect.php";
$q="select * from designation";
 $sql=mysqli_query($con,$q);
 ?>
<select id="work" name="work" placeholder="select Designation">
                                          <option value="">select Designation</option>
                                      <?php
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['post']?>"><?php echo $fetch['post']?>
                                          <?php
                                    }
                                       ?>
                                        </select>


                        </div>

                        <div class="form-group">
                            <label for="work_time">Work_Time</label>
                            <!--<input type="text" name="work" id="work" autocomplete="off">-->

                            <select id="wt" name="work_time">
                            <option></option>
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                                     </select>
                        </div>
						<div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number_format" name="salary" id="salary" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" autocomplete="off"/>
                        </div>
						
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit">
							<br><br>
							
							
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>

    </div>
   
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	 
	
	


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
$work_time=$_POST['work_time'];
$salary=$_POST['salary'];
$email=$_POST['email'];




$sq2="select * from login where username='$email'";
    $result=mysqli_query($db,$sq2);
    $rowcount=mysqli_num_rows($result);
	
if($rowcount==0)
{
    
 $sq="insert into login(username,status)values('$email',6)";
 if(mysqli_query($db,$sq))
 {
   $s=mysqli_query($con,"select loginid from login where username='$email'");
   $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
   $lid=$r['loginid'];


$q1="insert into registration_staff(`loginid`,`name1`, `name2`, `loc`, `gen`, `ph_no`, `work`, `work_time`, `salary`, `email`,`status`)
    values('$lid','$fname','$father_name','$location','$gender','$phone','$work','$work_time','$salary','$email',6)";
	
	$ch=mysqli_query($db,$q1);
	if($ch)
	{ 

  
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
$mail->Subject='Test Mail';//mail subject
$mail->Body='<h1>Hai '.$fname.'</h1><br><p>Registration is successfull</p><br><br>Thank you for joining with us.';//body



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
 else
 {
  echo"error:".$ql."<br>".mysqli_error($db);
   }
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
	