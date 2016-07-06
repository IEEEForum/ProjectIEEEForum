function vali()
{
  var nam=/^[a-zA-Z- _\.]{4,30}$/;
  var mob=/^[7-9][0-9]{9}$/;
  var pass=/^[a-zA-Z0-9- _\.]{8,20}$/;
  if(document.getElementById("t1").value.search(nam)==-1)
  {
	  alert("Enter Correct Name.\r\nName length 4-30 Characters.");
	  document.getElementById("t1").focus();
	  return false;	
  }
  else if(document.getElementById("t5").value.search(mob)==-1)
  {
	  alert("Enter Correct Mobile");
	  document.getElementById("t5").focus();
	  return false;	
  }
  else if(document.getElementById("t4").value.search(pass)==-1)
  {
	  alert("Enter Correct Password.\r\nPassword should have minimum of 8 characters.");
	  document.getElementById("t4").focus();
	  return false;
  }
  else
  {
	return true;  
  }
}