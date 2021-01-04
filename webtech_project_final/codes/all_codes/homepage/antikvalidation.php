<?php

session_start();
$err_fname = "";
    $err_lname = "";
    $errMail = "";
	$error="";
    if (isset($_POST["submit"])) {
       if (empty($_POST["firstname"]))

		   {
       	 $err_fname = "[ required ]";
       }
       if (empty($_POST["lastname"])) {
       	 $err_lname = "[ required ]";
       }
       if (empty($_POST["email"])) {
   	  	$errMail = "[ required ]";
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $errMail = "[ Invalid format ]";
   	  	}
   	  }
   	  else $errMail = "[ Invalid format ]";
    }
?>