function get(i)
{
	return document.getElementById(i);
}
function value(i)
{
	return get(i).value;
}
function validate()
{
	has_error = false;
	name = value("name");
	dob = value("dob");
	credit = value("credit");
	cgpa = value("cgpa");
	did = value("did");
	if(name == "")
	{
		err_name.innerHTML = "*Name Required";
		has_error= true;
	}
	else
		for(i=0; i< name.length; i++)
	{
		if(name[i] >=0 && name[i]<=9)
		{
			has_error=true;
			err_name= get("err_name");
			err_name.innerHTML="A Name can not be contain any digits";
			break;
		}
	}
	if(dob == "")
	{
		err_dob.innerHTML = "*Date of Birth Required";
		has_error= true;
	}
	else 
	for(i=0; i< dob.length; i++)
	{
		if(!(dob[i]>= '0' && dob[i]<='9')&& !(dob[i] =='-') && !(dob[i]=='/'))
		{
			err_dob.innerHTML = "*Invalid date formet";
			has_error = true;
			break;
		}
	}
	if(credit.length == "")
	{
		err_credit.innerHTML="*Credit Required";
		has_error = true;
	}
	else
		for(i=0; i<credit.length; i++)
		{
			if(!(credit[i] >= '0' && credit[i] <='9'))
			{
			err_credit.innerHTML ="*Credit only can contain digits";
			has_error = true;
			break;
			}
		}
	if(cgpa =="")
	{
		err_cgpa.innerHTML = "*Cgpa Required";
		has_error = true;
	}
	else 
		for(i=0; i<cgpa.length; i++)
		{
			if(!(cgpa[i]>='0' && cgpa[i]<='9')&& !(cgpa[i]="."))
			{
				err_cgpa.innerHTML="Invalid Cgpa";
				has_error= true;
				break;
			}
		}
	if(did=="")
	{
		err_did.innerHTML = "Department Id Required";
		has_error= true;
	}
	else
	for(i=0; i<did.length; i++)
	{
		if(!(did[i]>='0' && did[i]<='9') && !(did[i]=='-'))
		{
			err_did.innerHTML="Invalid Department ID";
			has_error= true;
			break;
		}
	}
	return !has_error;
}
	