<?php
	include 'db.php';
	
	$id=$_POST['id'];
	
	$qry="select * from subcategory where category_id=$id order by name asc";
	$list = mysql_query($qry);	
?>

<div class="col-md-12 col-sm-12 col-xs-12 form-group">
    <select class="form-control" id="subcategory_id" name="subcategory_id">
		<option value="">-- Select Sub Category --</option>
		<?php while($row = mysql_fetch_array($list)) { ?>
			<option value="<?php echo $row['id']; ?>">
				<?php echo $row['name']; ?>
			</option>
		<?php } ?>
	</select>
</div> 