<?php
	include '../login/login_check.php';
	include '../db.php';	
	include '../global.php';
	include 'list_by_users_action.php';
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
                        Tasks List
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><a href="#">Tasks</a></li>                        
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
                                                <th>Users</th>
												<th># of Current Tasks</th>
												<th>Current Tasks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $i=1; ?>
											<?php while($row = mysql_fetch_array($list)) { ?>
	                                            <tr>
	                                                <td><?php echo $i; $i++; ?></td>
	                                                <td>
														<a href="list.php?id=<?php echo $row['id']; ?>">
															<?php echo $row['name']; ?>
														</a>
													</td>
													<td><?php echo $row['task_count']; ?></td>
													<td>
														<?php 
															$task_list=task_list($row['id']);
														?>
														<?php $j=1; ?>
														<table width='100%' cellpadding='6' cellspacing='6'>
															<?php while($row2 = mysql_fetch_array($task_list)) { ?>
																<tr style='border:1px solid; border-color:#ddd;'>
																	<td width='20px;' style='border:1px solid; border-color:#ddd;'>
																		<?php echo $j; $j++; ?>. 
																	</td>
																	<td style=' border:1px solid; border-color:#ddd;'>
																		<a href="view.php?id=<?php echo $row2['id']; ?>">
																			<?php echo $row2['task']; ?>
																		</a>
																	</td>
															<?php } ?>
														</table>
													</td>
	                                            </tr>
											<?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="70">Sl No.</th>
                                                <th>Users</th>
												<th># of Current Tasks</th>
												<th>Current Tasks</th>
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