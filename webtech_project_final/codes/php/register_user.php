
<html>
	<head><h1><u>Add user</u></h1></head>
	<?php
	require_once'../controller/person_controller.php';
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
					<td>Username:</td>
					<td><input type="text" id="uname" name="uname"></td>
					<td id="err_uname"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="text" id="gender" name="gender"></td>
					<td id="err_gender"></td>
				</tr>
				<tr>
					<td>City:</td>
					<td><input type="text" id="city" name="city"></td>
					<td id="err_city"></td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td><input type="text" id="phone" name="phone"></td>
					<td id="err_phone"></td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="text" id="dob" name="dob"></td>
					<td id="err_dob"></td>
				</tr>
				<tr>
					<td>Nid Number:</td>
					<td><input type="text" id="nid" name="nid"></td>
					<td id="err_nid"></td>
				</tr>
				<td colspan="2" align="center">
	 	 			<input type="submit" name="post" value="post">
	 	 			<!input type="button" name="dashboard" value="dashboard">
	 	 		</td>
			</table>
		</form>
		<h1><a href="Dashboard.php">Click here to go to Dashboard</a></h1>
		<script src="js/validate_add_user.js"></script>
	</body>
</html>