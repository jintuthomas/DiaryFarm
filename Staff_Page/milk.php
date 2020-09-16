<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
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


#table {
		display: table;
	 	
	 	width: 100%; 
	 	background: #fff;
	 	margin: 0;
	 	box-sizing: border-box;

	 }

	 .caption {
	 	display: block;
	 	width: 100%;
	 	background: #64e0ef;
	 	height: 55px;
	 	padding-left: 10px;
	 	color: #fff;
	 	font-size: 20px;
	 	line-height: 55px;
	 	text-shadow: 1px 1px 1px rgba(0,0,0,.3);
	 	box-sizing: border-box;
	 }


	 .header-row {
	 	background: #8b8b8b;
	 	color: #fff;

	 }

	.row {
		display: table-row;
	}

	.cell {
		display: table-cell;
		
		padding: 10px; 
		border-bottom: 1px solid #e5e5e5;
		text-align: left;
	}

	.primary {
		text-align: left;
	}


	input[type="radio"],
	input[type="checkbox"]{
		display: none;
	}


	@media only screen and (max-width: 760px)  {

		body {
			padding: 0;
		}

		#table {
			display: block;
			margin: 44px 0 0 0;
		}

		.caption {
			position: fixed;
			top: 0;
			text-align: center;
			height: 44px;
			line-height: 44px;
			z-index: 5;
			border-bottom: 2px solid #999;
		}

		.row { 
			position: relative;
			display: block;
			border-bottom: 1px solid #ccc; 

		}

		.header-row {
			display: none;
		}
		
		.cell { 
			display: block;

			border: none;
			position: relative;
			height: 45px;
			line-height: 45px;
			text-align: left;
		}

		.primary:after {
			content: "";
			display: block;
			position: absolute;
			right:20px;
			top:18px;
			z-index: 2;
			width: 0; 
			height: 0; 
			border-top: 10px solid transparent;
			border-bottom: 10px solid transparent; 
			border-right:10px solid #ccc;

		}

		.cell:nth-of-type(n+2) { 
			display: none; 
		}


		input[type="radio"],
		input[type="checkbox"] {
			display: block;
			position: absolute;
			z-index: 1;
			width: 99%;
			height: 100%;
			opacity: 0;
		}
    
    input[type="radio"]:checked,
		input[type="checkbox"]:checked {
		  z-index: -1;
		}

		input[type="radio"]:checked ~ .cell,
		input[type="checkbox"]:checked ~ .cell {
			display: block;

			border-bottom: 1px solid #eee; 
		}

		input[type="radio"]:checked ~ .cell:nth-of-type(n+2),
		input[type="checkbox"]:checked ~ .cell:nth-of-type(n+2) {
			
			background: #e0e0e0;
		}

		input[type="radio"]:checked ~ .cell:nth-of-type(n+2):before,
		input[type="checkbox"]:checked ~ .cell:nth-of-type(n+2):before {
			content: attr(data-label);

			display: inline-block;
			width: 60px;
			background: #999;
			border-radius: 10px;
			height: 20px;
			margin-right: 10px;
			font-size: 12px;
			line-height: 20px;
			text-align: center;
			color: white;

		}

		input[type="radio"]:checked ~ .primary,
		input[type="checkbox"]:checked ~ .primary  {
			border-bottom: 2px solid #999;
		}

		input[type="radio"]:checked ~ .primary:after,
		input[type="checkbox"]:checked ~ .primary:after {
	 		position: absolute;
			right:18px;
			top:22px;
			border-right: 10px solid transparent;
			border-left: 10px solid transparent; 
			border-top:10px solid #ccc;
			z-index: 2;
		}
  }
  .floatLeft {width:45%; float: left;  }
.floatRight { width:45%;float: right;}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 20px 200px;
  cursor: pointer;
  border-radius: 10px;
}

#form1{
    display:none;
}

#form2{
    display:none;
}
  </style>

