<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'aboutus_action.php';
	include 'header.php';
	
?>
	
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner" style="background-image:url('images/about_us_banner.jpg');">
			<!-- Container -->
			<div class="container">
				<h3>ABOUT US</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">ABOUT US</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
	
		<main>
			
			<!-- Contact Section -->
			<div class="container-fluid no-left-padding no-right-padding contact-section">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-6 col-xs-6 contact-form">
							<h3>About Us</h3>
							<div style="text-align:justify;">
								<?php echo $about_us_detailed; ?>
							</div>
						</div>
						<?php include 'contact_side_bar.php'; ?>
					</div>
				</div><!-- Container /- -->
			</div><!-- Contact Form /- -->
			
		</main>
		
<?php
	include 'footer2.php';
?>