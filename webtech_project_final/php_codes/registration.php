<html>
<head>
	<title>Index Page</title>
	<?php 
	    require_once 'php codes/user_control.php';
        require_once 'php codes/user_login.php';		
	?>
	<script src="validate_registration.js"> </script>
</head>
<body>
	 <form action="" onsubmit="return validate()" method="post">
	 	 <p id="test"> </p>
	 	 <table>
	 	 	<tr>
	 	 		<td>
	 	 			Name:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="name" name="name">
					
	 	 		</td>
				<td id="err_name"> </td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Username:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="uname" name="uname">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Password:
	 	 		</td>
	 	 		<td>
	 	 			<input type="Password" id="pass" name="pass">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Email:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="mail" name="mail">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Phone:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="phone" name="phone">
	 	 		</td>
	 	 	</tr>
			<tr>
			   <td>
			      <select id="city">
				     <option selected="selected" disabled="disabled"> Choose an option </option>
					 <option> Barisal </option>
					 <option> Khulna </option>
				  </select>
			
			   </td>
			   <td id="err_city"> </td>
			</tr>
			<td>
	 	 			Date of birth:
	 	 		</td>
	 	 		<td>
	 	 			<input type="date" id="dob" name="dob">
	 	 		</td>
				<td id="err_dob"> </td>
	 	 	<tr>
			    <td>
				   <a href="output.php"> Click Here </a>
				</td>
	 	 		<td colspan="2" align="center">
	 	 			<input type="submit" name="register" value="register">
	 	 			<input type="submit" name="login" value="login">
	 	 		</td>
	 	 	</tr>
	 	 </table>
	 </form>
</body>
</html>