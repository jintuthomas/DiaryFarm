<?php 
$db=mysqli_connect("localhost","root","","dairy")or die("unable to connect");
  $id = $_GET['id'];
 
 if(isset($id))
  {
  
  // Check record exists
  $query = "SELECT * FROM `attendance` WHERE aid='$id'";
   $result = mysqli_query($db,$query);
   if($row1=mysqli_fetch_array($result)){
    $aid=$row1['aid'];
    $_SESSION['aid']=$aid;
    $date=$row1['date'];
    $_SESSION['date']=$date;
    $staff_id=$row1['staff_id'];


    $query1 = "SELECT loginid FROM `staff_reg` where staff_id=$staff_id";
   $result1 = mysqli_query($db,$query1);
   if($row2=mysqli_fetch_array($result1)){
    $lid=$row2['loginid'];
    $_SESSION['loginid']=$lid;
    

  if ($result->num_rows > 0)
  {
     // Delete record


     /*$sql1="select * from attendance where loginid ='$id'";
				$result1=mysqli_query($conn,$sql1);*/
				
    /* $s=mysqli_query($db,"select  aid, date from attendance");
     $r=mysqli_fetch_array($s,MYSQLI_ASSOC);*/
     $lid=$lid;
     $aid1=$aid;
     $date1=$date;
     
   
     $sq="INSERT INTO `atten_mg`(`loginid`, `aid`, `date`, `warning`) VALUES ('$lid','$aid1','$date1','Attendance is Not Approved on the date : ')";
     if(mysqli_query($db,$sq))
     {
       $s=mysqli_query($db,"select atid from atten_mg");
       $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
       /*$lid=$r['atid'];*/
    
    $del = "DELETE FROM `attendance` WHERE aid='$id'";
    $res=mysqli_query($db,$del);
    if($res)
    {
    
        echo '<script type="text/javascript">';
        echo 'alert("User Rejected")';
        echo '</script>';
       echo "<script>setTimeout(\"location.href = '/project/atten_aprove.php';\",200);</script>";
    
    }
   
     }
    }
  }
}
  }
// echo 0;
// exit;
?>