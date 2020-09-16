<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['fname'];
$usr_lname=$_SESSION['lname'];
$id=$_SESSION['loginid'];
include "dbconnect.php";
if($login)
{
	?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Supplier Home</title>
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
  padding: -50px 20px;
  text-align: center;
  background-color: #0047b3;
  color: white;
}

/* table*/



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
            <h3><?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></h3>
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
              <a href="milk_list.php"><span class="fa fa-download mr-3 notif"></span>Selled Milk Report</a>
          </li>
          <li>
              <a href="products.php"><span class="fa fa-gift mr-3 notif"></span>Products</a>
          </li>
         
          <li>
            <a href="feedback.php"><span class="fa fa-edit">&nbsp;&nbsp;&nbsp;</span>Feedback to Admin</a>
          </li>
          <li>
            <a href="transaction.php"><span class="fa fa-support mr-3"></span> Cash Transaction</a>
          </li>         
          
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Welcome to Your Page!..</h2>
      
        
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
      <!--<p style="font-size:30px;">Profile<i class="fa fa-user"></i></p>-->
      <?php
          include "dbconnect.php";
           $sel="SELECT * FROM `supplier_reg` where loginid='$id'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
             
            
    ?>
   <form action="" Method="POST" enctype="multipart/form-data">
  <br>
  <a href="profile.php" style="color:white;"><h5>Profile</h5>
      <p style="font-size:20px;"><img src="/project/registration/<?php echo $row['photo']; ?>" height=100 width=100 style="border-radius: 50%;"><br>
      <i class="fa fa-user"></i> <?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></p>
      
      <p>
      From : <?php echo $row['address']; ?><br>
      <?php echo $row['address2']; ?><br>
      Contact Info :<?php  echo $row['contact']; ?><br>
                  &nbsp;&nbsp;&nbsp; <?php  echo $row['email']; ?></p>
           </form>
           <?php } ?></a>
    </div>
  </div>

</div>

<div style= "border: 30px solid #1a8cff; margin-left:300px; margin-top:-670px; height:auto;">

<?php
$query1=mysqli_query($con,"SELECT supp_id from supplier_reg where loginid=$id ");
$r=mysqli_fetch_array($query1);
$supp_id=$r['supp_id'];
    $query3=mysqli_query($con,"SELECT sum(total) from supp_milk where supp_id='$supp_id' and status=0");
     $r=mysqli_fetch_array($query3);
     $to=$r['sum(total)'];
?>
     <H5 style="float:right;">Grand Total On Current Month :&nbsp; <label style="color:red;"><i class="fa fa-rupee"></i> <?php echo $to; ?></label></H5>
<h4>Recent Milk Selled Info</h4>
<table width="100%" class="table table-striped" >
    <tr>
  <th>DATE & TIME</th>
  <th>RATE</TH>
	<th>TOTAL</th>
	
    
  </tr>
  <?php
     
           
     
     $sel="SELECT * FROM `supp_milk` where supp_id='$supp_id' ORDER BY smilkid DESC LIMIT 2; ";
     $res=mysqli_query($con,$sel);
     while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
     {
         
     
     ?>
<tr> 
<td><?php echo $row['date1']; echo " "; echo $row['session'];?></td>
<td><?php echo $row['rate'];?></td>
<td><?php echo $row['total']; ?></td>

</tr>
<?php
}
?>

</table>
<a href="milk_list.php" class="button" style="margin-left:880px;">View More <i class="fa fa-arrow-right"></i></a>
  
</div><br>

<div style= "border: 30px solid #1a8cff; margin-left:300px;" >


     <form action="" method="POST" enctype="multipart/form-data">
     <h4>Latest Product Received Bill</h4>

<table width="100%" class="table table-striped" >
    <tr>
  <th>DATE & TIME</th>
	<th>BILL</th>
	
    
  </tr>
  <?php
     
           
     $query1=mysqli_query($con,"SELECT max(pc_id) as pc_id from purchase_cart where status=3");
     $r=mysqli_fetch_array($query1);
     $pc_id=$r['pc_id'];
     $query2=mysqli_query($con,"SELECT * from purchase_cart where pc_id='$pc_id' and loginid='$id'");
     $r=mysqli_fetch_array($query2);
     $dat=$r['rdate'];
     $bill=$r['final_bill'];
         
     
     ?>
<tr> 
<td><?php echo $dat; ?></td>
<td>
  <a href="<?php echo $bill; ?>" style="color:red;"> Download <i class="fa fa-arrow-down"></i></a>
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