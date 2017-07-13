<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'defaults_action.php';
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
                Default Settings
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Default Settings</li>
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
							<form role="form" action="defaults.php" method="post">
								<div class="box-header">
	                                <h3 class="box-title">Status</h3>
	                            </div>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Default Status</label>
                                        <select class="form-control" id="default_status" name="default_status">
											<option value="">-- Select Status --</option>
											<?php while($row = mysql_fetch_array($status_list)) { ?>
												<option value="<?php echo $row['id']; ?>"
													<?php 
														if($row['id']== $default_status)
														{
															echo "selected";
														}
													?>
												>
													<?php echo $row['name']; ?>
												</option>
											<?php } ?>
										</select>
                                    </div> 
									<?php mysql_data_seek ($status_list, 0); ?>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Inactive Status</label>
                                        <select class="form-control" id="inactive_status" name="inactive_status">
											<option value="">-- Select Status --</option>
											<?php while($row = mysql_fetch_array($status_list)) { ?>
												<option value="<?php echo $row['id']; ?>"
													<?php 
														if($row['id']== $inactive_status)
														{
															echo "selected";
														}
													?>
												>
													<?php echo $row['name']; ?>
												</option>
											<?php } ?>
										</select>
                                    </div>
									<?php mysql_data_seek ($status_list, 0); ?>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Trending Status</label>
                                        <select class="form-control" id="trending_status" name="trending_status">
											<option value="">-- Select Status --</option>
											<?php while($row = mysql_fetch_array($status_list)) { ?>
												<option value="<?php echo $row['id']; ?>"
													<?php 
														if($row['id']== $trending_status)
														{
															echo "selected";
														}
													?>
												>
													<?php echo $row['name']; ?>
												</option>
											<?php } ?>
										</select>
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
     
