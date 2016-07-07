function vali()
{
	var eno=/^[0-9]{8,12}$/;
	var pass=/^[a-zA-Z0-9 _\.]{8,20}$/;
	if(document.getElementById("p1").value.search(eno)==-1)
	{
		alert("Enter Correct Enrollment NO.");
		document.getElementById("p1").focus();
		return false;
	}
	else if(document.getElementById("p2").value.search(pass)==-1)
	{
		alert("Enter Correct Password.\r\nMinimum 8 Characters.");
		document.getElementById("p2").focus();
		return false;
	}
	else
		return true;
}