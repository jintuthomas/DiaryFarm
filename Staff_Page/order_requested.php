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
      
         




        <form action="" method="POST" name="liststaff" enctype="multipart/form-data">
   
   
   
   <br><br>
   <h1><b><i style="margin-left:520px;">NEW ORDERS</i></b></h1><br><br><br>
<table border="5" width="100%" class="table table-striped" >
    <tr style="text-align:center">
	
    <th>PRODUCT NAME</th>
    <th>NUMBER</th>
    <th>PRICE(single one)</th>
    <th>TOTAL PAYED RS.</th>
    <th colspan="2">ORDER REQ</th>
	
	
    
  </tr>
    <?php
include "dbconnect.php";
$sel="SELECT * FROM `purchase_cart` where status=1";

$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	
    $cid=$row['cartid'] ;
    $pcid=$row['pc_id'];
	
	$sq=mysqli_query($db,"select * from cart where cartid='$cid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $num=$r['num'];
    $price=$r['price'];

	/*$sq=mysqli_query($db,"select username from login where loginid='$lid' ");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
	$em=$r['username'];*/

?>
<tr>

<td>
<?php  
echo $row['ptname'];

?>
</td>

<td>
<?php  
 echo $num;

?>
</td>
<td>
<?php  
echo $price;

?>
</td>
<td>
<?php  
echo $row['tot'];

?>
</td>
<td><a href="order_receive.php?id=<?php echo $pcid; ?>" style="color:white"; class="button">Recieved</a></td>

</tr>
<?php
}
?>
</table>
   </form>

    
         </div>
		</div>

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


