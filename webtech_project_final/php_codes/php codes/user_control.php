<?php 
          require_once 'database.php';
		  if (isset($_POST["register"])) {
			  echo "Successful";    
			  $name = $_POST["name"];
			  $username = $_POST["uname"];
			  $email = $_POST["mail"];
			  $pass = $_POST["pass"];
			  // insert into user values ('Antik', 'antik', 'antik@', '123');
			  $query = "insert into user values('$name', '$username', '$email', '$pass')";
			  runQuery($query);
			  header("Location: output.php");
		  }
	?>