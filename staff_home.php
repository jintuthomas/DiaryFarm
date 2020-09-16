
<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$usr_name=$_SESSION['fname'];
if($login)
{
	?>


<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>staff_home</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   
   <link rel="apple-touch-icon" href="staff/images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="staff/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="staff/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="staff/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="staff/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="staff/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="staff/css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="staff/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="staff/images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="staff_home.php"><h1>Fresh Dairy</h1>
			   </a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="staff/images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">9784561234</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">freshdiary@gmail.com</a></span>	
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="staff_home.php">Home</a></li>
                        <li><a data-scroll href="profile_page.php">My Profile</a></li>
                        <li><a data-scroll href="">Attendance</a></li>
                        <li><a data-scroll href="">Manage Milk</a></li>
                        <li><a data-scroll href="">Transaction Details</a></li>
                        <li><a data-scroll href="logout.php">Logout</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
				  <?php echo "Welcome: $type:$usr_name";?>
				  
				  <?php
					
					
					include "dbconnect.php";
                   
					$q="select * from staff_reg  where staff_id=".$_SESSION['loginid'];
					$r=$ob->execute($q);

					while($f=mysqli_fetch_array($r))
					{
					echo "<H2><B>Welcome $f[2]</H2></B>";
					}
				?>
				  
				  
				  
				  
                     <h2>
                        <span class="center"><span class="icon"><img src="staff/images/new.jpg" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Diary World", "Fresh Diary", "Fresh Milk!" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <img src="staff/images/pic.jpg" height="240" width="260">
                     
                    
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
                     <h3>Rate List</h3>
                     <div class="time-table-section">
                        <ul>
                           <li><span class="left">Monday - Friday</span><span class="right">8.00 – 18.00</span></li>
                           <li><span class="left">Saturday</span><span class="right">8.00 – 16.00</span></li>
                           <li><span class="left">Sunday</span><span class="right">8.00 – 13.00</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <img src="staff/images/ab.jpg" height="240" width="260">
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
    
               <!-- end col -->
               
                    
                  <!-- end service -->
              
                  <!-- end service -->
              
      
      <!-- end section -->
	  
	  <!-- doctor -->
	  
	 
	  
                        <!-- end row -->
                     </div>
                     <!-- end pane -->
                    
	  <!-- end doctor section -->
	  
      <div id="testimonials" class="section wb wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="staff/images/icon-logo.png" alt="#"></span>
               <h2>Testimonials</h2>
            </div>
            
         </div>
         <!-- end container -->
      </div>
	  
	  
	  
	  
	  
	  
	 <div id="service" class="services wow fadeIn">
         <div class="container">
		 <div class="heading">
              
               <h2>Feedback</h2>
            </div>
            <div class="row">
               
                          
                     <form id="ajax-contact" action="staff/assets/mailer.php" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input type="text" class="form-control" placeholder="Name" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="email" class="form-control" placeholder="E-mail" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group in_message"> 
                           <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div class="actions">
                           <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>
                     </div>
                  
                     </div>
                               
                  </div>
             
           
      <!-- end section -->
     
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><h1>Fresh Dairy</h1></a>
                     <p>Better Milk Management Group in India</p>
                  </div>
               </div>
               
               <div class="col-md-4">
                  <div class="footer-info padding" >
				  
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> freshdiary@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+91) 9784561234</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2018 Fresh Diary. All Rights Reserved.</p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="staff/js/all.js"></script>
      <!-- all plugins -->
      <script src="staff/js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>

<?php
}
else
header("location:home.php");
?>
