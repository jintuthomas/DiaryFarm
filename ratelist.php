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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {background-color: #555555;} /* Black */
</style>
<script>



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
<div style="margin-left:500px; margin-top:100px;">
<form action="" method="POST">

        </div>
        </form>
        <!--<p style="margin-left:250px; font-size:20px;"><font color="red">We have two options to update/add new rate list:<br>
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
           1) We use upload files to upload your new ratelist(Top ->)<br>
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
           2) we use form to add relevent elements to create new ratelist(Below)</font></p>-->

<div class="login-page" style="margin-left:750px;">
  <div>
  
  <h1><b>Upload a new Rate File</b></h1>

<form action="" method="POST" name="rate" class="login-form" enctype="multipart/form-data">



     
     <br><br><br><br>
     <label for="fileSelect" style="font-size:15px;"><b>Rate Updated List :</b> &nbsp;</label>
        <input type="file" name="file" id="file"><br><br><br><br><br>
        <input type="submit" name="submit" value="Upload" class="button button5"  style="margin-left:100px;"> 
       
    </form>
   
     
  </div>
</div>



          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
    
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST">
    
</form> 
          

</div>


<script src="js/ad.js"></script>
</body>
</html>


<!--ratelist-->
    <?php
$con=mysqli_connect("localhost","root","","dairy")or die("unable to connect");

if(isset($_POST['submit']))
{
    $dir='upload/';
    $target_file=$dir.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
    $q1="INSERT INTO ratelist(rate_file) VALUES ('$target_file')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Rate File Updated Successfully');
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
