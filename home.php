<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- favicons -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/drop.css">
    <link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">
    <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="script/all-plugins.js"></script>
    <script type="text/javascript" src="script/plugin-active.js"></script>
	
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<?php
/*session_start();
include "dbconnect.php";
$user="";
$pass="";
if (isset($_POST['submit']))
{
  // receive all input values from the form
  $user=$_POST['user'];
  $pass=$_POST['pass'];
 $query="SELECT username,password,status FROM login WHERE username='$user' AND password='$pass'";
 $result = mysqli_query($con,$query) or die(mysqli_error());
 if ($result->num_rows > 0)
  { 
    echo '<script language="javascript">';
    echo 'alert("login success")';
    echo '</script>';
    while($row = $result->fetch_assoc()) 
    {
        
        $usertype=$row["status"];
        switch ($usertype) {
            case '0':
            header('Location:supplier.html');
                break;
            case '1':
			//$_SESSION['id']=$row[loginid];
            header('Location:admin.php');
                break;
            case '2':
           header('Location:staff_home.html');
                break;
           
        }
    }   
 }
 else
 {
    echo '<script language="javascript">';
    echo 'alert("Invalid username or password")';
    echo '</script>';
 }
 
}*/

?>

    <style>

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 700px;
  cursor: pointer;
  border-radius: 25px;
}
</style>
	
