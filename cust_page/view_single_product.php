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
            <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; &nbsp;</span>Cart</a>
          </li>
         
                
          <li>
            <a href="change_pwd.php"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">View Your Product</h2>
       

         	
	<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    
                   
             </div>
            
                <div class="row">
                    <div class="col-sm-12 text-left menu-1">
                        <ul>
                            
                        <?php
                            include "dbconnect.php";
                        $sq=mysqli_query($db,"SELECT count(cartid) FROM cart where loginid='$id' and st=0");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $q=$r['count(cartid)'];
    ?>
                            <li class="cart"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart[<?php echo $q; ?>]</a></li>                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sale">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center">
                        <div class="row">
                            <div class="owl-carousel2">
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">Fast Delivery and Free Returns</a></h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">100% good quality products</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

   
    <form action="" Method="POST" enctype="multipart/form-data">
<?php
 include "dbconnect.php";
$b=$_GET['id'];
//echo $b;
$sel="SELECT * FROM `product` where pid='$b'";
                      
                      $res=mysqli_query($db,$sel);
                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                       {
                        $pid= $row['pid'];
                          
                      
?>

<div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg product-detail-wrap">
                <div class="col-sm-8">
                    <div>
                    <div class="item">
								<div>
									<a href="#" class="prod-img" style="margin-left:150px;">
										<img src="/project/<?php echo $row['picture']; ?>" class="img-fluid" style="height:500px; width:500px;">
									</a>
								</div>
							</div>
							           
                     
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-desc">
                        <h3 style="font-size:30px;"><?php echo $row['ptname']; ?></h3>
                        <p class="price">
                            <span style="font-size:25px; color:red;"><i class="fa fa-rupee"></i> <?php echo $row['price']; ?></span> <br>
                            
                        </p>
                        <br>
                        <span style="color:red; font-size:15px;">No. of Available Product Now :&nbsp; &nbsp;<?php echo $row['count']; ?></span>
                        <br><br>
                        
									<p style="color:black;">Weight : <?php echo $row['qty']; echo "&nbsp"; echo $row['mt']; ?></p>
				               
				            
                       
                        <div class="size-wrap">
                            
                        
                        </div>
                       
                  <br>
                  <div class="row">
                      <div class="col-sm-12 text-center">
                    
                                <p class="addtocart">
                                    <a href="cart_action.php?id=<?php  echo $pid;?>" class="btn btn-primary btn-addtocart" name="submit" id="submit">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            </div>
        </div>
       
        
    </div>


</div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<?php
 }
 ?>
</form>
    
         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


<!-- jQuery -->
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

<script>
    $(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);

              
                // Increment
            
        });

         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
          
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
        
    });
</script>

    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>
