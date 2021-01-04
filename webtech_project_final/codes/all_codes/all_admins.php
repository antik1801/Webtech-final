<html>
<body>
	<table align="center">
		<tr colspan="3">
			<td><input type="text"placeholder="Search...."name="search" id="search" onkeyup="showhint(this)"></td>
			<td><input type="submit" id="bsearch" name="bsearch" value="Search">
		</tr>
		<tr>
		    <td colspan="2"> <div id = "suggession"></div> </td>
		</tr>
	</table>

<?php
    require_once 'database.php';
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
	</tr>
	";
	foreach($data as $i) {
		echo" 
		
		<tr>
			<td>".$i["name"] . "</td><td> " . $i["did"] . "</td><td>" .$i["dep"] ."</td><td>".$i["des"]."</td><td>".$i["gender"]."</td>
			<td>".$i["city"]."</td><td>".$i["fname"]."</td><td>".$i["mname"]."</td><td>".$i["phone"]."</td><td>".$i["nid"]."</td>
			<td>".$i["dob"]."</td><td>".$i["dl"]."</td>
		</tr>";
	}
	echo "</table>";
?>
	<h1><a href="Dashboard.php">Click Here to go to Dashboard</h1>
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
            xhr.open("GET", "showregister.php? hint="+typed_val.value, true);
            xhr.send();
        }
    </script>
	</body>
</html>