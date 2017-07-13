<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	$global_title="404 | $global_title";
	include 'header.php';
	
?>
	
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner">
			<!-- Container -->
			<div class="container">
				<h3>404</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">404</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
	
		<!-- Error Page -->
		<div class="error-page container-fluid no-left-padding no-right-padding">
			<!-- Container -->
			<div class="container">
				<img src="images/404.png" alt="404" />
				<div class="error-content">
					<span>404</span>
					<p>Oops! Page Not Found!</p>
					<p>Try to Search for the Best Match or Visit our Home Page</p>
					<a href="index.php" title="Go to Home"><i class="icon icon-House"></i>Go to Home</a>
				</div>
			</div><!-- Container -->
		</div><!-- Error Page /- -->
	
<?php
	include 'footer2.php';
?>