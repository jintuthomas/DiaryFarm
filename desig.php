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

.button {
    background-color: green;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>

<script>

function fvalidate(e)
{
 
  
  
  var desig=document.getElementById("desig").value;


  if(desig=null)
    {
    alert("Enter new designation");
    document.getElementById("desig").focus();
    return false;
    } 
    
}

</script>

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
 <form action="" method="POST" class="formSearch fl">
        
    </form>
        
        </div>
    

   
   <br><br><br>
   
     <h1><b><i style="margin-left:480px;">CHANGE STAFF DESIGNATION </i></b></h1><br><br><br>
<table border="5"  cellpadding="12" background="\project\images\table2.jpg" style="margin-left:300px;">
    <tr>
	
	<th> STAFF NAME</th>
    <th> DESIGNATION</th>
	<th>NEW DESIGNATION</th>
	
		
	
	
    
  </tr>
    <?php
include "dbconnect.php";

$sel="SELECT * FROM `staff_reg` where status=2";

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
        echo $row['firstname'];?> <?php  echo "&nbsp"; ?>  <?php  echo $row['lastname'];?></td>
<td>
<?php
echo $row['work'];
?>
</td>
<form action="staff_desig_update.php" method="POST" onsubmit="return fvalidate(this)">
<?php
include "dbconnect.php";
$q="select * from designation";
 $sql=mysqli_query($con,$q);
 ?>
 <td>
<select name="des" id="desig" placeholder="select Designation">
                                          <option value="">select Designation</option>
                                      <?php
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['post']?>"><?php echo $fetch['post']?>
                                          <?php
                                    }
                                       ?>
                                        </select>


</td>




<input type="hidden" name="lid" value="<?php echo $lid; ?>" />
<td><input type="submit" name="submit" value="UPDATE"  style="color:white"; class="button"></td>
</form>





</tr>

<?php

}
?>

<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<!-- DETAIL FORM -->
    

    <?php
	include "dbconnect.php";

$sel="SELECT * FROM `registration_staff` where status=6";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['loginid'] ;
	
	

?>
<tr>
<td> 
   <?php 
        echo $row['name1'];?> <?php  echo "&nbsp"; ?>  <?php  echo $row['name2'];?></td>
<td>
<?php
echo $row['work'];
?>
</td>
<form action="staff2_desig_update.php" method="POST">
<?php
include "dbconnect.php";
$q="select * from designation";
 $sql=mysqli_query($con,$q);
 ?>
 <td>
<select name="des" id="desig" placeholder="select Designation">
                                          <option value="">select Designation</option>
                                      <?php
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['post']?>"><?php echo $fetch['post']?>
                                          <?php
                                    }
                                       ?>
                                        </select>


</td>
<input type="hidden" name="lid" value="<?php echo $lid; ?>" />
<td><input type="submit" name="submit" value="UPDATE"  style="color:white"; class="button"/></td>
</form>

</tr>
<?php
}
?>
</table>
          

</div>


<script src="js/ad.js"></script>
</body>
</html>

<?php
}
else
header("location:view_supplier.php");
?>
