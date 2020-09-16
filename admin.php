<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$id=$_SESSION['loginid'];

if($login)
{
	?>
<html>
<head>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.css.map.css">
<link rel="stylesheet" href="css/style.scss">

<link rel="stylesheet" type="text/css" href="css/ad.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<style>
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 300px;
  height:400px;
  background-color: #555;
  color: #fff;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 0%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}


.bg{
    background-image:  url("images/bg7.jpg");
  background-size: cover;
  background-repeat: no-repeat;
 
  background-attachment: fixed;
  display: table;
	width: 100%;
	height: 100vh;
}
.button {
    background-color: green;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 20%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 50px;
  text-align: center;
  background-color: #002db3;
  color: white;
  max-width: 500px;
  max-height: 200px;
}

.fa {font-size:50px;}


/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
  margin-left:-10px;
  margin-right:-10px;
}

/* Slides */
.mySlides {
  display: none;
  padding: 50px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: blue;
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 10px;
    background: #ddd;
    margin-left:-10px;
    margin-right:-10px;
    
    
    
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
.dots {
  height: 20px;
  width: 20px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}


.replay {
  background-color: lightgrey;
  width: 350px;
  height: 60px;
  padding: 10px 10px;
  margin-top: -50px;
  margin-left: 20px;
}



/* bar */
.barcontainer {
  
  background-color: #ddd;
  
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

</style>
</head>
<body class="bg">
<div class="container">
<!--     SIDE AREA -->
    <div class="sideArea">
        <div class="avatar">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="">
            <div class="avatarName">Welcome,<br>ADMIN</div>
        </div>
        <ul class="sideMenu">
        <li><a href="admin.php">&nbsp;&nbsp;&nbsp;&nbsp;HOME</a></li>
        <li><a href="pay_form.php">&nbsp;&nbsp;&nbsp;&nbsp;BANK DETAILS</a></li>
		
            <li><a href="javascript:void(0)" class="has-submenu">&nbsp;&nbsp;&nbsp;&nbsp;MANAGE USERS</a>
                <ul class="submenu">
                <li><a href="add_designation.php">&nbsp;&nbsp;&nbsp;&nbsp;Add New Designation</a></li>
                    <li><a href="Staff_Page/staff_reg.php">&nbsp;&nbsp;&nbsp;&nbsp;Manager Registration</a></li>
                    <li><a href="staff_reg/registration_staff.php">&nbsp;&nbsp;&nbsp;&nbsp;Staff Registration</a></li>
                    <li><a href="atten_aprove.php">&nbsp;&nbsp;&nbsp;&nbsp;Leave Approval</a></li>
					<li><a href="view_staff.php">&nbsp;&nbsp;&nbsp;&nbsp;Staff List</a></li>
                    <li><a href="view_supplier.php">&nbsp;&nbsp;&nbsp;&nbsp;Suppliers List</a></li>
                    <li><a href="attend_reg.php"> &nbsp;&nbsp;&nbsp;&nbsp;Staff Attendance</a></li>
                    <li><a href="view_customer.php">&nbsp;&nbsp;&nbsp;&nbsp;Approve Customers</a></li>
                    <li><a href="salary_scale.php">&nbsp;&nbsp;&nbsp;&nbsp;Salary Scale Updation</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0)" class="has-submenu">&nbsp;&nbsp;&nbsp;&nbsp;MANAGE MILK</a>
                <ul class="submenu">
                    <li><a href="purchase_milk.php">&nbsp;&nbsp;&nbsp;&nbsp;View Purchase's Milk </a></li>
                    <li><a href="supper_milk.php">&nbsp;&nbsp;&nbsp;&nbsp;View Supplier's Milk </a></li>
                </ul>
            </li>
			
             <li><a href="javascript:void(0)" class="has-submenu">&nbsp;&nbsp;&nbsp;&nbsp;RATE</a>
                <ul class="submenu">
                    <li><a href="rate_list.php">&nbsp;&nbsp;&nbsp;&nbsp;View Rate List </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu">&nbsp;&nbsp;&nbsp;&nbsp;PRODUCTS</a>
                <ul class="submenu">
                    <!--<li><a href="cat.php"><span class="fa fa-list"></span>ADD Category </a></li>-->
                    <li><a href="subcat.php">&nbsp;&nbsp;&nbsp;&nbsp;ADD SubCategory </a></li>
                    <li><a href="add_product.php">&nbsp;&nbsp;&nbsp;&nbsp;ADD Product </a></li>
                    <li><a href="order_req.php">&nbsp;&nbsp;&nbsp;&nbsp;View Order Request </a></li>
                    <li><a href="view_products.php">&nbsp;&nbsp;&nbsp;&nbsp;Stock Update </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu">&nbsp;&nbsp;&nbsp;&nbsp;PAYMENT</a>
                <ul class="submenu">
                    <li><a href="pay_staff.php">&nbsp;&nbsp;&nbsp;&nbsp;Staff_Payment</a></li>
                    <li><a href="pay_supplier.php">&nbsp;&nbsp;&nbsp;&nbsp;Supplier_Payment</a></li>
                    
                </ul>
            </li>
            
            <li><a href="javascript:void(0)" class="has-submenu">&nbsp;&nbsp;&nbsp;&nbsp;FEEDBACK</a>
            <ul class="submenu">
                    <li><a href="view_feedback.php">&nbsp;&nbsp;&nbsp;&nbsp;View Feedback</a></li>
                    
					
                </ul>
            
            </li>
            
			 
        </ul>
    </div>
<!--     SIDE AREA -->
    <div class="mainArea">
        <!-- BEGIN NAV -->
		<?php echo "Welcome: $type";?>
        <nav class="navTop row">
            <div class="menuIcon fl"><span class="fa fa-bars"></span></div>
            <div class="account fr">
                <div class="name has-submenu">ADMIN<span class="fa fa-angle-down" style="font-size:40px;"></span>
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="" height="20" width="20" ></div>
                <ul class="accountLinks submenu">
				   <li><a href="changepass.php">Change Password<span class="fa fa-sign-out fr" style="font-size:20px;"></span></a></li>
                    
                    <li><a href="logout.php">Logout<span class="fa fa-sign-out fr" style="font-size:20px;"></span></a></li>
                </ul>
            </div>
        </nav>
        <!-- END NAV -->
        <!-- CONTAINER  -->
        <div class="mainContent">  
<!-- LIST FORM -->
<div>    <form action="" method="POST" class="formSearch fl">
       
    </form>
    
<!--             END GROUP -->             
        </div>
    
<form action="" method="POST" name="liststaff">



   </form>
          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data">

<div class="row">
  <div class="column">
    <div class="card">
      <a href="view_customer.php"><i class="fa fa-user"></i></a><br><br>
      <?php
      include "dbconnect.php";
    $sq=mysqli_query($db,"SELECT count(cust_id) FROM cust_reg where status=0 && veri=1");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $v=$r['count(cust_id)'];
    if($v>0){
      ?>
    
      <h3><?php echo $v; ?></h3>
      <p>New Joinings</p>
      <?php
    }
    else
    {
    
      ?>
      <h3><?php echo "0"; ?></h3>
      <p>New Joining</p>
    <?php } ?>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <a href="order_req.php"><i class="fa fa-quora"></i></a><br><br>
      <?php
      include "dbconnect.php";
    $sq=mysqli_query($db,"SELECT count(pc_id) FROM purchase_cart where status=0");
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
    <?php } ?>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <a href="view_products.php"><i class="fa fa-product-hunt"></i></a><br><br>
      <?php
      include "dbconnect.php";
    $sq=mysqli_query($db,"SELECT count(pid) FROM product where exp_veri=1");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $px=$r['count(pid)'];
 
    if($px>0){
      ?>
      <h3><?php echo $px; ?>  Products is/are expired</h3>
      <p></p>
      <?php
    }
    else
    {
    
      ?>
      <h3><?php echo " No notifications"; ?></h3>
      
    <?php } ?>
   <br> 
   
  <?php  
