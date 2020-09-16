<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
$id=$_SESSION['loginid'];
$sid=$_SESSION['staff_id'];

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
.button {
  background-color: #4CAF50;
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

img {
  border-radius: 50%;
}

  </style>

<script>
function fvalidate(e)
{
 
  
  
  var loc=document.getElementById("loc").value;
  var email=document.getElementById("email").value;
  var phone=document.getElementById("phone").value;


  var x=document.forms["myform"]["loc"].value;
   if(x=="")
   {
     alert("Please Enter the location");
     document.getElementById('loc').focus();
     return false;
   }
   var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.loc.value)) 
	  {
      alert("Error: Please enter correct value!");
      myform.loc.focus();
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
    alert("Enter your email");
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
            <a href="edit_profile.php"><span class="fa fa-edit">&nbsp;&nbsp;&nbsp;</span>Edit Your Profile</a>
          </li>  
          <li>
            <a href="change_pwd.php"><span class="fa fa-edit">&nbsp;&nbsp;&nbsp;</span>Change Password</a>
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
        <form method="POST" name="myform" onsubmit="return fvalidate(this)" enctype="multipart/form-data">


        <?php
          include "dbconnect.php";
           $sel="SELECT * FROM `staff_reg` where loginid='$id'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
            $lid=$row['loginid'] ;
            
    ?>
        <div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex"  style="margin-left:50px;">
								<img src="/project/Staff_Page/<?php echo $row['pic']; ?> " alt="" style="width:500px">
							</div>
             <!-- <input type="file" name="fileupload" id="file" style="margin-top:350px; margin-left:-250px;">-->








							<div class="media-body" style="margin-left:100px;">
								<div class="personal_text">
									<h6>Hello Everybody, i am</h6>
									<h3><?php  echo $row["firstname"]; echo "&nbsp"; echo $row["lastname"];  ?></h3>
                                    <h4><?php echo $row["work"]; ?></h4>
                                    <br><br><br><br><br>
									<ul class="list basic_info">
                                       <li><label  style="color:white;"> <i class="lnr lnr-home"></i>&nbsp; Location : &nbsp;&nbsp;</label>  
                                       <input name="loc" type="text" id="loc" value="<?php  echo $row["location"]  ?>" ></li>
										<li><label  style="color:white; margin-left:-45px;">&nbsp;<i class="lnr lnr-phone-handset"></i>&nbsp; Phone Number :&nbsp; </label>
                                        &nbsp;  <input id="phone" type="number" name="phone" value="<?php  echo $row["phone_no"]   ?>"></li>
										<li><label  style="color:white;margin-left:20px;">&nbsp;<i class="lnr lnr-envelope"></i>&nbsp;E-mail : &nbsp;</label>
                                         &nbsp;&nbsp;<input id="email" type="email" name="email" value="<?php  echo $row["email"]   ?>"></li><br>

									</ul>
                                    <div  style="margin-left:100px;">
                                    <button type="submit" id="update" name="submit"  class="button">Update</button>
                                    </div>

								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            
            <?php  }?>
            </form>
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
      $a=$_POST['loc'];
    
       $c=$_POST['phone'];
        $d=$_POST['email'];
  

/*$target_dir = "pic/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);*/


      
      
  
         $sql="UPDATE staff_reg SET location='$a',phone_no='$c',email='$d'  WHERE loginid ='$id'";
    
      
      $ch=mysqli_query($con,$sql);
              
       if($ch)
          
          {?>
            <script>
             alert(" Profile updated successfully");
             window.location='profile_page.php'
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
