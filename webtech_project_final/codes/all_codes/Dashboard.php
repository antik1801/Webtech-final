<?php
    session_start();
	if (isset($_COOKIE["username"])) {
	   echo "<h1> Welcome ".$_COOKIE["username"]." </h1>";
	}
	else {
		header("Location: login.php");
	}
	if ($_SESSION["username"]){
		echo '
		   <html>
					<head><h1 align="center"><u>ADMIN DASHBOARD</u></h1></head>
					<table align="left">
					<tr>
						<td colspan="5" align="right"><a href="all_admins.php"><h2>Show all Admins</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="all_employee.php"><h2>Show all Employees</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="show_all_jobs.php"><h2>Show all JOBS</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="addadmin.php"><h2>Register Admins</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="edit_admins.php"><h2>Edit Admins</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="add_jobs.php"><h2>ADD JOBS</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="add_employee.php"><h2>Add Employees</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="edit_jobs.php"><h2>Edit Jobs</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="add_modarator.php"><h2>Register a modarator.</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="show_all_modarators.php"><h2>Show all modarators.</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="show_all_user.php"><h2>Show all users</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="homepage/home.php"><h2>Go to Homepage</h2></a></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><a href="login.php"><h2>Logout</h2></a></td>
					</tr>
					</table>
				</html>
		';
	}
	else {
		header("Location: login.php");
	}
?>
