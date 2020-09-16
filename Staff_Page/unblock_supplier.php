<?php
 include "dbconnect.php";
$b=$_GET['id'];
echo $b;
$sq="update supplier_reg set status=0 where loginid='$b'";
$s="update supplier_reg set verify='Unblocked' where loginid='$b'";
$sql="update login set status=0 where loginid='$b'";
mysqli_query($db,$sq);
mysqli_query($db,$s);
if(mysqli_query($db,$sql))
{
echo '<script language="javascript">';
    echo 'alert("Unblock Successfully")';
    echo '</script>';
    echo "<script>window.location.href='supplier_action.php'</script>";
}

?>

<html>
<body>
    <script>
    
    </script>
    </body>
</html>
