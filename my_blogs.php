<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'my_blogs_action.php';
	include 'header.php';
	
?>
	
<!-- Page Banner -->
<div class="container-fluid no-padding page-banner" style="background-image:url('images/category/blog_banner.jpg');">
	<!-- Container -->
	<div class="container">
		<h3>
			<?php if(isset($_GET['id'])) { ?>
				<?php echo $name; ?>'s Blogs
			<?php } else { ?>
				MY BLOGS
			<?php } ?>
		</h3>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="my_blogs.php">
				<?php if(isset($_GET['id'])) { ?>
					<?php echo $name; ?>'s Blogs
				<?php } else { ?>
					MY BLOGS
				<?php } ?>
			</a></li>
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
						<h6>
							<?php if(isset($_GET['id'])) { ?>
								<?php echo $name; ?>'s
							<?php } else { ?>
								MY
							<?php } ?>
						</h6>
						<h3>BLOGS</h3>
					</div>
					<div class="row">
						<?php if($main_blog_list_rows > 0) { ?>
							<?php while ($row=mysql_fetch_array($main_blog_list)) { ?>
								<div class="type-post">
									<div class="col-md-6 col-sm-12 col-xs-6">											
										<?php if ($row['img'] == "") { ?>
											<div class="entry-cover"><a href="blog_view.php?myblogs=1&id=<?php echo $row['id']; ?>"><img height="200" src="images/logo.png" alt="Sports" /></a></div>
										<?php } else { ?>
											<div class="entry-cover"><a href="blog_view.php?myblogs=1&id=<?php echo $row['id']; ?>"><img height="200" src="images/blogs/<?php echo $row['img']; ?>" alt="Sports" /></a></div>
										<?php } ?>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-6">
										<div class="entry-content">
											<h3 class="entry-title"><a href="blog_view.php?myblogs=1&id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
											<div class="post-meta">
												<span><a href="#"><?php echo $row['timestamp']; ?></a></span>
												<span>By : <a href="profile_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['creator_name']; ?></a></span>
												<span><a href="#"><i class="fa fa-commenting-o"></i> <?php echo $row['comment_cnt']; ?></a></span>
												<span><a href="#"><i class="fa fa-eye"></i> <?php echo $row['view_cnt']; ?></a></span>
												<?php if(! isset($_GET['id'])) { ?>
													<span>Status : <?php echo $row['status_name']; ?></span>
												<?php } ?>
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