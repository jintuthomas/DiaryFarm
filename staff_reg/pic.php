<html>
    <body>
           <input type="submit" value="Submit Form" name="submit" id="submit" />
        
</body>
</html>
<?php
include "C:\C\htdocs\project\dbconnect.php";
if(isset($_POST['submit']))
{
    $var = 2;

    $p="INSERT INTO `profile_pic`(`pic`) VALUES('$var')";
    $ch=mysqli_query($con,$p);
	if($ch)
	{ 
        echo " <script>
 alert('Registered  Successfully');
 </script>";
    }
    else{
        echo " <script>
        alert('Error');
        
        </script>";
    }

}
?>