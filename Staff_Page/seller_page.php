<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
$id=$_SESSION['loginid'];
include "dbconnect.php";
$q="select * from supplier_reg";
 $sql=mysqli_query($con,$q);
 $que="select * from rate";
 $sq2=mysqli_query($con,$que);
 $quer="select * from rate";
 $sq3=mysqli_query($con,$quer);
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


    <link rel="stylesheet" type="text/css" href="seller/css/util.css">
	<link rel="stylesheet" type="text/css" href="seller/css/main.css">
  
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
	var session1=document.getElementById("session1").value;
  var suid=document.getElementById("suid").value;
  var qty=document.getElementById("qty").value;
  var fat=document.getElementById("fat").value;
  
	
	
	
	if(session1 == "")
    {

    alert("Enter the Session");
    document.getElementById("session1").focus();
    return false;
    }
    if(suid == "")
    {

    alert("Enter Your Registerd Name");
    document.getElementById("suid").focus();
    return false;
    }
    if(qty == "")
    {

    alert("Enter the Quantity");
    document.getElementById("qty").focus();
    return false;
    }
    else if(isNaN(qty))
    {
      alert("Enter the valid Number");
      document.getElementById("qty").focus();
      return false;
    }
    else if(qty<=0)
    {
      alert("Incorrect value");
      document.getElementById("qty").focus();
      return false;
    }


    if(fat == "")
    {

    alert("Enter the FAT range");
    document.getElementById("fat").focus();
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
            <a href="milk.php"><span class="fa fa-home mr-3"></span> Back</a>
          </li>

         <!-- <li>
            <a href="seller_milk_list.php"><span class="fa fa-file mr-3"></span>Seller's Milk List</a>
          </li>-->
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
      
         
        <div class="wrap-login100" style="margin-left:400px;">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" autocomplete="off">
					<span class="login100-form-title">
						Seller Milk Form
                    </span>
                    <div class="form-group">
             <label for="exampleInputPassword1" style="margin-left:250px;">Date :</label>&nbsp;&nbsp;
             <!--<input type="date" class="form-control" id="exampleInputPassword1" placeholder="date">-->
   
    <?php
                 echo " " . date("Y/m/d") . "<br>";

               ?>

           </div>
           <div class="form-group">
             <label for="exampleInputPassword1" style="margin-left:200px;">Session :</label>&nbsp;&nbsp;
             <!--<input type="date" class="form-control" id="exampleInputPassword1" placeholder="date">-->
             <select name="session1" id="session1">
    <option value=""></option>
     <option value="Morning">Morning</option>
     <option value="Afternoon">Afternoon</option>
          </select>
           </div>

					<div>
          <!--  <input class="input100" type="text" placeholder="Supplier ID" id="suid" name="suid">-->
            <select id="suid" name="suid" placeholder="select name of supplier" class="input100">
                                          <option value="">select name of supplier</option>
                                      <?php
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['supp_id']?>"><?php echo $fetch['fname']?> &nbsp; <?php echo $fetch['lname']?>
                                          <?php
                                    }
                                       ?>
                                        </select>
						<span class="focus-input100"></span>
                    </div>
                    <br>
					<div>
						<input class="input100" type="number" placeholder="Quantity(ltr)"  id="qty"  name="qty" min="0">
						<span class="focus-input100"></span>
                    </div>
                    <br>
                    <!--<div>
						<input class="input100" type="number"  placeholder="Rate"  id="rate"  name="rate" min="0">
						<span class="focus-input100"></span>
					</div>-->

          <div>
          <!--  <input class="input100" type="text" placeholder="Supplier ID" id="suid" name="suid">-->
            <select id="fat" name="fat" placeholder="Select Fat/SNF Range" class="input100">
                                          <option value="">Select FAT/SNF Range</option>
                                      <?php
                                  while($fetch=mysqli_fetch_array($sq2))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['fat']?>"><?php echo $fetch['fat']?>
                                          <?php
                                    }
                                       ?>
                                        </select>
						<span class="focus-input100"></span>
                    </div>

					<br>
         

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" onclick="return rvalidate(this)">
							Submit
						</button>
					</div>
                 <br><br><br>
				</form>
			</div>
    
         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="seller/js/main.js"></script>


    
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
$session1=$_POST['session1'];
$suid=$_POST['suid'];
$qty=$_POST['qty'];
$fat=$_POST['fat'];
//$snf=$_POST['snf'];
$da= date("Y-m-d");

$sq=mysqli_query($con,"SELECT * FROM rate WHERE fat='$fat'");
  $re=mysqli_fetch_array($sq,MYSQLI_ASSOC);
  $pr=$re['price'];
  
  $tot=$qty*$pr;


  $s=mysqli_query($con,"SELECT `supp_id`, `fname`, `lname` FROM `supplier_reg`  where supp_id='$suid'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  if(mysqli_num_rows($s)!=0){
  $supid=$r['supp_id'];
  $name1=$r['fname'];
  $name2=$r['lname'];
  
  //$cat=$r['category'];


   
$q1="INSERT INTO `supp_milk`(`supp_id`, `fname`, `lname`,`date1`, `session`, `quantity`, `rate` , `total`) 
        VALUES('$supid','$name1','$name2','$da','$session1', '$qty', '$pr' , '$tot')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
    
  echo " <script>
 alert('Enterd Details Successfully');
 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
  }
 else
{?>
	<script>
        alert("User Not Registerd!...");
    </script>
<?php
}
}
mysqli_close($con);
?>
	
