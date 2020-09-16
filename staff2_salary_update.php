<?php
 include "dbconnect.php";
if(isset($_POST['submit']))
{
$s=$_POST['salary'];
$b=$_POST['lid'];


$sq1="update registration_staff set salary='$s' where staff_regid='$b'";
if(mysqli_query($db,$sq1))
{
echo '<script language="javascript">';
    echo 'alert("SUCCESS")';
    echo '</script>';
    echo "<script>window.location.href='view_staff.php'</script>";
}
else
{
    echo '<script language="javascript">';
        echo 'alert("ERROR")';
        echo '</script>';
        echo "<script>window.location.href='salary_scale.php'</script>";
    }

}
?>