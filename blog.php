<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'blog_action.php';
	include 'header.php';
	
?>
	
<!-- Page Banner -->
<div class="container-fluid no-padding page-banner" style="background-image:url('images/category/<?php echo $banner; ?>');">
	<!-- Container -->
	<div class="container">
		<h3>
			<?php if(isset($_GET['id'])){?>
				<?php echo $name; ?>
			<?php } else { ?>
				BLOG
			<?php } ?>
		</h3>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="blog.php">BLOG</a></li>
			<?php if(isset($_GET['id'])){?>
				<li ><a href=""><?php echo $name; ?></a></li>
			<?php } ?>
		</ol>
	</div><!-- Container /- -->
</div><!-- Page Banner /- -->

<main class="site-main page_spacing">
	
	<!-- Container -->
	<div class="container">
		<!-- Row -->
		<div class="row blog-list">
			<?php if(isset($_GET['id'])) { ?>
				<div class="col-md-9 col-sm-6 content-area content_space">
					<div class="latest-technology content-right-padding">
						<div class="section-header section-header2">
							<h3><?php echo $name; ?></h3>
							<h6><?php echo $descr; ?></h6>
						</div>
						<div class="row" style="text-align:justify">
							<?php echo $details; ?>
						</div>
						
						<br/>
						
						<div class="section-header section-header2">
							<h6>Read the</h6>
							<h3>Articles on "<?php echo $name; ?>"</h3>
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
													<span>By : <a href="profile_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['creator_name']; ?></a></span>
													<span><a href="#"><i class="fa fa-commenting-o"></i> <?php echo $row['comment_cnt']; ?></a></span>
													<span><a href="#"><i class="fa fa-eye"></i> <?php echo $row['view_cnt']; ?></a></span>
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
					<!-- Video Block -->
					<!--<div class="video-block">
						<div class="type-post video-format">
							<div class="entry-content">
								<a href="blog2.php" title="Read More">VIEW ALL</a>
							</div>
						</div>
					</div>--><!-- Video Block /- -->
					<div class="add-block">
						<?php if ($global_ad_c_type == 'image') { ?>
							<a href="<?php echo $global_ad_c_link; ?>" target="_blank" ><img src="images/adss/left.png" style='max-width:820px;width:100%;' alt="Ad" /></a>
						<?php } else { ?>					
							<?php echo $global_ad_c_iframe; ?>
						<?php } ?>
					</div>
				</div>
			<?php } else { ?>
				<!-- Content Area -->
				<div class="col-md-9 col-sm-6 content-area content_space">
					
					<!-- Latest Technology -->
					<div class="latest-technology content-right-padding">
						<div class="section-header section-header2">
							<h6>LATEST</h6>
							<h3>BLOGS</h3>
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
													<span>By : <a href="profile_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['creator_name']; ?></a></span>
													<span><a href="#"><i class="fa fa-commenting-o"></i> <?php echo $row['comment_cnt']; ?></a></span>
													<span><a href="#"><i class="fa fa-eye"></i> <?php echo $row['view_cnt']; ?></a></span>
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
					<!-- Video Block -->
					<div class="video-block">
						<div class="type-post video-format">
							<div class="entry-content">
								<a href="blog2.php" title="Read More">VIEW ALL</a>
							</div>
						</div>
					</div><!-- Video Block /- -->
					<hr/>
					<div class="add-block">
						<?php if ($global_ad_c_type == 'image') { ?>
							<a href="<?php echo $global_ad_c_link; ?>" target="_blank" ><img src="images/adss/left.png" style='max-width:820px;width:100%;' alt="Ad" /></a>
						<?php } else { ?>					
							<?php echo $global_ad_c_iframe; ?>
						<?php } ?>
					</div>
				</div><!-- Content Area /- -->
			<?php } ?>
			
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