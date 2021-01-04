function get (i) {
   return document.getElementById(i);
}

function validate()
{
	var has_error= false;
	var name = get("name").value;
	var did = get("did").value;
	var dep = get("dep").value;
	var des = get("des").value;
	var uname = get("uname").value;
	var pass = get("pass").value;
	var pic = get("pic").value;
	var gen = get("gender").value;
	var city = get("city").value;
	var fname = get("fname").value;
	var mname = get("mname").value;
	var phone = get("phone").value;
	var nid = get("nid").value;
	var snid = get("snid").value;
	var dob = get("dob").value;
	 
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
	name = get("name").value;
	if(did == "")
	{
		has_error = true;
		get("err_did").innerHTML = "*Department ID Required";
		get("err_did").style.color="red";
	}
	if(dep == "")
	{
		has_error = true;
		get("err_dep").innerHTML = "*Department Required";
		get("err_dep").style.color="red";
	}
	if(uname == "")
	{
		has_error = true;
		get("err_uname").innerHTML = "*Username Required";
		get("err_uname").style.color="red";
	}
	if(pass == "")
	{
		has_error = true;
		get("err_pass").innerHTML = "*Password Required";
		get("err_pass").style.color="red";
	}
	if(did == "")
	{
		has_error = true;
		get("err_did").innerHTML = "*Department ID Required";
		get("err_name").style.color="red";
	}
	if(des == "")
	{
		has_error = true;
		get("err_des").innerHTML = "*Designation Required";
		get("err_des").style.color="red";
	}
	if(uname == "")
	{
		has_error = true;
		get("err_uname").innerHTML = "*Department ID Required";
		get("err_uname").style.color="red";
	}
	if(pass == "")
	{
		has_error = true;
		get("err_pass").innerHTML = "*Department ID Required";
		get("err_pass").style.color="red";
	}
	if(gen == "Choose an option")
	{
		has_error = true;
		get("err_gen").innerHTML = "*Gender Required";
		get("err_gen").style.color="red";
	}
	if(city == "Choose an option")
	{
		has_error = true;
		get("err_city").innerHTML = "City Required";
		get("err_city").style.color="red";
	}
	if(fname == "")
	{
		has_error = true;
		get("err_fname").innerHTML = "*Father's Name Required";
		get("err_fname").style.color="red";
	}
	if(mname == "")
	{
		has_error = true;
		get("err_mname").innerHTML = "*Mother's Name Required";
		get("err_mname").style.color="red";
	}
	if(phone == "")
	{
		has_error = true;
		get("err_phone").innerHTML = "*Phone Number Required";
		get("err_phone").style.color="red";
	}
	if(nid == "")
	{
		has_error = true;
		get("err_nid").innerHTML = "National ID Required";
		get("err_nid").style.color="red";
	}
	if(uname == "")
	{
		has_error = true;
		get("err_uname").innerHTML = "Department ID Required";
		get("err_uname").style.color="red";
	}
	if(dob == "")
	{
		has_error = true;
		get("err_dob").innerHTML = "Date of birth Required";
		get("err_dob").style.color="red";
	}
	if(uname == "")
	{
		has_error = true;
		get("err_uname").innerHTML = "Department ID Required";
		get("err_uname").style.color="red";
	}
	return !has_error;
}