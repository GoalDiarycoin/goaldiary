<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'my_tasks_action.php';
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
                        My Tasks List
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><a href="#">My Tasks</a></li>                        
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
															alert("Cant delete. It's in use' !");
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
												<th>Task</th>
												<th>Stream</th>
												<th width='110'>Sub Stream</th>
												<th>Created By</th>
												<th>Assigned To</th>
												<th>Moderator</th>
												<th width='110'>Status</th>
												<th width='110'>Due Date</th>
												<th width='110'>Added On</th>
												<th width='200'>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $i=1; ?>
											<?php while($row = mysql_fetch_array($list)) { ?>
	                                            <tr>
	                                                <td><?php echo $i; $i++; ?></td>
	                                                <td><?php echo $row['task']; ?></td>
													<td><?php echo $row['stream_name']; ?></td>
													<td><?php echo $row['substream_name']; ?></td>
													<td><?php echo $row['created']; ?></td>
													<td><?php echo $row['assigned_to']; ?></td>
													<td><?php echo $row['moderator']; ?></td>
													<td 
														<?php 
															if($resolution_mandatory == $row['status_id'] && $row['verified']=='1')
															{ 
																echo "style='background-color:skyblue;'"; 
															}
															else if($resolution_mandatory == $row['status_id'])
															{
																echo "style='background-color:lightgreen;'";
															}
														?>
													>
														<?php echo $row['status']; ?>
														<?php if($resolution_mandatory == $row['status_id'] && $row['verified']=='1') { ?>
															<br/>
															<b>(Verified)</b>
														<?php } ?>
													</td>
													<td
														<?php if($resolution_mandatory != $row['status_id']) { ?>
															<?php if(strtotime($row['dat']) <= strtotime(date("m/d/Y"))) { ?>
																style='background-color:pink !important'
															<?php } else if($row['ongoing']=="1") { ?>
																style='background-color:lightyellow !important'
															<?php } ?>
														<?php } ?>
													><?php $date=date_create($row['dat']); echo date_format($date,"d M Y"); ?></td>
													<td><?php $date=date_create($row['timestamp']); echo date_format($date,"d M Y"); ?></td>
	                                                <td>
														<a class="btn-info btn-sm" href="view.php?id=<?php echo $row['id']; ?>">View</a>
														<?php if($_SESSION['role']==1) { ?>
															<a class="btn-warning btn-sm" href="edit_admin.php?id=<?php echo $row['id']; ?>">Edit</a>
														<?php } else { ?>
															<?php if($row['assign_id'] == $_SESSION['user_id']) { ?>
																<a class="btn-warning btn-sm" href="edit_user.php?id=<?php echo $row['id']; ?>">Update Status</a>
															<?php } ?>
														<?php } ?>
													</td>
	                                            </tr>
											<?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sl No.</th>
                                                <th>Task</th>
												<th>Stream</th>
												<th>Sub Stream</th>
												<th>Created By</th>
												<th>Assigned To</th>
												<th>Moderator</th>
												<th>Status</th>
												<th>Due Date</th>
												<th>Added On</th>
                                                <th>Options</th>
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