<?php
 include "C:\C\htdocs\project\dbconnect.php";
$b=$_GET['id'];
echo $b;
$sql="UPDATE `staff_reg` SET `pic` = 'pic/icon.png' where loginid='$b'";
if(mysqli_query($db,$sql))
{
echo '<script language="javascript">';
    echo 'alert("Successfully Changed Your Profile Picture")';
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
