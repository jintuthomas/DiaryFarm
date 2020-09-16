<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
//$id=$_SESSION['loginid'];

if($login)
{
	?>
<html>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project/RazorpayKit/razorpay-php/config.php");
?>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.css.map.css">
<link rel="stylesheet" href="css/style.scss">

<link rel="stylesheet" type="text/css" href="css/ad.css">

<meta charset="utf-8" />
   
    <link rel="stylesheet" type="text/css" href="/payment/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/payment/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="/payment/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/payment/bootstrap/js/bootstrap.min.js"></script>

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

th {
  background-color: #4CAF50;
  color: white;
}

.button {
  background-color:  #ff9800;
  border: none;
  color: white;
  padding: 10px 100px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 30px;
}


.label {
  color: white;
  padding: 8px;
  font-family: Arial;
}
.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */ 
.other {background-color: #e7e7e7; color: black;} /* Gray */ 
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
        <li><a href="admin.php"><span class="fa fa-sitemap"></span>HOME</a></li>
        <li><a href="pay_form.php"><span class="fa fa-sitemap"></span>BANK DETAILS</a></li>
		
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>MANAGE USERS</a>
                <ul class="submenu">
                    <li><a href="Staff_Page/staff_reg.php"><span class="fa fa-list"></span>Manager Registration</a></li>
                    <li><a href="staff_reg/registration_staff.php"><span class="fa fa-list"></span>Staff Registration</a></li>
                    <li><a href="atten_aprove.php"><span class="fa fa-tags"></span>Leave Approval</a></li>
					<li><a href="view_staff.php"><span class="fa fa-tags"></span>Staff List</a></li>
                    <li><a href="view_supplier.php"><span class="fa fa-tags"></span> Suppliers List</a></li>
                    <li><a href="attend_reg.php"><span class="fa fa-tags"></span> Staff Attendance</a></li>
                    <li><a href="view_customer.php"><span class="fa fa-tags"></span>Approve Customers</a></li>
                    <li><a href="salary_scale.php"><span class="fa fa-tags"></span>Salary Scale Updation</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>MANAGE MILK</a>
                <ul class="submenu">
                    <li><a href="purchase_milk.php"><span class="fa fa-list"></span>View Purchase's Milk </a></li>
                    <li><a href="supper_milk.php"><span class="fa fa-tags"></span>View Supplier's Milk </a></li>
                </ul>
            </li>
			
             <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>RATE</a>
                <ul class="submenu">
                    <li><a href="rate_list.php"><span class="fa fa-tags"></span>View Rate List </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>PRODUCTS</a>
                <ul class="submenu">
                    <!--<li><a href="cat.php"><span class="fa fa-list"></span>ADD Category </a></li>-->
                    <li><a href="subcat.php"><span class="fa fa-list"></span>ADD SubCategory </a></li>
                    <li><a href="add_product.php"><span class="fa fa-tags"></span>ADD Product </a></li>
                    <li><a href="order_req.php"><span class="fa fa-tags"></span>View Order Request </a></li>
                    <li><a href="view_products.php"><span class="fa fa-tags"></span>Stock Update </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>PAYMENT</a>
                <ul class="submenu">
                    <li><a href="pay_staff.php"><span class="fa fa-list"></span>Staff_Payment</a></li>
                    <li><a href="pay_supplier.php"><span class="fa fa-list"></span>Supplier_Payment</a></li>
                    
                </ul>
            </li>
            
            <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>FEEDBACK</a>
            <ul class="submenu">
                    <li><a href="view_feedback.php"><span class="fa fa-list"></span>View Feedback</a></li>
					
                </ul>
            
            </li>
            
			 
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
                <div class="name has-submenu">ADMIN<span class="fa fa-angle-down"></span>
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="" height="20" width="20" ></div>
                <ul class="accountLinks submenu">
				   <li><a href="changepass.php">Change Password<span class="fa fa-sign-out fr"></span></a></li>
                    
                    <li><a href="logout.php">Logout<span class="fa fa-sign-out fr"></span></a></li>
                </ul>
            </div>
        </nav>
        <!-- END NAV -->
        <!-- CONTAINER  -->
        <div class="mainContent">  
<!-- LIST FORM -->
<div>   
        </div>

    
          
<!-- CATE LIST    -->





<?php
include "dbconnect.php";

  $id = $_GET['id'];
 
 if(isset($id))
  {

    
    $s=mysqli_query($db,"select * from supplier_reg where loginid='$id'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $sid=$r['supp_id'];
    $name1=$r['fname'];
    $name2=$r['lname'];

    $s=mysqli_query($db,"select count(supp_id) from supp_milk where supp_id='$sid' && status=0");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $st=$r['count(supp_id)'];

    $sq= "SELECT sum(total) FROM supp_milk WHERE supp_id='$sid' && status=0 ";
    $re=mysqli_query($db,$sq);
    while($row=mysqli_fetch_array($re,MYSQLI_ASSOC))
      {

         $t=$row['sum(total)'];
      //echo $sid;
     
       
        
       
    
    ?>
  
 


<div class="container">


<!-- Credit Card Payment Form - START -->
<br><br>

<div class="container" style="padding-left:100px;">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                                                                                
                        <h3 class="text-center">Payment Way</h3>
                        
                        <img class="img-responsive cc-img" src="https://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <br><br><br><br><br>
              <div style="padding-left:800px;">
              <?php
              $s=mysqli_query($con,"select max(date) as date from acct where loginid='$id'");
               $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
                 $da=$r['date'];
                 ?>


              <label>Last Payment date :</label><label><?php echo $da; ?></label>
              </div>

              
               <br><br><br>
              
                <div style="padding-left:300px;">
                <label style="font-size:15px;">Supplier Name :</label> &nbsp;&nbsp;<label style="font-size:20px;"> <?php echo $name1; echo" "; echo $name2; ?></label><br><br><br>
                <label style="font-size:15px;">Amount to Pay :</label> &nbsp;&nbsp;<b><label style="font-size:30px; color:red;"> <?php echo $t; ?></label>
                 <BR><BR><BR><br>
                 <form method="POST" id="checkout-selection">
                 <input type="hidden" name="lid" id="lid" value="<?php echo $id; ?>">
                 <input type="hidden" name="name1" id="name1" value="<?php echo $name1; ?>">
                 <input type="hidden" name="name2" id="name2" value="<?php echo $name2; ?>">
                 <input type="hidden" name="total" id="total" value="<?php echo $t; ?>">
                 <input type="hidden" name="sid" id="sid" value="<?php echo $sid; ?>">
                 <input type="hidden" name="st" id="st" value="<?php echo $st; ?>">
                 <button  class="button" name="submit"  type="submit">Pay</submit>
                 </form>
                </div>
               
              
                     <?php
      }
    }

?>
</div><br><br><br>
                
                           
                        
                
                
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>         

</div>

<script src="js/ad.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $(document).ready(function(){

            $('form').submit(function (e){

                
                var lid = $("#lid").val();
                var name1 = $("#name1").val();
                var name2 = $("#name2").val();
                var total = $("#total").val();
                var sid = $("#sid").val();
                var st = $("#st").val();
                //total amount eduth oru variablililu vekkuka


        var options={
        "key": "rzp_test_xwbl8VQtNkWXiu",//ivide payment gatewayil ninnolla key kodukkuka
        "amount": total*100,//amount into 100 cheythale actual amount kanikku 
        "name": "Milky Store",//ithoke set cheyyuka a gatewayil kainikkanda reethilu
        "description": "our society payment to suppliers",
        "currency":"INR",// ithelu thottekkallu
        "image": "/project/images/logo.v3.png",//icon mattan
        "handler": function (response)
        {
            $.ajax({
            url: '/project/RazorpayKit/supp_pay.php',//ivide nammade payment tablilinte code oke kedakkunna php file specify cheyyuka
            type: 'POST',
            data: {
                razorpay_payment_id:response.razorpay_payment_id ,//ith payment gateway thannne genarate cheytholum
                 
                 lid : lid,
                 name1 : name1,
                 name2 : name2,
                 total : total,
                 sid : sid,
                 st : st // baaki nammade variables
                
            }, 
            success: function (msg)
            {
               if(msg)
               {
              alert(msg);
              window.location="pay_supplier.php";
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
header("location:home.php");
?>


