<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'list_action.php';
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
				Blogs List
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active"><a href="#">Blogs</a></li>                        
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body table-responsive">
							<script>
								function delet(n)
								{
									if(confirm("ARE YOU SURE"))
									{
										$.post("delete.php",
											{
												id:n
											},
											function(data)
											{
												data=data.trim();
												
												if(data=="")
												{
													alert('Deleted successfully !');
													location.href="list.php";
												}
												else
												{
													alert("Cant delete. It's in use !");
													location.href="list.php";
												}	
											}
										);
									}
								}
								
								function verify(n)
								{
									if(confirm("ARE YOU SURE"))
									{
										$.post("verify.php",
											{
												id:n
											},
											function(data)
											{
												data=data.trim();
												
												if(data=="")
												{
													alert('Success !');
													location.href="list.php";
												}
												else
												{
													alert("Cant Verify !");
													location.href="list.php";
												}	
											}
										);
									}
								}
							</script>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th width="70">Sl No.</th>
										<th>Title</th>
										<th>Category</th>
										<th width='110'>Sub Category</th>
										<th>Created By</th>
										<th width='110'>Status</th>
										<th width='110'>Added On</th>
										<th width='200'>Options</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php while($row = mysql_fetch_array($list)) { ?>
										<tr>
											<td><?php echo $i; $i++; ?></td>
											<td><?php echo $row['title']; ?></td>
											<td><?php echo $row['category_name']; ?></td>
											<td><?php echo $row['subcategory_name']; ?></td>
											<td><?php echo $row['created_by']; ?></td>
											<td 
												<?php 
													if($row['status_id'] == $global_default_status)
													{ 
														echo "style='background-color:lightgray;'"; 
													}
													else if($row['status_id'] == $global_inactive_status)
													{
														echo "style='background-color:pink;'";
													}
													else
													{
														echo "style='background-color:lightgreen;'";
													}
												?>
											>
												<?php echo $row['status']; ?>
											</td>
											<td><?php $date=date_create($row['timestamp']); echo date_format($date,"d M Y"); ?></td>
											<td>
												<a class="btn-info btn-sm" href="view.php?id=<?php echo $row['id']; ?>">View</a>
												<a class="btn-warning btn-sm" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
												<a class="btn-danger btn-sm" href="#" onclick="delet(<?php echo $row['id']; ?>)">Delete</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th width="70">Sl No.</th>
										<th>Title</th>
										<th>Category</th>
										<th width='110'>Sub Category</th>
										<th>Created By</th>
										<th width='110'>Status</th>
										<th width='110'>Added On</th>
										<th width='200'>Options</th>
									</tr>
								</tfoot>
							</table>
						</div><!-- /.box-body -->
					</div><!-- /.box -->
				</div>
			</div>

		</section><!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<?php 
	include '../footer.php';
?>