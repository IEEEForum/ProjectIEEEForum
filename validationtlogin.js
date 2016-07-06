function vali()
{
	var pass=/^[a-zA-Z0-9- _\.]{8,20}$/;
	if(document.getElementById("p2").value.search(pass)==-1)
	{
		alert("Enter Correct Password");
		document.getElementById("p2").focus();
		return false;
	}
	else
		return true;
}