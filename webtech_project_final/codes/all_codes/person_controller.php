<?php 
          require_once 'database.php';
		  
		   if(isset($_POST["dashboard.php"])){
		  header("Location: Dashboard.php");
		  }
		  if (isset($_POST["post"])) {
			  echo "Successfully Inserted";   
			  $name = $_POST["name"];
			  $uname = $_POST["uname"];
			  $gender = $_POST["gender"];
			  $city = $_POST["city"];
			  $phone = $_POST["phone"];
			  $dob = $_POST["dob"];
			  $nid = $_POST["nid"];
			  $query = "insert into person values('$name', '$uname', '$gender', '$city','$phone','$dob','$nid')";
			  //echo $query;
			  runQuery($query);
			  header("Location: show_all_user.php");
		  }
		 
	?>