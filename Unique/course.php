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
		<table  class="table table-bordered">
			<tr>
				<th>C.No</th>
				<th>Course Name</th>
				<th>Validity</th>
				<th>Fees</th>
				
				<th>Actions </th>
				
			</tr>
			<?php
				include("connection.php");
				$query=mysql_query("SELECT * FROM `course` ");
				$i = 1;
				while($row = mysql_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['c_name']; ?></td>
				<td><?php echo $row['validity']; ?></td>
				<td><?php echo $row['fees']; ?></td>
								
				<td> 
				<div class="btn-group">
					<a href="c_delete.php?c_id=<?php echo $row['c_id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>
				
					<a href="c_up.php?c_id=<?php echo $row['c_id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
				</div>
				</td>
			</tr>
			<?php
				}
				?>
		</table>
		
		<div class="row">
		<div class="col-md-6">
		<div class="pull-right">
		
			<a href="c_insert.php" class="btn btn-info btn-sm" >Add Course</a>
			
		
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

  

</body>
</html>
