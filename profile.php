<?php	
	include 'login_check.php';
	include 'db.php';
	include 'global.php';
	include 'profile_action.php';
	include 'header.php';
	
?>
	
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner contact-banner" style="background-image:url('images/user_banner.jpg');">
			<!-- Container -->
			<div class="container">
				<h3>Profile</h3>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Profile</li>
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
					<?php if (isset($_GET['success'])) { ?>
						<div class="col-md-12 col-sm-12 col-xs-12" style='border:1px solid;border-color:lightgray;background-color:lightgreen;padding:10px;'>
							<label>Successfully updated profile !</label>
						</div>
						<div style="clear:both;"></div>
						<br/>
					<?php } ?>
					<div class="row" style="border: 1px solid;padding: 10px;border-color: lightgray;">
						<div class="col-md-7 col-sm-6 col-xs-6 contact-form">
							<form class="row" method="post">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<h3><span>Name:</span> <?php echo $name; ?></h3>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<h3><span>Email:</span> <?php echo $mailid; ?></h3>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<h3><span>Contact Number:</span> <?php echo $phno; ?></h3>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<h3><span>Username:</span> <?php echo $username; ?></h3>
								</div>
								
								<div class="col-md-2 col-sm-12 col-xs-12 send-btn">
									<input type="button" value="Edit" onclick="window.location ='profile_edit.php'" />
								</div>
								
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="alert-msg" id="alert-msg"></div>
								</div>
							</form>
						</div>
						<div class="col-md-5 col-sm-6 col-xs-6 contact-detail">
							<?php if($image=="") { ?>
								<?php if($sex == "Male") { ?>
									<img width='370' src="images/user-icon-6.png"/>
								<?php } else if($sex == "Female") { ?>
									<img width='370' src="images/women-business-user-icon-44928.png"/>
								<?php } else { ?>
									<img width='370' src="images/user-46.png"/>
								<?php } ?>
							<?php } else { ?>
								<img width='370' src="images/profiles/<?php echo $image; ?>"/>
							<?php } ?>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Contact Form /- -->
			
		</main>
		
<?php
	include 'footer2.php';
?>