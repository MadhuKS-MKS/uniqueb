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

        <div class="row">
			<div class="col-md-4 mybox">
				<a href="#">
				<div class="well">
					<i class="fa fa-home fa-5x"></i>
					<h4>Dashboard</h4>
			   </div>
				</a>
			</div>
			
			<div class="col-md-4 mybox">
				<a href="events.php">
				<div class="well">
					<i class="fa fa-th-list fa-5x"></i>
					<h4>Manage Events</h4>
			   </div>
			   </a>
			</div>
			
			<div class="col-md-4 mybox">
				<a href="course.php">
				<div class="well">
					<i class="fa fa-book fa-5x"></i>
					<h4>Manage Course</h4>
			   </div>
			   </a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 mybox">
				<a href="news.php">
				<div class="well">
					<i class="fa fa-users fa-5x"></i>
					<h4>Manage News</h4>
			   </div>
			   </a>
			</div>
			
			<div class="col-md-4 mybox">
				<a href="#">
				<div class="well">
					<i class="fa fa-calendar fa-5x"></i>
					<h4>Upcomming Events</h4>
			   </div>
			   </a>
			</div>
			
			<div class="col-md-4 mybox">
				<a href="ginsert.php">
				<div class="well">
					<i class="fa fa-upload fa-5x"></i>
					<h4>Upload Media</h4>
			   </div>
			   </a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 mybox">
				<a href="feed.php">
				<div class="well">
					<i class="fa fa-comment fa-5x"></i>
					<h4>Manage Feedback</h4>
			   </div>
			   </a>
			</div>
			
			<div class="col-md-4 mybox">
				<a href="paswrd.php">
				<div class="well">
					<i class="fa fa-key fa-5x"></i>
					<h4>Change Password</h4>
			   </div>
			   </a>
			</div>
			
			<div class="col-md-4 mybox">
				<a href="logout.php">
				<div class="well">
					<i class="fa fa-sign-out fa-5x"></i>
					<h4>Logout</h4>
			   </div>
			   </a>
			</div>
		</div>

    </div>
    <!-- /.container -->

   <?php include("inc/bottom.php"); ?>

</body>
</html>
