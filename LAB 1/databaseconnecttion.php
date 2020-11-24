<!filetype Database>
<?php
  $username="root";
  $servername="localhost";
  $password="";
  $db_name="";
  
  $conn = mysqli_connect($servername,$username,$password,$db_name);
  if(!conn){
	  die("Connection failed: " . mysqli_connection_error());
  }
  $query="SELECT * FROM users";
  $results = mysqli_query($conn,$query);
  if(mysqli_num_rows($results) > 0){
  
  
  }
?>