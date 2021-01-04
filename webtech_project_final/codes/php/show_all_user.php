<html>
	<head><h1><u>All User</u></h1>
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
	$query = "select * from person";
	$data = getResult($query);
	echo "
	<table border='1'>
	<tr>
	  <td> <b>Name</b> </td>
	   <td> <b>Username</b></td>
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
			<td>".$i["name"] . "</td><td> " . $i["uname"] . "</td><td>".$i["gender"]."</td>
			<td>".$i["city"]."</td><td>".$i["phone"]."</td>
			<td>".$i["dob"]."</td><td>".$i["nid"]."</td>
		</tr>";
	}
	echo "</table>";

?>	
<table>
<tr>
	<td><a href="Dashboard.php"><h1>Click Here to go to Dashboard  </h1></a></td>
	<td><a href="register_user.php"><h1>Register a User</h1></a></td>
</tr>
</table>
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
            xhr.open("GET", "show_user.php? hint="+typed_val, true);
            xhr.send();
        }
    </script>
	</body>
</html>