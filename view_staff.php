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
<div>    <form action="sv.php" method="POST" class="formSearch fl" autocomplete="off">
        <input type="text" class="inputSearch" placeholder="Search" name="search">
        <button type="submit" class="btnSearch" name="submit"><i class="fa fa-search"></i></button>
    </form>
  

    <?php
                      include "dbconnect.php";

                     if(isset($_POST['submit']))
                      {
                        $se=$_POST['search'];
                      

        $sq2="SELECT * FROM staff_reg WHERE `firstname` LIKE '%".$se."%' ";
        $result=mysqli_query($con,$sq2);
        //$rowcount=mysqli_num_rows($result);
        if($result->num_rows>0)
        {
           //echo'<script>alert('.$selres->num_rows.');</script>';
           
           while($row=$result->fetch_assoc())
           {
            $lid=$row['loginid'] ;
                    
            $f= $row['firstname']; 
             $l= $row['lastname'];
            $lo=$row['location'];
            $g=$row['gender'];
             $re=$row['regi_date'];
             $p=$row['phone_no'];
             $w=$row['work'];
            $sa=$row['salary'];
             $em=$row['email'];
             $v=$row['verify'];
?>


   
<form action="" method="POST" name="liststaff">
<table border="5" width="100%" class="table table-striped" >
    <tr>
	<th>NAME</th>
	<th>LOCATION</th>
	<th>GENDER</th>
	
    <th>REG.DATE</th>
	<th>PHONE NUMBER</th>
	<th>WORK</th>
	<th>SALARY</th>
   	<th>EMAIL</th>
    <th>STATUS</th>
	<th colspan="2">ACTION</th>
	
    
  </tr>
<tr>
<td> <?php  echo $f;?> <?php  echo "&nbsp"; ?> <?php echo $l ?></td>
<td><?php echo $lo; ?></td>
<td><?php echo $g;?></td>
<td><?php   echo $re;?></td>
<td><?php    echo $p;?></td>
<td><?php  echo $w;?></td>
<td><?php   echo $sa;?></td>
<td><?php   echo $em;?></td>
<td><?php   echo $v;?></td>
<td><a href="block_staff.php?id=<?php echo $lid; ?>" style="color:red";>Block</a></td>
<td><a href="unblock_staff.php?id=<?php echo $lid; ?>" style="color:red";>UnBlock</a></td>

</tr>

</table>
  
        
                    
           <?php          
            }   
        }
          else{ 
               echo "No results";
        } 
    
    }
    ?>  
 </form>



<!--             END GROUP -->             
        </div>
        <a href="desig.php" class="button" style="float:right;">Change Designation</a>
    
<form action="" method="POST" name="liststaff">
   
   
   
   <br><br><br><br><br>
   <h1><b><i style="margin-left:600px;">ALL STAFF LIST</i></b></h1><br><br><br>
<table border="5" width="100%" class="table table-striped" >
    <tr>
	<th>NAME</th>
	<th>LOCATION</th>
	<th>GENDER</th>
    <th>REG.DATE</th>
	<th>PHONE NUMBER</th>
	<th>WORK POSITION</th>
	<th>SALARY</th>
   	<th>EMAIL</th>
	<th>ACTION</th>
	
    
  </tr>
    <?php
	include "dbconnect.php";

$sel="SELECT * FROM `staff_reg` where status=2";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['loginid'] ;
	
?>
<tr>
<td> 
   <?php echo $row['firstname']; echo "&nbsp"; echo $row['lastname']; ?>
  </td>
  
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['regi_date']; ?></td>
<td><?php echo $row['phone_no']; ?></td>
<td><?php echo $row['work']; ?></td>
<td><?php echo $row['salary']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><a href="block_staff.php?id=<?php echo $lid; ?>" style="color:red";>Block</a></td>

</tr>
<?php
}
?>

   </form>
          
             
<form action="" method="POST" name="liststaff">
   
   
   
   
    <?php
	include "dbconnect.php";

$sel="SELECT * FROM `registration_staff` where status=6";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['staff_regid'] ;
	
	

?>
<tr>
<td> 
   <?php 
        echo $row['name1']; echo "&nbsp"; echo $row['name2'];
    ?>
  </td>
  
<td>
<?php
echo $row['loc'];
?>
</td>
<td>Not Mentioned</td>
<td><?php echo $row['reg_date']; ?></td>
<td><?php echo $row['ph_no']; ?></td>
<td>
<?php  
echo $row['work'];
?>
</td>
<td>
<?php  
echo $row['salary'];

?>
</td>
<td>
<?php  
echo $row['email'];

?>
</td>
<td><a href="block_otherstaff.php?id=<?php echo $lid; ?>" style="color:red";>Block</a></td>

</tr>
<?php
}
?>
</table>
   </form>
          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<!-- DETAIL FORM --><br><br>
<form action="" method="POST" enctype="multipart/form-data" style="margin-left:270px;"><br><br><br><br><br><br>
<h2><i>Blocked Staff List</i></h2><BR>
   <table border="5" cellpadding="8" width="70%" >
    <tr>
	<th>NAME</th>
	<th>WORK POSITION</th> 
   	<th>EMAIL</th>
	<th>ACTION</th> 
  </tr>
   <?php
	include "dbconnect.php";

$sel="SELECT * FROM `staff_reg` where status=3";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['loginid'] ;
	

?>
<tr>
<td><?php echo $row['firstname']; echo "&nbsp"; echo $row['lastname'];?></td>
<td><?php echo $row['work']; ?></td>
<td><?php echo $row['email'];?></td>
<td><a href="unblock_staff.php?id=<?php echo $lid; ?>" style="color:red";>UnBlock</a></td>

</tr>
<?php
}
?>


</form> 
          
<form action="" method="GET" name="listForm">
   
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data">
	
    
  </tr>
    <?php
	include "dbconnect.php";

$sel="SELECT * FROM `registration_staff` where status=3";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
	$lid=$row['staff_regid'] ;
	

?>
<tr>
<td> 
   <?php echo $row['name1']; echo "&nbsp"; echo $row['name2'];?> </td>

<td>
<?php echo $row['work']; ?> <td>
<?php echo $row['email']; ?></td>
<td><a href="unblock_otherstaff.php?id=<?php echo $lid; ?>" style="color:red";>UnBlock</a></td>

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
header("location:view_staff.php");
?>
