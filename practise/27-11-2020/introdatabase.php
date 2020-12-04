<?php
	$username="root";
	$servername="localhost";
	$password="";
	$db_name="gua_mara_sara";
	
	$conn = mysqli_connect($servername,$username,$password,$db_name);
	
	if ($conn->connect_error) 
	{
  die("Connection failed: " . $conn->connect_error);
	}
	mysqli_query($conn,"[INSET INTO user values(null,'karim','25635','user')]");
?>