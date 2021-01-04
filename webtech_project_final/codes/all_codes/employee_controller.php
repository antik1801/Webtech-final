<?php 
          require_once 'database.php';
		  
		   if(isset($_POST["dashboard"])){
		  header("Location: Dashboard.php");
		  }
		  if (isset($_POST["register"])) {
			  echo "Successfully Inserted";   
			  $ename = $_POST["ename"];
			  $ed = $_POST["ed"];
			  $edes = $_POST["edes"];
			  $uename = $_POST["uename"];
			  $epass = $_POST["epass"];
			  $egender = $_POST["egender"];
			  $ecity = $_POST["ecity"];
			  $ephone = $_POST["ephone"];
			  $enid = $_POST["enid"];
			  $edob = $_POST["edob"];
			  
			  $query = "insert into employee values('$ename', '$ed','$edes','$uename','$epass','','$egender','$ecity','$ephone','$enid','$edob')";
			  //echo $query;
			  runQuery($query);
			  //header("Location: output.php");
		  }
		 
	?>