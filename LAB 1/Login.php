<?php include_once "login_validation.php";?>

<?Doctype html>
<html>
	<head>
		<title>Login form</title>
	</head>
	<body>
	<?php include_once "header.php";?>
		<hr>
		<form action=""method="post">
		<fieldset>
			<legend><h1>Login form</h1></legend>
			<table>
				<tr>
					<td align="right">Username:</td>
					<td><input type="text" name="username"value="<?php echo $uname;?>"></td>
					<td><span style="color:red;"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="right">Password:</td>
					<td><input type="password" name="password"value="<?php echo $pass;?>"></td>
					<td><span style="color:red;"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					
					<td><input type="submit"align="right" value="submit""></td>
					<td><input type="submit"align="right" value="forget password?""></td>
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>