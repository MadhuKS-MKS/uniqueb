
<?php
include("inc/session.php"); 
			if(isset($_POST['submit']))
			{
				include("connection.php");
				$title = $_POST['title'];
				$desc = $_POST['desc'];
				$url = $_POST['url'];
				$date = $_POST['date'];
				$file = rand(1000,100000)."-".$_FILES['photo']['name'];
    $file_loc = $_FILES['photo']['tmp_name'];
	$file_size = $_FILES['photo']['size'];
	$file_type = $_FILES['photo']['type'];
	$folder="News/";
	
	// new file size in KB
	$new_size = $file_size/2048;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
				
				$query = mysql_query("INSERT INTO `news`(`n_id`, `title`, `date`, `desc`, `photo`, `source`, `url`) VALUES ('','$title','$date','$desc','$final_file','$username','$url')") or die(mysql_error()); 
				header("location:news.php?success");
			}
			}
?>