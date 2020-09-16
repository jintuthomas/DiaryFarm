<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
	?>
<html>
<head>

<!--===============================================================================================-->	
	<!--<link rel="icon" type="image/png" href="/project/atten_table/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="/project/atten_table/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/project/atten_table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/project/atten_table/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="/project/atten_table/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="/project/atten_table/vendor/perfect-scrollbar/perfect-scrollbar.css">-->

	<link rel="stylesheet" type="text/css" href="/project/atten_table/css/util.css">
	<link rel="stylesheet" type="text/css" href="/project/atten_table/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.css.map.css">
<link rel="stylesheet" href="css/style.scss">

<link rel="stylesheet" type="text/css" href="css/ad.css">
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
th {
  background-color: #191970;
  color: white;
}
</style>
</head>
<body class="bg">
<div class="container">
<!--     SIDE AREA -->
    <div class="sideArea">
        <div class="avatar">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="">
           <div class="avatarName">Welcome,<br>ADMIN</div>
        </div>
        <ul class="sideMenu">
        <li><a href="admin.php"><span class="fa fa-sitemap"></span>HOME</a></li>
        <li><a href="pay_form.php"><span class="fa fa-sitemap"></span>BANK DETAILS</a></li>
		
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>MANAGE USERS</a>
                <ul class="submenu">
                    <li><a href="Staff_Page/staff_reg.php"><span class="fa fa-list"></span>Manager Registration</a></li>
                    <li><a href="staff_reg/registration_staff.php"><span class="fa fa-list"></span>Staff Registration</a></li>
                    <li><a href="atten_aprove.php"><span class="fa fa-tags"></span>Leave Approval</a></li>
					<li><a href="view_staff.php"><span class="fa fa-tags"></span>Staff List</a></li>
                    <li><a href="view_supplier.php"><span class="fa fa-tags"></span> Suppliers List</a></li>
                    <li><a href="attend_reg.php"><span class="fa fa-tags"></span> Staff Attendance</a></li>
                    <li><a href="view_customer.php"><span class="fa fa-tags"></span>Approve Customers</a></li>
                    <li><a href="salary_scale.php"><span class="fa fa-tags"></span>Salary Scale Updation</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>MANAGE MILK</a>
                <ul class="submenu">
                    <li><a href="purchase_milk.php"><span class="fa fa-list"></span>View Purchase's Milk </a></li>
                    <li><a href="supper_milk.php"><span class="fa fa-tags"></span>View Supplier's Milk </a></li>
                </ul>
            </li>
			
             <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>RATE</a>
                <ul class="submenu">
                    <li><a href="rate_list.php"><span class="fa fa-tags"></span>View Rate List </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>PRODUCTS</a>
                <ul class="submenu">
                    <!--<li><a href="cat.php"><span class="fa fa-list"></span>ADD Category </a></li>-->
                    <li><a href="subcat.php"><span class="fa fa-list"></span>ADD SubCategory </a></li>
                    <li><a href="add_product.php"><span class="fa fa-tags"></span>ADD Product </a></li>
                    <li><a href="order_req.php"><span class="fa fa-tags"></span>View Order Request </a></li>
                    <li><a href="view_products.php"><span class="fa fa-tags"></span>Stock Update </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>PAYMENT</a>
                <ul class="submenu">
                    <li><a href="pay_staff.php"><span class="fa fa-list"></span>Staff_Payment</a></li>
                    <li><a href="pay_supplier.php"><span class="fa fa-list"></span>Supplier_Payment</a></li>
                    
                </ul>
            </li>
            
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>FEEDBACK</a>
            <ul class="submenu">
                    <li><a href="view_feedback.php"><span class="fa fa-list"></span>View Feedback</a></li>
					
                </ul>
            
            </li>
            
			 
        </ul>
            </li>
            
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>FEEDBACK</a>
            <ul class="submenu">
                    <li><a href="view_feedback.php"><span class="fa fa-list"></span>View Feedback</a></li>
					
                </ul>
            
            </li>
            
			 
        </ul>
    </div>
<!--     SIDE AREA -->
    <div class="mainArea">
        <!-- BEGIN NAV -->
		<?php echo "Welcome: $type";?>
        <nav class="navTop row">
            <div class="menuIcon fl"><span class="fa fa-bars"></span></div>
            <div class="account fr">
                <div class="name has-submenu">ADMIN<span class="fa fa-angle-down"></span>
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="" height="20" width="20" ></div>
                <ul class="accountLinks submenu">
				   <li><a href="changepass.php">Change Password<span class="fa fa-sign-out fr"></span></a></li>
                    
                    <li><a href="logout.php">Logout<span class="fa fa-sign-out fr"></span></a></li>
                </ul>
            </div>
		
        </nav>
		
		<div class="mainContent">  
<!-- LIST FORM -->
<div class="row filterGroup">   
 <form action="" method="POST" class="formSearch fl">
        
        <button type="submit" class="btnSearch"><i class="fa fa-search"></i></button>
    </form>
    
<!--         
<!--             END GROUP -->             
<!--             GROUP -->
            
<!--             END GROUP -->             
        </div>
        <!-- END NAV -->
        <!-- CONTAINER  -->
       
</div>



	
<form action="" method="POST" name="listForm">
<br><br><br><br>
   <h1 style="margin-left:500px;"><b>Leave Report</b></h1><br><br>
<table border="1" cellpadding="12" width="100%" class="table table-striped" >
    <tr>
	
	<th>Name</th>
	<th>Date</th>
    <th>Session</th>
	<th>Reason</th>
	
   	<th colspan="2">Action</th>
    
	
    
  </tr>
    <?php
    include "dbconnect.php";
$sel="SELECT * FROM `attendance` WHERE status=0 ";
$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['staff_id'] ;
	$aid=$row['aid'] ;
	
	/*$sq=mysqli_query($db,"select username from login where loginid='$lid' ");
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
<a href="aproved.php?id=<?php  echo $aid;?>" style="color:green;">Accept</a>
</td>
<td>
<a href="rejected.php?id=<?php echo $aid; ?>" style="color:red;">Reject</a>
</td>
</tr>
<?php
}
?>

</table>
</form>
        
              
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
    
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data">
   <br><br><br><br><br>
   <h2 style="margin-left:500px;"><b>Approval Attendance list</b></h2><br><br>
<table border="1" cellpadding="12" width="100%" class="table table-striped" >
    <tr>
	
	<th>Name</th>
	<th>Date</th>
    <th>Session</th>
	<th>Reason</th>
	
   
	
    
  </tr>
    <?php
    include "dbconnect.php";
$sel="SELECT * FROM `attendance` WHERE status=4 ";
$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['staff_id'] ;
	
	/*$sq=mysqli_query($db,"select username from login where loginid='$lid' ");
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


</tr>
<?php
}
?>
</table>
</form> 
          

</div>


<script src="js/ad.js"></script>


<!--===============================================================================================-->	
	<!--<script src="/project/atten_table/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="/project/atten_table/vendor/bootstrap/js/popper.js"></script>
	<script src="/project/atten_table/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="/project/atten_table/vendor/select2/select2.min.js"></script>-->
<!--===============================================================================================-->
	<script src="/project/atten_table/js/main.js"></script>
</body>
</html>

<?php
}
else
header("location:home.php");
?>
