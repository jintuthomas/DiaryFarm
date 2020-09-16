<?php
//session_start();
//$s=$_SESSION['session'];

 include "dbconnect.php";
 $b=$_GET['id']; 
 $da= date("Y-m-d");
 
 if(isset($b))
  {
    $sq=mysqli_query($db,"SELECT * FROM `admin_bank`");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $bal=$r['balance'];
    $lid=$r['loginid'];

    $sq=mysqli_query($db,"SELECT * FROM `registration_staff` where status=6 && staff_regid='$b'");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $sa=$r['salary'];

    $sq=mysqli_query($db,"SELECT * FROM `registration_staff` where staff_regid='$b'");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $sid=$r['staff_regid'];
    $n1=$r['name1'];
    $n2=$r['name2'];


    $sq=mysqli_query($db,"SELECT count FROM attent_report where staff_regid='$sid' && ch=0");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    //$sa=$r['salary'];
    $c=$r['count'];


    /*if($c>4)
    
        $s=$sa-50;
        $final=$bal-$s;
    
    else*/
    if($c>0)
    { 
    if($bal<=0)
    {
        echo '<script language="javascript">';
        echo 'alert("We have no sufficiant balance ")';
        echo '</script>';
        echo "<script>window.location.href='pay_staff.php'</script>";
    }
    elseif($sa<=100)
    {
        echo '<script language="javascript">';
    echo 'alert("Error: Some errors occured in this payment, Staff has no salary because of their absence")';
    echo '</script>';
    echo "<script>window.location.href='pay_staff.php'</script>";
    }
    else
    {
    $m=0;
    if($c>26 && $c<=30)
    {
        $final=$bal-$sa;
        $f=$sa;
    }
    elseif($c<=26 && $c>=1)
    {
        for($i=26;$i<=$c;$i++)
        {
            $m=$m+100;
        }
        
        
        $f=$sa-$m;
        
        



         $final=$bal-$f;
    }
    
    $sq = "UPDATE admin_bank SET balance='$final' WHERE loginid= '$lid'";
    $d = "UPDATE attent_report SET ch=1 WHERE staff_regid= '$sid'";
    $sq1="INSERT INTO `acct`(`loginid`, `n1`, `n2`,`blc`) VALUES ('$b','$n1','$n2','$f')";
    $res=mysqli_query($db,$sq);
    $r=mysqli_query($db,$d);
    $re=mysqli_query($db,$sq1);
    if($re)
    {
    echo '<script language="javascript">';
    echo 'alert("Payment successfully")';
    echo '</script>';
    echo "<script>window.location.href='pay_staff.php'</script>";
    }
    }
}
    else
    {
    echo '<script language="javascript">';
        echo 'alert("Error: Some errors occured in this payment")';
        echo '</script>';
        echo "<script>window.location.href='pay_staff.php'</script>";
    }
  }
    ?>