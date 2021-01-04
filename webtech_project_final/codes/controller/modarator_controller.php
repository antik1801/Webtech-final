<?php 
          require_once '../models/database.php';
		  
		   if(isset($_POST["dashboard"])){
		  header("Location: ../php/Dashboard.php");
		  }
		  if (isset($_POST["register"])) {
			  echo "Successfully Inserted";   
			  $name = $_POST["name"];
			  $did = $_POST["did"];
			  $dep = $_POST["dep"];
			  $des = $_POST["des"];
			  $gender = $_POST["gender"];
			  $city = $_POST["city"];
			  $fname = $_POST["fname"];
			  $mname = $_POST["mname"];
			  $phone = $_POST["phone"];
			  $nid = $_POST["nid"];
			  $dob = $_POST["dob"];
			  
			  $query = "insert into modarator values('$name', '$did', '$dep', '$des','$gender','$city','$fname','$mname','$phone','$nid','$dob')";
			  //echo $query;
			  runQuery($query);
			  //header("Location: output.php");
		  }
		 
	?>