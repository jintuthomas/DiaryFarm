<?php
 include "dbconnect.php";
$b=$_GET['id'];
//echo $b;

$sql="delete from cart where cartid='$b'";

if(mysqli_query($db,$sql))
{
echo '<script language="javascript">';
    echo 'alert("Remove Product from Cart Successfully")';
    echo '</script>';
    echo "<script>window.location.href='cart.php'</script>";
}

?>

<html>
<body>
    <script>
    
    </script>
    </body>
</html>
