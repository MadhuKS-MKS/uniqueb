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
				<form method="post" action="einsert.php" enctype="multipart/form-data">
				<div class="form-group">
					<label>Event Name : </label>
					<input type="text" name="ename" class="form-control">
				</div>
				<div class="form-group">
					<label>Event Type : </label>
					<input type="text" name="type" class="form-control">
				</div>
				<div class="form-group">
					<label>Time : </label>
					<input type="text" name="evdate" class="form-control">
				</div>
				<div class="form-group">
					<label>Place : </label>
					<input type="text" name="place" class="form-control">
				</div>
				
			<input type="Submit" name="submit" class="btn btn-primary" value="Add"><br>
			</div>
			</div>
		</div>
		</form>
		
		
	</body>
</html>