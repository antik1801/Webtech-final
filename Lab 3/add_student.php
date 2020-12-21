<?php
	require_once 'controller/usercontroller.php';
?>
<!doctype html>
<html>
	<head><h1 align="center">ADD STUDENT</h1></head>
	<body>
		<form action=""onsubmit="return validate()"method="post">
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="text" id="name" name="name">
					<span id= "err_name"></span>
				</tr>
				<tr>
					<td>Credit:</td>
					<td><input type="text" id="credit" name="credit">
					<span id= "err_credit"></span>
				</tr>
				<tr>
					<td>CGPA :</td>
					<td><input type="text" id="cgpa" name="cgpa">
					<span id= "err_cgpa"></span>
				</tr>
				<tr>
					<td>Department ID :</td>
					<td><input type="text" id="did" name="did">
					<span id= "err_did"></span>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" name="register" value="register">
				</tr>
			</table>
		</form>
		<script src="validate_registration.js"></script>
	</body>
</html>