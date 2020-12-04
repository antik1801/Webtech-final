<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db_name="fall_20-21";
	
	$conn = mysqli_connect($servername,$username,$password,$db_name);
	
	if(!$conn)
	{
		die("connection failed: " . mysqli_connect_error());
	}
	
	//mysqli_query($conn, "insert into users values(null,'karim','12345698','user')");
	
	$query =  "select * from users" ;
	$results = mysqli_query($conn,$query);
	$r = mysqli_fetch_assoc($results);
	//$p="123456";
	//$p=md5($p);
	//echo print_r($p);
	if(mysqli_num_rows($results) > 0)
	{
		echo "<table border=1>";
		echo "<tr>";
		echo "<th> Username </th>";
		echo "<th> Password </th>";
		echo "<th> User Type </th>";
		echo "</tr>";
		while($row = mysqli_fetch_assoc ($results))
		{
			echo "<tr>";
			echo "<td>".$row["username"]."</td>";
			echo  "<td>".$row["password"] . "</td>";
			echo "<td>" .$row["user_type"]. "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	
?>