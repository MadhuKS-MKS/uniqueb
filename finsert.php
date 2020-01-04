
<?php
			if(isset($_POST['submit']))
			{
				include("connection.php");
				$name = $_POST['name'];
				$email = $_POST['email'];
				$msg = $_POST['message'];

				
				$query = mysql_query("INSERT INTO `feedbk`(`f_id`, `name`, `email`, `msg`) VALUES ('','$name','$email','$msg')") or die(mysql_error()); 
				header("location:contact.php?success");
			}
?>
	