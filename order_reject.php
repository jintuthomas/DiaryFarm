<?php
 include "dbconnect.php";
$b=$_GET['id'];
//echo $b;
$sq1="update purchase_cart set status=2 where pc_id='$b'";
$sq="update purchase_cart set flow='Product order request is rejected ' where pc_id='$b'";
$res=mysqli_query($db,$sq1);
if(mysqli_query($db,$sq))
{
echo '<script language="javascript">';
    echo 'alert("Order Rejected")';
    echo '</script>';
    echo "<script>window.location.href='order_req.php'</script>";
}

?>