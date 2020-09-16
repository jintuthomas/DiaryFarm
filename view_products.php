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
    background-color: blue;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 18px;
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
<div>    <form action="admin_pro_search.php" method="POST" class="formSearch fl" AUTOCOMPLETE="OFF">
        <input type="text" class="inputSearch" placeholder="Search" name="search">
        <button type="submit" class="btnSearch" name="submit"><i class="fa fa-search"></i></button>
    </form>
             
        </div>
    
<form action="" method="POST" name="liststaff">
   
   
   
   </form>
          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<form action="" method="POST" name="liststaff">

   
<h1 style="margin-left:600px;">VIEW ALL PRODUCTS</h1>

   <br><br><br><br><br>
   
<table border="1" style="margin-left:350px;" >
    <tr>
    <th>PRODUCT PHOTO</th>
	<th>PRODUCT NAME</th>
	<th>EXP.DATE</th>
	<th>STOCK STATUS</th>
	<th>STOCK UPDATE</th>
	
    
  </tr>
    <?php
include "dbconnect.php";
$sel="SELECT * FROM `product`";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
    $pid=$row['pid'] ;
    $ex=$row['exp_veri'] ;


    if($ex==1)
    {
        $e="Product is expired!";
    }
    else{
        $e=" "; 
    }
	
	/*$sq=mysqli_query($db,"select username from login where loginid='$lid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
	$em=$r['username'];*/

?>
<tr>
<td> 
  <img src="/project/<?php echo $row['picture']; ?> " width="100px;" height="100px;">
  </td>
  

<td>
<?php  
echo $row['ptname'];

?>
</td>
<td>
<?php  
echo $row['exp_date'];

?>
</td>
<td>
<?php  
echo $row['status']; echo "<br>"; echo "$e";

?>
</td>

<td><a href="stock_update.php?id=<?php echo $pid; ?>" style="color:white"; class="button">UPDATE</a></td>

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


