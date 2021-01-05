function get (i) {
   return document.getElementById(i);
}
function validate() {
    //return true;
	var has_error = false;
	var name = get("name").value;
	var dob = get("dob").value;
	if (name == "") {
	   has_error = true;
	   get("err_name").innerHTML = "required";
	   get("err_name").style.color = "red";
	}
	else if (name.length < 6 || name.length > 8) {
	   has_error = true;
	   get("err_name").innerHTML = "Name length should be 6-8 characters";
	}
	var dropdown = get("city").value;
	if (dropdown == "Choose an option") {
	   has_error = true;
	   document.getElementById("err_city").innerHTML = "required";
	}
	if (dob == "") {
		get("err_dob").innerHTML = "required";
	}
	return !has_error;
}