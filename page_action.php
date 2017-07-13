<?php
	if(! isset($_GET['id']))
	{
		echo "<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$id=$_GET['id'];
	
	$query="
		select 
			title
			,descr
			,timestamp
			,image
			,page
		from 
			page
		where 
			id=$id 
	";
	$details=mysql_query($query);
	$cnt=mysql_num_rows($details);
	
	if($cnt!=1)
	{
		echo"<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$row=mysql_fetch_array($details);
	
	$title=$row['title'];
	$descr=$row['descr'];
	$timestamp=$row['timestamp'];
	$image=$row['image'];
	$page=$row['page'];
	
	$global_title="$title | $global_title";
?>
