			<!-- Footer Section -->
			<footer class="container-fluid no-padding footer-main">
				<!-- Social Block -->
				<div class="container-fluid no-padding social-block">
					<!-- Container -->
					<div class="container">
						<h4>Stay Connected</h4>
						<ul>
							<li><a href="<?php echo $global_facebook; ?>" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $global_twitter; ?>" title="" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo $global_googleplus; ?>" title="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<!--<li><a href="#" title=""><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>-->
						</ul>
					</div><!-- Container /- -->
				</div><!-- Social Block /- -->
				
				<div class="container-fluid no-padding footer-middle">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<!-- Widget Block -->
							<div class="col-md-5 col-sm-6 col-xs-6 widget-block">
								<!-- About Widget -->
								<div class="ftr-widget ftr_widget_about">
									<h3>ABOUT US</h3>
									<p>
										<?php echo $global_about_us_breief; ?>
									</p>
								</div><!-- About Widget /- -->
							</div><!-- Widget Block /- -->
							
							<!-- Widget Block -->
							<div class="col-md-4 col-sm-6 col-xs-6 widget-block">
								<!-- Recent Tweets -->
								<div class="ftr-widget ftr_widget_instagram">
									<h3>JOIN US ON FACEBOOK</h3>
									<?php echo $global_footer_plugin;?>
									<!--
									<ul>
										<li><a href="#"><img src="images/ftr-insta-1.jpg" alt="Recent" /></a></li>
										<li><a href="#"><img src="images/ftr-insta-2.jpg" alt="Recent" /></a></li>
										<li><a href="#"><img src="images/ftr-insta-3.jpg" alt="Recent" /></a></li>
										<li><a href="#"><img src="images/ftr-insta-4.jpg" alt="Recent" /></a></li>
										<li><a href="#"><img src="images/ftr-insta-5.jpg" alt="Recent" /></a></li>
										<li><a href="#"><img src="images/ftr-insta-6.jpg" alt="Recent" /></a></li>
									</ul>
									-->
								</div><!-- Recent Tweets /- -->
							</div><!-- Widget Block /- -->
							
							<!-- Widget Block -->
							<div class="col-md-3 col-sm-6 col-xs-6 widget-block">
								<!-- Link Widget -->
								<div class="ftr-widget ftr_widget_link">
									<h3>QUICK LINKS</h3>
									<ul>
										<?php $i=0; ?>
										<?php while($row = mysql_fetch_array($quicklinks_for_footer)) { ?>
											<li><a target='_blank' href="<?php echo $row['link']; ?>" title="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></li>
											<?php $i++; ?>
											<?php 
												if ($i % 5 ==0)
												{
													echo "</ul><ul>";
												}
											?>
										<?php } ?>
									</ul>
								</div><!-- Link Widget /- -->
							</div><!-- Widget Block /- -->
						</div>
					</div><!-- Container /- -->
				</div>
				<!-- Footer Bottom -->
				<div class="container-fluid no-padding btm-ftr">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<p>Copyright &copy; GoalDiary 2017. All rights reserved. <br/>Developed by <a href='http://shinesjohn.com' target='_blank'>Shine S. John</a></p>
							</div>
							<div class="col-md-8 ftr-menu-block">
								<!-- nav -->
								<nav class="navbar navbar-default ow-navigation">
									<div class="navbar-header">
										<button aria-controls="navbar" aria-expanded="false" data-target="#ftr-navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									
									
									<div class="navbar-collapse collapse navbar-right" id="navbar">
										<ul class="nav navbar-nav menu-open">
											<li class="<?php if ($page_url == '' || $page_url == 'index.php' ) { ?>active <?php } ?>">
												<a href="index.php" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
											</li>
											<!--
											<?php while($row = mysql_fetch_array($category_list_query_for_menu)) { ?>
												<li><a href="#"><?php echo $row['name']; ?></a></li>
											<?php } ?>
											-->
											<li class="<?php if ($page_url == 'blog.php' ) { ?>active <?php } ?> dropdown">
												<a href="blog.php" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
												<?php if(isset($_SESSION['user_id'])) { ?>
													<i class="ddl-switch fa fa-angle-down"></i>
													<ul class="dropdown-menu">				
														<li><a href="my_blogs.php" title="My Blogs">My Blogs</a></li>
														<li><a href="newblog.php" title="Write Blog">Write Blog</a></li>
													</ul>
												<?php } ?>
											</li>
											<?php if(isset($_SESSION['user_id'])) { ?>
												<li class="<?php if ($page_url == 'profile.php' ) { ?>active <?php } ?>">
													<a href='profile.php' title="My Profile">My Profile</a>
												</li>
											<?php } ?>
											<li class="<?php if ($page_url == 'about.php' ) { ?>active <?php } ?>">
												<a href='about.php' title="About"'>About</a>
											</li>
											<li class="<?php if ($page_url == 'contactus.php' ) { ?>active <?php } ?>">
												<a href="contactus.php" title="Contact">Contact</a>
											</li>
										</ul>
									</div><!--/.nav-collapse -->
								</nav><!-- nav /- -->
							</div>
						</div>
					</div>
				</div><!-- Footer Bottom /- -->
			</footer><!-- Footer Section /- -->
		
		</div>

		<!-- JQuery v1.12.4 -->
		<script src="js/jquery-1.12.4.min.js"></script>

		<!-- Library - Js -->
		<script src="libraries/lib.js"></script>
		
		<?php if ($page_url == 'contactus.php' ) { ?>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn3Z6i1AYolP3Y2SGis5qhbhRwmxxo1wU"></script>
		<?php } ?>
		
		<?php if ($page_url == 'index.php' || $page_url == "") { ?>
			<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
			<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
			<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
		<?php } ?>

		<!-- Library - Theme JS -->
		<script src="js/functions.js"></script>

		<?php if ($page_url=="newblog.php") { ?>
			<script src="admin/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(function() 
				{
					CKEDITOR.replace('blog',
						{
							height: '800px'
						}
					);
				});
			</script>
		<?php } ?>

		<?php if ($page_url="profile_edit.php") { ?>
			<link rel="stylesheet" type="text/css" href="admin/assets/css/datepicker/datepicker3.css">
			<script src="admin/assets/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
			<script>
				$('#dob').datepicker({format: 'dd/mm/yyyy',endDate: '+1d'});
			</script>
		<?php } ?>
		<?php 
			echo $global_footer_css_js;
		?>
	</body>
</html>