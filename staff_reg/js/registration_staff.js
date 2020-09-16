
function fvalidate(a)
{
 
  
  
  var location=document.getElementById("location").value;
  
  //var state=document.getElementById("state").value;
  //var city=document.getElementById("city").value;
  var phone=document.getElementById("phone").value;
  var work=document.getElementById("work").value;
  var wt=document.getElementById("wt").value;
  var salary=document.getElementById("salary").value;
  var email=document.getElementById("email").value;
	
    var x=document.getElementById("fname").value;
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





     var y=document.getElementById("father_name").value;
    if(y=="")
    {
       alert("Please Fill name Field");
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
      alert("Your Phone number is less than 10 digits");
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
    if(wt == "")
    {

    alert("Enter Work Time");
    document.getElementById("wt").focus();
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
	

}