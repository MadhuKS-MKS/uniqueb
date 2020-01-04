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
				<form method="post" action="cinsert.php">
				<div class="form-group">
					<label>Course Name : </label><input type="text" name="c_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Course Validity : </label><input type="text" name="validity" class="form-control">
				</div>
				<div class="form-group">
					<label>Fees : </label><input type="text" name="fees" class="form-control">
				</div>
				
			<input type="Submit" name="submit" class="btn btn-primary" value="Add"><br>
			</div>
			</div>
		</div>
		</form>
		
	</body>
</html>