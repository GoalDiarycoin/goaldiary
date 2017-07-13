<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'ads_action.php';
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
                Ads
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Ads</li>
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
							<form role="form" action="ads.php" method="post" enctype='multipart/form-data'>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Center Ad Type</label>
										<br/>
										<input type="radio" class="form-control" name="ad_c_type" value="image"
											<?php 
												if($ad_c_type=="image")
												{
													echo "checked";
												}
											?>
										>
										Image
										<input type="radio" class="form-control" name="ad_c_type" value="iframe"
											<?php 
												if($ad_c_type=="iframe")
												{
													echo "checked";
												}
											?>
										>
										Iframe
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Center (820X152)</label>
										<br/>
										<img src="../../images/adss/left.png" height="150"/>
                                        <input type="file" accept="image/*" class="form-control" id="left" name="left" placeholder="Select Central Ad" >
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Center Link for image ad</label>
                                        <input type="text" class="form-control" id="ad_c_link" name="ad_c_link" placeholder="Enter Ad Link" value="<?php echo $ad_c_link; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Center Iframe Ad</label>
                                        <textarea class="form-control" id="ad_c_iframe" name="ad_c_iframe" placeholder="Enter Iframe Ad" ><?php echo $ad_c_iframe; ?></textarea>
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Right Ad Type</label>
										<br/>
										<input type="radio" class="form-control" name="ad_r_type" value="image"
											<?php 
												if($ad_r_type=="image")
												{
													echo "checked";
												}
											?>
										>
										Image
										<input type="radio" class="form-control" name="ad_r_type" value="iframe"
											<?php 
												if($ad_r_type=="iframe")
												{
													echo "checked";
												}
											?>
										>
										Iframe
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Right (308x307)</label>
										<br/>
										<img src="../../images/adss/right.png" height="150"/>
                                        <input type="file" accept="image/*" class="form-control" id="right" name="right" placeholder="Select Right Ad" >
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Right Link for image ad</label>
                                        <input type="text" class="form-control" id="ad_r_link" name="ad_r_link" placeholder="Enter Right Ad Link" value="<?php echo $ad_r_link; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Right Iframe Ad</label>
                                        <textarea class="form-control" id="ad_r_iframe" name="ad_r_iframe" placeholder="Enter Iframe Ad" ><?php echo $ad_r_iframe; ?></textarea>
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
     
