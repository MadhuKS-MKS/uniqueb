<?php
			if(isset($_POST['submit']))
			{
				include("connection.php");
				
				$c_id = $_GET['c_id'];
				$c_name = $_POST['c_name'];
				$validity = $_POST['validity'];
				$fees = $_POST['fees'];
								
				$query = mysql_query("UPDATE `course` SET `c_name`='$c_name',`validity`='$validity',`fees`='$fees' WHERE c_id='$c_id'") or die(mysql_error()); 
				header("location:course.php?success");
			}
?>
