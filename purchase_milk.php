<?php
session_start();
include "dbconnect.php";
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$id=$_SESSION['loginid'];
$s=mysqli_query($con,"select * from  `purchase_milk`");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
$pid=$r['purchase_id'];

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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
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


th {
  background-color: #4CAF50;
  color: white;
  padding:20 15px;
}
td
{
    padding:10 15px;
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
<div>    <form action="" method="POST" class="formSearch fl">
        
    </form>
   
<!--             END GROUP -->             
        </div>

 
    
        <form action="" method="POST" name="liststaff">
   
   
   
   <br><br><br><br><br>
   <h1><b><i style="margin-left:0px;">TODAYS SELLING MILK</i></b></h1><br><br><br>



   <h2>Morning Session</h2>

<table border="5" cellpadding="8" >
    <tr>
    <th>DATE</th>
    <th>SESSION</th>
    <th>QUANTITY</th>
	<th>RATE</th>
  <th>TOTAL</th>
  
	
		
	
    
  </tr>
   <?php
  include "dbconnect.php";
  $da= date("Y-m-d");

 /* $sql="Select MAX(date1) as date1 from purchase_milk  WHERE purchase_id='$pid' GROUP BY purchase_id";
$q=mysqli_query($con,$sql);
$res=mysqli_fetch_array($q);
$date1=$res['date1'];*/

$sel="SELECT * FROM `purchase_milk` where session='Morning' AND date1='$da' ";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
  

?>
<tr>

  <td> 
   <?php 
        echo $row['date1'];
    ?>
  </td>
  <td> 
   <?php 
        echo $row['session'];
    ?>
  </td>
  

<td> 
   <?php 
        echo $row['qty']; echo "&nbsp";  echo $row['mt'];
    ?>
  </td>
<td>
<?php  
 echo $row['rate'];

?>
</td>
<td>
<?php  
echo $row['total'];

?>
</td></tr>


<?php
}


$s=mysqli_query($con,"select sum(qty) from `purchase_milk` where session='Morning' AND date1='$da'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);

   $q=$r['sum(qty)'];

   $s=mysqli_query($con,"select sum(total) from `purchase_milk` where session='Morning' AND date1='$da'");
   $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
 
    $t=$r['sum(total)'];

?>
<tr><td> Final</td><td></td><td></td>
<td><?php  echo $q;?></td>
<td><?php  echo $t;?></td></tr>
</table>


   </form>
   
   <form action="" method="POST" name="liststaff">
   
   
   
   <br><br><br><br><br>


<h2>Afternoon Session</h2>
     
<table border="5" cellpadding="8" >
    <tr>
    <th>DATE</th>
    <th>SESSION</th>
    <th>QUANTITY</th>
	<th>RATE</th>
	<th>TOTAL</th>
	
		
	
    
  </tr>
   <?php
	include "dbconnect.php";

$sel="SELECT * FROM `purchase_milk` where session='Afternoon' AND date1='$da'";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
  
?>
<tr>

  <td> 
   <?php 
        echo $row['date1'];
    ?>
  </td>
  <td> 
   <?php 
        echo $row['session'];
    ?>
  </td>
  

<td> 
   <?php 
        echo $row['qty'];  echo "&nbsp";  echo $row['mt'];
    ?>
  </td>
<td>
<?php  
 echo $row['rate'];

?>
</td>
<td>
<?php  
echo $row['total'];

?>
</td></tr>

<?php
}

$s=mysqli_query($con,"select sum(qty) from `purchase_milk` where session='Afternoon' AND date1='$da'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);

   $qu=$r['sum(qty)'];

   $s=mysqli_query($con,"select sum(total) from `purchase_milk` where session='Afternoon' AND date1='$da'");
   $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
 
    $to=$r['sum(total)'];
?>

<tr><td> Final</td>
<td></td><td><?php  echo $qu;?></td>
<td></td>
<td><?php  echo $to; ?></td></tr>
</table>


   </form>

   
   <form action="" method="POST" name="liststaff" style="margin-left:800px; margin-top:-500px;">
   
   
   
   <br><br><br><br><br>


<h2 >PURCHASE RECORD</h2>
     
<table border="5" cellpadding="8" >
    <tr>
    <th>DATE</th>
    <th>SESSION</th>
    <th>QUANTITY</th>
	<th>RATE</th>
	<th>TOTAL</th>
	
		
	
    
  </tr>
   <?php
	include "dbconnect.php";

$sel="SELECT * FROM `purchase_milk`";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
 
?>
<tr>

  <td> 
   <?php 
        echo $row['date1'];
    ?>
  </td>
  <td> 
   <?php 
        echo $row['session'];
    ?>
  </td>
  
<td><?php 
        echo $row['qty'];  echo "&nbsp";  echo $row['mt'];
    ?></td>
<td>
<?php  
 echo $row['rate'];

?>
</td>

<td><?php 
        echo $row['total'];
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
<form action="" method="POST" enctype="multipart/form-data"><br>


</form> 
<br><br>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <button onclick="myFunction()" style="margin-left:500px;" class="button"> Display Customer Full Details</button>
  
    
<form action="" method="POST" name="liststaff" id="form1">
   
   
   
   <br><br><br><br><br>
   <h1><b><i style="margin-left:450px;">PURCHASE MILK LIST</i></b></h1><br><br><br>



     
<table border="5" cellpadding="8" width="100%" class="table table-striped" >
    <tr>
    <th>DATE</th>
    <th>SESSION</th>
	<th>NAME</th>
	<th>LOCATION</th>
	<th>MOB. NO</th>
    <th>QUANTITY</th>
	<th>RATE</th>
	<th>TOTAL</th>
	
		
	
    
  </tr>
   <?php
	include "dbconnect.php";

$sel="SELECT * FROM `purchase_milk`";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	

?>
<tr>

  <td> 
   <?php 
        echo $row['date1'];
    ?>
  </td>
  <td> 
   <?php 
        echo $row['session'];
    ?>
  </td>
  <td> 
   <?php echo $row['name']; 
   ?>
  </td>
 <td>
<?php
echo $row['location'];
?>
</td>

<td>
<?php
echo $row['mob'];
?>
</td>

<td> 
   <?php 
        echo $row['qty'];  echo "&nbsp";  echo $row['mt'];
    ?>
  </td>
<td>
<?php  
 echo $row['rate'];

?>
</td>
<td>
<?php  
echo $row['total'];

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
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data"><br><br><br><br><br><br>


</form> 
          

</div>

<script src="js/ad.js"></script>

</body>
</html>

<?php
}
else
header("location:view_staff.php");
?>
