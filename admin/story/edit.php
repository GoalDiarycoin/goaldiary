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
                Edit Blog
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="list.php">Blogs</a></li>
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
                                        <label for="exampleInputEmail1">Enter Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo $title; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea type="text" class="form-control" id="descr" name="descr" placeholder="Enter Description"><?php echo $descr; ?></textarea>
                                    </div> 
									<div class="form-group">
                                        <label for="exampleInputEmail1">Select Image</label>
										<?php if ($image!="") {?>
											<br/>
											<img style="width:400px" src="../../images/story/<?php echo $image; ?>" />
										<?php } ?>
                                        <input type="file" accept="image/*" class="form-control" placeholder="Image" name="image" id="image" />
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Story</label>
                                        <textarea type="text" class="form-control" rows='15' id="story" name="story" placeholder="Story"><?php echo $story; ?></textarea>
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
     
