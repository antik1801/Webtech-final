<?php 
    require_once '../models/database.php';
	$query = "delete from register where uname = '". $_GET["admin"]. "'";
	//echo $query;
	runQuery($query);
	header("Location: edit_admins.php");
?>