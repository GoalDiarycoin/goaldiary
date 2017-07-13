<?php 
	include 'rightbar_action.php';
?>

<!-- Widget: Search -->
<aside class="widget widget_search">
	<form method="get" class="searchform" action="search.php">
		<div class="input-group">
			<input name="qry" placeholder="Search..," class="form-control" required="" type="text"/>
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="icon icon-Search"></i></button>
			</span>
		</div>
	</form>
</aside><!-- Widget: Search /- -->

<!-- Widget: Categories -->
<aside class="widget widget_categories">
	<?php if(isset($_GET['id']) && $page_url == 'blog.php') { ?>
		<h3 class="widget-title">Sub Categories</h3>
	<?php } else { ?>
		<h3 class="widget-title">Categories</h3>
	<?php } ?>
	<ul>
		<?php while($row=mysql_fetch_array($right_cat_list)) { ?>
			<?php if(isset($_GET['id']) && $page_url=='blog.php') { ?>
				<li class="cat-item"><a href="blog2.php?id=<?php echo $row['id']; ?>" title="<?php echo $row['name']; ?>"><?php echo $row['name']; ?> (<?php echo $row['cnt']; ?>)</a></li>
			<?php } else { ?>
				<li class="cat-item"><a href="blog.php?id=<?php echo $row['id']; ?>" title="<?php echo $row['name']; ?>"><?php echo $row['name']; ?> (<?php echo $row['cnt']; ?>)</a></li>
			<?php } ?>
		<?php } ?>
	</ul>
</aside><!-- Widget: Categories /- -->

<!-- Widget: Latest Posts -->
<aside class="widget widget_latestposts">
	<h3 class="widget-title">Recent Posts</h3>
	<?php if($right_blog_list_rows > 0) { ?>
		<?php while ($row=mysql_fetch_array($right_blog_list)) { ?>
			<div class="latest-content">
				<a href="blog_view.php?id=<?php echo $row['id']; ?>" title="<?php echo $row['creator_name']; ?>">
					<i>
						<?php if ($row['creator_img']!="") { ?>
							<img style="max-width:90px;max-height:90px;" src="images/profiles/<?php echo $row['creator_img']; ?>" class="wp-post-image" alt="<?php echo $row['title'] ;?>">
						<?php } else { ?>
							<img style="max-width:90px;max-height:90px;" src="images/user-46.png" class="wp-post-image" alt="<?php echo $row['title'] ;?>">
						<?php } ?>
					</i>
				</a>
				<h5><a title="<?php echo $row['title']; ?></a>" href="blog_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h5>
				<span>
					<a href="blog.php?id=<?php echo $row['category_id']; ?>"><?php echo $row['cateory_name']; ?></a>
					<a href="blog2.php?id=<?php echo $row['subcategory_id']; ?>"><?php echo $row['sub_cateory_name']; ?></a>
					<br/>
					<a href="profile_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['creator_name']; ?></a>
					<br/>
					<a href="#"><?php echo $row['timestamp']; ?></a>
				</span>
			</div>
		<?php } ?>
	<?php } else { ?>
		No Recent Posts
	<?php } ?>
</aside><!-- Widget: Latest Posts /- -->

<!-- Widget: Archives -->
<aside class="widget widget_archive">
	<h3 class="widget-title">archives</h3>
	<?php if($right_archive_list_rows > 0) { ?>
		<ul>
			<?php while ($row=mysql_fetch_array($right_archive_list)) { ?>
				<li><a href="blog2.php?archive=<?php echo $row['month']; ?>&year=<?php echo $row['year']; ?>"><?php echo $row['month_year']; ?> </a> &nbsp; (<?php echo $row['cnt']; ?>)</li>
			<?php } ?>
	</ul>
	<?php } else { ?>
		NA
	<?php } ?>
</aside><!-- Widget: Archives /- -->



