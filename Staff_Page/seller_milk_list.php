<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
$id=$_SESSION['loginid'];
if($login)
{
	?>





<!doctype html>
<html lang="en">
  <head>
  	<title>Staff Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  
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
  .dot {
  height: 8px;
  width: 8px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
}

  </style>
  </head>
  <body class="bg">
  
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
       <!-- <div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>-->
       
	  		<form action="" Method="POST" enctype="multipart/form-data">

<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg2.jpg);">
  <div class="user-logo">
  <?php
              include "dbconnect.php";
              
              $sel="SELECT * FROM `staff_reg` where loginid='$id'";
              
              $res=mysqli_query($db,$sel);
              while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
               {
              /*while($row=$s -> fetch_assoc())*/
              
                $pic=$row['pic'];
              
              ?>
              <div class="img" style="background-image: url(/project/Staff_Page/<?php echo $row['pic']; ?> );"></div>
              <?php
              }
              ?>
              </form>
            <h3><?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="staff_home.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="profile_page.php"><span class="fa fa-user mr-3"></span> Profile</a>
          </li>
          <li>
              <a href="rate.php"><span class="fa fa-download mr-3 notif"></span>Rate</a>
          </li>
          <li>
            <a href="supplier_action.php"><span class="fa fa-gift mr-3"></span> Supplier's List</a>
          </li>
          <li>
            <a href="leave.php"><span class="fa fa-edit">&nbsp;&nbsp;&nbsp;</span>Leave</a>
          </li>
          <li>
            <a href="milk.php"><span class="fa fa-table">&nbsp;&nbsp;</span>Milk Management</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Cash Transaction</a>
          </li>         
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Sidebar #09</h2>
      
         

    
         </div>




		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>