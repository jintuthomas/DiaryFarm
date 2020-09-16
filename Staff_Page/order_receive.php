<?php
include "dbconnect.php";
$b=$_GET['id'];
$da= date("Y-m-d");
//echo $b;
require_once($_SERVER['DOCUMENT_ROOT']."/project/Staff_Page/TCPDF-master/tcpdf_import.php");
     
$s=mysqli_query($con,"select * from `purchase_cart` where pc_id='$b'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
$cid=$r['cartid'];



$sel="SELECT * FROM `cart` where cartid='$cid'";
           
$res=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
   
    $pn=$row['ptname'];
    $qty=$row['num'];
    $price=$row['price'];
    $tot=$row['tot'];
    //$lid=$row['loginid'];
    
    
}
        
  
  //invoice 
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  // set document information
  $pdf->SetCreator('');
  $pdf->SetAuthor('Milky Store');
  $pdf->SetTitle('Purchase Bill');
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
  
   $abc='<BR><BR><BR><table  cellpadding="2" cellspacing="5" nobr="true">
   <tr>
    <th colspan="4" align="center">MILKY STORE PURCHASE BILL</th>
   </tr><tr></tr>
    <tr><td>Index</td><td>Product Name</td><td>Quantity</td><td>Unit Total</td>
   </tr>';
   $i=1;
   $abc=$abc.'<tr><td>'.$i.'</td><td>'.$pn.'</td><td>'.$qty.'</td><td>Rs.'.$price.'</td></tr>';
   $abc=$abc.'<tr><td colspan="3">Total Amount</td><td colspan="2">Rs.'.$tot.'</td></tr></table>';
  

$pdf->writeHTML($abc, true, false, true, false, '');
$filename=$_SERVER['DOCUMENT_ROOT']."/project/Staff_Page/BILL/".$b.$pn.".pdf";
$relname=$b.$pn.".pdf";
$file="/project/Staff_Page/BILL/".$b.$pn.".pdf";
$pdf->Output($filename, 'F');
if(file_exists($filename))
{
  

$sq1="update purchase_cart set status=3,rdate='$da' where pc_id='$b'";
$sq="update purchase_cart set flow='Product Received' where pc_id='$b'";
$sq2="update purchase_cart set final_bill='$file' where pc_id='$b'";

$res=mysqli_query($db,$sq1);
$re=mysqli_query($db,$sq);
$r=mysqli_query($db,$sq2);
if($r)
{
echo '<script language="javascript">';
    echo 'alert("Product Received")';
    echo '</script>';
    echo "<script>window.location.href='order_requested.php'</script>";
}
}
?>