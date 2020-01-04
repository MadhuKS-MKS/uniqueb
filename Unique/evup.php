<?php
			if(isset($_POST['submit']))
			{
				include("connection.php");
				
				$sno = $_GET['sno'];
				$ename = $_POST['ename'];
				$type = $_POST['type'];
				$evdate = $_POST['evdate'];
				$place = $_POST['place'];
				
				
					$query = mysql_query("UPDATE `event` SET `ename`='$ename',`type`='$type',`evdate`='$evdate',`place`='$place' WHERE sno='$sno'") or die(mysql_error()); 
					header("location:events.php?success");
				
				
			}
				
?>
