<!Doctype html>
<?php
	require_once "index.php";
?>
<html>
	<head><h1>Registration Page</h1></head>
	<form>
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" id="name" placeholder="Name"></td>
			</tr>
			<tr>
				<td>Username: </td>
				<td><input type="text" id="uname" placeholder="User Name"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" id="pass" placeholder="password"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" id="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td>Name: </td>
				<td><input type="text" id="phone" placeholder="Phone"></td>
			</tr>
			<tr>
				<td><input type="button" value="Register" name="register"></td>
			</tr>
		</table>
	</form>
</html>