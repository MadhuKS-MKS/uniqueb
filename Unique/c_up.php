<?php include("inc/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include("inc/head.php"); ?>

</head>

<body>

    <!-- Navigation -->
	<?php include("inc/menu.php"); ?>
		<?php
				include("connection.php");
				$c_id =$_GET['c_id'];
				$query=mysql_query("SELECT * FROM `course` WHERE c_id = '$c_id'");
				$row = mysql_fetch_array($query);
		?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="well form">
				<form method="post" action="cup.php?c_id=<?php echo $row['c_id']; ?>">
				<div class="form-group">
					<label>Course Name :</label><input type="text" name="c_name" value="<?php echo $row['c_name']; ?>"  class="form-control">
				</div>
				<div class="form-group">
					<label>Validity :</label><input type="text" name="validity" value="<?php echo $row['validity']; ?>"  class="form-control" >
				</div>
				<div class="form-group">
					<label>Fees:</label><input type="text" name="fees" value="<?php echo $row['fees']; ?>"  class="form-control">
				</div>
				
			<input type="submit" name="submit" class="btn btn-primary" value="Update"><br>
			</div>
			</div>
		</div>
		</form>
		
	</body>
</html>