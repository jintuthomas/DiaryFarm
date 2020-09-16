<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
	?>
<html>
<head>
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
  background-color: Violet;
  color: white;
  padding:20 15px;
}
td
{
    padding:10 15px;
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
        <!-- END NAV -->
        <!-- CONTAINER  -->
        <div class="mainContent">  
<!-- LIST FORM -->
<div class="row filterGroup">   
 <form action="supp_search.php" method="POST" class="formSearch fl" autocomplete="off">
        <input type="text" class="inputSearch" placeholder="Search" name="search">
        <button type="submit" class="btnSearch" name="submit"><i class="fa fa-search"></i></button>
    </form>
    
<!--         
<!--             END GROUP -->             
<!--             GROUP -->
            
<!--             END GROUP -->             
        </div>
    
<form action="" method="POST" name="listsupplier">
   
   
   <br><br><br>
   
     <h1><b><i style="margin-left:550px;">SUPPLIER LIST</i></b></h1><br><br><br>
<table border="5"  cellpadding="12" width="100%" class="table table-striped" background="\project\images\table2.jpg" >
    <tr>
	
	<th>NAME OF SUPPLIER</th>
	<th>ADDRESS</th>
	<th>E-MAIL</th>
	<th>PHONE NUMBER</th>
	<th>REG_DATE</th>
		
	
	
    
  </tr>
    <?php
include "dbconnect.php";

$sel="SELECT * FROM `supplier_reg` where status=0";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['loginid'] ;
	
	$sq=mysqli_query($db,"select username from login where loginid='$lid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
	$em=$r['username'];

?>
<tr>
<td> 
   <?php 
        echo $row['fname'];?> <?php  echo "&nbsp"; ?>  <?php  echo $row['lname'];?></td>
<td>
<?php
echo $row['address2'];
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

</tr>
<?php
}
?>
</table>
   </form>
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<!-- DETAIL FORM --><br><br><br>
<form action="" method="POST" enctype="multipart/form-data" style="margin-left:270px;">
    <br><br><br><br><br>
	<h2>Blocked Supplier list</h2>
	<br><br>
	<table border="5" cellpadding="8" width="70%"  background="\project\images\table2.jpg" >
    <tr>
	<th>NAME OF SUPPLIER</th>
	
	<th>REG_DATE</th>
    <th>E-MAIL</th>	
	
		
	
    
  </tr>
    <?php
	include "dbconnect.php";

$sel="SELECT * FROM `supplier_reg` where status=3";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['loginid'] ;
	
	$sq=mysqli_query($db,"select username from login where loginid='$lid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
	$em=$r['username'];

?>
<tr>
<td> 
   <?php 
        echo $row['fname'];?> <?php  echo "&nbsp"; ?>  <?php  echo $row['lname'];?></td>
    ?>
  </td>
  <td>
<?php  
echo $row['reg_date'];

?>
</td>
<td>
<?php
echo $row['email'];
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
</body>
</html>

<?php
}
else
header("location:view_supplier.php");
?>
