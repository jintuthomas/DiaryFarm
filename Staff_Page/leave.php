<?php
session_start();
include "dbconnect.php";
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];

$id=$_SESSION['loginid'];
//echo "<script>alert($id)</script>";


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
            <a href="apply_leave.php"><span class="fa fa-edit">&nbsp;&nbsp;&nbsp;</span> Apply Leave</a>
          </li>
        
        
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">LEAVE STATUS</h2>
        <br>
        <label style="color:black; font-size:15px;">Current Month status</label>
        <table id="customers" border="1" cellpadding="12" width="100%">


        <th>Name</th>
	<th>Date</th>
    <th>Session</th>
    <th>Reason</th>
    <th>Status</th>
	
   
	
    
  </tr>
    <?php
include "dbconnect.php";
$query1=mysqli_query($con,"SELECT staff_id from staff_reg where loginid='$id'");
$r=mysqli_fetch_array($query1);
$staff_id=$r['staff_id'];
$sel="SELECT * FROM `attendance` where staff_id='$staff_id' && ch=0";
$res=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	

	
	/*$sq=mysqli_query($con,"select username from login where loginid='$lid' ");
	$r=mysqli_fetch_array($sq,MYSQLI_ASSOC);
	$em=$r['username'];*/

?>
<tr>

  <td> 
   <?php 
        echo $row['firstname'];  echo "&nbsp"; echo $row['lastname'];
    ?>
</td>
<td>
<?php
echo $row['date'];
?>
</td>
<td>
<?php
echo $row['session'];
?>
</td>
<td>
<?php
echo $row['reason'];
?>
</td>
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
         

    <br><br><br>

<BR><BR><BR>




    <h2 class="mb-4"></h2>
    <LABEL style="color:black; font-size:15px;">Previous Month status</label>
        <table id="customers" border="1" cellpadding="12" width="100%">


        <th>Name</th>
	<th>Date</th>
    <th>Session</th>
    <th>Reason</th>
    <th>Status</th>
	
   
	
    
  </tr>
    <?php
     include "dbconnect.php";
$query1=mysqli_query($con,"SELECT staff_id from staff_reg where loginid='$id'");
$r=mysqli_fetch_array($query1);
$staff_id=$r['staff_id'];
$sel="SELECT * FROM `attendance` where staff_id='$staff_id' && ch=1";
$res=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	

	
	/*$sq=mysqli_query($con,"select username from login where loginid='$lid' ");
	$r=mysqli_fetch_array($sq,MYSQLI_ASSOC);
	$em=$r['username'];*/

?>
<tr>

  <td> 
   <?php 
        echo $row['firstname'];  echo "&nbsp"; echo $row['lastname'];
    ?>
</td>
<td>
<?php
echo $row['date'];
?>
</td>
<td>
<?php
echo $row['session'];
?>
</td>
<td>
<?php
echo $row['reason'];
?>
</td>
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