<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
$id=$_SESSION['loginid'];
$sid=$_SESSION['staff_id'];
include "dbconnect.php";
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Float four columns side by side */
.column {
  float: below;
  width: 20%;
  padding: 5px 10px;
}

/* Responsive columns */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: -50px 10px;
  text-align: center;
  background-color: #0047b3;
  color: white;
}

/* bar */
.container {
  width: 100%;
  background-color: #ddd;
  padding: 0;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html { background-color: #cc6699;}
.css { background-color: #ff9900;}
.js { background-color: #f44336;}
.php {background-color: #808080;}


/* notifications */
.bgd {
  max-width: 1200px;
  padding: 0 0px;
}

.contain {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 25px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.contain::after {
  content: "";
  clear: both;
  display: table;
}

.contain img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.contain img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #009900;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  float:right;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 15px;
  right: 250px;
  padding:15px 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 600px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #66a3ff;
  color: white;
  padding: 10px 0px;
  border: none;
  cursor: pointer;
  margin-bottom:10px;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  background-color: #0052cc;
}

</style>
  </head>
  <body class="bg">
  
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
        <!--<div class="custom-menu">
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
	  				
	  				<!--<div class="img" style="background-image: url(images/icon.png);"></div>-->

            <h3><?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5" >
          <li class="active">
            <a href="staff_home.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="profile_page.php"><span class="fa fa-user mr-3"></span> Profile</a>
          </li>
          <li>
              <a href="attendance.php"><span class="fa fa-download mr-3 notif"></span>Attendance Report</a>
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
            <a href="order_requested.php"><span class="fa fa-file">&nbsp;&nbsp;</span>Order Pending Request</a>
          </li>
          <li>
            <a href="transaction.php"><span class="fa fa-support mr-3"></span> Cash Transaction</a>
          </li>         
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    <br><br><br><br>
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Staff Home</h2>
      
        
<div>

  <div class="column">
    <div class="card">
      <a href="transaction.php" style="color:white;"><p style="font-size:30px;"><i class="fa fa-check"></i></p>
      <?php
      $sq=mysqli_query($db,"SELECT blc,max(date) as date FROM `acct` where loginid='$id'");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $blc=$r['blc'];
    $dat=$r['date'];
    ?>
      <h3><i class="fa fa-rupee"></i><?php echo $blc; ?> </h3>
      <p>Cash Credited on <?php echo $dat; ?></p></a>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <a href="order_requested.php" style="color:white;"><p style="font-size:30px;"><i  class="fa fa-quora"></i></p>
      <?php
    $sq=mysqli_query($db,"SELECT count(pc_id) FROM purchase_cart where status=1");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $q=$r['count(pc_id)'];
    if($q>0){
      ?>
      <h3><?php echo $q; ?></h3>
      <p>New Order Request</p>
      <?php
    }
    else
    {
    
      ?>

<h3><?php echo "0"; ?></h3>
      <p> Request Available</p>
    <?php } ?></a>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <a href="leave.php" style="color:white;"><p style="font-size:30px;"><i  class="fa fa-close"></i></p>
      <?php
    $sq=mysqli_query($db,"SELECT count(aid) FROM attendance where staff_id='$sid' and ch=0");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $a=$r['count(aid)'];
    $sq=mysqli_query($db,"SELECT count(aid) FROM attendance where staff_id='$sid' and ch=0 and status=4");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $ap=$r['count(aid)'];
    $sq=mysqli_query($db,"SELECT count(aid) FROM attendance where staff_id='$sid' and ch=0 and status=5");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $ar=$r['count(aid)'];
    ?>
      <h6><?php echo $a; ?>&nbsp;&nbsp;&nbsp;Leave Taken</h6>
      <p><?php echo $ap; ?>&nbsp;&nbsp;&nbsp;Leave Approved<br>
      <?php echo $ar; ?>&nbsp;&nbsp;&nbsp;Leave Rejected</p></a>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <?php
          include "dbconnect.php";
           $sel="SELECT * FROM `staff_reg` where loginid='$id'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
             
            
    ?>
   <form action="" Method="POST" enctype="multipart/form-data">
  <br>
  <a href="profile_page.php" style="color:white;"><h5>Profile</h5>
      <p style="font-size:20px;"><img src="/project/Staff_Page/<?php echo $row['pic']; ?>" height=100 width=100>
      <?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></p>
      
      <p>Post : <?php echo $row['work']; ?><br>
      From : <?php echo $row['location']; ?><br>
      Contact Info :<?php  echo $row['phone_no']; ?><br>
                  &nbsp;&nbsp;&nbsp; <?php  echo $row['email']; ?></p>
           </form>
           <?php } ?></a>
    </div>
  </div>
  
   </div>
<div style="margin-left:300px;">    
<div style="margin-top:-850px;"> 
<h3> Staff's Attendance Percentage</h3>
<div style="background-color: #f44336; height:15px;  width: 15px; border: 1px solid black; margin-left:800px;">
</div><label style="color:black;  margin-left:800px;">Manager</label>
<div style="background-color: #ff9900; height:15px;  width: 15px; border: 1px solid black; margin-left:900px; margin-top:-50px;">
</div><label style="color:black; margin-left:900px;">Other Staff</label>


<?php
$sel="SELECT * FROM `staff_reg`";
$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
  $na1=$row['firstname'] ;
  $na2=$row['lastname'] ;
  $sid=$row['staff_id'] ;

$sq=mysqli_query($db,"SELECT count(staff_id) FROM attendance where staff_id='$sid' and ch=0");
$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
$staff=$r['count(staff_id)'];
$st=30-$staff;

  $cs=($st/30)*100;
	$rs=round($cs);
 

  
?>
<div class="container">
  <?php echo "<div class='skills js' style='width: $rs%'>$rs %</div>"; ?>
</div>
<p style="color:#f44336;"><?php echo $row['firstname']; echo "&nbsp"; echo $row['lastname']; ?></p>
<?php } ?>


<?php

$sel="SELECT * FROM `attent_report` where ch=0";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
  $n1=$row['name1'] ;
  $n2=$row['name2'] ;
  $nc=$row['count'] ;

  $c=($nc/30)*100;
	$r=round($c);
	 
?>
<div class="container">
  <?php echo "<div class='skills css' style='width: $r%'>$r %</div>"; ?>
</div>
<p style="color:#ff9900;"><?php echo $row['name1']; echo "&nbsp"; echo $row['name2']; ?></p>
<?php } ?>


 </div>

<br><br>
<h4>Notifications From Admin</h4>
<div class="bgd">
<div class="contain">
<i class="fa fa-user" class="right">Admin</i>
<?php
      $sq=mysqli_query($db,"SELECT max(ndate) as date FROM `notification` where person='Admin' ");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $nd=$r['date'];

    $sq=mysqli_query($db,"SELECT nmsg FROM `notification` where ndate='$nd' ");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $msg=$r['nmsg'];
    ?>
 <p><?php echo $msg; ?></p><br>
  <span class="time-right"><?php echo $nd; ?></span>
 
</div>

</div>


</div>

<button class="open-button" onclick="openForm()">Message To Admin</button>

<div class="form-popup" id="myForm">
<p style="font-size:25px; float:right"><i class="fa fa-close" class="btn cancel" onclick="closeForm()"></i></p>

  <form action="" class="form-container" method="POST">
    <h3>Replay </h3>
    
    <label for="replay"><b>Send Message</b></label><br>
    <textarea rows="4" cols="33" name="msg" id="msg"></textarea>
    <button type="submit" class="btn" name="submit">Send <i class="fa fa-send"></i></button>
    <!--<button type="button" class="btn cancel" onclick="closeForm()">Close</button>-->
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  


    
     </div>

		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



    
  </body>
</html>


<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$nmsg=$_POST['msg'];

$sq="INSERT INTO `notification`(`person`,`nmsg`) VALUES ('Staff','$nmsg')";
$ch=mysqli_query($con,$sq);
	if($ch)
	{ 
  echo " <script>
 alert('Send Replay Successfully');
 window.location='staff_home.php'
 </script> ";
  
 }
 else
 {
  echo"error:".$sq."<br>".mysqli_error($con);
   }
}
?>

<?php
}
else
header("location:/project/home.php");
?>

