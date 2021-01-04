function get (i) {
   return document.getElementById(i);
}

function validate()
{
	var has_error= false;
	var ename = get("ename").value;
	var ed = get("ed").value;
	var edes = get("edes").value;
	var uename = get("uename").value;
	var epass = get("epass").value;
	var epic = get("epic").value;
	var egen = get("egender").value;
	var ecity = get("ecity").value;
	var ephone = get("ephone").value;
	var enid = get("enid").value;
	var edob = get("edob").value;
	 
	if(ename == "")
	{
		has_error = true;
		get("err_ename").innerHTML = "*Name Required";
		get("err_ename").style.color="red";
	}
	
		for(var i=0; i<ename.length; i++)
	{
		if(ename[i] >=0 && ename[i] <=9)
		{
			get("err_ename").innerHTML = "*Name must be letters no number is allowed";
			get("err_ename").style.color="red";
			break;
		}
	}
	ename = get("ename").value;
	if(ed == "")
	{
		has_error = true;
		get("err_ed").innerHTML = "*Department Required";
		get("err_ed").style.color="red";
	}
	if(edes == "")
	{
		has_error = true;
		get("err_edes").innerHTML = "*Designation Required";
		get("err_edes").style.color="red";
	}
	if(uename == "")
	{
		has_error = true;
		get("err_uename").innerHTML = "*Username Required";
		get("err_uename").style.color="red";
	}
	if(epass == "")
	{
		has_error = true;
		get("err_epass").innerHTML = "*Password Required";
		get("err_epass").style.color="red";
	}
	if(egen == "Choose an option")
	{
		has_error = true;
		get("err_egen").innerHTML = "*Gender Required";
		get("err_egen").style.color="red";
	}
	if(ecity == "Choose an option")
	{
		has_error = true;
		get("err_ecity").innerHTML = "City Required";
		get("err_ecity").style.color="red";
	}
	if(ephone == "")
	{
		has_error = true;
		get("err_ephone").innerHTML = "*Phone Number Required";
		get("err_ephone").style.color="red";
	}
	if(enid == "")
	{
		has_error = true;
		get("err_enid").innerHTML = "National ID Required";
		get("err_enid").style.color="red";
	}
	if(edob == "")
	{
		has_error = true;
		get("err_edob").innerHTML = "Date of birth Required";
		get("err_edob").style.color="red";
	}
	return !has_error;
}