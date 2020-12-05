<?php
		require_once "db_connect.php";
	
	
	$query =  "select * from users" ;
	$users = get($query);
	global $user;
	if(count($users) > 0)
	{
		echo "<table border=1>";
		echo "<tr>";
		echo "<th> Username </th>";
		echo "<th> Password </th>";
		echo "<th> User Type </th>";
		echo "<th colspan=2>Options</th>";
		echo "</tr>";
		foreach($users as $user){
		echo "<tr>";
			echo "<td>".$user["username"]."</td>";
			echo  "<td>".$user["password"] . "</td>";
			echo "<td>" .$user["user_type"]. "</td>";
			echo "<td><a href='edit_user.php?id=".$user["id"]."'>Edit</a></td>";
			echo "<td><a href=''>Delete</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else{
		echo "No Data found";
	}
	
	
?>