<html>
	<head><h1><u>All Employee</u></h1>
	</head>
	<body>
	<table align="center">
		<tr colspan="3">
			<td><input type="text"placeholder="Search...."name="search" id="search" onkeyup="showhint(this.value)"></td>
			<td><input type="submit" id="bsearch" name="bsearch" value="Search">
		</tr>
			<tr>
		    <td colspan="2"> <div id = "suggession"></div> </td>
		</tr>
	</table>
<?php
    require_once '../models/database.php';
	$query = "select * from employee";
	$data = getResult($query);
	echo "
	<table border='1'>
	<tr>
	  <td> <b>Name</b> </td>
	  <td> <b>Department</b> </td>
	   <td> <b>Designation</b> </td>
	   <td> <b>Gender</b> </td>
	   <td> <b>city</b> </td>
	   <td> <b>Phone Number</b> </td>
	   <td> <b>Date of Birth</b> </td>
	   <td> <b>NID Number</b> </td>
	</tr>
	";
	foreach($data as $i) {
		echo" 
		
		<tr>
			<td>".$i["ename"] . "</td><td> " . $i["ed"] . "</td><td>" .$i["edes"] ."</td><td>".$i["egender"]."</td>
			<td>".$i["ecity"]."</td><td>".$i["ephone"]."</td>
			<td>".$i["edob"]."</td><td>".$i["enid"]."</td>
		</tr>";
	}
	echo "</table>";

?>	
	<a href="Dashboard.php"><h1>Click Here to go to Dashboard</h1></a>
	<script>
        function showhint(typed_val) {
			if (typed_val.value == "") {
				document.getElementById("suggession").innerHTML = "";
				return;
			}
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function() {
               if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("suggession").innerHTML = xhr.responseText;
               }
            }
            xhr.open("GET", "show_employee.php? hint="+typed_val, true);
            xhr.send();
        }
    </script>
	</body>
</html>