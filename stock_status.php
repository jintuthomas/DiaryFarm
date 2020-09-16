
<?php
include "dbconnect.php";
  
    $q="UPDATE product SET exp_veri=1 where exp_date <= CURRENT_DATE";
    $re=mysqli_query($db,$q);
    if($re)
    {
        echo "success";
    }
    else{
        echo "fail";
    }






  ?>