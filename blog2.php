<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'blog2_action.php';
	include 'header.php';
	
?>
	
<!-- Page Banner -->
<?php if(isset($_GET['id'])) {?>
<div class="container-fluid no-padding page-banner" style="background-image:url('images/subcategory/<?php echo $banner; ?>');">
<?php } else { ?>
<div class="container-fluid no-padding page-banner" style="background-image:url('images/category/<?php echo $banner; ?>');">
<?php } ?>
	<!-- Container -->
	<div class="container">
		<h3>
			<?php if(isset($_GET['id'])) { ?>
				<?php echo $subcategory_name; ?>
			<?php } else { ?>
				BLOG
			<?php } ?>
		</h3>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="blog.php">BLOG</a></li>
			<?php if(isset($_GET['id'])) { ?>
				<li><a href="blog.php?id=<?php echo $category_id; ?>"><?php echo $category_name; ?></a></li>
				<li class="active"><?php echo $subcategory_name; ?></li>
			<?php } else if(isset($_GET['archive'])) { ?>
				<li>Archives (<?php echo $_GET['archive']; ?>, <?php echo $_GET['year']; ?>)</li>
			<?php } else { ?>
				<li>All</li>
			<?php } ?>
		</ol>
	</div><!-- Container /- -->
</div><!-- Page Banner /- -->

<main>

	<!-- Sports Post Block -->
	<div class="container-fluid no-padding sports-block">
		<!-- Container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header section-header2">
				<?php if(isset($_GET['id'])) { ?>
					<h6>Read the</h6>
					<h3>Articles on "<?php echo $subcategory_name; ?>"</h3>
				<?php } else if(isset($_GET['archive'])) { ?>
					<h6>Read</h6>
					<h3>"<?php echo $_GET['archive']; ?> (<?php echo $_GET['year']; ?>)" Month Articles</h3>
				<?php } else { ?>
					<h6>Read</h6>
					<h3>All Articles</h3>
				<?php } ?>
			</div><!-- Section Header /- -->
			<!-- Row -->
			<div class="row">
				<?php if($main_blog_list_rows > 0) { ?>
					<?php $i=0; ?>
					<?php while ($row=mysql_fetch_array($main_blog_list)) { ?>
						<?php if ($i%2==0) { ?>
							<div class="col-md-4 col-sm-6 col-xs-6 post-box">
								<div class="type-post">
									<?php if ($row['img'] == "") { ?>
										<div class="entry-cover"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/logo.png" alt="Sports" /></a></div>
									<?php } else { ?>
										<div class="entry-cover"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/blogs/<?php echo $row['img']; ?>" alt="Sports" /></a></div>
									<?php } ?>
									<div class="entry-header">									
										<h3 class="entry-title"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
										<div class="post-meta">
											<span>By : <a href="profile_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['creator_name']; ?></a></span>
											<span><a href="#"><?php echo $row['timestamp']; ?></a></span>
											<span><a href="#"><i class="fa fa-commenting-o"></i> <?php echo $row['comment_cnt']; ?></a></span>
										</div>
									</div>
								</div>
							</div><!-- Post Box /- -->
						<?php } else { ?>
							<div class="col-md-4 col-sm-6 col-xs-6 post-box">
								<div class="type-post">
									<div class="entry-header">
										<h3 class="entry-title"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></a></h3>
										<div class="post-meta">
											<span>By : <a href="profile_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['creator_name']; ?></a></span>
											<span><a href="#"><?php echo $row['timestamp']; ?></a></span>
											<span><a href="#"><i class="fa fa-commenting-o"></i> <?php echo $row['comment_cnt']; ?></a></span>
										</div>
									</div>
									<?php if ($row['img'] == "") { ?>
										<div class="entry-cover"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/logo.png" alt="Sports" /></a></div>
									<?php } else { ?>
										<div class="entry-cover"><a href="blog_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/blogs/<?php echo $row['img']; ?>" alt="Sports" /></a></div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
						<?php $i++; ?>
					<?php } ?>
				<?php } else { ?>
					Empty
				<?php } ?>
			</div><!-- Row /- -->
			<!-- Pagination -->
			<!--<nav class="ow-pagination">
				<ul class="pager">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">....</a></li>
					<li><a href="#">5</a></li>
					<li class="next"><a href="#">Next <i class="arrow_right"></i></a></li>
				</ul>
			</nav>--><!-- Pagination /- -->
		</div><!-- Container /- -->
	</div><!-- Sports Post Block /- -->			
</main>

<?php
	include 'footer2.php';
?>