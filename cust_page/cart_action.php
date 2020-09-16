
<?php
session_start();
$login=$_SESSION['login'];
$id=$_SESSION['loginid'];
if($login)
{

include "dbconnect.php";

$b=$_GET['id'];

if(isset($b))
{
//$num=$_POST['quantity'];
$s=mysqli_query($con,"select * from product where pid='$b'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
$pid=$r['pid'];
$pname= $r['ptname'];
$price= $r['price'];
$qty= $r['qty'];
$mt= $r['mt'];
$pic=$r['picture'];

$s=mysqli_query($con,"select loginid from cust_reg where loginid='$id'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $lid=$r['loginid'];

$q1="INSERT INTO `cart`(`pid`, `loginid`,`ptname`, `picture`, `price`, `qty`, `mt`) 
VALUES ('$pid','$lid','$pname','$pic','$price','$qty','$mt')";
	
	
	$ch=mysqli_query($con,$q1);
	if($ch)
	{ 
  echo " <script>
 alert('Product Successfully Enterd into Cart');
 window.location='cart.php'

 </script> ";
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }
}
}
?>