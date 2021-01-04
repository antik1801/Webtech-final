
<html>
	<head><h1><u>Register Admins</u></h1></head>
	<?php
	require_once'admin_controller.php';
    ?>
	
	<body>
		<form action="" onsubmit="return validate()" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" id="name" name="name"></td>
					<td id="err_name"></td>
				</tr>
				<tr>
					<td>Department ID:</td>
					<td><input type="text" id="did" name="did"></td>
					<td id="err_did"></td>
				</tr>
				<tr>
					<td>Department:</td>
					<td><input type="text" id="dep" name="dep"></td>
					<td id="err_dep"></td>
				</tr>
				<tr>
					<td>Designation:</td>
					<td><input type="text" id="des" name="des"></td>
					<td id="err_des"></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" id="uname" name="uname"></td>
					<td id="err_uname"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" id="pass" name="pass"></td>
					<td id="err_pass"></td>
				</tr>
				<tr>
					<td>picture:</td>
					<td><input type="file" id="pic" name="pic"></td>
					<td id="err_pic"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<select id="gender" name="gender">
							<option selected="selected" disabled="disabled">Choose an option</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>
					<td id="err_gen"></td>
					</tr>
					<tr>
					<td>City:</td>
					<td>
						<select id="city" name="city">
							<option selected="selected" disabled="disabled">Choose an option</option>
							<option>Dhaka</option>
							<option>Khulna</option>
							<option>Sylhet</option>
							<option>Barishal</option>
							<option>Maymansingh</option>
							<option>Netrokona</option>
							<option>Rangpur</option>
							<option>Rajshahi</option>
							<option>Chandpur</option>
							<option>Faridpur</option>
						</select>
					</td>
					<td id="err_city"></td>
				</tr>
				<tr>
					<td>Fathers Name:</td>
					<td><input type="text" id="fname" name="fname"></td>
					<td id="err_fname"></td>
				</tr>
				<tr>
					<td>Mothers Name:</td>
					<td><input type="text" id="mname" name="mname"></td>
					<td id="err_mname"></td>
				</tr>
				<tr>
					<td>Phone number:</td>
					<td><input type="text" id="phone" name="phone"></td>
					<td id="err_phone"></td>
				</tr>
				<tr>
					<td>Nid Number:</td>
					<td><input type="text" id="nid" name="nid"></td>
					<td id="err_nid"></td>
				</tr>
				<tr>
					<td>Nid Scan:</td>
					<td><input type="file" id="snid" name="snid"></td>
					<td id="err_snid"></td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" id="dob" name="dob"></td>
					<td id="err_dob"></td>
				</tr>
				<tr>
					<td>Driving licence no(optional):</td>
					<td><input type="text" id="dl" name="dl"></td>
					<!td id="err_phone"></td>
				</tr>
				<td colspan="2" align="center">
	 	 			<input type="submit" name="register" value="register">
	 	 			<!input type="button" name="dashboard" value="dashboard">
	 	 		</td>
			</table>
		</form>
		<h1><a href="Dashboard.php">Click here to go to Dashboard</a></h1>
		<script src="validate_addadmin.js"></script>
	</body>
</html>