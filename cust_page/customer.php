<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['cust_name'];
//$usr_lname=$_SESSION['lname'];
$id=$_SESSION['loginid'];
$usr_id=$_SESSION['cust_id'];
include "dbconnect.php";
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

.button {
    background-color: green;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  
}
 .button:hover {
  background-color: white;
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
@media screen and (max-width: 700px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: -40px 20px;
  text-align: center;
  background-color: #0047b3;
  
  color: white;
}
  </style>
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
            <a href="change_pwd.php"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
         
          <li>
            <a href="feedback.php"><span class="fa fa-edit mr-3"></span>Feedback</a>
          </li>
                 
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Customer Page</h2>
      
         
<br>

        
<div>
<div class="column">
    <div class="card" style="height:150px;">
      <p style="font-size:30px;"><i class="fa fa-smile-o"></i></p>
      <?php
     
    $sq=mysqli_query($db,"SELECT count(cust_id) FROM cust_reg where status=4 and veri=1");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $q1=$r['count(cust_id)'];
    $squ=mysqli_query($db,"SELECT count(supp_id) FROM supplier_reg where status=0");
	  $r=(mysqli_fetch_array($squ,MYSQLI_ASSOC));
    $q2=$r['count(supp_id)'];
    $q3=$q1+$q2;
    ?>
      <p style="font-size:20px;"><label style="color:black; font-size:25px;"><?php echo $q3; ?>+ &nbsp;</label> Happy Clients</p>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <a href="cart.php"><p style="font-size:30px; color:white;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></p></a>
      <?php
    $sq=mysqli_query($db,"SELECT count(cartid) FROM cart where loginid='$id' and st=0");
	  $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $q=$r['count(cartid)'];

    if($q>0){
      ?>
      <h3><?php echo $q;?></h3>
      <p>Items Added into cart Please check</p>
      <?php 
      }
      else{ ?>
      <p>No Items</p>
     <?php  }?>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
    <?php
          include "dbconnect.php";
           $sel="SELECT * FROM `cust_reg` where loginid='$id'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
             
            
    ?>
   <form action="" Method="POST" enctype="multipart/form-data">
  <br>
  <a href="profile.php" style="color:white;"><h5>Profile</h5>
      <p style="font-size:20px;"><img src="/project/registration/<?php echo $row['photo']; ?>" height=100 width=100 style="border-radius: 50%;"><br>
      <i class="fa fa-user"></i> <?php echo $usr_name;?></p>
      
      <p>
      From : <?php echo $row['address1']; ?><br>
      <?php echo $row['address2']; ?><br>
      Contact Info :<?php  echo $row['phone']; ?><br>
                  &nbsp;&nbsp;&nbsp; <?php  echo $row['email']; ?></p>
           </form>
           <?php } ?></a>
    </div>
  </div>
 </div>

 
<div style= "border: 30px solid #1a8cff; margin-left:300px; margin-top:-660px; height:auto;">


     <form action="" method="POST" enctype="multipart/form-data">
     <h4>Latest Product Orderd Receipt</h4>

<table width="100%" class="table table-striped" >
    <tr>
  <th>DATE & TIME</th>
	<th>BILL</th>
	
    
  </tr>
  <?php
     
        
     $query1=mysqli_query($con,"SELECT max(pc_id) as pc_id from purchase_cart where loginid='$id'");
     $r=mysqli_fetch_array($query1);
     $pc_id=$r['pc_id'];
     $query2=mysqli_query($con,"SELECT * from purchase_cart where pc_id='$pc_id'");
     $r=mysqli_fetch_array($query2);
     $dat=$r['date'];
     $bill=$r['bill'];
         
     
     ?>
<tr> 
<td><?php echo $dat; ?></td>
<td>
  <a href="<?php echo $bill; ?>" style="color:red;"> Download <i class="fa fa-arrow-down"></i></a>
  </td>


</tr>


</table>
</form>
<a href="purchased_products.php" class="button" style="margin-left:880px;">View More <i class="fa fa-arrow-right"></i></a>



</div><br><br>

<div style= "border: 30px solid #1a8cff; margin-left:300px; height:auto;">


     <form action="" method="POST" enctype="multipart/form-data">
     <h4>Latest Product Received Bill</h4>

<table width="100%" class="table table-striped" >
    <tr>
  <th>DATE & TIME</th>
	<th>BILL</th>
	
    
  </tr>
  <?php
     
        
     $query1=mysqli_query($con,"SELECT max(pc_id) as pc_id from purchase_cart where loginid='$id' and status=3");
     $r=mysqli_fetch_array($query1);
     $pc_id=$r['pc_id'];
     $query2=mysqli_query($con,"SELECT * from purchase_cart where pc_id='$pc_id'");
     $r=mysqli_fetch_array($query2);
     $datt=$r['rdate'];
     $fbill=$r['final_bill'];
         
     
     ?>
<tr> 
<td><?php echo $datt; ?></td>
<td>
  <a href="<?php echo $fbill; ?>" style="color:red;"> Download <i class="fa fa-arrow-down"></i></a>
  </td>


</tr>


</table>
</form>
<a href="deliverd_products.php" class="button" style="margin-left:880px;">View More <i class="fa fa-arrow-right"></i></a>



</div>
    
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
