<?php
//session_start();
//$s=$_SESSION['session'];

 include "dbconnect.php";
 $b=$_GET['id']; 
 $da= date("Y-m-d");
 
 if(isset($b))
  {

    

    $s=mysqli_query($db,"select * from staff_reg where loginid='$b'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $sid=$r['staff_id'];
    $name1=$r['firstname'];
    $name2=$r['lastname'];

    $s=mysqli_query($db,"select ch from attendance where staff_id='$sid'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $st=$r['ch'];


    $sq=mysqli_query($db,"SELECT * FROM `admin_bank`");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $bal=$r['balance'];
    $lid=$r['loginid'];

    $sq=mysqli_query($db,"SELECT * FROM `staff_reg` where status=2 && loginid='$b'");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    $sa=$r['salary'];

$sq=mysqli_query($db,"SELECT count(staff_id) FROM attendance WHERE staff_id='$sid' && ch=0");
	$r=(mysqli_fetch_array($sq,MYSQLI_ASSOC));
    //$sa=$r['salary'];

    $c=$r['count(staff_id)'];

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
    
    if($c<=4)
    {
        $final=$bal-$sa;
        $f=$sa;
       
    }
    
    else{
        for($i=5;$i<=$c;$i++)
        {
            $m=$m+100;
        }
         $f=$sa-$m;
         
         $final=$bal-$f;
    }
    

    




    $sq = "UPDATE admin_bank SET balance='$final' WHERE loginid= '$lid'";
    $d = "UPDATE attendance SET ch=1 WHERE staff_id= '$sid'";
    /*$de = "UPDATE staff_reg SET ch=1 WHERE loginid= '$b'";*/
    $sq1="INSERT INTO `acct`(`loginid`, `n1`, `n2`,`blc`) VALUES ('$b','$name1','$name2','$f')";


    $res=mysqli_query($db,$sq);
    $r=mysqli_query($db,$d);
    //$resu=mysqli_query($db,$de);
    $re=mysqli_query($db,$sq1);

    if($re)
    {
       // echo $c;
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