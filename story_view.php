<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'story_view_action.php';
	include 'header.php';
	
?>
	
<!-- Page Banner -->
<div class="container-fluid no-padding page-banner" style="background-image:url('images/category/blog_banner.jpg');">
	<!-- Container -->
	<div class="container">
		<h3><?php echo $title; ?></h3>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Story</a></li>
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
							<a href="#"><img src="images/story/<?php echo $image; ?>" alt="Blog" style="max-width:792px; max-height:350px;" /></a>
						<?php } ?>
						
					</div>
					<div class="entry-header">
						<h3 class="entry-title"><?php echo $title; ?></h3>
						<div class="entry-meta">
							<div class="post-date"><a href="#" title="May 22, 2016"><?php echo $timestamp; ?></a></div>
							<!--<div class="byline">By : <a href="#" title="<?php echo $creator_name; ?>"><?php echo $creator_name; ?></a></div>-->
							<div class="post-comment"><a href="#" title="07"><i class="fa fa-commenting-o"></i>07</a></div>
							<div class="post-like"><a href="#" title="23"><i class="fa fa-eye"></i>23</a></div>
						</div>
					</div>
					<div class="entry-content">
						<p>
							<?php echo $story; ?>
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
				<!-- Comment Section -->
				<div class="comment-section">
					<div class="section-heading">
						<h3>Comments</h3>
					</div>
					<ul class="media-list" id="id_comment_list">
					<?php if($comment_list_rows>0) { ?>
						
							<?php while ($row=mysql_fetch_array($comment_list)) { ?>
								<li class="media">
									<div class="media-left">
										<a href="#" title="<?php echo $row['creator_name']; ?>">
											<?php if($row['creator_image']!="") { ?>
												<img style="max-width:111px; max-height:111px;" src="images/profiles/<?php echo $row['creator_image'];?>" alt="comment">
											<?php } else { ?>
												<img style="max-width:111px; max-height:111px;" src="images/user-46.png" alt="comment">
											<?php } ?>
										</a>
									</div>
									<div class="media-body">
										<div class="media-content">
											<h4 class="media-heading"><?php echo $row['creator_name']; ?></h4>
											<span><?php echo $row['timestamp']; ?></span>
											<p><?php echo $row['comments']; ?></p>
											<!--<a href="#" title="Reply">Reply</a>-->
										</div> 
									</div>
								</li>
							<?php } ?>
							
						
					<?php } else { ?>
						No Comments
					<?php } ?>
					</ul>
				</div><!-- Comment Section /- -->
				<?php if(isset($_SESSION['user_id'])) { ?>
					<!-- Comment Form -->
					<div class="comment-form">
						<div class="section-heading">
							<h3>Leave Your Comments Here</h3>
						</div>
						<script>
							function submit_comment()
							{
								comment=$("#id_comment").val();
								
								if(comment!="")
								{
									$.post("submit_story_comment.php",
										{
											comment:comment,
											story_id:<?php echo $_GET['id']; ?>,
											user_id:<?php echo $_SESSION['user_id']; ?>
										},
										function(data)
										{
											setTimeout(
											  function() 
											  {
												//do something special
											  }, 2000);
											$('#id_comment_list').append(data);
											$('#id_comment').val('');
											$('#submit_comment').html("<span style='color:green'>Success !<br/><br/></span>");
										}
									);
								}
								else
								{
									$('#submit_comment').html("<span style='color:red'>Please enter some comments !<br/><br/></span>");
								}
								
								return false;
							}
						</script>
						<form class="row">
							<div id="submit_comment">
								
							</div>
							<!--<div class="form-group col-md-6">
								<input type="text" required="" placeholder="Name *" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<input type="text" required="" placeholder="EMail" class="form-control">
							</div>-->
							<div class="form-group col-md-12">
								<textarea placeholder="Comments *" rows="5" id="id_comment" class="form-control"></textarea>
							</div>
							<input type="submit" title="POST COMMENT" value="POST COMMENT" onclick="return submit_comment();">
						</form>
					</div><!-- Comment Form /- -->
				<?php } else { ?>
					<div class="video-block">
						<div class="type-post video-format">
							<div class="entry-content">
								<a href="signin.php" title="Read More">Signin to comment</a>
							</div>
						</div>
					</div>
				<?php } ?>
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