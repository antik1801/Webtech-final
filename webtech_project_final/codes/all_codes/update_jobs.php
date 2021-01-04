
<html>
	<head><h1><u>Update Jobs</u></h1></head>
	<?php
	   require_once 'database.php';
	   if (isset($_POST["update"])) {
			  $job = $_GET["id"];
			  $jname = $_POST["jname"];
			  $jp = $_POST["jp"];
			  $rs = $_POST["rs"];
			  $ass = $_POST["ass"];
			  $ad = $_POST["ad"];
			  $sal = $_POST["sal"];
			  $mr = $_POST["mr"];
			  $adv = $_POST["adv"];
			  $am = $_POST["am"];
			  
			  $query = "update jobs set jname = '$jname' , jp = '$jp' , rs = '$rs', ass='$ass', ad ='$ad',sal='$sal',mr='$mr',adv='$adv',am='$am' where id='$job'";
			  //echo $query;
			  runQuery($query);
			  header("Location: edit_jobs.php");
		  }
    ?>
	
	<body>
		<form action="" onsubmit="return validate()" method="post">
			<table>
				<tr>
					<td>Job name:</td>
					<td><input type="text" id="jname" name="jname"></td>
					<td id="err_jname"></td>
				</tr>
				<tr>
					<td>Position</td>
					<td><input type="text" id="jp" name="jp"></td>
					<td id="err_jp"></td>
				</tr>
				<tr>
					<td>Recruit session:</td>
					<td><input type="text" id="rs" name="rs"></td>
					<td id="err_rs"></td>
				</tr>
				<tr>
					<td>Applycation Start</td>
					<td><input type="date" id="ass" name="ass"></td>
					<td id="err_ass"></td>
				</tr>
				<tr>
					<td>Application Deadline</td>
					<td><input type="date" id="ad" name="ad"></td>
					<td id="err_ad"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" id="sal" name="sal"></td>
					<td id="err_sal"></td>
				</tr>
				<tr>
					<td>Minimum Requirment</td>
					<td><input type="text" id="mr" name="mr"></td>
					<td id="err_mr"></td>
				</tr>
				<tr>
					<td>Advisor</td>
					<td><input type="text" id="adv" name="adv"></td>
					<td id="err_adv"></td>
				</tr>
				<tr>
					<td>Advisor Email</td>
					<td><input type="text" id="am" name="am"></td>
					<td id="err_am"></td>
				</tr>
				<td colspan="2" align="center">
	 	 			<input type="submit" name="update" value="update">
	 	 			<!input type="button" name="dashboard" value="dashboard">
	 	 		</td>
			</table>
		</form>
		<h1><a href="Dashboard.php">Click here to go to Dashboard</a></h1>
		<script src="validate_add_jobs.js"></script>
	</body>
</html>