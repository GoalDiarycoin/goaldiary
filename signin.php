<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'signin_action.php';
	include 'header.php';
	
?>
	
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner contact-banner" style="background-image:url('images/user_banner.jpg');">
			<!-- Container -->
			<div class="container">
				<h3>Sign in</h3>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Sign in</li>
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
							<h3>Sign In</h3>
							<form class="row" method="post">
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="text" class="form-control" placeholder="Username" name="username" id="username" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="password" class="form-control" placeholder="Password" name="password" id="password" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 send-btn">
									<input type="submit" value="Sign In" id="submit" name="btn_login" />
								</div>
								<!--<div class="col-md-2 col-sm-12 col-xs-12 send-btn">
									<input type="button" value="Register" onclick="window.location ='register.php'" />
								</div>-->
								
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="alert-msg" id="alert-msg"></div>
								</div>
							</form>
						</div>
						<?php include 'contact_side_bar.php'; ?>
					</div>
				</div><!-- Container /- -->
			</div><!-- Contact Form /- -->
			
		</main>
		
<?php
	include 'footer2.php';
?>