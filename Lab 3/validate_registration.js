function value(i)
{
	return get(i).value;
}
function validate()
{
	has_error = true;
	name = value("name");
	id = value("id");
	dob = value("dob");
	credit = value("credit");
	cgpa = value("cgpa");
	did = value("did");
	
	if(name == "")
	{
		err_name.innerHTML = "*Name Required";
		has_error = true;
	}
	else
		for(i=0; i<name.length; i++)
		{
			if(name[i] >= '0' && name[i] <= '9')
			{
				err_name.innerHTML="*Name can not be contain any digits";
				err_name = get("err_name");
				has_error = true;
				break;
			}
		}
	if(id == "")
	{
		err_id.innerHTML = "*ID Required";
		has_error = true;
	}
	else if(id.length !=10)
	{
		has_error = true;
		err_id.innerHTML = "*ID length should be 10";
	}
	else
		for(i=0; i<id.length; i++)
		{
			if(!(id[i] >= '0' && id[i] <= '9') && !(id[i] == '-'))
			{
				err_id.innerHTML="*ID can not be contain any Letters";
				err_id = get("err_id");
				has_error = true;
				break;
			}
		}
	if(dob == "")
	{
		err_dob.innerHTML = "*Date of birth Required";
		has_error = true;
	}
	else
		for(i=0; i<dob.length; i++)
		{
			if(!(dob[i] >= '0' && dob[i] <= '9') && !(dob[i] == '-') && !(dob[i] == '/'))
			{
				err_dob.innerHTML="*Formet should be dd-mm-yyyy or dd/mm/yyyy";
				err_dob = get("err_dob");
				has_error = true;
				break;
			}
		}
	if(credit == "")
	{
		err_credit.innerHTML = "*Credit Required";
		has_error = true;
	}
	else
		for(i=0; i<credit.length; i++)
		{
			if(!(credit[i] >= '0' && credit[i] <= '9'))
			{
				err_credit.innerHTML="*Invalid credit";
				err_credit = get("err_credit");
				has_error = true;
				break;
			}
		}
		`
}