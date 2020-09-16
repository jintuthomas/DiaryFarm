<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
$id=$_SESSION['loginid'];
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

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 4px;
  cursor: pointer;
  border-radius: 12px;
}
.butt {
  background-color: #ff6600; /* orange */
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 4px;
  cursor: pointer;
  border-radius: 12px;
}

  </style>
  <script>
function avalidate(a)
{
  if(check == "")
    {

    alert("Click on the Checkbox");
    document.getElementById("check").focus();
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
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Staff Home</h2>
      
         




        <form action="" method="POST" name="liststaff">
   
   
   
   <br>
  <br>
   <h1><b><i style="margin-left:350px;">STAFF ATTENDANCE SHEET</i></b></h1>
   <a href="send_sheet.php" style="margin-left:1020px; color:red; font-size:15px;">Send Attendance Sheet to Admin </a>  //
   <a href="cancel_send_sheet.php" style="float:right; color:red; font-size:15px;">Cancel Sending.... </a>
   <br><br>
<table border="5" width="100%" class="table table-striped" >
    <tr style="text-align:center">
	<th>NAME</th>
	<th>WORK</th>
    <th>SESSION</th>
   
	<th colspan="3">ACTION</th>
	
    
  </tr>
    <?php
include "dbconnect.php";
$sel="SELECT * FROM `registration_staff` where status=6";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
    $lid=$row['staff_regid'] ;
    $f=$row['name1'] ;
    $l=$row['name2'] ;
    $w=$row['work'] ;
	
	/*$sq=mysqli_query($db,"select username from login where loginid='$lid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
	$em=$r['username'];*/

?>
<tr>
<td> 
   <?php 
        echo $row['name1']; echo "&nbsp"; echo $row['name2'];
    ?>
  </td>
  

<td>
<?php  
echo $row['work'];

?>
</td>
<td>

<!--<label for="session">Choose Session :</label>&nbsp;&nbsp;&nbsp;

<select id="session" name="session">

  <option value="Morning">Morning</option>
  <option value="Evening">Evening</option>
  <option value="Fullday">Full Day</option>
</select>-->
<?php  
echo $row['work_time'];

?>
</td>
<form action="" name="form" id="form">


<td><a href="atten_action.php?id=<?php echo $lid; ?>" style="color:white"; class="button" onClick="return checkTerms();">Present <i class="fa fa-check"></i></a>&nbsp;&nbsp;</td>
<td>OR</td>
<td><a href="atten_absent.php?id=<?php echo $lid; ?>" style="color:white"; class="butt" onClick="return checkTerms();">Leave <i class="fa fa-close"></i></a></td>

</tr>
<?php
//$_SESSION['session']=$s;
//$s = _POST['session'];

//$_SESSION['session'] = $s;
}
?>
</table>
   </form>

    
         </div>
		</div>
    

   
<script>
function checkTerms()
{
    var ticked = document.getElementById("check").checked;

    if(!ticked) alert("Please Tick On the checkbox");

    return ticked;
}
</script>


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


