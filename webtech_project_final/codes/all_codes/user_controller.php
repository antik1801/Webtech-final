<?php 
     session_start();
	 require_once 'database.php';
	 if (isset($_POST["login"])) {
		 $uname = $_POST["uname"];
		 $pass = $_POST["pass"];
		 $_SESSION["username"] = $uname;
		 setcookie("username", $uname, time()+10);
		 header("Location: Dashboard.php");
	 } 
     else {
		 $_SESSION["username"] = "";
	 }		 
?>