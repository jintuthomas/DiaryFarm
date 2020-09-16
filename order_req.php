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
  background-color: #4CAF50;
  color: white;
  padding:20 15px;
}
td
{
    padding:10 15px;
}
.button {
    background-color: orange;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
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
<div>    <form action="" method="POST" class="formSearch fl">
        
    </form>
             
        </div>
           <b><h1 style="margin-left:500px">ORDER REQUESTS</h1></b>
<form action="" method="POST" name="liststaff">
   
   
   
   <br><br><br><br><br>
   <label style="font-size:18px;">All Order Request</label>
<table border="0" width="100%" class="table table-striped" >
    <tr>
    <th>PRODUCT NAME</th>
    <th>NUMBER</th>
    <th>PRICE(single one)</th>
    <th>TOTAL PAYED RS.</th>
    <th colspan="2">ORDER REQ</th>
	
    
  </tr>
    <?php
    include "dbconnect.php";
$sel="SELECT * FROM `purchase_cart` where status=0";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
    $cid=$row['cartid'];
    $pcid=$row['pc_id'];
	
	$sq=mysqli_query($db,"select * from cart where cartid='$cid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $num=$r['num'];
    $price=$r['price'];

?>
<tr>

<td>
<?php  
echo $row['ptname'];

?>
</td>

<td>
<?php  
 echo $num;

?>
</td>
<td>
<?php  
echo $price;

?>
</td>
<td>
<?php  
echo $row['tot'];

?>
</td>
<td><a href="order_accept.php?id=<?php echo $pcid; ?>" style="color:white"; class="button"> Accept</a></td>
<td><a href="order_reject.php?id=<?php echo $pcid; ?>" style="color:white"; class="button">Reject</a></td>


</tr>
<?php
}
?>
</table>
   </form>
          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<form action="" method="POST" name="liststaff">
   
   
   
   <br><br><br><br><br>
   <label style="font-size:18px;">Accepted Request Status</label>
<table border="0" width="100%" class="table table-striped" >
    <tr>
    <th>PRODUCT NAME</th>
    <th>NUMBER</th>
    <th>PRICE(single one)</th>
    <th>TOTAL PAYED RS.</th>
    <th>ORDER STATUS</th>
	
    
  </tr>
    <?php
    include "dbconnect.php";
$sel="SELECT * FROM `purchase_cart` where status=3";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
    $cid=$row['cartid'] ;
    $pcid=$row['pc_id'];
	
	$sq=mysqli_query($db,"select * from cart where cartid='$cid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $num=$r['num'];
    $price=$r['price'];

?>
<tr>

<td>
<?php  
echo $row['ptname'];

?>
</td>

<td>
<?php  
 echo $num;

?>
</td>
<td>
<?php  
echo $price;

?>
</td>
<td>
<?php  
echo $row['tot'];

?>
</td>
<td><?php  
echo $row['flow']; echo "&nbsp"; echo "on"; echo "&nbsp"; echo "&nbsp";echo $row['rdate'];

?></td>

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

          

</div>

<script src="js/ad.js"></script>
</body>
</html>

<?php
}
else
header("location:view_staff.php");
?>


