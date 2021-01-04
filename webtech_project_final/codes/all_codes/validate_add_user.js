function get (i) {
   return document.getElementById(i);
}

function validate()
{
	var has_error= false;
	var name = get("name").value;
	var uname = get("uname").value;
	var gender = get("gender").value;
	var city = get("city").value;
	var phone = get("phone").value;
	var dob = get("dob").value;
	var nid = get("nid").value;
	 
	if(name == "")
	{
		has_error = true;
		get("err_name").innerHTML = "*Name Required";
		get("err_name").style.color="red";
	}
	
		for(var i=0; i<name.length; i++)
	{
		if(name[i] >=0 && name[i] <=9)
		{
			get("err_name").innerHTML = "*Name must be letters no number is allowed";
			get("err_name").style.color="red";
			break;
		}
	}
	//jname = get("jname").value;
	if(uname == "")
	{
		has_error = true;
		get("err_uname").innerHTML = "*Username Required";
		get("err_uname").style.color="red";
	}
	if(gender == "")
	{
		has_error = true;
		get("err_gender").innerHTML = "*Gender Required";
		get("err_gender").style.color="red";
	}
	if(city == "")
	{
		has_error = true;
		get("err_city").innerHTML = "*City";
		get("err_city").style.color="red";
	}
	if(phone == "")
	{
		has_error = true;
		get("err_phone").innerHTML = "*Phone number required";
		get("err_phone").style.color="red";
	}
	if(dob == "")
	{
		has_error = true;
		get("err_dob").innerHTML = "*Date of birth Required";
		get("err_dob").style.color="red";
	}
	if(nid == "")
	{
		has_error = true;
		get("err_nid").innerHTML = "*NID number required";
		get("err_nid").style.color="red";
	}
	return !has_error;
}