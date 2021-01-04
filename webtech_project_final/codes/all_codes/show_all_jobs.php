<html>
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
    require_once 'database.php';
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
	</tr>
	";
	foreach($data as $i) {
		echo" 
		
		<tr>
			<td>".$i["jname"] . "</td><td> " . $i["jp"] . "</td><td>" .$i["rs"] ."</td><td>".$i["ass"]."</td><td>".$i["ad"]."</td>
			<td>".$i["sal"]."</td><td>".$i["mr"]."</td><td>".$i["adv"]."</td><td>".$i["am"]."</td>
		</tr>";
	}
	echo "</table>";
?>
	<head><h1><a href="Dashboard.php">Click Here to go to Dashboard</h1></head>
	<body>
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
            xhr.open("GET", "show_jobs.php? hint="+typed_val, true);
            xhr.send();
        }
    </script>
	</body>
</html>