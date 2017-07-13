<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'page_action.php';
	include 'header.php';
	
?>
	
<!-- Page Banner -->
<div class="container-fluid no-padding page-banner" style="background-image:url('images/category/blog_banner.jpg');">
	<!-- Container -->
	<div class="container">
		<h3><?php echo $title; ?></h3>
		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li>View</li>
		</ol>
	</div><!-- Container /- -->
</div><!-- Page Banner /- -->

<main class="site-main page_spacing">
	<!-- Container -->
	<div class="container">
		<!-- Row -->
		<div class="row blog-single">
			<!-- Content Area -->
			<div class="col-md-9 col-sm-8 content-area content_space">
				<article class="type-post">
					<div class="entry-cover" style="text-align:center">
						<?php if ($image == "") { ?>
							<a href="#"><img src="images/logo.png" alt="Blog" style="max-width:792px; max-height:350px;"/></a>
						<?php } else { ?>
							<a href="#"><img src="images/page/<?php echo $image; ?>" alt="Blog" style="max-width:792px; max-height:350px;" /></a>
						<?php } ?>
						
					</div>
					<div class="entry-header">
						<h3 class="entry-title"><?php echo $title; ?></h3>
					</div>
					<div class="entry-content">
						<p>
							<?php echo $page; ?>
						</p>
						
					</div>
					
					<div class="social-share">
						<p>Share It</p>	
						<ul> 
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</article>
				<br/>
				<br/>
				<div class="add-block">
					<?php if ($global_ad_c_type == 'image') { ?>
						<a href="<?php echo $global_ad_c_link; ?>" target="_blank" ><img src="images/adss/left.png" style='max-width:820px;width:100%;' alt="Ad" /></a>
					<?php } else { ?>					
						<?php echo $global_ad_c_iframe; ?>
					<?php } ?>
				</div>
			</div><!-- Content Area /- -->
			
			<!-- Widget Area -->
			<div class="col-md-3 col-sm-4 widget-area widget_space">
				<?php include 'rightbar.php'; ?>
			</div><!-- Widget Area /- -->
		</div><!-- Row /- -->
	</div><!-- Container /- -->
	
</main>

<?php
	include 'footer2.php';
?>