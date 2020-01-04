<?php include("inc/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include("inc/head.php"); ?>

</head>

<body>

    <!-- Navigation -->
	<?php include("inc/menu.php"); ?>

    <!-- Page Content -->
    <div class="container">
		
        <div class="row tabletrans" >
		<div class="well">
		<!-- <table  class="table table-bordered">
			<tr>
				<th>S.No</th>
				<th>Event Name</th>
				<th>Type</th>
				<th>Event Time</th>
				<th>Place</th>
				
				<th>Actions </th>
				
			</tr>
			 <?php
				include("connection.php");
				$query=mysql_query("SELECT * FROM `event` ");
				$i = 1;
				while($row = mysql_fetch_array($query)){
				
			?> 
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['ename']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['evdate']; ?></td>
				<td><?php echo $row['place']; ?></td>
				
				<td> 
				<div class="btn-group">
					<a href="evntdelete.php?sno=<?php echo $row['sno']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>
				
					<a href="evntup.php?sno=<?php echo $row['sno']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
				</div>
				</td>
			</tr>
				<?php
					}
				?>
		</table> -->
		
		<div class="row">
		<div class="col-md-6">
		<div class="pull-right">
		
			<a href="galryinsrt.php" class="btn btn-info btn-sm" >Add </a>
			
		
		</div>
		</div>
	
		<div class="pull-left">
		
			<a href="home.php" class="btn btn-info btn-sm" >Back to Home</a>
			
		</div>
		</div>
		</div>
    </div>
	</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
