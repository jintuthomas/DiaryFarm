<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
$sid=$_SESSION['staff_id'];
$id=$_SESSION['loginid'];
if($login)
{
	?>






<!doctype html>
<html lang="en">
  <head>
  	<title>Staff Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">



    <link rel="stylesheet" type="text/css" href="leave/css/util.css">
	<link rel="stylesheet" type="text/css" href="leave/css/main.css">
  
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
function rvalidate(a)
{
	var date=document.getElementById("date").value;
  var session1=document.getElementById("session1").value;
  var reason=document.getElementById("reason").value;
  
	
	
	
	if(date == "")
    {

    alert("Enter the date for the leave day");
    document.getElementById("date").focus();
    return false;
    }
	
	
   if(session1== "")
   {
     alert("Please Enter your Time");
     document.getElementById("session1").focus();
    return false;
     }
     if(reason== "")
   {
     alert("Please Enter your Reason for taking this leave");
     document.getElementById("reason").focus();
    return false;
     }

     var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.reason.value)) 
	  {
      alert("Error: Incorrect!");
      myform.reason.focus();
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
                      
                      $sel="SELECT * FROM `staff_reg` where loginid='$id'";
                      
                      $res=mysqli_query($db,$sel);
                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                       {
                      /*while($row=$s -> fetch_assoc())*/
                      
                        $pic=$row['pic'];
                      
                      ?>
                      <div class="img" style="background-image: url(/project/Staff_Page/<?php echo $row['pic']; ?> );"></div>
                      <?php
                      }
                      ?>
                      </form>
	  				
            <h3><?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="leave.php"><span class="fa fa-home mr-3"></span>Back</a>
          </li>
        
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <br>
        
        <div class="wrap-contact100" style="margin-left:450px;">
        <form class="contact100-form validate-form" method="POST" name="myform">
				<span class="contact100-form-title">
				Apply Leave
                </span>
                
                <div class="form-group">
                  <label for="exampleInputPassword1" style="margin-left:250px;">Date :</label>&nbsp;&nbsp;
                  <!--<input type="date" class="form-control" id="exampleInputPassword1" placeholder="date">-->
				
				               <?php
                      echo " " . date("d/m/Y") . "<br>";

                    ?>

                </div>
                <label> Date </label>
				<div class="wrap-input100 validate-input" data-validate="Date is required">
					<input class="input100" type="date" placeholder="Date" id="date" name="date1">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
                </div>
                
               <label>Session </label>
				<div class="wrap-input100 validate-input">
                    <select name="session1" id="session1" class="input100">
				 <option value=""></option>
				  <option value="Morning">Morning</option>
				  <option value="Afternoon">Afternoon</option>
				  <option value="Full day">Full day</option>
				  </select>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>
                <label>Reason </label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea class="input100"name="reason" id="reason" placeholder="Your Reason For Leave"></textarea>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn"  name="submit" onclick="return rvalidate(this)">
						Apply
					</button>
				</div>
            </form>
</div>

    
        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="leave/js/main.js"></script>


    
  </body>
</html>






<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$date1=$_POST['date1'];
$session1=$_POST['session1'];
$reason=$_POST['reason'];



 
 /* $s=mysqli_query($con,"select  staff_id, firstname, lastname from staff_reg");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);*/
  $sid=$sid;
  $name1=$usr_name;
  $name2=$usr_lname;

$q1="INSERT INTO `attendance`(`staff_id`, `firstname`, `lastname`,`date`,`session`, `reason`,`status`) VALUES
    ('$sid','$name1','$name2','$date1','$session1','$reason',0)";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 

  
  echo " <script>
 alert('Leave Applied');
 </script>";
 
  
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
header("location:/project/home.php");
?>