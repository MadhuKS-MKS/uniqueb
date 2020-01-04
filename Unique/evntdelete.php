<?php
	include("connection.php");
	$sno = $_GET['sno'];
	$query = mysql_query("DELETE FROM `event` WHERE sno='$sno'") or die(mysql_error());
	header("location:events.php?deleted");
?>
