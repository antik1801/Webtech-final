<?php
    require_once 'database.php';
	$hint = $_GET["hint"];
	$data = getResult("select name from register where name like '%$hint%'");
	if (count($data) == 0) {
		echo "<span style='color:red'>No data found</span>";
	} 
	else {
		foreach($data as $i) {
		   echo "<span style='color: red;'> ".$i["name"]." </span> <br>";
		}
	}
?>