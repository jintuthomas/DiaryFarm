<?php
 include "dbconnect.php";
$b=$_GET['id'];
echo $b;
$sq1="update registration_staff set status=6 where staff_regid='$b'";
if(mysqli_query($db,$sq1))
{
echo '<script language="javascript">';
    echo 'alert("Unblock Successfully")';
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
