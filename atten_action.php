<?php
//session_start();
//$s=$_SESSION['session'];

 include "dbconnect.php";
 $b=$_GET['id']; 
 $da= date("Y-m-d");
 
 if(isset($b))
  {
    
    $sq=mysqli_query($db,"SELECT * FROM `registration_staff` where staff_regid='$b' ");
    $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $sid=$r['staff_regid'];
    $f=$r['name1'];
    $l=$r['name2'];
    $w=$r['work'];
    $s=$r['work_time'];

    $sq=mysqli_query($db,"SELECT * FROM `attent_report` where staff_regid='$b' ");
    $r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $ch=$r['ch'];

    if($ch>0)
    {
        $sq = "UPDATE attent_report SET count=1, ch=0 WHERE staff_regid= '$b'";
        if(mysqli_query($db,$sq))
    {
        echo '<script language="javascript">';
        echo 'alert("Attendance Marked successfully")';
        echo '</script>';
        echo "<script>window.location.href='attend_reg.php'</script>";
    }
    }
    else{
    

    $sq2="select * from attent_report where staff_regid='$sid'";
    $result=mysqli_query($conn,$sq2);
    $rowcount=mysqli_num_rows($result);
	
if($rowcount==0)
{
   
  
    $d="INSERT INTO `attent_report`(`staff_regid`,`name1`, `name2`, `work`,`session`, `date`,`status`,`count`) 
    VALUES('$b','$f','$l','$w','$s','$da','Present',1)";
   // $sq="update atten sett status=2 where loginid='$b'";
if(mysqli_query($db,$d))
{
echo '<script language="javascript">';
    echo 'alert("Information sent Successfully")';
    echo '</script>';
    echo "<script>window.location.href='attend_reg.php'</script>";
}
}
else
{
    
    

    $sq = "UPDATE attent_report SET count=count+1,status='Present',date='$da' WHERE staff_regid= '$b'";
    if(mysqli_query($db,$sq))
{
    echo '<script language="javascript">';
    echo 'alert("Attendance Marked successfully......")';
    echo '</script>';
    echo "<script>window.location.href='attend_reg.php'</script>";
}
  }
}
}
  ?>


