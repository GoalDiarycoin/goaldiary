<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'about_us_action.php';
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
                About Us
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">About Us</li>
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
							<form role="form" action="about_us.php" method="post">
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Breif</label>
                                        <textarea cols="3" class="form-control" id="about_us_breif" name="about_us_breif" placeholder="About Us Breif"><?php echo $about_us_breif; ?></textarea>
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Detailed</label>
                                        <textarea cols="3" class="form-control" id="about_us_detailed" name="about_us_detailed" placeholder="About Us Detailed"><?php echo $about_us_detailed; ?></textarea>
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Footer plugin</label>
                                        <textarea cols="3" class="form-control" id="footer_plugin" name="footer_plugin" placeholder="Footer Plugin"><?php echo $footer_plugin; ?></textarea>
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Video URL</label>
                                        <input type="text" class="form-control" id="about_video" name="about_video" placeholder="About Us Video URL" value="<?php echo $about_video; ?>" />
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Video Text</label>
                                        <input type="text" class="form-control" id="about_video_text" name="about_video_text" placeholder="About Us Video Text" value="<?php echo $about_video_text; ?>" />
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
     
