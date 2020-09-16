<?php
include "dbconnect.php";
$q="UPDATE registration_staff SET share=1";
$ch=mysqli_query($con,$q);
if($ch)
{
    echo " <script>
    alert('Successfully Shared to admin');
    window.location='attendance.php'
    </script> ";
     

}
else{
    echo " <script>
    alert('Failed to send');
    window.location='attendance.php'
    </script> ";
     
}



?>