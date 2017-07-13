<?php	
	session_start();
	include 'db.php';
	include 'global.php';
	include 'index_action.php';
	include 'header.php';
	
?>

<main>
	<!-- Slider Section 2 -->
	<?php if($slideshow_list_rows > 0) { ?>
		<div id="home-revslider" class="slider-section container-fluid no-padding">
			<!-- START REVOLUTION SLIDER 5.0 -->
			<div class="rev_slider_wrapper">
				<div id="home-slider1" class="rev_slider" data-version="5.0">
					<ul>
						<?php while($row = mysql_fetch_array($slideshow_list)) { ?>							
							<li>
								<img src="images/slideshow/<?php echo $row['id']; ?>.<?php echo $row['ext']; ?>" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<!--
								<div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-layer-3" 
									data-x="['left','left','left','left']" 
									data-hoffset="['375','140','70','45']" 
									data-y="['top','top','top','top']" 
									data-voffset="['190','170','130','90']" 
									data-fontsize="['16','16','16','13']"
									data-lineheight="['30','30','30','30']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="y:-50px;opacity:0;s:1000;e:Power4.easeOut;" 
									data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on" 
									data-responsive="off"
									style="z-index: 10; padding:5px 20px; border-radius: 0; border: none; letter-spacing:0.56px; color: #fff; background-color: #07ab92; font-weight: 600; font-family: 'Poppins', sans-serif; text-transform:uppercase; white-space: nowrap; outline:none; box-shadow:none; box-sizing: border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;"><?php echo $row['name']; ?>
								</div>
								-->
								<div class="tp-caption tp-shape tp-shapewrapper" id="slide-layer-0"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="full" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;background-color:rgba(34, 34, 34, 0.549);">
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-1" 
									data-x="['left','left','left','left']" 
									data-hoffset="['375','140','70','45']" 
									data-y="['top','top','top','top']" 
									data-voffset="['240','170','130','90']" 
									data-fontsize="['46','40','32','20']"
									data-lineheight="['64','50','38','25']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.38px; color:#fff; font-weight: 600;  font-family: 'Poppins', sans-serif;"><?php echo $row['descr']; ?>
								</div>
								<div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-layer-3" 
									data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']" 
									data-y="['top','top','top','top']" 
									data-voffset="['400','410','330','245']" 
									data-fontsize="['14','14','14','12']"
									data-lineheight="['30','30','30','30']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;"
									data-style_hover="c:#fff;bg:#ffb609;"
									data-start="3000" 
									data-splitin="none" 
									data-splitout="none" 
									data-actions='[{"event":"click","offset":"0px"}]'
									data-responsive_offset="on" 
									data-responsive="on"
									style="z-index: 10; padding:8px 24px 7px; border-radius: 0; border: 2px solid #ffb609; letter-spacing:0.56px; color: #fff; background-color: transparent; font-weight: 600; font-family: 'Poppins', sans-serif; text-transform:uppercase; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
									<a target='_blank' href='<?php echo $row['link']; ?>'>Read More</a>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div><!-- Slider Section 2 -->
	<?php } ?>
	
	<!-- Post BLock -->
	<div class="container-fluid posts-block">
		<?php while($row=mysql_fetch_array($home_category_list)) { ?>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="type-post">
					<div class="entry-cover" style="background-image:url('images/category/<?php echo $row['image']; ?>');background-size:cover;height:349px;">
						
					</div>
					<div class="entry-header">
						<span><a href="blog.php?id=<?php echo $row['id']; ?>" class="color-1"><?php echo $row['name'];?></a></span>
						<h3 class="entry-title"><a href="blog.php?id=<?php echo $row['id']; ?>"><?php echo $row['descr'];?></a></h3>
					</div>
				</div>
			</div>
		<?php } ?>
	</div><!-- Post BLock /- -->
	
	<!-- Container -->
	<div class="container">
		<!-- Row -->
		<div class="row">
			<!-- Content Area -->
			<div class="col-md-9 col-sm-6 content-area content_space content-right-padding">
				
				<!-- What's Hot -->
				<!--
				<div class="what-hot-block">
					<div class="row">
						<div class="col-md-4">
							<div class="section-header section-header2">
								<h6>CURRENTLY</h6>
								<h3>WHAT’S HOT</h3>
							</div>
						</div>
						<div class="col-md-8 post-categorey">
							<ul id="filters">
								<li><a data-filter="*" class="active" href="#" title="All">All</a></li>
								<li><a data-filter=".fashion" href="#" title="Fashion">fashion</a></li>
								<li><a data-filter=".sports" href="#" title="Sports">sports</a></li>
								<li><a data-filter=".science" href="#" title="Science">science</a></li>
								<li><a data-filter=".nature" href="#" title="Nature">nature</a></li>
							</ul>
						</div>
					</div>
					<div class="row whats-post">
						<div class="col-md-4 col-sm-6 col-xs-4 what-box fashion science">
							<div class="type-post">
								<div class="entry-cover"><a href="#"><img src="images/whats-hot1.jpg" alt="Post" /></a></div>
								<div class="entry-header">
									<span><a href="#" class="color-2">FASHION</a></span>
									<h3 class="entry-title"><a href="#">Winx looks good in trial at Randwick</a></h3>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-4 what-box sports ">
							<div class="type-post">
								<div class="entry-cover"><a href="#"><img src="images/whats-hot2.jpg" alt="Post" /></a></div>
								<div class="entry-header">
									<span><a href="#" class="color-3">SPORTS</a></span>
									<h3 class="entry-title"><a href="#">Winx looks good in trial at Randwick</a></h3>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-4 what-box nature">
							<div class="type-post">
								<div class="entry-cover"><a href="#"><img src="images/whats-hot3.jpg" alt="Post" /></a></div>
								<div class="entry-header">
									<span><a href="#" class="color-1">NATURE</a></span>
									<h3 class="entry-title"><a href="#">Winx looks good in trial at Randwick</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				-->
				<!-- Latest Technology -->
				<div class="latest-technology">
					<div class="section-header section-header2">
						<h6>LATEST</h6>
						<h3>STORIES</h3>
					</div>
					<div class="row">
						<?php if($home_latest_stories_list_rows > 0) { ?>
							<?php while ($row=mysql_fetch_array($home_latest_stories_list)) { ?>
								<div class="type-post">
									<div class="col-md-6 col-sm-12 col-xs-6">
										<?php if ($row['image'] == "") { ?>
											<div class="entry-cover"><a href="story_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/logo.png" alt="Sports" /></a></div>
										<?php } else { ?>
											<div class="entry-cover"><a href="story_view.php?id=<?php echo $row['id']; ?>"><img height="200" src="images/story/<?php echo $row['image']; ?>" alt="Sports" /></a></div>
										<?php } ?>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-6">
										<div class="entry-content">
											<h3 class="entry-title"><a href="story_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
											<div class="post-meta">
												<span><a href="#"><?php echo $row['timestamp']; ?></a></span>
												<!--<span>By : <a href="#"><?php echo $row['creator_name']; ?></a></span>-->
												<span><a href="#"><i class="fa fa-commenting-o"></i> 17</a></span>
												<span><a href="#"><i class="fa fa-eye"></i> 123</a></span>
											</div>
											<p><?php echo $row['descr']; ?></p>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } else { ?>
							NULL
						<?php } ?>
					</div>
				</div><!-- Latest Technology /- -->
				
				<!-- Add Block -->
				<div class="add-block">
					<?php if ($global_ad_c_type == 'image') { ?>
						<a href="<?php echo $global_ad_c_link; ?>" target="_blank" ><img src="images/adss/left.png" style='max-width:820px;width:100%;' alt="Ad" /></a>
					<?php } else { ?>					
						<?php echo $global_ad_c_iframe; ?>
					<?php } ?>
				</div>
				<!-- Add Block /- -->
				
				<!--
				<div class="row category-post-block">
					<div class="col-md-6 col-sm-12 col-xs-6 category-box categorey-box2">
						<div class="section-header section-header2 section-header3">
							<h6>TIPS FOR</h6>
							<h3>BUSINESS</h3>
						</div>
						<div class="category-full-box">
							<div class="entry-cover"><a href="#"><img src="images/business-full.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">Reserve Bank of Australia is on a knife edge</a></h3>
								<div class="post-meta">
									<span><a href="#">March 22, 2016</a></span>
									<span>By <a href="#">Simon </a></span>
									<span><a href="#"><i class="fa fa-commenting-o"></i>&nbsp; 42 Comments</a></span>
								</div>
							</div>
						</div>
						<div class="category-thumb-box">
							<div class="entry-cover"><a href="#"><img src="images/business-thumb1.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">Reserve Bank of Australia is on a knife</a></h3>
								<div class="post-meta">
									<span><a href="#">March 22, 2016</a></span>
								</div>
							</div>
						</div>
						<div class="category-thumb-box">
							<div class="entry-cover"><a href="#"><img src="images/business-thumb2.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">Lawmakers call for dairy tindustry rescue</a></h3>
								<div class="post-meta">
									<span><a href="#">May 17, 2016</a></span>
								</div>
							</div>
						</div>
						<div class="category-thumb-box">
							<div class="entry-cover"><a href="#"><img src="images/business-thumb3.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">Vale's profit slumps 34pc after dam failure</a></h3>
								<div class="post-meta">
									<span><a href="#">March 16, 2016</a></span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-sm-12 col-xs-6 category-box categorey-box2">
						<div class="section-header section-header2 section-header3">
							<h6>LOVEABLE</h6>
							<h3>entertainments</h3>
						</div>
						<div class="category-full-box">
							<div class="entry-cover"><a href="#"><img src="images/entertainments-full.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">New York's acoustic buoy detects first whale species</a></h3>
								<div class="post-meta">
									<span><a href="#">March 22, 2016</a></span>
									<span>By <a href="#">Simon </a></span>
									<span><a href="#"><i class="fa fa-commenting-o"></i>&nbsp; 42 Comments</a></span>
								</div>
							</div>
						</div>
						<div class="category-thumb-box">
							<div class="entry-cover"><a href="#"><img src="images/entertainments-thumb1.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">The Estonian President is Twitter troll destroyer</a></h3>
								<div class="post-meta">
									<span><a href="#">March 22, 2016</a></span>
								</div>
							</div>
						</div>
						<div class="category-thumb-box">
							<div class="entry-cover"><a href="#"><img src="images/entertainments-thumb2.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">New York's acoustic buoydetects first whale</a></h3>
								<div class="post-meta">
									<span><a href="#">May 11, 2016</a></span>
								</div>
							</div>
						</div>
						<div class="category-thumb-box">
							<div class="entry-cover"><a href="#"><img src="images/entertainments-thumb3.jpg" alt="Categories" /></a></div>
							<div class="entry-header">
								<h3 class="entry-title"><a href="#">Kardashian Compares Herself To Ernest </a></h3>
								<div class="post-meta">
									<span><a href="#">March 26, 2016</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="row style-post">
					<div class="col-md-6 col-sm-12 col-xs-6">
						<div class="type-post">
							<div class="entry-cover"><a href="#"><img src="images/style-block3.jpg" alt="Style" /></a></div>
							<span>TRAVEL</span>
							<h3 class="entry-title"><a href="#">Mother Kirsty McDonald and baby son missing for two weeks</a></h3>
							<div class="post-meta">
								<span><a href="#">May 16, 2016</a></span>
								<span>By <a href="#">Elliot Alderson </a></span>
								<span><a href="#">156 Comments</a></span>
							</div>
							<div class="entry-content">
								<p>Today still wanted by the government they survive as soldiers of fortune. Today still wanted by the government they survive as soldiers of Texas tea.; Well we're  on up to the east side......</p>
								<a href="#">VIEW POST</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-6">
						<div class="type-post">
							<div class="entry-cover"><a href="#"><img src="images/style-block4.jpg" alt="Style" /></a></div>
							<span>LIFESTYLE</span>
							<h3 class="entry-title"><a href="#">Gold Coast woman rejected from Qantas and Emirates jobs </a></h3>
							<div class="post-meta">
								<span><a href="#">May 26, 2016</a></span>
								<span>By <a href="#">Elliot Alderson </a></span>
								<span><a href="#">56 Comments</a></span>
							</div>
							<div class="entry-content">
								<p>Today still wanted by the government they survive as soldiers of fortune. Today still wanted by the government they survive as soldiers of Texas tea.; Well we're  on up to the east side......</p>
								<a href="#">VIEW POST</a>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<nav class="ow-pagination ow-pagination2">
					<ul class="pager">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">....</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#">Next <i class="arrow_right"></i></a></li>
					</ul>
				</nav>
				-->
			</div>
			
			<!-- Widget Area -->
			<div class="col-md-3 col-sm-6 widget-area widget_space">
				<?php include 'rightbar.php'; ?>
			</div><!-- Widget Area /- -->
		</div><!-- Row /- -->
	</div><!-- Container /- -->
	
	<!--
	<div class="container-fluid no-left-padding no-right-padding latest-post">
		<div class="container">
			<div class="latest-post-carousel">
				<div class="col-md-12 col-sm-12 col-xs-12 no-padding latest-box">
					<a href="#"><img src="images/latest-post1.jpg" alt="Latest Post" /></a>
					<div class="post-meta">
						<span><a href="#"><i class="fa fa-heart-o"></i> 114</a></span>
						<span><a href="#"><i class="fa fa-commenting-o"></i> 76</a></span>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 no-padding latest-box">
					<a href="#"><img src="images/latest-post2.jpg" alt="Latest Post" /></a>
					<div class="post-meta">
						<span><a href="#"><i class="fa fa-heart-o"></i> 114</a></span>
						<span><a href="#"><i class="fa fa-commenting-o"></i> 76</a></span>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 no-padding latest-box">
					<a href="#"><img src="images/latest-post3.jpg" alt="Latest Post" /></a>
					<div class="post-meta">
						<span><a href="#"><i class="fa fa-heart-o"></i> 114</a></span>
						<span><a href="#"><i class="fa fa-commenting-o"></i> 76</a></span>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 no-padding latest-box">
					<a href="#"><img src="images/latest-post4.jpg" alt="Latest Post" /></a>
					<div class="post-meta">
						<span><a href="#"><i class="fa fa-heart-o"></i> 114</a></span>
						<span><a href="#"><i class="fa fa-commenting-o"></i> 76</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	-->
	
</main>

		

<?php
	include 'footer2.php';
?>