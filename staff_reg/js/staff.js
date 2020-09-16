var fname="";
var father_name="";
var location="";
var state="";
var city="";
var regi_date="";
var phone="";
var work="";
var salary="";
var email="";
var password="";
var confirm="";

function fvalidate(e)
{
 
  
  
  var address=document.getElementById("address").value;
  var email=document.getElementById("email").value;
  var category=document.getElementById("category").value;
  var contact=document.getElementById("contact").value;
  var reg_date=document.getElementById("reg_date").value;
  var user=document.getElementById("user").value;
  var passw=document.getElementById("passw").value;
  var conf=document.getElementById("conf").value;

	
    var x=document.forms["myform"]["fname"].value;
   if(x=="")
   {
     alert("Please Fill name Field");
     document.getElementById('fname').focus();
     return false;
   }
 
 if ((x.length < 3) || (x.length > 30))
  {
    alert("Your Character must be 3 to 15 Character");
    document.getElementById('fname').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.fname.value)) 
	  {
      alert("Error: Please enter valid name!");
      myform.fname.focus();
    return false;
     
}
	var y=document.forms["myform"]["father_name"].value;
    if(y=="")
    {
       alert("Please Fill name Field");
       document.getElementById('father_name').focus();
       return false;
    }
 
 if ((y.length < 3) || (y.length > 30))
  {
    alert("Your Character must be 3 to 15 letters");
    document.getElementById('father_name').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.myform.father_name.value)) 
	  {
      alert("Error: Please enter valid name!");
      myform.father_name.focus();
    return false;
     
}
    if(location == "")
    {
     alert("Enter your location please");
    document.getElementById("location").focus();
    return false;
    }
	 if(state == "")
    {
     alert("Enter your location please");
    document.getElementById("state").focus();
    return false;
    }
	 if(city == "")
    {
     alert("Enter your location please");
    document.getElementById("city").focus();
    return false;
    }
	if(regi_date == "")
    {
     alert("Enter your location please");
    document.getElementById("regi_date").focus();
    return false;
    }
	
	
	
	
    //phone
    if(phone == "")
    {
    alert("Enter your Contact Number");
    document.getElementById("phone").focus();
    return false;
    } 
    else if(isNaN(phone))
    {
      alert("Enter the valid Phone Number");
      document.getElementById("phone").focus();
      return false;
    }
    else if(phone.length>0 && phone.length!=10)
    {
      alert("Enter the valid Phone Number");
      document.getElementById("phone").focus();
      return false;
    }
	var pattern = new RegExp("^([6-9]{1})([0-9]{9})$"); 
      if(!pattern.test(document.myform.phone.value)) 
	  {
      alert("Error: Phone Number is invalid!");
      myform.phone.focus();
    return false;
     }
	if(work == "")
    {

    alert("Enter Position");
    document.getElementById("work").focus();
    return false;
    }
	if(salary == "")
    {

    alert("Salary for assign");
    document.getElementById("salary").focus();
    return false;
    }
	 if(email == "")
     {
     alert("Fill this email");
    document.getElementById("email").focus();
    return false;
    }
	
	
   if(password== "")
   {
     alert("Please Enter Your password");
     document.getElementById("password").focus();
    return false;
     }
	  else if(password.length<8)
    {
         alert("Your password should be 8 letters");
     document.getElementById("password").focus();
         return false;
    }
	var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"); 
    if(!strongRegex.test(document.myform.password.value)) 
	  {
      alert("Error: password should contain atleast one uppercase,lowercase ,digit and special characters!");
      myform.password.focus();
      return false;
     } 
	 if(confirm == "")
   {
     alert("Please Re-enter password");
     document.getElementById("confirm").focus();
    return false;
     }
	  else if(confirm.length<8)
    {
         alert("Your password should be 8 letters");
     document.getElementById("confirm").focus();
         return false;
    }
	var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"); 
    if(!strongRegex.test(document.myform.confirm.value)) 
	  {
      alert("Error: password should contain atleast one uppercase,lowercase ,digit and special characters!");
      myform.confirm.focus();
      return false;
     } 
	if(password != confirm)
	{
		alert("Passwords dosen't match");
     document.getElementById("password").focus();
         return false;
	}
	

}