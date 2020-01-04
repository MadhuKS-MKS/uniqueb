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
       <h1>Gallery</h1>
   </div>
    
       <div class="row pad-top-botm  ">
	   <?php	
			include("connection.php");
			$sql = mysql_query("SELECT * FROM gallery") or die(mysql_error());
			while($gal = mysql_fetch_array($sql)){
				
				
				$image = $gal['img'];
				
				if($image == ""){
					$image ="";
				}
				else{
					$image = "Unique/".$gal['img'];
				}
				
				echo ' <div class="col-md-3">
					<div class="thumbnail upfront-trans">
						<img src="'.$image.'" style="max-height:150px;" class="img-responsive">
					</div>
			</div>';
			}
			
			?>
           
		</div>
    
   
    <?php include("assets/inc/footer.php")?>
   
</body>
</html>
