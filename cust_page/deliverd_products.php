
<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['cust_name'];
//$usr_lname=$_SESSION['lname'];
$id=$_SESSION['loginid'];
$usr_id=$_SESSION['cust_id'];
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


h1{
  font-size: 35px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  margin-left:320px;
  margin-bottom: 15px;
}
table{
  width:50%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 18px;
  color: green;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 15px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


.button {
    background-color: green;
  border: none;
  color: white;
  padding: 4px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 18px;
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
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
            <a href="products.php"><span class="fa fa-gift mr-3"></span>Products</a>
          </li>
         
          <li>
            <a href="cart.php"><span class="icon-shopping-cart"> &nbsp; &nbsp;</span>Cart</a>
          </li>
         
          <li>
            <a href="purchased_products.php"><span class="fa fa-product-hunt"> &nbsp; &nbsp;</span>Order List</a>
          </li>   
          <li>
            <a href="deliverd_products.php"><span class="fa fa-check"> &nbsp; &nbsp;</span>Deliverd List</a>
          </li>       
         
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
       
        <form action=""  method="POST" enctype="multipart/form-data">
        <section>
  <!--for demo wrap-->
  <h1 style="margin-left:330px;">Deliverd Products List</h1><br>
  <div>
    <table cellpadding="0" cellspacing="0" border="0" align="center">
      <thead>
    
        <tr>
      
                                    <th>PRODUCT NAME</th>
                                    <th>BILL</th>                          
            
        </tr>
      </thead>
    </table>
  
    <table cellpadding="0" cellspacing="0" border="0" align="center">
      <tbody>
      <?php
      include "dbconnect.php";
           
      
  $sel="SELECT * FROM `purchase_cart` WHERE loginid='$id' and status=3";
  $res=mysqli_query($con,$sel);
  while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
  {
      
  
  ?>
  <tr>
   
  <td style="font-size:20px;">
  <?php
  echo $row['ptname'];
  ?>
  </td>
  
  <td>
  <?php $i=$row['final_bill']; ?>
  <a href="<?php echo $i; ?>" class="button"> Download</a>
  </td>
  </tr>
  <?php
  }
  ?>         
                </tbody>
              </table>
  </div>
</section>
</form>



<script>


// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
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
}
else
header("location:/project/home.php");
?>