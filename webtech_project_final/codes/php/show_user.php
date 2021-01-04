<?php
    require_once '../models/database.php';
	$hint = $_GET["hint"];
	$data = getResult("select name from person where name like '%$hint%'");
	if ($hint == "") {
	    echo "";
	}
	else if (count($data) == 0) {
		echo "<span style='color:red'>No data found</span>";
	} 
	else {
		foreach($data as $i) {
		   echo "<span style='color: red;'> ".$i["name"]." </span> <br>";
		}
	}
?>