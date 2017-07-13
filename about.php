<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'about_action.php';
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
			
			<!-- About Section -->
			<div class="container-fluid no-left-padding no-right-padding about-section">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="section-header section-header2"style="width:100%" >
								<h6>Welcome to</h6>
								<h3 style="text-transform:none;"><?php echo $title; ?></h3>
							</div>
							<div class="abt-content" style="width:100%">
								<p style='text-align:justify'><?php echo $about_us_brief; ?></p>
								<a href="aboutus.php">Read more <img src="images/arrow.png" alt="Arrow" /></a>
							</div>
						</div>
						<div class="col-md-8 col-sm-6 col-xs-12">
							<img src="images/about-img.jpg" alt="About" />
						</div>
					</div>
				</div>
			</div><!-- About Section /- -->
		
			<!-- About Video Section -->
			<div class="container-fluid no-left-padding no-right-padding abt-video-section">
				<!-- Container -->
				<div class="container">
					<div class="col-md-offset-2 col-md-8">
						<h3>“ <?php echo $about_video_text; ?> ” </h3>
						<a class="popup-youtube" href="<?php echo $about_video; ?>"><i><img src="images/play-icon.png" alt="Play Icon" /></i>watch the video</a>
					</div>
				</div><!-- Container /- -->
			</div><!-- About Video Section /- -->
			
			<!-- Team Section -->
			<div class="container-fluid no-left-padding no-right-padding team-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header section-header2">
						<h6>OUR SPECIAL </h6>
						<h3>AUTHOR’S TEAM</h3>
					</div><!-- Section Header /- -->
					<div class="row">
						<?php while($row=mysql_fetch_array($team_list)) { ?>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<div class="team-box" >
									<img src="images/team/<?php echo $row['image'];?>" alt="Team" style="max-height:278px;"/>
									<h4><?php echo $row['name'];?> <span><?php echo $row['designation'];?></span></h4>
									<ul>
										<?php if ($row['fb'] != '' ) { ?>
											<li><a target='_blank' href="<?php echo $row['fb']; ?>"><i class="fa fa-facebook"></i></a></li>
										<?php } ?>
										<?php if ($row['twitter'] != '' ) { ?>
											<li><a target='_blank' href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
										<?php } ?>
										<?php if ($row['gplus'] != '' ) { ?>
											<li><a target='_blank' href="<?php echo $row['gplus']; ?>"><i class="fa fa-google-plus"></i></a></li>
										<?php } ?>
										<?php if ($row['linkedin'] != '' ) { ?>
											<li><a target='_blank' href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						<?php } ?>
					</div>
				</div><!-- Container /- -->
			</div><!-- Team Section /- -->
		</main>

<?php
	include 'footer2.php';
?>