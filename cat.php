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
<link rel="stylesheet" type="text/css" href="css/rate.css">

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
<script>

function fvalidate(r)
{
 
  
  
  var cat=document.getElementById("cat").value;
  
 

	
    
    if(cat == "")
    {
     alert("Enter Category name?!");
    document.getElementById("cat").focus();
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
		
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>MANAGE USERS</a>
                <ul class="submenu">
                    <li><a href="staff_reg/staff_reg.php"><span class="fa fa-list"></span>Add Staff</a></li>
                    <li><a href="atten_aprove.php"><span class="fa fa-tags"></span>Attendance Approval</a></li>
					<li><a href="view_staff.php"><span class="fa fa-tags"></span>Staff List</a></li>
					<li><a href="view_supplier.php"><span class="fa fa-tags"></span> Suppliers List</a></li>
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
                    <li><a href="rate.php"><span class="fa fa-list"></span>Update Rate </a></li>
                    <li><a href="/project/rate_list.php"><span class="fa fa-tags"></span>View Rate List </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>FEEDBACK</a>
            <ul class="submenu">
                    <li><a href="staff_feedback.php"><span class="fa fa-list"></span>Staff Feedback</a></li>
                    <li><a href="supplier_feedback.php"><span class="fa fa-tags"></span>Supplier Feedback</a></li>
					
                </ul>
            
            </li>
            
			 
        </ul>
    </div>
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
	
</div>
<div class="login-page" style="margin-left:750px;">
  <div class="form" >
<form action="" method="POST" name="rate" class="login-form"  onsubmit=" fvalidate()">


     <h2>Category</h2>
     <br><br>
    <input type="text" name="cat" id="cat" placeholder="Product Category"/>
    
      <button name="submit" onclick="return fvalidate(this)">Add Category</button>
      
    </form>
  </div>
</div>



          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
    
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data">
    
</form> 
          

</div>


<script src="js/ad.js"></script>
</body>
</html>


	
<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$cat=$_POST['cat'];



$q1="INSERT INTO `category`(`pname`) VALUES ('$cat')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Category Added Successfully');
 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
 
}
mysqli_close($con);
?>
	





<?php
}
else
header("location:home.php");
?>
