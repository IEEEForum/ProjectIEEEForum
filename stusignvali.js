function vali()
{
  var nam=/^[a-zA-Z- _\.]{4,30}$/;
  var mob=/^[7-9][0-9]{9}$/;
  var pass=/^[a-zA-Z0-9- _\.]{8,20}$/;
  var eno=/^[0-9]{8,12}$/;
  var batch=/^[a-cA-C][0-9]{1,2}$/;
  if(document.getElementById("t1").value.search(nam)==-1)
  {
	  alert("Enter Correct Name.\r\nName length 4-30 Characters.");
	  document.getElementById("t1").focus();
	  return false;	
  }
  else if(document.getElementById("t7").value.search(mob)==-1)
  {
	  alert("Enter Correct Mobile");
	  document.getElementById("t7").focus();
	  return false;	
  }
  else if(document.getElementById("t6").value.search(pass)==-1)
  {
	  alert("Enter Correct Password.\r\nPassword should have minimum of 8 characters.");
	  document.getElementById("t6").focus();
	  return false;
  }
  else if(document.getElementById("t2").value.search(eno)==-1)
  {
	  alert("Enter Correct Enrolment no.");
	  document.getElementById("t2").focus();
	  return false;	
  }
  else if(document.getElementById("t3").value.search(batch)==-1)
  {
	  alert("Enter Correct Batch.");
	  document.getElementById("t3").focus();
	  return false;	
  }
  else
  {
	return true;  
  }
}