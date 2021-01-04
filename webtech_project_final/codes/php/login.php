<?php
	require_once "../controller/user_controller.php";
?>
<html>
	<head><h1 align="center">ADMIN LOGIN</h1><head>
	<script src="js/validate_login.js"></script>
	<form onsubmit="return validate()" method="post">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" id="uname" name="uname"></td>
			<td id="err_uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" id="pass" name="pass"></td>
			<td id="err_pass"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
	 	 		<!input type="submit" name="register" value="register">
	 	 		<input type="submit" name="login" value="login">
			</td>
		</tr>
	</table>
	</form>
</html>

