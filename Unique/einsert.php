
<?php
			if(isset($_POST['submit']))
			{
				include("connection.php");
				$ename = $_POST['ename'];
				$type = $_POST['type'];
				$evdate = $_POST['evdate'];
				$place = $_POST['place'];
				/* //$photo = $_FILES['photo'];
     
				$file = rand(1000,100000)."-".$_FILES['photo']['name'];
				$file_loc = $_FILES['photo']['tmp_name'];
				$file_size = $_FILES['photo']['size'];
				$file_type = $_FILES['photo']['type'];
				$folder="uploads/";
	
				// new file size in KB
				$new_size = $file_size/2048;  
				// new file size in KB
	
				// make file name in lower case
					$new_file_name = strtolower($file);
				// make file name in lower case
	
				$final_file=str_replace(' ','-',$new_file_name);
	
				if(move_uploaded_file($file_loc,$folder.$final_file)) */
				{
				
					$query = mysql_query("INSERT INTO `event`(`sno`, `ename`, `type`, `evdate`, `place`) VALUES ('','$ename','$type','$evdate','$place')") or die(mysql_error()); 
					header("location:events.php?success");
				
				}
			}
?>
