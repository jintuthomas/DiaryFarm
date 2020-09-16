<?php
 $db = mysqli_connect('localhost', 'root', '', 'dairy');
$b=$_GET['id'];
echo $b;
$sq="update staff_reg set status=3 where loginid='$b'";
$sql="update login set status=3 where loginid='$b'";
mysqli_query($db,$sq);
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
