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


<title>See Our Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="product/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="product/css/animate.css">
    
    <link rel="stylesheet" href="product/css/owl.carousel.min.css">
    <link rel="stylesheet" href="product/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="product/css/magnific-popup.css">

    <link rel="stylesheet" href="product/css/aos.css">

    <link rel="stylesheet" href="product/css/ionicons.min.css">

    <link rel="stylesheet" href="product/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="product/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="product/css/flaticon.css">
    <link rel="stylesheet" href="product/css/icomoon.css">
    <link rel="stylesheet" href="product/css/style.css">
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
            <a href="product.php"><span class="fa fa-gift mr-3"></span>Products</a>
          </li>
              
          <li>
            <a href="changepwd.php"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Milk Packets</h2>
      
        <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
				
    				<ul class="product-category">
    					<li><a href="products.php" class="active">All Products</a></li>
						<li><a href="milk_view.php">Milk </a></li>
						<li><a href="milk_product_view.php">Milk Products</a></li>
						<li><a href="other_product_view.php">Other Products</a></li>
						
                       <?php
                      /*include "C:\C\htdocs\project\dbconnect.php";
                      
                      $sel="SELECT * FROM `category`";
                      
                      $res=mysqli_query($db,$sel);
                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                       {
                                          
                      ?>
    					<li><a href="#"><?php echo $row['pname']; ?></a></li>
    					<?php
                      }*/
                      ?>
    				</ul>
					
    			</div>
    		</div>
			
                     
	  				

            <form action="" Method="POST" enctype="multipart/form-data">
			<div class="row">
	  		
          <?php
                      include "dbconnect.php";
                      $q="UPDATE product SET exp_veri=1 where exp_date <= CURRENT_DATE";
                      $re=mysqli_query($db,$q);
                      
                      $sel="SELECT * FROM `product` where pname='Milk' and exp_veri=0";
                      
                      $res=mysqli_query($db,$sel);
                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                       {
                      /*while($row=$s -> fetch_assoc())*/
                      
                        $pic=$row['picture'];
                      
                      ?>
                      <!--<div class="img" style="background-image: url(/project/Staff_Page/<?php echo $row['pic']; ?> );"></div>-->
                     










    		
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="/project/<?php echo $row['picture']; ?>" style="height:200px; width:300px;">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $row['ptname']; ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">$<?php echo $row['price']; ?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>	
    		
			<?php
                      }
                      ?>
					  </div>
                      </form>


    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              
            </div>
          </div>
        </div>
    	</div>
    </section>
    

    
         </div>




		</div>
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="product/js/jquery.min.js"></script>
<script src="product/js/jquery-migrate-3.0.1.min.js"></script>
<script src="product/js/popper.min.js"></script>
<script src="product/js/bootstrap.min.js"></script>
<script src="product/js/jquery.easing.1.3.js"></script>
<script src="product/js/jquery.waypoints.min.js"></script>
<script src="product/js/jquery.stellar.min.js"></script>
<script src="product/js/owl.carousel.min.js"></script>
<script src="product/js/jquery.magnific-popup.min.js"></script>
<script src="product/js/aos.js"></script>
<script src="product/js/jquery.animateNumber.min.js"></script>
<script src="product/js/bootstrap-datepicker.js"></script>
<script src="product/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="product/js/google-map.js"></script>
<script src="product/js/main.js"></script>









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
