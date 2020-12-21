<?php
	require_once 'database/database.php';
	if(isset($_POST["login"]))
	{
		if(isUser($_POST["username"],$_POST["password"]))
		{
			header("Location: dashboard.php");
		}
		
	}
	else echo "Wrong username or password";
	if(isset($_POST["change"]))
	{
		$id=$_GET["id"];
		updateStudent($_POST["id"],$id,$_POST["credit"],$_POST["cgpa"],$_POST["did"]);
		header("Location:show_students.php");
	}
	if(isset($_POST["register"]))
	{
		addStudent($_POST["name"],$_POST["credit"],$_POST["cgpa"],$_POST["did"]);
		header:"Location:dashboard.php";
	}
	function isUser($u, $p)
	{
		$p = md5($p);
		$q = "select * from users where username='$u' and password='$p'";
		$data = getResult($q);
		if(count($data) > 0) return true;
		else return false;
	}
	function getStudentData()
	{
		return getResult("select * from student");
	}
	function deleteStudent($id)
	{
		runQuery("delete from student where id='$id'");
	}
	function getDepartmentData()
	{
		return getResult("select * from department");
	}
	function addStudent($name,$credit,$cgpa,$did)
	{
		runQuery("insert into student values('".$name."','".$credit."','".$cgpa."','".$did."')");
	}
?>