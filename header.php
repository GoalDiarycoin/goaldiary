<!DOCTYPE html>
<!--[if lt IE 9 ]> <html class="lt_ie9"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title><?php echo $global_title; ?></title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images/favicon.ico?123" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon.ico?123">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon.ico?123">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images/favicon.ico?123">
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i,https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
	
	<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
	
	<!-- Library -->
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">			
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
	<link rel="stylesheet" type="text/css" href="css/shortcode.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->

	<?php 
		echo $global_head_css_js;
	?>
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->

		<!-- Header Section -->
		<header class="container-fluid no-padding header-section header-section2">
		
			<!-- SidePanel -->
			<div id="slidepanel">
			
				<!-- Top Header -->
				<div class="container-fluid no-padding top-header">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12 cloud-text">
								<h4>
									<span><?php echo date("d M, Y"); ?></span>
								</h4>
								<span style='color:white'>
									<?php 
										if(isset($_SESSION['user_id'])) 
										{
											echo "Logged in as : ";
											echo "<a href='profile.php'>";
											echo $_SESSION['user_name'];
											echo "</a>";
											echo " ( <a href='logout.php'>Logout</a> )";
										}else
										{
											echo "<a href='signin.php'>Sign In</a>";
											echo " / ";
											echo "<a href='register.php'>Sign Up</a>";
										}
									?>
								</span>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 social-block">
								<ul>
									<li><a href="<?php echo $global_facebook; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo $global_twitter; ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo $global_googleplus; ?>" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									<!--
									<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
									-->
								</ul>
							</div>							
						</div>
					</div><!-- Container /- -->
				</div><!-- Top Header /- -->				
			</div><!-- SidePanel /- -->
			
			<div class="container-fluid no-padding menu-block">
				<!-- Container -->
				<div class="container">	
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="logo" /></a>
						</div>
						<div class="menu-icon">
							<div class="search"><a href="javascript:void(0);" id="search" title="Search"><i class="icon icon-Search"></i></a></div>
							<div class="menu-switch"><a href="javascript:void(0);"><i class="fa fa-bars"></i></a></div>
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
						<div id="loginpanel" class="desktop-hide">
							<div class="right" id="toggle">
								<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
								<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
							</div>
						</div>
					</nav><!-- nav /- -->
					<!-- Search Box -->
					<div class="search-box">
						<span><i class="icon_close"></i></span>
						<form action="search.php" method="get" ><input type="text" name="qry" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
					</div><!-- Search Box /- -->
				</div><!-- Container /- -->
			</div>
		</header><!-- Header Section /- -->