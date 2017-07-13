<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'view_action.php';
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
                View Story
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="list.php">Story</a></li>
                <li class="active">View</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body table-responsive">
							<div class="box-body">
								<div class="form-group">
									<table border="1" width="100%" cellpadding='6' cellspacing='6'>
										<tr>
											<td style="font-weight:bold;font-size:15px;" width="100">
												Title
											</td>
											<td>
												<b style='color:red; font-size:16px;'><?php echo $title; ?></b>
											</td>
										</tr>
										<tr>
											<td style="font-weight:bold;font-size:15px;" width="100">
												Description
											</td>
											<td>
												<?php echo $descr; ?>
											</td>
										</tr>
										<tr>
											<td style="font-weight:bold;font-size:15px;" width="100">
												Created On
											</td>
											<td>
												<?php echo $timestamp; ?>
											</td>
										</tr>
										<tr>
											<td style="font-weight:bold;font-size:15px;" width="100">
												Image
											</td>
											<td>
												<img src="../../images/story/<?php echo $image; ?>" width="400"/>
											</td>
										</tr>
										<tr>
											<td style="font-weight:bold;font-size:15px;" width="100">
												Story
											</td>
											<td>
												<?php echo $story; ?>
											</td>
										</tr>
									</table>
									<!--<h2>Update History</h2>
									<hr/>
									<?php if($update_list_rows>0) { ?>
										<div style="overflow-y:auto;max-height:500px;">
											<table border='1' cellpadding=6 cellspaceing=6 width="100%">
												<tr>
													<th>
														Updated By
													</th>
													<th>
														Updates
													</th>
													<th>
														Updated On
													</th>
												</tr>
												<?php while($row = mysql_fetch_array($update_list)) { ?>
													<tr>
														<td>
															<?php echo $row['updated_by']; ?>
														</td>
														<td>
															<?php echo $row['updates']; ?>
														</td>
														<td>
															<?php echo $row['timestamp']; ?>
														</td>
													</tr>
												<?php } ?>
											</table>
										</div>
									<?php } else { ?>
										NIL
									<?php } ?>-->
								</div>                      
							</div><!-- /.box-body -->
							<div class="box-footer">
								<a onclick="history.go(-1);" href="#" class="btn btn-danger">Back</a>
								<a href="edit.php?id=<?php echo $_GET['id']; ?>" class="btn btn-warning">Edit</a>
							</div>
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
     
