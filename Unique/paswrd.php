<?php include("inc/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include("inc/head.php"); ?>

</head>

<body>

    <!-- Navigation -->
	<?php include("inc/menu.php"); ?>
	
	<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>

  
	<?php
include("connection.php");
if(count($_POST)>0) {
$result = "SELECT * from admin WHERE username='$username'";
$m=mysql_query($result);
$row=mysql_fetch_array($m);
if($_POST["currentPassword"] == $row["password"]) {
$e="UPDATE admin set password='" . $_POST["newPassword"] . "' WHERE username='$username'";
$res=mysql_query($e);
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>
	
		<div class="container">
        <div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="well login-container">
				<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">

				<?php if(isset($message)) { 
					echo '<div class="alert alert-info">
						<p>'.$message.'</div>'; 
					} 
				?>
						<div class="form-group">
							<label>Current Password </label>
							<input type="password" class="form-control" name="currentPassword" placeholder="Enter Username">
						</div>
						
						<div class="form-group">
							<label>New Password  </label>
							<input type="password" class="form-control" name="newPassword" placeholder="Enter old Password">
						</div>
						<div class="form-group">
							<label>Confirm Password  </label>
							<input type="password" class="form-control" name="confirmPassword" placeholder="Enter new Password">
						</div>
							<input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Change">
					</form>
					
				</div>
			</div>
		</div>
		</div>
		<?php include("inc/bottom.php"); ?>
	</body>
</html>