$sel="SELECT * FROM `product` where status='Product stock is low'";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
    $st=$row['status'] ;
    $pn=$row['ptname'] ;
    $s=$row['pid'] ;

    if($s==null)
    {


?>
<h3><?php echo " "; ?></h3>
<?php } 
else
{?>
    <h3><?php echo $pn; echo ": "; echo $st; ?></h3>
<?php } } ?>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <a href="supper_milk.php"><i class="fa fa-coffee"></i></a><br><br>

      <?php 
      include "dbconnect.php";
      $da= date("Y-m-d");

    $s=mysqli_query($con,"select sum(qty) from `purchase_milk` where date1='$da'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $m=$r['sum(qty)'];

    
$s=mysqli_query($con,"select sum(quantity) from `supp_milk` where date1='$da'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);

 $su=$r['sum(quantity)'];
 if($m!=0&$su!=0)
 {
      ?>
      <h3>Today - <?php echo $da; ?></h3><br>
      <h3><?php echo $m; ?> ltr Milk selled out</h3>
      <h3><?php echo $su; ?> Kg Milk Collected in</h3>

      <?php
 }
 else{

      ?>

<h3>Today - <?php echo $da; ?></h3><br>
      <h3>No Record</h3>
     <?php
 }
 ?>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <p><img src="/project/images/mastercard.png" width="70"><i class="fa fa-cc-visa"></i></p>
      payment<br><br>
      <?php 
      include "dbconnect.php"; 
      $da= date("Y-m-d");
$sel="SELECT n1,n2,max(date) as date FROM `acct` group by loginid";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
   $dat = date('Y-m-d', strtotime($row['date']. ' +30 days'));


    if($dat<=$da)
    {

    ?>
      <h3></h3>
      <p><?php echo 'Due payment for '; echo $row['n1']; echo "&nbsp";echo $row['n2'];  ?></p>
<?php }  
 }  
 ?>
    </div>
  </div>
 
</div>

<br><br><br><br>


   
<div style=" margin-top:5px; margin-left:15px;">
<?php 
 
function build_calendar($month,$year) {

    // Create array containing abbreviations of days of week.
    $daysOfWeek = array('S','M','T','W','T','F','S');

    // What is the first day of the month in question?
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

    // How many days does this month contain?
    $numberDays = date('t',$firstDayOfMonth);

    // Retrieve some information about the first day of the
    // month in question.
    $dateComponents = getdate($firstDayOfMonth);

    // What is the name of the month in question?
    $monthName = $dateComponents['month'];

    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];

    // Create the table tag opener and day headers

    $calendar = "<table class='calendar' width=300>";
    $calendar .= "<caption style='background:#1abc9c; font-size:30px;'>$monthName $year</caption>";
    $calendar .= "<tr>";

    // Create the calendar headers

    foreach($daysOfWeek as $day) {
         $calendar .= "<th class='header' bgcolor='#999999' style='font-size:18px; color:#000000;'>$day</th>";
    } 

    // Create the rest of the calendar

    // Initiate the day counter, starting with the 1st.

    $currentDay = 1;

    $calendar .= "</tr><tr>";

    // The variable $dayOfWeek is used to
    // ensure that the calendar
    // display consists of exactly 7 columns.

    if ($dayOfWeek > 0) { 
         $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>"; 
    }
    
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
 
    while ($currentDay <= $numberDays) {

         // Seventh column (Saturday) reached. Start a new row.

         if ($dayOfWeek == 7) {

              $dayOfWeek = 0;
              $calendar .= "</tr><tr>";

         }
         
         $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
         
         $date = "$year-$month-$currentDayRel";

         $calendar .= "<td class='day' rel='$date' bgcolor='#eee'>$currentDay</td>";

         // Increment counters

         $currentDay++;
         $dayOfWeek++;

    }
    
    

    // Complete the row of the last week in month, if necessary

    if ($dayOfWeek != 7) { 
    
         $remainingDays = 7 - $dayOfWeek;
         $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>"; 

    }
    
    $calendar .= "</tr>";

    $calendar .= "</table>";

    return $calendar;

}

