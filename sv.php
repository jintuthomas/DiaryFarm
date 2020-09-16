
    
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
  
  <br>
  <br>
  <h1>Staff List</h1><br><br><br>
    
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


    
 <?php
                      include "dbconnect.php";

                     if(isset($_POST['submit']))
                      {
                        $se=$_POST['search'];
                      

       


        $sq3="SELECT * FROM registration_staff WHERE `name1` LIKE '%".$se."%' ";
        $res=mysqli_query($con,$sq3);
        //$rowcount=mysqli_num_rows($result);
        if($res->num_rows>0)
        {
           //echo'<script>alert('.$selres->num_rows.');</script>';
           
           while($row=$res->fetch_assoc() )
           {
            //$lid=$row['loginid'] ;
                    
          


             $f= $row['name1']; 
             $l= $row['name2'];
            $lo=$row['loc'];
            $g=$row['gen'];
            
             $p=$row['ph_no'];
             $w=$row['work'];
             $wo=$row['work_time'];
            $sa=$row['salary'];
             $em=$row['email'];
             //$v=$row['verify'];
?>


   
<form action="" method="POST" name="liststaff">
<table border="5" width="100%" class="table table-striped" >
    <tr>
	<th>NAME</th>
	<th>LOCATION</th>
	<th>GENDER</th>
	<th>PHONE NUMBER</th>
	<th>WORK</th>
    <th>WORK TIME</th>
	<th>SALARY</th>
   	<th>EMAIL</th>
   
	<th colspan="2">ACTION</th>
	
    
  </tr>
<tr>
<td> <?php  echo $f;?> <?php  echo "&nbsp"; ?> <?php echo $l ?></td>
<td><?php echo $lo; ?></td>
<td><?php echo $g;?></td>
<td><?php    echo $p;?></td>
<td><?php  echo $w;?></td>
<td><?php  echo $wo;?></td>
<td><?php   echo $sa;?></td>
<td><?php   echo $em;?></td>
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
















 </div>
 <script src="js/ad.js"></script>
</body>
</html>

<?php
}
else
header("location:view_staff.php");
?>
