<?php
session_start();
$login=$_SESSION['login'];
/*$type=$_SESSION['type'];*/
$usr_name=$_SESSION['firstname'];
$usr_lname=$_SESSION['lastname'];
$id=$_SESSION['loginid'];
//$user_id=$_SESSION['purchase_id'];

include "dbconnect.php";
$q="select * from p_rate";
 $sql=mysqli_query($con,$q);

 $da=date("Y-m-d");
        $s=mysqli_query($con,"select total from `milk_total` where session='Morning' AND today_date='$da'");
        $r=mysqli_fetch_array($s,MYSQLI_ASSOC);

        $q=$r['total'];

        $s=mysqli_query($con,"select total from `milk_total` where session='Afternoon' AND today_date='$da'");
        $r=mysqli_fetch_array($s,MYSQLI_ASSOC);


        $qu=$r['total'];

        




if($login)
{
	?>






<!doctype html>
<html lang="en">
  <head>
  	<title>Staff Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  
    <link rel="stylesheet" type="text/css" href="seller/css/util.css">
	<link rel="stylesheet" type="text/css" href="seller/css/main.css">
<style>
  .bg{
      background-image:  url("images/bg7.jpg");
    background-size: cover;
    background-repeat: no-repeat;
   
    background-attachment: fixed;
    display: table;
    width: 100%;
    height: 100vh;
  }
  .dot {
  height: 8px;
  width: 8px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

  </style>

       
<script>
function rvalidate(a)
{
	var session1=document.getElementById("session1").value;
  var mobile=document.getElementById("mobile").value;
  var qty=document.getElementById("qty").value;
  var mt=document.getElementById("mt").value;
  
	
	
	
	if(session1 == "")
    {

    alert("Enter the Session");
    document.getElementById("session1").focus();
    return false;
    }
    var x=document.forms["myform"]["name"].value;
   if(x=="")
   {
     alert("Please Fill name Field");
     document.getElementById('name').focus();
     return false;
   }
 
 if ((x.length < 3) || (x.length > 30))
  {
    alert("Your Character must be 3 to 15 Character");
    document.getElementById('name').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.name.value)) 
	  {
      alert("Error: Please enter valid name!");
      myform.name.focus();
    return false;
     
}
var y=document.forms["myform"]["location"].value;
   if(y=="")
   {
     alert("Please Enter the location");
     document.getElementById('location').focus();
     return false;
   }
  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.location.value)) 
	  {
      alert("Error: Incorrect value!");
      myform.location.focus();
    return false;
     
}

if(mobile == "")
    {
    alert("Enter the Phone Number");
    document.getElementById("mobile").focus();
    return false;
    } 
    else if(isNaN(mobile))
    {
      alert("Enter the valid Phone Number");
      document.getElementById("mobile").focus();
      return false;
    }
    else if(mobile.length>0 && mobile.length!=10)
    {
      alert("Your Phone number is less than 10 digits");
      document.getElementById("mobile").focus();
      return false;
    }
	var pattern = new RegExp("^([6-9]{1})([0-9]{9})$"); 
      if(!pattern.test(document.myform.mobile.value)) 
	  {
      alert("Error: Phone Number is invalid!");
      myform.mobile.focus();
    return false;
     }


    if(qty == "")
    {

    alert("Enter the Quantity");
    document.getElementById("qty").focus();
    return false;
    }
    else if(isNaN(qty))
    {
      alert("Enter the valid Number");
      document.getElementById("qty").focus();
      return false;
    }
    else if(qty<=0)
    {
      alert("Incorrect value");
      document.getElementById("qty").focus();
      return false;
    }


    if(mt == "")
    {

    alert("Enter the Measurement");
    document.getElementById("mt").focus();
    return false;
    }
	
	
return true;
}


</script>


  </head>
  <body class="bg">
  
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
       <!-- <div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>-->
       
	  		<form action="" Method="POST" enctype="multipart/form-data">

