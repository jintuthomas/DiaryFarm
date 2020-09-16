<?php 
session_start(); 


include("dbconnect.php");
if(isset($_POST['submit']))
{
    $user=$_POST['user'];
  $pass =$_POST['pass'];
  $pas=md5($pass);
  //echo $pas;
 // $pas=md5($pass);

$sql="select * from login where username='$user'";

//echo $sql;

$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount!=0)
{

  while($row=mysqli_fetch_array($result))
  {
    $dbu_name=$row['username']; 
    $dbu_pass=$row['password'];
    $dbu_type=$row['status'];
	$id=$row['loginid'];
  

        
    if($dbu_name==$user && $dbu_pass==$pas)
    {
		$_SESSION['username']=$dbu_name;
		$_SESSION['password']=$dbu_pass;
		$_SESSION['login']="1";
		$_SESSION['loginid']=$id;
		$id1=$_SESSION['loginid'];
		
		
     
      if($dbu_type==0)  
      {
               $_SESSION['type']="Supplier";
				$sql1="select * from supplier_reg where loginid ='$id'";
				
				$result1=mysqli_query($con,$sql1);
				if($row1=mysqli_fetch_array($result1)){
					$usr_name=$row1['fname'];
					$_SESSION['fname']=$usr_name;
					$usr_lname=$row1['lname'];
					$_SESSION['lname']=$usr_lname;
					$usr_id=$row1['purchase_id'];
					$_SESSION['purchase_id']=$user_id;
					
					
					header('Location:Supplier_Page\supplier_home.php');
				}
      }
      else if($dbu_type==1)
      {
        //$_SESSION['usertype']="Seller";
                $_SESSION['type']="Admin";
               	header('Location: admin.php');
      }
	   else if($dbu_type==3)
      {
        //$_SESSION['usertype']="Seller";
              echo" <script>
			  alert('You cannot not login to the account because account is blocked');
			   window.location='/project/home.php'
			  </script>";
			
			  
	  }
	  

	  else if($dbu_type==5)
      {
		
		$s=mysqli_query($con,"select veri from cust_reg where loginid='$id'");
		$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
		$v=$r['veri'];
	
        if($v==0)
         {
              echo" <script>
			  alert('Please Wait....Upload your idproof for verification...');
			   window.location='/project/cust_verification.php'
			  </script>";
		 }
		 else
		 {
			echo" <script>
			alert('Please Wait....Your verification is in processing...');
			 window.location='/project/home.php'
			</script>";
		 }
			
			  
	  }
	  
	  else if($dbu_type==4)
      {
        //$_SESSION['usertype']="Seller";
		$_SESSION['type']="Customer";
		$sql1="select * from cust_reg where loginid ='$id'";
				
		$result1=mysqli_query($con,$sql1);
		if($row1=mysqli_fetch_array($result1)){
			$usr_name=$row1['cust_name'];
			$_SESSION['cust_name']=$usr_name;
			$usr_id=$row1['cust_id'];
			$_SESSION['cust_id']=$usr_id;
		header('Location: cust_page/customer.php');
		}
			  
      }
      else if($dbu_type==2)
      {
          $_SESSION['type']="Staff";
				$sql1="select * from staff_reg where loginid ='$id'";
				$result1=mysqli_query($conn,$sql1);
				if($row1=mysqli_fetch_array($result1)){
					$usr_name=$row1['firstname'];
					$_SESSION['firstname']=$usr_name;
					$usr_lname=$row1['lastname'];
					$_SESSION['lastname']=$usr_lname;
					$sid=$row1['staff_id'];
					$_SESSION['staff_id']=$sid;
					
					
					/*$sql2 = "SELECT * FROM `atten_mg` WHERE atid='$id'";
					$result1=mysqli_query($conn,$sql2);
				   if($row1=mysqli_fetch_assoc($result1)){
					$atid=$row1['atid'];
					$_SESSION['atid']=$atid;  */
				   
					
					
                	header('Location: Staff_Page/staff_home.php');
					}
	
      }
    }
    
else
{
	mysqli_error($con);
	?>
<script>
 alert("Invalid login credentials");
 window.location='home.php'
</script>;
  
 <?php
				//header("location:signin.php?error=wrong password");
          //echo "wrong";
        }
	}
}
else
{?>
	<script>
 alert("User not found");
 window.location='home.php'
</script>;
<?php
			//header("location:signin.php?error=User Not Found");
			//echo "not found";	
}
}
?>