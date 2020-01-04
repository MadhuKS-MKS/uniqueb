<?php include("inc/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include("inc/head.php"); ?>

</head>

<body>

    <!-- Navigation -->
	<?php include("inc/menu.php"); ?>
		<div class="row ">
		
		

			<div class="col-md-6 col-md-offset-3 ">
			<div class="well form">
				<form method="post" action="ginst.php" enctype="multipart/form-data">
				<div class="form-group">
					<label>Choose Image : </label>
					<input type="file" name="files[]" class="form-control" multiple="multiple">
				</div>
			<input type="Submit" name="submit" class="btn btn-primary" value="Upload Gallery"><br>
			</form>
			</div>
			
			
			</div>
		</div>