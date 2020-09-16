
<?php
session_start();
include "dbconnect.php";

if(isset($_POST['submit']))
{

$cid=$_POST['cid'];

$sel="SELECT * FROM `cart` where cartid='$cid'";
           
$res=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    $p=$row['pid'];
    $cid=$row['cartid'];
    $pn=$row['ptname'];
    $tot=$row['tot'];
    $lid=$row['loginid'];
    
    
}
 

$sql="INSERT INTO `purchase_cart`(`pid`, `cartid`, `loginid`, `ptname`,`tot`,`mode`,`pay_status`) VALUES 
('$p','$cid','$lid','$pn','$tot','Offline','Not Paid')";

if(mysqli_query($db,$sql))
{
 

  $s=mysqli_query($con,"select count from product where pid='$p'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $coun=$r['count'];

  $s=mysqli_query($con,"select num from cart where pid='$p'");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $cou=$r['num'];

  $count=$coun-$cou;
  $q="UPDATE product set count='$count' where pid='$p'";
  $que="UPDATE cart set st=1 where cartid='$cid'";

  $m=mysqli_query($db,$q);
    $n=mysqli_query($db,$que);
  
if($n)
{
  echo" <script>
  alert('Successfully Orderd Through Offline');
   window.location='cart.php'
  </script>";

 
  

}
else
 {
  echo"error:".$q."<br>".mysqli_error($con);
   }
}
else
 {
  echo"error:".$sql."<br>".mysqli_error($con);
   }

}
?>
