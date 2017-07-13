<?php	
	$id=$_GET['id'];
	
	$query="
		select 
			title
			,timestamp
			,image
			,story
			,descr
		from 
			story
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
	$story=$row['story'];
?>