<script>
function myFunction() {
  var x = document.getElementById("form1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunctions() {
  var y = document.getElementById("form2");
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
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
            <a href="staff_home.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="seller_page.php"><span class="fa fa-table">&nbsp;&nbsp;</span>Seller Form</a>
          </li>
          <li>
            <a href="purchase.php"><span class="fa fa-table">&nbsp;&nbsp;</span>Purchase Form</a>
          </li>
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Manage Milk Transacations</h2><br><br>
      

<div class="floatLeft">
<?php 
include "dbconnect.php";
$da= date("Y-m-d");
 $s=mysqli_query($con,"select sum(qty) from `purchase_milk` where date1='$da'");
 $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
 
  $qu=$r['sum(qty)'];
  $s=mysqli_query($con,"select sum(quantity) from `supp_milk` where date1='$da'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);

 $q=$r['sum(quantity)'];

 $qt=$q-$qu;
?>
        <div class="caption">Milk Collected - Remaining Quantity(till now) : <?php echo $qt; ?> kg/ltr</div>	
<div id="table">
	<div class="header-row row">
    <span class="cell primary">Date & Time</span>
    <span class="cell">Quantity(kg/ltr)</span>
    <span class="cell">Rate</span>
    <span class="cell">Total</span>
    
  </div>
  <?php
	include "dbconnect.php";
	$da= date("Y-m-d");

$sel="SELECT * FROM `supp_milk` where date1='$da'";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
 

 


?>
  <div class="row">
	<input type="radio" name="expand">
    <span class="cell primary" data-label="Vehicle"><?php echo $row['date1']; echo "&nbsp";echo "&nbsp"; echo $row['session']; ?></span>
	<span class="cell" data-label="Vehicle"><?php echo $row['quantity']; ?></span>
	<span class="cell" data-label="Vehicle"><?php echo $row['rate']; ?></span>
	<span class="cell" data-label="Vehicle"><?php echo $row['total']; ?></span>
    
  </div>
 
  <?php }
   
$s=mysqli_query($con,"select sum(quantity) from `supp_milk` where date1='$da'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);

 $q=$r['sum(quantity)'];

 $s=mysqli_query($con,"select sum(total) from `supp_milk` where date1='$da'");
 $r=mysqli_fetch_array($s,MYSQLI_ASSOC);

  $t=$r['sum(total)'];
 
 
 ?>
<span class="cell" data-label="Vehicle">Final Total</span>
  <span class="cell" data-label="Vehicle"><?php echo $q; ?></span>
  <span class="cell" data-label="Vehicle"></span>
	<span class="cell" data-label="Vehicle"><?php echo $t; ?></span>
	
</div>

   <button onclick="myFunction()" class="button"> Display Customer Full Details</button>
</div>

<div class="floatRight">
<div class="caption">Milk Selled</div>	
<div id="table">
	<div class="header-row row">
    <span class="cell primary">Date & Time</span>
    <span class="cell">Quantity</span>
    <span class="cell">Rate</span>
    <span class="cell">Total</span>
    
  </div>
  <?php
	include "dbconnect.php";
	$da= date("Y-m-d");

$sel="SELECT * FROM `purchase_milk` where date1='$da'";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
  
?>
  <div class="row">
	<input type="radio" name="expand">
    <span class="cell primary" data-label="Vehicle"><?php echo $row['date1']; echo "&nbsp";echo "&nbsp"; echo $row['session']; ?></span>
	<span class="cell" data-label="Vehicle"><?php echo $row['qty']; echo "&nbsp"; echo $row['mt'];  ?></span>
	<span class="cell" data-label="Vehicle"><?php echo $row['rate']; ?></span>
	<span class="cell" data-label="Vehicle"><?php echo $row['total']; ?></span>
    
    
  </div> 
  <?php } 
  
 
$s=mysqli_query($con,"select sum(qty) from `purchase_milk` where date1='$da'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);

 $qu=$r['sum(qty)'];

 $s=mysqli_query($con,"select sum(total) from `purchase_milk` where date1='$da'");
 $r=mysqli_fetch_array($s,MYSQLI_ASSOC);

  $to=$r['sum(total)'];

 ?>
<span class="cell" data-label="Vehicle">Final Total</span>
  <span class="cell" data-label="Vehicle"><?php echo $qu; ?></span>
  <span class="cell" data-label="Vehicle"></span>
	<span class="cell" data-label="Vehicle"><?php echo $to; ?></span>
	
</div>

   <button onclick="myFunctions()" class="button"> Display Customer Full Details</button>
</div>         



<form action="" id="form1">

<div id="table">
	<div class="header-row row">
    <span class="cell primary">Name of Supplier</span>
    <span class="cell">Date & Time of Collected Milk</span>
    <span class="cell">Quantity</span>
    <span class="cell">Rate of Milk</span>
    <span class="cell">Total</span>
    
  </div>
  <?php
	include "dbconnect.php";

$sel="SELECT * FROM `supp_milk`";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	

?>
  <div class="row">
	<input type="radio" name="expand">
    <span class="cell primary" data-label="Vehicle"> <?php echo $row['fname']; echo $row['lname'];?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['date1']; echo "&nbsp"; echo $row['session']; ?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['quantity']; ?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['rate']; ?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['total']; ?></span>


    
  </div> 
  <?php
}
?>
</div>

</form>
<br><br>
<form action="" id="form2">
<div id="table">
	<div class="header-row row">
    <span class="cell primary">Date & Time</span>
    <span class="cell">Name</span>
    <span class="cell">Mobile</span>
    <span class="cell">Quantity</span>
    <span class="cell">Rate</span>
	<span class="cell">Total</span>
    
  </div>
  <?php
	include "dbconnect.php";

$sel="SELECT * FROM `purchase_milk`";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	

?>
  <div class="row">
	<input type="radio" name="expand">
    <span class="cell primary" data-label="Vehicle"> <?php echo $row['date1']; echo "&nbsp";echo $row['session'];?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['name']; ?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['mob']; ?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['qty']; ?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['rate']; ?></span>
	<span class="cell primary" data-label="Vehicle"> <?php echo $row['total']; ?></span>


    
  </div> 
  <?php
}
?>
</div>

</form>

    
         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>