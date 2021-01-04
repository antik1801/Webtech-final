function get (i) {
   return document.getElementById(i);
}

function validate()
{
	var has_error= false;
	var uname = get("uname").value;
	var pass = get("pass").value;
	if(uname == "")
	{
		has_error=true;
		get("err_uname").innerHTML = "*Username required";
		get("err_uname").style.color = "red";
	}
	if(pass == "")
	{
		has_error=true;
		get("err_pass").innerHTML = "*password required";
		get("err_pass").style.color = "red";
	}
	return !has_error;
}