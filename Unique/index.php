<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	 <!-- custom CSS -->
    <link href="css/style.css" rel="stylesheet">
	
	 <!-- custom CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


  <!-- 
    <!-- Navigation 
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display 
           <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Manage Events</a>
                    </li>
                    <li>
                        <a href="#">Manage Course</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
					<li>
                        <a href="#">Upcomming Events</a>
                    </li>
					<li>
                        <a href="#">Upload Media</a>
                    </li>
					<li>
                        <a href="#">Manage feedback</a>
                    </li>
                </ul>
            </div>
             /.navbar-collapse 
        </div>
        /.container 
    </nav>
 -->
    <!-- Page Content -->
    <div class="container">

        <div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="well login-container">
				<?php
					if(isset($_GET['login_first'])){
						echo '<div class="alert alert-danger">
							<p class="text-center"><b>Error..!!!</b> You must login first</p>
						</div>';
					}
					else if(isset($_GET['loggedout'])){
						echo '<div class="alert alert-success">
							<p class="text-center"><b>Success..!!!</b> Logged Out Successfully....!!</p>
						</div>';
					}
				
				?>
					<form method="post" action="">
						<div class="form-group">
							<label>User Name </label>
							<input type="text" class="form-control" name="uname" placeholder="Enter Username">
						</div>
						
						<div class="form-group">
							<label>Password  </label>
							<input type="password" class="form-control" name="password" placeholder="Enter Password">
						</div>
						
							<input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="LOGIN">
					</form>
					
					<?php
						include("connection.php");
						if(isset($_POST['login'])){
							
							$uname = $_POST['uname'];
							$password = $_POST['password'];
							
							$query = mysql_query("SELECT * FROM `admin` WHERE username = '$uname' and password = '$password'") or die(mysql_error());
							
							$row = mysql_fetch_array($query);
							
							if($row){
								session_start();
								$_SESSION['username'] = $row['username'];
								header("location:home.php?logged_in");
							}
							else
							{
								echo '<h5 style="color:#f30; text-align:center;"> Invalid Username and Password. </h5>';
							}
							
						}
					?>
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