$dateComponents = getdate();

 $month = $dateComponents['mon']; 			     
 $year = $dateComponents['year'];

 echo build_calendar($month,$year);

 
 ?>
</div>

<div  style=" margin-top:30px;">
<label style="font-size:20px;"><b>Send Notifications</b></label><br>
<form action="" method="POST">
<textarea rows="6" cols="40" name="msg" id="msg" style="margin-left:20px;"></textarea><br>
<button type="submit" class="button"  name="submit" style="margin-left:370px; margin-top:-40px;" >Send <i class="fa fa-send" style="font-size:10px;"></i></button>
</form><br><br><br><br><br>
<?php
include "dbconnect.php";
      $sq=mysqli_query($db,"SELECT max(ndate) as date FROM `notification` where person='Admin' ");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $nd=$r['date'];

     $sq=mysqli_query($db,"SELECT nmsg FROM `notification` where ndate>='$nd' and person='Staff' ");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $rmsg=$r['nmsg'];
    ?>

<label class="replay">Replay<br><?php echo $rmsg; ?></label><br><br>
<div style="margin-left:20px; color:green;" class="popup" onclick="myFunction()" >Click me to see the whole chat!
 <span class="popuptext" id="myPopup" style="text-align:center;">Chat with staff<br><br>

  <?php
include "dbconnect.php";

$sell="SELECT nmsg FROM `notification` ORDER BY `nid`";

$res=mysqli_query($db,$sell);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	


?>
<label style="font-size:15px;"><br><?php echo $row['nmsg'];  ?><br><label><?php } ?>
  <!--<label style="margin-left:-60px; margin-right:-30px; background-color: #b3ffff; width:200px; height:40px; color:black">
