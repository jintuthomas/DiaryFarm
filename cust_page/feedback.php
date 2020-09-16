<?php
session_start();
$login=$_SESSION['login'];
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
  var sub=document.getElementById("sub").value;
  var feed=document.getElementById("feed").value;
  
	
	
	
	if(sub == "")
    {

    alert("Enter the Subject(Brief Content in one sentence)");
    document.getElementById("sub").focus();
    return false;
    }

    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.sub.value)) 
	  {
      alert("Error: Please enter valid Subject!");
      myform.sub.focus();
    return false;
     
   }


	
     if(feed== "")
   {
     alert("Please Enter your Suggessions...");
     document.getElementById("feed").focus();
    return false;
     }

     var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.feed.value)) 
	  {
      alert("Error: Please enter valid Message!");
      myform.feed.focus();
    return false;
     
}
	
return true;
}


</script>
<!--var re = /^[a-zA-Z ]+$/-->

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
            <a href="customer.php"><span class="fa fa-home mr-3"></span>Back</a>
          </li>
        
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <br>
        
        <div class="wrap-contact100" style="margin-left:400px;">
        <form class="contact100-form validate-form" method="POST" name="myform" autocomplete="off">
				<span class="contact100-form-title">
				Write Feedback
                </span>
                
                <div class="form-group">
                  <label for="exampleInputPassword1" style="margin-left:250px;">Date :</label>&nbsp;&nbsp;
                  <!--<input type="date" class="form-control" id="exampleInputPassword1" placeholder="date">-->
				
				               <?php
                      echo " " . date("d/m/Y") . "<br>";

                    ?>

                </div>
                <label>Subject</label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" placeholder="Subject" id="sub" name="sub">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
                </div>
                
               
                <label>Feedback </label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea class="input100"name="feed" id="feed" placeholder="Write Your suggessions...."></textarea>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn"  name="submit" onclick="return rvalidate(this)">
						Submit
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
//$date1=$_POST['date1'];
$sub=$_POST['sub'];
$feed=$_POST['feed'];


$s=mysqli_query($con,"select * from cust_reg where loginid='$id'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $lid=$r['loginid'];
  $n1=$r['cust_name'];
 

$q1="INSERT INTO `feedback`(`loginid`, `n1`, `sub`, `feedback`) VALUES ('$lid','$n1','$sub','$feed')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 

  
  echo " <script>
 alert('Feedback Enterd Successfully');
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