<?php
 include "dbconnect.php";
$b=$_GET['id'];
//echo $b;
$sq1="update purchase_cart set status=1 where pc_id='$b'";
$sq="update purchase_cart set flow='Product Travelling' where pc_id='$b'";
$res=mysqli_query($db,$sq1);
if(mysqli_query($db,$sq))
{
echo '<script language="javascript">';
    echo 'alert("Order Accepted")';
    echo '</script>';
    echo "<script>window.location.href='order_req.php'</script>";
}

?>