<!Doctype html>
<?php
		require_once "connect_db.php";
	
	
	$query =  "select * from users" ;
	$users = get($query);
	global $user;
	if(count($users) > 0)
	{
		echo "<table border=1>";
		echo "<tr>";
		echo "<th> Name </th>";
		echo "<th> Username</th>";
		echo "<th> Email </th>";
		echo "<th> Phone </th>";
		echo "</tr>";
		foreach($users as $user){
		echo "<tr>";
			//echo "<td><img src='".$user["profile_pic"]."'></td>";
			echo "<td>".$user["name"]."</td>";
			echo  "<td>".$user["username"]. "</td>";
			echo "<td>" .$user["email"]. "</td>";
			echo "<td>" .$user["phone"]. "</td>";
			//echo "<td><a href='edit_user.php?id=".$user["id"]."'>Edit</a></td>";
			//echo "<td><a href=''>Delete</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else{
		echo "No Data found";
	}
	
	
?>