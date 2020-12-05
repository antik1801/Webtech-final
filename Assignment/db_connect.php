<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db_name="fall_20-21";
	//global $username,$servername,$password,$db_name;
	function execute($query)
	{
		global $username,$servername,$password,$db_name;
		$conn = mysqli_connect($servername,$username,$password,$db_name);
		if(!$conn)
		{
		die("connection failed: " . mysqli_connect_error());
		}
		mysqli_query($conn,$query);
	}
	
	function get($query)
	{
		global $username,$servername,$password,$db_name;
		$conn = mysqli_connect($servername,$username,$password,$db_name);
		if(!$conn)
		{
		die("connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn,$query);
		$data = array();
		if(mysqli_num_rows($result) > 0){
		while($rows = mysqli_fetch_assoc($result)){
			$data[] = $rows;
		}
		}
		return $data;
	}
	
	
	
	
?>