<?php
session_start();
 include "dbconnect.php";
//$b=$_GET['id'];

//echo $b;
if(isset($_POST['submit']))
{
$cid=$_POST['cid'];
$pid=$_POST['pid'];
//$p=$pid;
$num=$_POST['quantity'];
//$_SESSION['pid']=$pid;

$sq=mysqli_query($db,"SELECT * FROM `product` where pid='$pid'");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $c=$r['count'];
    $p=$r['pid'];
  
if($c>=$num)
{
$sql="UPDATE cart SET num='$num' where cartid='$cid'";

if(mysqli_query($db,$sql))
{
/*echo '<script language="javascript">';
    echo 'alert("success")';
    echo '</script>';*/
    //echo "<script>window.location.href='check.php'</script>";

    $sel="SELECT * FROM `cart` where pid='$pid'";
           
    $res=mysqli_query($con,$sel);
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
    {
        $p=$row['pid'];
        $cid=$row['cartid'];
        $pn=$row['ptname'];
        $pp=$row['price'];
        $c=$row['num'];
        
    }
    $tot=$c*$pp;
    $sq="UPDATE cart SET tot='$tot' where cartid='$cid'";
   
if(mysqli_query($db,$sq))
{
/*echo '<script language="javascript">';
    echo 'alert("success")';
    echo '</script>';*/
}

}
else
 {
  echo"error:".$sql."<br>".mysqli_error($con);
   }
}
else
{
    
  $s="UPDATE product SET status='Product stock is low' where pid='$p'";
  if(mysqli_query($db,$s))
{
    echo '<script language="javascript">';
    echo 'alert(" Product stock is low")';
    echo '</script>';
    echo "<script>window.location.href='cart.php'</script>";
}
}
}
?>
<?php
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
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project/cust_page/RazorpayKit/razorpay-php/config.php");
?>
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
  cursor: pointer;
}


  </style>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="check/css/util.css">
	<link rel="stylesheet" type="text/css" href="check/css/main.css">
<!--===============================================================================================-->
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
            <a href="changepwd.php"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
         
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
        
   







        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Check Your Address</h2>
        
       

         
	<div style="margin-left:200px;">
		<div class="wrap-contact100">
            
        <?php
          include "dbconnect.php";
           $sel="SELECT * FROM `cust_reg` where loginid='$id'";
           
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
           {
            $lid=$row['loginid'] ;
            
    ?>
        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
                    <span class="label-input100">Personal Information</span><BR><BR>
                    <div style="margin-left:250px;">
                    <label>Name      :</label>&nbsp;<label><?php  echo $row["cust_name"]  ?></label><br>
                    <label>Address   :</label><br><label>
                        <?php  echo $row["address1"]; echo "<br>"; echo $row["address2"]; echo "<br>"; echo $row["address3"];  ?></label><br>
                    <label>E-mail    :</label>&nbsp;<label><?php  echo $row["email"]  ?></label><br>
                    <label>Phone No. :</label>&nbsp;<label><?php  echo $row["phone"]  ?></label><br>
                </div>
				</div>
				
                <?php  }?>
               
         <form id="checkout-selection" method="POST">
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate">
                    <span class="label-input100">Product Details</span><br><br>
                    <div style="margin-left:250px;">
                    <label>Product Name      :</label>&nbsp;<label><?php  echo $pn; ?></label><br>
                    <label>Price  :</label>&nbsp;<label><?php  echo $pp;  ?></label><br>
                    <label>No. of Items Purchased :</label>&nbsp;<label><?php  echo $c;  ?></label><br>
                    <label>Grand Total :</label>&nbsp;<label><?php  echo $tot;  ?></label><br>
                    <input type="hidden" name="cid" id="cid" value=" <?php  echo $cid;  ?>">
                    <input type="hidden" name="total" id="total" value=" <?php  echo $tot;  ?>">
                </div>
                </div>
          
              
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						<span>
							Pay Online
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
                   
				</div>
			</FORM>
      
      <!--<div class="container-contact100-form-btn">
      <a href="order_offline.php?id=<?php echo $cid;?>" class="contact100-form-btn" name="submit">
                    <span>
							Pay Offline
							<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
						</span>
                    </a>
                    </div>-->
                   
		</div>
	</div>



    
         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

<!--===============================================================================================-->
<script src="check/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="check/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="check/vendor/bootstrap/js/popper.js"></script>
	<script src="check/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="check/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="check/vendor/daterangepicker/moment.min.js"></script>
	<script src="check/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="check/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="check/vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
   
<script>
        $(document).ready(function(){

            $('form').submit(function (e){

                var cid = $("#cid").val();
                var totalAmount = $("#total").val();//total amount eduth oru variablililu vekkuka


        var options={
        "key": "rzp_test_xwbl8VQtNkWXiu",//ivide payment gatewayil ninnolla key kodukkuka
        "amount": totalAmount*100,//amount into 100 cheythale actual amount kanikku 
        "name": "Milky Store",//ithoke set cheyyuka a gatewayil kainikkanda reethilu
        "description": "our society payment",
        "currency":"INR",// ithelu thottekkallu
        "image": "/project/images/logo.v3.png",//icon mattan
        "handler": function (response)
        {
            $.ajax({
            url: '/project/cust_page/RazorpayKit/checkoutsuccess.php',//ivide nammade payment tablilinte code oke kedakkunna php file specify cheyyuka
            type: 'POST',
            data: {
                razorpay_payment_id:response.razorpay_payment_id ,//ith payment gateway thannne genarate cheytholum
                 totalAmount : totalAmount ,
                 cid : cid // baaki nammade variables
                
            }, 
            success: function (msg)
            {
               if(msg)
               {
              alert("Payment Success "+msg);
              window.location="purchased_products.php";
               }
               else
               {
              alert("Payment Error");
               }
            
            }
        });
      
    },
    "theme": {
        "color": "#4da6ff"//ith color set cheyyan
    }
    };



   var rzp1 = new Razorpay(options);
   rzp1.open();// e code payment gateway open cheyyum
   e.preventDefault();

            });

        });
    </script>





















    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>

<?php
 include "dbconnect.php";
if(isset($_POST['sub']))
{
   
$sql="UPDATE cart SET tot='$tot' where cartid='$cid'";

if(mysqli_query($db,$sql))
{
echo '<script language="javascript">';
    echo 'alert("success")';
    echo '</script>';
    //echo "<script>window.location.href='check.php'</script>";

}
else
 {
  echo"error:".$sql."<br>".mysqli_error($con);
   }

}
?>