<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg2.jpg);">
  <div class="user-logo">
  <?php
              include "dbconnect.php";
              
              $sel="SELECT * FROM `staff_reg` where loginid='$id'";
              
              $res=mysqli_query($db,$sel);
              while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
               {
              /*while($row=$s -> fetch_assoc())*/
              
                $pic=$row['pic'];
              
              ?>
              <div class="img" style="background-image: url(/project/Staff_Page/<?php echo $row['pic']; ?> );"></div>
              <?php
              }
              ?>
              </form>
            <h3><?php echo $usr_name; echo "&nbsp"; echo $usr_lname; ?></h3>
          </div>
          
          <a href="#"><i class="dot"></i>&nbsp;&nbsp;<font color="white" size="1" >Online</font></a>
     
        </div>
        
        
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="milk.php"><span class="fa fa-home mr-3"></span> Back</a>
          </li>
         
          <li>
            <a href="/project/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
         
            
          
      </ul>
    
    	</nav>
		
        <!-- Page Content  -->

       
        <div id="content" class="p-4 p-md-5 pt-5">
       
        <label style="margin-left:900px; color:white;">Today's Stock (Morning) : </label><label style="color:red; font-size:30px;"> <?php echo $q; echo "&nbsp"; ?> ltr</label>
        <label style="margin-left:900px; color:white;">Today's Stock(Afternoon) : </label><label style="color:red; font-size:30px;"> <?php echo $qu; echo "&nbsp";?>ltr</label>
        <div class="wrap-login100" style="margin-left:400px;">
        
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" autocomplete="off" name="myform">
					<span class="login100-form-title">
						Purchase Milk Form
                    </span>
                    <div class="form-group">
                    
             <label for="exampleInputPassword1" style="margin-left:250px;">Date :</label>&nbsp;&nbsp;
             <!--<input type="date" class="form-control" id="exampleInputPassword1" placeholder="date">-->
   
    <?php
                 echo " " . date("Y/m/d") . "<br>";

               ?>

           </div>
           <div class="form-group">
             <label for="exampleInputPassword1" style="margin-left:200px;">Session :</label>&nbsp;&nbsp;
             <!--<input type="date" class="form-control" id="exampleInputPassword1" placeholder="date">-->
             <select name="session1" id="session1">
    <option value=""></option>
     <option value="Morning">Morning</option>
     <option value="Afternoon">Afternoon</option>
          </select>
           </div>

           <?php
           include "dbconnect.php";
$sel="SELECT * FROM `p_rate`";
$res=mysqli_query($db,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
  $mt=$row['mt'];
  if($mt=='Ltr')
  {
	?>
  
  <label style="margin-left:10px;">Current Rate of Milk (ltr) : </label> <label> <?php  echo $row['rate']; ?></label>&nbsp;
  
  <?php
  }
  else
  {
    ?>
   <label style="margin-left:10px;">Current Rate of Milk (Kg) : </label> <label> <?php  echo $row['rate']; ?></label>&nbsp;

    <?php
  }
}
  ?>
  <br>
					<div>
						<input class="input100" type="text" placeholder="Name of Customer" id="name" name="name">
						<span class="focus-input100"></span>
                    </div>
                    <br>
					
                    <div>
						<input class="input100" type="text"  placeholder="Location" id="location" name="location">
						<span class="focus-input100"></span>
                    </div>
                    <br>
                    <div>
						<input class="input100" type="text"  placeholder="Mobile Number" id="mobile" name="mobile">
						<span class="focus-input100"></span>
                    </div>
                    <br>
                    <div>
						<input class="input100" type="text" placeholder="Quantity(ltr/kg)"  id="qty"  name="qty">
						<span class="focus-input100"></span>
                    </div><br>
                    <div>
                    <select id="mt" name="mt" placeholder="select Your Measurement" class="input100">
                                          <option value="">select Your Measurement</option>
                                      <?php
                                  while($fetch=mysqli_fetch_array($sql))
                                   {
                                       ?>
                              <option value="<?php echo $fetch['mt']?>"><?php echo $fetch['mt']?>
                                          <?php
                                    }
                                       ?>
                                        </select>
						<span class="focus-input100"></span>
                    </div>
                    

					<br><br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" onclick="return rvalidate(this)">
							Buy
						</button>
					</div>
                 <br><br><br>
				</form>
			</div>
    
      
      <?php
 include "dbconnect.php";
 require_once($_SERVER['DOCUMENT_ROOT']."/project/Staff_Page/TCPDF-master/tcpdf_import.php");
