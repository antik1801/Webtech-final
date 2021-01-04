<!Doctype html>
<?php require "antikvalidation.php"; ?>

<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<style>
			body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("map.jpg");
}

* {
  box-sizing: border-box;
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}


.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
		</style>
	</head>
	<body>
		<h1 align="center">CAREER FORAGE</h1>
		<p align="center">Please contact Us if you have any quaries with your proper information</p>
	<div class="container">
		<div style="text-align:center">
			<h1>Contact Us</h1>
			<p>We always care about your future</p>
		</div>
		<div class="row">
			<div class="column">
				<img src="/w3images/map.jpg" style="width:100%">
			</div>
			<div class="column">
				<form action="" method="post">
					<label for="fname">First Name</label>
					<label style="color: red">
						<?php echo $err_fname; ?>
					</label>
					<input type="text" id="fname" name="firstname" placeholder="Your first name..">
					<label for="lname">Last Name</label>
					<label style="color: red">
						<?php echo $err_fname; ?>
					</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name.">
					<label for="country">Country</label>
					<select id="country" name="country">
						<option value="bangladesh">Bangladesh</option>
						<option value="india">India</option>
						<option value="sri-lanka">Sri-lanka</option>
						<option value="usa">USA</option>
						<option value="canada">Canada</option>
						<option value="australia">Australia</option>
						<option value="uk">England</option>
					</select>
					<label for="email">Email Address</label>
					<label style="color: red">
						<?php echo $errMail; ?>
					</label>
					<input type="text" id="email" name="email" placeholder="Enter your email address...">
					<label for="subject">Subject</label>
					<textarea id="subject" name="subject" placeholder="Please write your quaries" style="height:170px"></textarea>
					<input type="submit" value="submit" name="submit">
					</form>	
			</div>
		</div>
	</div>
	</body>
</html>