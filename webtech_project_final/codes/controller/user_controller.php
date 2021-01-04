<?php 
     session_start();
	 require_once '../models/database.php';
	 if (isset($_POST["login"])) {
		 $uname = $_POST["uname"];
		 $pass = $_POST["pass"];
		 $_SESSION["username"] = $uname;
		 setcookie("username", $uname, time()+10);
		 header("Location: ../php/Dashboard.php");
	 }
     else {
		 $_SESSION["username"] = "";
	 }		 
?>