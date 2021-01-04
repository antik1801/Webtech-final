function get (i) {
   return document.getElementById(i);
}

function validate()
{
	var has_error= false;
	var jname = get("jname").value;
	var jp = get("jp").value;
	var rs = get("rs").value;
	var ass = get("ass").value;
	var ad = get("ad").value;
	var sal = get("sal").value;
	var mr = get("mr").value;
	var adv = get("adv").value;
	var am = get("am").value;
	 
	if(jname == "")
	{
		has_error = true;
		get("err_jname").innerHTML = "*JOB Required";
		get("err_jname").style.color="red";
	}
	
		for(var i=0; i<jname.length; i++)
	{
		if(jname[i] >=0 && jname[i] <=9)
		{
			get("err_jname").innerHTML = "*Name must be letters no number is allowed";
			get("err_jname").style.color="red";
			break;
		}
	}
	//jname = get("jname").value;
	if(jp == "")
	{
		has_error = true;
		get("err_jp").innerHTML = "*Position Required";
		get("err_jp").style.color="red";
	}
	if(rs == "")
	{
		has_error = true;
		get("err_rs").innerHTML = "*Required session Required";
		get("err_rs").style.color="red";
	}
	if(ass == "")
	{
		has_error = true;
		get("err_ass").innerHTML = "*Application Start Date Required";
		get("err_ass").style.color="red";
	}
	if(ad == "")
	{
		has_error = true;
		get("err_ad").innerHTML = "*Application Deadline Required";
		get("err_ad").style.color="red";
	}
	if(sal == "")
	{
		has_error = true;
		get("err_sal").innerHTML = "*Salary Required";
		get("err_sal").style.color="red";
	}
	if(mr == "")
	{
		has_error = true;
		get("err_mr").innerHTML = "*Minimum Requirment required";
		get("err_mr").style.color="red";
	}
	if(adv == "")
	{
		has_error = true;
		get("err_adv").innerHTML = "*Advisor's Name Required";
		get("err_adv").style.color="red";
	}
	if(am == "")
	{
		has_error = true;
		get("err_am").innerHTML = "Email ID Required";
		get("err_am").style.color="red";
	}
	
	return !has_error;
}