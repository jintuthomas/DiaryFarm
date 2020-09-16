<?php

// eee codilanu payment gatewayde motham sambavom

 include "dbconnect.php";
 session_start();
$id=$_SESSION['loginid'];
$b=$id;
require_once($_SERVER['DOCUMENT_ROOT']."/project/Supplier_Page/TCPDF-master/tcpdf_import.php");

require_once($_SERVER['DOCUMENT_ROOT']."/project/Supplier_Page/RazorpayKit/razorpay-php/config.php");// ee config fiiliu ningalude secret keyum api keeyum set cheyyuka


include($_SERVER['DOCUMENT_ROOT']."/project/Supplier_Page/RazorpayKit/razorpay-php/Razorpay.php");//ivide path set cheyyuka

$paymentid=$_POST['razorpay_payment_id'];//ithum ajax vazhi varunnatanu

use Razorpay\Api\Api;
$api = new Api('rzp_test_xwbl8VQtNkWXiu', 'LOC3ndA6eNJBouD13RkWB4AV'); //enter your test key credentials here
$payment = $api->payment->fetch($paymentid); //post variable in index.php checkout.js
$text =  json_encode($payment->toArray());
$contact_number =  $payment->contact;
$contact_email  = $payment->email;
$currency       = $payment->currency;
$totalAmount    = $_POST["totalAmount"];
$cid            = $_POST["cid"];
$payment_method = $payment->method;
$razor_payment_id = $payment->id;
$created_date     = date('Y-m-d',$payment->created_at);

  $i=1;
  $id = $i;


  //enter your database code here

  if($razor_payment_id)
  {
    


  
    $sel="SELECT * FROM `cart` where cartid='$cid'";
           
    $res=mysqli_query($con,$sel);
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
    {
        $p=$row['pid'];
        $cid=$row['cartid'];
        $pn=$row['ptname'];
        $qty=$row['qty'];
        $price=$row['price'];
        //$lid=$row['loginid'];
        
        
    }
    
    $s=mysqli_query($con,"select loginid from login where loginid='$b'");
      $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
      $lid=$r['loginid'];
    
    
     
       
        
  //invoice 
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  // set document information
  $pdf->SetCreator('');
  $pdf->SetAuthor('Milky Store');
  $pdf->SetTitle('Payment-Invoice');
  $pdf->SetSubject("User");
  $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
  
  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
  // set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  // set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  // set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
  // set font
  $pdf->SetFont('helvetica', '', 10);
  // add a page
  $pdf->AddPage();
  // set style for barcode
  $style = array(
    'border' => 2,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
  );


  $abc='<BR><BR><BR><table border="1" cellpadding="2" cellspacing="2" nobr="true">
  <tr>
   <th colspan="4" align="center">MILKY STORE PURCHASE BILL</th>
  </tr>
   <tr><td>Index</td><td>Product Name</td><td>Quantity</td><td>Unit Total</td>
  </tr>';
  $i=1;
  $abc=$abc.'<tr><td>'.$i.'</td><td>'.$pn.'</td><td>'.$qty.'</td><td>'.$price.'Rs</td></tr>';
  $abc=$abc.'<tr><td colspan="2">Total Amount</td><td colspan="2">'.$totalAmount.'Rs</td></tr></table>';
$pdf->writeHTML($abc, true, false, true, false, '');
$filename=$_SERVER['DOCUMENT_ROOT']."/project/Supplier_Page/Bill/".$b.$razor_payment_id.".pdf";
$relname=$b.$razor_payment_id.".pdf";
$file="/project/Supplier_Page/Bill/".$b.$razor_payment_id.".pdf";
$pdf->Output($filename, 'F');
if(file_exists($filename))
{

  $sql="INSERT INTO `purchase_cart`(`pid`, `cartid`, `loginid`, `ptname`, `tot`,`bill`) VALUES 
  ('$p','$cid', '$lid','$pn','$totalAmount', '$file')";
  
  if(mysqli_query($db,$sql))
  {
      
    $s=mysqli_query($con,"select count from product where pid='$p'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $coun=$r['count'];
  
    $s=mysqli_query($con,"select num from cart where pid='$p'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
    $cou=$r['num'];
  
    $count=$coun-$cou;
    $q="UPDATE product set count='$count' where pid='$p'";
    $que="UPDATE cart set st=1 where cartid='$cid'";
    $m=mysqli_query($db,$q);
    $mn=mysqli_query($db,$que);

  if($mn)
  {
  
}

      }
           
      }
  


}
  else
  {
    echo "Error";
  }

?>