<?php
include "dbconnect.php";
$b=$_GET['id'];
echo $b;
$sq="update staff_reg set status=3 where loginid='$b'";
$d = "UPDATE staff_reg SET verify='staff blocked' WHERE loginid= '$b'";
$sql="update login set status=3 where loginid='$b'";
mysqli_query($db,$sq);
mysqli_query($db,$d);
if(mysqli_query($db,$sql))
{
echo '<script language="javascript">';
    echo 'alert("Removed Successfully")';
    echo '</script>';
    echo "<script>window.location.href='view_staff.php'</script>";
}

?>

<html>
<body>
    <script>
    
    </script>
    </body>
</html>
