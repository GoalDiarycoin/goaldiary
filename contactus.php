<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'contactus_action.php';
	include 'header.php';
	
?>
	
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner" style="background-image:url('images/contact-banner.jpg');">
			<!-- Container -->
			<div class="container">
				<h3>CONTACT US</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">CONTACT US</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
	
		<main>
			
			<!-- Contact Section -->
			<div class="container-fluid no-left-padding no-right-padding contact-section">
				<!-- Container -->
				<div class="container">
					<!-- Contact Map -->
					<div class="map-canvas" >
						<?php echo $maps; ?>
					</div>
					<!-- Contact Map /- -->
					<div class="row">
						<div class="col-md-7 col-sm-6 col-xs-6 contact-form">
							<h3><span>Get in</span> Touch with Us</h3>
							<form class="row" action='contactus.php'>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="text" class="form-control" placeholder="Name" name="contact-name" id="input_name" required="" />
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 form-group">
									<input type="text" class="form-control" placeholder="Email" name="contact-email" id="input_email" required="" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<textarea class="form-control" placeholder="Message" name="contact-message" id="contact_message"></textarea>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 send-btn">
									<input type="submit" value="SEND MESSAGE" id="btn_submit" />
								</div>
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