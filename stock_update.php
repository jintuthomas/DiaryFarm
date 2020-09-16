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
</style>


<meta charset="UTF-8">
    
    <!-- Icons font CSS-->
    <link href="/project/add_product/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/project/add_product/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/project/add_product/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/project/add_product/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/project/add_product/css/main.css" rel="stylesheet" media="all">
</head>
<body class="bg">
<div class="container">
<!--     SIDE AREA -->
    <div class="sideArea">
        <div class="avatar">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="">
            <div class="avatarName">Welcome,<br>ADMIN</div>
        </div>
        <ul class="sideMenu" style="margin-left:10px;">
        <li><a href="admin.php">HOME</a></li>
        <li><a href="pay_form.php">BANK DETAILS</a></li>
		
            <li><a href="javascript:void(0)" class="has-submenu">MANAGE USERS</a>
                <ul class="submenu">
                    <li><a href="staff_reg/staff_reg.php">Manager Registration</a></li>
                    <li><a href="staff_reg/registration_staff.php">Staff Registration</a></li>
                    <li><a href="atten_aprove.php">Leave Approval</a></li>
					<li><a href="view_staff.php">Staff List</a></li>
                    <li><a href="view_supplier.php"> Suppliers List</a></li>
                    <li><a href="view_customer.php">Approve Customers</a></li>
                    <li><a href="attend_reg.php"> Staff Attendance</a></li>
                    <li><a href="salary_scale.php">Salary Scale Updation</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0)" class="has-submenu">MANAGE MILK</a>
                <ul class="submenu">
                    <li><a href="purchase_milk.php">View Purchase's Milk </a></li>
                    <li><a href="supper_milk.php">View Supplier's Milk </a></li>
                </ul>
            </li>
			
             <li><a href="javascript:void(0)" class="has-submenu">RATE</a>
                <ul class="submenu">
                    <li><a href="rate_list.php">View Rate List </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu">PRODUCTS</a>
                <ul class="submenu">

                    <li><a href="subcat.php">ADD SubCategory </a></li>
                    <li><a href="add_product.php">ADD Product </a></li>
                    <li><a href="order_req.php">View Order Request </a></li>
                    <li><a href="view_products.php">Stock Update </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu">PAYMENT</a>
                <ul class="submenu">
                    <li><a href="pay_staff.php">Staff_Payment</a></li>
                    <li><a href="pay_supplier.php">Supplier_Payment</a></li>
                    
                </ul>
            </li>
            
            <li><a href="javascript:void(0)" class="has-submenu">FEEDBACK</a>
            <ul class="submenu">
                    <li><a href="view_feedback.php">View Feedback</a></li>
					
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
    
<form action="" method="POST">



   </form>
          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data"><br><br><br>
<?php
$b=$_GET['id'];
          include "dbconnect.php";
          
           $sel="SELECT * FROM `product` where pid='$b'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
             
            
    ?>
<div>
        <div class="wrapper wrapper--w960">
            
            <div class="card card-2">
                
                <div class="card-heading"></div>
               
                <div class="card-body">
                    <h2 class="title">Update Product</h2>
                   <br>
                   <img src="/project/<?php echo $row['picture']; ?>" alt="" height="200px" width="200px;" >
                        <div><br>
                        <h3 class="title"> <?php echo $row['ptname']; ?></h3>
                           
                        </div>
                        <label>Expiry Date :</label>
                        <div class="input-group">
                            <input class="input--style-2" type="date"  name="date" value="<?php  echo $row["exp_date"]  ?>">
                        </div>
                        <label>Count :</label>
                        <div class="input-group">
                            <input class="input--style-2" type="number"  name="num" min="1" value="<?php  echo $row["count"]  ?>">
                        </div>
                        <label>Price :</label>
                        <div class="input-group">
                            <input class="input--style-2" type="number" name="price" min="1" value="<?php  echo $row["price"]  ?>">
                        </div>
                       
                          
                        
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">UPDATE</button>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
<?php
           }
           ?>
</form> 
          

</div>
<script src="/project/add_product/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/project/add_product/vendor/select2/select2.min.js"></script>
    <script src="/project/add_product/vendor/datepicker/moment.min.js"></script>
    <script src="/project/add_product/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/project/add_product/js/global.js"></script>

<script src="js/ad.js"></script>
</body>
</html>

<?php
}
else
header("location:view_staff.php");
?>

<?php
include "dbconnect.php";
    if(isset($_POST['submit']))
    {
      $num=$_POST['num'];
      $price=$_POST['price'];
      $dat=$_POST['date'];
      
  
         $sql="UPDATE product SET exp_date='$dat',count='$num', price='$price', exp_veri=0, status=' ' WHERE pid ='$b'";
    
      
      $ch=mysqli_query($con,$sql);
              
       if($ch)
          
          {?>
            <script>
             alert(" Update Product successfully");
             window.location='view_products.php'
             </script>
             <?php
          }
        else
          {
            echo"error:".$sql."<br>".mysqli_error($con);
          }
      }
    
        mysqli_close($con);
  ?>