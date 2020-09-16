<?php
session_start();
$login=$_SESSION['login'];
$id=$_SESSION['loginid'];
if($login)
{
	?>


<!DOCTYPE html>
<html>
  <head>
    <title>Verification</title>
    <style>
      /* Popup Box */
      /* The Modal (background) */
      .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 8888; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      /* Modal Content/Box */
      .modal-content {
      background-color: #fefefe;
      margin: 10vh auto; /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 60%; /* Could be more or less, depending on screen size */
      }
      @media (min-width: 1366px) {
      .modal-content {
      background-color: #fefefe;
      margin: 10vh auto; /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 30%; /* Could be more or less, depending on screen size */
      }
      }
      h2, p {
      margin: 0 0 20px;
      font-weight: 400;
      color: #666;
      }
      span{
      color: #666;
      display:block;
      padding:0 0 5px;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #eee; 
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      .contact-form button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      /* The Close Button */
      .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      }
      .close:hover,
      .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
      }
      button.button {
      background:none;
      border-top:none;
      outline: none;
      border-right:none;
      border-left:none;
      border-bottom:#02274a 1px solid;
      padding:0 0 3px 0;
      font-size:16px;
      cursor:pointer;
      }
      button.button:hover {
      border-bottom:#a99567 1px solid;
      color:#a99567;
      }
      .bg{
    background-image:  url("images/bg8.jpg");
  background-size: cover;
  background-repeat: no-repeat;
 
  background-attachment: fixed;
  display: table;
	width: 100%;
	height: 100vh;
}
    </style>
  </head>
  <body class="bg">

  <?php
include "dbconnect.php";

  
    
    $s=mysqli_query($db,"select cust_name from cust_reg where loginid='$id'");
    $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
   
    $cname=$r['cust_name'];
   
        
       
    
    ?>
    <div style="margin-left:650px;">
    <h1>Verification Form</h1></div>
    <br><br><br>
    <p style="margin-left:500px;">
        Please UPLOAD your Gov. Approved ID proof like Aadhar, Voter ID, Driving licence etc<br><br></p>
      <button class="button" data-modal="modalOne" style="margin-left:700px; color:blue">Upload Your Proof</button>
    
   
    <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form action="" Method="POST" enctype="multipart/form-data">
            <h2>UPLOAD ID PROOF</h2>
            <div>
                <label class="fname"> Customer Name : <?php echo $cname; ?></label><br><br>
                <label>Upload</label>
             
              <input type="file" name="file" id="file"><br>
              
              
            </div>
            <button type="submit" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
   
    <script>
      var modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn){
        btn.onclick = function() {
          var modal = btn.getAttribute('data-modal');
          document.getElementById(modal).style.display = "block";
        }
      });
      
      var closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn){
        btn.onclick = function() {
          var modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      
      window.onclick = function(event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>
  </body>
</html>


<?php
}
else
header("location:home.php");
?>


<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{

    $dir='upload/';
    $target_file=$dir.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
    
    $del = "UPDATE cust_reg SET idproof='$target_file', veri=1 WHERE loginid= '$id'";
    $res=mysqli_query($db,$del);
    if($res)
    {
        echo '<script type="text/javascript">';
        echo 'alert("Id proof Upload Successfully")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = '/project/home.php';\",200);</script>";
    }

}

?>
