<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['cust_name'];
//$usr_lname=$_SESSION['lname'];
$id=$_SESSION['loginid'];
$usr_id=$_SESSION['cust_id'];
if($login)
{
	?>





<!doctype html>
<html lang="en">
  <head>
  	<title>Customer Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>MeetMe Personal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="profile/css/bootstrap.css">
        <link rel="stylesheet" href="profile/vendors/linericon/style.css">
        <link rel="stylesheet" href="profile/css/font-awesome.min.css">
        <link rel="stylesheet" href="profile/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="profile/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="profile/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="profile/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="profile/vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="profile/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="profile/css/style.css">
        <link rel="stylesheet" href="profile/css/responsive.css">
  
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
img {
  border-radius: 50%;
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
                      
                      $sel="SELECT * FROM `cust_reg` where loginid='$id'";
                      
                      $res=mysqli_query($db,$sel);
                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                       {
                      /*while($row=$s -> fetch_assoc())*/
                      
                        $pic=$row['photo'];
                      
                      ?>
                      <div class="img" style="background-image: url(/project/registration/<?php echo $row['photo']; ?> );"></div>
                      <?php
                      }
                      ?>
                      </form>
	  				
            <h3><?php echo $usr_name;?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="customer.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="profile_page.php"><span class="fa fa-user mr-3"></span> Profile</a>
          </li>
         
          <li>
            <a href="products.php"><span class="fa fa-gift mr-3"></span>Products</a>
          </li>
         
                 
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">      
        

        <?php
          include "dbconnect.php";
           $sel="SELECT * FROM `cust_reg` where loginid='$id'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
             
            
    ?>

        <div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">

							<div class="d-flex" style="margin-left:50px;"><br>
							<img src="/project/registration/<?php echo $row['photo']; ?>" alt="" style="width:500px">


							
							
							</div>
							<div class="media-body" style="margin-left:100px;">
								<div class="personal_text">
									<h6>Hello, i am</h6>
									<h3><?php  echo $row["cust_name"] ?></h3>
                                    
                                    <br><br><br><br><br>
									<ul class="list basic_info">
									   <li><label  style="color:white;">&nbsp;<i class="lnr lnr-home"></i>  &nbsp;&nbsp;<?php echo $row["address1"]; echo"&nbsp;,"; echo $row["address2"];  echo"&nbsp,"; echo $row["address3"]; ?></label></li>
									  
                                       <li><label  style="color:white;">&nbsp;<i class="lnr lnr-calendar-full"></i> &nbsp;&nbsp;<?php echo $row["join_date"]; ?>&nbsp;(Reg. Date & Time)</label></li>
										<li><label  style="color:white;">&nbsp;<i class="lnr lnr-phone-handset"></i> &nbsp;&nbsp; <?php echo $row["phone"]; ?></label></li>
										<li><label  style="color:white;">&nbsp;<i class="lnr lnr-envelope"></i> &nbsp;&nbsp; <?php echo $row["email"]; ?></label></li>
									</ul>
									<br><br>
									<a href="edit_profile.php">Edit Your Profile</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>


             <!--================My Tabs Area =================-->
             <br><br>
       <!-- 	<div class="container">
        		<div class="tabs_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="font-size:16px;">My Experiences</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"  style="font-size:16px;">My Education</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<ul class="list">
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br />Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br />Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br />Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<ul class="list">
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br />Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br />Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br />Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
        		</div>
            </div>-->
            <?php  }?>
        <!--================End My Tabs Area =================-->
        
       
        
        
        
        
        
    
         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    <script src="profile/js/jquery-3.3.1.min.js"></script>
        <script src="profile/js/popper.js"></script>
        <script src="profile/js/bootstrap.min.js"></script>
        <script src="profile/js/stellar.js"></script>
        <script src="profile/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="profile/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="profile/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="profile/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="profile/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="profile/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="profile/js/jquery.ajaxchimp.min.js"></script>
        <script src="profile/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="profile/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="profile/js/mail-script.js"></script>
        <script src="profile/js/theme.js"></script>


    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>