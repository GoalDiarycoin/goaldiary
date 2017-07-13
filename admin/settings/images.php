<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'images_action.php';
	include '../header.php';
?>

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php 
		include '../sidebar.php';
	?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Images
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Images</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
			<div class="row">
				<div class="col-xs-12">
					<?php if($err!='') { ?>
						<b style='color:red'><?php echo $err;  ?></b>
					<?php } ?>
					<div class="box">
						<div class="box-body table-responsive">
							<form role="form" action="images.php" method="post" enctype='multipart/form-data'>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Logo (height: 96px)</label>
										<br/>
										<img src='../../images/logo.png' height="100"/>
                                        <input type="file" accept="image/*" class="form-control" id="logo" name="logo" placeholder="Select Logo" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Favicon (height: 25px)</label>
										<br/>
										<img src='../../images/favicon.ico' height="100"/>
                                        <input type="file" accept="image/*" class="form-control" id="favicon" name="favicon" placeholder="Select Favicon" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Blog Banner (1920*150)</label>
										<br/>
										<img src='../../images/category/blog_banner.jpg' height="100"/>
                                        <input type="file" accept="image/*" class="form-control" id="blog" name="blog" placeholder="Select Blog Banner" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">User Banner (1920*150)</label>
										<br/>
										<img src='../../images/user_banner.jpg' height="100"/>
                                        <input type="file" accept="image/*" class="form-control" id="user" name="user" placeholder="Select User Banner" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Contact Us (1920*150)</label>
										<br/>
										<img src='../../images/contact-banner.jpg' height="100"/>
                                        <input type="file" accept="image/*" class="form-control" id="contact" name="contact" placeholder="Select Contact Banner" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">About Us Header (1920*150)</label>
										<br/>
										<img src='../../images/about_us_banner.jpg' height="100"/>
                                        <input type="file" accept="image/*" class="form-control" id="about" name="about" placeholder="Select About Us Banner" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">About Us Video Background(1920*517)</label>
										<br/>
										<img src='../../images/abt-video.jpg' height="200"/>
                                        <input type="file" accept="image/*" class="form-control" id="aboutvideo" name="aboutvideo" placeholder="Select About Us Video Banner" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">About Us Video Main Image(915*513)</label>
										<br/>
										<img src='../../images/about-img.jpg' height="200"/>
                                        <input type="file" accept="image/*" class="form-control" id="aboutmain" name="aboutmain" placeholder="Select About Us Main Image" >
                                    </div> 
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="btn_update" class="btn btn-primary">Submit</button>
									<a href="../index.php" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</div>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php 
	include '../footer.php';
?>
     
