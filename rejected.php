<?php
include "dbconnect.php";
  $id = $_GET['id'];
 
 if(isset($id))
  {
  
  // Check record exists
  $query = "SELECT * FROM `attendance` WHERE aid='$id'";
   $result = mysqli_query($db,$query);

  if ($result->num_rows > 0)
  {
     // Delete record
    $del = "UPDATE attendance SET status=5 WHERE aid= '$id'";
    $d = "UPDATE attendance SET verify='Leave Not Approved' WHERE aid= '$id'";
    $res=mysqli_query($db,$del);
    $r=mysqli_query($db,$d);
    if($r)
    {
     
        echo $id;
        echo '<script type="text/javascript">';
        echo 'alert("Leave Disapproved")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = '/project/atten_aprove.php';\",200);</script>";
      }
     
           
    }
   
     }

// echo 0;
// exit;
?>
<html>
<body>

</body>
</html>



