<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'edit_action.php';
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
                Edit Sub Stream
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="list.php">Sub Stream</a></li>
                <li class="active">Edit</li>
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
							<form role="form" action="edit.php?id=<?php echo $_GET['id']; ?>" method="post" enctype='multipart/form-data'>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Select Stream</label>
                                        <select class="form-control" id="stream_id" name="stream_id">
											<option value="">-- Select Stream --</option>
											<?php while($row = mysql_fetch_array($stream_list)) { ?>
												<option value="<?php echo $row['id']; ?>"
													<?php 
														if($row['id']== $stream_id)
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
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Sub Stream Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Sub Stream Name" value="<?php echo $name; ?>">
                                    </div>    
									<div class="form-group">
                                        <label for="exampleInputEmail1">Enter Description</label>
                                        <textarea type="text" class="form-control" id="descr" name="descr" placeholder="Enter Description"><?php echo $descr; ?></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Select Image (469*349)</label>
										<?php if($image!="") { ?>
											<br/>
											<img src="../../images/subcategory/<?php echo $image; ?>" style="width:400px"/>
										<?php } ?>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" placeholder="Select Image">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Select Banner (1920*150)</label>
										<?php if($banner!="") { ?>
											<br/>
											<img src="../../images/subcategory/<?php echo $banner; ?>" style="width:400px"/>
											<br/>
										<?php } ?>
                                        <input type="file" class="form-control" id="banner" name="banner" accept="image/*" placeholder="Select Image">
                                    </div> 
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="btn_update" class="btn btn-primary">Submit</button>
									<a href="list.php" class="btn btn-danger">Cancel</a>
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
     
