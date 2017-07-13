<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'sidebar_action.php';
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
                Sidebar Text
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sidebar Text</li>
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
							<form role="form" action="sidebar.php" method="post">
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Text For Category</label>
                                        <textarea cols="3" class="form-control" id="side_cat" name="side_cat" ><?php echo $side_cat; ?></textarea>
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Text For Subject</label>
                                        <textarea cols="3" class="form-control" id="side_sub" name="side_sub"><?php echo $side_sub; ?></textarea>
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Text For Question Set</label>
                                        <textarea cols="3" class="form-control" id="side_qn_set" name="side_qn_set"><?php echo $side_qn_set; ?></textarea>
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
     
