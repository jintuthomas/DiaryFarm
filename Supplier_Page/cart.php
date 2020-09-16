<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['fname'];
$usr_lname=$_SESSION['lname'];
$id=$_SESSION['loginid'];
if($login)
{
	?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Supplier Home</title>
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


.button {
  background-color: green;
  border: none;
  color: white;
  padding: 4px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 18px;
}

  </style>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="view_product/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="view_product/css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="view_product/css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="view_product/css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="view_product/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="view_product/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="view_product/css/owl.carousel.min.css">
	<link rel="stylesheet" href="view_product/css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="view_product/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="view_product/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="view_product/css/style.css">
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
                      
                      $sel="SELECT * FROM `supplier_reg` where loginid='$id'";
                      
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
            <h3><?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="supplier_home.php"><span class="fa fa-home mr-3"></span> Home</a>
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
        <h2 class="mb-4">View My Cart</h2>
        <div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-5 col-md-3">
                   
                 </div>
             </div>
                <div class="row">
                    <div class="col-sm-12 text-left menu-1">
                        
                    </div>
                </div>
            </div>
        </div>
        
    </nav>

    

    <div class="colorlib-product">
        <div class="container">
            
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="product-name d-flex">
                        <div class="one-forth text-left px-4">
                            <span>Product Details</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Price</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Quantity</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Order</span>
                        </div>
                        <div class="one-eight text-center px-4">
                            <span>Remove</span>
                        </div>
                    </div>
                    
                    
                    <?php
                    include "dbconnect.php";

                     $sel="SELECT * FROM `cart` where loginid='$id' and st=0";
                      
                      $res=mysqli_query($db,$sel);
                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                       {
                        $pid= $row['pid'];
                        $cid= $row['cartid'];
                          
                      
                       ?>
                      <form action="order.php" Method="POST" enctype="multipart/form-data">
                    <div class="product-cart d-flex">
                        <div class="one-forth">
                            <div class="product-img" style="background-image: url(/project/<?php echo $row['picture']; ?>);">
                            </div>
                            <div class="display-tc">
                                <h3><?php echo $row['ptname']; ?></h3>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <span class="price"><i class="fa fa-rupee"></i> <?php echo $row['price']; ?></span>
                            </div>
                        </div>
                        <form action="order.php" Method="POST" enctype="multipart/form-data">
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <input type="number" id="quantity" name="quantity" value="1" min="1" max="100">
                                <input type="hidden" name="cid" value="<?php  echo $cid;?>">
                                <input type="hidden" name="pid" value="<?php  echo $pid;?>">
                               
                            </div>

                        </div>
                       
          
                        <div class="one-eight text-center">
                            <div class="display-tc">
                            <!--<a href="order.php?id=<?php  echo $cid;?>" style="color:pink;" class="button">Order</a>-->
                            <button class="button" name="submit" id="submit">Order Now</button>
                            </div>
                        </div>
                        </form>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <a href="remove.php?id=<?php  echo $cid;?>" class="closed"></a>
                            </div>
                        </div>
                    </div>
                   
                    
                    <?php
                   }
                ?>

                </div>
            </div>
 
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>
         






    
         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



    <script src="view_product/js/jquery.min.js"></script>
   <!-- popper -->
   <script src="view_product/js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="view_product/js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="view_product/js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="view_product/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="view_product/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="view_product/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="view_product/js/jquery.magnific-popup.min.js"></script>
	<script src="view_product/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="view_product/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="view_product/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="view_product/js/main.js"></script>



    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>
