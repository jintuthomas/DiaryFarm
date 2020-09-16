<?php
include "dbconnect.php";
$q="TRUNCATE TABLE rate";
$ch=mysqli_query($con,$q);
	if($ch)
	{ 
 
      echo '<script language="javascript">';
      echo 'alert("Remove chart successfully")';
      echo '</script>';
      echo "<script>window.location.href='rate.php'</script>";
 
  
 }
 else
 {
  echo"error:".$ql."<br>".mysqli_error($con);
   }

?>