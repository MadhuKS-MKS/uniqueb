 <!DOCTYPE html>

<html lang="en">
	<?php include("assets/inc/head.php")?>
<body>
	<?php include("assets/inc/menu.php")?>
	
    <div class="contact-hdr">
        <h1>CONTACT US</h1>
    </div>
    <!--./ Gereral Subhead End -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6  col-sm-12">
                    
                    <br>
                    <p>
                        Fr. Saleen Joseph
                            <br />
                        Call: +91 9448441393, +91 7760811393 
                            <br />
                        e-mail: uniquebelthangady@gmail.com
                             <br />
                    </p>
                </div>
                <div class="col-lg-6 col-md-6  col-sm-12">
                    <h3>Need Help ? Write Us. </h3>
                    <hr />
                    <form  method="post" action="finsert.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" required="required" placeholder="Email address" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" name="message" required="required" class="form-control" rows="4" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> 

            </div>
        </div>

    </section>
    <!--./ Main Contact end -->
    <div>
        <iframe class="cnt" src="https://www.google.com/maps/place/SANTHOM+TOWER/@12.9914119,75.2803042,213m/data=!3m1!1e3!4m5!3m4!1s0x0:0x504108072099d137!8m2!3d12.9914119!4d75.2810347?hl"></iframe>
    </div>
    <!--./ Map end -->
    <?php include("assets/inc/footer.php")?>
   
</body>
</html>
