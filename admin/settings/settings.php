<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'settings_action.php';
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
                Settings
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Settings</li>
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
							<form role="form" action="settings.php" method="post">
								<div class="box-header">
	                                <h3 class="box-title">Details</h3>
	                            </div>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Enter Name" value="<?php echo $admin_name; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Mail Id</label>
                                        <input type="text" class="form-control" id="admin_mailid" name="admin_mailid" placeholder="Enter Mail Id" value="<?php echo $admin_mailid; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="text" class="form-control" id="admin_phno" name="admin_phno" placeholder="Enter Phone Number" value="<?php echo $admin_phno; ?>">
                                    </div>                                        
                                </div>
								<div class="box-header">
	                                <h3 class="box-title">Address</h3>
	                            </div>
								<div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Street</label>
                                        <input type="text" class="form-control" id="street" name="street" placeholder="Enter Street" value="<?php echo $street; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="<?php echo $city; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">State</label>
                                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" value="<?php echo $state; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">PIN</label>
                                        <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter PIN" value="<?php echo $pin; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" value="<?php echo $country; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Google Maps Embed</label>
                                        <textarea type="text" class="form-control" id="maps" name="maps" placeholder="Enter Google Maps Embed Code" ><?php echo $maps; ?></textarea>
                                    </div> 
                                </div>
								<div class="box-header">
	                                <h3 class="box-title">SEO</h3>
	                            </div>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo $title; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Meta</label>
                                        <input type="text" class="form-control" id="meta" name="meta" placeholder="Enter Meta" value="<?php echo $meta; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Keywords</label>
                                        <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter Keywords" value="<?php echo $keywords; ?>">
                                    </div> 
                                </div>
								<div class="box-header">
	                                <h3 class="box-title">Social</h3>
	                            </div>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Facebook URL</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook URL" value="<?php echo $facebook; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Twitter URL</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Twitter URL" value="<?php echo $twitter; ?>">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Googleplus URL</label>
                                        <input type="text" class="form-control" id="googleplus" name="googleplus" placeholder="Enter Googleplus URL" value="<?php echo $googleplus; ?>">
                                    </div> 
                                </div>
								
								<div class="box-header">
	                                <h3 class="box-title">Code</h3>
	                            </div>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Head CSS/js</label>
                                        <textarea class="form-control" id="head_css_js" name="head_css_js" placeholder="Enter Head CSS/js" ><?php echo $head_css_js; ?></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Footer CSS/js</label>
                                        <textarea type="text" class="form-control" id="footer_css_js" name="footer_css_js" placeholder="Enter Footer CSS/js" ><?php echo $footer_css_js; ?></textarea>
                                    </div> 
                                </div>
                                <div class="box-footer">
                                    <button type="submit" name="btn_update" class="btn btn-primary">Submit</button>
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
     
