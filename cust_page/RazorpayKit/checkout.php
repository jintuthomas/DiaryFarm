<!DOCTYPE html>
<html>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/RazorpayKit/razorpay-php/config.php");
?>
<head lang="en">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://yegor256.github.io/tacit/tacit.min.css"/>
</head>
<body>
    <form id="checkout-selection" method="POST">
    <lable>Total Amount</lable>
        <input type="text" name="totalamount" id="total" value="100">
        <input type="submit" value="checkout">
    </form>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $(document).ready(function(){

            $('form').submit(function (e){

                var totalAmount = $("#total").val();//total amount eduth oru variablililu vekkuka


        var options={
        "key": "rzp_test_4LxDzw7Pa4wXqM",//ivide payment gatewayil ninnolla key kodukkuka
        "amount": totalAmount*100,//amount into 100 cheythale actual amount kanikku 
        "name": "project name",//ithoke set cheyyuka a gatewayil kainikkanda reethilu
        "description": "anything to describe",
        "currency":"INR",// ithelu thottekkallu
        "image": "path of logo",//icon mattan
        "handler": function (response)
        {
            $.ajax({
            url: '/RazorpayKit/checkoutsuccess.php',//ivide nammade payment tablilinte code oke kedakkunna php file specify cheyyuka
            type: 'POST',
            data: {
                razorpay_payment_id:response.razorpay_payment_id ,//ith payment gateway thannne genarate cheytholum
                 totalAmount : totalAmount ,// baaki nammade variables
                
            }, 
            success: function (msg)
            {
               if(msg)
               {
              alert("Payment Success "+msg);
               }
               else
               {
              alert("Payment Error");
               }
            
            }
        });
      
    },
    "theme": {
        "color": "#9c7f73"//ith color set cheyyan
    }
    };



   var rzp1 = new Razorpay(options);
   rzp1.open();// e code payment gateway open cheyyum
   e.preventDefault();

            });

        });
    </script>

</body>
</html>