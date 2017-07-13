<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'register_action.php';
	include 'header.php';
	
?>
	
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner contact-banner" style="background-image:url('images/user_banner.jpg');">
			<!-- Container -->
			<div class="container">
				<h3>Register</h3>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Register</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
	
		<main>
			
			<!-- Contact Section -->
			<div class="container-fluid no-left-padding no-right-padding contact-section" >
				<!-- Container -->
				<div class="container">
					<!-- Contact Map -->
					<!--<div id="map-canvas-contact" class="map-canvas" data-lat="40.729261" data-lng="-73.989230" data-string="09, Downtown St, USA" data-zoom="10"></div>-->
					<!-- Contact Map /- -->
					<div class="row">
						<div class="col-md-7 col-sm-6 col-xs-6 contact-form">
							<h3>Register</h3>
							<form class="row" method="post">
								<?php if($err != "" ){ ?>
									<div class="col-md-12 col-sm-12 col-xs-12 form-group" style='color:red;'>
										<?php echo $err; ?>
									</div>
								<?php } ?>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="text" class="form-control" placeholder="Full Name" name="name" id="name" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="text" class="form-control" placeholder="Email ID" name="mailid" id="mailid" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="text" class="form-control" placeholder="Contact Number" name="phno" id="phno" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="text" class="form-control" placeholder="Username" name="username" id="username" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="password" class="form-control" placeholder="Password" name="password" id="password" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="password" class="form-control" placeholder="Repeat Password" name="password1" id="password1" required="" />
								</div>
								<div class="col-md-2 col-sm-12 col-xs-12 send-btn">
									<input type="submit" value="Register" id="submit" name="btn_register" />
								</div>
								
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="alert-msg" id="alert-msg"></div>
								</div>
							</form>
						</div>
						<div class="col-md-5 col-sm-6 col-xs-6 contact-detail">
							<h3><span>Contact</span> Details</h3>
							<p>Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong. Rockin' and rollin' all week long.</p>
							<span><i class="icon icon-Phone2"></i><a href="tel:+011234567890">(+01) 123 456 7890</a></span>
							<span><i class="icon icon-Mail"></i><a href="mailto:example@example.com">admin@maxmagazine.com</a></span>
							<span><i class="icon icon-Pointer"></i> 09, Downtown St, USA</span>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Contact Form /- -->
			
		</main>
		
<?php
	include 'footer2.php';
?>