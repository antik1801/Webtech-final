<h1> Edit page</h1>
<?php
	require_once "db_connect.php";
	$id = $_GET["id"];
	$query = "SELECT * FROM USERS WHERE id=$id";
	$user = get($query);
	$user = $user[0];
	//print_r($query);
	if(isset($_POST["change"]))
	{
     $target_dir = "storage/profile-pic/";
	 $target_file = "storage/profile-pic/" .basename($_FILES["profile_pic"]["name"]);
    move_uploaded_file($_FILES["profile_pic"]["tmp_name"],$target_file);
	$query = "update users set profile_pic='$target_file' where id=$id";
	execute($query);
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	username : <input type="text" name="edit_username" value="<?php echo $user["username"];?>"><br>
	Profile Pic: <input type="file" name="profile_pic"><br>
	<input type="submit" value="change" name="change" align="right">
	<input type="submit" value="dashboard" name="dashboard" align="right">
</form>