var name="";
var hname="";
var location="";
var district="";
var state="";
var contact="";
var email="";
var username="";
var password="";
var pass="";

(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).addClass('active');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).removeClass('active');
            showPass = 0;
        }
        
    });


})(jQuery);






function fvalidate()
{

  name=document.getElementById("name").value;
  hname=document.getElementById("hname").value;
  location=document.getElementById("location").value;
  district=document.getElementById("state").value;
  contact=document.getElementById("contact").value;
  email=document.getElementById("email").value;
  username=document.getElementById("username").value;
   password=document.getElementById("password").value;
  pass=document.getElementById("pass").value;
//  email=document.getElementById("txt_email").value;
 // pass=document.getElementById("pass").value;
  // cpass=document.getElementById("cpass").value;

   
    if(name == "")
    {

    alert("Enter the correct name");
    document.getElementById("name").focus();
    return false;
    }
	 if(hname == "")
    {

     alert("Enter the correct house name");
    document.getElementById("hname").focus();
    return false;
    }
	 if(location == "")
    {

     alert("Enter the correct location");
    document.getElementById("location").focus();
    return false;
    }
    //address
    if(district == "")
    {
     alert("Enter the correct district");
    document.getElementById("district").focus();
    return false;
    }
	 if(state == "")
    {

     alert("Enter the correct state");
    document.getElementById("state").focus();
    return false;
    }
    //phone
    if(contact == "")
    {
     alert("Incorrect Contact Number");
    document.getElementById("contact").focus();
    return false;
    } 
    else if(isNaN(contact))
    {
      swal("OOps!", "Phone number should be 10 digit number", "warning");
      document.getElementById("contact").focus();
      return false;
    }
    else if(contact.length>0 && contact.length!=10)
    {
      swal("OOps!", "Phone number too short", "warning");
      document.getElementById("contact").focus();
      return false;
    }
    
    //  //email
    // //  if(email == "")
    // //  {
    // //  swal("OOps!", "Specify Email", "warning");
    // //  document.getElementById("txt_email").focus();
    // //  return false;
    // //  }
    
    // //password
    // if(pass=="")
    // {
    // swal("OOps!", "Specify Password", "warning");
    // document.getElementById("fpass").focus();
    // return false;
    // }
    // else if(pass.length<8)
    // {
    //     swal("OOps!", "Password should be minimum 8 charecters long ", "warning");
    //     document.getElementById("fpass").focus();
    //     return false;
    // }
    // if(cpass=="")
    // {
    // swal("OOps!", "Specify Password", "warning");
    // document.getElementById("cpass").focus();
    // return false;
    // }
    // else if(cpass.length<8)
    // {
    //     swal("OOps!", "Password should be minimum 8 charecters long ", "warning");
    //     document.getElementById("cpass").focus();
    //     return false;
    // }
    // if(fpass==cpass)
    // {

    // }
    // else{
    //   swal("OOps!", "Password and Confirm password are different ", "warning");
    //     document.getElementById("cpass").focus();
    //     return false;

    // }
}

