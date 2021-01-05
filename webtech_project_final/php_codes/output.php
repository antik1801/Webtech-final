<?php
    require_once 'database.php';
	$query = "select * from user";
	$data = getResult($query);
	foreach($data as $i) {
		echo $i["name"] . " " . $i["username"] . "<br>";
	}
?>