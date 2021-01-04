
<html>
	<head><h1><u>Register Employee</u></h1></head>
	<?php
	require_once'employee_controller.php';
    ?>
	
	<body>
		<form action="" onsubmit="return validate()" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" id="ename" name="ename"></td>
					<td id="err_ename"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><input type="text" id="ed" name="ed"></td>
					<td id="err_ed"></td>
				</tr>
				<tr>
					<td>Designation:</td>
					<td><input type="text" id="edes" name="edes"></td>
					<td id="err_edes"></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" id="uename" name="uename"></td>
					<td id="err_uename"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" id="epass" name="epass"></td>
					<td id="err_epass"></td>
				</tr>
				<tr>
					<td>picture:</td>
					<td><input type="file" id="epic" name="epic"></td>
					<td id="err_epic"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<select id="egender" name="egender">
							<option selected="selected" disabled="disabled">Choose an option</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>
					<td id="err_egen"></td>
					</tr>
					<tr>
					<td>City:</td>
					<td>
						<select id="ecity" name="ecity">
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
					<td id="err_ecity"></td>
				</tr>
				<tr>
					<td>Phone number:</td>
					<td><input type="text" id="ephone" name="ephone"></td>
					<td id="err_ephone"></td>
				</tr>
				<tr>
					<td>Nid Number:</td>
					<td><input type="text" id="enid" name="enid"></td>
					<td id="err_enid"></td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" id="edob" name="edob"></td>
					<td id="err_edob"></td>
				</tr>
				<td colspan="2" align="center">
	 	 			<input type="submit" name="register" value="register">
	 	 			<!input type="button" name="dashboard" value="dashboard">
	 	 		</td>
			</table>
		</form>
		<h1><a href="Dashboard.php">Click here to go to Dashboard</a></h1>
		<script src="validate_add_employee.js"></script>
	</body>
</html>