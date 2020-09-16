<?php
include "dbconnect.php";

  $id = $_GET['id'];
 
 if(isset($id))
  {
  
  // Check record exists
  $query = "SELECT * FROM `cust_reg` WHERE loginid='$id'";
   $result = mysqli_query($db,$query);

  if ($result->num_rows > 0)
  {
     // Delete record
    $del = "UPDATE cust_reg SET status=4 WHERE loginid= '$id'";
    $d = "UPDATE login SET status=4 WHERE loginid= '$id'";
    $res=mysqli_query($db,$del);
    $r=mysqli_query($db,$d);
    if($r)
    {
     
        echo $id;
        echo '<script type="text/javascript">';
        echo 'alert("Approved")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = '/project/view_customer.php';\",200);</script>";
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



