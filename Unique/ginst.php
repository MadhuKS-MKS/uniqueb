<?php
include("connection.php"); 
$count = 0;
		//Loop through each file.
		for($i=0; $i<count($_FILES['files']['name']); $i++){
			//Get the temnp file path.
			$tmpFilePath=$_FILES['files']['tmp_name'][$i];
			//Make Sure we have a file path.
			//$title = $_POST['title'];
			//$description = $_POST['descrp'];
			if($tmpFilePath!=""){
				$shortname=$_FILES['files']['name'][$i];
				//save the url and the file
				$filePath="gallery/".date('d-m-Y-H-i-s').'-'.$_FILES['files']['name'][$i];
				//Uploads the file into the temporary directory.
				if(move_uploaded_file($tmpFilePath,$filePath)){
					$count++;
					#$files[]=$shortname;
					
					//$sql=mysql_query("SELECT id FROM news_post ORDER BY id DESC LIMIT 1");
					//$row=mysql_fetch_row($sql);
					//$pic_id=$row[0];
				
					$query=mysql_query("INSERT INTO `gallery`(`img_id`, `img`) VALUES ('','$filePath')") or die(mysql_error());
					header("location:ginsert.php?success");
				}
			}
		}
		//echo json_encode(array('count' => $count));

	?>