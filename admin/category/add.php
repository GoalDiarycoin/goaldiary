<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'add_action.php';
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
                Add Category
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="list.php">Category</a></li>
                <li class="active">Add</li>
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
							<form role="form" action="add.php" method="post" enctype='multipart/form-data'>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Category Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name" value="<?php echo $name; ?>">
                                    </div>   
									<div class="form-group">
                                        <label for="exampleInputEmail1">Enter Description</label>
                                        <textarea type="text" class="form-control" id="descr" name="descr" placeholder="Enter Description"><?php echo $descr; ?></textarea>
                                    </div>  
									<div class="form-group">
                                        <label for="exampleInputEmail1">Enter Details</label>
                                        <textarea type="text" class="form-control" id="details" name="details" placeholder="Enter Details"><?php echo $details; ?></textarea>
                                    </div>  
									<div class="form-group">
                                        <label for="exampleInputEmail1">Select Image (469*349)</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" placeholder="Select Image">
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Select Banner (1920*150)</label>
                                        <input type="file" class="form-control" id="banner" name="banner" accept="image/*" placeholder="Select Image">
                                    </div> 
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="btn_add" class="btn btn-primary">Submit</button>
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
     
