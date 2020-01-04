<?php include("inc/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include("inc/head.php"); ?>

</head>

<body>

    <!-- Navigation -->
	<?php include("inc/menu.php"); ?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="well form">
				<form method="post" action="nwsinsert.php" enctype="multipart/form-data">
				<div class="form-group">
					<label>Enter Title : </label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Description: </label>
					<textarea type="text" name="desc" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Date </label>
					<input type="text" name="date" class="form-control">
				</div>
				
				<div class="form-group">
					<label>URL : </label>
					<input type="text" name="url" class="form-control">
				</div>
				<div class="form-group">
					<label>Choose image : </label>
					<input type="file" name="photo" class="form-control">
				</div>
				
			<input type="Submit" name="submit" class="btn btn-primary" value="upload news"><br>
			</div>
			</div>
		</div>
		</form>
		
		
	</body>
</html>