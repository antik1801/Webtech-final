<html>
<head> </head>
<body>
<?php
    require_once 'database.php';
	//$id = $_GET["id"];
	$query = "select * from jobs";
	$data = getResult($query);
	
	echo "
	<table border='1'>
	<tr>
	  <td> <b>Job</b> </td>
	  <td> <b>Position</b> </td>
	   <td> <b>Recruit sesson</b> </td>
	  <td> <b>Application Start</b> </td>
	   <td> <b>Application Deadline</b> </td>
	  <td> <b>Salary</b> </td>
	   <td> <b>Minimum requirment</b> </td>
	  <td> <b>Advisor</b> </td>
	   <td> <b>Advisor's Email</b> </td>
	   <td colspan='2'><b>Options</b></td>
	</tr>
	";
	foreach($data as $i) {
		echo" 
		<tr>
			<tr>
			<td>".$i["jname"] . "</td><td> " . $i["jp"] . "</td><td>" .$i["rs"] ."</td><td>".$i["ass"]."</td><td>".$i["ad"]."</td>
			<td>".$i["sal"]."</td><td>".$i["mr"]."</td><td>".$i["adv"]."</td><td>".$i["am"]."</td>
			<td> <a href='update_jobs.php? id=".$i["id"]."'> Edit </a> </td> <td> <a href='delete_job.php? id=".$i["id"]."'> Delete </a> </td>
		</tr>";
	}
	echo "</table>";
?>
<h1><u><a href="Dashboard.php">Click Here to GO to Dashboard</a></h1>
</body>
</html>