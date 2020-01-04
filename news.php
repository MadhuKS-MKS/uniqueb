 <!DOCTYPE html>

<html lang="en">
	<?php include("assets/inc/head.php")?>
<body>
	<?php include("assets/inc/menu.php")?>
	<div class="div-social-top">
		<i class="fa fa-globe "></i>E-mail:  contact@uniquebelthangady.org   | <i class="fa fa-mobile "></i>Call: : +91 9448441393, +91 7760811393 
    </div>
	    <!--./ Social Div End -->
   <div class="general-subhead">
       <h1>News & Events</h1>
   </div>
   <p>&nbsp;</p>
   	<div class="container">
			
			<div class="row">
   <?php
    include("connection.php");
			$sql = mysql_query("SELECT * FROM news") or die(mysql_error());
				$i = 1;
				while($row = mysql_fetch_array($sql)){
					
					$image = $row['photo'];
					if($image == "")
					{
						$image = "images/noimage.png";
					}
					else{
						$image = "Unique/News/".$row['photo'];
					}
	?>
	
			
            <div class="col-md-12 ">
               <div class="panel panel-default mypanel">
					<div class="panel-heading">
						<?php echo $row['title']; ?>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2">	
								<img src="<?php echo $image; ?>" class="img-responsive user-img " width="150" height="150" border="1">
							</div>
							
							<div class="col-md-10">
								<?php echo nl2br($row['desc']); ?>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<p> <?php echo $row['source']; ?>
						<span class="pull-right"><?php echo $row['date']; ?></span></p>
					</div>
			   </div>
            </div>
		
			<?php 
				}
				?>
					</div>
						</div>
    <?php include("assets/inc/footer.php")?>
</body>
</html>