</head>
<body data-spy="scroll" data-target=".main-navigation" data-offset="150">
    <section id="MainContainer">
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigation">
                <div class="container clearfix">
                    <div class="site-logo-wrap">
                        <a class="logo" href="home.php"><img src="images/logo.v3.png" alt="Milky Store"></a><br>
                        <label> Milky Store</label>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
                        <ul class="menu-list">
                            <li><a class="nav-link" href="#HeroBanner" >Home</a></li>
                            <li><a class="nav-link" href="#Services">Products</a></li>
                            <li><a class="nav-link" href="#About">About</a></li>
                            <li><a class="nav-link" href="#Portfolio">Gallery</a></li>
                             <li><a class="nav-link" href="registration\registration.php">Registration</a></li>							
                            <li><a class="nav-link" href="#ContactUs">Contact</a></li>
                            
							
                            
          
       
        </section>
        
							</div>
                        </ul>
						
                    </div>
                </div>
				
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="#HeroBanner">Home</a></li>
                        <li><a class="nav-link" href="#Services">Products</a></li>
                        <li><a class="nav-link" href="#About">About</a></li>
                        <li><a class="nav-link" href="#Portfolio">Gallery</a></li>
						 <li><a class="nav-link" href="reg\reg.php">Registration</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Contact</a></li>
						
						
						
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header ends here -->
        <!-- Banner starts here -->
        <section id="HeroBanner">
            <div class="hero-content">
            <marquee direction="left"> <h1>Welcome to our Milky Store website</h1></marquee>
               
                    <a href="#Testimonial" class="hero-cta">LOGIN</a>
            </div>
        </section>
        <!-- Banner ends here -->
        <!-- Services section starts here -->
        <section id="Services">
            <div class="container">
                <div class="block-heading">
                    <h2>Products are Available</h2>
                    
                </div>
                <div class="services-wrapper">
                    <div class="each-service">
                         <div class="service-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                        <h5 class="service-title">Milk</h5>
                        <img src="images/p1.jpg" alt="product-1" height="200" width="300">
                    </div>
                    <div class="each-service">
                         <div class="service-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                        <h5 class="service-title">Curd</h5>
						
                        <img src="images/curd.jpg" alt="product-2" height="200" width="300">
                    </div>
                    <div class="each-service">
                         <div class="service-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                        <h5 class="service-title">Honey</h5>
						 
                        <img src="images/honey.jpg" alt="product-3" height="200" width="300">
                    </div>
                    <div class="each-service">
                         <div class="service-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                        <h5 class="service-title">Nature's Ghee</h5>
						 
                        <img src="images/ghee.jpg" alt="product-4" height="200" width="300">
                    </div>
                    <div class="each-service">
                         <div class="service-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                        <h5 class="service-title">Oil</h5>
						 
                        <img src="images/oil.jpg" alt="product-5" height="200" width="300">
                    </div>
                    <div class="each-service">
                        <div class="service-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                        <h5 class="service-title">Ghee</h5>
						 
                        <img src="images/product.jpg" alt="product-6" height="200" width="300">
                    </div>
                </div>
            </div>
             
            <a href="product.php" class="button" name="sub"> View More</a>
        </section>
        <!-- Services section ends here -->
        <!-- About Us section starts here -->
        <section id="About">
            <div class="container">
                <div class="about-wrapper">
                    <h2>About Us</h2>
					<br><br>
                    <p>Our service is to communicate with rural area people and perform efficient milk management.
					Our plan is to collect milk from different sources and distribute to the proper way. Rise the rural area people with their own economy, and
					rise their own income. Mission is to increase the availability of milk.</p>
                </div>
            </div>
        </section>
        <!-- About Us section ends here -->
        <!-- Portfolio section starts here -->
        <section id="Portfolio">
            <div class="container">
                <div class="block-heading">
                    <h2>Gallery</h2>
                    
                </div>
                <div class="portfolio-wrapper clearfix">
                    <a class="each-portfolio" data-fancybox="gallery" href="images/p-one.jpg">
                    <img src="images/p-one.jpg" alt="p-one">
                    <div class="hover-cont-wrap">
                        <div class="hover-cont-block">
                           <h5 class="p-title">Title</h5>
                            <div class="p-desc">
                                <div>Give Trust to People</div>
                                <div class="icon-div"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="images/milk.jpg">
                    <img src="images/milk.jpg" alt="p-two">
                    <div class="hover-cont-wrap">
                        <div class="hover-cont-block">
                           <h5 class="p-title">Title</h5>
                           <div class="p-desc">
                                <div>Milk Collecting</div>
                                <div class="icon-div"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="images/p-three.jpg">
                    <img src="images/p-three.jpg" alt="p-one">
                    <div class="hover-cont-wrap">
                       <div class="hover-cont-block">
                           <h5 class="p-title">Title</h5>
                           <div class="p-desc">
                                <div>Aggrements and calculated salary amount</div>
                                <div class="icon-div"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="images/Milk_milk.jpg">
                    <img src="images/Milk_milk.jpg" alt="p-one">
                    <div class="hover-cont-wrap">
                        <div class="hover-cont-block">
                           <h5 class="p-title">Title</h5>
                           <div class="p-desc">
                                <div>Different stages of Milk Management</div>
                                <div class="icon-div"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="images/milk5.jpg">
                    <img src="images/milk5.jpg" alt="p-one">
                    <div class="hover-cont-wrap">
                        <div class="hover-cont-block">
                           <h5 class="p-title">Title</h5>
                           <div class="p-desc">
                                <div>Collecting,store the milk and arranged</div>
                                <div class="icon-div"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   </a>
                    <a class="each-portfolio" data-fancybox="gallery" href="images/distributionVan.jpg">
                    <img src="images/distributionVan.jpg" alt="Milk Distribution">
                    <div class="hover-cont-wrap">
                        <div class="hover-cont-block">
                           <h5 class="p-title">Title</h5>
                           <div class="p-desc">
                                <div>Milk Distributed to different regions.</div>
                                <div class="icon-div"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   </a>
                    
                </div>
            </div>
        </section>
        <!-- Portfolio section ends here -->
        <section id="Testimonial">
          <div class="testimonial-wrap">
          <div class="container">
            <div class="block-heading">
            </div>
            
			
			<div class="limiter">
		
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="login.php" name="myform" Onsubmit="return validateform()">
					<span class="login100-form-title">
						 LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="email" name="user" placeholder="E-mail" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
					</div>
					<br>
                    
                    <a href="/project/forgot_sent.php" style="margin-left:100px;">Forget Password?</a>
					
					<br>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>
	<script src="js/loginvalid.js"></script>

			
			
			
			
			
			
			
			
			
			
			
			
          </div>
        </div>
        </section>
        <!-- Contact us section starts here -->
        <section id="ContactUs">
            <div class="container contact-container">
                <h3 class="contact-title">Trusted Service</h3>
                <div class="contact-outer-wrapper">
                    <div class="address-block">
                        <p class="add-title">Contact Details</p>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="c-info">Milky Store, st. marks road, CA</span>
                        </div>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span> <span class="c-info">9207515691,0481-2552876</span>
                        </div>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span> <span class="c-info">milkystore90@gmail.com</span>
                        </div>
                    </div>
                    <div class="form-wrap">
                    <img src="images/hand.jpg" alt="p-one" style="width=500px; height=500px;">
                       <!-- <p class="add-title">Send Us Message</p>
                        <form>
                            <div class="fname floating-label">
                                <input type="text" class="floating-input" name="full name" id="full-name-field" />
                                <label for="full-name-field">Full Name</label>
                            </div>
                            <div class="email floating-label">
                                <input type="email" class="floating-input" name="email" id="mail-field" />
                                <label for="mail-field">Email</label>
                            </div>
                            <div class="contact floating-label">
                                <input type="tel" class="floating-input" name="contact" id="contact-us-field" />
                                <label for="contact-us-field">Contact</label>
                            </div>
                            <div class="company floating-label">
                                <input type="text" class="floating-input" name="usertype" id="company-field" />
                                <label for="company-field">User_Type</label>
                            </div>
                            <div class="user-msg floating-label">
                                <textarea class="floating-input" name="user message" id="user-msg-field"></textarea>
                                <label for="user-msg-field" class="msg-label">Your Message</label>
                            </div>
                            <div class="submit-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </form>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact us section ends here -->
        <!-- Footer section starts here -->
        <footer id="Footer">
            <div class="container">
                <div class="social-share">
                    
                </div>
                <div class="footer-logo-wrap">
                    milkystore &copy; 2019. Designed by <a href="https://www.ajce.in">Ajce</a>
                </div>
            </div>
        </footer>
        <!-- Footer section ends here -->
    </section>
	
	
	
	
	
</body>

</html>