<?php echo $row['nmsg'];  ?><br></label><br>s<br>-->

</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
   
</div>


<div style="margin-left:500px; margin-top:-420px;">
<h3> Staff's Attendance Percentage</h3>
<div style="background-color: #f44336; height:15px;  width: 15px; border: 1px solid black; margin-left:800px;">
</div><label style="color:black;  margin-left:800px;">Manager</label>
<div style="background-color: #ff9900; height:15px;  width: 15px; border: 1px solid black; margin-left:900px; margin-top:-30px; ">
</div><label style="color:black; margin-left:900px;">Other Staff</label><br>


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
<div class="barcontainer">
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
<div class="barcontainer">
  <?php echo "<div class='skills css' style='width: $r%'>$r %</div>"; ?>
</div>
<p style="color:#ff9900;"><?php echo $row['name1']; echo "&nbsp"; echo $row['name2']; ?></p>
<?php } ?>


 </div>

</div>





<div class="slideshow-container" style="margin-top:90px;" >

<?php
include "dbconnect.php";
$sel="SELECT * FROM `feedback`";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
  
  $sq=mysqli_query($db,"SELECT count(feedid) FROM feedback");
  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
  $n=$r['count(feedid)'];

?>

<div class="mySlides">
  <q style="font-size:20px;"><?php  echo $row['feedback']; ?></q>
  <p class="author">- <?php echo $row['n1']; echo "&nbsp";  echo $row['n2']; ?></p>
</div>





<?php
}
?>

<a class="prev" onclick="plusSlides(-1)"><span class="fa fa-arrow-circle-left"></span></a>
<a class="next" onclick="plusSlides(1)"><span class="fa fa-arrow-circle-right"></span></a>
</div>

<div class="dot-container">
<?php
for($i=1; $i<=$n;$i++)
{
?>

<span class="dot" onclick="currentSlide(1)"></span> 
<?php
}
?>
 
</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</form> 
          

</div>

<script src="js/ad.js"></script>
</body>
</html>

<?php
}
else
header("location:home.php");
?>



<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$nmsg=$_POST['msg'];

$sq="INSERT INTO `notification`(`person`,`nmsg`) VALUES ('Admin','$nmsg')";
$ch=mysqli_query($con,$sq);
	if($ch)
	{ 
    $s=mysqli_query($con,"select min(nid) as nid from notification ORDER BY nid ");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $nid=$r['nid'];
    $sq=mysqli_query($db,"SELECT count(nid) FROM notification order by nid");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $n=$r['count(nid)'];

    if($n>10)
    {
      $q2="DELETE FROM notification where nid='$nid'";
      mysqli_query($con,$q2);
    }
  echo " <script>
 alert('Send Notification Successfully');
 </script> ";
 
  
 }
 else
 {
  echo"error:".$sq."<br>".mysqli_error($con);
   }
}
?>








<?php 
      include "dbconnect.php"; 


      $da= date("Y-m-d");
$sel="SELECT * FROM `staff_reg` where status=2";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    $d=$row['regi_date'];
    $f=$row['firstname'];
    $w=$row['work'];
    $sa=$row['salary'];
    $lid=$row['loginid'];
    

    $s=mysqli_query($con,"select salary from salary_chart where desig='$w'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $nsal=$r['salary'];
  

   $newsa=$sa+$nsal;
   $dat = date('Y-m-d', strtotime($row['regi_date']. ' +5 years'));


    if($dat<=$da)
    {
        $up="UPDATE staff_reg SET salary='$newsa',regi_date='$dat' where loginid='$lid'";
        $c=mysqli_query($con,$up);
	if($c)
	{ 
  echo " <script>
 alert('Salary Incremented To Manager $f');
 </script> ";
  
 }
    }
}





$sel="SELECT * FROM `registration_staff` where status=6";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    $d=$row['reg_date'];
    $w=$row['work'];
    $sa=$row['salary'];
    $lid=$row['loginid'];
    $name1=$row['name1'];
    

    $s=mysqli_query($con,"select salary from salary_chart where desig='$w'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $nsal=$r['salary'];
  

   $newsa=$sa+$nsal;
   $dat = date('Y-m-d', strtotime($row['reg_date']. ' +5 years'));


    if($dat<=$da)
    {
        $up="UPDATE registration_staff SET salary='$newsa',reg_date='$dat' where loginid='$lid'";
        $c=mysqli_query($con,$up);
	if($c)
	{ 
  echo " <script>
 alert('Salary Incremented To Staff $name1');
 </script> ";
  
 }
    }
}









    ?>