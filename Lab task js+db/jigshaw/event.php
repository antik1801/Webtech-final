<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" id="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>password: </td>
				<td><input type="password" id="pass" placeholder="password"></td>
			</tr>
			<tr>
				<td><input type="button" value="Login" name="login"></td>
			</tr>
			<tr>
				<td><input type="button" value="Register" onclick="dummy()"name="login"></td>
			</tr>
			</table>
		</form>
		<p id="output">
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
		</p>
		<script>
		    function dummy(){
				document.getElementById("output").innerHTML="Register Button Clicked";
			}
		</script>
	</body>
</html>