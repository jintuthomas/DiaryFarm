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
<link rel="stylesheet" type="text/css" href="css/rate.css">

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
<script>

function fvalidate(r)
{
 
  
  
  var fat=document.getElementById("fat").value;
  var snf=document.getElementById("snf").value;
  var price=document.getElementById("price").value;
 

	
    
    if(fat == "")
    {
     alert("Enter fat!");
    document.getElementById("fat").focus();
    return false;
    }
    
    else if(fat<=0)
    {
      alert("Error: Incorrect value");
      document.getElementById("fat").focus();
      return false;
    }
	
	 if(snf == "")
     {
     alert("Enter SNF");
    document.getElementById("snf").focus();
    return false;
    }

    else if(snf<=0)
    {
      alert("Error: Incorrect value");
      document.getElementById("snf").focus();
      return false;
    }

    
	if(price == "")
     {
     alert("Enter Price");
    document.getElementById("price").focus();
    return false;
    }
    else if(isNaN(price))
    {
      alert("Error: Incorrect value");
      document.getElementById("price").focus();
      return false;
    }
    else if(price<=0)
    {
      alert("Error: Incorrect value");
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
                
            </div>
        </nav>
  <br><br><br><br>

</div>


<div class="login-page" style="margin-left:750px;">

  <div class="form" >


<form action="" method="POST" name="rate" class="login-form"  onsubmit=" fvalidate()" autocomplete="off">


     <h2>Update Rate</h2><br><br>
     <br><br>
    <div>
    <?php
include "dbconnect.php";
$q="select * from designation";
 $sql=mysqli_query($con,$q);
 ?>
                   Designation :  &nbsp;&nbsp;<select id="post" name="post" placeholder="select Designation" >
                                          <option value="">select Designation</option>
                                      <?php
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['post']?>"><?php echo $fetch['post']?>
                                          <?php
                                    }
                                       ?>
                                        </select>
						
                    </div><br>
                    

    <input type="text" name="price" id="price" min="0.0" placeholder="Adding Salary After 5 years"/>
      <button name="submit" onclick="return fvalidate(this)">SUBMIT</button>
      
    </form>
  </div>
</div>



          
<!-- CATE LIST    -->
<form action="" method="GET" name="listForm">
    
</form>  
          
<!-- DETAIL FORM -->
<form action="" method="POST" enctype="multipart/form-data">
    
</form> 
          

</div>


<script src="js/ad.js"></script>
</body>
</html>


	
<?php
include "dbconnect.php";

if(isset($_POST['submit']))
{
$post=$_POST['post'];
$sal=$_POST['price'];


$q1="INSERT INTO `salary_chart`(`desig`, `salary`) VALUES('$post','$sal')";
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Salary Chart Created Successfully');
 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
 
}
mysqli_close($con);
?>
	





<?php
}
else
header("location:home.php");
?>