$query1=mysqli_query($con,"SELECT MAX(purchase_id) as purchase_id from purchase_milk");
$r=mysqli_fetch_array($query1);
$pid=$r['purchase_id'];
/*$s="SELECT * FROM `purchase_milk`";
$pid=$row['purchase_id'] ;*/
$sel="SELECT * FROM `purchase_milk` where purchase_id='$pid' GROUP BY purchase_id";
$res=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{


  $p=$row['purchase_id'];
  $n=$row['name'];
  $d=$row['date1'];
  $s=$row['session'];
  $q=$row['qty'];
  $r=$row['rate'];
  $t=$row['total'];

  



	?>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left:800px;">PRINT BILL</button>
          
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action=""  method="POST" >
    <div class="container">
      <h1>Milky Store</h1>
      <p>Purchase Bill</p>
      <hr>
      <div><br><br><br>
            <label  style="margin-left:50px;">Serial No:</label>  &nbsp;&nbsp;<?php  echo $row['purchase_id']; ?></label> 
        
      <label  style="margin-left:100px;">Name :</label> &nbsp; <label><?php  echo $row['name']; ?></label> 
        
      <label style="margin-left:180px;">Date :</label> &nbsp;<label> <?php echo $row['date1']; ?></label>&nbsp;&nbsp; 
      <label style="margin-left:200px;">Time :</label> &nbsp; <label> <?php  echo $row['session']; ?></label>&nbsp;
      

     
      </div>
      <br><br><br><br>
      <div style="margin-left:450px;">
      <label>Quantity(in liters) :</label> <label style="margin-left:30px;"> <?php  echo $row['qty']; ?></label><br><br>
      <label style="margin-left:25px;">Rate of Today :</label><label style="margin-left:30px;"> <?php  echo $row['rate']; ?></label><br><br>
      <label style="margin-left:120px;">_________________________</label> <br><br><br>
    
      <label>Final Amount &nbsp;&nbsp; =</label><label style="margin-left:30px;"> <?php  echo $row['total']; ?></label> <br><br>    
      </div>
      <?php
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
   $i=1;
  $abc='<table border="0" cellpadding="2" cellspacing="2" nobr="true" align="center">
  <tr>
   
   <th colspan="3">MILKY STORE PURCHASE BILL</th></tr><br><br><br>
   <tr><td>SNo.'.$p.'</td><td>Name : '.$n.'</td><td> Date :'.$d.'</td></tr><br><br>
   <tr><td>Index</td><td>Quantity(in liters)</td><td>Rate of Today</td></tr><br>';
  
  $abc=$abc. '<tr><td>'. $i.'</td><td>'. $q.'</td><td>'.$r.'</td></tr><br><br>';
  $abc=$abc.'<tr><td colspan="2">Total Amount</td><td colspan="2">'.$t.'Rs</td></tr></table>';
  

$pdf->writeHTML($abc, true, false, true, false, '');
$filename=$_SERVER['DOCUMENT_ROOT']."/project/Staff_Page/BILL/".$n.".pdf";
$relname=$n.".pdf";
$pdf->Output($filename, 'F');
if(file_exists($filename))
{
  
      echo '<a href="/project/Staff_Page/BILL/'.$relname.'"><br><br><p style="margin-left:450px; font-size:15px; color:red">Click Here To View Purchase Bill</p></a>';
 
}     


?>


      
     
    </div>
    <br><br><br>
  </form>
</div>


         </div>
		</div>

    


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="seller/js/main.js"></script>


    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    
  </body>
</html>


<?php
}
else
header("location:/project/home.php");
?>



	
<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
$session1=$_POST['session1'];
$name=$_POST['name'];
$location=$_POST['location'];
$mobile=$_POST['mobile'];
$qty=$_POST['qty'];
$met=$_POST['mt'];
$da= date("Y-m-d");

        $s=mysqli_query($con,"select sum(quantity) from `supp_milk` where session='Morning' AND date1='$da'");
        $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
        $qu=$r['sum(quantity)'];


        if($session1=='Morning')
        {
          $sq2="select today_date from milk_total where today_date='$da' and session='Morning'";
          $result=mysqli_query($conn,$sq2);
          $rowcount=mysqli_num_rows($result);
        
      if($rowcount==0)
      {
        

        $q2="INSERT INTO `milk_total`(`today_date`,`total`, `quty`,`session`)VALUES('$da','$qu','$qty','Morning')";
        $tota=mysqli_query($con,$q2); 
        if($tota)
        {
          $s=mysqli_query($con,"select total from milk_total where today_date='$da' and session='Morning'");
          $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
          $q=$r['total'];
        



          if($q>=$qty)
          {
           
         
$s=mysqli_query($con,"select * from p_rate where mt='$met'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
$ra=$r['rate'];

$tot=$qty*$ra;
$qut=$q-$qty;

$q1="INSERT INTO `purchase_milk`(`date1`,`session`, `name`, `location`, `mob`,`qty`, `mt`,`rate`, `total`)
 VALUES('$da','$session1','$name','$location','$mobile','$qty', '$met','$ra' , '$tot')";
	
  $ch=mysqli_query($con,$q1);
  
	    if($ch)
	    { 

        $update="UPDATE milk_total SET total='$qut', today_date='$da' where today_date='$da' and session='Morning'";
        $chu=mysqli_query($con,$update);
        if($chu)
        {
       echo " <script>
       alert('Enterd Details Successfully');
       </script> ";
        }
      }
 
     else
     {
       echo"error:".$ql."<br>".mysqli_error($con);
     }

          }
          else
          {
            echo " <script>
            alert('Please Enter the Quantity less than Collected');
            </script> ";
          }

        }
      }
      else
      {

          $s=mysqli_query($con,"select total from milk_total where today_date='$da'");
          $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
          $q=$r['total'];
        



          if($q>=$qty)
          {
           
         
$s=mysqli_query($con,"select * from p_rate where mt='$met'");
$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
$ra=$r['rate'];

$tot=$qty*$ra;
$qut=$q-$qty;

$q1="INSERT INTO `purchase_milk`(`date1`,`session`, `name`, `location`, `mob`,`qty`, `mt`,`rate`, `total`)
 VALUES('$da','$session1','$name','$location','$mobile','$qty', '$met','$ra' , '$tot')";
	
  $ch=mysqli_query($con,$q1);
  
	    if($ch)
	    { 
        $update="UPDATE milk_total SET total='$qut', today_date='$da',quty='$qty' where today_date='$da'";
        $chu=mysqli_query($con,$update);
        if($chu)
        {
       echo " <script>
       alert('Enterd Details Successfully');
       </script> ";
        }
      }
 
     else
     {
       echo"error:".$ql."<br>".mysqli_error($con);
     }

          }
          else
          {
            echo " <script>
            alert('Please Enter the Quantity less than Collected');
            </script> ";
          }

        


      }


        }
        else
        {
          $s=mysqli_query($con,"select sum(quantity) from `supp_milk` where session='Afternoon' AND date1='$da'");
          $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
          $quan=$r['sum(quantity)'];


          $sq2="select today_date from milk_total where today_date='$da' and session='Afternoon'";
          $result=mysqli_query($conn,$sq2);
          $rowcount=mysqli_num_rows($result);
        
      if($rowcount==0)
      {
        

        $q2="INSERT INTO `milk_total`(`today_date`,`total`, `quty`,`session`)VALUES('$da','$qu','$qty','Afternoon')";
        $tota=mysqli_query($con,$q2); 
        if($tota)
        {
          $s=mysqli_query($con,"select total from milk_total where today_date='$da' and session='Afternoon'");
          $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
          $q=$r['total'];
          if($q>=$qty)
          {

            $s=mysqli_query($con,"select * from p_rate where mt='$met'");
            $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
            $ra=$r['rate'];
            
            $tot=$qty*$ra;
            $qut=$q-$qty;
            
            $q1="INSERT INTO `purchase_milk`(`date1`,`session`, `name`, `location`, `mob`,`qty`, `mt`,`rate`, `total`)
             VALUES('$da','$session1','$name','$location','$mobile','$qty', '$met','$ra' , '$tot')";
              
              $ch=mysqli_query($con,$q1);
              
                  if($ch)
                  { 
                
                    $update="UPDATE milk_total SET total='$qut', today_date='$da',,quty='$qty' where today_date='$da' and session='Afternoon'";
                    $chu=mysqli_query($con,$update);
                    if($chu)
                    {
                   echo " <script>
                   alert('Enterd Details Successfully');
                   </script> ";
                    }
                  }
                  else
                   {
                   echo"error:".$ql."<br>".mysqli_error($con);
                   }
            
                  }
                  else
                  {
                    echo " <script>
                    alert('Please Enter the Quantity less than Collected');
                    </script> ";
                  }


                    }

                  }
                  else
                  {

                    $s=mysqli_query($con,"select total from milk_total where today_date='$da' and session='Afternoon'");
                    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
                    $q=$r['total'];
                    if($q>=$qty)
                    {
          
                      $s=mysqli_query($con,"select * from p_rate where mt='$met'");
                      $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
                      $ra=$r['rate'];
                      
                      $tot=$qty*$ra;
                      $qut=$q-$qty;
                      
                      $q1="INSERT INTO `purchase_milk`(`date1`,`session`, `name`, `location`, `mob`,`qty`, `mt`,`rate`, `total`)
                       VALUES('$da','$session1','$name','$location','$mobile','$qty', '$met','$ra' , '$tot')";
                        
                        $ch=mysqli_query($con,$q1);
                        
                            if($ch)
                            { 
                          
                              $update="UPDATE milk_total SET total='$qut', today_date='$da',quty='$qty' where today_date='$da' and session='Afternoon'";
                              $chu=mysqli_query($con,$update);
                              if($chu)
                              {
                             echo " <script>
                             alert('Enterd Details Successfully');
                             </script> ";
                              }
                            }
                            else
                             {
                             echo"error:".$ql."<br>".mysqli_error($con);
                             }
                      
                            }
                            else
                            {
                              echo " <script>
                              alert('Please Enter the Quantity less than Collected');
                              </script> ";
                            }
          
          




                  }



          }
      


}
mysqli_close($con);
?>
	

