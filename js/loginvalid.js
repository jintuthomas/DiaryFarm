function validateform()
{
var user = document.myform.user.value;
  
 if (user == "") 
 {
     alert("Please enter correct Username")
     document.myform.user.focus();
     return false;
 }
 var pass = document.myform.pass.value;
  
 if (pass == "") 
 {
     alert("Please enter correct Password")
     document.myform.pass.focus();
     return false;
 }
  
  return( true );
  
	
}