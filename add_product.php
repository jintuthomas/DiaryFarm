<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
	?>
<html>
<head>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.css.map.css">
<link rel="stylesheet" href="css/style.scss">

<link rel="stylesheet" type="text/css" href="css/ad.css">



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
</style>


<meta charset="UTF-8">
    
    <!-- Icons font CSS-->
    <link href="/project/add_product/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/project/add_product/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/project/add_product/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/project/add_product/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/project/add_product/css/main.css" rel="stylesheet" media="all">
    <script>

function svalidate(s)
{
 
  
  
  var pname=document.getElementById("pname").value;
  var date=document.getElementById("date").value;
  var num=document.getElementById("num").value;
  var qty=document.getElementById("qty").value;
  var mt=document.getElementById("mt").value;
  var cat=document.getElementById("cat").value;
  var subcat=document.getElementById("subcat").value;
  var file=document.getElementById("file").value;
  var price=document.getElementById("price").value;
 

	
    
    if(pname == "")
    {
     alert("Enter Product Name!");
    document.getElementById("pname").focus();
    return false;
    }
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.pname.value)) 
	  {
      alert("Error: Please enter valid Product name!");
      myform.pname.focus();
    return false;
     
}


	
	 if(date == "")
     {
     alert("Enter the expiry date of product");
    document.getElementById("date").focus();
    return false;
    }
    
	 if(num == "")
     {
     alert("Enter the count");
    document.getElementById("num").focus();
    return false;
    }
     
    else if(num<=0)
    {
      alert("Error:Incorrect Value");
      document.getElementById("num").focus();
      return false;
    }


    
	 if(qty == "")
     {
     alert("Enter the quantity of enterd product");
    document.getElementById("qty").focus();
    return false;
    }

    else if(qty<=0)
    {
      alert("Error:Incorrect Value");
      document.getElementById("qty").focus();
      return false;
    }
    if(mt == "")
     {
     alert("Enter the measurement of quantity");
    document.getElementById("qty1").focus();
    return false;
    }
    if(cat == "")
     {
     alert("Enter the category");
    document.getElementById("cat").focus();
    return false;
    }
    if(subcat == "")
     {
     alert("Enter the subcategory");
    document.getElementById("subcat").focus();
    return false;
    }
    if(file == "")
     {
     alert("Enter the Picture of product");
    document.getElementById("file").focus();
    return false;
    }

    
	if(price == "")
     {
     alert("Enter Price");
    document.getElementById("price").focus();
    return false;
    }
    else if(price<=0)
    {
      alert("Error:Incorrect Value");
      document.getElementById("price").focus();
      return false;
    }
    

}



</script>
</head>
<body class="bg">
<div class="container">
<!--     SIDE AREA -->
    <div class="sideArea">
        <div class="avatar">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="">
            <div class="avatarName">Welcome,<br>ADMIN</div>
        </div>
        <ul class="sideMenu" style="margin-left:20px;">
        <li><a href="admin.php">HOME</a></li>
        <li><a href="pay_form.php">BANK DETAILS</a></li>
		
            <li><a href="javascript:void(0)" class="has-submenu">MANAGE USERS</a>
                <ul class="submenu">
                    <li><a href="Staff_Page/staff_reg.php">Manager Registration</a></li>
                    <li><a href="staff_reg/registration_staff.php">Staff Registration</a></li>
                    <li><a href="atten_aprove.php">Leave Approval</a></li>
					<li><a href="view_staff.php">Staff List</a></li>
                    <li><a href="view_supplier.php"> Suppliers List</a></li>
                    <li><a href="attend_reg.php">Staff Attendance</a></li>
                    <li><a href="view_customer.php">Approve Customers</a></li>
                    <li><a href="salary_scale.php">Salary Scale Updation</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0)" class="has-submenu">MANAGE MILK</a>
                <ul class="submenu">
                    <li><a href="purchase_milk.php">View Purchase's Milk </a></li>
                    <li><a href="supper_milk.php">View Supplier's Milk </a></li>
                </ul>
            </li>
			
             <li><a href="javascript:void(0)" class="has-submenu">RATE</a>
                <ul class="submenu">
                   
                    <li><a href="rate_list.php">View Rate List </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu">PRODUCTS</a>
                <ul class="submenu">
                    <!--<li><a href="cat.php"><span class="fa fa-list"></span>ADD Category </a></li>-->
                    <li><a href="subcat.php">ADD SubCategory </a></li>
                    <li><a href="add_product.php">ADD Product </a></li>
                    <li><a href="order_req.php">View Order Request </a></li>
                    <li><a href="view_products.php">Stock Update </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="has-submenu">PAYMENT</a>
                <ul class="submenu">
                    <li><a href="pay_staff.php">Staff_Payment</a></li>
                    <li><a href="pay_supplier.php">Supplier_Payment</a></li>
                    
                </ul>
            </li>
            
            <li><a href="javascript:void(0)" class="has-submenu">FEEDBACK</a>
            <ul class="submenu">
                    <li><a href="view_feedback.php">View Feedback</a></li>
					
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
<div>    <form action="" method="POST" class="formSearch fl">
    </form>
          
        </div>
    