<!-- Widget: Latest Posts -->
<aside class="widget widget_latestposts">
	<h3 class="widget-title">Trending Posts</h3>
	<?php if($right_trending_blog_list_rows > 0) { ?>
		<?php while ($row=mysql_fetch_array($right_trending_blog_list)) { ?>
			<div class="latest-content">
				<a href="blog_view.php?id=<?php echo $row['id']; ?>" title="<?php echo $row['creator_name']; ?>">
					<i>
						<?php if ($row['creator_img']!="") { ?>
							<img style="max-width:90px;max-height:90px;" src="images/profiles/<?php echo $row['creator_img']; ?>" class="wp-post-image" alt="<?php echo $row['title'] ;?>">
						<?php } else { ?>
							<img style="max-width:90px;max-height:90px;" src="images/user-46.png" class="wp-post-image" alt="<?php echo $row['title'] ;?>">
						<?php } ?>
					</i>
				</a>
				<h5><a title="<?php echo $row['title']; ?></a>" href="blog_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h5>
				<span>
					<a href="blog.php?id=<?php echo $row['category_id']; ?>"><?php echo $row['cateory_name']; ?></a>
					<a href="blog2.php?id=<?php echo $row['subcategory_id']; ?>"><?php echo $row['sub_cateory_name']; ?></a>
					<br/>
					<a href="profile_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['creator_name']; ?></a>
					<br/>
					<a href="#"><?php echo $row['timestamp']; ?></a>
				</span>
			</div>
		<?php } ?>
	<?php } else { ?>
		No Trending Posts
	<?php } ?>
</aside><!-- Widget: Latest Posts /- -->






<!-- Widget: Add -->
<aside class="widget widget_add">
	<!--<h3 class="widget-title">ADVERTISEMENT</h3>-->
	<div class="add-block">
		<?php if ($global_ad_r_type == 'image') { ?>
			<a href="<?php echo $global_ad_r_link; ?>" target="_blank"><img src="images/adss/right.png" style='max-width:308px' alt="Ad" /></a>
		<?php } else { ?>
			<?php echo $global_ad_r_iframe; ?>
		<?php } ?>
	</div>
</aside><!-- Widget: Add /- -->

<!-- Widget: Recent Comments -->
<aside class="widget widget_recent_comments">
	<h3 class="widget-title">Recent Comments</h3>
	<ul id="recentcomments">
		<?php if($right_comment_list_rows > 0) { ?>
			<?php while ($row=mysql_fetch_array($right_comment_list)) { ?>
				<li class="recentcomments">
					<span class="comment-author-link"><i class="fa fa-comments-o"></i> <?php echo $row['creator_name'];?> </span>
					<a href="blog_view.php?id=<?php echo $row['blog_id']; ?>"><?php echo $row['comments'];?></a>
				</li>
			<?php } ?>
		<?php } else { ?>
			No Comments
		<?php } ?>
	</ul>
</aside><!-- Widget: Recent Comments /- -->

<!-- Widget: Tag Cloud -->
<aside class="widget widget_tag_cloud">
	<h3 class="widget-title">POPULAR TAGS</h3>
	<div class="tagcloud">
		<?php if($right_tags_list_rows > 0) { ?>
			<?php while ($row=mysql_fetch_array($right_tags_list)) { ?>
				<a href="search.php?qry=<?php echo $row['name']; ?>" title="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a>
			<?php } ?>
		<?php } else { ?>
			No Tags
		<?php } ?>
	</div>
</aside><!-- Widget: Tag Cloud /- -->

<!-- Widget: Subscribe -->
<aside class="widget widget_subscribe">
	<script>
		function subscribe()
		{
			mailid=$('#subscriber_mailid').val().trim();
			
			if(mailid != "")
			{
				$.post("subscribe.php",
					{
					    mailid:mailid
					},
					function(data)
					{
						data=data.trim();
						
						if(data=="")
						{
							alert('Success !');
							$('#subscriber_mailid').val('');
						}
					}
				);
			}
			else
			{
				alert('Enter mailid !');
			}
			return false;
		}
	</script> 

	<div class="newsletter-box">
		<h3 class="widget-title">NEWS LETTER</h3>
		<div class="subscribe-box">
			<p>Doin' it our way. There's nothing we wont try. Never heard the word impossible</p>
			<div class="input-group">
				<input class="form-control" placeholder="Your Email Address" type="text" id="subscriber_mailid">
				<span class="input-group-btn">
					<input type="submit" class="btn btn-default" value="SUBSCRIBE" onclick="return subscribe();"/>
				</span>
			</div><!-- /input-group -->
		</div>
	</div>
</aside><!-- Widget: Subscribe /- -->
<br/>
