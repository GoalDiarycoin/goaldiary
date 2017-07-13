<?php	
	include 'login/login_check.php';
	include 'db.php';
	include 'global.php';
	include 'index_action.php';
	include 'header.php';
	
?>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php 
		include 'sidebar.php';
	?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Welcome, <?php echo $_SESSION['full_name']; ?> !!
                <small>Dashboard</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
			<!-- Small boxes (Stat box) -->
            <div class="row">
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
							<h3>
								 <?php echo $level_list_rows; ?>
							</h3>
							<p>
								Categories
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="category/list.php" class="small-box-footer">
							More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3>
								<?php echo $category_list_rows; ?>
							</h3>
							<p>
								Sub Categories
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="subcategory/list.php" class="small-box-footer">
							More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div><!-- ./col -->
				
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3>
								<?php echo $customer_list_rows; ?>
							</h3>
							<p>
								Users
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="users/list.php" class="small-box-footer">
							More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
							<h3>
								<?php echo $blog_list_rows; ?>
							</h3>
							<p>
								All Blogs
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="blog/list.php" class="small-box-footer">
							More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
            </div><!-- /.row -->
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php 
	include 'footer.php';
?>
        