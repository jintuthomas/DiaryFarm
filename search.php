



<!DOCTYPE html>
<html lang="en">
  <head>
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
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+9207515691</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">milkystore90@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">fast delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">Milky Store</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	       
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('product/images/bg1_new.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>
	<br><br>

  <marquee direction="right"><a href="/project/home.php#Testimonial"  style="color:red;">Please login your page for buying the products</a></marquee>




    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
				
    				<ul class="product-category">
    					<li><a href="product.php" class="active">All Products</a></li>
						<li><a href="milk_view.php">Milk </a></li>
						<li><a href="milk_product_view.php">Milk Products</a></li>
						<li><a href="other_product_view.php">Other Products</a></li>
						
                    
    				</ul>
					
    			</div>
    		</div>
			
        <form action="" Method="POST" enctype="multipart/form-data">
            <div class="row">
			                     
	  				

            
    <?php
                      include "dbconnect.php";
                      $q="UPDATE product SET exp_veri=1 where exp_date <= CURRENT_DATE";
                      $re=mysqli_query($db,$q);
                    
                        $se=$_GET['search'];
                      

        $sq2="SELECT * FROM product WHERE ((`ptname` LIKE '%".$se."%') OR (`sub_name` LIKE '%".$se."%')) and exp_veri=0";
        $result=mysqli_query($con,$sq2);


       
        //$rowcount=mysqli_num_rows($result);
        if($result->num_rows>0)
        {
           //echo'<script>alert('.$selres->num_rows.');</script>';
           
           while($row=$result->fetch_assoc())
           {
           
             $p=$row['picture'];
             $pname=$row['ptname'];
             $pp=$row['price'];


            
?>
 

   

            
    		
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="/project/<?php echo $p; ?>" alt="">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $pname; ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">$<?php echo $pp; ?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    						
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>     
                        
                          
           <?php          
            }   
        }
          else{ 
               echo "No results";
        } 
    
    
    ?>  
 

 </div>
                      </form>
                     


    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

		
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Milky Store</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
             
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              
              <div class="d-flex">
	              
	             
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Milky Store, st. marks road, CA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91-9207515691</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">milkystore90@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">AJCE</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
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
    
  </body>
</html>