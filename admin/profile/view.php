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
                Your Profile
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>Your Profile</li>
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
							<form role="form" action="view.php" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
                                    </div>  
									<div class="form-group">
                                        <label for="exampleInputEmail1">Enter Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="<?php echo $password; ?>">
                                    </div>   
									<div class="form-group">
                                        <label for="exampleInputEmail1">ReEnter Password</label>
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Re Enter Password" value="<?php echo $password2; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Enter Mailid</label>
                                        <input type="text" class="form-control" id="mailid" name="mailid" placeholder="Enter Mailid" value="<?php echo $mailid; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Enter Phone Number</label>
                                        <input type="text" class="form-control" id="phno" name="phno" placeholder="Enter Phone Number" value="<?php echo $phno; ?>">
                                    </div>
                                </div><!-- /.box-body -->
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
     
