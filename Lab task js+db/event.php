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
				<td><input type="button" value="Register?" onclick="dummy()" name="register1"></td>
			</tr>
		</table>
		</form>
		<p id="output">
		
		</p>
		<script>
		    function dummy(){
				document.getElementById("output").innerHTML="Register Button Clicked";
			}
		</script>
	</body>
</html>