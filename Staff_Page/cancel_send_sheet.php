<?php
include "dbconnect.php";
$q="UPDATE registration_staff SET share=0";
$ch=mysqli_query($con,$q);
if($ch)
{
    echo " <script>
    alert('Cancel Request');
    window.location='attendance.php'
    </script> ";
     

}
else{
    echo " <script>
    alert(' Cancel Failed ');
    window.location='attendance.php'
    </script> ";
     
}



?>