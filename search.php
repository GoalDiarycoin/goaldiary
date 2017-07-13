<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'search_action.php';
	include 'header.php';
	
?>
	
<!-- Page Banner -->
<div class="container-fluid no-padding page-banner" style="background-image:url('images/category/blog_banner.jpg');">
	<!-- Container -->
	<div class="container">
		<h3>
			SEARCH
		</h3>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="#">SEARCH</a></li>
		</ol>
	</div><!-- Container /- -->
</div><!-- Page Banner /- -->

<main class="site-main page_spacing">
	<!-- Container -->
	<div class="container">
		<!-- Row -->
		<div class="row blog-list">			
			<!-- Content Area -->
			<div class="col-md-9 col-sm-6 content-area content_space">
				
				<!-- Latest Technology -->
				<div class="latest-technology content-right-padding">
					<div class="section-header section-header2">
						<h6>SEARCH</h6>
						<h3>RESULTS</h3>
					</div>
					<div class="row">
						<?php if($main_blog_list_rows > 0) { ?>
							<?php while ($row=mysql_fetch_array($main_blog_list)) { ?>
								<div class="type-post">
									<div class="col-md-6 col-sm-12 col-xs-6">											
										<?php if ($row['img'] == "") { ?>
											<div class="entry-cover"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/logo.png" alt="Sports" /></a></div>
										<?php } else { ?>
											<div class="entry-cover"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/blogs/<?php echo $row['img']; ?>" alt="Sports" /></a></div>
										<?php } ?>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-6">
										<div class="entry-content">
											<h3 class="entry-title"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
											<div class="post-meta">
												<span><a href="#"><?php echo $row['timestamp']; ?></a></span>
												<span>By : <a href="#"><?php echo $row['creator_name']; ?></a></span>
												<span><a href="#"><i class="fa fa-commenting-o"></i> 17</a></span>
												<span><a href="#"><i class="fa fa-eye"></i> 123</a></span>
												<span>Status : <?php echo $row['status_name']; ?></span>
											</div>
											<p><?php echo $row['descr']; ?></p>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } else { ?>
							Empty
						<?php } ?>
					</div>
				</div><!-- Latest Technology /- -->
				<hr/>
				<div class="add-block">
					<?php if ($global_ad_c_type == 'image') { ?>
						<a href="<?php echo $global_ad_c_link; ?>" target="_blank" ><img src="images/adss/left.png" style='max-width:820px;width:100%;' alt="Ad" /></a>
					<?php } else { ?>					
						<?php echo $global_ad_c_iframe; ?>
					<?php } ?>
				</div>
			</div><!-- Content Area /- -->
			<!-- Widget Area -->
			<div class="col-md-3 col-sm-6 widget-area widget_space">
				<?php include 'rightbar.php'; ?>
			</div><!-- Widget Area /- -->
		</div><!-- Row /- -->
	</div><!-- Container /- -->
	
</main>

<?php
	include 'footer2.php';
?>