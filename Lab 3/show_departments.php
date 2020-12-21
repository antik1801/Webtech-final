<?php
	require_once 'controller/usercontroller.php';
	$results =  ;
?>

<html>
	<head><h1 align="center">Student Information</h1></head>
	<body>
		<table border='1'>
			<tr>
				<th align="center">ID</th>
			</tr>
			<tr>
				<th align="center">Name</th>
			</tr>
			<?php
			foreach($results as $i){
			echo '<tr>
			<td align="center">'.$i["id"].'</td>
			<td align="center">'.$i["name"].'</td>
			</tr>';
			}
			?>
		</table>
	</body>
</html>