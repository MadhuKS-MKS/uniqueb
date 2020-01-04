<?php
	include("connection.php");
	$c_id = $_GET['c_id'];
	$query = mysql_query("DELETE FROM `course` WHERE c_id='$c_id'") or die(mysql_error());
	header("location:course.php?deleted");
?>