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
                Add Blog
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="list.php">Blogs</a></li>
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
					<script>
						function load_subcategory(n)
						{
							n=n.value;
							$.post("load_subcategory.php",
								{
									id:n
								},
								function(data)
								{
									$('#load_subcategory').html(data);
								}
							);
						}
					</script> 
					<div class="box">
						<div class="box-body table-responsive">
							<form role="form" action="add.php" method="post" enctype='multipart/form-data'>
                                <div class="box-body">
									<div class="form-group">
                                        <label for="exampleInputEmail1">Select Category</label>
                                        <select class="form-control" id="category_id" name="category_id" onchange="load_subcategory(this)" >
											<option value="">-- Select Stream --</option>
											<?php while($row = mysql_fetch_array($category_list)) { ?>
												<option value="<?php echo $row['id']; ?>"
													<?php 
														if($row['id']== $category_id)
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
									<?php if($category_id=='') { ?>
										<span id="load_subcategory">
										
										</span>
									<?php } else { ?>
										<span id="load_subcategory">
											<div class="form-group">
												<label for="exampleInputEmail1">Select Sub Category</label>
												<select class="form-control" id="subcategory_id" name="subcategory_id">
													<option value="">-- Select Sub Category --</option>
													<?php while($row = mysql_fetch_array($subcategory_list)) { ?>
														<option value="<?php echo $row['id']; ?>"
															<?php 
																if($row['id']==$subcategory_id)
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
										</span>
									<?php } ?>
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
                                        <input type="file" accept="image/*" class="form-control" placeholder="Image" name="image" id="image" required="" />
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="form-control" id="status_id" name="status_id">
											<option value="">-- Select Status --</option>
											<?php while($row = mysql_fetch_array($status_list)) { ?>
												<option value="<?php echo $row['id']; ?>"
													<?php 
														if($row['id']== $status_id)
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
                                        <label for="exampleInputEmail1">Blog</label>
                                        <textarea type="text" class="form-control" rows='15' id="blog" name="blog" placeholder="Blog"><?php echo $blog; ?></textarea>
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
     
