<?php
?>
<html>
	<head><h1 align="center">Edit Student</h1></head>
	<body>
		<form action=""onsubmit="return validate()"method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" id="name" name="name"></td>
					<td> <span id="err_name"></span></td>
				</tr>
				<tr>
					<td>Date of birth:</td>
					<td><input type="text" id="dob" name="dob"></td>
					<td> <span id="err_dob"></span></td>
				</tr>
				<tr>
					<td>Credit:</td>
					<td><input type="text" id="credit" name="credit"></td>
					<td> <span id="err_credit"></span></td>
				</tr>
				<tr>
					<td>CGPA:</td>
					<td><input type="text" id="cgpa" name="cgpa"></td>
					<td> <span id="err_cgpa"></span></td>
				</tr>
				<tr>
					<td>Department ID:</td>
					<td><input type="text" id="did" name="did"></td>
					<td> <span id="err_did"></span></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="change" value="Confirm change"></td>
				</tr>
			</table>
		</form>
		<script src="validate_update.js"></script>
	</body>
</html>