<?php
   if (isset($_POST["call"])) {
   	 header("Location: antik.php");
   }
   if (isset($_POST["us"])) {
   	 header("Location: aboutus.php");
   }
   if (isset($_POST["logg"])) {
   	 header("Location: ../login.php");
   }
?>
<html>
<head>
	<title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<table>
	<tr>
	<td>
   <form action="" method="post">
	   	<div class="header">
	   	 <h1>Career Forage</h1>
	   	 <input type="submit" name="us" value="About us"> 
	   	 <input type="submit" name="call" value="Contact"> 
	   	 <input type="submit" name="log" value="Login">   
		 <input type="submit" name="logg" value="Admin Panel">
		</td>
		 </tr>
	   </div>
	   </table>
	   <div class="container">
	     <div class="job">
	      <div class="img1">
		  <img scr="/job1.jpg">
		  </div>
	     </div>
	     <div class="job">
	      <div class="img2"></div>
	     </div>
	     <div class="job">
	      <div class="img3"></div>
	     </div>
	     <div class="job">
	      <div class="img4"></div>
	     </div>
	   </div>
   </form>
</body>
</html>