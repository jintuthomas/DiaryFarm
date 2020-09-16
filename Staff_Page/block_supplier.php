<?php
include "dbconnect.php";
$b=$_GET['id'];
echo $b;
$sq="update supplier_reg set status=3 where loginid='$b'";
$s="update supplier_reg set verify='Blocked' where loginid='$b'";
$sql="update login set status=3 where loginid='$b'";
mysqli_query($db,$sq);
mysqli_query($db,$s);
if(mysqli_query($db,$sql))
{
echo '<script language="javascript">';
    
    echo 'alert("Removed Successfully")';
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
