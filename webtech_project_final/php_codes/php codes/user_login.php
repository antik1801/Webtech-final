<?php 
     require_once 'database.php';
	 if (isset($_POST["login"])) {
		 $uname = $_POST["uname"];
		 $pass = $_POST["pass"];
		 //select * from user where username = 'antika' and password = '1234'
		 $query = "select * from user where username = '$uname' and password = '$pass'";
		 $data = getResult($query);
		 if ( count($data) > 0 ) {
			header("Location: output.php"); 
		 } 
		 else {
			echo "Wrong username or password"; 
		 }
	 }
?>