<form action="" method="POST">



   </form>
          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
   
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data" name="myform" autocomplete="off"><br><br><br>
<div>
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Add New Product</h2>
                   <br>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder=" Product Name" name="pname" id="pname">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input type="date" placeholder="Expiry Date" name="date" id="date">
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <input class="input--style-2" type="number" placeholder=" Count" name="num" id="num" min="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Quantity" name="qty" id="qty" min="1">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="qty1" id="mt">
                                    <option disabled="disabled" selected="selected">Measurments</option>
                                    <option value="ltr">ltr</option>
                                    <option value="ml">ml</option>
                                    <option value="g">g</option>
                                    <option value="kg">kg</option></select>
                                    <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                               
                                <select name="cat" id="cat">
                                <option disabled="disabled" selected="selected">Category</option>
                                      <?php
                                      include 'dbconnect.php';
                                      $q="select * from category";
                                      $sql=mysqli_query($con,$q);
                                      
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['pname']?>"><?php echo $fetch['pname']?>
                                          <?php
                                    }
                                       ?>
                                        </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                            <select name="subcat" id="subcat">
                                <option disabled="disabled" selected="selected">SubCategory</option>
                                      <?php
                                      include 'dbconnect.php';
                                      $q="select * from subcat";
                                      $sql=mysqli_query($con,$q);
                                      
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['sub_name']?>"><?php echo $fetch['sub_name']?>
                                          <?php
                                    }
                                       ?>
                                        </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="file" name="file" id="file">
                            
                        </div>
                       
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Price" id="price" name="price" min="1">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="submit" onclick="return svalidate(this)">ADD</button>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>

</form> 
          

</div>
<script src="/project/add_product/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/project/add_product/vendor/select2/select2.min.js"></script>
    <script src="/project/add_product/vendor/datepicker/moment.min.js"></script>
    <script src="/project/add_product/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/project/add_product/js/global.js"></script>

<script src="js/ad.js"></script>
</body>
</html>

<?php
}
else
header("location:view_staff.php");
?>



	
<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$pname=$_POST['pname'];
$date=$_POST['date'];
$num=$_POST['num'];
$qty=$_POST['qty'];
$qty1=$_POST['qty1'];
$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
$price=$_POST['price'];
$dir='add_product/';
    $target_file=$dir.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
    


$q1="INSERT INTO `product`(`ptname`, `exp_date`, `count`, `pname`, `sub_name`,`qty`,`mt`, `price`,`picture`) VALUES
    ('$pname','$date','$num','$cat','$subcat', '$qty','$qty1','$price','$target_file')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Add Product Successfully');
 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
 
}
mysqli_close($con);
?>
	