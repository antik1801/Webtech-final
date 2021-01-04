<?php 
   require_once 'database.php';
   $id = $_GET["id"];
   runQuery("delete from jobs where id = $id");
   header("Location: edit_jobs.php");
?>