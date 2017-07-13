<?php	
	include 'login_check.php';
	include 'db.php';
	include 'global.php';
	include 'newblog_action.php';
	include 'header.php';
	
?>
	
<!-- Page Banner -->
<div class="container-fluid no-padding page-banner contact-banner" style='margin-bottom: 40px;'>
	<!-- Container -->
	<div class="container">
		<h3>New Blog</h3>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">New Blog</li>
		</ol>
	</div><!-- Container /- -->
</div><!-- Page Banner /- -->

<main>
	
	<!-- Contact Section -->
	<div class="container-fluid no-left-padding no-right-padding contact-section" >
		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-6 contact-form">
					<h3>New Blog</h3>
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
					<form class="row" method="post" enctype='multipart/form-data'>
						<?php if($err != "" ){ ?>
							<div class="col-md-12 col-sm-12 col-xs-12 form-group" style='color:red;'>
								<?php echo $err; ?>
							</div>
						<?php } ?>
						<?php if(isset($_GET['success'])){ ?>
							<div class="col-md-12 col-sm-12 col-xs-12 form-group" style='color:green;'>
								Sucess !
								<br/>
								Your blog has been sent to admin for review !
								<br/>
								Your blog will be published once it is approved by admin !
							</div>
						<?php } ?>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<select class="form-control" id="category_id" name="category_id" onchange="load_subcategory(this)">
								<option value="">-- Select Category --</option>
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
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<select class="form-control" id="subcategory_id" name="subcategory_id" required="">
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
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<input type="text" class="form-control" placeholder="Title" name="title" id="title" required="" value="<?php echo $title; ?>" />
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<textarea class="form-control" placeholder="Description" name="descr" id="descr" required=""><?php echo $descr; ?></textarea>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<input type="file" accept="image/*" class="form-control" placeholder="Image" name="image" id="image" />
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<textarea class="form-control" placeholder="Blog" name="blog" id="blog" required="" ><?php echo $blog; ?></textarea>
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12 send-btn">
							<input type="submit" value="Submit" name="btn_submit" />
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="alert-msg" id="alert-msg"></div>
						</div>
					</form>
				</div>
			</div>
		</div><!-- Container /- -->
	</div><!-- Contact Form /- -->
	
</main>


		
<?php
	include 'footer2.php';
?>