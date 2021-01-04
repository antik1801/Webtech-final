<html>
<head> </head>
<body>
<?php
    require_once '../models/database.php';
	//$id = $_GET["id"];
	$query = "select * from register";
	$data = getResult($query);
	
	echo "
	<table border='1'>
	<tr>
	  <td> <b>Name</b> </td>
	  <td> <b>Department ID</b> </td>
	   <td> <b>Department</b> </td>
	  <td> <b>Degisnation</b> </td>
	   <td> <b>Gender</b> </td>
	  <td> <b>city</b> </td>
	   <td> <b>Father's Name</b> </td>
	  <td> <b>Mother's Name</b> </td>
	   <td> <b>Phone Number</b> </td>
	  <td> <b>NID Number</b> </td>
	   <td> <b>Date of Birth</b> </td>
	  <td> <b>Driving Licence Number</b> </td>
	  <td colspan='2'>Options</td>
	</tr>
	";
	foreach($data as $i) {
		echo" 
		<tr>
			<td>".$i["name"] . "</td><td> " . $i["did"] . "</td><td>" .$i["dep"] ."</td><td>".$i["des"]."</td><td>".$i["gender"]."</td>
			<td>".$i["city"]."</td><td>".$i["fname"]."</td><td>".$i["mname"]."</td><td>".$i["phone"]."</td><td>".$i["nid"]."</td>
			<td>".$i["dob"]."</td><td>".$i["dl"]."</td>
			<td> <a href='update_admin.php?admin=".$i["uname"]."'> Edit </a> </td> <td> <a href='delete_admin.php?admin=".$i["uname"]."'> Delete </a> </td>
		</tr>";
	}
	echo "</table>";
?>
<h1><u><a href="Dashboard.php">Click Here to GO to Dashboard</a></h1>
</body>
</html>