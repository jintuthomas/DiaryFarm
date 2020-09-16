<?php

// eee codilanu payment gatewayde motham sambavom
include "dbconnect.php";
 session_start();
$id=$_SESSION['loginid'];
/*$b=$id;*/
//require_once($_SERVER['DOCUMENT_ROOT']."/project/cust_page/TCPDF-master/tcpdf_import.php");

require_once($_SERVER['DOCUMENT_ROOT']."/project/RazorpayKit/razorpay-php/config.php");// ee config fiiliu ningalude secret keyum api keeyum set cheyyuka


include($_SERVER['DOCUMENT_ROOT']."/project/RazorpayKit/razorpay-php/Razorpay.php");//ivide path set cheyyuka

$paymentid=$_POST['razorpay_payment_id'];//ithum ajax vazhi varunnatanu

use Razorpay\Api\Api;
$api = new Api('rzp_test_xwbl8VQtNkWXiu', 'LOC3ndA6eNJBouD13RkWB4AV'); //enter your test key credentials here
$payment = $api->payment->fetch($paymentid); //post variable in index.php checkout.js
$text =  json_encode($payment->toArray());
$contact_number =  $payment->contact;
$contact_email  = $payment->email;
$currency       = $payment->currency;
$total    = $_POST["total"];
$logid            = $_POST["lid"];
$name1            = $_POST["name1"];
$name2            = $_POST["name2"];
$sid           = $_POST["sid"];
$st            = $_POST["st"];
$payment_method = $payment->method;
$razor_payment_id = $payment->id;
$created_date     = date('Y-m-d',$payment->created_at);

  $i=1;
  $id = $i;


  //enter your database code here


  if($razor_payment_id)
  {
    
 
    $s=mysqli_query($con,"select * from admin_bank");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $b=$r['balance'];
    $lid=$r['loginid'];
   
    
  
    if($b<=0)
    {
     
      echo "No sufficiant balance in your account ";
     
    }
    else
    {
    $f=$b-$total;
    $del = "UPDATE admin_bank SET balance='$f' WHERE loginid= '$lid'";
    $sq="INSERT INTO `acct`(`loginid`, `n1`, `n2`,`blc`) VALUES ('$logid','$name1','$name2','$total')";
    $d = "UPDATE supp_milk SET status=1 WHERE supp_id='$sid'";
  
    $r=mysqli_query($db,$del);
    $re=mysqli_query($db,$sq);
    $res=mysqli_query($db,$d);
      if($res)
      {
       
          echo "Payment successfully" ;
         
      }
       
    }
  

}
  else
  {
    echo "Error";
  }



?>