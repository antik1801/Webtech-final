<?php
    require_once '../models/database.php';
	$hint = $_GET["hint"];
	$data = getResult("select jname from jobs where jname like '%$hint%'");
	if ($hint == "") {
	    echo "";
	}
	else if (count($data) == 0) {
		echo "<span style='color:red'>No data found</span>";
	} 
	else {
		foreach($data as $i) {
		   echo "<span style='color: red;'> ".$i["jname"]." </span> <br>";
		}
	}
?>