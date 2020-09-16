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



<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">-->

	<link rel="stylesheet" type="text/css" href="/project/ratelist_css/css/util.css">
	<link rel="stylesheet" type="text/css" href="/project/ratelist_css/css/main.css">
<!--===============================================================================================-->


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
  background-color: #003d99;
  color: white;
  padding:20 15px;
}
td
{
    padding:10 15px;
}

.button {
    background-color:  #003d99;
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
.floatLeft { width: 70%; float: left; margin-left:100px; margin-top:-230px; }
.floatRight {width: 30%; float: right; margin-top:50px; margin-right:200px;}
.container { overflow: hidden; }


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
            
			 
        </ul>
    </div>
<!--     SIDE AREA -->
    <div class="mainArea">
        <!-- BEGIN NAV -->
		<?php echo "Welcome: $type";?>
       
		<div class="mainContent">  
<!-- LIST FORM -->
<div class="row filterGroup">    <form action="" method="POST" class="formSearch fl">
        
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
<a href="rate.php" style="margin-left:900px; " class="button"> Update Supplier's rate list </a>
<a href="purchase_updated_rate.php" style="margin-left:60px; " class="button"> Update Purchase rate </a>


<br><br><br><br><BR><BR><BR><br><br>
<form action="" method="POST" enctype="multipart/form-data" class="floatRight">
        
<h1> View Rate of purchase</h1><br>

		
<table border="1">
    <tr >
	
	<th width="35%" ><b>Weight</b></th>
	
    <th width="20%"><b>Price</b></th>
	
	
   
	
    
  </tr>
 
    <?php
include "dbconnect.php";
$sel="SELECT * FROM `p_rate` ";
$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	

?>
<tr>

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


</tr>
<?php
}
?>
</table>


				


    
</form> 


<form action="" method="POST" name="listForm" class="floatLeft"
   

<br><br><br><br><br>
          
<h1 > View Rate List of suppliers</h1><br><br><br>

		
<table border="1" width="50%" >
    <tr >
	
	<th width="30%"><b>Fat</b></th>
	<th  width="30%"><b>SNF</b></th>
    <th  width="20%"><b>Price</b></th>
	
	
   
	
    
  </tr>
 
    <?php
include "dbconnect.php";
$sel="SELECT * FROM `rate` ";
$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	

?>
<tr>

  <td> 
      
   <?php 
        echo $row['fat']; 
    ?>
    
</td>
<td>
    
<?php
echo $row['snf'];
?>

</td>
<td>
    
<?php
echo $row['price'];
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

          
</div>


<script src="js/ad.js"></script>

<script src="/project/ratelist_css/js/main.js"></script>

</body>
</html>

<?php
}
else
header("location:home.php");
?>
