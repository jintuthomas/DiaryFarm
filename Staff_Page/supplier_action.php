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

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


  </style>
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
            <a href="supplier_action.php"><span class="fa fa-gift mr-3"></span> Supplier's List</a>
          </li>
          
         
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2>SUPPLIER LIST</h2>
        <br><br><br>



        
<table id="customers" border="5" cellpadding="12" width="100%">
<tr>
	<th>NAME OF SUPPLIER</th>
	<th>ADDRESS</th>
	<th>E-MAIL</th>
	<th>PHONE NUMBER</th>
	<th>REG_DATE</th>
    <th colspan="2">Action</th>
    <th>Verification</th>
	
		
	
    
  </tr>
    <?php
include "dbconnect.php";
$sel="SELECT * FROM `supplier_reg`";

$res=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['loginid'] ;
	
	$sq=mysqli_query($con,"select username from login where loginid='$lid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
	$em=$r['username'];

?>
<tr>
<td> 
   <?php 
        echo $row['fname']; echo "&nbsp"; echo $row['lname']
    ?>
  </td>
 
<td>
<?php
echo $row['address'];
?>
</td>
<td>
<?php
echo $row['email'];
?>
</td>
<td>
<?php
echo $row['contact'];
?>
</td>
<td>
<?php  
echo $row['reg_date'];

?>
</td>
<?php
/*$con=mysqli_connect("localhost","root","","dairy")or die("unable to connect");
 $s=mysqli_query($con,"select status from supplier_reg");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $status=$r['status'];
  if($status=='0')*/
  ?>
<td><button class="label label-danger" ><a href="block_supplier.php?id=<?php echo $lid; ?> " style="color:red";>Block</a></button></td>

<td><button class="label label-warning"><a href="unblock_supplier.php?id=<?php echo $lid; ?> " style="color:green;">UnBlock</a></button></td>
<td>
<?php  
echo $row['verify'];

?>
</td>
</tr>

<?php
}
?>
</table>



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