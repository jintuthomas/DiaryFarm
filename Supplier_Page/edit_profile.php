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
  	<title>Supplier Page</title>
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

.button {
  background-color: green;
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  
}


  </style>

<script>

function fvalidate(e)
{
 
  
  var ad3=document.getElementById("ad3").value;
  var phone=document.getElementById("phone").value;
  var email=document.getElementById("email").value;
	
    var x=document.forms["myform"]["ad1"].value;
   if(x=="")
   {
     alert("Please Enter the House Number or House Name");
     document.getElementById('ad1').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z0-9 ]*$"); 
      if(!pattern1.test(document.myform.ad1.value)) 
	  {
      alert("Error: Please enter valid House name or House Number!");
      myform.ad1.focus();
    return false;
     
}


var y=document.forms["myform"]["ad2"].value;
   if(y=="")
   {
     alert("Please Enter Your place");
     document.getElementById('ad2').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.ad2.value)) 
	  {
      alert("Error: Please enter valid place!");
      myform.ad2.focus();
    return false;
     
}

if(ad3 == "")
    {
    alert("Enter Your Pincode");
    document.getElementById("ad3").focus();
    return false;
    } 
  
   else if(isNaN(ad3))
    {
      alert("Enter the valid Pincode");
      document.getElementById("ad3").focus();
      return false;
    }
    else if(ad3.length>0 && ad3.length!=6)
    {
      alert("Your Pin number is less than 6 digits");
      document.getElementById("ad3").focus();
      return false;
    }
  if(phone == "")
    {
    alert("Enter the Phone Number");
    document.getElementById("phone").focus();
    return false;
    } 
    else if(isNaN(phone))
    {
      alert("Enter the valid Phone Number");
      document.getElementById("phone").focus();
      return false;
    }
    else if(phone.length>0 && phone.length!=10)
    {
      alert("Your Phone number is less than 10 digits");
      document.getElementById("phone").focus();
      return false;
    }
	var pattern = new RegExp("^([6-9]{1})([0-9]{9})$"); 
      if(!pattern.test(document.myform.phone.value)) 
	  {
      alert("Error: Phone Number is invalid!");
      myform.phone.focus();
    return false;
     }

     if(email == "")
    {
    alert("Enter Your email");
    document.getElementById("email").focus();
    return false;
    } 

}
</script>





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
	  				
            <h3><?php echo $usr_name; echo "&nbsp"; echo $usr_lname;?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="supplier_home.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="profile.php"><span class="fa fa-user mr-3"></span> Profile</a>
          </li>
         
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
         
            
          
      </ul>
    
    	</nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">      
        
        <form method="POST" name="myform" onsubmit="return fvalidate(this)" autocomplete="off" enctype="multipart/form-data">
        <?php
          include "dbconnect.php";
           $sel="SELECT * FROM `supplier_reg` where loginid='$id'";
           
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

              <!--<input type="file" name="fileupload" id="file" style="margin-top:350px; margin-left:-250px;">-->
							<div class="media-body" style="margin-left:100px;">
								<div class="personal_text">
									<h6>Hello, i am</h6>
									<h3><?php  echo $row["fname"]; echo"&nbsp"; echo $row["lname"];  ?></h3>
                                    
                                    <br><br><br><br><br>
									
                                    <ul class="list basic_info">
                                       <li><label  style="color:white;"> <i class="lnr lnr-home"></i>&nbsp; Address : &nbsp;&nbsp;</label>  
                                       <input name="ad1" type="text" id="ad1" value="<?php  echo $row["address"]  ?>"  ><br>
                                       <input name="ad2" type="text" id="ad2"value="<?php  echo $row["address2"]  ?>" style="margin-left:90px;"><br>
                                       <input name="ad3" type="text" id="ad3" value="<?php  echo $row["address3"]  ?>" style="margin-left:90px;"></li>
										<li><label  style="color:white; margin-left:-53px;">&nbsp;<i class="lnr lnr-phone-handset"></i>&nbsp; Phone Number :&nbsp; </label>
                                        &nbsp;  <input id="phone" type="tel" name="phone" value="<?php echo $row["contact"];?>"></li>
										<li><label  style="color:white;margin-left:10px;">&nbsp;<i class="lnr lnr-envelope"></i>&nbsp;E-mail : &nbsp;</label>
                                         &nbsp;&nbsp;<input id="email" type="email" name="email" value="<?php echo $row["email"];  ?>"></li><br>
                                         
									</ul>
									<br><br>
                                    <button type="submit" name="submit"  class="button" >UPDATE</button>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <?php  }?>
           </form>

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



<?php
include "dbconnect.php";
    if(isset($_POST['submit']))
    {
      $a1=$_POST['ad1'];
      $a2=$_POST['ad2'];
      $a3=$_POST['ad3'];
    
       $c=$_POST['phone'];
        $d=$_POST['email'];
   

        
/*$target_dir = "profile/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);*/


      
 $sql="UPDATE supplier_reg SET address='$a1',address2='$a2',address3='$a3',contact='$c',email='$d' WHERE loginid ='$id'";
    
      
      $ch=mysqli_query($con,$sql);
              
       if($ch)
          
          {?>
            <script>
             alert(" Profile updated successfully");
             window.location='profile.php'
             </script>
             <?php
          }
        else
          {
            echo"error:".$sql."<br>".mysqli_error($con);
          }
      }
    
        mysqli_close($con);
  ?>