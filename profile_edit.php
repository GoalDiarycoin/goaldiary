<?php	
	include 'login_check.php';
	include 'db.php';
	include 'global.php';
	include 'profile_edit_action.php';
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
					<div class="row" style="border: 1px solid;padding: 10px;border-color: lightgray;">
						<div class="col-md-7 col-sm-6 col-xs-6 contact-form" >
							<form class="row" method="post" enctype='multipart/form-data'>
								<?php if($err != "" ){ ?>
									<div class="col-md-12 col-sm-12 col-xs-12 form-group" style='color:red;'>
										<?php echo $err; ?>
									</div>
								<?php } ?>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<label>Full Name</label>
									<input type="text" class="form-control" placeholder="Full Name" name="name" id="name" required="" value="<?php echo $name; ?>" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<label>Mail ID</label>
									<input type="text" class="form-control" placeholder="Email ID" name="mailid" id="mailid" required="" value="<?php echo $mailid; ?>" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<label>Contact Number</label>
									<input type="text" class="form-control" placeholder="Contact Number" name="phno" id="phno" required="" value="<?php echo $phno; ?>" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<label>Sex</label>
									<br/>
									<label style='font-weight:normal;cursor:pointer'><input type="radio" placeholder="Sex" name="sex" id="sex_m" required="" value="Male" 
										<?php 
											if($sex=="Male")
											{
												echo "checked";
											}
										?>
									/> Male</label>
									<label style='font-weight:normal;cursor:pointer'><input type="radio" placeholder="Sex" name="sex" id="sex_f" required="" value="Female" 
										<?php 
											if($sex=="Female")
											{
												echo "checked";
											}
										?>
									/> Female</label>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<label>Date of Birth</label>
									<input type="text" class="form-control" placeholder="Enter Date of birth" name="dob" id="dob" value="<?php echo $dob; ?>" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<label>Avatar</label>
									<input type="file" accept="image/*" class="form-control" placeholder="Select Avatar" name="image" id="image" />
								</div>
								<div class="col-md-2 col-sm-12 col-xs-12 send-btn">
									<input type="submit" value="Update" id="submit" name="btn_update" />
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