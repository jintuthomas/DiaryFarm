<?php
 include "dbconnect.php";
if(isset($_POST['submit']))
{
$d=$_POST['des'];
$b=$_POST['lid'];


$sq1="update registration_staff set work='$d' where loginid='$b'";
if(mysqli_query($db,$sq1))
{
echo '<script language="javascript">';
    echo 'alert("SUCCESSFULLY UPDATED")';
    echo '</script>';
    echo "<script>window.location.href='view_staff.php'</script>";
}
else
{
    echo '<script language="javascript">';
        echo 'alert("ERROR")';
        echo '</script>';
        echo "<script>window.location.href='desig.php'</script>";
    }

}
?>