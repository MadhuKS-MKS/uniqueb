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
				$sno =$_GET['sno'];
				$query=mysql_query("SELECT * FROM `event` WHERE sno = '$sno'");
				$row = mysql_fetch_array($query);
		?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="well form">
				<form method="post" action="evup.php?sno=<?php echo $row['sno']; ?>">
				<div class="form-group">
					<label>Event Name :</label><input type="text" name="ename" class="form-control" value="<?php echo $row['ename']; ?>">
				</div>
				<div class="form-group">
					<label>Event Type :</label><input type="text" name="type" class="form-control" value="<?php echo $row['type']; ?>">
				</div>
				<div class="form-group">
					<label>Time :</label><input type="text" name="evdate" class="form-control" value="<?php echo $row['evdate']; ?>" >
				</div>
				<div class="form-group">
					<label>Place :</label><input type="text" name="place" class="form-control" value="<?php echo $row['place']; ?>">
				</div>
				
			<input type="submit" name="submit" class="btn btn-primary" value="Update"><br>
			</div>
			</div>
		</div>
		</form>
		
		
	</body>
</html>