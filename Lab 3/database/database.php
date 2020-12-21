<?php
	function runQuery($q)
	{
		$db_username = "root";
		$db_servername= "localhost";
		$db_password= "";
		$db_database ="demo_project";
		
		$conn = mysqli_connect($db_servername,$db_username,$db_password,$db_database);
		if(!$conn)
		{
			die("Failed to connect to the server". mysqli_connect_error());
		}
		mysqli_query($conn,$q);
	}
	function getResult($q)
	{
		$db_username = "root";
		$db_servername= "localhost";
		$db_password= "";
		$db_database ="demo_project";
		
		$conn = mysqli_connect($db_servername,$db_username,$db_password,$db_database);
		if(!$conn)
		{
			die("Failed to connect to the server". mysqli_connect_error());
		}
		$result = mysqli_query($conn,$q);
		$data = array();
		
		if($result && mysqli_num_rows($result) > 0)
		{
			while($result && $row = mysqli_fetch_assoc($result))
			{
				$data[] = $row;
			}
		}
		return $data;
	}
?>