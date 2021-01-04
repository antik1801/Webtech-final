<?php 
          require_once 'database.php';
		  
		   if(isset($_POST["dashboard.php"])){
		  header("Location: Dashboard.php");
		  }
		  if (isset($_POST["post"])) {
			  echo "Successfully Inserted";   
			  $jname = $_POST["jname"];
			  $jp = $_POST["jp"];
			  $rs = $_POST["rs"];
			  $ass = $_POST["ass"];
			  $ad = $_POST["ad"];
			  $sal = $_POST["sal"];
			  $mr = $_POST["mr"];
			  $adv = $_POST["adv"];
			  $am = $_POST["am"];
			  
			  $query = "insert into jobs values('$jname', '$jp', '$rs', '$ass','$ad','$sal','$mr','$adv','$am','')";
			  //echo $query;
			  runQuery($query);
			  header("Location: show_all_user.php");
		  }
		 
	?>