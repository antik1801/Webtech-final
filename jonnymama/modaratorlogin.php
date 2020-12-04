<!Doctype html>
<?php
	include_once "modaratorloginvalidation.php";

?>

<html>
	<head> </head>
	<body><h1 align="center"> Welcome to Dashboard...</h1>
	* Fields are required
		<form action="" method="post">
			<table>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr>
					<td align="right">username</td>
					<td><input type="text" placeholder="* Write your username" value="<?php echo $username?>" name="username"></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr>
					<td align="right">password</td>
					<td><input type="password" placeholder="* Enter your password" value="<?php echo $password?>" name="password"></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr>
					<td align="right">Email address</td>
					<td><input type="text"  placeholder="* Write your email address" value="<?php echo $email?>" name="email"></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr><tr></tr><tr></tr>
				<tr>
					<td calspan="2" align="right">
					<input type="submit" name="login" value="login">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>