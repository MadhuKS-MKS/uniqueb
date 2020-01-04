
<?php
			if(isset($_POST['submit']))
			{
				include("connection.php");
				$c_name = $_POST['c_name'];
				$validity = $_POST['validity'];
				$fees = $_POST['fees'];

				
				$query = mysql_query("INSERT INTO `course`(`c_id`, `c_name`, `validity`, `fees`) VALUES ('','$c_name','$validity','$fees')") or die(mysql_error()); 
				header("location:course.php?success");
			}
?>
