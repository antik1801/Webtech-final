<?php
 require_once 'controller/usercontroller.php';
 $results = getStudentData();
?>
<!Doctype html>
<html>
	<head><h1 align="center">Students information</h1></head>
	<body>
		<table border="1">
			<tr>
				<th align="center"> Name </th>
			</tr>
			<tr>
				<th align="center"> ID </th>
			</tr>
			<tr>
				<th align="center"> Date of birth </th>
			</tr>
			<tr>
				<th align="center"> Credit </th>
			</tr>
			<tr>
				<th align="center"> CGPA </th>
			</tr>
			<tr>
				<th align="center"> Department ID</th>
			</tr>
			<tr>
				<th align="center" colspan="2"> Options </th>
			</tr>
			<?php
				foreach($results as $i)
				{
					echo '<tr>
					<td align="center">'.$i[["name"].'</td>
					<td align="center">'.$i[["id"].'</td>
					<td align="center">'.$i[["dob"].'</td>
					<td align="center">'.$i[["credit"].'</td>
					<td align="center">'.$i[["cgpa"].'</td>
					<td align="center">'.$i[["dept_id"].'</td>
					<td align="center"><a href="edit_student.php? id='.$i[["id"].'">Edit</a></td>
					<td align="center"><a href="delete_student.php? id='.$i[["id"].'">Delete</a></td>
					</tr>';
				}
			?>
		</table>
	</body>
</html>